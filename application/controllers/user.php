<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('takmoph_model', 'tak');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function output($deta = '', $page = '', $head = '') {
        $data['detail'] = $deta;
        $data['page'] = $page;
        $data['head'] = $head;

        $this->load->view('template2015', $data);
    }

    public function login() {
        $this->load->view('user/login');
    }

    public function do_login() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $query = $this->tak->login($username, $password);
        //echo $query->num_rows;
        if ($query->num_rows > 0) {
            $row = $query->row();
            $data = array(
                'name' => $row->name,
                'lname' => $row->lname,
                'status' => $row->status,
                'username' => $row->username,
                'user_id' => $row->user_id
            );
            $this->session->set_userdata($data);

            $log = array(
                "username" => $row->username,
                "user_id" => $row->user_id,
                "password" => $password,
                "ip" => $this->input->ip_address(),
                "status" => "True",
                "d_date" => date("Y-m-d H:i:s")
            );

            $this->db->insert("log_login", $log);
            echo 'Success';
        } else {
            echo "NOSuccess";
            $log = array(
                "username" => $username,
                "user_id" => "",
                "password" => $password,
                "ip" => $this->input->ip_address(),
                "status" => "False",
                "d_date" => date("Y-m-d H:i:s")
            );
            $this->db->insert("log_login", $log);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        echo "<script>window.location='" . site_url('user/login') . "'</script>";
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */