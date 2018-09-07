<?php
namespace Poissonnerieduport\Elise\Backend\Model;

require_once("Manager.php");

class MailManager extends Manager
{
	public function getMails()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, mail_name, mail_mail, mail_content, mail_date, mail_subject, mail_status FROM boot_mail ORDER BY id DESC');
		
		return $req;
	}

	public function getMail($mailId)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, mail_name, mail_mail, mail_content, mail_date, mail_subject FROM boot_mail WHERE id = ?');
		$req->execute(array($mailId));
		$mail = $req->fetch();

		return $mail;
	}

	public function markMail($mailId)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE boot_mail SET mail_status=1 WHERE id = :mailId');
		$affectedLines = $req->execute(array(
			':mailId' => $mailId,
		));

		return $affectedLines;
	}

	public function nonMarkedMail()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, mail_name, mail_mail, mail_content, mail_date, mail_subject, mail_status FROM boot_mail WHERE mail_status=0 ORDER BY id DESC');
		
		return $req;
	}

	public function eraseMail($mailId)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM boot_mail WHERE id = :mailId');
		$affectedLines = $req->execute(array(
			':mailId' => $mailId,
		));

		return $affectedLines;
	}
}

