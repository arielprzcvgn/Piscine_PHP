#! /usr/bin/php
<?php

class Color
{
	public static $verbose = FALSE;
	public $red = 0;
	public $green = 0;
	public $blue = 0;

	function __construct (array $kwargs)
	{
		if (array_key_exists('rgb', $kwargs))
		{	
			$this->red = intval($kwargs[rgb] >> 16) % 256;
			$this->green = intval($kwargs[rgb] >> 8) % 256;
			$this->blue = intval($kwargs[rgb]) % 256;
		}
		else
		{
			$this->red = intval($kwargs[red]);
			$this->green = intval($kwargs[green]);
			$this->blue = intval($kwargs[blue]);
		}
		if (self::$verbose)
			print($this .' constructed.' . PHP_EOL );
		return;
	}

	function __destruct ()
	{
		if (self::$verbose)
			print($this . ' destructed.' . PHP_EOL);
		return;
	}

	function __tostring ()
	{
	return('Color( red: ' . sprintf("%3s", $this->red) .', green: ' . sprintf("%3s", $this->green) . ', blue: '. sprintf("%3s", $this->blue) .' )');
	}

	function doc ()
	{
		return (file_get_contents('Color.doc.txt'));
	}

	function add ($color)
	{
		return(New Color( array ( 'red' => ($this->red + $color->red) % 256, 'green' => ($this->green + $color->green) % 256, 'blue' => ($this->blue + $color->blue) % 256)));
	}

	function sub ($color)
	{
		return(New Color( array ( 'red' => ($this->red - $color->red) % 256, 'green' => ($this->green - $color->green) % 256, 'blue' => ($this->blue - $color->blue) % 256)));
	}

	function mult ($value)
	{
		return(New Color( array ( 'red' => ($this->red * $value) % 256, 'green' => ($this->green * $value) % 256, 'blue' => ($this->blue * $value) % 256)));
	}
}

?>