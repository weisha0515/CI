<?php
class UserModel extends CI_Model {
    public $table_name = 'userinfo';
    public function __construct() {
        parent::__construct ();
    }

    public function setTableName($table_name){
        $this->table_name = $table_name;
    }

    public function register($name, $password) {
        if ($this->db->insert ( $this->table_name, array (
                'username' => $name,
                'password' => $password
        ) )) {
            return $this->db->insert_id();
        } else {
            log_message ( 'error', 'register error-->' . $this->db->last_query () );//返回上次查询的id
            return false;
        }
    }
    public function login($name, $password) {
        $this->db->where ( array (
                'username' => $name,
                'password' => $password
        ) );
        $query = $this->db->get ( $this->table_name );
        return $query->row_array ();
    }
}
?>