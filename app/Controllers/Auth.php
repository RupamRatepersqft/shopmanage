<?php

namespace App\Controllers;
use App\Libraries\twig\Twig_loader;
use App\Libraries\mongodb\DatabaseConnector;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Auth extends BaseController
{
    public function index()
    {
        $data ['u'] = u();
		$data ['cdn'] = cdn;
        echo $this->render('login.php',$data);
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

    public function login(){

        
        $session = session();
        
        $user = $val = $this->request->getVar('login[username]', FILTER_SANITIZE_STRING);
        $pass = $val = $this->request->getVar('login[password]', FILTER_SANITIZE_STRING);
        

        $db   = \Config\Database::connect();
        $builder = $db->table('office_user');
        $builder->select('encrypted');

        $builder->where(['email' => $user, 'status' => 1]);
        $query  =$builder->get();

        // print_r($query->resultID->num_rows);exit;
        
        $data ['u'] = u();
        $data ['cdn'] = cdn;
        // $data ['error'] = ['message'=>"Login data mismatched!"];

        if(empty($user) || $query->resultID->num_rows < 1){
                //echo $query->getlastQuery();exit();
            echo $this->render('login.php', $data );
            return false;
        }

        else {
            // if all okay go to home
            $dpas = $query->getResult()[0]->encrypted;    
            if(password_verify($pass, $dpas)){

                $builder = $db->table('office_user');
                $builder->select('id,username, designation,phone,email');
                $userdata  = $builder->where(['email' => $user]);

                $office_user = [
                        
                        'logged_in' 	=> true,
                        'userdata' => $userdata->get()->getResult(),   							    	 
                ];

                $office_user['office_user']=strtolower($office_user['userdata'][0]->username); 
                $office_user['user_id']=$office_user['userdata'][0]->id;  							 

                $dataUser['logged_in']=1;
                $dataUser['logged_session_id']=session_id();

                $builder = $db->table('office_user');
                $builder->where("id",  $office_user['userdata'][0]->id);
                $builder->update($dataUser);

                $cookie_name = "session_id";
                $cookie_value = $dataUser['logged_session_id'];
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

                $arr_cur_date_time=explode(" ", n());
                $dataUserAct['user_id']=$office_user['userdata'][0]->id;							
                $dataUserAct['login_date']=$arr_cur_date_time[0];
                $dataUserAct['login_time']=$arr_cur_date_time[1];
                $dataUserAct['logged_ip']=$_SERVER['REMOTE_ADDR'];
                $dataUserAct['user_agent']=$_SERVER['HTTP_USER_AGENT'];
                $dataUserAct['session_id']=$dataUser['logged_session_id'];
                $builder = $db->table('user_login_activity');   						
                $builder->insert($dataUserAct);
                $office_user['activity_id']=$db->insertID();   						
                $session->set($office_user);  //array set

                return redirect()->to(u())  ;

            }
            else{
                    echo $this->render('login.php', $data );
                    return false;
            }
            echo render('login.php', $data);
        }
    }
    
    public function logout($logout_nature="manual"){
        $session = session();		

        $db   = \Config\Database::connect();


        $dataUser['logged_in']=0;
        $dataUser['logged_session_id']="";

        if(!isset($session->userdata[0]->id))   
        {	
            return redirect()->to(u()) ;
        }

        $builder = $db->table('office_user');
        $builder->where("id",  $session->userdata[0]->id);
        $builder->update($dataUser);

        unset ($_COOKIE['session_id']);


        $builder = $db->table('user_login_activity');
        $builder->select("id , login_time, break_time, ideal_time");
        $builder->where("id",  $_SESSION['activity_id']);   						
        $activity=$builder->get()->getRow();  

        // var_dump($activity);

        $arr_cur_date_time=explode(" ", n());
                                
        $dataUserAct['logout_date']=$arr_cur_date_time[0];
        $dataUserAct['logout_time']=$arr_cur_date_time[1];

        $login_time= new \DateTime($activity->login_time);
        $break_time= new \DateTime($activity->break_time);
        $logout_time= new \DateTime($dataUserAct['logout_time']);

        $interval = $logout_time->diff($login_time);
        $dataUserAct['work_time'] = $interval->format("%H:%i:%s");
        
        $break_time_seconds=time_to_secs($activity->break_time);
        $ideal_time_seconds=time_to_secs($activity->ideal_time);
        $work_time_seconds=time_to_secs($dataUserAct['work_time']);
        $work_time_seconds  = $work_time_seconds - $break_time_seconds-$ideal_time_seconds;							
        $dataUserAct['work_time'] = gmdate('H:i:s', $work_time_seconds); 
        $dataUserAct['logout_nature']=$logout_nature;
        

        $builder = $db->table('user_login_activity');
        $builder->where("id",  $activity->id);
        $builder->update($dataUserAct);
        $rows_updated=$db->affectedRows();

        if($rows_updated == 1){	  		   							
            session_destroy();
            return redirect()->to(u().'Auth/login')  ;
        }

    }

    public function new_account(){
        $data ['u'] = u();
		$data ['cdn'] = cdn;
        echo $this->render('register_new_user.php',$data);
    }

    public function save_user(){

        //database connection
		$db      = \Config\Database::connect();


        //business Info
		$businessname = $this->request->getVar('businessname',FILTER_SANITIZE_STRING);
		$businesstype = $this->request->getVar('businesstype',FILTER_SANITIZE_STRING);
		$businessgst = $this->request->getVar('businessgst',FILTER_SANITIZE_STRING);
		$businessdesc = $this->request->getVar('businessdesc',FILTER_SANITIZE_STRING);

        //user Info
		$firstname = $this->request->getVar('firstname', FILTER_SANITIZE_STRING);
		$lastname = $this->request->getVar('lastname', FILTER_SANITIZE_STRING);
		$phone = $this->request->getVar('phone', FILTER_SANITIZE_STRING);
		$email = $this->request->getVar('email', FILTER_SANITIZE_STRING);
		$pass = $this->request->getVar('pass');

		$data_business = [
			'businessname'=> $businessname,
			'businesstype'=> $businesstype,
			'businessgst'=> $businessgst,
			'businessdesc'=> $businessdesc
		];

        $builder = $db->table('business_info'); 		
	    $builder->insert($data_business);
        $businessID = $db->insertID();

		$data_user = [
			'firstname'=> $firstname,
			'lastname'=> $lastname,
			'phone'=> $phone,
			'email'=> $email,			
			'encrypted'=> password_hash($pass, PASSWORD_DEFAULT),
			'designation'=> 2,
			'username'=> $email,
			'businessid'=> $businessID,
		];

		$db      = \Config\Database::connect();
		$builder = $db->table('office_user'); 		
	    $builder->insert($data_user);

	   return redirect()->to(u.'auth');

	}
}
