<div class="row">
    <div class="col-sm-8">
		<?php foreach(App\Table\Article::getLast() as $post): ?>
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
