<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'administrador';
        $user->email = 'administrador@gmail.com';
        $user->password = 'Pepian';
        $user->role = 'administrador';
        $user->save();

        $user = new User;
        $user->name = 'Cliente';
        $user->email = 'Cliente@gmail.com';
        $user->password = 'pizza';
        $user->role = 'usuario';
        $user->save();

        $user = new User;
        $user->name = 'superadmin';
        $user->email = 'superadmin@gmail.com';
        $user->password = 'Farmacos';
        $user->role = 'superadmin';
        $user->save();
    }





}
