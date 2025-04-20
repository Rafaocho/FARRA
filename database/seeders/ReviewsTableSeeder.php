<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            'content' => 'Estuve y no me lo pasé muy bien',
            'rate' => 5,
            'event_id' => 54,
            'user_id' => 1
        ]);
        DB::table('reviews')->insert([
            'content' => 'Estuvo super guay, la gente super maja y el pueblo muy bonito',
            'rate' => 7,
            'event_id' => 67,
            'user_id' => 1
        ]);
        DB::table('reviews')->insert([
            'content' => '',
            'rate' => 7,
            'event_id' => 67,
            'user_id' => 1
        ]);
        DB::table('reviews')->insert([
            'content' => 'Buena música pero demasiada gente para mi gusto.',
            'rate' => 6,
            'event_id' => 23,
            'user_id' => 1
        ]);
        
        DB::table('reviews')->insert([
            'content' => 'La comida del evento estaba increíble. Volveré seguro.',
            'rate' => 8,
            'event_id' => 145,
            'user_id' => 1
        ]);
        
        DB::table('reviews')->insert([
            'content' => 'Un poco desorganizado pero el ambiente fue genial.',
            'rate' => 7,
            'event_id' => 92,
            'user_id' => 1
        ]);
        
        DB::table('reviews')->insert([
            'content' => 'No era lo que esperaba, faltó información sobre el horario.',
            'rate' => 4,
            'event_id' => 11,
            'user_id' => 1
        ]);
        DB::table('reviews')->insert([
            'content' => 'Experiencia increíble, fui con amigos y lo pasamos genial.',
            'rate' => 9,
            'event_id' => 180,
            'user_id' => 1
        ]);
        DB::table('reviews')->insert([
            'content' => 'No hubo mucha gente, pero el evento estuvo muy bien organizado.',
            'rate' => 7,
            'event_id' => 66,
            'user_id' => 1
        ]);
        DB::table('reviews')->insert([
            'content' => 'Demasiado ruido y poco espacio, no lo disfruté tanto.',
            'rate' => 5,
            'event_id' => 39,
            'user_id' => 1
        ]);
        DB::table('reviews')->insert([
            'content' => 'Los fuegos artificiales fueron lo mejor de la noche.',
            'rate' => 8,
            'event_id' => 174,
            'user_id' => 1
        ]);
        DB::table('reviews')->insert([
            'content' => 'Los fuegos artificiales no me gustaron.',
            'rate' => 8,
            'event_id' => 174,
            'user_id' => 1
        ]);
    }
}
