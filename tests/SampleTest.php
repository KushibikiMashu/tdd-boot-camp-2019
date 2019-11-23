<?php

use PHPUnit\Framework\TestCase;

/**
 * Class SampleTest
 */
class SampleTest extends TestCase
{
    /**
     * @test
     */
    public function sample()
    {
        $expected = 1;
        $actual = 1;
        $this->assertSame($expected, $actual);
    }
}
