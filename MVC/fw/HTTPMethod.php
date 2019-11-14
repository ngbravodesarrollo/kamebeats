<?php
    require '../fw/fw.php';

    public abstract class HTTPMetohd{
        public function successResponse($data){
            $response = array();
            $response["success"] = true;
            $response["data"] = $data;
            exit(json_encode($response));
        }

        public function errorResponse($errorMessage){
            header("HTTP/1.0 400 Bad Request");
            echo $errorMessage;
        }

        public function internarErrorResponse(){
            header('HTTP/1.1 500 Internal Server Error');
            exit();
        }

    }
    
?>