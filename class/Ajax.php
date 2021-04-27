<?php 

abstract class AjaxClass {
    abstract public function getInputVar($varName);
    abstract public function setResponse($response);
}

class Ajax extends AjaxClass {
    public function getInputVar($varName){
        return filter_input(INPUT_GET, $varName, FILTER_SANITIZE_STRING);
    }
    public function setResponse($response){
      echo json_encode([
            'data' => $response
          ]); 
    }
}