<?php

namespace Tests\Feature;

use App\Models\IndexTitle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteIndexTitleControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_delete_an_index_title()
    {
        $indexTitle = IndexTitle::factory()->create();

        $this->assertDatabaseCount('index_titles', 1);

        $response = $this->delete(route('index-titles.delete', $indexTitle->id));

        $response->assertRedirect();
        $response->assertSessionHas('success', 'Index title deleted successfully.');
        $this->assertDatabaseCount('index_titles', 0);
    }
} 