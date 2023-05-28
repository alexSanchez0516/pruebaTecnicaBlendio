<?php
namespace Tests\Feature;
use Tests\TestCase;

class MultiplicationControllerTest extends TestCase
{
    public function testMultiplicationEndpoint()
    {
        $response = $this->get('/api/multiply/3/4');

        $response->assertStatus(200)
            ->assertJson([
                'result' => 12
            ]);
    }

    public function testNonNumericOperands()
    {
        $response = $this->get('/api/multiply/abc/4');

        $response->assertStatus(400)
            ->assertJson([
                'error' => 'Both operands must be numbers.'
            ]);
    }
}
