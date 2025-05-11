<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            'title' => 'Fiestas do Carme',
            'description' => 'El municipio de Cerceda celebrará las Festas do Carme donde honrará a la Virxe do Carmen, el Santísimo Sacramento y la Virxe de Fátima.',
            'date' => '2025-07-19',
            'minAge' => 1,
            'type' => 'religious',
            'town_id' => 2,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'San Pedro de Xesteda en Cerceda',
            'description' => 'El evento "San Pedro de Xesteda" tendrá lugar en el municipio coruñés de Cerceda el Domingo 29 de Junio. Está clasificado dentro de la categoría Religiosa.',
            'date' => '2025-06-29',
            'minAge' => 1,
            'type' => 'religious',
            'town_id' => 2,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'San Pedro Fiz de Pardecond',
            'description' => 'El evento "San Pedro Fiz de Pardeconde" tendrá lugar en el municipio orensano de Esgos el Viernes 1 de Agosto.',
            'date' => '2025-08-01',
            'type' => 'cultural',
            'town_id' => 3,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festas do Carme de Camelle',
            'description' => 'Fiesta en honor a la Virxe do Carmen y la Virxe dos Remedios que tendrá lugar en la parroquia de Camelle, en el municipio de Camariñas',
            'date' => '2025-08-03',
            'type' => 'religious',
            'town_id' => 4,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'San Pedro Felix de Vixoi',
            'description' => 'Los vecinos de San Fiz en el municipio de Bergondo celebrarán sus fiestas en honor a San Pedro Félix de Vixoi. A lo largo de las jornadas los asistentes disfrutarán de los actos religiosos programados para la ocasión, actuaciones musicales y una gran churrascada.',
            'date' => '2025-08-04',
            'type' => 'religious',
            'town_id' => 5,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Veran A Rúa',
            'description' => 'El Concello de A Rúa celebrará durante el mes de Agosto sus fiestas del Verano, con actividades lúdicas y musicales para todos los públicos. Los actos se desarrollarán a lo largo de la Plaza de la Estación, en los cuales se podrá disfrutar de conciertos, orquestas, teatro y espectáculos.',
            'date' => '2025-08-01',
            'town_id' => 6,
            'minAge' => 1,
            'type' => 'religious',
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'XIV Festa Popular',
            'description' => 'Fiesta popular que se celebra en el municipio de Baltar en la que los asistentes podrán participar en la gran variedad de juegos populares para niños y mayores, y disfrutar de las actuaciones musicales.',
            'date' => '2025-08-02',
            'minAge' => 1,
            'type' => 'cultural',
            'town_id' => 7,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festas do Carme',
            'description' => 'El evento "Festas do Carme" tendrá lugar en el municipio pontevedrés de Mondariz-Balneario el Miércoles 16 de Julio. Está clasificado dentro de la categoría Religiosa.',
            'date' => '2025-07-12',
            'type' => 'religious',
            'town_id' => 8,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Nortada',
            'description' => 'El evento "Nortada" tendrá lugar en el municipio pontevedrés de Illa de Arousa (O Portiño) ',
            'date' => '2025-07-20',
            'type' => 'party',
            'minAge' => 18,
            'town_id' => 9,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Noite Musical de Paredes',
            'description' => 'El evento "Noite Musical de Paredes" tendrá lugar en el municipio pontevedrés de Vilaboa (Canteira de Paredes) el Sábado 7 de Junio.',
            'date' => '2025-06-07',
            'type' => 'cultural',
            'town_id' => 10,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'XVIII Festa da Xuventud',
            'description' => 'Un año más se celebrará en el municipio de Monterroso la Festa da Xuventude. Los asistentes a esta jornada de fiesta podrán disfrutar con las actividades lúdicas programadas para la ocasión.',
            'date' => '2025-08-02',
            'type' => 'party',
            'town_id' => 11,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'III Fentos Festa',
            'description' => 'Fiesta para jovenes en el municipio de Boveda el 2 de agosto',
            'date' => '2025-08-02',
            'type' => 'party',
            'minAge' => 9,
            'town_id' => 11,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festa da Xuventude',
            'description' => 'El municipio de Castroverde celebra la tradicional Festa da Xuventude, con música y actividades juveniles.',
            'date' => '2025-08-15',
            'type' => 'party',
            'minAge' => 6,
            'town_id' => 12,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de invierno',
            'description' => 'Celebración local de invierno en Castroverde con eventos culturales el 21 de diciembre.',
            'date' => '2025-12-21',
            'type' => 'cultural',
            'town_id' => 12,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festival de la Sidra',
            'description' => 'En Nava se celebra el tradicional Festival de la Sidra, con catas y música en vivo.',
            'date' => '2025-07-12',
            'type' => 'party',
            'minAge' => 18,
            'town_id' => 13,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta del Bollu en La Peruyal',
            'description' => 'Arriondas celebra la Fiesta del Bollu en el barrio de La Peruyal, con gastronomía y folklore.',
            'date' => '2025-07-26',
            'type' => 'gastronomic',
            'town_id' => 14,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feries de San Julián',
            'description' => 'Feria tradicional del municipio de Bimenes en honor a San Julián.',
            'date' => '2025-10-20',
            'type' => 'religious',
            'minAge' => 10,
            'town_id' => 16,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Juliana',
            'description' => 'Santillana del Mar celebra las fiestas de su patrona, San Juliana, con eventos religiosos y música.',
            'date' => '2025-06-25',
            'type' => 'religious',
            'minAge' => 5,
            'town_id' => 17,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Hogueras de San Juan',
            'description' => 'Soto de la Marina celebra la mágica noche de San Juan con hogueras en la playa y música.',
            'date' => '2025-06-23',
            'type' => 'party',
            'minAge' => 12,
            'town_id' => 18,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas del Carmen',
            'description' => 'Suances honra a la Virgen del Carmen con procesión marinera, conciertos y fuegos artificiales.',
            'date' => '2025-07-16',
            'type' => 'religious',
            'town_id' => 19,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Juan',
            'description' => 'El municipio de Salvatierra/Agurain celebra las Fiestas de San Juan, una de las festividades más tradicionales del lugar.',
            'date' => '2025-06-24',
            'type' => 'religious',
            'minAge' => 5,
            'town_id' => 20,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Juan y San Pedro',
            'description' => 'La localidad de Laguardia se llena de color durante las Fiestas de San Juan y San Pedro, con actividades entre el 23 y el 29 de junio.',
            'date' => '2025-06-23',
            'type' => 'religious',
            'minAge' => 6,
            'town_id' => 21,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Roque',
            'description' => 'Amurrio celebra sus fiestas patronales en honor a San Roque con música, deporte rural y ambiente festivo.',
            'date' => '2025-08-15',
            'type' => 'cultural',
            'minAge' => 1,
            'town_id' => 22,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Pedro',
            'description' => 'La localidad de Labastida celebra San Pedro con actos religiosos, conciertos y ambiente festivo.',
            'date' => '2025-06-29',
            'type' => 'religious',
            'town_id' => 23,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de la Virgen de la Encina',
            'description' => 'Artziniega honra a la Virgen de la Encina el 8 de septiembre con procesiones, música y actividades culturales.',
            'date' => '2025-09-08',
            'town_id' => 24,
            'type' => 'religious',
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Telmo',
            'description' => 'Zumaia celebra las Fiestas de San Telmo con tradición marinera, pasacalles y eventos culturales.',
            'date' => '2025-04-25',
            'type' => 'cultural',
            'town_id' => 25,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Antón',
            'description' => 'Getaria celebra San Antón el 17 de enero, una jornada festiva con actos religiosos y populares.',
            'date' => '2025-01-17',
            'type' => 'religious',
            'town_id' => 26,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Alarde de Hondarribia',
            'description' => 'Hondarribia conmemora la victoria sobre las tropas francesas con su tradicional Alarde el 8 de septiembre.',
            'date' => '2025-09-08',
            'type' => 'cultural',
            'town_id' => 27,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Carnavales de Tolosa',
            'description' => 'Tolosa se transforma durante el mes de febrero con sus famosos carnavales llenos de disfraces y desfiles.',
            'date' => '2025-02-28',
            'type' => 'party',
            'minAge' => 6,
            'town_id' => 28,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Juan',
            'description' => 'El pueblo de Ea celebra la mágica noche de San Juan con hogueras y música en un entorno costero.',
            'date' => '2025-06-24',
            'type' => 'party',
            'minAge' => 12,
            'town_id' => 29,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Pantaleón',
            'description' => 'Sollano-Llantada celebra las Fiestas de San Pantaleón el 27 de julio, con procesiones, música y ambiente festivo.',
            'date' => '2025-07-27',
            'type' => 'party',
            'town_id' => 30,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de Santa Catalina',
            'description' => 'Mundaka celebra Santa Catalina el 25 de noviembre, una festividad con actos religiosos y culturales.',
            'date' => '2025-11-25',
            'type' => 'religious',
            'town_id' => 31,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Nicolás',
            'description' => 'Elantxobe rinde homenaje a San Nicolás el 6 de diciembre, con procesiones y ambiente tradicional marinero.',
            'date' => '2025-12-06',
            'type' => 'cultural',
            'town_id' => 32,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'La Vijanera',
            'description' => 'La Vijanera es una mascarada ancestral que se celebra en Silio el primer domingo de enero, con personajes tradicionales y folclore cántabro.',
            'date' => '2025-01-05',
            'type' => 'religious',
            'minAge' => 12,
            'town_id' => 33,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'La Folía',
            'description' => 'San Vicente de la Barquera celebra La Folía el domingo siguiente al martes de Pascua, una fiesta marinera de gran tradición.',
            'date' => '2025-04-27',
            'type' => 'religious',
            'town_id' => 34,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Día de Cantabria',
            'description' => 'Cabezón de la Sal celebra el Día de Cantabria el segundo domingo de agosto con folclore, mercados y exhibiciones tradicionales.',
            'date' => '2025-08-10',
            'type' => 'cultural',
            'town_id' => 35,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas del Santo Cristo del Amparo',
            'description' => 'Las fiestas del Santo Cristo del Amparo en Comillas tienen lugar del 11 al 17 de julio con numerosas actividades y conciertos.',
            'date' => '2025-07-11',
            'type' => 'religious',
            'minAge' => 12,
            'town_id' => 36,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de Nuestra Señora de Valvanuz',
            'description' => 'La villa de Selaya celebra a su patrona, la Virgen de Valvanuz, el 15 de agosto con actos religiosos y folclore cántabro.',
            'date' => '2025-08-15',
            'type' => 'religious',
            'town_id' => 37,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Romería a Ujué',
            'description' => 'La tradicional romería a Ujué se celebra el 1 de mayo, reuniendo a peregrinos de toda Navarra.',
            'date' => '2025-05-01',
            'type' => 'religious',
            'minAge' => 9,
            'town_id' => 38,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Exaltación de la Santa Cruz',
            'description' => 'Alsasua celebra la Exaltación de la Santa Cruz en septiembre con danzas, desfiles y ambiente festivo.',
            'date' => '2025-09-14',
            'type' => 'religious',
            'town_id' => 39,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas Patronales de San Adrián',
            'description' => 'San Adrián celebra sus fiestas patronales los días 8 y 9 de septiembre, con actividades culturales, religiosas y conciertos.',
            'date' => '2025-09-08',
            'type' => 'cultural',
            'minAge' => 6,
            'town_id' => 40,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Carnaval de Lantz',
            'description' => 'El Carnaval de Lantz, uno de los más famosos de Navarra, se celebra del 2 al 4 de marzo con personajes tradicionales como Miel Otxin.',
            'date' => '2025-03-02',
            'type' => 'party',
            'town_id' => 41,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Día de la Almadía',
            'description' => 'Burgui celebra el Día de la Almadía el 3 de mayo, una recreación histórica del transporte fluvial de madera por el río Esca.',
            'date' => '2025-05-03',
            'type' => 'cultural',
            'town_id' => 42,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas del Cristo de los Remedios',
            'description' => 'Briones celebra en septiembre sus fiestas en honor al Cristo de los Remedios, con procesiones, música y actos populares.',
            'date' => '2025-09-07',
            'type' => 'religious',
            'minAge' => 12,
            'town_id' => 43,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Cristo de La Canal',
            'description' => 'Préjano festeja al Cristo de La Canal el 14 de septiembre con celebraciones religiosas y actividades festivas.',
            'date' => '2025-09-14',
            'type' => 'religious',
            'minAge' => 10,
            'town_id' => 44,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas Patronales de Luezas',
            'description' => 'Las fiestas patronales de Luezas se celebran el fin de semana más próximo al 15 de agosto, con actos tradicionales y festivos.',
            'date' => '2025-08-16', 
            'type' => 'cultural',
            'town_id' => 45,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Roque',
            'description' => 'Bezares celebra sus fiestas patronales en honor a San Roque el 16 de agosto con actividades populares y religiosas.',
            'date' => '2025-08-16',
            'type' => 'cultural',
            'town_id' => 46,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Juan',
            'description' => 'Bobadilla celebra sus Fiestas de San Juan del 23 al 25 de junio con hogueras, música, procesiones y tradiciones populares.',
            'date' => '2025-06-23',
            'type' => 'party',
            'town_id' => 47,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Miguel',
            'description' => 'Puentedey honra a San Miguel el 29 de septiembre con actividades religiosas, música tradicional y convivencia vecinal.',
            'date' => '2025-09-29',
            'type' => 'religious',
            'town_id' => 48,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Cosme y San Damián',
            'description' => 'Covarrubias celebra el 27 de septiembre las fiestas en honor a San Cosme y San Damián con romerías, ferias y procesiones.',
            'date' => '2025-09-27',
            'type' => 'cultural',
            'town_id' => 49,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de Santo Domingo de Guzmán',
            'description' => 'Caleruega conmemora el 8 de agosto la festividad de su hijo ilustre, Santo Domingo de Guzmán, con actos solemnes y celebraciones populares.',
            'date' => '2025-08-08',
            'type' => 'religious',
            'town_id' => 50,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Vicente Mártir',
            'description' => 'Frías rinde homenaje a su patrón, San Vicente Mártir, el 22 de enero, con misa, procesión y otras actividades tradicionales.',
            'date' => '2025-01-22',
            'type' => 'religious',
            'town_id' => 51,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Pedro',
            'description' => 'Lerma celebra San Pedro el 29 de junio con fiestas religiosas, verbenas y feria de productos locales.',
            'date' => '2025-06-29',
            'type' => 'religious',
            'town_id' => 52,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Encierros tradicionales',
            'description' => 'Cuéllar celebra sus tradicionales encierros, considerados los más antiguos de España, el último fin de semana de agosto.',
            'date' => '2025-08-30',
            'type' => 'religious',
            'town_id' => 53,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de los Gabarreros',
            'description' => 'El Espinar celebra la Fiesta de los Gabarreros el primer fin de semana de marzo, en honor a los trabajadores del bosque, con desfiles, demostraciones y música tradicional.',
            'date' => '2025-03-01',
            'type' => 'religious',
            'town_id' => 54,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de Santa Águeda',
            'description' => 'Zamarramala celebra la Fiesta de Santa Águeda el fin de semana siguiente al 5 de febrero, donde las mujeres toman el protagonismo en una colorida y tradicional celebración.',
            'date' => '2025-02-08',
            'type' => 'religious',
            'town_id' => 55,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria del Chorizo',
            'description' => 'Cantimpalos, famoso por su chorizo, celebra su feria el 25 de abril con degustaciones, concursos y mercado tradicional.',
            'date' => '2025-04-25',
            'type' => 'gastronomic',
            'town_id' => 56,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de la Virgen del Pino y San Roque',
            'description' => 'Vinuesa celebra sus fiestas patronales del 14 al 18 de agosto en honor a la Virgen del Pino y San Roque, con desfiles, procesiones y música.',
            'date' => '2025-08-14',
            'type' => 'religious',
            'town_id' => 57,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Ronda popular de Carnaval',
            'description' => 'Duruelo de la Sierra mantiene viva su ronda popular el martes de Carnaval, una tradición que mezcla humor, música y sátira.',
            'date' => '2025-03-04',
            'type' => 'party',
            'town_id' => 58,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Bernabé',
            'description' => 'Recuerda celebra sus fiestas patronales el 11 de agosto en honor a San Bernabé, con actos religiosos, verbenas y actividades para todas las edades.',
            'date' => '2025-08-11',
            'type' => 'religious',
            'town_id' => 59,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Semana Santa',
            'description' => 'Carrión de los Condes vive intensamente la Semana Santa con procesiones, representaciones y un ambiente de recogimiento espiritual.',
            'date' => '2025-04-13',
            'type' => 'religious',
            'town_id' => 60,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Roque',
            'description' => 'Saldaña celebra a San Roque el 16 de agosto con actos litúrgicos, danzas tradicionales y eventos populares en la plaza del pueblo.',
            'date' => '2025-08-16',
            'type' => 'cultural',
            'town_id' => 61,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Roque',
            'description' => 'Villacuende celebra cada 16 de agosto su tradicional Fiesta de San Roque, con procesiones, música y actividades populares.',
            'date' => '2025-08-16',
            'type' => 'religious',
            'town_id' => 62,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de Astures y Romanos',
            'description' => 'Astorga revive su pasado romano y astur en estas fiestas históricas que tienen lugar a finales de julio con desfiles, campamentos y recreaciones.',
            'date' => '2025-07-26',
            'type' => 'religious',
            'town_id' => 63,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas Patronales de San Roque',
            'description' => 'La Bañeza rinde homenaje a San Roque el 16 de agosto con múltiples actos festivos, religiosos y culturales.',
            'date' => '2025-08-16',
            'type' => 'religious',
            'town_id' => 64,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Romería de la Peregrina',
            'description' => 'Sahagún celebra en agosto la tradicional Romería de la Peregrina, con devoción, bailes y gastronomía local.',
            'date' => '2025-08-17',
            'type' => 'gastronomic',
            'town_id' => 65,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Guillermo',
            'description' => 'Cistierna honra a San Guillermo el 10 de febrero y durante el verano, con actos religiosos, folclore y verbenas.',
            'date' => '2025-02-10',
            'type' => 'religious',
            'town_id' => 66,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Agustín',
            'description' => 'Toro celebra a San Agustín a finales de agosto con desfiles, conciertos y espectáculos taurinos.',
            'date' => '2025-08-28',
            'type' => 'party',
            'town_id' => 67,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Toro Enmaromado',
            'description' => 'Benavente vive en junio sus famosas fiestas del Toro Enmaromado, donde el toro corre por las calles guiado por los mozos.',
            'date' => '2025-06-18',
            'type' => 'party',
            'town_id' => 68,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de las Victorias',
            'description' => 'Puebla de Sanabria celebra en septiembre la Fiesta de las Victorias, su festividad grande con ambiente medieval, conciertos y procesiones.',
            'date' => '2025-09-08',
            'type' => 'party',
            'town_id' => 69,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Agustín',
            'description' => 'Fermoselle celebra en agosto su Fiesta de San Agustín, con música, danzas y actividades tradicionales en el entorno de los Arribes del Duero.',
            'date' => '2025-08-28',
            'type' => 'party',
            'town_id' => 70,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de la Peña',
            'description' => 'Tordesillas celebra en septiembre las Fiestas de la Peña con encierros, música y tradiciones populares.',
            'date' => '2025-09-14',
            'type' => 'party',
            'town_id' => 71,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Semana Renacentista',
            'description' => 'Medina de Rioseco se transforma cada agosto en un escenario del Renacimiento con mercados, recreaciones y espectáculos históricos.',
            'date' => '2025-08-18',
            'type' => 'religious',
            'town_id' => 72,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de Nuestra Señora y San Roque',
            'description' => 'Peñafiel celebra en agosto sus fiestas patronales con actos religiosos, encierros y mucha tradición.',
            'date' => '2025-08-16',
            'type' => 'religious',
            'town_id' => 73,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen de Arriba',
            'description' => 'Simancas honra a su patrona el 8 de septiembre con procesiones y actividades populares.',
            'date' => '2025-09-08',
            'type' => 'religious',
            'town_id' => 74,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Carnaval del Toro',
            'description' => 'Ciudad Rodrigo celebra en febrero su famoso Carnaval del Toro, una fiesta que mezcla tradición taurina y carnaval.',
            'date' => '2025-03-01',
            'type' => 'party',
            'town_id' => 75,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de Nuestra Señora de la Asunción',
            'description' => 'La Alberca celebra esta festividad religiosa el 15 de agosto, con una mezcla de solemnidad y folklore serrano.',
            'date' => '2025-08-15',
            'type' => 'religious',
            'town_id' => 76,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Corpus Christi',
            'description' => 'Ledesma vive en junio una de las celebraciones más destacadas del Corpus Christi, con tradición y devoción.',
            'date' => '2025-06-19',
            'type' => 'religious',
            'town_id' => 77,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de la Virgen del Castañar',
            'description' => 'Béjar rinde tributo a la Virgen del Castañar en septiembre con procesiones, eventos culturales y festejos populares.',
            'date' => '2025-09-08',
            'type' => 'religious',
            'town_id' => 78,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de Nuestra Señora del Pilar',
            'description' => 'Arenas de San Pedro celebra estas fiestas en octubre con devoción y alegría, destacando por su ambiente tradicional.',
            'date' => '2025-10-12',
            'type' => 'religious',
            'town_id' => 79,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de la Virgen de Chilla',
            'description' => 'Candeleda celebra el segundo domingo de septiembre las fiestas en honor a la Virgen de Chilla, con romerías y actos religiosos en un entorno natural privilegiado.',
            'date' => '2025-09-14',
            'type' => 'religious',
            'town_id' => 80,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Pedro del Barco',
            'description' => 'El Barco de Ávila honra a San Pedro del Barco en agosto con actividades religiosas, culturales y festivas para todos los públicos.',
            'date' => '2025-08-25',
            'type' => 'religious',
            'town_id' => 81,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de la Virgen de la Vega',
            'description' => 'Piedrahíta celebra en agosto las fiestas en honor a la Virgen de la Vega con fervor religioso y ambiente popular.',
            'date' => '2025-08-15',
            'type' => 'religious',
            'town_id' => 82,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas del Santísimo Cristo de los Remedios',
            'description' => 'Navaluenga celebra en septiembre sus fiestas patronales con actividades tradicionales, religiosas y festivas.',
            'date' => '2025-09-13',
            'type' => 'religious',
            'town_id' => 83,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de Los Conversos',
            'description' => 'Hervás rememora su pasado judío con la Fiesta de Los Conversos, una celebración cultural llena de teatro, historia y tradición.',
            'date' => '2025-07-05',
            'type' => 'religious',
            'town_id' => 84,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria de San Bartolomé',
            'description' => 'Valencia de Alcántara celebra a finales de agosto su tradicional Feria de San Bartolomé con eventos populares, música y ambiente festivo.',
            'date' => '2025-08-24',
            'type' => 'cultural',
            'town_id' => 85,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta del Queso',
            'description' => 'Garrovillas de Alconétar acoge cada abril la Fiesta del Queso, una cita gastronómica con productos locales, música y actividades culturales.',
            'date' => '2025-04-12',
            'type' => 'gastronomic',
            'town_id' => 86,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Juan',
            'description' => 'Brozas conmemora San Juan en junio con celebraciones populares que mezclan tradición, religión y alegría en sus calles.',
            'date' => '2025-06-23',
            'type' => 'cultural',
            'town_id' => 87,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas del Corpus',
            'description' => 'Oliva de la Frontera se llena de color en mayo o junio con las Fiestas del Corpus, que destacan por sus alfombras florales y ambiente religioso.',
            'date' => '2025-06-15',
            'type' => 'religious',
            'town_id' => 88,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria de San Mateo',
            'description' => 'Fregenal de la Sierra celebra en septiembre la Feria de San Mateo, con actos tradicionales, corridas de toros y ambiente festivo.',
            'date' => '2025-09-21',
            'type' => 'cultural',
            'town_id' => 89,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Semana Santa',
            'description' => 'Jerez de los Caballeros vive una Semana Santa de gran belleza y devoción, declarada Fiesta de Interés Turístico Nacional.',
            'date' => '2025-04-14',
            'type' => 'religious',
            'town_id' => 90,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas del Cristo de las Aguas',
            'description' => 'Guareña celebra en mayo las Fiestas del Cristo de las Aguas con procesiones, actividades religiosas y ambiente festivo.',
            'date' => '2025-05-11',
            'type' => 'religious',
            'town_id' => 91,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria del Toro',
            'description' => 'La Feria del Toro de Olivenza, celebrada en marzo, es uno de los eventos taurinos más importantes de España.',
            'date' => '2025-03-07',
            'type' => 'cultural',
            'town_id' => 92,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria y Fiestas',
            'description' => 'Almadén celebra durante la primera semana de septiembre su Feria y Fiestas con actos populares, conciertos y festejos taurinos.',
            'date' => '2025-09-01',
            'type' => 'party',
            'town_id' => 93,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Romería del Cristo del Valle',
            'description' => 'San Carlos del Valle celebra la tradicional Romería del Cristo del Valle el primer domingo de mayo.',
            'date' => '2025-05-04',
            'type' => 'cultural',
            'town_id' => 94,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas Patronales de la Virgen del Rosario',
            'description' => 'Cózar honra a la Virgen del Rosario en octubre con actos religiosos, música y tradiciones populares.',
            'date' => '2025-10-05',
            'type' => 'cultural',
            'town_id' => 95,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Bartolomé',
            'description' => 'Villahermosa celebra en agosto las Fiestas de San Bartolomé con encierros, actividades religiosas y conciertos.',
            'date' => '2025-08-24',
            'type' => 'religious',
            'town_id' => 96,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de la Virgen de Cortes',
            'description' => 'Alcaraz honra a la Virgen de Cortes el 26 de agosto con eventos religiosos, folclore y tradición.',
            'date' => '2025-08-26',
            'type' => 'religious',
            'town_id' => 97,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Semana Santa Chinchillana',
            'description' => 'La Semana Santa de Chinchilla de Monte-Aragón, reconocida por su solemnidad y tradición, se celebra entre marzo y abril.',
            'date' => '2025-04-17',
            'type' => 'religious',
            'town_id' => 98,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria de Tradiciones',
            'description' => 'Yeste celebra en octubre la Feria de Tradiciones con mercado artesanal, música popular y gastronomía local.',
            'date' => '2025-10-18',
            'type' => 'gastronomic',
            'town_id' => 99,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Semana Santa y LeturAlma',
            'description' => 'Letur vive intensamente su Semana Santa y acoge en julio el festival LeturAlma, con música alternativa y naturaleza.',
            'date' => '2025-07-19',
            'type' => 'party',
            'town_id' => 100,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Moros y Cristianos',
            'description' => 'Mojácar revive su historia en junio con los tradicionales desfiles de Moros y Cristianos, música y fuegos artificiales.',
            'date' => '2025-06-14',
            'type' => 'religious',
            'town_id' => 101,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas Patronales en honor a San Roque',
            'description' => 'Vélez-Blanco celebra en agosto sus fiestas patronales en honor a San Roque con tradición, cultura y festejos.',
            'date' => '2025-08-16',
            'type' => 'cultural',
            'town_id' => 102,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de la Virgen del Carmen',
            'description' => 'Níjar homenajea a la Virgen del Carmen en julio con procesiones marineras y actividades populares.',
            'date' => '2025-07-16',
            'type' => 'cultural',
            'town_id' => 103,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Jornadas Gastronómicas del Jamón',
            'description' => 'Serón celebra en julio sus populares jornadas dedicadas al jamón, con degustaciones y feria.',
            'date' => '2025-07-13',
            'type' => 'gastronomic',
            'town_id' => 104,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas Patronales de San José',
            'description' => 'Abrucena honra a San José en marzo con actos religiosos, verbenas y cultura local.',
            'date' => '2025-03-19',
            'type' => 'cultural',
            'town_id' => 105,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Salvador',
            'description' => 'Tárbena celebra en agosto sus Fiestas de San Salvador con alegría, música y tradición valenciana.',
            'date' => '2025-08-06',
            'type' => 'party',
            'town_id' => 106,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festes de la Mare de Déu',
            'description' => 'Agres rinde tributo a la Mare de Déu en septiembre con romerías, música tradicional y devoción popular.',
            'date' => '2025-09-08',
            'type' => 'religious',
            'town_id' => 107,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Moros y Cristianos',
            'description' => 'Benilloba celebra en agosto sus fiestas de Moros y Cristianos con espectaculares desfiles y música.',
            'date' => '2025-08-10',
            'type' => 'cultural',
            'town_id' => 108,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festes Patronals',
            'description' => 'Beniardá celebra sus Festes Patronals en agosto con tradiciones religiosas, bailes y comida popular.',
            'date' => '2025-08-15',
            'type' => 'cultural',
            'town_id' => 109,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festes de la Mare de Déu',
            'description' => 'Fornalutx festeja a la Mare de Déu en septiembre con procesiones, conciertos y ambiente mallorquín.',
            'date' => '2025-09-08',
            'type' => 'religious',
            'town_id' => 110,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festes de Sant Cristòfol',
            'description' => 'Es Migjorn Gran celebra a su patrón en julio con fiestas, cultura menorquina y actividades para todos.',
            'date' => '2025-07-10',
            'type' => 'cultural',
            'town_id' => 111,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festes de Sant Joan',
            'description' => 'Sant Joan de Labritja vibra en junio con las Festes de Sant Joan, hogueras, música y tradiciones ibicencas.',
            'date' => '2025-06-24',
            'type' => 'cultural',
            'town_id' => 112,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festes de Sant Mateu',
            'description' => 'Banyalbufar celebra en septiembre las Festes de Sant Mateu con actos religiosos y actividades populares.',
            'date' => '2025-09-21',
            'type' => 'cultural',
            'town_id' => 113,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fia-Faia',
            'description' => 'Bagà enciende la magia navideña el 24 de diciembre con la tradicional Fia-Faia, una fiesta del fuego ancestral.',
            'date' => '2025-12-24',
            'type' => 'cultural',
            'town_id' => 114,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festa Major',
            'description' => 'Talamanca celebra su Festa Major en agosto con música, cultura popular y ambiente festivo.',
            'date' => '2025-08-15',
            'type' => 'party',
            'town_id' => 115,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festa Major',
            'description' => 'Sant Martí d’Albars festeja su Fiesta Mayor en julio con actividades familiares, conciertos y tradición local.',
            'date' => '2025-07-20',
            'type' => 'cultural',
            'town_id' => 116,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festa Major de Sant Martí',
            'description' => 'Mura celebra a Sant Martí en noviembre con gastronomía, música y actividades culturales.',
            'date' => '2025-11-11',
            'type' => 'gastronomic',
            'town_id' => 117,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festa Major',
            'description' => 'Santa Maria de Merlès vive su Fiesta Mayor en agosto con tradiciones rurales y celebraciones comunitarias.',
            'date' => '2025-08-17',
            'type' => 'party',
            'town_id' => 118,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festa Major de Casserres',
            'description' => 'Casserres disfruta de su Festa Major en agosto con días de música, juegos populares y ferias locales.',
            'date' => '2025-08-10',
            'type' => 'party',
            'town_id' => 119,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festa Major do Perafita',
            'description' => 'Perafita honra su Fiesta Mayor el primer domingo de septiembre con tradiciones catalanas y gastronomía.',
            'date' => '2025-09-07',
            'type' => 'religious',
            'town_id' => 120,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festas Majores Castellfollit',
            'description' => 'Castellfollit del Boix celebra su Fiesta Mayor a finales de agosto con actividades tradicionales y festivas.',
            'date' => '2025-08-25',
            'type' => 'cultural',
            'town_id' => 121,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festa Major de Sant Sebastià',
            'description' => 'Copons honra a Sant Sebastià con su Festa Major en enero, una tradición invernal llena de devoción y cultura.',
            'date' => '2025-01-20',
            'type' => 'religious',
            'town_id' => 122,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria de Agosto',
            'description' => 'Grazalema se llena de vida con su Feria de Agosto, con música, gastronomía y ambiente serrano.',
            'date' => '2025-08-14',
            'type' => 'party',
            'town_id' => 123,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria y Fiestas Patronales',
            'description' => 'Villaluenga del Rosario celebra en septiembre sus fiestas patronales, con tradición y cultura local.',
            'date' => '2025-09-10',
            'type' => 'cultural',
            'town_id' => 124,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria de San Blas',
            'description' => 'Benaocaz rinde homenaje a San Blas con su tradicional feria en febrero.',
            'date' => '2025-02-03',
            'type' => 'cultural',
            'town_id' => 125,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria de Agosto y Romería',
            'description' => 'El Bosque vibra con su Feria de Agosto y la tradicional romería en junio.',
            'date' => '2025-06-15',
            'type' => 'cultural',
            'town_id' => 126,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria de Bornos',
            'description' => 'Bornos se llena de alegría en septiembre con su gran feria local.',
            'date' => '2025-09-06',
            'type' => 'cultural',
            'town_id' => 127,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria de Agosto',
            'description' => 'Setenil de las Bodegas celebra su Feria de Agosto con mucha tradición, música y alegría.',
            'date' => '2025-08-18',
            'type' => 'party',
            'town_id' => 128,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Sexenni de Morella',
            'description' => 'El Sexenni de Morella, una celebración única que se realiza cada seis años, llena de historia y devoción.',
            'date' => '2025-08-16',
            'type' => 'cultural',
            'town_id' => 129,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas Patronales',
            'description' => 'Vilafamés celebra sus fiestas patronales en agosto con una agenda llena de cultura y tradición.',
            'date' => '2025-08-09',
            'type' => 'cultural',
            'town_id' => 130,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas Patronales',
            'description' => 'Culla honra sus tradiciones en julio con las fiestas patronales que incluyen música, gastronomía y cultura.',
            'date' => '2025-07-18',
            'type' => 'cultural',
            'town_id' => 131,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas Patronales',
            'description' => 'Ares del Maestre celebra sus fiestas patronales en agosto con actividades tradicionales y festividades populares.',
            'date' => '2025-08-12',
            'type' => 'cultural',
            'town_id' => 132,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Cristóbal',
            'description' => 'Benassal honra a San Cristóbal en julio con una semana de eventos, cultura y tradición.',
            'date' => '2025-07-10',
            'type' => 'cultural',
            'town_id' => 133,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas Patronales',
            'description' => 'Vistabella del Maestrat celebra sus fiestas patronales en septiembre con tradición y folclore.',
            'date' => '2025-09-06',
            'type' => 'cultural',
            'town_id' => 134,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta del Queso',
            'description' => 'Zuheros organiza en septiembre su Fiesta del Queso, un evento gastronómico muy esperado.',
            'date' => '2025-09-13',
            'type' => 'gastronomic',
            'town_id' => 135,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria Real',
            'description' => 'Iznájar celebra en septiembre su Feria Real con música, feria y mucha alegría local.',
            'date' => '2025-09-18',
            'type' => 'cultural',
            'town_id' => 136,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de Todos los Santos',
            'description' => 'Monturque conmemora Todos los Santos en noviembre, con actividades culturales y tradiciones.',
            'date' => '2025-11-01',
            'type' => 'cultural',
            'town_id' => 137,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria Real',
            'description' => 'Luque festeja su Feria Real en agosto con actos religiosos, feria y cultura popular.',
            'date' => '2025-08-22',
            'type' => 'religious',
            'town_id' => 138,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria y Fiestas Patronales',
            'description' => 'San Clemente se llena de alegría en agosto con su feria y fiestas patronales.',
            'date' => '2025-08-10',
            'type' => 'cultural',
            'town_id' => 139,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de la Virgen de la Estrella',
            'description' => 'Belmonte celebra en septiembre sus fiestas en honor a la Virgen de la Estrella.',
            'date' => '2025-09-07',
            'type' => 'cultural',
            'town_id' => 140,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas Patronales de San Agustín',
            'description' => 'Mota del Cuervo celebra las fiestas de San Agustín en agosto, con mucha tradición y ambiente.',
            'date' => '2025-08-28',
            'type' => 'cultural',
            'town_id' => 141,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas Patronales de la Virgen del Rosario',
            'description' => 'Quintanar del Rey celebra las fiestas de su patrona, la Virgen del Rosario, en octubre.',
            'date' => '2025-10-04',
            'type' => 'religious',
            'town_id' => 142,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Juan',
            'description' => 'Huete vive sus fiestas de San Juan en junio, una celebración marcada por el fuego y la tradición.',
            'date' => '2025-06-24',
            'type' => 'cultural',
            'town_id' => 143,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta Medieval',
            'description' => 'Peratallada se transforma en la Edad Media durante octubre con mercados, espectáculos y ambientación histórica.',
            'date' => '2025-10-05',
            'type' => 'cultural',
            'town_id' => 144,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta Mayor',
            'description' => 'Cadaqués celebra su Fiesta Mayor en septiembre con conciertos, castellers y mucha tradición.',
            'date' => '2025-09-10',
            'type' => 'cultural',
            'town_id' => 145,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria del Arroz',
            'description' => 'Pals homenajea su cultivo más característico con la Feria del Arroz en septiembre.',
            'date' => '2025-09-21',
            'type' => 'gastronomic',
            'town_id' => 146,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta Mayor',
            'description' => 'Rupit i Pruit celebra en junio su Fiesta Mayor con música, comidas populares y tradiciones locales.',
            'date' => '2025-06-15',
            'type' => 'party',
            'town_id' => 147,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta Mayor',
            'description' => 'En agosto, Sant Joan de les Abadesses vive su Fiesta Mayor con cultura, fuego y música tradicional.',
            'date' => '2025-08-17',
            'type' => 'cultural',
            'minAge' => 10,
            'town_id' => 148,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria del Queso y el Embutido',
            'description' => 'Camprodon acoge en mayo una feria gastronómica dedicada al queso y los embutidos de la región.',
            'date' => '2025-05-11',
            'type' => 'gastronomic',
            'town_id' => 149,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Vicente',
            'description' => 'Tossa de Mar celebra a San Vicente en enero con actos religiosos y tradicionales.',
            'date' => '2025-01-22',
            'type' => 'religious',
            'town_id' => 150,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen de los Remedios',
            'description' => 'Alhama de Granada honra a su patrona el 8 de septiembre con procesiones y celebraciones.',
            'date' => '2025-09-08',
            'type' => 'religious',
            'town_id' => 151,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Sebastián',
            'description' => 'Cúllar Vega celebra a San Sebastián el 20 de enero con tradición y ambiente festivo.',
            'date' => '2025-01-20',
            'type' => 'cultural',
            'town_id' => 152,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen del Rosario',
            'description' => 'Órgiva celebra su fiesta más emblemática el 7 de octubre en honor a la Virgen del Rosario.',
            'date' => '2025-10-07',
            'type' => 'religious',
            'town_id' => 153,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen del Mayor Dolor',
            'description' => 'Aracena celebra esta fiesta en septiembre con fervor religioso y numerosas actividades culturales.',
            'date' => '2025-09-15',
            'type' => 'religious',
            'town_id' => 154,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen de la Candelaria',
            'description' => 'Calañas celebra esta tradicional fiesta el 2 de febrero con procesiones y actos religiosos.',
            'date' => '2025-02-02',
            'type' => 'religious',
            'town_id' => 155,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen de los Remedios',
            'description' => 'Alosno celebra a su patrona el 8 de septiembre con una gran devoción y festividad popular.',
            'date' => '2025-09-08',
            'type' => 'cultural',
            'town_id' => 156,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen de las Nieves',
            'description' => 'Bielsa se viste de gala el 5 de agosto para rendir homenaje a la Virgen de las Nieves.',
            'date' => '2025-08-05',
            'type' => 'religious',
            'town_id' => 157,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Juan',
            'description' => 'Albalate de Cinca celebra San Juan con hogueras, música y rituales tradicionales.',
            'date' => '2025-06-24',
            'type' => 'party',
            'town_id' => 158,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Sebastián',
            'description' => 'Aínsa-Sobrarbe honra a San Sebastián el 20 de enero con actos tradicionales y religiosos.',
            'date' => '2025-01-20',
            'type' => 'cultural',
            'town_id' => 159,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen de la Peña',
            'description' => 'Graus celebra esta festividad el 15 de agosto con actividades culturales y religiosas.',
            'date' => '2025-08-15',
            'type' => 'cultural',
            'town_id' => 160,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Juan',
            'description' => 'Sabiñánigo festeja San Juan con celebraciones populares y hogueras la noche del 24 de junio.',
            'date' => '2025-06-24',
            'type' => 'cultural',
            'town_id' => 161,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen de la Bella',
            'description' => 'Arjona conmemora a su patrona con procesiones y festejos el 15 de agosto.',
            'date' => '2025-08-15',
            'type' => 'cultural',
            'town_id' => 162,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Sebastián',
            'description' => 'Santiago de Calatrava celebra a San Sebastián con fervor y actividades tradicionales.',
            'date' => '2025-01-20',
            'type' => 'cultural',
            'town_id' => 163,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen de la Cabeza',
            'description' => 'Cazorla honra a la Virgen de la Cabeza el 30 de abril con devoción y romería.',
            'date' => '2025-04-30',
            'type' => 'religious',
            'town_id' => 164,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen de los Remedios',
            'description' => 'Peal de Becerro celebra esta festividad el 8 de septiembre con procesiones y eventos populares.',
            'date' => '2025-09-08',
            'type' => 'religious',
            'town_id' => 165,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas del Almendro en Flor',
            'description' => 'Tejeda celebra la floración de los almendros en febrero con gastronomía, música y naturaleza.',
            'date' => '2025-02-15',
            'type' => 'gastronomic',
            'town_id' => 166,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Rama',
            'description' => 'Agaete celebra en agosto la Fiesta de la Rama, una de las festividades más singulares de Gran Canaria, con música y bailes tradicionales.',
            'date' => '2025-08-04',
            'type' => 'cultural',
            'town_id' => 167,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Antonio',
            'description' => 'Moya rinde homenaje a San Antonio en junio con actos religiosos, procesiones y eventos culturales.',
            'date' => '2025-06-13',
            'type' => 'religious',
            'town_id' => 168,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Roque',
            'description' => 'Firgas celebra a San Roque en agosto con una mezcla de tradición religiosa y festividades populares.',
            'date' => '2025-08-16',
            'type' => 'religious',
            'town_id' => 169,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Manzana',
            'description' => 'Valleseco homenajea a su producto estrella, la manzana, en octubre con mercados, catas y música.',
            'date' => '2025-10-12',
            'type' => 'gastronomic',
            'town_id' => 170,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festa Major de Sort',
            'description' => 'Sort celebra su Festa Major en agosto con actividades tradicionales, música y cultura local.',
            'date' => '2025-08-15',
            'type' => 'party',
            'town_id' => 171,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fira del Torró i la Xocolata',
            'description' => 'Agramunt celebra en octubre esta feria dedicada al turrón y al chocolate, con degustaciones y talleres.',
            'date' => '2025-10-12',
            'type' => 'gastronomic',
            'town_id' => 172,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festa Major de La Seu d’Urgell',
            'description' => 'La Seu d’Urgell vive su Festa Major en agosto con conciertos, teatro, tradiciones y actividades familiares.',
            'date' => '2025-08-24',
            'type' => 'party',
            'town_id' => 173,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festa Major de Tremp',
            'description' => 'Tremp celebra su fiesta mayor en septiembre con ferias, espectáculos y tradiciones populares.',
            'date' => '2025-09-08',
            'type' => 'cultural',
            'town_id' => 174,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San José',
            'description' => 'Patones honra a San José en marzo con actos litúrgicos, gastronomía y cultura serrana.',
            'date' => '2025-03-19',
            'type' => 'gastronomic',
            'town_id' => 175,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de la Virgen de Gracia',
            'description' => 'Rascafría celebra a su patrona en agosto con procesiones, bailes, encierros y fuegos artificiales.',
            'date' => '2025-08-15',
            'type' => 'cultural',
            'town_id' => 176,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de Santa María Magdalena',
            'description' => 'Torrelaguna celebra en julio sus fiestas en honor a Santa María Magdalena con procesiones, verbenas y actividades para todos.',
            'date' => '2025-07-22',
            'type' => 'cultural',
            'town_id' => 177,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de la Virgen de la Peña Sacra',
            'description' => 'Manzanares el Real homenajea a su patrona en agosto con actos religiosos, fuegos artificiales y cultura popular.',
            'date' => '2025-08-15',
            'type' => 'party',
            'town_id' => 178,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas patronales de la Virgen de Gracia y San Roque',
            'description' => 'Chinchón celebra en agosto sus fiestas con encierros, procesiones y una gran participación vecinal.',
            'date' => '2025-08-16',
            'type' => 'religious',
            'town_id' => 179,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de la Virgen de la Nueva',
            'description' => 'San Martín de Valdeiglesias celebra a la Virgen de la Nueva en septiembre, con eventos religiosos y música en vivo.',
            'date' => '2025-09-08',
            'type' => 'religious',
            'town_id' => 180,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Roque',
            'description' => 'El Berrueco rinde homenaje a San Roque en agosto con tradiciones, bailes y mucha alegría en la calle.',
            'date' => '2025-08-16',
            'type' => 'cultural',
            'town_id' => 181,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de Nuestra Señora del Roble',
            'description' => 'Cenicientos celebra a su patrona en agosto con misa, procesión, conciertos y actividades populares.',
            'date' => '2025-08-15',
            'type' => 'religious',
            'town_id' => 182,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Antonio',
            'description' => 'Navacerrada honra a San Antonio en junio con eventos tradicionales, procesión y música local.',
            'date' => '2025-06-13',
            'type' => 'cultural',
            'town_id' => 183,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festival de las Tres Culturas',
            'description' => 'Frigiliana acoge en agosto este festival que celebra la herencia cristiana, judía y musulmana con música, gastronomía y espectáculos.',
            'date' => '2025-08-22',
            'type' => 'religious',
            'town_id' => 184,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Noche del Vino',
            'description' => 'Cómpeta celebra el 15 de agosto la tradicional Noche del Vino con catas, música y danzas típicas.',
            'date' => '2025-08-15',
            'type' => 'gastronomic',
            'town_id' => 185,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Día de la Morcilla',
            'description' => 'Canillas de Aceituno dedica un día de abril a su producto estrella, la morcilla, con degustaciones y ambiente festivo.',
            'date' => '2025-04-06',
            'type' => 'gastronomic',
            'town_id' => 186,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta del Ajoblanco',
            'description' => 'Almáchar celebra el primer sábado de septiembre la Fiesta del Ajoblanco, un homenaje a esta sopa fría andaluza con degustaciones y ambiente festivo.',
            'date' => '2025-09-06',
            'type' => 'gastronomic',
            'town_id' => 187,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas Patronales en honor a San Sebastián',
            'description' => 'Ricote celebra en enero sus fiestas patronales con actos religiosos, verbenas y celebraciones populares.',
            'date' => '2025-01-20',
            'type' => 'religious',
            'town_id' => 188,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas en honor a San Agustín',
            'description' => 'Ojós se llena de vida en agosto con sus fiestas en honor a San Agustín, incluyendo actividades tradicionales y eventos religiosos.',
            'date' => '2025-08-28',
            'type' => 'cultural',
            'town_id' => 189,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Bartolomé',
            'description' => 'Ulea celebra en agosto sus fiestas patronales con desfiles, conciertos y procesiones en honor a San Bartolomé.',
            'date' => '2025-08-24',
            'type' => 'party',
            'town_id' => 190,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Roque',
            'description' => 'Villanueva del Río Segura rinde homenaje a San Roque con música, procesiones y actividades culturales en agosto.',
            'date' => '2025-08-16',
            'type' => 'party',
            'town_id' => 191,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Semana Cultural y Fiestas Patronales',
            'description' => 'Campos del Río celebra en julio una semana cultural junto con sus fiestas patronales, destacando la participación vecinal y el folclore local.',
            'date' => '2025-07-15',
            'type' => 'party',
            'town_id' => 192,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Romería de la Virgen de Gracia',
            'description' => 'El Madroño acoge en junio la romería en honor a la Virgen de Gracia, con misa al aire libre, peregrinación y convivencia popular.',
            'date' => '2025-06-08',
            'type' => 'religious',
            'town_id' => 193,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Aceituna',
            'description' => 'Isla Redonda-La Aceñuela celebra en diciembre la Fiesta de la Aceituna, con degustaciones, música y actividades centradas en el olivar.',
            'date' => '2025-12-07',
            'type' => 'gastronomic',
            'town_id' => 194,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria de San Bartolomé',
            'description' => 'Aguadulce rinde homenaje a San Bartolomé en agosto con feria, actos religiosos, actividades infantiles y conciertos.',
            'date' => '2025-08-24',
            'type' => 'party',
            'town_id' => 195,
            'creator_id' => 1,
        ]);  
        DB::table('events')->insert([
            'title' => 'Semana Santa Campanera',
            'description' => 'La Campana vive intensamente la Semana Santa con procesiones, saetas y gran devoción popular entre marzo y abril.',
            'date' => '2025-04-13',
            'type' => 'religious',
            'town_id' => 196,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Feria de San Juan',
            'description' => 'Villanueva de San Juan celebra en junio su feria con eventos culturales, música tradicional y homenajes al patrón San Juan.',
            'date' => '2025-06-24',
            'type' => 'party',
            'town_id' => 197,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festa del Renaixement',
            'description' => 'Horta de Sant Joan revive el Renacimiento en julio con representaciones teatrales, mercado artesanal y trajes de época.',
            'date' => '2025-07-19',
            'type' => 'religious',
            'town_id' => 198,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Mercat Medieval',
            'description' => 'Miravet celebra en julio su Mercat Medieval con recreaciones históricas, puestos artesanales y espectáculos en el castillo templario.',
            'date' => '2025-07-20',
            'type' => 'cultural',
            'town_id' => 199,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fira de Bruixeria',
            'description' => 'Pratdip se transforma en octubre en un escenario mágico con la Fira de Bruixeria, entre leyendas, pócimas y brujas del folclore local.',
            'date' => '2025-10-18',
            'type' => 'cultural',
            'town_id' => 200,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Festa del Raïm',
            'description' => 'La Fatarella celebra en octubre la Festa del Raïm con catas de vino, música tradicional y actividades relacionadas con la vendimia.',
            'date' => '2025-10-11',
            'type' => 'cultural',
            'town_id' => 201,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Romería de San Roque',
            'description' => 'Garachico honra a San Roque con una de las romerías más multitudinarias de Tenerife, donde tradición y devoción se dan la mano.',
            'date' => '2025-08-16',
            'type' => 'cultural',
            'town_id' => 202,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Antonio',
            'description' => 'El Tanque celebra en junio sus fiestas patronales en honor a San Antonio con procesiones, ferias y actividades para todos.',
            'date' => '2025-06-13',
            'type' => 'cultural',
            'town_id' => 203,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Roque',
            'description' => 'Vilaflor se llena de color en agosto durante las fiestas de San Roque, con peregrinaciones, bailes típicos y misas.',
            'date' => '2025-08-16',
            'type' => 'religious',
            'town_id' => 204,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Romería de San Sebastián',
            'description' => 'Buenavista del Norte inicia el año con la Romería de San Sebastián, una fiesta religiosa y folclórica muy esperada en la comarca.',
            'date' => '2025-01-20',
            'type' => 'cultural',
            'town_id' => 205,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Joaquín',
            'description' => 'Fasnia celebra en agosto las fiestas en honor a San Joaquín, patrono del municipio, con actividades religiosas y populares.',
            'date' => '2025-08-16',
            'type' => 'cultural',
            'town_id' => 206,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Bartolomé',
            'description' => 'Salcedillo celebra en agosto sus fiestas en honor a San Bartolomé, con actos religiosos y encuentros vecinales.',
            'date' => '2025-08-24',
            'type' => 'cultural',
            'town_id' => 207,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas patronales en honor a San Bartolomé',
            'description' => 'Almohaja honra a San Bartolomé cada agosto con misas, verbenas y actividades tradicionales en la plaza del pueblo.',
            'date' => '2025-08-24',
            'type' => 'religious',
            'town_id' => 208,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Bartolomé',
            'description' => 'Aguatón se llena de vida en agosto con sus fiestas patronales en honor a San Bartolomé, con música, comida y tradición.',
            'date' => '2025-08-24',
            'type' => 'cultural',
            'town_id' => 209,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas patronales en honor a San Bartolomé',
            'description' => 'Bádenas celebra sus fiestas en agosto con honor a San Bartolomé, manteniendo viva la tradición y el espíritu comunitario.',
            'date' => '2025-08-24',
            'type' => 'cultural',
            'town_id' => 210,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de San Bartolomé',
            'description' => 'La Fresneda se engalana en agosto para festejar a San Bartolomé con danzas tradicionales, juegos y procesiones.',
            'date' => '2025-08-24',
            'type' => 'religious',
            'town_id' => 211,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas de Santa María y San Julián',
            'description' => 'Albarracín celebra en septiembre las fiestas de sus patronos con música, fuegos artificiales y actividades culturales.',
            'date' => '2025-09-12',
            'type' => 'party',
            'town_id' => 212,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiestas patronales de San Roque',
            'description' => 'Valderrobres vive intensamente las fiestas de San Roque en agosto, con encierros, conciertos y actos religiosos.',
            'date' => '2025-08-16',
            'type' => 'party',
            'town_id' => 213,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Semana Cultural y Fiestas de San Antonio',
            'description' => 'Rubielos de Mora celebra en junio su Semana Cultural y las fiestas de San Antonio con exposiciones, teatro y conciertos.',
            'date' => '2025-06-13',
            'type' => 'party',
            'town_id' => 214,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen de los Remedios',
            'description' => 'Segura de los Baños rinde homenaje a la Virgen de los Remedios el 8 de septiembre con actos religiosos y encuentros populares.',
            'date' => '2025-09-08',
            'type' => 'party',
            'town_id' => 215,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Sebastián',
            'description' => 'La Puebla de Montalbán celebra cada 20 de enero la Fiesta de San Sebastián con actos religiosos, danzas populares y hogueras.',
            'date' => '2025-01-20',
            'type' => 'party',
            'town_id' => 216,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen del Castillo',
            'description' => 'Tembleque honra a la Virgen del Castillo el 15 de agosto con procesiones, música tradicional y actividades culturales.',
            'date' => '2025-08-15',
            'type' => 'party',
            'town_id' => 217,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Juan',
            'description' => 'Yunclillos celebra el 24 de junio la festividad de San Juan con verbenas populares, hogueras y eventos familiares.',
            'date' => '2025-06-24',
            'type' => 'party',
            'town_id' => 218,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San José',
            'description' => 'Cofrentes vive el 19 de marzo la festividad de San José con misas, mascletàs y festejos falleros.',
            'date' => '2025-03-19',
            'type' => 'cultural',
            'town_id' => 219,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen del Rosario',
            'description' => 'Albuixech celebra el 7 de octubre sus fiestas patronales en honor a la Virgen del Rosario con actividades religiosas y festivas.',
            'date' => '2025-10-07',
            'type' => 'religious',
            'town_id' => 220,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de San Sebastián',
            'description' => 'Llocnou de la Corona honra a San Sebastián el 20 de enero con actos religiosos y celebraciones populares.',
            'date' => '2025-01-20',
            'type' => 'religious',
            'town_id' => 221,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen del Socorro',
            'description' => 'Cifuentes celebra el 8 de septiembre su tradicional fiesta en honor a la Virgen del Socorro con procesiones y eventos locales.',
            'date' => '2025-09-08',
            'type' => 'religious',
            'town_id' => 222,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen de la Peña',
            'description' => 'Sigüenza vive intensamente el 15 de agosto con sus fiestas en honor a la Virgen de la Peña, destacando sus tradiciones y cultura.',
            'date' => '2025-08-15',
            'type' => 'religious',
            'town_id' => 223,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen de la Asunción',
            'description' => 'Alcalá del Júcar celebra el 15 de agosto su fiesta grande en honor a la Virgen de la Asunción con actividades culturales y religiosas.',
            'date' => '2025-08-15',
            'type' => 'religious',
            'town_id' => 224,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen del Rosario',
            'description' => 'La Almunia de Doña Godina honra a la Virgen del Rosario el 7 de octubre con desfiles, conciertos y tradición popular.',
            'date' => '2025-10-07',
            'type' => 'party',
            'town_id' => 225,
            'creator_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen de los Remedios',
            'description' => 'Belchite celebra el 8 de septiembre la Fiesta de la Virgen de los Remedios con procesiones, ferias y actividades tradicionales.',
            'date' => '2025-09-08',
            'type' => 'religious',
            'town_id' => 226,
            'creator_id' => 1,
        ]);
        
        DB::table('events')->insert([
            'title' => 'Fiesta de la Virgen del Pilar',
            'description' => 'Mequinenza honra a la Virgen del Pilar el 12 de octubre con actos religiosos, música, fuegos artificiales y cultura popular aragonesa.',
            'date' => '2025-10-12',
            'type' => 'religious',
            'town_id' => 227,
            'creator_id' => 1,
        ]);
    }
}
