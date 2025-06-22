<?php

namespace Database\Factories;

use App\Models\IndexTitle;
use Illuminate\Database\Eloquent\Factories\Factory;

class IndexTitleFactory extends Factory
{
    protected $model = IndexTitle::class;

    public function definition(): array
    {
        return [
            'label' => $this->faker->sentence(),
        ];
    }
} 