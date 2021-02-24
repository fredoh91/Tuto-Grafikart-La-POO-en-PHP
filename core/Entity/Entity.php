<?php

namespace Core\Entity;

// use Core\Database\Database;

class Entity 
{
	public function __get($key){

		// var_dump($key);
	    $method = 'get' . ucfirst($key);
	    $this->$key = $this->$method();
	    return $this->$key;
	}
}