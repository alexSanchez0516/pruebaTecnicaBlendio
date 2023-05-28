<?php
namespace Tests\Feature;
use Tests\TestCase;

class SubtractionControllerTest extends TestCase
{
    public function testSubtractionEndpoint()
    {
        $response = $this->get('/api/subtract/10/5');

        $response->assertStatus(200)
            ->assertJson([
                'result' => 5
            ]);
    }

    public function testNonNumericOperands()
    {
        $response = $this->get('/api/subtract/10/abc');

        $response->assertStatus(400)
            ->assertJson([
                'error' => 'Both operands must be numbers.'
            ]);
    }
}
