<?php

namespace Database\Factories;

use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Club>
 */
class ClubFactory extends Factory
{
    protected $model = Club::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->paragraph,
            'parent_id' => null,
        ];
    }

    /**
     * @param  mixed  $parentId
     */
    public function withParent($parentId): ClubFactory
    {
        return $this->state(function (array $attributes) use ($parentId) {
            return [
                'parent_id' => $parentId,
            ];
        });
    }
}
