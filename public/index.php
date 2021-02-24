<?php

// require '../vendor/autoload.php';
define('ROOT', dirname(__DIR__));

require ROOT . '/app/App.php';
App::load();

if(isset($_GET['page'])){
	$page = $_GET['page'];
} else{
	$page = 'home';
}

ob_start();
if($page ==='home') {
	require ROOT . '/pages/articles/home.php';
} 
// elseif ($p ==='article') {
// 	require '../pages/single.php';
// } elseif ($p ==='categorie') {
// 	require '../pages/categorie.php';
// }
$content = ob_get_clean();

require ROOT . '/pages/templates/default.php';
// $app = App::getInstance();
// $post = $app->getTable('posts');
// var_dump($post->all());