<?php

class LikesModel extends Model{
    public function getCantByIDTema($id){
        $this->db->query("SELECT  COUNT(id_tema) as cantlikes from like_temas WHERE id_tema = $id");
        return $this->db->fetch();
    }

    public function getCantSeguidoresByUsuario($id_usuario){
    	$this->db->query("SELECT COUNT(id_usuario) as cantfollowers from likes_autores WHERE id_usuario = $id_usuario");
        return $this->db->fetch();	
    }

    public function getCantSeguidosByUsuario($id_usuario){
    	$this->db->query("SELECT COUNT(id_autor) as cantfollows from likes_autores WHERE id_autor = $id_usuario");
        return $this->db->fetch();
    }

}
