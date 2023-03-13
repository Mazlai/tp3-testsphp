<?php
namespace MRover;

class MarsRover {

    private int $x;
    private int $y;
    private String $pos;

    public function __construct() {
        $this->x = 0;
        $this->y = 0;
        $this->pos = 'N';
    }

    public function move($sequence) {
        //Découpe la séquence en une série de caractères individuels
        $directions = str_split($sequence);

        foreach($directions as $direction) {
            switch($direction) {
                case "":
                    return "";

                case 'R':
                    if($this->pos === 'N') {
                        $this->pos = 'E';
                    } else {
                        if ($this->pos === 'E') {
                            $this->pos = 'S';
                        } else {
                            if ($this->pos === 'S') {
                                $this->pos = 'W';
                            } else {
                                $this->pos = 'N';
                            }
                        }
                    }
                    break;

                case 'L':
                    if($this->pos === 'N') {
                        $this->pos = 'W';
                    } else {
                        if ($this->pos === 'W') {
                            $this->pos = 'S';
                        } else {
                            if ($this->pos === 'S') {
                                $this->pos = 'E';
                            } else {
                                $this->pos = 'N';
                            }
                        }
                    }
                    break;

                case 'M':
                    switch($this->pos) {
                        case 'N':
                            $this->y++;
                            if($this->y == 10) {
                                $this->y = 0;
                            }
                            break;
                        case 'S':
                            $this->y--;
                            if($this->y == -1) {
                                $this->y = 9;
                            }
                            break;
                        case 'E':
                            $this->x++;
                            if($this->x == 10) {
                                $this->x = 0;
                            }
                            break;
                        case 'W':
                            $this->x--;
                            if($this->x == -1) {
                                $this->x = 9;
                            }
                            break;
                    }
                    break;
                
                default:
                    echo "Votre position doit être valable";
                    break;

            }
        }

        $count = count($directions);
        echo($count);
        if($count > 4) {
            $mod = $count % 4;

            switch($this->pos) {
                case 'R':
                    if($mod === 1) {
                        $this->pos = 'E';
                    } else if ($mod === 2) {
                        $this->pos = "S";
                    } else if($mod === 3) {
                        $this->pos = "W";
                    } else {
                        $this->pos = "N";
                    }
                    break;

                case 'L':
                    if($mod === 1) {
                        $this->pos = 'W';
                    } else if ($mod === 2) {
                        $this->pos = "S";
                    } else if($mod === 3) {
                        $this->pos = "E";
                    } else {
                        $this->pos = "N";
                    }
                    break;
            }
        }
    }

    public function position() {
        $position = strval($this->x).", ".strval($this->y).", ".strval($this->pos);
        return $position;
    }

}

?>