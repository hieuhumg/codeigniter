<?php
/**
 * Created by PhpStorm.
 * User: hieuh
 * Date: 7/24/2019
 * Time: 11:53 PM
 */
class Category_model extends CI_Model
{
    public function __construct()
    {
        $this->db = $this->load->database('default', TRUE);
        $this->table = 'theloaitien';
    }
    public function getCategory()
    {
        $query = $this->db->get($this->table)->result();
        return $query;
    }

}