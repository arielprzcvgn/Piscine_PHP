<?PHP
session_start();
$iam = $_SESSION[logged_on_user];
if (isset($iam) && $iam != null)
	echo $iam."\n";
else
	echo "ERROR\n";
?>
