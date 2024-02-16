<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AdminUser;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();

        Post::factory(10)->create();

        AdminUser::factory(1)->create ([
            "name" => "Admin",
            "email" => "laravel@laravel.com",
            "password" => '12345' // раньше делали через Hash::make(), теперь есть каст в модели
        ]);

    }
}
