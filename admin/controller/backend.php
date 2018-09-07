<?php
use Poissonnerieduport\Elise\Backend\model\MailManager;
use Poissonnerieduport\Elise\Backend\model\UserManager;
use Poissonnerieduport\Elise\Backend\model\RecetteManager;
use Poissonnerieduport\Elise\Backend\model\ImageManager;

require_once('model/MailManager.php');
require_once('model/UserManager.php');
require_once('model/RecetteManager.php');
require_once('model/ImageManager.php');

function adminHome()
{
	$mailManager = new MailManager();
	$recetteManager = new RecetteManager();
	$imageManager = new ImageManager();

	$mails = $mailManager->getMails();
	$mails = $mails->fetchAll();

	$mailsNonLu = $mailManager->nonMarkedMail();
	$mailsNonLu = $mailsNonLu->fetchAll();

	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();

	$images = $imageManager->getImages();
	$images = $images->fetchAll();

	require('view/adminView.php');
	
}

function connectionAdminPage()
{
	require('view/loginMainView.php');
}

function connectionAdmin($pseudo, $pass)
{
	$userManager = new UserManager();

	$passTest = $userManager->connection($pseudo, $pass);
	$userInfo = $userManager->getUser($pseudo);
	

	if ($pass == $passTest['user_pass']) {
		$isPassCorrect = true;
	}
	else
	{
		$isPassCorrect = false;
	}
	if (!$passTest)
	{
		throw new Exception('Mauvais identifiant ou mot de passe');
	}
	else
	{
		if ($isPassCorrect == true) 
		{
			session_start();
			$_SESSION['user_status'] = $passTest['user_status'];
			$_SESSION['user_name'] = $pseudo;
			$_SESSION['user_picture'] = $userInfo['user_picture'];
			$_SESSION['user_mail'] = $userInfo['user_mail'];
			$_SESSION['user_id'] = $userInfo['id'];
			header('Location: index.php');
		}
		else
		{
			throw new Exception('Mauvais identifiant ou mot de passe');
		}
	}
}

function deconnection()
{
	$_SESSION = array();
	session_destroy();
	header('Location: index.php');
}

function adminInbox()
{
	$mailManager = new MailManager();

	$mails = $mailManager->getMails();
	$mails = $mails->fetchAll();

	$mailsNonLu = $mailManager->nonMarkedMail();
	$mailsNonLu = $mailsNonLu->fetchAll();

	require('view/inboxView.php');
}

function mailShow($mailId)
{
	$mailManager = new MailManager();

	$mails = $mailManager->getMails();
	$mails = $mails->fetchAll();

	$mailsNonLu = $mailManager->nonMarkedMail();
	$mailsNonLu = $mailsNonLu->fetchAll();

	$mailOne = $mailManager->getMail($mailId);

	$markMail = $mailManager->markMail($mailId);

	if (!empty($mailOne)) 
	{
		require('view/inboxView.php');
	}
	else
	{
		throw new Exception('Aucun message trouvé sur cette page');
	}
}

function eraseMail($mailId)
{
	$mailManager = new MailManager();

	$affectedLines = $mailManager->eraseMail($mailId);

	if ($affectedLines == false) 
	{
	    throw new Exception('Impossible de supprimer le mail !');
	}
	else
	{
	    header('Location: index.php?page=inbox');
	}
}

function gestionRecette()
{
	$mailManager = new MailManager();
	$mailsNonLu = $mailManager->nonMarkedMail();
	$mailsNonLu = $mailsNonLu->fetchAll();

	$recetteManager = new RecetteManager();
	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();

	$imageManager = new ImageManager();
	$images = $imageManager->getImages();
	$images = $images->fetchAll();

	require('view/gestionRecetteView.php');
}

function creationRecette()
{
	$mailManager = new MailManager();
	$mailsNonLu = $mailManager->nonMarkedMail();
	$mailsNonLu = $mailsNonLu->fetchAll();

	$imageManager = new ImageManager();
	$images = $imageManager->getImages();
	$images = $images->fetchAll();

	$recetteManager = new RecetteManager();
	$recettes = $recetteManager->getRecettes();
	$recettes = $recettes->fetchAll();

	require('view/creationRecetteView.php');
}

function publishRecette($recette_title, $recette_subtitle, $recette_time, $recette_portion, $recette_instruction, $recette_author, $recette_image, $recette_real_author)
{
	$recetteManager = new RecetteManager();

	$affectedLines = $recetteManager->newRecette($recette_title, $recette_subtitle, $recette_time, $recette_portion, $recette_instruction, $recette_author, $recette_image, $recette_real_author);
	if ($affectedLines == false) 
	{
		throw new Exception('Impossible d\'ajouter la recette !');
	}
	else 
	{
		header('Location: index.php?page=creationRecette');
	}
}

function addRealAuthor($id_real_author)
{
	$recetteManager = new RecetteManager();
	$addRealAuthor = $recetteManager->addRealAuthor($id_real_author);
}

function editRecette($recette_id)
{
	$mailManager = new MailManager();
	$mailsNonLu = $mailManager->nonMarkedMail();
	$mailsNonLu = $mailsNonLu->fetchAll();

	$recetteManager = new RecetteManager();
	$recette = $recetteManager->getRecette($recette_id);

	require('view/editRecetteView.php');
}

function modifRecette($recette_title, $recette_subtitle, $recette_time, $recette_portion, $recette_instruction, $recette_author, $recette_image, $recette_id)
{
	$recetteManager = new RecetteManager();

	$affectedLines = $recetteManager->modifRecette($recette_title, $recette_subtitle, $recette_time, $recette_portion, $recette_instruction, $recette_author, $recette_image, $recette_id);

	if ($affectedLines == false) 
	{
		throw new Exception('Impossible modif recette !');
	}
	else 
	{
		header('Location: index.php');
	}
}

function deleteRecette($recetteId)
{
	$recetteManager = new RecetteManager();

	$affectedLines = $recetteManager->deleteRecette($recetteId);

	if ($affectedLines == false) 
	{
	    throw new Exception('Impossible de supprimer cette recette !');
	}
	else
	{
	    header('Location: index.php?page=creationRecette');
	}
}
function gestionImage()
{
	$mailManager = new MailManager();
	$mailsNonLu = $mailManager->nonMarkedMail();
	$mailsNonLu = $mailsNonLu->fetchAll();

	$imageManager = new ImageManager();
	$images = $imageManager->getImages();
	$images = $images->fetchAll();

	require('view/gestionImageView.php');
}
function uploadImage()
{
	$mailManager = new MailManager();
	$mailsNonLu = $mailManager->nonMarkedMail();
	$mailsNonLu = $mailsNonLu->fetchAll();
	
	require('view/uploadImageView.php');
}

function insertImage($image_name)
{
	$imageManager = new ImageManager();

	$affectedLines = $imageManager->insertImage($image_name);

	if ($affectedLines == false) 
	{
	    throw new Exception('Impossible d\'inserer cette image !');
	}
	else
	{
	    header('Location: index.php?page=gestionImage');
	}
}

function showImage()
{
	$mailManager = new MailManager();
	$mailsNonLu = $mailManager->nonMarkedMail();
	$mailsNonLu = $mailsNonLu->fetchAll();

	$imageManager = new ImageManager();
	$images = $imageManager->getImages();
	$images = $images->fetchAll();

	require('view/selectImageView.php');
}

function deleteImage($imageId)
{
	$imageManager = new ImageManager();

	$affectedLines = $imageManager->deleteImage($imageId);

	if ($affectedLines == false) 
	{
	    throw new Exception('Impossible de supprimer cette image !');
	}
	else
	{
	    header('Location: index.php?page=gestionImage');
	}
}
