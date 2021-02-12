<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         Schema::disableForeignKeyConstraints();

        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole=Role::where('name','админ')->first();
        $publisherRole=Role::where('name','публикатор')->first();
        $userRole=Role::where('name','потребител')->first();

        $admin=User::create([
            'name'=>'admin',
            'email'=>'admin@admin.bg',
            'image' =>'public/default/Default_Profile.jpg',
            'password'=> Hash::make('admin')
        ]);

        $publisher=User::create([
            'name'=>'publisher',
            'email'=>'publisher@publisher.bg',
            'image' =>'public/default/Default_Profile.jpg',
            'password'=> Hash::make('publisher')
        ]);

        $user=User::create([
            'name'=>'user',
            'email'=>'user@user.bg',
            'image' =>'public/default/Default_Profile.jpg',
            'password'=> Hash::make('user')
        ]);

       

        $admin->roles()->attach($adminRole);
        $publisher->roles()->attach($publisherRole);
        $user->roles()->attach($userRole);
    }
}
