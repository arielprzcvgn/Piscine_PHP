<?PHP
function admin($login, $admin)
{
	$db = mysqli_connect("localhost:3307", "root", "password", "Rush00");
	if (!$db)
		die("Failed");
	$admin = 'a5feaf9ddde4d03689ed439862c795e76cd72deb24722b81b1ee7b21a70a66fe3d97f111aed2e5da212dd2cf98b314ebcb8a690a3f724f5e1c8b05f2c470b0fb';
	$account = mysqli_query($db, 'SELECT `user_name`, `user_passwd`, `admin` FROM users');
	while ($data = mysqli_fetch_assoc($account))
		if ($data[user_name] == $login && $data[admin] == $admin)
			return TRUE;
	return FALSE;
}
?>
