<?php 

$app = App::getInstance();

$post = $app->getTable('Post')->find($_GET['id']);

if ($post === false) {
  $app->notFound();
}


$app->title = $post->titre;

?>

<h1><?= $post->titre; ?></h1>

<p><em><?= $post->categorie; ?></em></p>
<h1><?= $post->contenu; ?></h1>
