<?php

$image = imagecreatefromjpeg("certificado.jpg");

$title = imagecolorallocate($image, 0,0,0);

$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320, 250, $title,
            "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan.ttf", "CERTIFICADO");

imagettftext($image, 32, 0, 375, 350,  $title,
            "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball.ttf", "Divanei Aparecido");

            imagestring($image, 3, 440, 370, utf8_encode("Concluido em: ").date("d/m/Y"), $title);

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);
?>