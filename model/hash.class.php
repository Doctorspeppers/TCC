<?php
namespace model;
define(__DIR__,"","/var/www/html/TCC");

class Hash 
{
  use database;
  use config;
  use log;

  public $id;
  protected $hash;
  protected $database;

  public function __construct($id, $password)
  {
    $this->id = $id;
    $this->hash = md5($password);
  }

  public function hashing()
  {
    return $this->hash;
  }

  public function verifyhash()
  {
    if (md5($this->password == $hash)){
      return true;
    }
    else
    {
      return false;
    }
  }
}

