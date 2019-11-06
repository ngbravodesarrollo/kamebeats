<?php

class Likes extends Model{
    public function getCantByIDTema($id){
        $this->db->query("SELECT  COUNT(id_tema) as cantlikes from likes_temas WHERE id_tema = $id");
        return $this->db->fetchAll();
    }
}
