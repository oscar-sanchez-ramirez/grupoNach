<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StepSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('steps')->insert([
            [
                'autor' => 'Jose Antonio Editado',
                'imagenTitulo' => 'https://cdn.pixabay.com/photo/2015/01/09/11/08/startup-594090_960_720.jpg',
                'imagenUsuario' => 'https://i.pinimg.com/236x/c7/53/0c/c7530c67000fdbf27b00ba59c9282e39.jpg',
                'descripcion' => 'Contratación paso a paso para tu mejor entrevista',
                'descripcionLarga' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur eum quaerat neque molestias accusantium numquam, id similique delectus totam aliquam corporis dolore voluptatum atque sed error, ex cupiditate earum recusandae?',
                'meGusta' => 57,
                'comentario' => 6,
                'vistas' => 128,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'autor' => 'Mario Cortez',
                'imagenTitulo' => 'https://cdn.pixabay.com/photo/2014/05/02/21/49/blogging-336375_960_720.jpg',
                'imagenUsuario' => 'https://i.pinimg.com/236x/66/cf/23/66cf23901ab7449d3c034eb6b6e63d11.jpg',
                'descripcion' => '5 pasos para tener éxito en tu entrevista de trabajo',
                'descripcionLarga' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur eum quaerat neque molestias accusantium numquam, id similique delectus totam aliquam corporis dolore voluptatum atque sed error, ex cupiditate earum recusandae?',
                'meGusta' => 67,
                'comentario' => 10,
                'vistas' => 178,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'autor' => 'Oscar S.R',
                'imagenTitulo' => 'https://cdn.pixabay.com/photo/2014/05/02/21/46/office-336368_960_720.jpg',
                'imagenUsuario' => 'https://i.pinimg.com/236x/d4/3a/89/d43a893e55b1d1cf3e4d0206a9a69f40.jpg',
                'descripcion' => '¡No lo hagas!  Evita estos puntos pata tener tu mejor CV',
                'descripcionLarga' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur eum quaerat neque molestias accusantium numquam, id similique delectus totam aliquam corporis dolore voluptatum atque sed error, ex cupiditate earum recusandae?',
                'meGusta' => 30,
                'comentario' => 5,
                'vistas' => 97,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}





