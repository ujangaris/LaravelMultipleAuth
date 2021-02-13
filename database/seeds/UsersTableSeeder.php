<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@mail.test',
            'password' => Hash::make('admin0k8')
        ]);
        $author = User::create([
            'name' => 'Author User',
            'email' => 'author@mail.test',
            'password' => Hash::make('admin0k8')
        ]);
        $user = User::create([
            'name' => 'Human User',
            'email' => 'user@mail.test',
            'password' => Hash::make('admin0k8')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
