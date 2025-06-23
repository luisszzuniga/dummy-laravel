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

        $this->assertDatabaseCount(IndexTitle::class, 1);

        $response = $this->delete(route('delete', $indexTitle));

        $response->assertRedirect(route('index'));
        $response->assertSessionHas('success', 'Le titre a bien été supprimé.');

        $this->assertDatabaseCount(IndexTitle::class, 0);
    }
} 