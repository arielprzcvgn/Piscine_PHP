
<?php

require_once 'Vertex.class.php';

class Vertex
{
	public static $verbose = FALSE;
	private $_x = 0;
	private $_y = 0;
	private $_z = 0;
	private $_w = 1.0;
	private $_color;

	function getX () { return $this->_x; }

	function setX ( $v ) { $this->_x = $v; }

	function getY () { return $this->_y; }

	function setY ( $v ) { $this->_y = $v; }

	function getZ () { return $this->_z; }

	function setZ ( $v ) { $this->_z = $v; }

	function getW () { return $this->_w; }

	function setW ( $v ) { $this->_w = $v; }

	function getColor () { return $this->_color; }

	function setColor ( $v ) { $this->_color = $v; }
	
	function __construct (array $kwargs)
	{
		if (array_key_exists('x', $kwargs)) { $this->_x = $kwargs[x]; }
		if (array_key_exists('y', $kwargs)) { $this->_y = $kwargs[y]; }
		if (array_key_exists('z', $kwargs))	{ $this->_z = $kwargs[z]; }
		if (array_key_exists('w', $kwargs))	{ $this->_w = $kwargs[w]; }
		if (array_key_exists('color', $kwargs))	{ $this->_color = $kwargs[color]; }
		else { $this->_color = New Color( array ( 'red' => 255 , 'green' => 255, 'blue' => 255 ) ); }
		if (self::$verbose)
			print($this .' constructed' . PHP_EOL );
		return;
	}

	function __destruct ()
	{
		if (self::$verbose)
			print($this . ' destructed' . PHP_EOL);
		return;
	}

	function __tostring ()
	{
	return('Vertex( x: '. sprintf("%3.2f", $this->_x) .', y: '. sprintf("%3.2f", $this->_y) .', z:'. sprintf("%3.2f", $this->_z) .', w:'. sprintf("%3.2f", $this->_w) . (self::$verbose ? ', ' . $this->_color : '' ) . ' )');
	}

	function doc ()
	{
		return (file_get_contents('Vertex.doc.txt'));
	}
}
?>
