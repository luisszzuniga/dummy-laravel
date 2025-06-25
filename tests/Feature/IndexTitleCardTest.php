<?php

namespace Tests\Feature;

use App\Models\IndexTitle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexTitleCardTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_cross_is_visible_on_each_card()
    {
        IndexTitle::factory()->count(2)->create();
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('form', false);
        $response->assertSee('type="submit"', false);
        $response->assertSee('&times;', false);
    }
} 