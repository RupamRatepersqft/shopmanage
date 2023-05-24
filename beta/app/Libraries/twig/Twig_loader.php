<?php
namespace App\Libraries\twig;

require_once 'vendor/autoload.php';


class Twig_loader {

	

	static $loader ; 

	
	public function template_loader($path){

		// set_template_path must be called firt befor calling template_loader()
		if(empty($path) ){
			echo "pass a path paramerter ";
			return false;
		}

		return new \Twig\Loader\FilesystemLoader($path);
		
	}

	public function template_cache($loader,$path ){

		// set_template_cache_path must be called firt befor calling twig_render()
		if(empty($path)  || empty($loader)){
			echo "pass a cache path paramerter and twig loader ";
			return false;
		}

			
			// lengthy way to add debug extension
			$twig = new \Twig\Environment($loader,
				[ 'cache' => false, 'debug' => true]  //  'cache' => $path,
			); 

			// for debugging purpose
			$twig->addExtension(new \Twig\Extension\DebugExtension());


			return $twig;
	}


}


?>