<?php

namespace Database\Seeders;
use Illuminate\Foundation\Auth\User;

use app\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        DB::table('role_user')->truncate();

        $AdminRole = Role::where('name','Admin')->first();
     $admin = User::create([
             'name'=>'Admin',
             'email' => 'admin@gmail.com',
             'password'=>Hash::make('password')

         ]);

         $admin->roles()->attach($AdminRole);
    }
}
