<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        Permission::create(['name' => 'posts.create']);
        Permission::create(['name' => 'posts.update']);
        Permission::create(['name' => 'posts.delete']);
    }
}
