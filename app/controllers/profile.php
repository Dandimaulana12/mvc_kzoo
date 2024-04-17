<?php
class profile extends controller{
    public function index(){

        $data_user['user'] = $this->model('user_Model')->profile_user($_SESSION['id_user']);
        $data['full_name'] = $data_user['user']['full_name'];
        $data['username'] = $data_user['user']['username'];
        $data['national'] = $data_user['user']['national'];
        $this->views('profile/profile',$data);
    }

    public function update(){
        if ($this->model('user_Model')->update_user($_POST) > 0) {
            header('Location:'.BASEURL.'/profile/profile');
        }
    }
}