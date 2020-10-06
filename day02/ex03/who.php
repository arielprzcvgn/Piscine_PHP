#!/usr/bin/php
<?PHP
date_default_timezone_set('Europe/Paris');
$utmpx = file_get_contents("/var/run/utmpx");
$format = array();
while (strlen($utmpx))
{
	array_push($format, unpack("a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad", $utmpx));
	$utmpx = substr($utmpx, 628);
}

foreach ($format as $elem)
{
	if ($elem[type] == '7')
		echo trim($elem[user])." ".trim($elem[line])."  ".date('M d H:i', $elem[time1])." \n";
}
?>
