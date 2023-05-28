<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\AdditionService;

class AdditionServiceTest extends TestCase
{
    public function testAddition()
    {
        $additionService = new AdditionService();

        $result = $additionService->add(2, 3);

        $this->assertEquals(5, $result);
    }
}
