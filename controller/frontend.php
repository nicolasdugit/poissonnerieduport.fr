<?php

require_once('../model/MailManager.php');
require_once('../model/RecetteManager.php');

function showHomePage()
{
	$recetteManager = new \Poissonnerieduport\Elise\Frontend\Model\RecetteManager();
	
	$recettes = $recetteManager->getRecettes();
	require('../view/frontend/homePage.php');
}

function contactPage()
{
	$recetteManager = new \Poissonnerieduport\Elise\Frontend\Model\RecetteManager();

	$recettes = $recetteManager->getRecettes();
	require('../view/frontend/contactView.php');
}

function notreBancPage()
{
	$recetteManager = new \Poissonnerieduport\Elise\Frontend\Model\RecetteManager();

	$recettes = $recetteManager->getRecettes();

	require('../view/frontend/surLeBancView.php');
}
function platCuisinePage()
{
	$recetteManager = new \Poissonnerieduport\Elise\Frontend\Model\RecetteManager();

	$recettes = $recetteManager->getRecettes();

	require('../view/frontend/platsCuisineView.php');
}
function nosPlateauxPage()
{
	$recetteManager = new \Poissonnerieduport\Elise\Frontend\Model\RecetteManager();

	$recettes = $recetteManager->getRecettes();

	require('../view/frontend/plateauxView.php');
}
function nosRecettesPage()
{
	$recetteManager = new \Poissonnerieduport\Elise\Frontend\Model\RecetteManager();

	$recettes = $recetteManager->getRecettes();

	require('../view/frontend/recetteView.php');
}
function notreEquipePage()
{
	$recetteManager = new \Poissonnerieduport\Elise\Frontend\Model\RecetteManager();

	$recettes = $recetteManager->getRecettes();

	require('../view/frontend/equipeView.php');
}
function uneRecettePage($recetteId)
{
	$recetteManager = new \Poissonnerieduport\Elise\Frontend\Model\RecetteManager();

	$recette = $recetteManager->getRecette($recetteId);
	
	$recettes = $recetteManager->getRecettes();

	if (!empty($recette))
	{
		require('../view/frontend/recetteBlogView.php');
	}
	else 
	{
		throw new Exception('Cette recette n\'existe pas !');
	}

}

function sentMail($subject, $name, $mail, $content)
{
	$mailManager = new \Poissonnerieduport\Elise\Frontend\Model\MailManager();

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