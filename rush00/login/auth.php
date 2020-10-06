<?PHP
function auth($login, $passwd)
{
	$db = mysqli_connect("localhost:3307", "root", "password", "Rush00");
	if (!$db)
		die("Failed");
	$account = mysqli_query($db, 'SELECT `user_name`, `user_passwd` FROM users');
	while ($data = mysqli_fetch_assoc($account)) {
		if ($data[user_name] == $login && $data[user_passwd] == hash('whirlpool', $passwd))
			return TRUE;
	}
	return FALSE;
}
