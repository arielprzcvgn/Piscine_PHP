<?PHP
session_start();
if ($_GET['login'] && $_GET['passwd'] && $_GET['submit'] == 'OK')
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}
?>
<HTML>
<BODY>
<FORM method="GET" action="index.php">
	Identifiant: <INPUT type="text" name="login" value="<?PHP echo $_SESSION['login']?>"/>
	<BR />
	Mot de passe: <INPUT type="text" name="passwd" value="<?PHP echo $_SESSION['passwd']?>"/>
	<INPUT type="submit" name="submit" value="OK"/>
</FORM>
</BODY>
</HTML>
