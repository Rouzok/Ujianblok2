<?php 

class Admin_model extends CI_Model {

    private $_table = 'user';

    public $name;
    public $email;
    public $username;
    public $password;
    public $avatar;
    public $created_at;
    public $last_login;
    

    public function rules()
    {
        return [
            
            ['field' => 'name',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'avatar',
            'label' => 'Avatar'],

            ['field' => 'created_at',
            'label' => 'Created At',
            'rules' => 'required']
            
        ];
    }

    public function getAll()
    {
         return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
         return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function simpan()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->password = MD5($post["password"]);
        $this->avatar = $post["avatar"];
        $this->created_at = $post["created_at"];

        return $this->db->insert($this->_table, $this);
    }
    public function ubah()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->password = MD5($post["password"]);
        $this->avatar = $post["avatar"];
        $this->created_at = $post["created_at"];

        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
    public function hapus($id)
    {
        return $this->db->delete($this->_table, array('id' => $id));
    }

}

?>