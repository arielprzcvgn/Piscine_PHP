<?php

abstract class Ship
{
    public static $verbose = FALSE;
    protected $_team;
	protected $_name;
	protected $posx;
	protected $posy;
    protected $_size;
    protected $_rep;
    protected $_hull;
    protected $_engine;
    protected $_handling;
    protected $_speed;
    protected $_shield;
    protected $_weapon;

    abstract function create($nteam);

	function place($board)
	{
		if ($this->_team == '1')
		{
			for ($y = 0; $y < $this->_size[y]; $y++)
				for ($x = 0; $x < $this->_size[x]; $x++){
					$board[$y][$x][value] = $this->_team;
					$this->_posx = $x;
					$this->_posy = $y;
				}
		}
		else if ($this->_team == '2')
		{
			for ($y = 0; $y < $this->_size[y]; $y++)
				for ($x = 0; $x < $this->_size[x]; $x++){
					$board[HEIGHT - 1 - $y][WIDTH - 1 - $x][value] = $this->_team;
					$this->_posx = WIDTH - 1 - $x;
					$this->_posy = HEIGHT - 1 - $y;
				}
		}
		return $board;
	}

	function mvt ($board)
	{
		$mvty = $this->_posy;
		$mvtx = $this->_posx;
		while ( $this->_handling > abs($mvty - $this->_posy) + abs($mvtx - $this->_posx) ||
				abs($mvty - $this->_posy) + abs($mvtx - $this->_posx) > $this->_speed )
		{
			$mvty = readline('Joueur ' . $this->_team . ' mouvement (ligne) : ');
			$mvtx = readline('Joueur ' . $this->_team . ' mouvement (colonne) : ');
		}
		$board[$this->_posy][$this->_posx][value] = '.';
		$board[$mvty][$mvtx][value] = $this->_team;
		$this->_posx = $mvtx;
		$this->_posy = $mvty;
		return $board;
	}

	function __construct ()
	{
		if (self::$verbose)
			print($this . ' constructed' . PHP_EOL );
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
	return('Ship');
	}

	function doc ()
	{
		return (file_get_contents('Ship.doc.txt'));
	}
}

?>

<?php

class Probe extends Ship
{
	public static $verbose = FALSE;

    function create($nteam) {
        $this->_team = $nteam;
        $this->_name = "Really Really Deadly Space Probe";
        $this->_size = array('x' => 1, 'y' => 1);
        $this->_rep = 'X';
        $this->_hull = 2;
        $this->_engine = 10;
        $this->_handling = 2;
        $this->_speed = 20;
        $this->_shield = 1;
		$this->_weapon = array();
    }

	function __construct ()
	{
		if (self::$verbose)
			print($this . ' constructed' . PHP_EOL );
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
	return('Really Really Deadly Space Probe');
	}

	function doc ()
	{
		return (file_get_contents('Ship.doc.txt'));
	}
}

?>