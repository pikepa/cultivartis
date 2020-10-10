<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $users = [
            [
                'name' => 'Peter Pike',
                'email' => 'pikepeter@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('pap4163pap'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
         
        ];

        DB::table('users')->insert($users);


        $user = User::find(1);
        $user->assignrole('Super Admin', 'boxadmin');
        $user = User::find(2);
        $user->assignrole('boxadmin');
        $user = User::find(3);
        $user->assignrole('member');
    }
}
