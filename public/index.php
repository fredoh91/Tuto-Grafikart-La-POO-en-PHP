<?php

require '../vendor/autoload.php';


$app = \App\App::getInstance();
$app->title = 'testtttttttttttttt';

$app2 = \App\App::getInstance();
echo $app2->title;

$config = App\Config::getInstance();

var_dump($config->get('db_user'));



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