<?php
session_start();
include("log_mysqli.php");
if ($_SESSION[logged_on_user] == "" || isset($_SESSION[logged_on_user]) === false)
	echo "<FORM method='POST' action='cart.php' target='vitrine'>
	<H3>Connexion</H3>
	<LABEL for='login'>Login : </LABEL>
	<INPUT type='text' name='login' value=''/>
	<BR /><BR />
	<LABEL for='passwd'>Mot de passe : </LABEL>
	<INPUT type='password' name='passwd' value=''/>
	<BR /><BR />
	<INPUT type='submit' name='submit' value='OK'/>
	<BR /><BR />
	</FORM>";
else
	include("cart.php");
?>