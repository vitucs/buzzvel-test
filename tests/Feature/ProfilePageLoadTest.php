<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProfilePageLoadTest extends TestCase
{
    public function testPageLoad()
    {
        $response = $this->get('/profile/Victor');

        $response->assertStatus(200);
        $response->assertSeeText('Hello, my name is victor');
        $response->assertSeeText('My History');
        $response->assertSeeText('GitHub');
        $response->assertSeeText('LinkedIn');
        $response->assertSeeText('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
    }
}   
