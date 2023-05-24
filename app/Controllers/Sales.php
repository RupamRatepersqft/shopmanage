<?php

namespace App\Controllers;
use App\Libraries\twig\Twig_loader;
use App\Libraries\mongodb\DatabaseConnector;
use CodeIgniter\API\ResponseTrait;
use App\Libraries\spreadsheet\Php_Spreadsheet;
use App\Models\Salesmodel;

class Sales extends BaseController
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

    public function daily_sales(){
        $session = session();
        if(!$session->logged_in):
			return redirect()->to(u().'Auth/login')  ;
		endif;

        $pager = \Config\Services::pager(); 

        $data ['u'] = u();
		$data ['cdn'] = cdn;
        $data ['urls']="contact_us";
        $data ['sidebar'] = "daily_sales";
        $data ['sidebarHeader'] = "Sales";

        // print_r("Daily Sales");exit;
       
        echo $this->render('sale_entry.php',$data);
    }

    public function save_sales(){
        $session = session();
        if(!$session->logged_in):
			return redirect()->to(u().'Auth/login')  ;
		endif;

        $sales = new Salesmodel();
        $pager = \Config\Services::pager(); 

        $data ['u'] = u();
		$data ['cdn'] = cdn;
        $data ['urls']="contact_us";
        $data ['sidebar'] = "daily_sales";
        $data ['sidebarHeader'] = "Sales";

        $product = $this->request->getVar('product_name', FILTER_SANITIZE_STRING);
        $category = $this->request->getVar('blog_sub_category', FILTER_SANITIZE_STRING);
        $product_code = $this->request->getVar('product_code', FILTER_SANITIZE_STRING);
        $price = $this->request->getVar('product_price', FILTER_SANITIZE_STRING);
        $qty = $this->request->getVar('product_qty', FILTER_SANITIZE_STRING);
        $qty_type = $this->request->getVar('product_qty_type', FILTER_SANITIZE_STRING);
        $total = $this->request->getVar('total_bill', FILTER_SANITIZE_STRING);
        $comment = $this->request->getVar('comment', FILTER_SANITIZE_STRING);

        $insert_data=array(
            'product'       =>  $product,
            'category'      =>  $category,
            'product_code'  =>  $product_code,
            'price'         =>  $price,
            'qty'           =>  $qty,
            'qty_type'      =>  $qty_type,
            'total'         =>  $total,
            'comment'       =>  $comment,
            'entry_by'      =>  $session->userdata[0]->id,
        );
        $insert_id= $sales->insert_data('sales_entry',$insert_data);

        // print_r($insert_data);exit;
       
        redirect()->to('sales/daily_sales');
    }
}
