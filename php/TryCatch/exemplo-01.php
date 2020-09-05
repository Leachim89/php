<?php
/**Bloco de exceções -exemplo forçando um erro */
try{

    throw new Exception("Erro Processing Request", 400);

} catch (Exception $e) {

    /**Métodos existentes*/
    echo json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));

}

?>