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
            'name' => 'Andalucia'
        ]);
        DB::table('communities')->insert([
            'name' => 'Aragón'
        ]);
        DB::table('communities')->insert([
            'name' => 'Canarias'
        ]);
        DB::table('communities')->insert([
            'name' => 'Cantabria'
        ]);
        DB::table('communities')->insert([
            'name' => 'Castilla-La Mancha'
        ]);
        DB::table('communities')->insert([
            'name' => 'Castilla y León'
        ]);
        DB::table('communities')->insert([
            'name' => 'Cataluña'
        ]);
        DB::table('communities')->insert([
            'name' => 'Madrid'
        ]);
        DB::table('communities')->insert([
            'name' => 'Navarra'
        ]);
        DB::table('communities')->insert([
            'name' => 'Comunidad Valenciana'
        ]);
        DB::table('communities')->insert([
            'name' => 'Extremadura'
        ]);
        DB::table('communities')->insert([
            'name' => 'Galicia'
        ]);
        DB::table('communities')->insert([
            'name' => 'Baleares'
        ]);
        DB::table('communities')->insert([
            'name' => 'La Rioja'
        ]);
        DB::table('communities')->insert([
            'name' => 'País Vasco'
        ]);
        DB::table('communities')->insert([
            'name' => 'Asturias'
        ]);
        DB::table('communities')->insert([
            'name' => 'Murcia'
        ]);
    }
}
