<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\IndexTitle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteIndexTitleControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_deletes_an_index_title_and_redirects()
    {
        $indexTitle = IndexTitle::factory()->create();

        $response = $this->delete('/delete/' . $indexTitle->id);

        $response->assertRedirect();
        $response->assertSessionHas('success', 'Le titre a bien été supprimé.');
        $this->assertDatabaseMissing('index_titles', ['id' => $indexTitle->id]);
    }
}
