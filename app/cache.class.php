<?php

/* ===================================
* Author: Nazarkin Roman
* -----------------------------------
* Contacts:
* email - roman@nazarkin.su
* icq - 642971062
* skype - roman444ik
* -----------------------------------
* GitHub:
* https://github.com/NazarkinRoman
* ===================================
*/

class MicroCache {
  public $patch = 'cachetmp/';
  public $lifetime = 180; // default value - 1 hour
  public $c_type = 'memcache';
  public $cache_on = true;
  public $is_cached = false;
  public $file, $key;
  private $memcache;

  function __construct($key) {
    if(!class_exists('Memcache')) $this->c_type = 'file';

    if($this->c_type != 'file'){
      $this->memcache = new Memcache;
      if ( !@$this->memcache->connect('localhost', 11211))
        $this->c_type = 'file';
    }

    $this->key = md5($key);
    $this->file = $this->patch . $this->key;
  }

  public function check() {
    if ($this->c_type == 'file') {
      if ( $this->cache_on and is_readable($this->file) and is_writable($this->file) and time() - filemtime($this->file) < $this->lifetime ) {
        $this->is_cached = true;
        return true;
      }
      else
        return false;
    }
    else {
      if ( $this->cache_on and $this->memcache->get($this->key)) {
        $this->is_cached = true;
        return true;
      }
      else
        return false;
    }
  }

  public function out() {
    if ($this->c_type == 'file') {
      if ($this->is_cached)
        return file_get_contents($this->file);
      else
        return '';
    }
    else {
      if ($this->is_cached)
        return $this->memcache->get($this->key);
      else
        return '';
    }
  }

  public function start() {
      ob_start();
  }

  public function end() {
    $buffer = ob_get_contents();
    ob_end_clean();

    if ($this->cache_on) {
      if ($this->c_type == 'file') {
        $fp = fopen($this->file, 'w');
        if ( flock($fp, LOCK_EX)) {
          fwrite($fp, $buffer);
          flock($fp, LOCK_UN);
          fclose($fp);
        }
      }
      else
        $this->memcache->set($this->key, $buffer, false, $this->lifetime);
    }
    die ($buffer);
  }

}
