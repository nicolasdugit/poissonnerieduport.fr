<?php $title = 'PAGE ADIMN -Gestion Recette- Poissonnerie du Port Chez Elise'; ?>
<?php ob_start(); ?>
	
	<?php
	require('view/templates/leftSideBar.php');
	require('view/templates/topBar.php');
	?>
	
	<div class="right_col" role="main">
		<div class="">
			<div class="page-title">
				<div class="title_left">
					<h3>Editeur de Recettes</h3>
				</div>
			</div>

			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2 class="collapse-link">Creer une nouvelle recette<small>publication en ligne</small></h2>
							<ul class="nav navbar-right panel_toolbox ">
								<li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content" style="display: none;">
							<h2 class="btn-warning" style="padding: 10px; text-align: center;">Veuillez selectionner une image.</h2>
							<?php foreach ($images as $image) : ?>
							<div class="col-md-4">
								<div onclick="infoImage(this)" id="<?= $image['image_name'] ?>" class="img-thumbnail" style="background-image: url(' ../<?= $image['image_name'] ?> '); background-size: 100%; background-position: center; width: 100%; height: 200px;">
								</div>
							</div>
							 <?php endforeach ?>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2 class="collapse-link">Modifier /Supprimer une Recette<small>Editer une recette existante</small></h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content" style="display: none;">
							<?php foreach ($recettes as $recette) : ?>
								<a href="index.php?page=editRecette&amp;id=<?= $recette['id'] ?> ">
									<h1><?= $recette['recette_title'] ?><?= $recette['id'] ?></h1>
								</a>
							<?php endforeach ; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>    

<?php $content = ob_get_clean(); ?>

<?php require('view/templates/templateAdmin.php'); ?>