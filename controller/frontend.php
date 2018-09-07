<?php
use Poissonnerieduport\Elise\Frontend\model\MailManager;
use Poissonnerieduport\Elise\Frontend\model\RecetteManager;

require_once('model/MailManager.php');
require_once('model/RecetteManager.php');

function showHomePage()
{
	$recetteManager = new RecetteManager();
	
	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();
	require('view/frontend/homePage.php');
}

function contactPage()
{
	$recetteManager = new RecetteManager();

	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();
	require('view/frontend/contactView.php');
}

function notreBancPage()
{
	$recetteManager = new RecetteManager();

	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();

	require('view/frontend/surLeBancView.php');
}
function platCuisinePage()
{
	$recetteManager = new RecetteManager();

	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();

	require('view/frontend/platsCuisineView.php');
}
function nosPlateauxPage()
{
	$recetteManager = new RecetteManager();

	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();

	require('view/frontend/plateauxView.php');
}
function nosRecettesPage()
{
	$recetteManager = new RecetteManager();

	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();

	require('view/frontend/recetteView.php');
}
function notreEquipePage()
{
	$recetteManager = new RecetteManager();

	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();

	require('view/frontend/equipeView.php');
}
function uneRecettePage($recetteId)
{
	$recetteManager = new RecetteManager();

	$recette = $recetteManager->getRecette($recetteId);
	
	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();

	if (!empty($recette))
	{
		require('view/frontend/recetteBlogView.php');
	}
	else 
	{
		throw new Exception('Cette recette n\'existe pas !');
	}

}

function sentMail($subject, $name, $mail, $content)
{
	$mailManager = new MailManager();

	$affectedLines = $mailManager->sendMail($subject, $name, $mail, $content);
	if ($affectedLines === false) 
	{
		throw new Exception('Impossible d\'ajouter le commentaire !');
	}
	else 
	{
		header('Location: index.php?page=contact');
	}
}