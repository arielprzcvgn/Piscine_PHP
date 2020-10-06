#!/usr/bin/php
<?PHP
$file = file_get_contents($argv[1]);
function chevrons($str)
{
	return strtoupper($str[0]);
}
function title($str)
{
	return strtoupper($str[0]);
}
function hehe($str)
{
	$str[0] = preg_replace_callback("/\"(.*?)\"/s", "title", $str[0]);
	$str[0] = preg_replace_callback("/>(.*?)</s", "chevrons", $str[0]);
	return $str[0];
}
function hoho($str)
{
	$str[0] = preg_replace_callback("/[Tt][Ii][Tt][Ll][Ee]=\".+\"|>.+</s", 'hehe', $str[0]);
	return $str[0];
}
$file = preg_replace_callback ("/<[aA].+<\/[aA]>/s", 'hoho', $file);
echo $file;
?>
