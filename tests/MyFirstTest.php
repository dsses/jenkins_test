<?php
use PHPUnit\Framework\TestCase;
require "../app/Human.php";

class HumanTest extends TestCase {

    public function testGetName() {

        $hu = new Human("satoa");
        $this->assertEquals("sato", $hu->getName());
    }
}


