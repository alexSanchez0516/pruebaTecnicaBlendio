<?php

namespace Tests\Console\Commands;

use Tests\TestCase;

class AdditionCommandTest extends TestCase
{
    public function testAdditionCommand()
    {
        $this->artisan('add', ['operatorA' => 5, 'operatorB' => 6])
            ->expectsOutput('Result: 11')
            ->assertExitCode(0);
    }
}
