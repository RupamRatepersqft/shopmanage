<?php

namespace App\Controllers;
use App\Libraries\twig\Twig_loader;
use App\Libraries\mongodb\DatabaseConnector;
use CodeIgniter\API\ResponseTrait;
use App\Libraries\spreadsheet\Php_Spreadsheet;

class Ourservices extends BaseController
{

    use ResponseTrait;
    public function index()
    {
        $session = session();
        $data ['u'] = u();
		$data ['cdn'] = cdn;
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

    public function contact_enquires(){
        $session = session();
        if(!$session->logged_in):
			return redirect()->to(u().'Auth/login')  ;
		endif;
        $data ['u'] = u();
		$data ['cdn'] = cdn;
        $data ['urls']="contact_us";
        $data ['sidebar'] = "contact_enquires";
        $data ['sidebarHeader'] = "Enquires";


        $mongo = new DatabaseConnector();
        
        $db = $mongo->getDatabase();
        
        $collection = $db->contact_us_enquiries;
        $cursor = $collection->find([],['sort'=>['entry_date'=>-1]]);
        $return = array();
        foreach ($cursor as $document) {
            $document['id'] = $document['_id']->__toString();
            $return[] = $document;
            // $return['id'] = $document['_id']->__toString();
        }
        // print_r($return);;exit;
        $data ['return']=$return;
        echo $this->render('contact_us_enquiries.php',$data);
    }

    public function our_service_enquiries(){

        $session = session();
        if(!$session->logged_in):
			return redirect()->to(u().'Auth/login')  ;
		endif;
        $data ['u'] = u();
		$data ['cdn'] = cdn;
		$data ['sidebar'] = "our_service_enquiries";
        $data ['sidebarHeader'] = "Enquires";

        
        $mongo = new DatabaseConnector();
        
        $db = $mongo->getDatabase();
        
        $collection = $db->our_service_enquiries;
        $cursor = $collection->find([],['sort'=>['entry_date'=>-1]]);
        $return = array();
        foreach ($cursor as $document) {
            $return[] = $document;
        }
        $data ['return']=$return;

        echo $this->render('our_service_enquiries.php',$data);
    }
    public function property_enquiries(){

        $session = session();
        if(!$session->logged_in):
			return redirect()->to(u().'Auth/login')  ;
		endif;
        $data ['u'] = u();
		$data ['cdn'] = cdn;
        $data ['sidebar'] = "property_enquiries";
        $data ['sidebarHeader'] = "Enquires";

        
        $mongo = new DatabaseConnector();
        
        $db = $mongo->getDatabase();
        
        $collection = $db->property_enquiries;
        $cursor = $collection->find([],['sort'=>['entry_date'=>-1]]);
        $return = array();
        foreach ($cursor as $document) {
            $return[] = $document;
        }
        $data ['return']=$return;

        echo $this->render('property_enquiries.php',$data);
    }
    public function thirdparty_service_enquiries(){

        $session = session();
        if(!$session->logged_in):
			return redirect()->to(u().'Auth/login')  ;
		endif;
        $data ['u'] = u();
		$data ['cdn'] = cdn;
        $data ['sidebarHeader'] = "Enquires";
        $data ['sidebar'] = "thirdparty_service_enquiries";

        $mongo = new DatabaseConnector();
        
        $db = $mongo->getDatabase();
        
        $collection = $db->thirdparty_service_enquiries;
        $cursor = $collection->find([],['sort'=>['entry_date'=>-1]]);
        $return = array();
        foreach ($cursor as $document) {
            $return[] = $document;
        }
        $data ['return']=$return;

        echo $this->render('thirdparty_service_enquiries.php',$data);
    }

    public function changestatus(){

        $newstatus = $this->request->getVar('newstatus', FILTER_SANITIZE_STRING);
        $msgStatus = $this->request->getVar('msgStatus', FILTER_SANITIZE_STRING);
        $oid = $this->request->getVar('oid', FILTER_SANITIZE_STRING);
        
        $session = session();
        if($session->logged_in){
            $user_id = $session->userdata[0]->id;
        }
        
        $mongo = new DatabaseConnector();
        $db = $mongo->getDatabase();
        $collection=$db->contact_us_enquiries;
        $status = array(
            'statusType' => $newstatus,
            'status_message' => $msgStatus,
            'user' => $user_id
        );

        $updateResult = $collection-> updateOne(
        [ '_id' => new \MongoDB\BSON\ObjectID($oid)],
        [ '$set' => [ 'status' => $status ]]
        );


    }

    public function exportxlxs(){
        $mongo = new DatabaseConnector();
        
        $db = $mongo->getDatabase();
        
        $collection = $db->contact_us_enquiries;
        $cursor = $collection->find([],['sort'=>['entry_date'=>-1]]);
        $return = array();
        foreach ($cursor as $document) {
            $document['id'] = $document['_id']->__toString();

            $return[] = array(
                'id'=>$document['id'],
                'name'=>$document->name,
                'email1'=>$document->email,
                'subject'=>$document->subject,
                'message'=>$document->message,
                'entry_date'=>$document->entry_date
            );
        }
        $current_date=date("Y-m-d h-i-sa");

        $file_name=$current_date."_contact_us.xlsx";
        $array = $return;

        $sheet=new Php_Spreadsheet();
        $sheet->writeSheetFromArray($array, $file_name);
        echo "tmp/export/".$file_name; exit();
    }

    public function project_queries(){
        $session = session();
        if(!$session->logged_in):
			return redirect()->to(u().'Auth/login')  ;
		endif;
        $data ['u'] = u();
		$data ['cdn'] = cdn;
        $data ['sidebar'] = "project_queries";
        $data ['sidebarHeader'] = "Enquires";

        
        $mongo = new DatabaseConnector();
        $db = $mongo->getDatabase();
        
        $collection = $db->project_queries;
        $cursor = $collection->find([]);
        $return = array();
        foreach ($cursor as $document) {
            $return[] = $document;
        }
        $data ['return']=$return;

        echo $this->render('project_queries.php',$data);
    }
}
