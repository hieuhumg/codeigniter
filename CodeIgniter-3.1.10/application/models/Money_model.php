<?php
/**
 * Created by PhpStorm.
 * User: hieuh
 * Date: 7/24/2019
 * Time: 11:53 PM
 */
class Money_model extends CI_Model
{
    public function __construct()
    {
        $this->db = $this->load->database('default', TRUE);
        $this->table = 'money';
    }
    public function add($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete()
    {

    }
    public function edit($id,$data)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }
    public function getList($where = array())
    {
        $this->db->select();
        $this->db->from($this->table);
        if (!empty($where)) {
            foreach ($where as $key => $item) {
                $this->db->where($this->table . '.' . $key, $item);
                //, giatri
            }
        }
        $query = $this->db->get()->result();
        return $query;
    }
    public function deleteById($id)
    {
        $query = $this->db->delete($this->table, array('id' => $id));
        return $query;
    }
    public function checkIdData($id)
    {
        $this->db->select('id');
        $this->db->where('id',$id);
        $result = $this->db->get($this->table)->row();
        return $result;


    }

    //search Content
    public function searchContent($search)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->like('content', $search);

        $query = $this->db->get()->result();
        return $query;
    }
    // search Date
    public function searchDate($arrData)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        if(!empty($arrData))
        {
            $this->db->where('date BETWEEN '. $arrData['since']. ' and '. $arrData['todate'].'');
        }
        $query = $this->db->get()->result();
        return $query;

    }
    //pagination Pages
    public function paginationPages()
    {
        $this->db->select('id');
        $this->db->from($this->table);
        $query = $this->db->get();
        $num = $query->num_rows();
        return $num;
    }
    public  function pagination($arrData)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $sql = $this->db->limit(10,$arrData['from']);
        $query = $this->db->get()->result();
        return $query;
    }
}