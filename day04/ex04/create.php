<?PHP
if ($_POST[submit] != 'OK' || ! $_POST[login] || ! $_POST[passwd])
{
	echo "ERROR\n";
	exit;
}
$dir = '../private/';
$file = $dir.'passwd';
$login = $_POST[login];
$passwd = hash('whirlpool', $_POST[passwd]);
if (!file_exists($dir))
	mkdir($dir);
if (!file_exists($file))
	file_put_contents($file, "");
$account = unserialize(file_get_contents($file));
foreach($account as $elem)	
{
	if ($elem[0] == $_POST[login])
	{
		echo "ERROR\n";
		exit;
	}
}
$account[] = array($login, $passwd);
file_put_contents($file, serialize($account));
echo "OK\n";
header("Location: index.html");
?>
