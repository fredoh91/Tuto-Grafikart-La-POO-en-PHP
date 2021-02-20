<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<!--     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
  	<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container">
  			<div class="navbar-header">
				<a class="navbar-brand" href="../public/index.php">Project name</a>  				
  			</div>
  		</div>
  	</nav>
  	<div class="container">
  		<div class="starter-template" style="padding-top: 100px;">
    		<?= $content; ?>
  		</div>
  	</div>
  </body>
</html>


<!-- // <?php
// $db = new App\Database(‘blog’);
// $datas = $db->query(‘SELECT * FROM articles’);
// var_dump($datas[0]->titre);
