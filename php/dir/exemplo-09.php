<?php
$link ="https://www.google.com.br/data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zd…02Ljg5IDIuNjYtMi42NiA0LjQxLTYu";

$content = file_get_contents($link);

$parse= parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>"/>