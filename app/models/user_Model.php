<?php
class user_Model{
    
    
    private $db ;
    private $cek_user;
    private $data_user;
    private $password;
    private $arr_login;
    
    public function __construct(){
        $this->db = new database;
    }

    // public function aksi_login($data){

    //     // $pwd = bind('password', $data['password'], PDO::PARAM_STR);

    //     $query = 'SELECT * from tb_user where username=:username';
    //     $this->db->query($query);
    //     $this->db->bind('username', $data['username'], PDO::PARAM_STR);

    //     $this->data_user = $this->db->single_data();

    //     $this->db->execute();
    //     $this->cek_user = $this->db->rowCount();
    //     var_dump($this->data_user);
    //     // $_SESSION['id_user'] = $data_user['id_user'];
    //     return $this->cek_user;

    // }
    public function aksi_login($data){
        $query = 'SELECT * from tb_user where username=:username';
        $this->db->query($query);
        $this->db->bind('username', $data['username'], PDO::PARAM_STR);

        $this->data_user = $this->db->single_data();
        $this->password = $this->data_user['password'];

        $this->db->execute();
        $this->cek_user = $this->db->rowCount();

        if ($this->cek_user > 0) {
            if (password_verify($data['password'], $this->password)) {
                $_SESSION['id_user'] = $this->data_user['id_user'];
                $_SESSION['full_name'] = $this->data_user['full_name'];
                $_SESSION['username'] = $this->data_user['username'];
                $_SESSION['status'] = 'user_login';
            }
            else{
                $this->cek_user = 0;
            }
        }else{
            $this->cek_user = 0;
        }

        return $this->cek_user;
    }

    public function profile_user($id){
        $query = "SELECT * from tb_user where id_user=:id_user";
        $this->db->query($query);
        $this->db->bind('id_user', $id, PDO::PARAM_INT);

        return $this->db->single_data();
    }

    public function update_user($data){
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        if ($data["password"] == "") {
            $query = "UPDATE tb_user SET full_name=:full_name, username=:username, national=:national where id_user=:id_user";   
        }
        else{
            $query = "UPDATE tb_user SET full_name=:full_name, username=:username, national=:national, password=:password where id_user=:id_user";   
        }

        $this->db->query($query);

        $this->db->bind('id_user', $data["id_user"], PDO::PARAM_INT);
        $this->db->bind('full_name', $data["full_name"], PDO::PARAM_STR);
        $this->db->bind('username', $data["username"], PDO::PARAM_STR);
        $this->db->bind('national', $data["negara"], PDO::PARAM_STR);
        $this->db->bind('password', $data["password"], PDO::PARAM_STR);

        $this->db->execute();
        
        return $this->db->rowCount();

    }



}