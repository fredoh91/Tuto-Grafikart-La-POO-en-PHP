 <?php

$app = App::getInstance();


$categorie = $app->getTable('Category')->find($_GET['id']);

if($categorie === false){
	$app->notFound();
}
$article = $app->getTable('Post')->lastByCategory($_GET['id']);
$categories = $app->getTable('Category')->all();
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
			<?php foreach($categories as $categorie): ?>
				<li>
					<a href="<?= $categorie->getURL() ?>">
						<?= $categorie->titre; ?>	
					</a>
				</li>
			<?php endforeach; ?>    		
		</ul>
	</div>
</div>
