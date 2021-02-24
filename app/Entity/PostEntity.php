<?php

namespace App\Entity;

use \Core\Entity\Entity;

class PostEntity extends Entity
{
	public function getURL(){
		return 'index.php?p=article&id=' . $this->id;
	}

	public function getExtrait(){
        $html = '<p>' . substr($this->contenu, 0, 100) . '...</p>';
        $html .= '<p><a href="' . $this->getURL() . '">voir la suite</a></p>' ;
        return $html;
    }

}