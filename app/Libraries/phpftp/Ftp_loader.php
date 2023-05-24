<?php
namespace App\Libraries\phpftp;

require_once 'autoload.php';

class Ftp_loader {



	public function connect($host,$login, $password){

		$ftp = new \FtpClient\FtpClient();
		$ftp->connect($host);
		$ftp->login(str_replace('/', '', $login), $password);
		$ftp->pasv(true);		
		return $ftp;

	}



}

?>