<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model
{
    public function Get($table)
    {
        $res = $this->db->get($table); //(atau bisa pakai) $res = $this->db->query('SELECT * FROM'.$table);
        return $res->result_array(); //mengembalikan hasil operasi $res menjadi sebuah array
    }
    public function GetWhere($table, $data)
    {
        $res = $this->db->get_where($table, $data); 
        return $res->result_array();
    }
    public function Insert($table, $data)
    {
        $res = $this->db->insert($table, $data); //query insert, memasukkan data
        return $res;
    }
    public function Update($table, $data, $where)
    {
        $res = $this->db->update($table, $data, $where); //query update, meng-update data
        return $res;
    }
    //Delete
    public function Delete($table, $where)
    {
        $res = $this->db->delete($table, $where);
        return $res;
    }
    public function GetLaguUser($id_user)
    {
        $res = $this->db->query("SELECT LT.judul, LT.artis, IL.id_lagu_tersedia, IL.waktu_input_user, IL.status, IL.id_ingin_lagu FROM ingin_lagu IL JOIN lagu_tersedia LT ON IL.id_lagu_tersedia = LT.id_lagu_tersedia WHERE IL.id_user='$id_user'");
        return $res->result_array(); //mengembalikan hasil operasi $res menjadi sebuah array
    }
    public function email_ada_gak($email)
    {
        $sql = "SELECT count(email) as c FROM user where email = '$email'";
        $query = $this->db->query($sql);
        $res = $query->result_array();
        return $res[0]['c'];
    }
}
?>