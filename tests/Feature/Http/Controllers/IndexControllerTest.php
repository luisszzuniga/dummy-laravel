<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\IndexTitle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_displays_delete_button_for_each_title()
    {
        IndexTitle::factory()->count(3)->create();

        $response = $this->get('/');

        $response->assertStatus(200);

        $titles = IndexTitle::all();
        foreach ($titles as $title) {
            $response->assertSee('action="/delete/' . $title->id . '"', false);
        }
    }
}
