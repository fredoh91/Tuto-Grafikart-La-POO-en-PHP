<?php

use \App\Table\Categorie;
use \App\Table\Article;

$categorie = Categorie::find($_GET['id']);
$article = Article::lastByCategory($_GET['id']);
$categories = Categorie::all();
?>

<h1><?=	$categorie->titre ?></h1>
<div class="row">
    <div class="col-sm-8">
		<?php foreach($article as $post): ?>
		    <h2>
		    	<a href="<?= $post->getURL() ?>">
		    		<?= $post->titre; ?>	
				</a>
		    </h2>
		    <p>
		    	<em>
		    		<?= $post->categorie; ?>
		    	</p>
		    </em>
		<p>
		    <?= $post->getExtrait(); ?>
		</p>
		<?php endforeach; ?>
	</div>
	<div class="col-sm-4">
		<ul>
			<?php foreach(App\Table\Categorie::all() as $categorie): ?>
				<li>
					<a href="<?= $categorie->getURL() ?>">
						<?= $categorie->titre; ?>	
					</a>
				</li>
			<?php endforeach; ?>    		
		</ul>
	</div>
</div>
