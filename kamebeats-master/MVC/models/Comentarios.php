<?php

class ComentariosModel extends Model{
    public function getByIDTema($id){
        $this->db->query("SELECT * from cometarios WHERE id_tema = $id");
        return $this->db->fetchAll();
    }
}
