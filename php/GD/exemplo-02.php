<?php

$image = imagecreatefromjpeg("certificado.jpg");

$title = imagecolorallocate($image, 0,0,0);

$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $title);

imagestring($image, 5, 440, 350, "Divanei Aparecido", $title);

imagestring($image, 3, 440, 370, utf8_encode("Concluido em: ").date("d/m/Y"), $title);

header("Content-type: image/jpeg");

imagejpeg($image, "certificado-".date("Y-m-d").".jpg");

imagedestroy($image);
?>