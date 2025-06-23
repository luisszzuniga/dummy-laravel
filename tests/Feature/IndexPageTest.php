<?php

namespace Tests\Feature;

use App\Models\IndexTitle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_shows_delete_button_for_each_title(): void
    {
        $titles = IndexTitle::factory()->count(3)->create();

        $response = $this->get(route('index'));

        $response->assertOk();

        foreach ($titles as $title) {
            $response->assertSee(route('delete', $title));
        }
    }
} 