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
        
        if($this->form_validation->run()){

            $emailid=$this->input->post('emailid');
            $password=$this->input->post('password');
            $this->load->model('User_Login_Model');
            log_message('info','getAuth method got called...');
            log_message('debug','Username :- '.$emailid.' Password :- '.$password);
           // $username = $username.trim();
           // $password = $password.trim();
            $login_status = 0;  // 0 for fail and 1 for success
    
            $ldap = ldap_connect("RGCOM.com") or die("That LDAP-URI was not parseable"); 
            $log_print = print_r($ldap , TRUE);
            log_message('debug',' ldap connectivity object return'.$log_print);
            #to do 
            # iddentify connection timeout
                //ldap_get_option($ldap, LDAP_OPT_NETWORK_TIMEOUT, $connect_error);
                //echo("Error message ".$connect_error);
    
            /*
            check user authentication
            */
    
                    if ($bind = ldap_bind($ldap, $emailid, $password)) {
                    // log them in!
                        //echo "Login success";
                        $login_status = 1;
                        log_message('info',' ldap login success');
                        
                    } else 
                    {
                    // error message
                        echo "Login Fail";
                        ldap_get_option($ldap, LDAP_OPT_DIAGNOSTIC_MESSAGE, $extended_error);
                        echo("Error message ".$extended_error);
                        log_message('info',' ldap login error');
                        log_message('info',' error '.$extended_error);
                        $login_status = 0;
                    }
    
                    if($login_status = 1)
                    {
                        /*  setting session  */ 
                        
                                $validate=$this->User_Login_Model->validatelogin($emailid,$status);
                                $validate1=print_r($validate, TRUE);
                                //echo ("user group :-  ".$validate["user_group"]." id :- ".$validate["id"]);
                                log_message('debug','validation result='.$validate1);
                            
                                $this->session->set_userdata('uid',$validate["id"]);
                                $this->session->set_userdata('user_group',$validate["user_group"]);    
                                $session=session_id();
                                $_SESSION['session_id'] = $session;
                                $_SESSION['email'] =  $emailid;
                                $REMOTE=$_SERVER['REMOTE_ADDR'];
    


                        log_message('debug','loading view public\Dashboard');
                        $this->load->view("public\Dashboard");
                    }else{
                        ldap_get_option($ldap, LDAP_OPT_DIAGNOSTIC_MESSAGE, $extended_error);
                        log_message('info','showing error page');
                        show_error($extended_error,EXIT__AUTO_MAX, $heading = 'LDAP Error Was Encountered');
                    }
        }else
        {

        }
      



    }

}

?>