<?php

namespace Tests\Unit\Services;

use App\Models\IndexTitle;
use App\Services\IndexTitleService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexTitleServiceTest extends TestCase
{
    use RefreshDatabase;

    private IndexTitleService $indexTitleService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->indexTitleService = new IndexTitleService();
    }

    public function test_it_can_delete_an_index_title(): void
    {
        $indexTitle = IndexTitle::factory()->create();

        $this->assertDatabaseCount(IndexTitle::class, 1);

        $this->indexTitleService->delete($indexTitle);

        $this->assertDatabaseCount(IndexTitle::class, 0);
    }
} 