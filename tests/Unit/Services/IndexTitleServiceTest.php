<?php

namespace Tests\Unit\Services;

use App\Models\IndexTitle;
use App\Services\IndexTitleService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexTitleServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_delete_an_index_title(): void
    {
        $indexTitle = IndexTitle::factory()->create();

        $service = new IndexTitleService();
        $service->delete($indexTitle->id);

        $this->assertDatabaseMissing('index_titles', [
            'id' => $indexTitle->id,
        ]);
    }
}
