<?php

namespace Tests\Feature;

use App\Models\IndexTitle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_a_delete_button_for_each_index_title()
    {
        $indexTitles = IndexTitle::factory()->count(3)->create();

        $response = $this->get('/');

        $response->assertStatus(200);

        foreach ($indexTitles as $indexTitle) {
            $response->assertSee($indexTitle->label);
            $response->assertSee(route('index-titles.delete', $indexTitle->id));
        }
    }
} 