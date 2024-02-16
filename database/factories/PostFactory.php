<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*
         * Фейкер не создает файлы в папке storage/app/public/posts
         * создадим ее руками
         */
        if (!Storage::exists('public/posts')) {
            Storage::makeDirectory('public/posts');
        }

        return [
            "title" => $this->faker->name(),
            "description" => $this->faker->text(),
            "preview" => $this->faker->text(50),
            "thumbnail" => $this
                ->faker
                ->image(storage_path('app/public/posts'), 640, 520, null, false),
        ];
    }
}
