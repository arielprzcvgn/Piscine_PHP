#!/usr/bin/php
<?PHP
date_default_timezone_set('Europe/Paris');
if ($argc != 2)
	exit;
preg_match('/^([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) ([0-9]{2}) ([Jj]anvier|[Ff]évrier|[Ff]evrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]oût|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]écembre|[Dd]ecembre) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})$/', $argv[1], $elem);
if (empty($elem))
{
	echo "Wrong Format\n";
	exit;
}
if (preg_match("/[Jj]anvier/", $elem[3]))
	$elem[3] = "I";
elseif (preg_match("/[Ff]évrier|[Ff]evrier/", $elem[3]))
	$elem[3] = "II";
elseif (preg_match("/[Mm]ars/", $elem[3]))
	$elem[3] = "III";
elseif (preg_match("/[Aa]vril/", $elem[3]))
	$elem[3] = "IV";
elseif (preg_match("/[Mm]ai/", $elem[3]))
	$elem[3] = "V";
elseif (preg_match("/[Jj]uin/", $elem[3]))
	$elem[3] = "VI";
elseif (preg_match("/[Jj]uillet/", $elem[3]))
	$elem[3] = "VII";
elseif (preg_match("/[Aa]oût|[Aa]out/", $elem[3]))
	$elem[3] = "VIII";
elseif (preg_match("/[Ss]eptembre/", $elem[3]))
	$elem[3] = "IX";
elseif (preg_match("/[Oo]ctobre/", $elem[3]))
	$elem[3] = "X";
elseif (preg_match("/[Nn]ovembre/", $elem[3]))
	$elem[3] = "XI";
elseif (preg_match("/[Dd]écembre|[Dd]ecembre/", $elem[3]))
	$elem[3] = "XII";
echo strtotime("$elem[2] $elem[3] $elem[4] $elem[5]:$elem[6]:$elem[7]")."\n";
?>
