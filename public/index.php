<?php

require '../vendor/autoload.php';

$app = App\App::getInstance();
$post = $app->getTable('posts');


var_dump($post->all());