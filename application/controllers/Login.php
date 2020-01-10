<?php 
    class Login extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('login_model');
        }
        function index(){
            $this->load->view('login_view');
        }
        function auth(){
            $email    = $this->input->post('email',TRUE);
            $password = md5($this->input->post('password',TRUE));
            $validate = $this->login_model->validate($email,$password);
            if($validate->num_rows() > 0){
                $data  = $validate->row_array();
                $username  = $data['username'];
                $email = $data['email'];
                $role = $data['role'];
                $sesdata = array(
                    'username'  => $username,
                    'email'     => $email,
                    'role'     => $role,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($sesdata);
                // access login for admin
                if($role === '1'){
                    redirect('page');
                // access login for staff
                }elseif($role === '2'){
                    redirect('page/staff');
                // access login for author
                }else{
                    redirect('page/author');
                }
            }else{
                echo $this->session->set_flashdata('msg','Username or Password is Wrong');
                redirect('login');
            }

            // $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
            // $userIp=$this->input->ip_address();
            // $secret = $this->config->item('google_secret');
            // $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
            // $ch = curl_init(); 
            // curl_setopt($ch, CURLOPT_URL, $url); 
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
            // $output = curl_exec($ch); 
            // curl_close($ch);      
            // $status= json_decode($output, true);
            // if ($status['success']) {
            //     print_r('Google Recaptcha Successful');
            //     exit;
            // }else{
            //     $this->session->set_flashdata('flashError', 'Sorry Google Recaptcha Unsuccessful!!');
            // }
            // redirect('recaptcha', 'refresh');
        }
        function logout(){
            $this->session->sess_destroy();
            redirect('login');
        }
    }


?>