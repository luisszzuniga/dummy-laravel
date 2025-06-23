<?php

namespace Tests\Feature;

use App\Models\IndexTitle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteIndexTitleControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_delete_an_index_title(): void
    {
        $indexTitle = IndexTitle::factory()->create();

        $response = $this->delete(route('index-title.delete', $indexTitle->id));

        $response->assertRedirect();
        $response->assertSessionHas('success', 'Le titre a bien été supprimé.');

        $this->assertDatabaseMissing('index_titles', [
            'id' => $indexTitle->id,
        ]);
    }
}
