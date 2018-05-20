<?php

$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND]= 'SET NAMES utf8';

$conn = new PDO('mysql:host=sql111.epizy.com;dbname=epiz_21950671_bebetoutbeau','epiz_21950671', 'PeJ0w8LdRHCj', $pdo_options);

return $conn;

?>