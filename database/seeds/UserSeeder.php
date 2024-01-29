<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [
            [
                'id' => 1,
                'name' => 'Davidson Marcelino',
                'email' => 'dedemarcelino.andrade@gmail.com',
                'password' => 'Mudar123',
                'photo' => '',
                'cellphone' => '(11) 97770-9820',
                'access_nivel' => '6',
            ],   
        ];

        foreach ($rows as $key => $row) {
            $exists = User::where('id', $row['id'])->first();
            if ($exists) {
                $exists->update($row);
                continue;
            }
            $user = User::create($row);
        }

    }
}
