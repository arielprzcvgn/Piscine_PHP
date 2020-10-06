<?php

class Tyrion extends Lannister
{
    function with ($p) {
        if (get_parent_class($p) == 'Lannister')
            return ("Not even if I'm drunk !");
        else
            return ("Let's do this.");
    }
}

?>