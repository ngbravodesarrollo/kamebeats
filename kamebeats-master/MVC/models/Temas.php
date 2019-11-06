<?php

class TemasModel extends Model {
    public function getByID($id){
        $this->db->query("SELECT * from temas WHERE id_tema = $id");
        return $this->db->fetch();
    }
}