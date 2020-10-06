<?PHP
include('auth.php');
include('admin.php');
global $db;
$db = mysqli_connect("localhost:3307", "root", "password", "Rush00");
if (!$db)
	die("Failed");
session_start();

$login = $_POST[login];
$passwd = $_POST[passwd];
if ($login && $passwd && auth($login, $passwd))
{
	$_SESSION[logged_on_user] = $login;
	if (admin($login, $admin))
		$_SESSION[admin] = 1;
	else	
		$_SESSION[admin] = 0;
	header("Location: ../index.php");
}

else
{
	$_SESSION[logged_on_user] = "";
	header("Location: index.html");
}
?>
