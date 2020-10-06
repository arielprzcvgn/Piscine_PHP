<?php
global $db;
$db = mysqli_connect("localhost:3307", "root", "password", "Rush00");
if (!$db) {
    include("install.php");
    include("log_mysqli.php");
}
?>