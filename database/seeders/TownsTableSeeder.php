<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TownsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('towns')->insert([
            'name' => 'Épila',
            'latitude' => 41.5985,
            'longitude' => -1.279617,
            'province_id' => 50
        ]);
        DB::table('towns')->insert([
            'name' => 'Cerceda',//Fiestas do Carme, 19 al 21 de julio
            'latitude' => 43.188611,
            'longitude' => -8.470278,
            'province_id' => 1
        ]);
        DB::table('towns')->insert([
            'name' => 'Esgos',//San Pedro Fiz de Pardecond, 26 de julio a 1 de agosto
            'latitude' => 42.325,
            'longitude' => -7.697222,
            'province_id' => 35
        ]);
        DB::table('towns')->insert([
            'name' => 'Camariñas',//Festas do Carme de Camelle, 1 al 3 de agosto
            'latitude' => 43.13,
            'longitude' => -9.185,
            'province_id' => 1
        ]);
        DB::table('towns')->insert([
            'name' => 'Bergondo',//San Pedro Felix de Vixoi, 2 al 4 de agosto
            'latitude' => 43.319444,
            'longitude' => -8.233889,
            'province_id' => 1
        ]);
        DB::table('towns')->insert([
            'name' => 'A Rúa',//Veran A Rúa, 1 al 5 de agosto
            'latitude' => 42.325,
            'longitude' => -7.114142,
            'province_id' => 35
        ]);
        DB::table('towns')->insert([
            'name' => 'Baltar',//XIV Festa Popular 2 DE AGOSTO
            'latitude' => 41.95,
            'longitude' => -7.715833,
            'province_id' => 35
        ]);
        DB::table('towns')->insert([
            'name' => 'Mondariz',//Festas do Carme 12 julio al 16 julio
            'latitude' => 42.23908,
            'longitude' => -8.453217,
            'province_id' => 37
        ]);
        DB::table('towns')->insert([
            'name' => 'Illa de Arousa',//Nortada(Festival) 20 de julio
            'latitude' => 42.554444,
            'longitude' => -8.863889,
            'province_id' => 37
        ]);
        DB::table('towns')->insert([
            'name' => 'Vilaboa',//Noite Musical de Paredes 7 de junio
            'latitude' => 42.359722,
            'longitude' => -8.638056,
            'province_id' => 37
        ]);
        DB::table('towns')->insert([
            'name' => 'Monterroso',//XVIII Festa da Xuventude 2 de agosto
            'latitude' => 42.7925,
            'longitude' => -7.836111,
            'province_id' => 30
        ]);
        DB::table('towns')->insert([
            'name' => 'Boveda',//III Fentos Festa 16 de julio al 18 de julio
            'latitude' => 42.624052,
            'longitude' => -7.484722,
            'province_id' => 30
        ]);
        DB::table('towns')->insert([
            'name' => 'Castroverde',//Festa da Xuventude e 21 de diciembre
            'latitude' => 43.030556,
            'longitude' => -7.325,
            'province_id' => 30
        ]);
        DB::table('towns')->insert([
            'name' => 'Nava',//Festival de la Sidra 12 de julio
            'latitude' => 43.358222,
            'longitude' => -5.505677,
            'province_id' => 6
        ]);
        DB::table('towns')->insert([
            'name' => 'Arriondas',//Fiesta del Bollu en La Peruyal, 26 de julio
            'latitude' => 43.385833,
            'longitude' => -5.190833,
            'province_id' => 6
        ]);
        DB::table('towns')->insert([
            'name' => 'Bimenes',//Feries de San Julián 20 de octubre
            'latitude' => 43.32518,
            'longitude' => -5.567273,
            'province_id' => 6
        ]);
        DB::table('towns')->insert([
            'name' => 'Santillana del Mar',//Fiestas de San Juliana 25 de junio 
            'latitude' => 43.393333,
            'longitude' => -4.104722,
            'province_id' => 14
        ]);
        DB::table('towns')->insert([
            'name' => 'Soto de la Marina',//Hogueras de San Juan 23 de junio
            'latitude' => 43.466389,
            'longitude' => -3.893889,
            'province_id' => 14
        ]);
        DB::table('towns')->insert([
            'name' => 'Suances',//Fiestas del Carmen 16 de julio
            'latitude' => 43.428333,
            'longitude' => -4.043611,
            'province_id' => 14
        ]);
        DB::table('towns')->insert([
            'name' => 'Salvatierra/Agurain', // Fiestas de San Juan - 24 de junio
            'latitude' => 42.8493,
            'longitude' => -2.38906,
            'province_id' => 2
        ]);
        DB::table('towns')->insert([
            'name' => 'Laguardia', // Fiestas de San Juan y San Pedro - 23 al 29 de junio
            'latitude' => 42.55,
            'longitude' => -2.58306,
            'province_id' => 2
        ]);
        DB::table('towns')->insert([
            'name' => 'Amurrio', // San Roque - 15 al 17 de agosto
            'latitude' => 43.0525,
            'longitude' => -3.0009,
            'province_id' => 2
        ]);
        DB::table('towns')->insert([
            'name' => 'Labastida', // San Pedro - 29 de junio
            'latitude' => 42.58974,
            'longitude' => -2.796,
            'province_id' => 2
        ]);
        DB::table('towns')->insert([
            'name' => 'Artziniega', // Fiestas de la Encina - 8 de septiembre
            'latitude' => 43.121056,
            'longitude' => -3.128674,
            'province_id' => 2
        ]);
        DB::table('towns')->insert([
            'name' => 'Zumaia', // Fiestas de San Telmo - 25 de abril
            'latitude' => 43.2950,
            'longitude' => -2.2560,
            'province_id' => 22
        ]);
        DB::table('towns')->insert([
            'name' => 'Getaria', // Fiestas de San Antón - 17 de enero
            'latitude' => 43.3030,
            'longitude' => -2.2020,
            'province_id' => 22
        ]);
        DB::table('towns')->insert([
            'name' => 'Hondarribia', // Alarde - 8 de septiembre
            'latitude' => 43.3686,
            'longitude' => -1.7980,
            'province_id' => 22
        ]);
        DB::table('towns')->insert([
            'name' => 'Tolosa', // Carnavales - febrero
            'latitude' => 43.1360,
            'longitude' => -2.0780,
            'province_id' => 22
        ]);
        DB::table('towns')->insert([
            'name' => 'Ea', // Fiestas de San Juan - 24 de junio
            'latitude' => 43.3667,
            'longitude' => -2.5000,
            'province_id' => 48
        ]);
        DB::table('towns')->insert([
            'name' => 'Sollano-Llantada', // Fiestas de San Pantaleón - 27 de julio
            'latitude' => 43.2167,
            'longitude' => -3.1000,
            'province_id' => 48
        ]);
        DB::table('towns')->insert([
            'name' => 'Mundaka', // Fiestas de Santa Catalina - 25 de noviembre
            'latitude' => 43.4083,
            'longitude' => -2.7000,
            'province_id' => 48
        ]);
        DB::table('towns')->insert([
            'name' => 'Elantxobe', // Fiestas de San Nicolás - 6 de diciembre
            'latitude' => 43.4000,
            'longitude' => -2.6333,
            'province_id' => 48
        ]);
        DB::table('towns')->insert([
            'name' => 'Silio', // La Vijanera - Primer domingo de enero
            'latitude' => 43.0792,
            'longitude' => -4.0583,
            'province_id' => 14
        ]);
        DB::table('towns')->insert([
            'name' => 'San Vicente de la Barquera', // La Folía - Domingo siguiente al martes de Pascua
            'latitude' => 43.3850,
            'longitude' => -4.3950,
            'province_id' => 14
        ]);
        DB::table('towns')->insert([
            'name' => 'Cabezón de la Sal', // Día de Cantabria - Segundo domingo de agosto
            'latitude' => 43.3083,
            'longitude' => -4.2375,
            'province_id' => 14
        ]);
        DB::table('towns')->insert([
            'name' => 'Comillas', // Fiestas del Santo Cristo del Amparo - 11 al 17 de julio
            'latitude' => 43.3869,
            'longitude' => -4.2911,
            'province_id' => 14
        ]);
        DB::table('towns')->insert([
            'name' => 'Selaya', // Fiestas de Nuestra Señora de Valvanuz - 15 de agosto
            'latitude' => 43.2167,
            'longitude' => -3.8167,
            'province_id' => 14
        ]);
        DB::table('towns')->insert([
            'name' => 'Ujué', // Romería a Ujué - 1 de mayo
            'latitude' => 42.5833,
            'longitude' => -1.4500,
            'province_id' => 34
        ]);
        DB::table('towns')->insert([
            'name' => 'Alsasua', // Exaltación de la Santa Cruz - septiembre
            'latitude' => 42.8833,
            'longitude' => -2.1667,
            'province_id' => 34
        ]);
        DB::table('towns')->insert([
            'name' => 'San Adrián', // Fiestas patronales - 8 y 9 de septiembre
            'latitude' => 42.3333,
            'longitude' => -1.9333,
            'province_id' => 34
        ]);
        DB::table('towns')->insert([
            'name' => 'Lantz', // Carnaval de Lantz - 2 al 4 de marzo
            'latitude' => 42.9833,
            'longitude' => -1.6167,
            'province_id' => 34
        ]);
        
        DB::table('towns')->insert([
            'name' => 'Burgui', // Día de la Almadía - 3 de mayo
            'latitude' => 42.7833,
            'longitude' => -1.0500,
            'province_id' => 34
        ]);
        DB::table('towns')->insert([
            'name' => 'Briones', // Fiestas del Cristo de los Remedios - septiembre
            'latitude' => 42.5444,
            'longitude' => -2.7500,
            'province_id' => 26
        ]);
        DB::table('towns')->insert([
            'name' => 'Préjano', // Fiestas mayores del Cristo de La Canal - 14 de septiembre
            'latitude' => 42.2167,
            'longitude' => -2.1333,
            'province_id' => 26
        ]);
        DB::table('towns')->insert([
            'name' => 'Luezas', // Fiestas patronales - fin de semana más próximo al 15 de agosto
            'latitude' => 42.2167,
            'longitude' => -2.5167,
            'province_id' => 26
        ]);
        DB::table('towns')->insert([
            'name' => 'Bezares', // Fiestas patronales de San Roque - 16 de agosto
            'latitude' => 42.3833,
            'longitude' => -2.6000,
            'province_id' => 26
        ]);
        DB::table('towns')->insert([
            'name' => 'Bobadilla', // Fiestas de San Juan - 23 al 25 de junio
            'latitude' => 42.2667,
            'longitude' => -2.3500,
            'province_id' => 26
        ]);
        DB::table('towns')->insert([
            'name' => 'Puentedey', // Fiesta de San Miguel - 29 de septiembre
            'latitude' => 43.0306,
            'longitude' => -3.6125,
            'province_id' => 11
        ]);
        DB::table('towns')->insert([
            'name' => 'Covarrubias', // Fiesta de San Cosme y San Damián - 27 de septiembre
            'latitude' => 42.0592,
            'longitude' => -3.5147,
            'province_id' => 11
        ]);
        DB::table('towns')->insert([
            'name' => 'Caleruega', // Fiesta de Santo Domingo de Guzmán - 8 de agosto
            'latitude' => 41.8033,
            'longitude' => -3.5747,
            'province_id' => 11
        ]);
        DB::table('towns')->insert([
            'name' => 'Frías', // Fiesta de San Vicente Mártir - 22 de enero
            'latitude' => 42.7603,
            'longitude' => -3.2931,
            'province_id' => 11
        ]);
        DB::table('towns')->insert([
            'name' => 'Lerma', // Fiesta de San Pedro - 29 de junio
            'latitude' => 42.0250,
            'longitude' => -3.7569,
            'province_id' => 11
        ]);
        DB::table('towns')->insert([
            'name' => 'Cuéllar', // Encierros tradicionales - último fin de semana de agosto
            'latitude' => 41.4020,
            'longitude' => -4.3134,
            'province_id' => 39
        ]);
        DB::table('towns')->insert([
            'name' => 'El Espinar', // Fiesta de los Gabarreros - primer fin de semana de marzo
            'latitude' => 40.7736,
            'longitude' => -4.2411,
            'province_id' => 39
        ]);
        DB::table('towns')->insert([
            'name' => 'Zamarramala', // Fiesta de Santa Águeda - fin de semana siguiente al 5 de febrero
            'latitude' => 40.9425,
            'longitude' => -4.1197,
            'province_id' => 39
        ]);
        DB::table('towns')->insert([
            'name' => 'Cantimpalos', // Feria del Chorizo - 25 de abril (aproximadamente)
            'latitude' => 41.0333,
            'longitude' => -4.1167,
            'province_id' => 39
        ]);
        DB::table('towns')->insert([
            'name' => 'Vinuesa', // Fiestas patronales en honor a la Virgen del Pino y San Roque - 14 al 18 de agosto
            'latitude' => 41.8833,
            'longitude' => -2.8000,
            'province_id' => 41
        ]);
        DB::table('towns')->insert([
            'name' => 'Duruelo de la Sierra', // Ronda popular de Carnaval - martes de Carnaval
            'latitude' => 41.9800,
            'longitude' => -2.9000,
            'province_id' => 41
        ]);
        DB::table('towns')->insert([
            'name' => 'Recuerda', // Fiestas patronales en honor a San Bernabé - 11 de agosto
            'latitude' => 41.5833,
            'longitude' => -3.0333,
            'province_id' => 41
        ]);
        DB::table('towns')->insert([
            'name' => 'Carrión de los Condes', // Semana Santa - fechas variables en marzo o abril
            'latitude' => 42.3400,
            'longitude' => -4.6000,
            'province_id' => 36
        ]);  
        DB::table('towns')->insert([
            'name' => 'Saldaña', // Fiesta de San Roque - 16 de agosto
            'latitude' => 42.5230,
            'longitude' => -4.7410,
            'province_id' => 36
        ]);
        DB::table('towns')->insert([
            'name' => 'Villacuende', // Fiesta de San Roque - 16 de agosto
            'latitude' => 42.4500,
            'longitude' => -4.8000,
            'province_id' => 36
        ]);
        DB::table('towns')->insert([
            'name' => 'Astorga', // Fiestas de Astures y Romanos - finales de julio
            'latitude' => 42.4575,
            'longitude' => -6.0525,
            'province_id' => 28
        ]);
        DB::table('towns')->insert([
            'name' => 'La Bañeza', // Fiestas Patronales de San Roque - 16 de agosto
            'latitude' => 42.2893,
            'longitude' => -5.8983,
            'province_id' => 28
        ]);
        DB::table('towns')->insert([
            'name' => 'Sahagún', // Romería de la Peregrina - agosto
            'latitude' => 42.3706,
            'longitude' => -5.0289,
            'province_id' => 28
        ]);
        DB::table('towns')->insert([
            'name' => 'Cistierna', // Fiestas de San Guillermo - 10 de febrero y verano
            'latitude' => 42.8015,
            'longitude' => -5.1247,
            'province_id' => 28
        ]);
        DB::table('towns')->insert([
            'name' => 'Toro', // Fiestas de San Agustín – finales de agosto
            'latitude' => 41.5244,
            'longitude' => -5.3925,
            'province_id' => 49
        ]);
        DB::table('towns')->insert([
            'name' => 'Benavente', // Fiestas del Toro Enmaromado – junio
            'latitude' => 42.0028,
            'longitude' => -5.6789,
            'province_id' => 49
        ]);
        DB::table('towns')->insert([
            'name' => 'Puebla de Sanabria', // Fiesta de las Victorias – septiembre
            'latitude' => 42.0620,
            'longitude' => -6.6330,
            'province_id' => 49
        ]);
        DB::table('towns')->insert([
            'name' => 'Fermoselle', // Fiesta de San Agustín – agosto
            'latitude' => 41.3196,
            'longitude' => -6.4010,
            'province_id' => 49
        ]);
        DB::table('towns')->insert([
            'name' => 'Tordesillas', // Fiestas de la Peña – mediados de septiembre
            'latitude' => 41.5006,
            'longitude' => -5.0016,
            'province_id' => 47
        ]);
        DB::table('towns')->insert([
            'name' => 'Medina de Rioseco', // Semana Renacentista – agosto
            'latitude' => 41.8846,
            'longitude' => -5.0413,
            'province_id' => 47
        ]);
        DB::table('towns')->insert([
            'name' => 'Peñafiel', // Fiestas de Nuestra Señora y San Roque – agosto
            'latitude' => 41.5968,
            'longitude' => -4.1164,
            'province_id' => 47
        ]);
        DB::table('towns')->insert([
            'name' => 'Simancas', // Fiesta de la Virgen de Arriba – 8 de septiembre
            'latitude' => 41.5833,
            'longitude' => -4.8333,
            'province_id' => 47
        ]);
        DB::table('towns')->insert([
            'name' => 'Ciudad Rodrigo', // Carnaval del Toro – febrero
            'latitude' => 40.5973,
            'longitude' => -6.5211,
            'province_id' => 38
        ]);
        DB::table('towns')->insert([
            'name' => 'La Alberca', // Fiesta de Nuestra Señora de la Asunción – 15 de agosto
            'latitude' => 40.4909,
            'longitude' => -6.1135,
            'province_id' => 38
        ]);
        DB::table('towns')->insert([
            'name' => 'Ledesma', // Corpus Christi – junio
            'latitude' => 41.1035,
            'longitude' => -6.0082,
            'province_id' => 38
        ]);
        DB::table('towns')->insert([
            'name' => 'Béjar', // Fiestas Patronales de la Virgen del Castañar – septiembre
            'latitude' => 40.3849,
            'longitude' => -5.7639,
            'province_id' => 38
        ]);
        DB::table('towns')->insert([
            'name' => 'Arenas de San Pedro', // Fiestas de Nuestra Señora del Pilar – octubre
            'latitude' => 40.2103,
            'longitude' => -5.0917,
            'province_id' => 7
        ]);
        DB::table('towns')->insert([
            'name' => 'Candeleda', // Fiestas de la Virgen de Chilla – segundo domingo de septiembre
            'latitude' => 40.1574,
            'longitude' => -5.2412,
            'province_id' => 7
        ]);
        DB::table('towns')->insert([
            'name' => 'El Barco de Ávila', // Fiestas de San Pedro del Barco – agosto
            'latitude' => 40.3582,
            'longitude' => -5.5251,
            'province_id' => 7
        ]);
        DB::table('towns')->insert([
            'name' => 'Piedrahíta', // Fiestas en honor a la Virgen de la Vega – agosto
            'latitude' => 40.4732,
            'longitude' => -5.3282,
            'province_id' => 7
        ]);
        DB::table('towns')->insert([
            'name' => 'Navaluenga', // Fiestas del Santísimo Cristo de los Remedios – septiembre
            'latitude' => 40.3926,
            'longitude' => -4.7105,
            'province_id' => 7
        ]);
        DB::table('towns')->insert([
            'name' => 'Hervás', // Fiesta de Los Conversos – primer fin de semana de julio
            'latitude' => 40.2686,
            'longitude' => -5.8653,
            'province_id' => 12
        ]);
        DB::table('towns')->insert([
            'name' => 'Valencia de Alcántara', // Feria de San Bartolomé – finales de agosto
            'latitude' => 39.4136,
            'longitude' => -7.2446,
            'province_id' => 12
        ]);
        DB::table('towns')->insert([
            'name' => 'Garrovillas de Alconétar', // Fiesta del Queso – abril
            'latitude' => 39.7074,
            'longitude' => -6.5554,
            'province_id' => 12
        ]);
        DB::table('towns')->insert([
            'name' => 'Brozas', // Fiestas de San Juan – junio
            'latitude' => 39.6021,
            'longitude' => -6.7792,
            'province_id' => 12
        ]);
        DB::table('towns')->insert([
            'name' => 'Oliva de la Frontera', // Fiestas del Corpus – mayo/junio
            'latitude' => 38.3703,
            'longitude' => -6.9567,
            'province_id' => 8
        ]);
        DB::table('towns')->insert([
            'name' => 'Fregenal de la Sierra', // Feria de San Mateo – septiembre
            'latitude' => 38.1687,
            'longitude' => -6.6511,
            'province_id' => 8
        ]);
        DB::table('towns')->insert([
            'name' => 'Jerez de los Caballeros', // Semana Santa – abril (Fiesta de Interés Turístico Nacional)
            'latitude' => 38.3200,
            'longitude' => -6.7700,
            'province_id' => 8
        ]);
        DB::table('towns')->insert([
            'name' => 'Guareña', // Fiestas del Cristo de las Aguas – mayo
            'latitude' => 38.8567,
            'longitude' => -6.1044,
            'province_id' => 8
        ]);
        DB::table('towns')->insert([
            'name' => 'Olivenza', // Feria del Toro – marzo
            'latitude' => 38.6833,
            'longitude' => -7.1000,
            'province_id' => 8
        ]);
        DB::table('towns')->insert([
            'name' => 'Almadén', // Feria y Fiestas – primera semana de septiembre
            'latitude' => 38.7756,
            'longitude' => -4.8381,
            'province_id' => 16
        ]);
        DB::table('towns')->insert([
            'name' => 'San Carlos del Valle', // Romería del Cristo del Valle – 1er domingo de mayo
            'latitude' => 38.8475,
            'longitude' => -3.3522,
            'province_id' => 16
        ]);
        DB::table('towns')->insert([
            'name' => 'Cózar', // Fiestas Patronales de la Virgen del Rosario – octubre
            'latitude' => 38.6661,
            'longitude' => -3.0136,
            'province_id' => 16
        ]);
        DB::table('towns')->insert([
            'name' => 'Villahermosa', // Fiestas de San Bartolomé – agosto
            'latitude' => 38.7425,
            'longitude' => -2.8833,
            'province_id' => 16
        ]);
        DB::table('towns')->insert([
            'name' => 'Alcaraz', // Fiestas de la Virgen de Cortes – 26 de agosto
            'latitude' => 38.6681,
            'longitude' => -2.4908,
            'province_id' => 3
        ]);
        DB::table('towns')->insert([
            'name' => 'Chinchilla de Monte-Aragón', // Semana Santa Chinchillana – marzo/abril
            'latitude' => 38.9228,
            'longitude' => -1.7211,
            'province_id' => 3
        ]);
        DB::table('towns')->insert([
            'name' => 'Yeste', // Feria de Tradiciones – octubre
            'latitude' => 38.3758,
            'longitude' => -2.3172,
            'province_id' => 3
        ]);
        DB::table('towns')->insert([
            'name' => 'Letur', // Semana Santa y LeturAlma (festival alternativo) – julio
            'latitude' => 38.3044,
            'longitude' => -2.0992,
            'province_id' => 3
        ]);
        DB::table('towns')->insert([
            'name' => 'Mojácar', // Moros y Cristianos – junio
            'latitude' => 37.1406,
            'longitude' => -1.8512,
            'province_id' => 5
        ]);
        DB::table('towns')->insert([
            'name' => 'Vélez-Blanco', // Fiestas Patronales en honor a San Roque – agosto
            'latitude' => 37.6831,
            'longitude' => -2.0808,
            'province_id' => 5
        ]);
        DB::table('towns')->insert([
            'name' => 'Níjar', // Fiestas de la Virgen del Carmen – julio
            'latitude' => 36.9653,
            'longitude' => -2.2114,
            'province_id' => 5
        ]); 
        DB::table('towns')->insert([
            'name' => 'Serón', // Jornadas Gastronómicas del Jamón – julio
            'latitude' => 37.3442,
            'longitude' => -2.5092,
            'province_id' => 5
        ]);
        DB::table('towns')->insert([
            'name' => 'Abrucena', // Fiestas Patronales de San José – marzo
            'latitude' => 37.1500,
            'longitude' => -2.7667,
            'province_id' => 5
        ]);
        DB::table('towns')->insert([
            'name' => 'Tárbena', // Fiestas de San Salvador – agosto
            'latitude' => 38.6822,
            'longitude' => -0.0989,
            'province_id' => 4
        ]);
        DB::table('towns')->insert([
            'name' => 'Agres', // Festes de la Mare de Déu – septiembre
            'latitude' => 38.7850,
            'longitude' => -0.5106,
            'province_id' => 4
        ]);
        DB::table('towns')->insert([
            'name' => 'Benilloba', // Moros y Cristianos – agosto
            'latitude' => 38.6964,
            'longitude' => -0.4039,
            'province_id' => 4
        ]);
        DB::table('towns')->insert([
            'name' => 'Beniardá', // Festes Patronals – agosto
            'latitude' => 38.6908,
            'longitude' => -0.2292,
            'province_id' => 4
        ]);
        DB::table('towns')->insert([
            'name' => 'Fornalutx', // Festes de la Mare de Déu – septiembre
            'latitude' => 39.7778,
            'longitude' => 2.7503,
            'province_id' => 9
        ]);
        DB::table('towns')->insert([
            'name' => 'Es Migjorn Gran', // Festes de Sant Cristòfol – julio
            'latitude' => 39.9628,
            'longitude' => 4.0533,
            'province_id' => 9
        ]);
        DB::table('towns')->insert([
            'name' => 'Sant Joan de Labritja', // Festes de Sant Joan – junio
            'latitude' => 39.0786,
            'longitude' => 1.5092,
            'province_id' => 9
        ]);
        DB::table('towns')->insert([
            'name' => 'Banyalbufar', // Festes de Sant Mateu – septiembre
            'latitude' => 39.6781,
            'longitude' => 2.5156,
            'province_id' => 9
        ]);
        DB::table('towns')->insert([
            'name' => 'Bagà', // Fia-Faia (24 diciembre)
            'latitude' => 42.2501,
            'longitude' => 1.8606,
            'province_id' => 10
        ]);
        DB::table('towns')->insert([
            'name' => 'Talamanca', // Festa Major (agosto)
            'latitude' => 41.7339,
            'longitude' => 1.9514,
            'province_id' => 10
        ]);
        DB::table('towns')->insert([
            'name' => 'Sant Martí d’Albars', // Festa Major (julio)
            'latitude' => 42.0344,
            'longitude' => 2.0683,
            'province_id' => 10
        ]);
        DB::table('towns')->insert([
            'name' => 'Mura', // Festa Major de Sant Martí (noviembre)
            'latitude' => 41.6716,
            'longitude' => 1.9751,
            'province_id' => 10
        ]);
        DB::table('towns')->insert([
            'name' => 'Santa Maria de Merlès', // Festa Major (agosto)
            'latitude' => 42.0000,
            'longitude' => 1.9833,
            'province_id' => 10
        ]);
        DB::table('towns')->insert([
            'name' => 'Casserres', // Festa Major (agosto)
            'latitude' => 42.0302,
            'longitude' => 1.8430,
            'province_id' => 10
        ]);
        DB::table('towns')->insert([
            'name' => 'Perafita', // Festa Major (primer domingo de septiembre)
            'latitude' => 42.0781,
            'longitude' => 2.0814,
            'province_id' => 10
        ]);
        DB::table('towns')->insert([
            'name' => 'Castellfollit del Boix', // Festa Major (finales de agosto)
            'latitude' => 41.6547,
            'longitude' => 1.7172,
            'province_id' => 10
        ]);
        DB::table('towns')->insert([
            'name' => 'Copons', // Festa Major de Sant Sebastià (enero)
            'latitude' => 41.6139,
            'longitude' => 1.5092,
            'province_id' => 10
        ]);
        DB::table('towns')->insert([
            'name' => 'Grazalema', // Feria de Agosto
            'latitude' => 36.7642,
            'longitude' => -5.3641,
            'province_id' => 13
        ]);
        DB::table('towns')->insert([
            'name' => 'Villaluenga del Rosario', // Feria y Fiestas Patronales (septiembre)
            'latitude' => 36.7013,
            'longitude' => -5.3961,
            'province_id' => 13
        ]);
        DB::table('towns')->insert([
            'name' => 'Benaocaz', // Feria de San Blas (febrero)
            'latitude' => 36.7364,
            'longitude' => -5.4100,
            'province_id' => 13
        ]);
        DB::table('towns')->insert([
            'name' => 'El Bosque', // Feria de Agosto y Romería (junio)
            'latitude' => 36.7581,
            'longitude' => -5.5044,
            'province_id' => 13
        ]);
        DB::table('towns')->insert([
            'name' => 'Bornos', // Feria de Bornos (septiembre)
            'latitude' => 36.8267,
            'longitude' => -5.7442,
            'province_id' => 13
        ]);
        DB::table('towns')->insert([
            'name' => 'Setenil de las Bodegas', // Feria de Agosto
            'latitude' => 36.8612,
            'longitude' => -5.1804,
            'province_id' => 13
        ]);
        DB::table('towns')->insert([
            'name' => 'Morella', // Sexenni de Morella (cada 6 años) – normalmente agosto
            'latitude' => 40.6199,
            'longitude' => -0.0986,
            'province_id' => 15
        ]);
        DB::table('towns')->insert([
            'name' => 'Vilafamés', // Fiestas Patronales en agosto
            'latitude' => 40.0953,
            'longitude' => -0.0422,
            'province_id' => 15
        ]);
        DB::table('towns')->insert([
            'name' => 'Culla', // Fiestas Patronales en julio
            'latitude' => 40.3030,
            'longitude' => -0.1373,
            'province_id' => 15
        ]);
        DB::table('towns')->insert([
            'name' => 'Ares del Maestre', // Fiestas Patronales en agosto
            'latitude' => -40.4667,
            'longitude' => -0.1167,
            'province_id' => 15
        ]);
        DB::table('towns')->insert([
            'name' => 'Benassal', // Fiestas de San Cristóbal en julio
            'latitude' => 40.4167,
            'longitude' => -0.1667,
            'province_id' => 15
        ]);
        DB::table('towns')->insert([
            'name' => 'Vistabella del Maestrat', // Fiestas Patronales en septiembre
            'latitude' => 40.2667,
            'longitude' => -0.2333,
            'province_id' => 15
        ]);
        DB::table('towns')->insert([
            'name' => 'Zuheros', // Fiesta del Queso - septiembre
            'latitude' => 37.5435,
            'longitude' => -4.3122,
            'province_id' => 17
        ]);
        DB::table('towns')->insert([
            'name' => 'Iznájar', // Feria Real - septiembre
            'latitude' => 37.2571,
            'longitude' => -4.3067,
            'province_id' => 17
        ]);
        DB::table('towns')->insert([
            'name' => 'Monturque', // Fiesta de Todos los Santos - noviembre
            'latitude' => 37.4728,
            'longitude' => -4.6358,
            'province_id' => 17
        ]);
        DB::table('towns')->insert([
            'name' => 'Luque', // Feria Real - agosto
            'latitude' => 37.5587,
            'longitude' => -4.2784,
            'province_id' => 17
        ]);
        DB::table('towns')->insert([
            'name' => 'San Clemente', // Feria y Fiestas Patronales – agosto
            'latitude' => 39.4000,
            'longitude' => -2.4333,
            'province_id' => 18
        ]);
        DB::table('towns')->insert([
            'name' => 'Belmonte', // Fiestas de la Virgen de la Estrella – septiembre
            'latitude' => 39.5582,
            'longitude' => -2.7031,
            'province_id' => 18
        ]);
        DB::table('towns')->insert([
            'name' => 'Mota del Cuervo', // Fiestas Patronales de San Agustín – agosto
            'latitude' => 39.5000,
            'longitude' => -2.8667,
            'province_id' => 18
        ]);
        DB::table('towns')->insert([
            'name' => 'Quintanar del Rey', // Fiestas Patronales de la Virgen del Rosario – octubre
            'latitude' => 39.3333,
            'longitude' => -1.9167,
            'province_id' => 18
        ]);
        DB::table('towns')->insert([
            'name' => 'Huete', // Fiestas de San Juan – junio
            'latitude' => 40.1936,
            'longitude' => -2.6944,
            'province_id' => 18
        ]);
        DB::table('towns')->insert([
            'name' => 'Peratallada', // Fiesta Medieval – octubre
            'latitude' => 41.9739,
            'longitude' => 3.0997,
            'province_id' => 19
        ]);
        DB::table('towns')->insert([
            'name' => 'Cadaqués', // Fiesta Mayor – septiembre
            'latitude' => 42.2887,
            'longitude' => 3.2784,
            'province_id' => 19
        ]);
        DB::table('towns')->insert([
            'name' => 'Pals', // Feria del Arroz – septiembre
            'latitude' => 41.9717,
            'longitude' => 3.1600,
            'province_id' => 19
        ]);
        DB::table('towns')->insert([
            'name' => 'Rupit i Pruit', // Fiesta Mayor – junio
            'latitude' => 42.0273,
            'longitude' => 2.4684,
            'province_id' => 19
        ]);
        DB::table('towns')->insert([
            'name' => 'Sant Joan de les Abadesses', // Fiesta Mayor – agosto
            'latitude' => 42.2372,
            'longitude' => 2.2786,
            'province_id' => 19
        ]);
        DB::table('towns')->insert([
            'name' => 'Camprodon', // Feria del Queso y el Embutido – mayo
            'latitude' => 42.3150,
            'longitude' => 2.3653,
            'province_id' => 19
        ]);
        DB::table('towns')->insert([
            'name' => 'Tossa de Mar', // Fiesta de San Vicente – enero
            'latitude' => 41.7228,
            'longitude' => 2.9331,
            'province_id' => 19
        ]);
        DB::table('towns')->insert([
            'name' => 'Alhama de Granada', // Fiesta de la Virgen de los Remedios 8 de septiembre
            'latitude' => 37.002555,
            'longitude' => -3.988069,
            'province_id' => 20
        ]);
        DB::table('towns')->insert([
            'name' => 'Cúllar Vega', // Fiesta de San Sebastián 20 de enero
            'latitude' => 37.153056,
            'longitude' => -3.670556,
            'province_id' => 20
        ]);
        DB::table('towns')->insert([
            'name' => 'Órgiva', // Fiesta de la Virgen del Rosario 7 de octubre
            'latitude' => 36.900278,
            'longitude' => -3.423889,
            'province_id' => 20
        ]);
        DB::table('towns')->insert([
            'name' => 'Aracena', // Fiesta de la Virgen del Mayor Dolor 15 de septiembre
            'latitude' => 37.891111,
            'longitude' => -6.561111,
            'province_id' => 23
        ]);
        DB::table('towns')->insert([
            'name' => 'Calañas', // Fiesta de la Virgen de la Candelaria 2 de febrero
            'latitude' => 37.653616,
            'longitude' => -6.878871,
            'province_id' => 23
        ]);
        DB::table('towns')->insert([
            'name' => 'Alosno', // Fiesta de la Virgen de los Remedios 8 de septiembre
            'latitude' => 37.549672,
            'longitude' => -7.115795,
            'province_id' => 23
        ]);
        DB::table('towns')->insert([
            'name' => 'Bielsa', // Fiesta de la Virgen de las Nieves 5 de agosto
            'latitude' => 42.633611,
            'longitude' => 0.218333,
            'province_id' => 24
        ]);
        DB::table('towns')->insert([
            'name' => 'Albalate de Cinca', // Fiesta de San Juan 24 de junio
            'latitude' => 41.723611,
            'longitude' => 0.146389,
            'province_id' => 24
        ]);
        DB::table('towns')->insert([
            'name' => 'Aínsa-Sobrarbe', // Fiesta de San Sebastián 20 de enero
            'latitude' => 42.417222,
            'longitude' => 0.1375,
            'province_id' => 24
        ]);
        DB::table('towns')->insert([
            'name' => 'Graus', // Fiesta de la Virgen de la Peña 15 de agosto
            'latitude' => 42.190556,
            'longitude' => 0.338333,
            'province_id' => 24
        ]);
        DB::table('towns')->insert([
            'name' => 'Sabiñánigo', // Fiesta de San Juan 24 de junio
            'latitude' => 42.518583,
            'longitude' => -0.364336,
            'province_id' => 24
        ]);
        DB::table('towns')->insert([
            'name' => 'Arjona', // Fiesta de la Virgen de la Bella 15 de agosto
            'latitude' => 37.935,
            'longitude' => -4.056944,
            'province_id' => 25
        ]);
        DB::table('towns')->insert([
            'name' => 'Santiago de Calatrava', // Fiesta de San Sebastián 20 de enero
            'latitude' => 37.753106,
            'longitude' => -4.169492,
            'province_id' => 25
        ]);
        DB::table('towns')->insert([
            'name' => 'Cazorla', // Fiesta de la Virgen de la Cabeza 30 de abril
            'latitude' => 37.913636,
            'longitude' => -3.004084,
            'province_id' => 25
        ]);
        DB::table('towns')->insert([
            'name' => 'Peal de Becerro', // Fiesta de la Virgen de los Remedios 8 de septiembre
            'latitude' => 37.912146,
            'longitude' => -3.124075,
            'province_id' => 25
        ]);
        DB::table('towns')->insert([
            'name' => 'Tejeda', // Fiestas del Almendro en Flor – febrero
            'latitude' => 27.9947,
            'longitude' => -15.6189,
            'province_id' => 27
        ]);
        DB::table('towns')->insert([
            'name' => 'Agaete', // Fiesta de la Rama – agosto
            'latitude' => 28.1006,
            'longitude' => -15.6994,
            'province_id' => 27
        ]);
        DB::table('towns')->insert([
            'name' => 'Moya', // Fiesta de San Antonio – junio
            'latitude' => 28.1036,
            'longitude' => -15.5786,
            'province_id' => 27
        ]);
        DB::table('towns')->insert([
            'name' => 'Firgas', // Fiestas de San Roque – agosto
            'latitude' => 28.0992,
            'longitude' => -15.5620,
            'province_id' => 27
        ]);
        DB::table('towns')->insert([
            'name' => 'Valleseco', // Fiesta de la Manzana – octubre
            'latitude' => 28.0331,
            'longitude' => -15.5786,
            'province_id' => 27
        ]);
        DB::table('towns')->insert([
            'name' => 'Sort', // Festa Major de Sort – agosto
            'latitude' => 42.4144,
            'longitude' => -1.1308,
            'province_id' => 29
        ]);
        DB::table('towns')->insert([
            'name' => 'Agramunt', // Fira del Torró i la Xocolata – octubre
            'latitude' => 41.7851,
            'longitude' => -1.0994,
            'province_id' => 29
        ]);
        DB::table('towns')->insert([
            'name' => 'La Seu d’Urgell', // Festa Major – agosto
            'latitude' => 42.3585,
            'longitude' => -1.4627,
            'province_id' => 29
        ]);
        DB::table('towns')->insert([
            'name' => 'Tremp', // Festa Major – septiembre
            'latitude' => 42.1669,
            'longitude' => -0.8936,
            'province_id' => 29
        ]);
        DB::table('towns')->insert([
            'name' => 'Patones', // Fiestas de San José - marzo
            'latitude' => 40.8699,
            'longitude' => -3.5006,
            'province_id' => 31
        ]);
        DB::table('towns')->insert([
            'name' => 'Rascafría', // Fiestas patronales de la Virgen de Gracia - agosto
            'latitude' => 40.9006,
            'longitude' => -3.8862,
            'province_id' => 31
        ]);
        DB::table('towns')->insert([
            'name' => 'Torrelaguna', // Fiestas de Santa María Magdalena - julio
            'latitude' => 40.8268,
            'longitude' => -3.5336,
            'province_id' => 31
        ]);
        DB::table('towns')->insert([
            'name' => 'Manzanares el Real', // Fiestas de la Virgen de la Peña Sacra - agosto
            'latitude' => 40.7279,
            'longitude' => -3.8643,
            'province_id' => 31
        ]);
        DB::table('towns')->insert([
            'name' => 'Chinchón', // Fiestas patronales de la Virgen de Gracia y San Roque - agosto
            'latitude' => 40.1395,
            'longitude' => -3.4292,
            'province_id' => 31
        ]);
        DB::table('towns')->insert([
            'name' => 'San Martín de Valdeiglesias', // Fiestas de la Virgen de la Nueva - septiembre
            'latitude' => 40.3669,
            'longitude' => -4.4008,
            'province_id' => 31
        ]);
        DB::table('towns')->insert([
            'name' => 'El Berrueco', // Fiestas de San Roque - agosto
            'latitude' => 40.8956,
            'longitude' => -3.5414,
            'province_id' => 31
        ]);
        DB::table('towns')->insert([
            'name' => 'Cenicientos', // Fiestas de Nuestra Señora del Roble - agosto
            'latitude' => 40.2864,
            'longitude' => -4.5197,
            'province_id' => 31
        ]);
        DB::table('towns')->insert([
            'name' => 'Navacerrada', // Fiestas de San Antonio - junio
            'latitude' => 40.7306,
            'longitude' => -4.0164,
            'province_id' => 31
        ]);
        DB::table('towns')->insert([
            'name' => 'Frigiliana', // Festival de las Tres Culturas - agosto
            'latitude' => 36.7925,
            'longitude' => -3.8947,
            'province_id' => 32
        ]);
        DB::table('towns')->insert([
            'name' => 'Cómpeta', // Noche del Vino - 15 de agosto
            'latitude' => 36.8339,
            'longitude' => -3.9741,
            'province_id' => 32
        ]);
        DB::table('towns')->insert([
            'name' => 'Canillas de Aceituno', // Día de la Morcilla - abril
            'latitude' => 36.8608,
            'longitude' => -4.0808,
            'province_id' => 32
        ]);
        DB::table('towns')->insert([
            'name' => 'Almáchar', // Fiesta del Ajoblanco - primer sábado de septiembre
            'latitude' => 36.7991,
            'longitude' => -4.2423,
            'province_id' => 32
        ]);
        DB::table('towns')->insert([
            'name' => 'Ricote', // Fiestas Patronales en honor a San Sebastián - enero
            'latitude' => 38.1913,
            'longitude' => -1.3563,
            'province_id' => 33
        ]);
        DB::table('towns')->insert([
            'name' => 'Ojós', // Fiestas en honor a San Agustín - agosto
            'latitude' => 38.1897,
            'longitude' => -1.3456,
            'province_id' => 33
        ]);
        DB::table('towns')->insert([
            'name' => 'Ulea', // Fiestas de San Bartolomé - agosto
            'latitude' => 38.1844,
            'longitude' => -1.3442,
            'province_id' => 33
        ]);
        DB::table('towns')->insert([
            'name' => 'Villanueva del Río Segura', // Fiestas de San Roque - agosto
            'latitude' => 38.1825,
            'longitude' => -1.3267,
            'province_id' => 33
        ]);
        DB::table('towns')->insert([
            'name' => 'Campos del Río', // Semana Cultural y Fiestas Patronales - julio
            'latitude' => 38.0194,
            'longitude' => -1.4347,
            'province_id' => 33
        ]);
        DB::table('towns')->insert([
            'name' => 'El Madroño', // Romería de la Virgen de Gracia - junio
            'latitude' => 37.7167,
            'longitude' => -6.4833,
            'province_id' => 40
        ]);
        DB::table('towns')->insert([
            'name' => 'Isla Redonda-La Aceñuela', // Fiesta de la Aceituna - diciembre
            'latitude' => 37.3000,
            'longitude' => -5.4167,
            'province_id' => 40
        ]);
        DB::table('towns')->insert([
            'name' => 'Aguadulce', // Feria de San Bartolomé - agosto
            'latitude' => 37.2167,
            'longitude' => -5.2500,
            'province_id' => 40
        ]);
        DB::table('towns')->insert([
            'name' => 'La Campana', // Semana Santa Campanera - marzo/abril
            'latitude' => 37.5333,
            'longitude' => -5.4333,
            'province_id' => 40
        ]);
        DB::table('towns')->insert([
            'name' => 'Villanueva de San Juan', // Feria de San Juan - junio
            'latitude' => 37.0000,
            'longitude' => -5.1667,
            'province_id' => 40
        ]);
        DB::table('towns')->insert([
            'name' => 'Horta de Sant Joan', // Festa del Renaixement - julio
            'latitude' => 40.9571,
            'longitude' => -0.3201,
            'province_id' => 42
        ]);
        DB::table('towns')->insert([
            'name' => 'Miravet', // Mercat Medieval - julio
            'latitude' => 41.0337,
            'longitude' => -0.6012,
            'province_id' => 42
        ]);
        DB::table('towns')->insert([
            'name' => 'Pratdip', // Fira de Bruixeria - octubre
            'latitude' => 41.0403,
            'longitude' => -0.8432,
            'province_id' => 42
        ]);
        DB::table('towns')->insert([
            'name' => 'La Fatarella', // Festa del Raïm - octubre
            'latitude' => 41.1448,
            'longitude' => -0.4947,
            'province_id' => 42
        ]);
        DB::table('towns')->insert([
            'name' => 'Garachico', // Romería de San Roque - agosto
            'latitude' => 28.3734,
            'longitude' => -16.7621,
            'province_id' => 43
        ]);
        DB::table('towns')->insert([
            'name' => 'El Tanque', // Fiestas de San Antonio - junio
            'latitude' => 28.3556,
            'longitude' => -16.7831,
            'province_id' => 43
        ]);
        DB::table('towns')->insert([
            'name' => 'Vilaflor', // Fiesta de San Roque - agosto
            'latitude' => 28.1602,
            'longitude' => -16.6351,
            'province_id' => 43
        ]);
        DB::table('towns')->insert([
            'name' => 'Buenavista del Norte', // Romería de San Sebastián - enero
            'latitude' => 28.3726,
            'longitude' => -16.8516,
            'province_id' => 43
        ]);
        DB::table('towns')->insert([
            'name' => 'Fasnia', // Fiestas de San Joaquín - agosto
            'latitude' => 28.2305,
            'longitude' => -16.4686,
            'province_id' => 43
        ]);
        DB::table('towns')->insert([
            'name' => 'Salcedillo', // Fiesta de San Bartolomé - agosto
            'latitude' => 40.7561,
            'longitude' => -0.8722,
            'province_id' => 44
        ]);
        DB::table('towns')->insert([
            'name' => 'Almohaja', // Fiestas patronales en honor a San Bartolomé - agosto
            'latitude' => 40.6214,
            'longitude' => -1.3261,
            'province_id' => 44
        ]);
        DB::table('towns')->insert([
            'name' => 'Aguatón', // Fiestas de San Bartolomé - agosto
            'latitude' => 40.5689,
            'longitude' => -1.2758,
            'province_id' => 44
        ]);
        DB::table('towns')->insert([
            'name' => 'Bádenas', // Fiestas patronales en honor a San Bartolomé - agosto
            'latitude' => 40.7625,
            'longitude' => -1.1275,
            'province_id' => 44
        ]);
        DB::table('towns')->insert([
            'name' => 'La Fresneda', // Fiestas de San Bartolomé - agosto
            'latitude' => 40.8942,
            'longitude' => 0.1314,
            'province_id' => 44
        ]);
        DB::table('towns')->insert([
            'name' => 'Albarracín', // Fiestas de Santa María y San Julián - septiembre
            'latitude' => 40.4056,
            'longitude' => -1.4439,
            'province_id' => 44
        ]);
        DB::table('towns')->insert([
            'name' => 'Valderrobres', // Fiestas patronales de San Roque - agosto
            'latitude' => 40.8808,
            'longitude' => 0.1553,
            'province_id' => 44
        ]);
        DB::table('towns')->insert([
            'name' => 'Rubielos de Mora', // Semana Cultural y Fiestas de San Antonio - junio
            'latitude' => 40.2086,
            'longitude' => -0.6389,
            'province_id' => 44
        ]);
        DB::table('towns')->insert([
            'name' => 'Segura de los Baños', // Fiesta de la Virgen de los Remedios 8 de septiembre
            'latitude' => 40.940294,
            'longitude' => -0.950511,
            'province_id' => 44
        ]);
        DB::table('towns')->insert([
            'name' => 'La Puebla de Montalbán', // Fiesta de San Sebastián 20 de enero
            'latitude' => 39.872222,
            'longitude' => -4.358889,
            'province_id' => 45
        ]);
        DB::table('towns')->insert([
            'name' => 'Tembleque', // Fiesta de la Virgen del Castillo 15 de agosto
            'latitude' => 39.694722,
            'longitude' => -3.504167,
            'province_id' => 45
        ]);
        DB::table('towns')->insert([
            'name' => 'Yunclillos', // Fiesta de San Juan 24 de junio
            'latitude' => 40.021667,
            'longitude' => -3.986389,
            'province_id' => 45
        ]);
        DB::table('towns')->insert([
            'name' => 'Cofrentes', // Fiesta de San José 19 de marzo
            'latitude' => 39.229722,
            'longitude' => -1.061389,
            'province_id' => 46
        ]);
        DB::table('towns')->insert([
            'name' => 'Albuixech', // Fiesta de la Virgen del Rosario 7 de octubre
            'latitude' => 39.544918,
            'longitude' => -0.324161,
            'province_id' => 46
        ]);
        DB::table('towns')->insert([
            'name' => 'Llocnou de la Corona', // Fiesta de San Sebastián 20 de enero
            'latitude' => 39.42046,
            'longitude' => -0.38206,
            'province_id' => 46
        ]);
        DB::table('towns')->insert([
            'name' => 'Cifuentes', // Fiesta de la Virgen del Socorro 8 de septiembre
            'latitude' => 40.786389,
            'longitude' => -2.621389,
            'province_id' => 21
        ]);
        DB::table('towns')->insert([
            'name' => 'Sigüenza', // Fiesta de la Virgen de la Peña 15 de agosto
            'latitude' => 41.069167,
            'longitude' => -2.639167,
            'province_id' => 21
        ]);
        DB::table('towns')->insert([
            'name' => 'Alcalá del Júcar', // Fiesta de la Virgen de la Asunción 15 de agosto
            'latitude' => 39.192896,
            'longitude' => -1.42917,
            'province_id' => 21
        ]);
        DB::table('towns')->insert([
            'name' => 'La Almunia de Doña Godina', // Fiesta de la Virgen del Rosario 7 de octubre
            'latitude' => 41.483333,
            'longitude' => -1.383333,
            'province_id' => 50
        ]);
        DB::table('towns')->insert([
            'name' => 'Belchite', // Fiesta de la Virgen de los Remedios 8 de septiembre
            'latitude' => 41.306545,
            'longitude' => -0.754636,
            'province_id' => 50
        ]);
        DB::table('towns')->insert([
            'name' => 'Mequinenza', // Fiesta de la Virgen del Pilar 12 de octubre
            'latitude' => 41.374167,
            'longitude' => 0.3025,
            'province_id' => 50
        ]);
    }
}
