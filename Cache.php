<?php

class Cache {
	protected $configuration;
	protected $instance;
	
	public function __construct($configuration) {
		$this->configuration = $configuration;
		$this->initialize();
	}
	
	// todo: make abstract
	public function initialize() {
		$this->instance = new Memcache;
		$this->instance->connect($this->configuration['host'], $this->configuration['port']);
	}
	
	// todo: make abstract
	public function query($key) {
		return $this->instance->get($key);
	}
	
	// todo: make abstract
	public function store($key, $result) {
		return $this->instance->set($key, $result);
	}
}