<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MinimalDifferenceFinderTest extends TestCase
{
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
     public function test_minimum_difference_form_labels(): void
    {
        $response = $this->get('/');
        $response->assertSee('Get the minimal difference number');
        $response->assertSeeTextInOrder(['Get the minimal difference number','Enter the array (comma-separated integers):','Calculate']);
        $response->assertStatus(200);
    }
}
