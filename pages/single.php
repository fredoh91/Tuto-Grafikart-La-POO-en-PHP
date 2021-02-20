<?php 

use App\App;
use App\Table\Categorie;
use App\Table\Article;

$post = Article::find($_GET['id']);
if ($post === false) {
  App::notFound();
} else {
  
}

$categorie = Categorie::find($post->category_id);
//$post = App\App::getDb()->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']],'App\Table\Article', true);


?>

<h1><?= $post->titre; ?></h1>

<p><em><?= $categorie->titre; ?></em></p>
<h1><?= $post->contenu; ?></h1>

