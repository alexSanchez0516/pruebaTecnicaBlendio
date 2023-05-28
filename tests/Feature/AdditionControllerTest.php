<?php
namespace Tests\Feature;
use Tests\TestCase;

class AdditionControllerTest extends TestCase
{
    public function testAdditionEndpoint()
    {
        $response = $this->get('/api/add/5/6');

        $response->assertStatus(200)
            ->assertJson([
                'result' => 11
            ]);
    }

    public function testNonNumericOperands()
    {
        $response = $this->get('/api/add/5/abc');

        $response->assertStatus(400)
            ->assertJson([
                'error' => 'Both operands must be numbers.'
            ]);
    }
}
