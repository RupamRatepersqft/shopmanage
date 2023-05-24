<?php

namespace App\Controllers;
use App\Libraries\twig\Twig_loader;
use App\Libraries\mongodb\DatabaseConnector;


class Home extends BaseController
{
    public function index()
    {
        $session = session();
        $session = session();
        if(!$session->logged_in):
			return redirect()->to(u().'Auth/login')  ;
		endif;
        $data['office_user'] = $session->get('office_user'); 

        $data ['u'] = u();
		$data ['cdn'] = cdn;
        echo $this->render('home.php',$data);        
    }

    public function render($page, $data, $path='app/Views/')
    {

        if(ENVIRONMENT=='development')
        {
                p("<div style='border:1px solid; width:100%; color: red; text-align:center'>".$path.$page."</div>");
                $data['ENVIRONMENT']=ENVIRONMENT;
        }

        $twig = new Twig_loader();
        $template_loader = $twig->template_loader($path);
        $twig_render = $twig->template_cache($template_loader,'app/Views/twig_cache');
        return $twig_render->render($page, $data);
    }
}

    

