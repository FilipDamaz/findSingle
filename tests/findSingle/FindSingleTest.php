<?php
use PHPUnit\Framework\TestCase;
use function findSingle\findSingle;

class FindSingleTest extends TestCase
{
    public function testFindSingle()
    {
        $this->assertEquals([4], findSingle([1, 2, 3, 4, 1, 2, 3]));
        $this->assertEqualsCanonicalizing([11, 33.39999, 18], findSingle([11, 21, 33.4, 18, 21, 33.39999, 33.4]));
        $this->assertEquals([1, 2, 3, 4, 5], findSingle([1, 2, 3, 4, 5]));

        $this->assertEquals([], findSingle([1, 1, 2, 2, 3, 3]));

        $this->assertEquals([], findSingle([]));
    }
}
