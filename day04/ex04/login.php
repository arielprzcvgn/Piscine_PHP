<?PHP
include('auth.php');

session_start();

$login = $_POST[login];
$passwd = $_POST[passwd];
if ($login && $passwd && auth($login, $passwd))
{
	$_SESSION[logged_on_user] = $login;
?>
	<iframe title="chat" width=100% height=550px src="chat.php"></iframe>
	<iframe title="speak" width=100% height=50px src="speak.php"></iframe>
<?PHP
}

else
{
	$_SESSION[logged_on_user] = "";
	echo "ERROR\n";
	header("Location: index.html");
}
?>
