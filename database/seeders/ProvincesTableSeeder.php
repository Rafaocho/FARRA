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
            'community_id' => 12,
            'image' => 'images/province/coruña.avif'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Álava',
            'community_id' => 15,
            'image' => 'images/province/alava.avif'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Albacete',
            'community_id' => 5,
            'image' => 'images/province/albacete.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Alicante',
            'community_id' => 10,
            'image' => 'images/province/alicante.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Almería',
            'community_id' => 1,
            'image' => 'images/province/almeria.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Asturias',
            'community_id' => 16,
            'image' => 'images/province/asturias.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Ávila',
            'community_id' => 6,
            'image' => 'images/province/avila.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Badajoz',
            'community_id' => 11,
            'image' => 'images/province/badajoz.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Baleares',
            'community_id' => 13,
            'image' => 'images/province/baleares.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Barcelona',
            'community_id' => 7,
            'image' => 'images/province/barcelona.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Burgos',
            'community_id' => 6,
            'image' => 'images/province/burgos.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Cáceres',
            'community_id' => 11,
            'image' => 'images/province/caceres.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Cádiz',
            'community_id' => 1,
            'image' => 'images/province/cadiz.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Cantabria',
            'community_id' => 4,
            'image' => 'images/province/cantabria.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Castellón',
            'community_id' => 10,
            'image' => 'images/province/castellon.avif'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Ciudad Real',
            'community_id' => 5,
            'image' => 'images/province/ciudadreal.avif'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Córdoba',
            'community_id' => 1,
            'image' => 'images/province/cordoba.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Cuenca',
            'community_id' => 5,
            'image' => 'images/province/cuenca.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Girona',
            'community_id' => 7,
            'image' => 'images/province/girona.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Granada',
            'community_id' => 1,
            'image' => 'images/province/granada.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Guadalajara',
            'community_id' => 5,
            'image' => 'images/province/guadalajara.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Guipozkoa',
            'community_id' => 15,
            'image' => 'images/province/guipuzcoa.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Huelva',
            'community_id' => 1,
            'image' => 'images/province/huelva.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Huesca',
            'community_id' => 2,
            'image' => 'images/province/huesca.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Jaén',
            'community_id' => 1,
            'image' => 'images/province/jaen.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'La Rioja',
            'community_id' => 14,
            'image' => 'images/province/larioja.avif'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Las Palmas',
            'community_id' => 3,
            'image' => 'images/province/laspalmas.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'León',
            'community_id' => 6,
            'image' => 'images/province/leon.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Lérida',
            'community_id' => 7,
            'image' => 'images/province/lleida.avif'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Lugo',
            'community_id' => 12,
            'image' => 'images/province/lugo.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Madrid',
            'community_id' => 8,
            'image' => 'images/province/madrid.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Málaga',
            'community_id' => 1,
            'image' => 'images/province/malaga.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Murcia',
            'community_id' => 17,
            'image' => 'images/province/murcia.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Navarra',
            'community_id' => 9,
            'image' => 'images/province/navarra.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Ourense',
            'community_id' => 12,
            'image' => 'images/province/ourense.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Palencia',
            'community_id' => 6,
            'image' => 'images/province/palencia.avif'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Pontevedra',
            'community_id' => 12,
            'image' => 'images/province/pontevedra.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Salamanca',
            'community_id' => 6,
            'image' => 'images/province/salamanca.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Segovia',
            'community_id' => 6,
            'image' => 'images/province/segovia.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Sevilla',
            'community_id' => 1,
            'image' => 'images/province/sevilla.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Soria',
            'community_id' => 6,
            'image' => 'images/province/soria.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Tarragona',
            'community_id' => 7,
            'image' => 'images/province/tarragona.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Tenerife',
            'community_id' => 3,
            'image' => 'images/province/tenerife.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Teruel',
            'community_id' => 2,
            'image' => 'images/province/teruel.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Toledo',
            'community_id' => 5,
            'image' => 'images/province/toledo.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Valencia',
            'community_id' => 10,
            'image' => 'images/province/valencia.avif'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Valladolid',
            'community_id' => 6,
            'image' => 'images/province/valladolid.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Vizcaya',
            'community_id' => 15,
            'image' => 'images/province/vizcaya.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Zamora',
            'community_id' => 6,
            'image' => 'images/province/zamora.jpg'
        ]);
        DB::table('provinces')->insert([
            'name' => 'Zaragoza',
            'community_id' => 2,
            'image' => 'images/province/zaragoza.avif'
        ]);
    }
}
