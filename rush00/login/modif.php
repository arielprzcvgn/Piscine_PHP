<?PHP
global $db;
$db = mysqli_connect("localhost:3307", "root", "password", "Rush00");
if (!$db)
	die("Failed");
mysqli_select_db('users', $db);
if	($_POST[submit] != 'OK' || 
	! $_POST[login] || ! $_POST[oldpw] || ! $_POST[newpw])
{
	echo "ERROR\n";
	exit;
}
$login = $_POST[login];
$oldpw = hash('whirlpool', $_POST[oldpw]);
$newpw = hash('whirlpool', $_POST[newpw]);
$account = mysqli_query($db, 'SELECT `user_name`, `user_passwd`, `admin` FROM users');
while ($data = mysqli_fetch_assoc($account))
{
	if ($data[user_name] == $login && $data[user_passwd] == $oldpw)
	{
		mysqli_query($db, "UPDATE users SET user_passwd='$newpw'");
		header("Location: index.html");
		$exist = 1;
	}
}
if (!$exist)
	echo "ERROR\n";
?>
