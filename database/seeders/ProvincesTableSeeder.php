<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinces')->insert([
            'name' => 'A Coruña',
            'community_id' => 12
        ]);
        DB::table('provinces')->insert([
            'name' => 'Álava',
            'community_id' => 15
        ]);
        DB::table('provinces')->insert([
            'name' => 'Albacete',
            'community_id' => 5
        ]);
        DB::table('provinces')->insert([
            'name' => 'Alicante',
            'community_id' => 10
        ]);
        DB::table('provinces')->insert([
            'name' => 'Almería',
            'community_id' => 1
        ]);
        DB::table('provinces')->insert([
            'name' => 'Asturias',
            'community_id' => 16
        ]);
        DB::table('provinces')->insert([
            'name' => 'Ávila',
            'community_id' => 6
        ]);
        DB::table('provinces')->insert([
            'name' => 'Badajoz',
            'community_id' => 11
        ]);
        DB::table('provinces')->insert([
            'name' => 'Baleares',
            'community_id' => 13
        ]);
        DB::table('provinces')->insert([
            'name' => 'Barcelona',
            'community_id' => 7
        ]);
        DB::table('provinces')->insert([
            'name' => 'Burgos',
            'community_id' => 6
        ]);
        DB::table('provinces')->insert([
            'name' => 'Cáceres',
            'community_id' => 11
        ]);
        DB::table('provinces')->insert([
            'name' => 'Cádiz',
            'community_id' => 1
        ]);
        DB::table('provinces')->insert([
            'name' => 'Cantabria',
            'community_id' => 4
        ]);
        DB::table('provinces')->insert([
            'name' => 'Castellón',
            'community_id' => 10
        ]);
        DB::table('provinces')->insert([
            'name' => 'Ciudad Real',
            'community_id' => 5
        ]);
        DB::table('provinces')->insert([
            'name' => 'Córdoba',
            'community_id' => 1
        ]);
        DB::table('provinces')->insert([
            'name' => 'Cuenca',
            'community_id' => 5
        ]);
        DB::table('provinces')->insert([
            'name' => 'Girona',
            'community_id' => 7
        ]);
        DB::table('provinces')->insert([
            'name' => 'Granada',
            'community_id' => 1
        ]);
        DB::table('provinces')->insert([
            'name' => 'Guadalajara',
            'community_id' => 5
        ]);
        DB::table('provinces')->insert([
            'name' => 'Guipozkoa',
            'community_id' => 15
        ]);
        DB::table('provinces')->insert([
            'name' => 'Huelva',
            'community_id' => 1
        ]);
        DB::table('provinces')->insert([
            'name' => 'Huesca',
            'community_id' => 2
        ]);
        DB::table('provinces')->insert([
            'name' => 'Jaén',
            'community_id' => 1
        ]);
        DB::table('provinces')->insert([
            'name' => 'La Rioja',
            'community_id' => 14
        ]);
        DB::table('provinces')->insert([
            'name' => 'Las Palmas',
            'community_id' => 3
        ]);
        DB::table('provinces')->insert([
            'name' => 'León',
            'community_id' => 6
        ]);
        DB::table('provinces')->insert([
            'name' => 'Lérida',
            'community_id' => 7
        ]);
        DB::table('provinces')->insert([
            'name' => 'Lugo',
            'community_id' => 12
        ]);
        DB::table('provinces')->insert([
            'name' => 'Madrid',
            'community_id' => 8
        ]);
        DB::table('provinces')->insert([
            'name' => 'Málaga',
            'community_id' => 1
        ]);
        DB::table('provinces')->insert([
            'name' => 'Murcia',
            'community_id' => 17
        ]);
        DB::table('provinces')->insert([
            'name' => 'Navarra',
            'community_id' => 9
        ]);
        DB::table('provinces')->insert([
            'name' => 'Ourense',
            'community_id' => 12
        ]);
        DB::table('provinces')->insert([
            'name' => 'Palencia',
            'community_id' => 6
        ]);
        DB::table('provinces')->insert([
            'name' => 'Pontevedra',
            'community_id' => 12
        ]);
        DB::table('provinces')->insert([
            'name' => 'Salamanca',
            'community_id' => 6
        ]);
        DB::table('provinces')->insert([
            'name' => 'Segovia',
            'community_id' => 6
        ]);
        DB::table('provinces')->insert([
            'name' => 'Sevilla',
            'community_id' => 1
        ]);
        DB::table('provinces')->insert([
            'name' => 'Soria',
            'community_id' => 6
        ]);
        DB::table('provinces')->insert([
            'name' => 'Tarragona',
            'community_id' => 7
        ]);
        DB::table('provinces')->insert([
            'name' => 'Tenerife',
            'community_id' => 3
        ]);
        DB::table('provinces')->insert([
            'name' => 'Teruel',
            'community_id' => 2
        ]);
        DB::table('provinces')->insert([
            'name' => 'Toledo',
            'community_id' => 5
        ]);
        DB::table('provinces')->insert([
            'name' => 'Valencia',
            'community_id' => 10
        ]);
        DB::table('provinces')->insert([
            'name' => 'Valladolid',
            'community_id' => 6
        ]);
        DB::table('provinces')->insert([
            'name' => 'Vizcaya',
            'community_id' => 15
        ]);
        DB::table('provinces')->insert([
            'name' => 'Zamora',
            'community_id' => 6
        ]);
        DB::table('provinces')->insert([
            'name' => 'Zaragoza',
            'community_id' => 2
        ]);
    }
}
