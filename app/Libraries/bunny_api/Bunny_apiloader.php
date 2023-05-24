<?php
namespace App\Libraries\bunny_api;

require_once 'BunnyCDNStorage.php';

class Bunny_apiloader {

	public function connect($zone,$secret, $sg='sg'){								

		return $zone;
		$bunny = new \BunnyCDNStorage($zone, $secret, $sg);
		return $bunny;

	}

	
}

?>