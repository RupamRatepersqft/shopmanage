<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Libraries\bunny_api\Bunny_apiloader;
use App\Libraries\phpftp\Ftp_loader;


// use App\Libraries\mongo\Mongo_loader;


define('u', base_url()."/");
define('cdn', base_url()); 
define('zone', "/rblog/");
define('livesite',"https://ratepersqft.com/");


/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['url','rps'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    public function bunny_api($zone="/tstz/"){

        // $zone='/rblog/';
		// $secret='a3c837e9-2000-40f5-9667660112ab-53b2-4a61';

        // $zone='/rblog/';
		$secret='41e2108a-8428-4995-9e5a8e4f3a05-cfb5-40fb';


		$api = new Bunny_apiloader();
		$bunny = $api->connect($zone,$secret);
		return $bunny;
	}

    public function ftp($zone){

		//test
		if($zone=="/bkpz/"){
			define('ftps', '5a6a1ef1-d9fc-45e5-9668e375abf6-0854-4096');
			define('srvr', '89.187.162.166');//'sg.storage.bunnycdn.com'
		}

		//live
		if($zone=='/kdmz/'){ 
			define('ftps', 'aa2f0fd9-3f39-41c4-802aa0ea1a5e-53e2-437b');
			define('srvr', '89.187.162.166');//'sg.storage.bunnycdn.com'
		}

		if($zone=='/rblog/'){ 
			define('ftps', 'a3c837e9-2000-40f5-9667660112ab-53b2-4a61');
			define('srvr', '89.187.162.166');//'sg.storage.bunnycdn.com'
		}

		$ftp_loader = new Ftp_loader();
		$ftp = $ftp_loader->connect(srvr,$zone,ftps);
		return $ftp;
	}

//     public function mongo($host=''){


//         /* 
//         how to use it -- see base controller only
//         if you call this like - new mongo()
//         then you will get the entire of this class in return
//         -when you call like this
//         -you have to call or set mongo client using local or live
//         like -
//         $a = new mongo()
//         $client = $a->mongoClient('local')
//         also you have freedom to set_host() and set_database() function in this method
   
        
//         but if you do - new mongo('local')
//         then you will directly get the mongoClient method only of this class
//         */
        
        
//         $mongo_loader = new Mongo_loader();
        
//         // if no host then return entire class
//         if($host==''){
//             return $mongo_loader;		 	
//         }
        
        
//         // if host is present then return the method of a class
//         if($host=='local' || $host=='live'){
//             return $mongo_loader->mongoClient($host);
//         }
        
        
//    }		
   
}
