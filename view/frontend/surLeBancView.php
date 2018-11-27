<?php $title = 'Bienvenue à la Poissonnerie du Port Chez Elise' ?>
<?php $description = 'Bienvenue à la poissonnerie du port Chez Élise. Élise vous accueille dans sa poissonnerie située à Lanton sur le port de Cassy, au cœur du bassin d\'Arcachon' ?>
<?php $keywords = 'Poissonnerie du Port Chez Elise' ?>
<?php $pageTitle = 'Notre Banc' ?>

<?php ob_start(); ?>

<?php require('view/frontend/templates/headerSecondary.php'); ?>

<div id="colorlib-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
				<span class="icon"><i style="top: 0;" class="fas fa-fish"></i></span>
				<h2>Découvrez un large choix de poissons, coquillages et crustacés. Arrivage quotidien : Fraîcheur, qualité, variété et saisonnalité garantie</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7">
				<div class="row">
					<div class="about-desc">
						<div class="col-md-12 col-md-offset-0 animate-box intro-heading">
							<h2>LES POISSONS</h2>
						</div>
						<div class="col-md-12 animate-box">
							<p class="justify" >Arrivage quotidien de la pêche française et locale en priorité mais aussi, pour certains produits (crevettes, saumon, ...), des meilleurs pêcheries mondiales. Fraîcheur, qualité, variété et saisonnalité garantie ! selon bien sur la disponibilité des produits.
							</p> 
							<p style="font-weight: bold;">
								Poissons 100% SAUVAGES (excepté le saumon). 
							</p> 
							<p class="justify" style="color: #709dff; font-weight: bold;">
							 Les poissons phares de la pêche arcachonnaise (indiqués sur le banc par le loge rouge) : soles, bars, maigres, anguilles, rougets, seiches, mules, dorades, ... <br> à découvrir bien sur sous réserve de pêche.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="about-img about-img-2" style="background-image: url(public/images/poisson.jpg);">
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="about-img about-img-2" style="background-image: url(public/images/huitre.jpg);">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="row">
					<div class="about-desc">
						<div class="col-md-12 col-md-offset-0 animate-box intro-heading">
							<h2>LES HUITRES</h2>
						</div>
						<div class="col-md-12 animate-box">
							<p class="justify">Le produit incontournable du Bassin : les huîtres. Elles proviennent directement des parcs d'un couple d'ostréiculteurs du village de l'Herbe sur la presqu’île du Cap Ferret, Bart et Clara Bosredon. Leurs huîtres sont de grande qualité, régulières toute l'année donc à déguster sans modération ! Selon les saisons, également Huîtres plates, de Marennes, Bretonnes, ...</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-7">
				<div class="row">
					<div class="about-desc">
						<div class="col-md-12 col-md-offset-0 animate-box intro-heading">
							<h2>LES FRUITS DE MER</h2>
						</div>
						<div class="col-md-12 animate-box">
							<p class="justify">Un large choix de coquillages et crustacés cuits et vivants pour vos apéritifs ou vos plateaux de fruits de mer. Une cuisson maison quotidienne dans notre cuisines avec des ingrédients simples et naturels.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="about-img about-img-2" style="background-image: url(public/images/fruits-de-mer.jpg);">
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="about-img about-img-2" style="background-image: url(public/images/vivier.jpg);">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="row">
					<div class="about-desc">
						<div class="col-md-12 col-md-offset-0 animate-box intro-heading">
							<h2>LE VIVIER</h2>
						</div>
						<div class="col-md-12 animate-box">
							<p>Langoustes, tourteaux, homards vivants...</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-7">
				<div class="row">
					<div class="about-desc">
						<div class="col-md-12 col-md-offset-0 animate-box intro-heading">
							<h2>RAYON EPICERIE ET VINS</h2>
						</div>
						<div class="col-md-12 animate-box">
							<p class="justify">Pour emporter un peu du Bassin chez vous, choisissez parmi les conserves de produits régionaux : rillettes d’huîtres, de bonite, de bonite, de mule ; soupes de poissons bisque de crabe ; lamproie à la bordelaise ; sardines à l'huile et autres aromates ; calamars farcis. Découvrez aussi notre sélection de vin pour accompagner vas repas poissons ou fruits de mer.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="about-img about-img-2" style="background-image: url(public/images/conserve.jpg);">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/templates/template.php'); ?>