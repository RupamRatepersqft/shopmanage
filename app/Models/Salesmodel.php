<?php

namespace App\Models;

use CodeIgniter\Model;

class Salesmodel extends Model
{
    protected $table = 'user';

    public function getUsers()
    {
        return $this->findAll();
    }

    public function getUser($id)
    {
        return $this->find($id);
    }

    public function insertUser($data)
    {
        return $this->insert($data);
    }

    public function updateUser($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteUser($id)
    {
        return $this->delete($id);
    }

    function fetch_latest_post($limit = '')
    {
        if(empty($limit)){
            $db = db_connect();
            $builder = $db->table('blog_post p');
            $builder->select('*');
            $builder->join('user u','u.id = p.created_by');
            $builder->groupBy('p.id');
            $builder->orderBy('p.id','desc');
            $query = $builder->get();
            return $query->getResultArray();;
            $db->close();
        }
        else{
            $db = db_connect();
            $builder = $db->table('blog_post p');
            $builder->select('*');
            $builder->join('user u','u.id = p.created_by');
            $builder->groupBy('p.id');
            $builder->orderBy('p.id','desc');
            $query = $builder->get($limit);
            return $query->getResultArray();;
            $db->close();
        }
    }

    function insert_user_data($insert_data)
    {
        $db = db_connect();
        $builder = $db->table('user');
        $builder->insert($insert_data);
        $c_id = $db->insertId();
        return $c_id;
    }

    function post_blog($insert_data)
    {
        $db = db_connect();
        $builder = $db->table('blog_post');
        $builder->insert($insert_data);
        $c_id = $db->insertId();
        return $c_id;
    }

    function fetch_my_post($userID)
    {    
        $db = db_connect();
        $builder = $db->table('blog_post p');
        $builder->select('p.*,u.name');
        $builder->join('user u','u.id = p.created_by');
        $builder->where('p.id');
        $builder->groupBy('p.created_by',$userID);
        $builder->orderBy('p.id','desc');
        $query = $builder->get();
        return $query->getResultArray();;
        $db->close();   

        $this->db->select('p.*,u.name');
        $this->db->from('blog_post p');
        $this->db->join('user u','p.created_by = u.id ');
        $this->db->where('p.created_by',$userID);

        $this->db->group_by('p.id');
        $this->db->order_by('p.id','desc');

        return $this->db->get()->result();

    }
    function my_post($ID)
    {       
        $this->db->select('p.*');
        $this->db->from('blog_post p');
        $this->db->where('p.id',$ID);

        $query=$this->db->get();
        $result = $query->row(); 
        // print_r($result);exit;

        return $result;

    }

    function update_post($id,$text){
       
      // print_r($text);exit;
        $this->db->set('post', $text);
        $this->db->where('id', $id);
        $result=$this->db->update('blog_post');

        return $result;
    }

    function insert_data($table,$insert_data){
        $db = db_connect();
        $builder = $db->table($table);
        $builder->insert($insert_data);
        $return_id = $db->insertId();
        return $return_id;
    }
}
