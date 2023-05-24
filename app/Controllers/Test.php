<?php

namespace App\Controllers;
use App\Libraries\twig\Twig_loader;
use App\Libraries\mongodb\DatabaseConnector;
use CodeIgniter\API\ResponseTrait;

class Test extends BaseController
{

    use ResponseTrait;
    public function index()
    {
       echo "test";
    }

   
}
