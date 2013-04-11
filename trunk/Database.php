<?php

class Database {
	protected $configuration;
	protected $link;
	
	public function __construct($configuration) {
		$this->configuration = $configuration;
		$this->connect();
	}
	
	// todo: make abstract
	public function connect() {
		$this->link = mysql_connect($this->configuration['host'], $this->configuration['user'], $this->configuration['password']);
		mysql_select_db($this->configuration['name'], $this->link);
	}
	
	// todo: make abstract
	public function query($statement) {
		return mysql_query($statement, $this->link);
	}
	
	// todo: make abstract
	public function fetch($result) {
		return mysql_fetch_object($result);
	}
}