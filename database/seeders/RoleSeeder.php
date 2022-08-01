<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'User',
            'description' => '-'
        ]);

        Role::create([
            'name' => 'Admin',
            'description' => '-'
        ]);

        Role::create([
            'name' => 'Super Admin',
            'description' => '-'
        ]);
    }
}
