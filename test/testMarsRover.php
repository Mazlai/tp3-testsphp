<?php

use PHPUnit\Framework\TestCase;
use MRover\MarsRover;

class testMarsRover extends TestCase {

    /** @test */
    function shouldHaveInitialPosition() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 0, N", $position);
    }

    /** @test */
    function notMoving() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $marsRover->move("");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 0, N", $position);
    }

    /** @test */
    function moveRightOneTime() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $marsRover->move("R");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 0, E", $position);
    }

    /** @test */
    function moveRightTwoTimes() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        
        $marsRover->move("RR");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 0, S", $position);
    }

    /** @test */
    function moveRightThreeTimes() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $marsRover->move("RRR");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 0, W", $position);
    }

    /** @test */
    function moveRightFourTimes() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $marsRover->move("RRRR");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 0, N", $position);
    }

    /** @test */
    function moveRightFiveTimes() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $marsRover->move("RRRRR");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 0, E", $position);
    }

    /** @test */
    function moveLeftOneTime() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $marsRover->move("L");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 0, W", $position);
    }

    /** @test */
    function moveLeftTwoTimes() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $marsRover->move("LL");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 0, S", $position);
    }

    /** @test */
    function moveLeftThreeTimes() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $marsRover->move("LLL");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 0, E", $position);
    }

    /** @test */
    function moveLeftFourTimes() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $marsRover->move("LLLL");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 0, N", $position);
    }

    /** @test */
    function moveLeftFiveTimes() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $marsRover->move("LLLLL");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 0, W", $position);
    }

    /** @test */
    function moveForward() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $marsRover->move("M");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 1, N", $position);
    }

    /** @test */
    function moveBackward() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $marsRover->move("RRM");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 9, S", $position);
    }

    /** @test */
    function moveInAnotherWay() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $marsRover->move("ML");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 1, W", $position);
    }

    /** @test */
    function moveMultipleTimes() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $marsRover->move("MMMMM");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 5, N", $position);
    }

    /** @test */
    function moveMultipleTimesWithDifferentPositions() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $marsRover->move("MMRRRRRML");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("1, 2, N", $position);
    }

    /** @test */
    function moveMultipleTimesInASameDirection() {
        // GIVEN
        $marsRover = new MarsRover();

        // WHEN
        $marsRover->move("MMMMMMMMMM");
        $position = $marsRover->position();

        // THEN
        $this->assertEquals("0, 0, N", $position);  
    }

}