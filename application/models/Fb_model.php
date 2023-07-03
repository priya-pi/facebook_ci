<?php

class Fb_model extends CI_Model
{
    public function is_register($id)
    {
        $this->db->where('login_oauth_uid', $id);
        $query = $this->db->get('chat_user');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function Update_user_data($data, $id)
    {
        $this->db->where('login_oauth_uid', $id);
        $this->db->update('chat_user', $data);
    }

    public function insert_User($data)
    {
        $this->db->insert('chat_user', $data);
    }
}

?>
