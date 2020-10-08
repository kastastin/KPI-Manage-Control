<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $User = User::updateOrCreate(
            ['email' => "kostya242421@gmail.com"],
            [
                'name' => "Kostya Klymovych",
                'password' => bcrypt('12345'),
                'email' => 'kostya242421@gmail.com',
            ]
        );
    }
}
