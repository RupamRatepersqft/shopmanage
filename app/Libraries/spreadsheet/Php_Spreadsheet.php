<?php



namespace App\Libraries\spreadsheet;


require_once 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

 use CodeIgniter\HTTP\Message;


class Php_Spreadsheet {
	
	
    public function writeSheet($string="")
    {

   
    	  $spreadsheet = new Spreadsheet();        
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hello World !');
        $writer = new Xlsx($spreadsheet);
        $writer->save('property.xlsx');
        echo "Writtem";

    }



    public function writeSheetFromArray($array, $output_filename)
    {

   
       $spreadsheet = new Spreadsheet();        
       $sheet = $spreadsheet->getActiveSheet();

        $i=1;
        foreach ($array[0] as $key => $val)
        {

            $pos=strpos($key, "|");
            if($pos)
                  $key=substr($key, 0, $pos);
            

         
          $sheet->setCellValueByColumnAndRow($i, 1, $key);
          $i++;
          
        } 

      $i=2;
      
      
      foreach ($array as $key => $values) 
      {
       
            $j=1;
            foreach ($values as $key1 => $values1)
            {
              if(trim($values1)=='0'){$values1="";}
              

              $sheet->setCellValueByColumnAndRow($j, $i, trim($values1));
              $j++;

            }     

           $i++;
      }


      $highestColumn = $sheet->getHighestColumn();

      $sheet->getStyle('A1:' . $highestColumn . '1' )->getFont()->setBold(true);


        //$filename="world2121.xlsx";

        //$sheet->setCellValue('A1', 'Hello World !');
        $writer = new Xlsx($spreadsheet);
        $writer->save("tmp/export/".$output_filename);

       // header("Content-Disposition: attachment; filename=".$filename);

       //  unlink($filename);
       //  exit($content);

        //return $this->$response->download('world2121.xlsx', null);

     

    }


    public function writeSheetFromArray1($array, $output_filename)
    {

   
       $spreadsheet = new Spreadsheet();        
       $sheet = $spreadsheet->getActiveSheet();

       $filename=array();

        $col=1;
        foreach ($array[0] as $key => $val)
        {

            $pos=strpos($key, "|");
            if($pos)
                  $key=substr($key, 0, $pos);
            

         
          $sheet->setCellValueByColumnAndRow($col, 1, $key);
          $col++;
          
        } 

        $highestColumn = $sheet->getHighestColumn();
        $sheet->getStyle('A1:' . $highestColumn . '1' )->getFont()->setBold(true);

         $writer = new Xlsx($spreadsheet);
        $writer->save("export/".$output_filename);

      $filename[]=$output_filename;


      $array_sheets=array_chunk($array, 50);
      
      foreach ($array_sheets as $sheet_key => $sheet_values) 
      {

        $spreadsheet1 = new Spreadsheet(); 
        $sheet1 = $spreadsheet1->getActiveSheet();
        //$row = $sheet1->getHighestRow()+1;
        //$sheet1->setCellValueByColumnAndRow(1, $row, "test");
        $row=1;

         foreach ($sheet_values as $key => $values) 
          {
           
                $col=1;
                foreach ($values as $key1 => $values1)
                {
                  if(trim($values1)=='0'){$values1="";}
                  $sheet1->setCellValueByColumnAndRow($col, $row, trim($values1));
                  $col++;

                }     

               $row++;
          }


          $writer = new Xlsx($spreadsheet1);
          $writer->save("export/".$sheet_key.$output_filename);

          $filename[]=$sheet_key.$output_filename;


      }



        $lists = $filename;

        $outfile='merge.xlsx';

        $merge_spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();        
        $merge_spreadsheet->getProperties()->setCreator("act");

        $ai=0;
        foreach($lists as $file){

         

        if(!file_exists("export/".$file)){
            continue;
        }            

        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load("export/".$file);



        foreach($spreadsheet->getSheetNames() as $sheet_name ){
            $clonedWorksheet = clone $spreadsheet->getSheetByName($sheet_name);
            $clonedWorksheet->setTitle($sheet_name.$ai);
            $merge_spreadsheet->addSheet($clonedWorksheet);  


                       
        }

         $ai++;  



        }

        $merge_spreadsheet->removeSheetByIndex(0);  

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet,'Xlsx');
        $writer->save($outfile);


    
     

    }




public function merge1()
{

          $inputFileType = 'Xlsx';
          
          $inputFileNames = [
              'export/0export_property.xlsx',
              'export/1export_property.xlsx',
              'export/2export_property.xlsx'
          ];


          $sheetnames = [
              'Worksheet',
              'Worksheet1',
              'Worksheet2'
          ];


        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
        $reader->setLoadSheetsOnly($sheetnames);
        $inputFileName = array_shift($inputFileNames);
        $spreadsheetMain = $reader->load($inputFileName);
        $spreadsheetMain->getActiveSheet()->setTitle('page0');
        $contador = 1;
        foreach ($inputFileNames as $book => $inputFileName) {
            echo ('$inputFileName: ' . $inputFileName) . '</br>';
            if(!file_exists($inputFileName))
            {
                  echo "$inputFileName does not exist"; exit();
            
            }
            $spreadsheet = $reader->load($inputFileName);
            $clonedWorksheet = clone $spreadsheet->getSheetByName('Worksheet'.$contador);
            $clonedWorksheet->setTitle('Worksheet'.$contador);
            $spreadsheetMain->addExternalSheet($clonedWorksheet);
            $contador++;
        }
        $writer = new Xlsx($spreadsheetMain);
        $writer->save('prueba1.xlsx');



}




public function merge()
{

          $inputFileType = 'Xlsx';
          
          $inputFileNames = [
              'export/0export_property.xlsx',
              'export/1export_property.xlsx',
              'export/2export_property.xlsx'
          ];


          $sheetnames = [
              'Worksheet',
              'Worksheet1',
              'Worksheet2'
          ];


        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
        $reader->setLoadSheetsOnly($sheetnames);
        $inputFileName = array_shift($inputFileNames);
        $spreadsheetMain = $reader->load($inputFileName);
        $spreadsheetMain->getActiveSheet()->setTitle('page0');
        $contador = 1;
        foreach ($inputFileNames as $book => $inputFileName) {
            echo ('$inputFileName: ' . $inputFileName) . '</br>';
            if(!file_exists($inputFileName))
            {
                  echo "$inputFileName does not exist"; exit();
            
            }
            $spreadsheet = $reader->load($inputFileName);
            $clonedWorksheet = clone $spreadsheet->getSheetByName('Worksheet'.$contador);
            $clonedWorksheet->setTitle('Worksheet'.$contador);
            $spreadsheetMain->addExternalSheet($clonedWorksheet);
            $contador++;
        }
        $writer = new Xlsx($spreadsheetMain);
        $writer->save('prueba1.xlsx');



}







    public function writeHTMLSheet($string="")
    {


      $htmlString='<table>
          <tr>
            <th><b>Company</b></th>
            <th><b>Contact</b></th>
            <th>Country</th>
          </tr>
          <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
          </tr>
          <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
          </tr>
          <tr>
            <td>Ernst Handel</td>
            <td>Roland Mendel</td>
            <td>Austria</td>
          </tr>
          <tr>
            <td>Island Trading</td>
            <td>Helen Bennett</td>
            <td>UK</td>
          </tr>
          <tr>
            <td>Laughing Bacchus Winecellars</td>
            <td>Yoshi Tannamuri</td>
            <td>Canada</td>
          </tr>
          <tr>
            <td>Magazzini Alimentari Riuniti</td>
            <td>Giovanni Rovelli</td>
            <td>Italy</td>
          </tr>
        </table>';

       $reader = new \PhpOffice\PhpSpreadsheet\Reader\Html();
        $spreadsheet = $reader->loadFromString($string);

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
        $writer->save('export2.xls'); 


    }



    

}


?>