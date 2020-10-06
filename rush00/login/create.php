<?PHP
global $db;
$db = mysqli_connect("localhost:3307", "root", "password", "Rush00");
if (!$db)
	die("Failed");
if ($_POST[submit] != 'OK' || ! $_POST[login] || ! $_POST[passwd])
	exit;
$login = $_POST[login];
$passwd = hash('whirlpool', $_POST[passwd]);
$admin = hash('whirlpool', $_POST[admin]);
$account = mysqli_query($db, 'SELECT `user_name`, `user_passwd`, `admin` FROM users');
while ($data = mysqli_fetch_assoc($account))
{
	if ($data[user_name] == $_POST[login])
	{
		header('Location: create.html');
		exit;
	}
}
mysqli_query($db, "INSERT INTO `users` (`user_name`, `user_passwd`, `admin`)
			VALUES ('$login', '$passwd', '$admin')") or die('Error\n');
header("Location: index.html");
?>
