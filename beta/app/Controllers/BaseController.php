<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
// use App\Libraries\mongo\Mongo_loader;


define('u', base_url()."/");
define('cdn', base_url()); 
define('zone', "/kdmz/");
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
