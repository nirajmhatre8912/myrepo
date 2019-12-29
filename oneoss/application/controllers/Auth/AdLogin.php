<?php

class AdLogin extends CI_Controller
{

    public $CI = NULL;
    public function __contruct()
    {
        parent::__contruct();
        log_message('debug','AdLogin constructor called... ');	
    

    }


    public function chkACC($myaccess,$cmp) {
        
        // in view just call
        //$this->CI->yourMethod();
        
        if (strpos($cmp, $myaccess) !== false) {
            return 'true';
        }
        else{
            return 'false';
        }
    }

    public function getAuth()
    {

        //required|valid_email
        $this->form_validation->set_rules('emailid','Email id','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run())
        {
            $emailid=$this->input->post('emailid'); 
            $password=$this->input->post('password');


            $this->load->model('User_Login_Model');
            log_message('info','getAuth method got called...');
            log_message('debug','Username :- '.$emailid);


                                        /* DB USER AUTHENTICATION MODULE*/

                                         if (strpos($emailid,"@") == false)
                                        {
                                            log_message('info','this is db user...');
                                            $user_status = 1; //for active user
                                            $validate=$this->User_Login_Model->validateDBlogin($emailid,$password,$user_status);
                                            $validate1=print_r($validate, TRUE);
                                            log_message('debug','validation result='.$validate1); 
                                            
                                            
                                                     if ($validate["user_group"])
                                                    {
                        
                                                    


                                                            $this->session->set_userdata('uid',$validate["id"]);
                                                            $this->session->set_userdata('user_group',$validate["user_group"]);
                                                            $this->session->set_userdata('userType',$validate["userType"]);
                                                            $this->session->set_userdata('groupID',$validate["user_group"]); 
                                                            $this->session->set_userdata('subGroupID',$validate["sub_group"]);
                                                            $Role=$this->User_Login_Model->get_role($emailid);
                                                            
                                                            $section=$Role->groupSection;
															$Role=$Role->groupName; 															
                                                            $session=session_id();
                                                            $status = 'A';
                                                            $_SESSION['SESSION_ID'] = $session;
                                                            $_SESSION['section'] = $section;
                                                            $userarray = explode("@", $emailid);
                                                            $_SESSION['EMAIL'] =  $emailid;
                                                            $_SESSION['USER'] =  $emailid;
                                                            $REMOTE=$_SERVER['REMOTE_ADDR'];
                                                            $_SESSION['REMOTE_ADDR']=$REMOTE;
                                                            $_SESSION['ROLE'] = $Role;
                                                            $this->session->set_userdata('page_name','Dashboard');
                                                            $grp_result=$this->User_Login_Model->get_group_role_mapping($validate["sub_group"]);
                                                            $this->session->set_userdata('user_info',$grp_result);

                                                            // ADDIND DATA TO AUDIT TABLE 
                            
                                                            log_message('debug','loading model Active_Session');
                                                            $this->load->model('Active_Session');
                                                            log_message('debug','calling insert_active_session()');
                                                            $this->Active_Session->insert_active_session($emailid,$validate["id"],$REMOTE,$session,$Role,$status);
                            
                                                                            
                                                                            // Loading configurable menu 
                                                                            
                            
                                                                            log_message('debug','loading Configarable_Login model...');
                                                                            $this->load->model('Configarable_Login');
                                                                        
                                                                            log_message('debug','calling countlastsevendays() method for role='.$Role);
                                                                            $page_status="A";
                                                                            $result=$this->Configarable_Login->countlastsevendays($Role,$page_status);
                                                                            log_message('debug','loading configurable menu with result='.print_r($result,TRUE));
                                                                            //$this->load->view('sidebarconfigarable',['pagelist'=>$result]);
                                                                            
                                                                            $this->session->set_userdata('Config_menu',$result);
                                                                            
                                                                            //$this->load->view("public\dash",['pagelist'=>$result]); 
                                                                            log_message('debug','loading view public\Dashboard');
                                                                            //$this->load->helper('cookie');
                                                                            //delete_cookie('ci_session');
                            
                            
                                                                            
                                                                            
                                                                            // Loading active and deactive users 
                                                                            
                                                                            $this->load->model("User_Login_Model");
                                                                            $Act_num = $this->User_Login_Model->total_number_of_user(1);
                                                                            $dec_num = $this->User_Login_Model->total_number_of_user(0);
                                                                            $date_array = $this->User_Login_Model->last_five_days_login_graph(1);
                                                                            $count_array = $this->User_Login_Model->last_five_days_login_graph(0);
                                                                            //$this->load->view("public\Dashboard");
                                                                            $this->load->view("public\dash",['act'=> $Act_num, 'dct' => $dec_num ,'dayarr' => $date_array , 'countarr' => $count_array ]); 
                                                                            return;


                                                    }
                                                    else
                                                    {
                                                            
                                                        $this->session->set_flashdata("error", $emailid." DB Authentication failed...");
                                                        $this->load->view("public/Auth/login");
                                                        return;

                                                    }


                                        }else
                                        {
                                                    log_message('info','Unreachable block here....');
                                        }



                                        /* DB USER AUTHENTICATION MODULE*/


                    /*  setting session  */ 
                    $status=1;
                    $validate=$this->User_Login_Model->validatelogin($emailid,$status);
                    $validate1=print_r($validate, TRUE);
                    $domain_name=$validate["domain_name"];
                    log_message('debug','validation result='.$validate1);


                    if ($validate["user_group"])
                    {

                            // ACTIVE DIRECTORY VALIDATION

                            $login_status = 0;  // 0 for fail and 1 for success    
                            $ldap = ldap_connect($domain_name) or die("That LDAP-URI was not parseable"); 
                            $log_print = print_r($ldap , TRUE);
                            log_message('debug',' ldap connectivity object return'.$log_print);



                            
                                /*
                                check user authentication
                                */
                        
                                        if (!$bind = ldap_bind($ldap, $emailid, $password)) {
                                            //echo "Login Fail";
                                            ldap_get_option($ldap, LDAP_OPT_DIAGNOSTIC_MESSAGE, $extended_error);
                                            //echo("Error message ".$extended_error);
                                            log_message('info',' ldap login error');
                                            log_message('info',' error '.$extended_error);
                                            $login_status = 0;
                                            $this->session->set_flashdata('error',$emailid.' AD authentication failed...');
                                            $this->load->view('public/Auth/login');
                                            return; 
                                    
                                        } else 
                                        {
                                            //echo "Login success";
                                            $login_status = 1;
                                            log_message('info',' ldap login success');
                                            
                                        }   

                            





                            if($login_status = 1)
                            {

                                $this->session->set_userdata('uid',$validate["id"]);
                                $this->session->set_userdata('user_group',$validate["user_group"]); 
                                $this->session->set_userdata('userType',$validate["user_type"]); 
                                $this->session->set_userdata('groupID',$validate["user_group"]); 
                                $this->session->set_userdata('subGroupID',$validate["sub_group"]);
                                $Role=$this->User_Login_Model->get_role($emailid);
                                $section=$Role->groupSection;
								$Role=$Role->groupName; 

							     
		    					$_SESSION['section'] = $section;

                                $session=session_id();
                                $status = 'A';
                                $_SESSION['SESSION_ID'] = $session;
                                $userarray = explode("@", $emailid);
                                $_SESSION['EMAIL'] =  $emailid;
                                $_SESSION['USER'] =  $userarray[0];
                                $REMOTE=$_SERVER['REMOTE_ADDR'];
                                $_SESSION['REMOTE_ADDR']=$REMOTE;
                                $_SESSION['ROLE'] = $Role;
                                $this->session->set_userdata('page_name','Dashboard');

                               
                                //$this->session->set_userdata($newdata);
                                $grp_result=$this->User_Login_Model->get_group_role_mapping($validate["sub_group"]);
                                $this->session->set_userdata('user_info',$grp_result);                           

                                /* ADDIND DATA TO AUDIT TABLE */

                                log_message('debug','loading model Active_Session');
                                $this->load->model('Active_Session');
                                log_message('debug','calling insert_active_session()');
                                $this->Active_Session->insert_active_session($emailid,$validate["id"],$REMOTE,$session,$Role,$status);

                                                /* 
                                                * Loading configurable menu 
                                                */

                                                log_message('debug','loading Configarable_Login model...');
                                                $this->load->model('Configarable_Login');
                                            
                                                log_message('debug','calling countlastsevendays() method for role='.$Role);
                                                $page_status="A";
                                                $result=$this->Configarable_Login->countlastsevendays($Role,$page_status);
                                                $rut=print_r($result,TRUE);
                                                log_message('debug','loading configurable menu with result='.$rut);
                                                //$this->load->view('sidebarconfigarable',['pagelist'=>$result]);
                                                
                                                $this->session->set_userdata('Config_menu',$result);
                                                //$this->load->view("public\dash",['pagelist'=>$result]); 
                                                log_message('debug','loading view public\Dashboard');
                                                //$this->load->helper('cookie');
                                                //delete_cookie('ci_session');


                                                /*
                                                *
                                                * Loading active and deactive users 
                                                */
                                                $this->load->model("User_Login_Model");
                                                $Act_num = $this->User_Login_Model->total_number_of_user(1);
                                                $dec_num = $this->User_Login_Model->total_number_of_user(0);
                                                $date_array = $this->User_Login_Model->last_five_days_login_graph(1);
                                                $count_array = $this->User_Login_Model->last_five_days_login_graph(0);
                                                //$this->load->view("public\Dashboard");
                                                $this->load->view("public\dash",[ 'act'=> $Act_num, 'dct' => $dec_num
                                                
                                                                                        ,'dayarr' => $date_array , 'countarr' => $count_array ]); 
                                                return;
                        
                                        
                                             
                            }else{
                                ldap_get_option($ldap, LDAP_OPT_DIAGNOSTIC_MESSAGE, $extended_error);
                                log_message('info','showing error page');
                                show_error($extended_error,EXIT__AUTO_MAX, $heading = 'LDAP Error Was Encountered');
                                $this->session->set_flashdata('error',$emailid.'LDAP Error Was Encountered');
                                $this->load->view('public/Auth/login');
                                return;
                            }                


                    }
                    else
                    {       

                            $this->session->set_flashdata('error','user '.$emailid.' do not have access on this portal');
                            $this->load->view('public/Auth/login');
                            return;        
                    }     







            

    

        }else
        {

            $this->load->view('public/Auth/login');
            return;
        }
      



    }



    public function decAuthentication(){

        $this->load->helper('cookie');

            log_message('info','logout() called');	
            $sessionUser="";
            $session_id="";
            $sessionUser=$_SESSION['EMAIL'];
            $session_id=$_SESSION['SESSION_ID'];
            log_message('debug','loading model Active_Session');	
            log_message('debug','Session_id = '.$_SESSION['SESSION_ID']);
            log_message('debug','email = '.$_SESSION['EMAIL']);
            $this->load->model('Active_Session');
            log_message('debug','calling remove_active_session()');
            $this->Active_Session->remove_active_session($session_id,$sessionUser);

            unset(
                $_SESSION['EMAIL'],
                $_SESSION['SESSION_ID']
                );

                $this->session->unset_userdata('uid');
                $this->session->sess_destroy();

                delete_cookie('ci_session');
                log_message('debug','loading view welcome controller ... ');
                $this->session->set_flashdata('success', 'Your are successfully logged out..');
                $this->load->view('public/Auth/login');

    }

    public function load_dash()
    {

/*         this method we use to navigate to dashboard using non login event */

        $Role=$_SESSION['ROLE'];
        $page_status=1;
        log_message('debug','loading Configarable_Login model...');
        $this->load->model('Configarable_Login');
    
        log_message('debug','calling countlastsevendays() method for role='.$Role);
        $page_status="A";
        $result=$this->Configarable_Login->countlastsevendays($Role,$page_status);
        $log_result=print_r($result,TRUE);
        log_message('debug','loading configurable menu with result='.$log_result);
        //$this->load->view('sidebarconfigarable',['pagelist'=>$result]);
        
        $this->session->set_userdata('Config_menu',$result);
        //$this->load->view("public\dash",['pagelist'=>$result]); 
        log_message('debug','loading view public\Dashboard');
        //$this->load->helper('cookie');
        //delete_cookie('ci_session');


        /*
        *
        * Loading active and deactive users 
        */
        $this->load->model("User_Login_Model");
        $Act_num = $this->User_Login_Model->total_number_of_user(1);
        $dec_num = $this->User_Login_Model->total_number_of_user(0);
        $date_array = $this->User_Login_Model->last_five_days_login_graph(1);
        $count_array = $this->User_Login_Model->last_five_days_login_graph(0);
        //$this->load->view("public\Dashboard");
        $this->load->view("public\dash",[ 'act'=> $Act_num, 'dct' => $dec_num
        
                                                ,'dayarr' => $date_array , 'countarr' => $count_array ]); 
        return;


    }

}

?>