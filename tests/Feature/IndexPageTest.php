<?php

namespace Tests\Feature;

use App\Models\IndexTitle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_displays_delete_button_for_each_title(): void
    {
        $titles = IndexTitle::factory()->count(3)->create();

        $response = $this->get(route('welcome'));

        $response->assertStatus(200);

        foreach ($titles as $title) {
            $response->assertSee($title->label);
            $response->assertSee(route('index-title.delete', $title->id));
        }
    }
}
