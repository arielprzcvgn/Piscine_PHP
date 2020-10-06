<?php
session_start();
include("log_mysqli.php");
$id = $_SESSION[logged_on_user];
$sql = "SELECT order_cont FROM orders WHERE `user_name` LIKE '$id';";
$req = mysqli_query($GLOBALS['db'], $sql);
if ($req === false)
    echo mysqli_error($GLOBALS['db']);
$list_order = mysqli_fetch_all($req);
$commandes = array();
for ($i = 0; $i != sizeof($list_order); $i++)
{

}
print_r($list_order);
?>