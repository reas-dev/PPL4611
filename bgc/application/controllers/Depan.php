<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depan extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	// public function login()
	// {
	// 	$this->load->view('login');
    // }
    public function daftar()
	{
		$this->load->view('daftar');
    }
    public function forgot()
	{
		$this->load->view('forgot');
	}
	public function proses_daftar_user()
    {
        $this->load->model('mymodel');
        $data = array(
            'fullname' => $this->input->post('fullname'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'confirm_password' => md5($this->input->post('confirm_password'))
        );
        $query = $this->mymodel->Insert('user', $data);

        if($query)
        {
            echo "<script>alert('Daftar user sukses')</script>";
            $this->index();
        }
        else
        {
            echo "<script>alert('Daftar user gagal')</script>";
            $this->daftar_user();
        }
    }
    // public function proses_update_password()
    // {
    //     $this->load->model('mymodel');
    //     $data = array(
    //         'password' => md5($this->input->post('password'))
    //     );
    //     $where = array(
    //         'id_user' => $id_user,
    //         'email' => $email
    //     );
    //     $query = $this->mymodel->Update('user', $data, $where);

    //     if($query)
    //     {
    //         echo "<script>alert('Ganti password sukses')</script>";
    //         $this->index();
    //     }
    //     else
    //     {
    //         echo "<script>alert('Ganti password gagal')</script>";
    //         $this->daftar_user();
    //     }
    // }
	function proses_login_user()
    {
        $this->load->model('mymodel');
        $where = array(
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password'))
        );
        
        $cek = $this->mymodel->GetWhere('user',$where);
        $count_cek = count($cek);
        if($count_cek > 0)
        {
            $data_session = array(
                'id_user' => $cek[0]['id_user'],
                'username' => $cek[0]['username'],
                'email' => $cek[0]['email'],
                'password' => $cek[0]['password'],
                'image' => $cek[0]['image']
            );
            // $this->session->set_userdata('ci_session_key_generate', TRUE);
            // $this->session->set_userdata('ci_session_key', $data_session);
            // // Remember Me
            // if(!empty($this->input->post("remember")))
            // {
            //     setcookie('email', $data_session[$count_cek]['email'], time()+(10*365*24*60*60));
            //     setcookie('password', $data_session[$count_cek]['password'], time()+(10*365*24*60*60));
            // }
            // else
            // {
            //     setcookie('email','');
            //     setcookie('password','');
            // }
            $this->session->set_userdata($data_session);
            echo "<script>alert('Login user sukses')</script>";
            //$this->load->view('user/index');
            // $this->setCookie();
            // $this->getCookie();
            redirect(base_url('index.php/Dashboarduser'));
        }
        else
        {
            echo "<script>alert('Login user gagal')</script>";
            $this->index();
        }
    }
    function email_ada()
    {
        $this->load->model('mymodel');
        $email = $this->input->post('email');
        if($this->mymodel->email_ada_gak($email)>0)
        {
            echo '1';
        }
        else
        {
            echo '0';
        }
    }
}
?>