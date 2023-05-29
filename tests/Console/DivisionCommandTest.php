<?php

namespace Tests\Console\Commands;

use Tests\TestCase;

class DivisionCommandTest extends TestCase
{
    public function testDivisionCommand()
    {
        $this->artisan('divide', ['operatorA' => 15, 'operatorB' => 3])
            ->expectsOutput('Result: 5')
            ->assertExitCode(0);
    }
}
