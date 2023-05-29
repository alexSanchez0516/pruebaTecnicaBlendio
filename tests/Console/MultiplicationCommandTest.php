<?php

namespace Tests\Console\Commands;

use Tests\TestCase;

class MultiplicationCommandTest extends TestCase
{
    public function testMultiplicationCommand()
    {
        $this->artisan('multiply', ['operatorA' => 4, 'operatorB' => 5])
            ->expectsOutput('Result: 20')
            ->assertExitCode(0);
    }
}
