<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\MinimalDifferenceFinderController;

class MinimalDifferenceControllerTest extends TestCase
{
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_get_minimal_difference()
    {
        $expected = 5;
        $response = $this->post('/?array_input=4,5,6,7,8,9');
        $response->assertStatus(200);
        $this->assertEquals($expected, 5);
    }
    public function test_return_0_with_empty_input()
    {
        $expected = 0;
        $response = $this->get('/?array_input=');
        $response->assertStatus(200);
        $response->assertDontSee('Minimal Difference');
        $this->assertEquals($expected, 0);
    }
    public function test_get_errors_with_invalid_Input_or_no_comma_in_the_input()
    {
        $response = $this->get('/?array_input=7_5_3_2_1');
        $response->assertStatus(200);

    }

    public function test_return_validation_error_when_missing_Input_values()
    {
        $response = $this->post('/');
        $response->assertStatus(302);
        $response->assertSessionHasErrors('array_input');
    }

}
