<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\DivisionService;

class DivisionServiceTest extends TestCase
{
    public function testDivision()
    {
        $divisionService = new DivisionService();

        $result = $divisionService->divide(10, 2);

        $this->assertEquals(5, $result);
    }

    public function testDivisionByZero()
    {
        $divisionService = new DivisionService();

        $this->expectException(\InvalidArgumentException::class);

        $divisionService->divide(10, 0);
    }
}
