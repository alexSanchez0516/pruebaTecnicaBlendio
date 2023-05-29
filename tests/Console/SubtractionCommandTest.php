<?php

namespace Tests\Console\Commands;

use Tests\TestCase;

class SubtractionCommandTest extends TestCase
{
    public function testSubtractionCommand()
    {
        $this->artisan('subtract', ['operatorA' => 10, 'operatorB' => 3])
            ->expectsOutput('Result: 7')
            ->assertExitCode(0);
    }
}
