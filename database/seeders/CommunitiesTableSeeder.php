<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommunitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('communities')->insert([
            'name' => 'Andalucia',
            'image' => 'images/community/andalucia.jpg'
        ]);
        DB::table('communities')->insert([
            'name' => 'Aragón',
            'image' => 'images/community/aragon.jpg'
        ]);
        DB::table('communities')->insert([
            'name' => 'Canarias',
            'image' => 'images/community/canarias.jpg'
        ]);
        DB::table('communities')->insert([
            'name' => 'Cantabria',
            'image' => 'images/community/cantabria.jpg'
        ]);
        DB::table('communities')->insert([
            'name' => 'Castilla-La Mancha',
            'image' => 'images/community/castillalamancha.jpg'
        ]);
        DB::table('communities')->insert([
            'name' => 'Castilla y León',
            'image' => 'images/community/castillaleon.jpg'
        ]);
        DB::table('communities')->insert([
            'name' => 'Cataluña',
            'image' => 'images/community/cataluña.jpg'
        ]);
        DB::table('communities')->insert([
            'name' => 'Madrid',
            'image' => 'images/community/madrid.jpg'
        ]);
        DB::table('communities')->insert([
            'name' => 'Navarra',
            'image' => 'images/community/navarra.jpg'
        ]);
        DB::table('communities')->insert([
            'name' => 'Comunidad Valenciana',
            'image' => 'images/community/valencia.jpg'
        ]);
        DB::table('communities')->insert([
            'name' => 'Extremadura',
            'image' => 'images/community/extremadura.jpg'
        ]);
        DB::table('communities')->insert([
            'name' => 'Galicia',
            'image' => 'images/community/galicia.jpg'
        ]);
        DB::table('communities')->insert([
            'name' => 'Baleares',
            'image' => 'images/community/baleares.jpg'
        ]);
        DB::table('communities')->insert([
            'name' => 'La Rioja',
            'image' => 'images/community/larioja.jpg'
        ]);
        DB::table('communities')->insert([
            'name' => 'País Vasco',
            'image' => 'images/community/paisvasco.jpg'
        ]);
        DB::table('communities')->insert([
            'name' => 'Asturias',
            'image' => 'images/community/asturias.jpg'
        ]);
        DB::table('communities')->insert([
            'name' => 'Murcia',
            'image' => 'images/community/murcia.jpg'
        ]);
    }
}
