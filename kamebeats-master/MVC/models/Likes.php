<?php

class LikesModel extends Model{
    public function getCantByIDTema($id){
        $this->db->query("SELECT  COUNT(id_tema) as cantlikes from like_temas WHERE id_tema = $id");
        return $this->db->fetch();
    }
}
