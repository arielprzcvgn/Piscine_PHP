<?php

class UnholyFactory
{
    private $absorbed = array();
    private $fabricated = array();

    function absorb($f) {
        if (get_parent_class($f) == 'Fighter')
        {
            if (isset($this->absorbed[$f->getType()]))
                print ('(Factory already absorbed a fighter of type '. $f->getType() . ')' . PHP_EOL);
            else {
                print ('(Factory absorbed a fighter of type '. $f->getType() .')' . PHP_EOL);
                $this->absorbed[$f->getType()] = $f;
            }
        }
        else
            print ("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
    }

    function fabricate($f) {
        
        if (isset($this->absorbed[$f])) {
            print ('(Factory fabricates a fighter of type '. $f .')' . PHP_EOL);
            return (clone $this->absorbed[$f]);
        }
        else
            print ("(Factory hasn't absorbed any fighter of type " . $f . ")" . PHP_EOL);
    }

    function fight ($target) {
        print_r($this->fabricated);
    }
}

?>