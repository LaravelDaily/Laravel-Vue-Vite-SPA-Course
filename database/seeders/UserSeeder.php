<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::factory()->create(['email' => 'admin@admin.com']);
        $admin->roles()->attach(Role::where('name', 'Administrator')->value('id'));

        $editor = User::factory()->create(['email' => 'editor@edit.com']);
        $editor->roles()->attach(Role::where('name', 'Editor')->value('id'));
    }
}
