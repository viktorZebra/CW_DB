<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(\App\User::class)->create([
            'name' => 'Найденышев Артем Олегович',
            'username' => 'admin',
            'role_id' => 1,
        ]);
        //$users = factory(App\User::class, 10)->create(['role_id' => 2]);
        //$users = factory(App\User::class, 30)->create(['role_id' => 3]);
        //$users = factory(App\User::class, 10)->create(['role_id' => 5]);
    }
}
