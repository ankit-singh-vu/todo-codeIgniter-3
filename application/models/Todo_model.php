<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Todo_model extends CI_Model
{

    public function get_all()
    {
        // $this->load->database();
        $todos = $this->db
            ->select()
            ->from("todos")
            ->get()
            ->result();
        return $todos;
    }

    public function create($data)
    {
        $todos = $this->db->insert('todos', $data);
        return $todos;
    }

    public function update($id, $data)
    {
        return $this->db->where("id", $id)
            ->update('todos', $data);
    }

    public function delete($id)
    {
        $todos = $this->db->where("id", $id)
            ->delete('todos');
        return $todos;
    }

    public function getOne($id)
    {
        $todos = $this->db
            ->select()
            ->from("todos")
            ->where("id", $id)
            ->get()
            ->row();
        return $todos;
    }
}
