<?php
$str = file_get_contents("./index.html", "r") or die("Unable to open file!"); echo base64_encode($str);
?>
