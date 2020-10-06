<?php
session_start();
require_once("log_mysqli.php");
if ($_POST['submit'] == "OK") {
    $arr = explode("/", $_COOKIE[cart]);
    $val = array();
    $content = "";
    $price = 0;
    for ($i = 0; $i != sizeof($arr); $i++) {
        $val[$i] = explode(":", $arr[$i]);
        if ($val[$i][0] != "") {
            $price += $val[$i][1] * $val[$i][2];
            $content = $content . (string) $val[$i][0] . "x" . (string) $val[$i][1] . "/";
        }
    }

    $sql = "INSERT INTO orders (user_name, order_cont, price) VALUE('$_SESSION[logged_on_user]', '$content', '$price')";
    $req = mysqli_query($GLOBALS['db'], $sql);
    if ($req === false)
        echo mysqli_error($GLOBALS['db']);
    else 
    {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', 0, $params['path'], $params['domain'], $params['secure'], isset($params['httponly']));
        header('Location: tees.php');
    }
}
