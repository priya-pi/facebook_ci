<?php
defined('BASEPATH') or exit('No direct script access allowed');

ini_set('display_errors', 'Off');

class Fb_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('facebook');
        $this->load->model('Fb_model');
    }

    public function login()
    {
        $user_data = [];
        // Authenticate user with facebook
        if ($this->facebook->is_authenticated()) {
            // Get user info from facebook
            $fbUser = $this->facebook->request('get','/me?fields=id,name,email');
            $current_datetime = date('Y-m-d H:i:s');
            if ($this->Fb_model->is_register($fbUser['id']) == true) {
                //update data
                $user_data = [
                    'login_oauth_uid' => $fbUser['id'],
                    'login_oauth_provider' => 'facebook',
                    'name' => $fbUser['name'],
                    'email' => $fbUser['email'],
                    'created_at' => $current_datetime,
                ];
                $this->Fb_model->Update_user_data($user_data, $fbUser['id']);
            } else {
                //insert data
                $user_data = [
                    'login_oauth_uid' => $fbUser['id'],
                    'login_oauth_provider' => 'facebook',
                    'name' => $fbUser['name'],
                    'email' => $fbUser['email'],
                    'created_at' => $current_datetime,
                ];

                $userID = $this->Fb_model->insert_User($user_data);
            }

            $data['userData'] = $user_data;
            $this->session->set_userdata('userData', $user_data);
			
        } else {
            $data['authURL'] = $this->facebook->login_url();
        }

        $this->load->view('login-facebook', $data);
    }

    public function logout()
    {
        $this->facebook->destroy_session();
        $this->session->unset_userdata('userData');
        redirect('fb_controller/login');
    }
}
