<?php

class Comentarios extends Model{
    public function getByIDTema($id){
        $this->db->query("SELECT * from comentarios WHERE id_tema = $id");
        return $this->db->fetchAll();
    }
}
