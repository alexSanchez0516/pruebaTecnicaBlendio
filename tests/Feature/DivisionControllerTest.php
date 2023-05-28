<?php
namespace Tests\Feature;
use Tests\TestCase;

class DivisionControllerTest extends TestCase
{
    public function testDivisionEndpoint()
    {
        $response = $this->get('/api/divide/10/2');

        $response->assertStatus(200)
            ->assertJson([
                'result' => 5
            ]);
    }

    public function testDivisionByZero()
    {
        $response = $this->get('/api/divide/10/0');

        $response->assertStatus(400)
            ->assertJson([
                'error' => 'Cannot divide by zero.'
            ]);
    }

    public function testNonNumericOperands()
    {
        $response = $this->get('/api/divide/10/abc');

        $response->assertStatus(400)
            ->assertJson([
                'error' => 'Both operands must be numbers.'
            ]);
    }
}
