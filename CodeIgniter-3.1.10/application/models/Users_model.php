<?php
class Users_model extends CI_Model{
    public function __construct()
    {
        $this->db = $this->load->database('default', TRUE);
    }
    public function countPublicUsersWithEmail($email, $id = 0)
    {
        if ($id > 0) {
            $this->db->where('id !=', $id);
        }
        $this->db->where('email', $email);
        return $this->db->count_all_results('users_public');
    }
    public function checkPublicUserIsValid($post)
    {
        $this->db->where('email',$post['email']);
        $this->db->where('password', md5($post['pass']));
        // lay ow mang nao
        $query = $this->db->get('users_public');
        // dem so dong` xem co' trunng` k, trung` thi` tra? ve 1, khong trung tra ve 0
        $result  = $query->row_array();
        if(empty($result))
        {
            return false;
        }else
        {
            return $result;
        }
    }
    public function registerUser($post)
    {
        $this->db->insert('users_public', array(
            'name' => $post['name'],
            'email' => $post['email'],
            'password' => md5($post['pass'])
        ));
        var_dump($this->db->insert_id());die;
        return $this->db->insert_id();

    }
}