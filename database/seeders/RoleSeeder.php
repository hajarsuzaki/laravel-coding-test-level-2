<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = Role::firstOrCreate(['guard_name' => 'web', 'name' => 'Super Admin']);
        $user = Role::firstOrCreate(['guard_name' => 'web', 'name' => 'User']);

    }
}
