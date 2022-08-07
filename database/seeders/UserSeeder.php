<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            array(
                'username' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'Super Admin',
            ),
            array(
                'username' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user123'),
                'role' => 'User',
            ),
        );

        foreach ($users as $key => $value) {
            $user = User::updateorCreate([
                'email' => $value['email']
            ],[
                'username' => $value['username'],
                'email' => $value['email'],
                'email_verified_at' => now(),
                'password' => $value['password'],
            ]);

            $user->assignRole($value['role']);
        }
    }
}
