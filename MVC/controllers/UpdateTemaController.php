<?php
    require '../fw/fw.php';
    require '../models/Temas.php';

    public class ABMTemaHandler extends HTTPMetohd
    {
        private $t_model;

        public function __construct(){
            $t_model= new TemasModel();
        }

        public function altaTema($tema){
            $t_model->create($tema);
        }

        public function modificarTema($tema){
            $t_model->update($tema);
        }

        public function bajaTema($idTema){

        }        
    }
    
    $requestType = $_SERVER['REQUEST_METHOD'];

    switch ($requestType) {
        case 'PUT':
            # code...
            break;
        case 'POST':
            # code...
            break;
        case 'DELETE':
            
            break;
        default:
            # code...
            break;
    }

?>