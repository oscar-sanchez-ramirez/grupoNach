<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Elena Cruz Moctezuma',
                'email' => 'elena@gmail.com',
                'address' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur magni quo commodi ipsa? Eos libero facilis sint maiores similique natus dolorem hic quae ad architecto, quibusdam, quas dolorum minima perferendis.',
                'area_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Oscar Sanchez Ramirez',
                'email' => 'oscar@gmail.com',
                'address' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur magni quo commodi ipsa? Eos libero facilis sint maiores similique natus dolorem hic quae ad architecto, quibusdam, quas dolorum minima perferendis.',
                'area_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mariana Cruz Moctezuma',
                'email' => 'marian@gmail.com',
                'address' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur magni quo commodi ipsa? Eos libero facilis sint maiores similique natus dolorem hic quae ad architecto, quibusdam, quas dolorum minima perferendis.',
                'area_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Carlos Sanchez Ramirez',
                'email' => 'carlos@gmail.com',
                'address' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur magni quo commodi ipsa? Eos libero facilis sint maiores similique natus dolorem hic quae ad architecto, quibusdam, quas dolorum minima perferendis.',
                'area_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
