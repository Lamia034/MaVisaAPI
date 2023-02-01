<?php 

class Post {
    protected $db;
    public function __construct(){
         $this->db = new Database();
    }


    public function getAllVisas() {
        $this->db->query("SELECT * FROM visas");

        return $this->db->resultSet();
    }
}