<?php

namespace Tests\Unit;

use App\Models\IndexTitle;
use App\Services\IndexTitleService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexTitleServiceTest extends TestCase
{
    use RefreshDatabase;

    protected $indexTitleService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->indexTitleService = new IndexTitleService();
    }

    /** @test */
    public function it_can_delete_an_index_title()
    {
        $indexTitle = IndexTitle::factory()->create();

        $this->assertDatabaseCount('index_titles', 1);

        $this->indexTitleService->delete($indexTitle->id);

        $this->assertDatabaseCount('index_titles', 0);
    }
} 