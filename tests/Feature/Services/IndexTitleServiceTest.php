<?php

namespace Tests\Feature\Services;

use App\Models\IndexTitle;
use App\Services\IndexTitleService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexTitleServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_deletes_an_index_title()
    {
        $indexTitle = IndexTitle::factory()->create();
        $indexTitleService = new IndexTitleService();

        $indexTitleService->delete($indexTitle->id);

        $this->assertDatabaseMissing('index_titles', ['id' => $indexTitle->id]);
    }
}
