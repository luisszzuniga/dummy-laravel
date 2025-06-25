<?php

namespace Tests\Feature;

use App\Models\IndexTitle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteIndexTitleControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_index_title_controller_deletes_and_redirects()
    {
        $title = IndexTitle::factory()->create();
        $response = $this->delete(route('index-titles.delete', $title->id));
        $response->assertRedirect();
        $response->assertSessionHas('success', 'Le titre a bien été supprimé.');
        $this->assertDatabaseMissing('index_titles', ['id' => $title->id]);
    }
} 