<?php

class NightsWatch implements IFighter
{   
    private $fighters;

    function recruit($r) {
        if ($r instanceof IFighter)
            $this->fighters[] = $r;
        return;
    }

    function fight() {
        foreach ($this->fighters as $fighter)
            $fighter->fight();
    }
}

?>