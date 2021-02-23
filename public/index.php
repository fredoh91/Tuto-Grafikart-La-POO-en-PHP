<?php

require '../vendor/autoload.php';

$app = App\App::getInstance();
$post = $app->getTable('posts');
$user = $app->getTable('users');

// $post = App\App::getTable('posts');
// $user = App\App::getTable('users');
// $category = App\App::getTable('categories');

var_dump($post);
var_dump($user);
// var_dump($category);

// if(isset($_GET['p'])){
// 	$p=$_GET['p'];
// } else{
// 	$p='home';
// }


// //initialisation des objets
// $db = new App\Database('blog');

// ob_start();
// if($p ==='home') {
// 	require '../pages/home.php';
// } elseif ($p ==='article') {
// 	require '../pages/single.php';
// } elseif ($p ==='categorie') {
// 	require '../pages/categorie.php';
// }
// $content = ob_get_clean();

// require '../pages/templates/default.php';