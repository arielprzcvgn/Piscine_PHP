<?PHP
function auth($login, $passwd)
{
	$account = unserialize(file_get_contents("../private/passwd"));
	foreach($account as $key=>$elem)
		if ($elem[0] == $login && $elem[1] == hash('whirlpool', $passwd))
			return TRUE;
	return FALSE;
}
?>
