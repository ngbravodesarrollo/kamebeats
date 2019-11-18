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
    
    public function getByFollowed($id_usuario){
        $this->db->query("  SELECT * 
                            FROM temas as t
                            INNER JOIN autores as a
                            ON a.id_tema=t.id_tema
                            WHERE a.is_author=1
                            AND  a.id_usuario in 
                                                (SELECT id_autor
                                                 FROM likes_autores
                                                 WHERE id_usuario='$id_usuario')
                            ORDER BY creado DESC");
        return $this->db->fetchAll();
    }

    public function getMasLikeado(){
        $this->db->query("  SELECT t.nombre, t.descripcion, t.creado,t.id_tema,
                            count(l.id_tema) as cant_likes
                            FROM temas as t
                            INNER JOIN likes_temas as l
                            ON t.id_tema = l.id_tema
                            GROUP BY t.nombre
                            ORDER BY cant_likes DESC");
        $this->db->fetchAll();
    }

    public function remove($id_tema){
        $this->db->query("DELETE FROM temas WHERE id_tema= $id_tema");
    }

    public function create($tema){
        $this->db->query("INSERT INTO temas (nombre,id_categoria,descripcion,creado) 
                        VALUES ($tema->nombre,$tema->id_categoria,$tema->descripcion,GETDATE())");
    }

    public function update($tema){
        $this->db->query("UPDATE temas SET
                        nombre=$tema->nombre,id_categoria= $tema->id_categoria,descripcion= $tema->descripcion
                        WHERE id_tema=$tema->id_tema");
    }
}	


