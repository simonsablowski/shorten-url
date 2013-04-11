<?php

class UrlManager {
	protected $configuration;
	protected $cache;
	protected $database;
	
	public function __construct($configuration) {
		$this->configuration = $configuration;
		
		if (isset($this->configuration['cache'])) {
			$this->cache = new Cache($this->configuration['cache']);
		}
		if (isset($this->configuration['database'])) {
			$this->database = new Database($this->configuration['database']);
		} else {
			throw new Exception('Mandatory database configuration missing');
		}
	}
	
	protected function getUrlByCode($code) {
		$statement = sprintf('SELECT * FROM `url` WHERE `code` = \'%s\' LIMIT 1', addslashes($code));
		$key = md5($statement);
		
		if (is_object($this->cache)) {
			$result = $this->cache->query($key);
		}
		if (!is_object($this->cache) || is_null($result)) {
			$result = $this->database->fetch($this->database->query($statement));
			if (is_object($result) && is_object($this->cache)) {
				$this->cache->store($key, $result);
			}
		}
		
		return isset($result->url) ? $result->url : null;
	}
	
	protected function redirectToUrl($url) {
		header(sprintf('Location: %s', $url));
		exit;
	}
	
	public function retrieveUrl($code) {
		if ($url = $this->getUrlByCode($code)) {
			$this->redirectToUrl($url);
		}
	}
	
	public function saveUrl($code, $url) {
		$statement = sprintf('INSERT INTO `url` (`code`, `url`) VALUES (\'%s\', \'%s\')', addslashes($code), addslashes($url));
		return $this->database->query($statement);
	}
}