<?php


        // generate select options
        function gen_options ($data, $tx, $vl='id', $sl='Select'){
            //rowdata, select text, select value, select placeholder    

            $op="<option value=''>".$sl."</option>";
            foreach ($data->getResult() as $row)
                            {
                                $op.="<option value='".$row->$vl."'>".$row->$tx."</option>";                
                            }
            return $op;

        }

        // generate radio optios with checkbox and label
        function gen_radio_with_box ($data, $tx, $vl='id', $nm='xyz123'){
            //rowdata, select text, select value, select placeholder    
            $r='';
            foreach ($data->getResult() as $row)
                            {

                                $r = get_rand(5); //random no

                                $op.="<input id='".$r."' type='radio' name='".$nm."' value='".$row->$vl."'>".$row->$tx."/>";                
                                $op.="<label for '".$r."'>".$row->$tx."<label/>";                
                            }
            return $op;

        }


        // generate random number -- n = random number length

        function get_rand($n) { 
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
            $randomString = ''; 
        
            for ($i = 0; $i < $n; $i++) { 
                $index = rand(0, strlen($characters) - 1); 
                $randomString .= $characters[$index]; 
            } 
        
            return $randomString; 
        } 


        function u($e=0){
            if($e==1){
                echo base_url()."/";
            }
            else {
                return base_url();
            }

        }


        function convert_seconds($seconds) 
        {
            $dt1 = new DateTime("@0");
            $dt2 = new DateTime("@$seconds");
            return $dt1->diff($dt2)->format('%a days, %h hours, %i minutes');
        }




        function p($data , $r = 0){
            //p works only in development mode
            if(ENVIRONMENT=='production'): 
                return false; 
            endif;

            if($r==1){
                return print_r($data, true) ;
            }
            else{
                if(is_array($data)){
                    echo "<pre>";
                        print_r($data);
                    echo "</pre>";
                }
                else{ echo $data;}
            }

        }

        function ph($arr)
        {
            if(empty($arr))
                echo "<table border='1' cellpadding='20' ><thead><tr><th>Array</th></thead><tr><td>Empty</td></tr></table>";
            else
            {
                echo "<table border='1' cellpadding='20' ><thead><tr>";
                echo "<th>Array Index No.</th>";
                foreach ($arr[0] as $key => $value) {

                        echo "<th>".str_replace("_", " ",$key)."</th>";
                }
                echo "</tr></thead><tbody>";

                foreach ($arr as $key => $value) {
                    echo "<tr>";
                        echo "<td>".($key+1)."</td>";
                        foreach ($value as $key1 => $value1) {
                        echo "<td>".$value1."</td>";
                    }
                    echo "</tr>";
                }

                echo "</tr></tbody></table>";   
            }
        }

        function send_mail($from="info@ratepersqft.com",$from_name="info ratepersqft", $to="", $subject="", $message=""){
            //echo "hello" ; exit();
            
            $email = \Config\Services::email();

            $email->setProtocol('SMTP');

            $email->SMTPHost = 'smtp.ratepersqft.com' ;
            $email->SMTPUser = 'gd@ratepersqft.com';
            $email->SMTPPass = 'xxxxxx'; //its working
            $email->SMTPPort = '465';
            $email->SMTPCrypto = 'SSL';
            $email->mailType = 'html';

                            
            $email->setFrom($from, $from_name);
            $email->setTo($to);              

            $email->setSubject($subject);
            $email->setMessage($message);        
            $email->send();
            // p($email);

            
            // p($email->printDebugger(['header']));
        
        }



        /* (Arundeep) number list is an array consisting of number and name as an array, message is the common message to be delivered.
        $template_name=the name of the template
        $contact_details is an array that need to be created or updated first. 
        $body_values corresponds to the number of values that corresponds to the sequence of numbers in the template.
        $header = it is the link that needs to be attached
        $button values = the value that needs to be passed to the button values. it must be passed as an array . Maxiumum two allowed 

        */


        function whatsapp_send($template_name, $contact_details=array(), $body_values=array(), $header="", $button_values=array())  
        {

            $contact_name=$contact_details['name'];
            $contact_email=$contact_details['email'];
            $contact_phone=$contact_details['phone'];

            $curl = curl_init();

            $arr_user=array(
                CURLOPT_URL => 'https://api.interakt.ai/v1/public/track/users/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{                       
                    "phoneNumber": "'.$contact_phone.'",
                    "countryCode": "+91",               
                    "traits": {
                        "name": "'.$contact_name.'",
                        "email": "'.$contact_email.'"                           
                    }                       
                }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: '.interakt_api_key
                ),
            );

            curl_setopt_array($curl, $arr_user);

            $response = curl_exec($curl);
            $data_response_contact=json_decode($response);
            print_r($data_response_contact);
                       
            curl_close($curl);
            unset($curl);

            $CURLOPT_POSTFIELDS='
            {
                "countryCode": "+91",
                "phoneNumber": "'.$contact_phone.'",
                "type": "Template",
                "template": {
                    "name": "'.$template_name.'",
                    "languageCode": "en",
                    ';

                if($header!="")
                    $CURLOPT_POSTFIELDS.=' "headerValues":["'.$header.'"],
                ';                                              
                        $CURLOPT_POSTFIELDS.='    "bodyValues":
                        [    
                    ';
                    foreach ($body_values as $key => $value) {
                        if($value==""){$value="NA";}
                    $CURLOPT_POSTFIELDS.='       "'.$value.'"';
                    if($key<(count($body_values)-1))
                        $CURLOPT_POSTFIELDS.=",
                    ";

                    }
                                                        

                    $CURLOPT_POSTFIELDS.=']';
                    if(count($button_values)>0){$CURLOPT_POSTFIELDS.=',';}


                    if(count($button_values)>0){
                        $CURLOPT_POSTFIELDS.=' 
                        "buttonValues": {
                            ';

                            foreach ($button_values as $key => $value) {
                                $CURLOPT_POSTFIELDS.='"'.$key.'" :["'.$value.'"]';

                                if($key<(count($button_values)-1))
                                    $CURLOPT_POSTFIELDS.=",
                                                ";
                            }
                        $CURLOPT_POSTFIELDS.='
                        }';  
                    }
                                                                        
                    $CURLOPT_POSTFIELDS.='

                        }
                        }
                        ';


                    // now send the message

                    $curl = curl_init();

                    $arr=array(
                    CURLOPT_URL => 'https://api.interakt.ai/v1/public/message/',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,                              
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS =>$CURLOPT_POSTFIELDS ,
                    CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
            'Authorization: '.interakt_api_key
            ),
            );
                        
            curl_setopt_array($curl, $arr);

            // print_r($arr);exit();

            $response = curl_exec($curl);

            $data_response=json_decode($response);
            print_r($data_response);

            curl_close($curl);
        }

        function simplemail($from="info@ratepersqft.com", $to="", $subject="", $message="")
        {

                //$to = "arundeep.mds@gmail.com";
                //$subject = "This is subject";
                
                // $message = "<b>This is HTML message.</b>";
                //  $message .= "<h1>This is headline.</h1>";
                
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= 'From: <info@kdmproptech.com>' . "\r\n";
                
                try{
                    $retval = mail ($to,$subject,$message,$headers);
                // var_dump($retval);
                    $return_msg='{"status":"'.$retval.'", "status_message": "success"}';

                    return $return_msg;
                }
                catch (\Exception $e)
                {
                    
                    $return_msg='{"status":"0", "status_message": "'.$e->getMessage().'"}';

                    
                }
                /* 
                if( $retval == true ) {
                    return 1;
                }else {
                    return 0;
                }
            */
        }


        function simplemail2()
        {
            $filename = 'myfile';
            $path = 'your path goes here';
            $file = $path . "/" . $filename;

            $mailto = 'mail@mail.com';
            $subject = 'Subject';
            $message = 'My message';

            $content = file_get_contents($file);
            $content = chunk_split(base64_encode($content));

            // a random hash will be necessary to send mixed content
            $separator = md5(time());

            // carriage return type (RFC)
            $eol = "\r\n";

            // main header (multipart mandatory)
            $headers = "From: name <test@test.com>" . $eol;
            $headers .= "MIME-Version: 1.0" . $eol;
            $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
            $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
            $headers .= "This is a MIME encoded message." . $eol;

            // message
            $body = "--" . $separator . $eol;
            $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
            $body .= "Content-Transfer-Encoding: 8bit" . $eol;
            $body .= $message . $eol;

            // attachment
            $body .= "--" . $separator . $eol;
            $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
            $body .= "Content-Transfer-Encoding: base64" . $eol;
            $body .= "Content-Disposition: attachment" . $eol;
            $body .= $content . $eol;
            $body .= "--" . $separator . "--";

            //SEND Mail
            if (mail($mailto, $subject, $body, $headers)) {
                echo "mail send ... OK"; // or use booleans here
            } else {
                echo "mail send ... ERROR!";
                print_r( error_get_last() );
            }
        }

        function find_changes($old, $new)
        {

                $old_value='{';
                $new_value='{';

                foreach ($new as $key => $value) {
                        
                        if(trim($new[$key])!=trim($old[$key]))
                        {
                            $old_value.='"'.$key.'":"'.$old[$key].'", ';
                            $new_value.='"'.$key.'":"'.$new[$key].'", ';
                        }


                }

                $old_value=rtrim($old_value,", ");
                $new_value=rtrim($new_value,", ");

                $old_value.='}';
                $new_value.='}';

                $changes['old_value']=$old_value;
                $changes['new_value']=$new_value;

                // p($old_value);

                return $changes;




            //  echo "old value= ".$old_value;
                // echo "<br>";

                // echo "new value= ".$new_value;



        }

        function filterWhere($arrWhere)
        {
            $newArr=array();

            
            foreach ($arrWhere as $key => $value)
            {
                    if($value!="")
                        $newArr[$key]= $value;
            }

            return $newArr;

        }

        function filterWhereString($arrWhere)
        {
            $newArr=array();
            $returnString="";

            
            foreach ($arrWhere as $key => $value)
            {
                    if($value!=""){
                        $returnString.=" and ".$key;                           
                        
                    }
            }

            return $returnString;

        }

        //from this function you can get value by passing a key
        function get_data_from_single_array($source_array, $find, $get)
        {
                //this may need to be modifed as it is only prototype
                foreach ($source_array as $key => $value)
                {
                    if($find == $key){
                                return $value;
                            }  
                }

        

        }

        //from this function you can pass one key[val] to get another set of key[val]
        function get_data_from_multi_array($source_array, $key_name, $key_val, $get_key)
        {       
            foreach ($source_array as $item)
            {
            if($item->$key_name == $key_val){
                        return $item->$get_key;
                } 
            }    

        }


        function convertSTDArray($stdObject)
        {
            $array = json_decode(json_encode($stdObject), true);
            return ($array);

        }


        function email_logs($email, $occasion, $table_name, $table_id, $email_content, $sent_status, $sent_status_remarks, $entry_by)
        {

            $db      = \Config\Database::connect();
            $data['email']=$email;
            $data['occasion']=$occasion;
            $data['table_name']=$table_name;
            $data['table_id']=$table_id;
            $data['email_content']=$email_content;
            $data['sent_status']=$sent_status;
            $data['sent_status_remarks']=$sent_status_remarks;
            $data['entry_by']=$entry_by;

            $builder = $db->table('email_logs');
            $builder->insert($data);
            $insert_id=$db->insertID();



        }



        function calender_logs($invite_email, $occasion, $table_name, $table_id, $event_date, $event_name, $event_description, $event_location, $event_color, $time_start, $time_end, $event_all_day, $htmlLink, $sent_status, $sent_status_remarks, $entry_by)
        {


            $db      = \Config\Database::connect();

            $data['invite_email']=$invite_email;
            $data['occasion']=$occasion;
            $data['table_name']=$table_name;
            $data['table_id']=$table_id;
            $data['event_date']=$event_date;
            $data['event_name']=$event_name;
            $data['event_description']=$event_description;
            $data['event_location']=$event_location;
            $data['event_color']=$event_color;
            $data['time_start']=$time_start;
            $data['time_end']=$time_end;
            $data['event_all_day']=$event_all_day;
            $data['htmlLink']=$htmlLink;
            $data['sent_status']=$sent_status;
            $data['sent_status_remarks']=$sent_status_remarks;
            $data['entry_by']=$entry_by;




            $builder = $db->table('calender_logs');
            $builder->insert($data);
            $insert_id=$db->insertID();



        }


        function n($d=0)
        {
            if ($d){echo date("Y-m-d H:i:s"); }
            else{ return  date("Y-m-d H:i:s");   }
        
                
        }




        function minify_html($html)
        {
        $search = array(
            '/(\n|^)(\x20+|\t)/',
            '/(\n|^)\/\/(.*?)(\n|$)/',
            '/\n/',
            '/\<\!--.*?-->/',
            '/(\x20+|\t)/', # Delete multispace (Without \n)
            '/\>\s+\</', # strip whitespaces between tags
            '/(\"|\')\s+\>/', # strip whitespaces between quotation ("') and end tags
            '/=\s+(\"|\')/'); # strip whitespaces between = "'

        $replace = array(
            "\n",
            "\n",
            " ",
            "",
            " ",
            "><",
            "$1>",
            "=$1");

            $html = preg_replace($search,$replace,$html);
            return $html;
        }

        function time_to_secs($time)
        {
            $str_time = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $time);
            sscanf($time, "%d:%d:%d", $hours, $minutes, $seconds);
            $secs = $hours * 3600 + $minutes * 60 + $seconds;
            return $secs;
        }



        function downloadFile($file){
            $file_name = $file;
            $mime = 'application/force-download';
            header('Pragma: public');    
            header('Expires: 0');        
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Cache-Control: private',false);
            header('Content-Type: '.$mime);
            header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
            header('Content-Transfer-Encoding: binary');
            header('Connection: close');
            readfile($file_name);    
            exit();
        }


        function sms_credentials()
        {

            $sms_data['authKey'] = "7113955c8c36af44200175c9f0fce150";
            $sms_data['senderId'] = "KDMPRP";
            $sms_data['route'] = "B";

            return $sms_data;

        }


        function ordinal_suffix($num){

            if($num==""){ return "";}
            if(!is_numeric($num)){return $num;}
            $num = $num % 100; // protect against large numbers
            
            if($num < 11 || $num > 13){
                switch($num % 10){
                    case 1: return $num.'st';
                    case 2: return $num.'nd';
                    case 3: return $num.'rd';
                }
            }
            return $num.'th';
        }


        function deleteKeysfromArray($array, $key_to_keep)
        {
            foreach ($array as $key => $value) {
                    if($key==$key_to_keep) continue;
                    unset($array[$key]);
            }

            return $array;                
        }


        function type_to_col($val, $table, $wcol, $gcol='id', $returnAsArray=false)  //ganesh // 'returnAsArray' paramater by arundeep
        //----- select gcol from table where wcol = val
        {
            //--------- get category name
        $db      = \Config\Database::connect();
        $builder = $db->table($table); 
        $builder->select($gcol);
        $builder->where($wcol, $val);   
       //echo $builder->getCompiledSelect();
        $result = $builder->get()->getRowArray();

        $gcolArr=explode(",", $gcol);
        if(count($gcolArr)==1)
            return $result[$gcol];
        else{
                if($returnAsArray==false)
                    return implode(" ", $result);   
                else
                    return $result;
            }

        }   


?>