<?php

namespace Tests\Unit;

use App\Models\IndexTitle;
use App\Services\IndexTitleService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexTitleServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_removes_index_title_from_database()
    {
        $title = IndexTitle::factory()->create();
        $service = new IndexTitleService();
        $service->delete($title->id);
        $this->assertDatabaseMissing('index_titles', ['id' => $title->id]);
    }
} 