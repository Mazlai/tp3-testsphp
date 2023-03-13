<?php

use PHPUnit\Framework\TestCase;
use MRover\MarsRover;

class testMarsRover extends TestCase {

    /** @test */
    function shouldHaveInitialPosition() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $position = $marsRover->move("");

        // THEN
        $this->assertEquals("0, 0, N", $position);
    }


}