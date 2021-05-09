<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboarduser extends CI_Controller
{
    public function index()
	{
        if(!empty($this->session->userdata('id_user')))
        {
            $this->load->view('user/index.php');
        }
        else
        {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
    public function profil($id_user)
    {
        $this->load->model('mymodel');
        $user = $this->mymodel->GetWhere('user', array('id_user' => $id_user));
        $data = array(
            'id_user' => $id_user,
            'fullname' => $user[0]['fullname'],
            'username' => $user[0]['username'],
            'email' => $user[0]['email'],
            'phone' => $user[0]['phone'],
            'image' => $user[0]['image'],
            'address' => $user[0]['address']
        );
        $this->load->view('user/profil', $data);
    }
    public function proses_edit_profil($id_user)
    {
        $this->load->model('mymodel');
        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username')
        );
        if(!empty($_FILES['foto']['tmp_name']))
        {
            //jika ada foto yang diupload
            $data['foto'] = "assets/img/user/".$this->_uploadImage();
            //tambahan foto di array $data, tidak pakai => namun hanya = 
            //_uploadImage() adalah fungsi, nanti kita buat
        }
        $where = array(
            'id_user' => $id_user
        );
        $query = $this->mymodel->Update('user', $data, $where);
        if($query)
        {
            echo "<script>alert('Edit User Sukses')</script>";
            $this->profil($id_user);
        }
        else
        {
            echo "<script>alert('Edit user Gagal')</script>";
            $this->profil($id_user);
        }
    }
    private function _uploadImage()
    {
        $config['upload_path'] = "assets/img/user";
        $config['allowed_types'] = '*';
        $config['file_name'] = date("y-m-d h-i-sa").$_FILES['foto']['name'];
        $config['overwrite'] = true;
        $config['max_size'] = 2048; //2MB

        $this->load->library('upload', $config);

        if($this->upload->do_upload('foto'))
        {
            //echo "berhasil";
            return $this->upload->data("file_name");
        }
        else
        {
            //echo $errors = $this->upload->display_errors();
            return "assets/img/user/default.png";
            //kira harus menyiapkan gambar default
        }
    }
}