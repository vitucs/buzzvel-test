<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LayoutPageLoadTest extends TestCase
{
    public function testPageLoad()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Products');
        $response->assertSeeText('Solutions');
        $response->assertSeeText('About');
        $response->assertSeeText('Blog');
        $response->assertSeeText('Contact');
    }
}   
