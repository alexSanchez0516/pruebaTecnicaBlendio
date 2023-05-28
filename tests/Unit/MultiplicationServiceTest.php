<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\MultiplicationService;

class MultiplicationServiceTest extends TestCase
{
    public function testMultiplication()
    {
        $multiplicationService = new MultiplicationService();

        $result = $multiplicationService->multiply(4, 3);

        $this->assertEquals(12, $result);
    }
}
