<?php $title = 'Bienvenue à la Poissonnerie du Port Chez Elise' ?>
<?php $description = 'Bienvenue à la poissonnerie du port Chez Élise. Élise vous accueille dans sa poissonnerie située à Lanton sur le port de Cassy, au cœur du bassin d\'Arcachon' ?>
<?php $keywords = 'Poissonnerie du Port Chez Elise' ?>
<?php $pageTitle = 'Mention Légales' ?>

<?php ob_start(); ?>
<?php require('view/frontend/templates/headerSecondary.php'); ?>



<div id="colorlib-contact">
    <div class="container">

    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/templates/template.php'); ?>
