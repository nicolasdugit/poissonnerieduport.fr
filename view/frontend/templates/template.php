<!DOCTYPE HTML>
<html lang="fr-FR">
	<head>
<?php include('view/frontend/templates/head.php'); ?>
	</head>
	<body>
<?php include('view/frontend/templates/navbar.php'); ?>
<?php include('view/frontend/templates/flecheHaut.php'); ?>
		<div id="colorlib-page">
			<?= $content ?>
			<!-- footer 1 -->
<?php include('view/frontend/templates/footer1.php'); ?>
<?php include('view/frontend/templates/footer.php'); ?>
		</div>
		<!-- jQuery -->
		<script src="public/js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="public/js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="public/js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="public/js/jquery.waypoints.min.js"></script>
		<!-- Parallax -->
		<script src="public/js/jquery.stellar.min.js"></script>
		<!-- Owl Carousel -->
		<script src="public/js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="public/js/jquery.magnific-popup.min.js"></script>
		<script src="public/js/magnific-popup-options.js"></script>
		<!-- Flexslider -->
		<script src="public/js/jquery.flexslider-min.js"></script>
		<!-- Date Picker -->
		<script src="public/js/bootstrap-datepicker.js"></script>
		<!-- Facebook -->
		<script src="public/js/facebook.js"></script>
		<!-- Main JS (Do not remove) -->
		<script src="public/js/main.js"></script>
        <!-- Cookies -->
        <script src="public/js/cookiechoices.js"></script>
        <script>document.addEventListener('DOMContentLoaded', function(event){cookieChoices.showCookieConsentBar('Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.', 'J’accepte', 'En savoir plus', 'http://www.poissonnerieduport.fr/index.php?page=mentionsLegales');});</script>
	</body>
</html>

