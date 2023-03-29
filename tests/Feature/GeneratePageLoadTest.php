<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GeneratePageLoadTest extends TestCase
{
    public function testPageLoad()
    {
        $response = $this->get('/generate');

        $response->assertStatus(200);
        $response->assertSeeText('QR Code Image Generator');
        $response->assertSeeText('Name:');
        $response->assertSeeText('LinkedIn URL:');
        $response->assertSeeText('GitHub URL:');
        $response->assertSeeText('Generate Image');
    }

    public function testFormShowsErrorMessageWhenFieldsAreLeftBlank()
    {
        $response = $this->post('/generate', [
            'name' => '',
            'linkedin' => 'https://www.linkedin.com/in/john-doe',
            'github' => 'https://github.com/johndoe',
        ]);

        $response->assertSessionHasErrors('name');
    }

    public function testFormShowsErrorMessageWhenLinkedInUrlIsInvalid()
    {
        $response = $this->post('/generate', [
            'name' => 'John Doe',
            'linkedin' => 'invalid-url',
            'github' => 'https://github.com/johndoe',
        ]);

        $response->assertSessionHasErrors('linkedin');
    }

    public function testFormShowsErrorMessageWhenGitHubUrlIsInvalid()
    {
        $response = $this->post('/generate', [
            'name' => 'John Doe',
            'linkedin' => 'https://www.linkedin.com/in/john-doe',
            'github' => 'invalid-url',
        ]);

        $response->assertSessionHasErrors('github');
    }
}
