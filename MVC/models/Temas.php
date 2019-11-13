<?php

class TemasModel extends Model {
    public function getByID($id){
        $this->db->query("SELECT * from temas WHERE id_tema = $id");
        return $this->db->fetch();
    }

    public function getByUsuario ($id_usuario){
    	$this->db->query("SELECT * from temas 
    						WHERE id_tema IN (SELECT id_tema
    						FROM AUTORES 
                            WHERE id_usuario= $id_usuario
                            AND is_author =1)");
        return $this->db->fetchAll();	
    }
}	


