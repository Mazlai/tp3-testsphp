<?php
namespace MRover;

class MarsRover {

    public int $x;
    public int $y;
    public String $pos;

    public function __construct() {
        $this->x = 0;
        $this->y = 0;
        $this->pos = 'N';
    }

    public function move() {

    }

    public function position() {
        $position = $this->x.','.$this->y.','.$this->pos;
        return $position;
    }

}

?>