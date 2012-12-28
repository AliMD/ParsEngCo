<?php

/*
 * 1Cache - Fast PHP caching
 * By Nazarkin Roman & Ali Mihandoost
 * http//ali.md/1cache
*/

class MicroCache {
	public $patch = 'cachetmp/';
	public $lifetime = 3600; // default value - 1 hour
	public $c_type = 'memcache';
	public $cache_on = true;
	public $is_cached = false;
	public $memcache_compressed = false;
	public $file, $key;
	private $memcache;

	function __construct($key=false) {

		class_exists('Memcache') or $this->c_type = 'file';

		if($this->c_type != 'file'){
			$this->memcache = new Memcache;
			@$this->memcache->connect('localhost', 11211) or $this->c_type = 'file';
		}

		$this->key = md5( $key===false ? $_SERVER["REQUEST_URI"] : $key);
		$this->file = $this->patch . $this->key . '.cache';
	}

	public function check() {
		return $this->is_cached = !$this->cache_on ? false
			: $this->c_type == 'file' ?
				( is_readable($this->file) and is_writable($this->file) and (time()-filemtime($this->file) < $this->lifetime) )
				: $this->is_cached = ( $this->cache_on and $this->memcache->get($this->key) );
	}

	public function out() {
		return !$this->is_cached ? ''
			: $this->c_type == 'file' ?
				file_get_contents($this->file)
				: $this->memcache->get($this->key);
	}

	public function start() {
		ob_start();
	}

	public function end() {
		$buffer = ob_get_contents();
		ob_end_clean();

		$this->cache_on and $this->write($buffer);

		die ($buffer);
	}

	public function write($buffer = ''){
		if($this->c_type == 'file') {
			$fp = @fopen($this->file, 'w') or die("Cannot create cache file : {$this->file}");
			if ( @flock($fp, LOCK_EX)) {
				fwrite($fp, $buffer);
				fflush($fp);
				flock($fp, LOCK_UN);
				fclose($fp);
			}
		} else $this->memcache->set($this->key, $buffer, $this->memcache_compressed, $this->lifetime);
	}

	public function clear($key=false){
		$key = $key === false ? $this->key : md5($key);
		$file = $this->patch . $this->key . '.cache';
		if ($this->c_type == 'file') @unlink($file);
		else $this->memcache->delete($key);
	}

}
