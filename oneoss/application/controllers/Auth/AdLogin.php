<?php

class AdLogin extends CI_Controller
{

    public function __contruct()
    {
        parent::__contruct();
        log_message('debug','AdLogin constructor called... ');	

    }


    public function getAuth()
    {

        $this->form_validation->set_rules('emailid','Email id','required|valid_email');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run())
        {
            $emailid=$this->input->post('emailid'); 
            $password=$this->input->post('password');


            $this->load->model('User_Login_Model');
            log_message('info','getAuth method got called...');
            log_message('debug','Username :- '.$emailid.' Password :- '.$password);


                    /*  setting session  */ 
                    $status=1;
                    $validate=$this->User_Login_Model->validatelogin($emailid,$status);
                    $validate1=print_r($validate, TRUE);
                    log_message('debug','validation result='.$validate1);


                    if ($validate["user_group"])
                    {

                            // ACTIVE DIRECTORY VALIDATION

                            $login_status = 0;  // 0 for fail and 1 for success    
                            $ldap = ldap_connect("RGCOM.com") or die("That LDAP-URI was not parseable"); 
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
                                $Role=$this->User_Login_Model->get_role($emailid);
                                $Role=$Role->groupName;   
                                $session=session_id();
                                $status = 'A';
                                $_SESSION['SESSION_ID'] = $session;
                                $userarray = explode("@", $emailid);
                                $_SESSION['EMAIL'] =  $emailid;
                                $_SESSION['USER'] =  $userarray[0];
                                $REMOTE=$_SERVER['REMOTE_ADDR'];
                                $_SESSION['REMOTE_ADDR']=$REMOTE;
                                $_SESSION['ROLE'] = $Role;

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
                                                $result=$this->Configarable_Login->countlastsevendays($Role);
                                                log_message('debug','loading configurable menu with result='.$result);
                                                //$this->load->view('sidebarconfigarable',['pagelist'=>$result]);
                                                
                                                $this->session->set_userdata('Config_menu',$result);
                                                //$this->load->view("public\dash",['pagelist'=>$result]); 
                                                log_message('debug','loading view public\Dashboard');
                                                $this->load->helper('cookie');
                                                delete_cookie('ci_session');
                                                
                                                //$this->load->view("public\Dashboard");
                                                $this->load->view("public\dash",['pagelist'=>$result]); 
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
            $sessionUser=$_SESSION['email'];
            $session_id=$_SESSION['session_id'];
            log_message('debug','loading model Active_Session');	
            $this->load->model('Active_Session');
            log_message('debug','calling remove_active_session()');
            $this->Active_Session->remove_active_session($session_id,$sessionUser);

            unset(
                $_SESSION['email'],
                $_SESSION['session_id']
                );

                $this->session->unset_userdata('sid');
                $this->session->sess_destroy();

                delete_cookie('ci_session');
                log_message('debug','loading view welcome controller ... ');
                $this->session->set_flashdata('success', 'Your are successfully logged out..');
                $this->load->view('public/Auth/login');

    }

}

?>