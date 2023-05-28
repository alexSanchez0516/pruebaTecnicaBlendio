<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\SubtractionService;

class SubtractionServiceTest extends TestCase
{
    public function testSubtraction()
    {
        $subtractionService = new SubtractionService();

        $result = $subtractionService->subtract(5, 3);

        $this->assertEquals(2, $result);
    }
}
