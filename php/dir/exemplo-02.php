<?php

//verifica se há algo no diretório
$images = scandir("images");

$data = array();

foreach($images as $img){

    //if(in_array(needle, haystack)) = busca dentro de um array
    if(!in_array($img, array(".",".."))){

        $filename = "images".DIRECTORY_SEPARATOR. $img;

        $info = pathinfo($filename);

        //tamanho de um arquivo
        $info["size"] = filesize($filename);

        //data de modificação
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));

        //caminho do arquivo e substituição da barra padrão do php pelo do http
        $info["url"] = "http://localhost/dir/".str_replace("\\","/","$filename");

        array_push($data, $info);

    }
}

echo json_encode($data);

?>