<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_api extends CI_Controller {
    function  __construct(){
        parent::__construct();
        $this->load->model('mymodel');
        $this->load->helper('cookie');
    }
    function setCookie(){
        $cookie = array(
            'name' => 'remember',
            'value' => '1',
            'expire' => time()+86500,
            'secure' => TRUE
        );
        $this->input->set_cookie($cookie);
    }
    function getCookie(){
        $name = $this->input->cookie('name');
        echo $name;
    }
    function index(){
        $id_user = $this->input->get('id_user');
        if($id_user == ''){  // tanpa ada id user
            $user = $this->mymodel->Get('user');    //menampilkan semua data
        }else{
            $user = $this->mymodel->GetWhere('user', array('id_user'=>$id_user));   //menampilkan semua data berdasarkan id_user
        }
        echo json_encode($user);
    }
    function login(){
        $id_user = $this->input->get('id_user');
        if($id_user == ''){  // tanpa ada id user
            $user = $this->mymodel->Get('user');    //menampilkan semua data
        }else{
            $user = $this->mymodel->GetWhere('user', array('id_user'=>$id_user));   //menampilkan semua data berdasarkan id_user
        }
        echo json_encode($user);
    }
    function daftar_user(){
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
            $hasil = array('status'=>'Berhasil daftar user');
            echo json_encode($hasil);
        }
        else
        {
            $hasil = array('status'=>'Gagal daftar user');
            echo json_encode($hasil);
        }
    }
    function update_username_dan_nama_user(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username')
        );

        $where = array(
            'id_user' => $this->input->post('id_user')
        );
        $query = $this->mymodel->Update('user', $data, $where);
        if($query)
        {
            $hasil = array('status'=>'Berhasil edit username user');
            echo json_encode($hasil);
        }
        else
        {
            $hasil = array('status'=>'Gagal edit username user');
            echo json_encode($hasil);
        }
    }
    function hapus_user($id_user){
        $id_user = array(
            'id_user' => $id_user
        );
        $query =  $this->mymodel->Delete('user', $id_user);
        
        if($query)
        {
            $hasil = array('status'=>'Berhasil hapus user');
            echo json_encode($hasil);
        }
        else
        {
            $hasil = array('status'=>'Gagal hapus user');
            echo json_encode($hasil);
        }
    }
}
?>