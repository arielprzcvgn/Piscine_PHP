<?php
$sql = file_get_contents('rush00.sql');
$host = 'localhost:3306';
$user = 'root';
$pwd = 'root';
$db_name = 'Rush00';
$log = mysqli_connect($host, $user, $pwd);
if (mysqli_multi_query($log, $sql) === false)
    echo "Error : Database setup failed, please check settings in 'login.php'";
?>