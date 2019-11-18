<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload_users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		log_message('debug', 'Upload_users constructer got called..');
		$this->load->model('Import_User', 'site');
	}
	
	public function index()
	{
		log_message('debug','calling view upload_users');


				/* MENUBAR LOADING */				
				
				$config_menu=$this->session->userdata('config_menu');
				$this->load->view('admin/upload_users',['pagelist'=>$config_menu]);
			
	}

	// file upload functionality
    public function upload() {
        $data = array();
        $data['title'] = 'Import Excel Sheet | TechArise';
        $data['breadcrumbs'] = array('Home' => '#');
         // Load form validation library
         $this->load->library('form_validation');
         $this->form_validation->set_rules('fileURL', 'Upload File', 'callback_checkFileValidation');
         if($this->form_validation->run() == false) {
            
            $this->load->view('spreadsheet/index', $data);
         } else {
            // If file uploaded
            if(!empty($_FILES['fileURL']['name'])) { 
                // get file extension
                $extension = pathinfo($_FILES['fileURL']['name'], PATHINFO_EXTENSION);

				try{
                if($extension == 'csv'){
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                } elseif($extension == 'xlsx') {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                } else {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                }

				}catch(exception $e)	
				{
					echo "error".$e;
				}
				// file path
                $spreadsheet = $reader->load($_FILES['fileURL']['tmp_name']);
                $allDataInSheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
            
                // array Count
                $arrayCount = count($allDataInSheet);
                $flag = 0;
                $createArray = array('firstName', 'lastName', 'emailId', 'mobileNumber','userPassword','isActive','lastUpdationDate');
				$makeArray = array('firstName' => 'firstName', 'lastName' => 'lastName', 'emailId' => 'emailId', 'mobileNumber' => 'mobileNumber','userPassword' => 'userPassword','isActive'=>'isActive','lastUpdationDate'=>'lastUpdationDate');


				$SheetDataKey = array();
                foreach ($allDataInSheet as $dataInSheet) {
                    foreach ($dataInSheet as $key => $value) {
                        if (in_array(trim($value), $createArray)) {
                            $value = preg_replace('/\s+/', '', $value);
                            $SheetDataKey[trim($value)] = $key;
                        } 
                    }
				}	
				
				$dataDiff = array_diff_key($makeArray, $SheetDataKey);
                if (empty($dataDiff)) {
                    $flag = 1;
				}
				 // match excel sheet column
				 if ($flag == 1) {
                    for ($i = 2; $i <= $arrayCount; $i++) {
                        $addresses = array();
                        //$id = $SheetDataKey['id'];
                        $firstName = $SheetDataKey['firstName'];
                        $lastName = $SheetDataKey['lastName'];
                        $emailId = $SheetDataKey['emailId'];
						$mobileNumber = $SheetDataKey['mobileNumber'];
						$userPassword = $SheetDataKey['userPassword'];
						//$regDate = $SheetDataKey['regDate'];
						$isActive = $SheetDataKey['isActive'];
						$lastUpdationDate = $SheetDataKey['lastUpdationDate'];
						

                        //$id = filter_var(trim($allDataInSheet[$i][$id]), FILTER_SANITIZE_STRING);
                        $firstName = filter_var(trim($allDataInSheet[$i][$firstName]), FILTER_SANITIZE_STRING);
                        $lastName = filter_var(trim($allDataInSheet[$i][$lastName]), FILTER_SANITIZE_EMAIL);
                        $emailId = filter_var(trim($allDataInSheet[$i][$emailId]), FILTER_SANITIZE_STRING);
                        $mobileNumber = filter_var(trim($allDataInSheet[$i][$mobileNumber]), FILTER_SANITIZE_STRING);
						$userPassword = filter_var(trim($allDataInSheet[$i][$userPassword]), FILTER_SANITIZE_STRING);
						//$regDate = filter_var(trim($allDataInSheet[$i][$regDate]), FILTER_SANITIZE_STRING);
						$isActive = filter_var(trim($allDataInSheet[$i][$isActive]), FILTER_SANITIZE_STRING);
						$lastUpdationDate = filter_var(trim($allDataInSheet[$i][$lastUpdationDate]), FILTER_SANITIZE_STRING);
						
						$fetchData[] = array('firstName' => $firstName, 'lastName' => $lastName, 'emailId' => $emailId, 'mobileNumber' => $mobileNumber, 'userPassword' => $userPassword, 'isActive'=>$isActive, 'lastUpdationDate'=>$lastUpdationDate);
                    }   
                    $data['dataInfo'] = $fetchData;
                    $this->site->setBatchImport($fetchData);
                    $this->site->importData();
                } else {
                    echo "Please import correct file, did not match excel sheet column";
				}
				$config_menu=$this->session->userdata('config_menu');
				$data['pagelist'] = $config_menu;
				$this->load->view('admin/display_user', $data);
				
            }              
        }
	}			
	
	
	// checkFileValidation
    public function checkFileValidation($string) {
		$file_mimes = array('text/x-comma-separated-values', 
		  'text/comma-separated-values', 
		  'application/octet-stream', 
		  'application/vnd.ms-excel', 
		  'application/x-csv', 
		  'text/x-csv', 
		  'text/csv', 
		  'application/csv', 
		  'application/excel', 
		  'application/vnd.msexcel', 
		  'text/plain', 
		  'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
		);
		if(isset($_FILES['fileURL']['name'])) {
			  $arr_file = explode('.', $_FILES['fileURL']['name']);
			  $extension = end($arr_file);
			  if(($extension == 'xlsx' || $extension == 'xls' || $extension == 'csv') && in_array($_FILES['fileURL']['type'], $file_mimes)){
				  return true;
			  }else{
				  $this->form_validation->set_message('checkFileValidation', 'Please choose correct file.');
				  return false;
			  }
		  }else{
			  $this->form_validation->set_message('checkFileValidation', 'Please choose a file.');
			  return false;
		  }
	  }

}
?>