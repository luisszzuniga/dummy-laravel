<?php

namespace Tests\Feature;

use App\Models\IndexTitle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexTitleDeleteTest extends TestCase
{
    use RefreshDatabase;

    public function test_cross_is_visible_on_each_card()
    {
        IndexTitle::factory()->count(2)->create();
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('type="submit" title="Supprimer"', false);
    }

    public function test_delete_index_title_controller_deletes_title()
    {
        $title = IndexTitle::factory()->create();
        $this->assertDatabaseHas('index_titles', ['id' => $title->id]);
        $response = $this->delete(route('index-titles.destroy', $title->id));
        $response->assertRedirect();
        $this->assertDatabaseMissing('index_titles', ['id' => $title->id]);
    }
} 