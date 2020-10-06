
<?php

require_once 'Color.class.php';
require_once 'Vertex.class.php';

class Vector
{
	static $verbose = FALSE;
	private $_x;
	private $_y;
	private $_z;
	private $_w = 0.0;

	function magnitude()
	{
		return (float)(sqrt($this->_x ** 2 + $this->_y ** 2 + $this->_z ** 2));
	}

	function normalize()
	{
		$norme = $this->magnitude();
		return (new Vector(['dest' => new Vertex(['x' => $this->_x / $norme, 'y' => $this->_y / $norme, 'z' => $this->_z / $norme])]));
	}

	function add (Vector $rhs)
	{
		return (new Vector(['dest' => new Vertex(['x' => $this->_x + $rhs->_x, 'y' => $this->_y + $rhs->_y, 'z' => $this->_z + $rhs->_z])]));
	}

	function sub (Vector $rhs)
	{
		return (new Vector(['dest' => new Vertex(['x' => $this->_x - $rhs->_x, 'y' => $this->_y - $rhs->_y, 'z' => $this->_z - $rhs->_z])]));
	}

	function opposite ()
	{
		return (new Vector(['dest' => new Vertex(['x' => $this->_x * (-1), 'y' => $this->_y * (-1), 'z' => $this->_z * (-1)])]));
	}

	function scalarProduct($v)
	{
		return ( new Vector(['dest' => new Vertex([ 'x' => $this->_x * $v, 'y' => $this->_y * $v, 'z' => $this->_z * $v ])]));
	}

	function dotProduct(Vector $rhs)
	{
		return (float)( $this->_x * $rhs->_x + $this->_y * $rhs->_y + $this->_z * $rhs->_z );
	}

	function crossProduct(Vector $rhs) {
		return (new Vector(['dest' => new Vertex([
		'x' => $this->_y * $rhs->_z - $this->_z * $rhs->_y,
		'y' => $this->_z * $rhs->_x - $this->_x * $rhs->_z,
		'z' => $this->_x * $rhs->_y - $this->_y * $rhs->_x])]));
	}

	function cos (Vector $rhs)
	{
		return ($this->dotProduct($rhs) / ($rhs->magnitude() * $this->magnitude()));
	}

	function __construct (array $kwargs)
	{
		if (array_key_exists('orig', $kwargs))
		{
			$this->_x = $kwargs[dest]->getX() - $kwargs[orig]->getX();
			$this->_y = $kwargs[dest]->getY() - $kwargs[orig]->getY();
			$this->_z = $kwargs[dest]->getZ() - $kwargs[orig]->getZ();
		}
		else
		{
			$this->_x = $kwargs[dest]->getX();
			$this->_y = $kwargs[dest]->getY();
			$this->_z = $kwargs[dest]->getZ();
		}
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
		return sprintf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
	}

	function getX () { return $this->_x; }

	function getY () { return $this->_y; }

	function getZ () { return $this->_z; }

	function getW () { return $this->_w; }

	function doc ()
	{
		return (file_get_contents('Vector.doc.txt'));
	}
}
?>