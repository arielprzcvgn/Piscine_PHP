<?PHP
$dir = '../private/';
$file = $dir.'passwd';
if	($_POST[submit] != 'OK' || 
	! $_POST[login] || ! $_POST[oldpw] || ! $_POST[newpw] ||
	!file_exists($dir) || !file_exists($file))
{
	echo "ERROR\n";
	exit;
}
$login = $_POST[login];
$oldpw = hash('whirlpool', $_POST[oldpw]);
$newpw = hash('whirlpool', $_POST[newpw]);
$account = unserialize(file_get_contents($file));
foreach($account as $key=>$elem)
{
	if ($elem[0] == $login && $elem[1] == $oldpw)
	{
		$account[$key][1] = $newpw;
		$exist = TRUE;
	}
}
if ($exist)
{
	file_put_contents($file, serialize($account));
	echo "OK\n";
	header("Location: index.html");
}
else
	echo "ERROR\n";
?>
