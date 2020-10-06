<?php

require_once('Ship.class.php');

const WIDTH = 15;
const HEIGHT = 10;
$board = array(array());

for ($y = 0; $y < HEIGHT; $y++) {
    for ($x = 0; $x < WIDTH; $x++) {
        $board[$y][$x]['value'] = '.';
    }
}

$probe1 = new Probe();
$probe1->create('1');
$board = $probe1->place($board);
$probe2 = new Probe();
$probe2->create('2');
$board = $probe2->place($board);

$i = 0;
while (++$i)
{
    print ('L012345678901234C' . PHP_EOL);
    for ($y = 0; $y < HEIGHT; $y++) {
        print ($y);
        for ($x = 0; $x < WIDTH; $x++) {
            print ($board[$y][$x]['value']);
        }
        print (PHP_EOL);
    }

    if ($i % 2)
        $board = $probe1->mvt($board);
    else
        $board = $probe2->mvt($board);
}
?>