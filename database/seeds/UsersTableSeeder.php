<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'   => 'Luiz Fernando',
            'email'  => 'luiz@luiz.com.br',
            'password' => bcrypt('praquesenha'),
        ]);
        User::create([
            'name'   => 'Rita',
            'email'  => 'rita@rita.com.br',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name'   => 'Sandro',
            'email'  => 'sandro@sandro.com.br',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name'   => 'Lucas',
            'email'  => 'lucas@lucas.com.br',
            'password' => bcrypt('123456'),
        ]);
    }
}
