<?php

class Jaime extends Lannister
{
    function with ($p) {
        if (get_class($p) == 'Tyrion')
            return ("Not even if I'm drunk !");
        elseif (get_class($p) == 'Cersei')
            return ("With pleasure, but only in a tower in Winterfell, then.");
        elseif (get_class($p) == 'Sansa')
            return ("Let's do this.");
    }
}

?>