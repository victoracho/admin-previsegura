<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('countries')->delete();

        \DB::table('countries')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Afganistán',
                'phone_code' => '+93',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Albania',
                'phone_code' => '+355',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Alemania',
                'phone_code' => '+49',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Andorra',
                'phone_code' => '+376',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Angola',
                'phone_code' => '+244',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Anguila',
                'phone_code' => '+1 264',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Antártida',
                'phone_code' => '+672',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Antigua y Barbuda',
                'phone_code' => '+1 268',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Arabia Saudita',
                'phone_code' => '+966',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Argelia',
                'phone_code' => '+213',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Argentina',
                'phone_code' => '+54',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'Armenia',
                'phone_code' => '+374',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'Aruba',
                'phone_code' => '+297',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'Australia',
                'phone_code' => '+61',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'Austria',
                'phone_code' => '+43',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Azerbaiyán',
                'phone_code' => '+994',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'Bélgica',
                'phone_code' => '+32',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 =>
            array(
                'id' => 18,
                'name' => 'Bahamas',
                'phone_code' => '+1 242',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array(
                'id' => 19,
                'name' => 'Bahrein',
                'phone_code' => '+973',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 =>
            array(
                'id' => 20,
                'name' => 'Bangladesh',
                'phone_code' => '+880',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 =>
            array(
                'id' => 21,
                'name' => 'Barbados',
                'phone_code' => '+1 246',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 =>
            array(
                'id' => 22,
                'name' => 'Belice',
                'phone_code' => '+501',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 =>
            array(
                'id' => 23,
                'name' => 'Benín',
                'phone_code' => '+229',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 =>
            array(
                'id' => 24,
                'name' => 'Bhután',
                'phone_code' => '+975',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 =>
            array(
                'id' => 25,
                'name' => 'Bielorrusia',
                'phone_code' => '+375',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 =>
            array(
                'id' => 26,
                'name' => 'Birmania',
                'phone_code' => '+95',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 =>
            array(
                'id' => 27,
                'name' => 'Bolivia',
                'phone_code' => '+591',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 =>
            array(
                'id' => 28,
                'name' => 'Bosnia y Herzegovina',
                'phone_code' => '+387',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 =>
            array(
                'id' => 29,
                'name' => 'Botsuana',
                'phone_code' => '+267',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 =>
            array(
                'id' => 30,
                'name' => 'Brasil',
                'phone_code' => '+55',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 =>
            array(
                'id' => 31,
                'name' => 'Brunéi',
                'phone_code' => '+673',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 =>
            array(
                'id' => 32,
                'name' => 'Bulgaria',
                'phone_code' => '+359',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 =>
            array(
                'id' => 33,
                'name' => 'Burkina Faso',
                'phone_code' => '+226',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 =>
            array(
                'id' => 34,
                'name' => 'Burundi',
                'phone_code' => '+257',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 =>
            array(
                'id' => 35,
                'name' => 'Cabo Verde',
                'phone_code' => '+238',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 =>
            array(
                'id' => 36,
                'name' => 'Camboya',
                'phone_code' => '+855',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 =>
            array(
                'id' => 37,
                'name' => 'Camerún',
                'phone_code' => '+237',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 =>
            array(
                'id' => 38,
                'name' => 'Canadá',
                'phone_code' => '+1',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 =>
            array(
                'id' => 39,
                'name' => 'Chad',
                'phone_code' => '+235',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 =>
            array(
                'id' => 40,
                'name' => 'Chile',
                'phone_code' => '+56',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 =>
            array(
                'id' => 41,
                'name' => 'China',
                'phone_code' => '+86',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 =>
            array(
                'id' => 42,
                'name' => 'Chipre',
                'phone_code' => '+357',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 =>
            array(
                'id' => 43,
                'name' => 'Ciudad del Vaticano',
                'phone_code' => '+39',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 =>
            array(
                'id' => 44,
                'name' => 'Colombia',
                'phone_code' => '+57',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 =>
            array(
                'id' => 45,
                'name' => 'Comoras',
                'phone_code' => '+269',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 =>
            array(
                'id' => 46,
                'name' => 'República del Congo',
                'phone_code' => '+242',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 =>
            array(
                'id' => 47,
                'name' => 'República Democrática del Congo',
                'phone_code' => '+243',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 =>
            array(
                'id' => 48,
                'name' => 'Corea del Norte',
                'phone_code' => '+850',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 =>
            array(
                'id' => 49,
                'name' => 'Corea del Sur',
                'phone_code' => '+82',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 =>
            array(
                'id' => 50,
                'name' => 'Costa de Marfil',
                'phone_code' => '+225',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 =>
            array(
                'id' => 51,
                'name' => 'Costa Rica',
                'phone_code' => '+506',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 =>
            array(
                'id' => 52,
                'name' => 'Croacia',
                'phone_code' => '+385',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 =>
            array(
                'id' => 53,
                'name' => 'Cuba',
                'phone_code' => '+53',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 =>
            array(
                'id' => 54,
                'name' => 'Curazao',
                'phone_code' => '+5999',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 =>
            array(
                'id' => 55,
                'name' => 'Dinamarca',
                'phone_code' => '+45',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 =>
            array(
                'id' => 56,
                'name' => 'Dominica',
                'phone_code' => '+1 767',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 =>
            array(
                'id' => 57,
                'name' => 'Ecuador',
                'phone_code' => '+593',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 =>
            array(
                'id' => 58,
                'name' => 'Egipto',
                'phone_code' => '+20',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 =>
            array(
                'id' => 59,
                'name' => 'El Salvador',
                'phone_code' => '+503',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 =>
            array(
                'id' => 60,
                'name' => 'Emiratos Árabes Unidos',
                'phone_code' => '+971',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 =>
            array(
                'id' => 61,
                'name' => 'Eritrea',
                'phone_code' => '+291',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 =>
            array(
                'id' => 62,
                'name' => 'Eslovaquia',
                'phone_code' => '+421',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 =>
            array(
                'id' => 63,
                'name' => 'Eslovenia',
                'phone_code' => '+386',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 =>
            array(
                'id' => 64,
                'name' => 'España',
                'phone_code' => '+34',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 =>
            array(
                'id' => 65,
                'name' => 'Estados Unidos de América',
                'phone_code' => '+1',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 =>
            array(
                'id' => 66,
                'name' => 'Estonia',
                'phone_code' => '+372',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 =>
            array(
                'id' => 67,
                'name' => 'Etiopía',
                'phone_code' => '+251',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 =>
            array(
                'id' => 68,
                'name' => 'Filipinas',
                'phone_code' => '+63',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 =>
            array(
                'id' => 69,
                'name' => 'Finlandia',
                'phone_code' => '+358',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 =>
            array(
                'id' => 70,
                'name' => 'Fiyi',
                'phone_code' => '+679',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 =>
            array(
                'id' => 71,
                'name' => 'Francia',
                'phone_code' => '+33',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 =>
            array(
                'id' => 72,
                'name' => 'Gabón',
                'phone_code' => '+241',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 =>
            array(
                'id' => 73,
                'name' => 'Gambia',
                'phone_code' => '+220',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 =>
            array(
                'id' => 74,
                'name' => 'Georgia',
                'phone_code' => '+995',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 =>
            array(
                'id' => 75,
                'name' => 'Ghana',
                'phone_code' => '+233',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 =>
            array(
                'id' => 76,
                'name' => 'Gibraltar',
                'phone_code' => '+350',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 =>
            array(
                'id' => 77,
                'name' => 'Granada',
                'phone_code' => '+1 473',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 =>
            array(
                'id' => 78,
                'name' => 'Grecia',
                'phone_code' => '+30',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 =>
            array(
                'id' => 79,
                'name' => 'Groenlandia',
                'phone_code' => '+299',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 =>
            array(
                'id' => 80,
                'name' => 'Guadalupe',
                'phone_code' => '+590',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 =>
            array(
                'id' => 81,
                'name' => 'Guam',
                'phone_code' => '+1 671',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 =>
            array(
                'id' => 82,
                'name' => 'Guatemala',
                'phone_code' => '+502',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 =>
            array(
                'id' => 83,
                'name' => 'Guayana Francesa',
                'phone_code' => '+594',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 =>
            array(
                'id' => 84,
                'name' => 'Guernsey',
                'phone_code' => '+44',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 =>
            array(
                'id' => 85,
                'name' => 'Guinea',
                'phone_code' => '+224',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 =>
            array(
                'id' => 86,
                'name' => 'Guinea Ecuatorial',
                'phone_code' => '+240',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 =>
            array(
                'id' => 87,
                'name' => 'Guinea-Bissau',
                'phone_code' => '+245',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 =>
            array(
                'id' => 88,
                'name' => 'Guyana',
                'phone_code' => '+592',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 =>
            array(
                'id' => 89,
                'name' => 'Haití',
                'phone_code' => '+509',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 =>
            array(
                'id' => 90,
                'name' => 'Honduras',
                'phone_code' => '+504',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 =>
            array(
                'id' => 91,
                'name' => 'Hong kong',
                'phone_code' => '+852',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 =>
            array(
                'id' => 92,
                'name' => 'Hungría',
                'phone_code' => '+36',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 =>
            array(
                'id' => 93,
                'name' => 'India',
                'phone_code' => '+91',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 =>
            array(
                'id' => 94,
                'name' => 'Indonesia',
                'phone_code' => '+62',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 =>
            array(
                'id' => 95,
                'name' => 'Irán',
                'phone_code' => '+98',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 =>
            array(
                'id' => 96,
                'name' => 'Irak',
                'phone_code' => '+964',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 =>
            array(
                'id' => 97,
                'name' => 'Irlanda',
                'phone_code' => '+353',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 =>
            array(
                'id' => 98,
                'name' => 'Isla Bouvet',
                'phone_code' => '+',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 =>
            array(
                'id' => 99,
                'name' => 'Isla de Man',
                'phone_code' => '+44',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 =>
            array(
                'id' => 100,
                'name' => 'Isla de Navidad',
                'phone_code' => '+61',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 =>
            array(
                'id' => 101,
                'name' => 'Isla Norfolk',
                'phone_code' => '+672',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 =>
            array(
                'id' => 102,
                'name' => 'Islandia',
                'phone_code' => '+354',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 =>
            array(
                'id' => 103,
                'name' => 'Islas Bermudas',
                'phone_code' => '+1 441',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 =>
            array(
                'id' => 104,
                'name' => 'Islas Caimán',
                'phone_code' => '+1 345',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 =>
            array(
                'id' => 105,
                'name' => 'Islas Cocos (Keeling)',
                'phone_code' => '+61',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 =>
            array(
                'id' => 106,
                'name' => 'Islas Cook',
                'phone_code' => '+682',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 =>
            array(
                'id' => 107,
                'name' => 'Islas de Åland',
                'phone_code' => '+358',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 =>
            array(
                'id' => 108,
                'name' => 'Islas Feroe',
                'phone_code' => '+298',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 =>
            array(
                'id' => 109,
                'name' => 'Islas Georgias del Sur y Sandwich del Sur',
                'phone_code' => '+500',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 =>
            array(
                'id' => 110,
                'name' => 'Islas Heard y McDonald',
                'phone_code' => '+',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 =>
            array(
                'id' => 111,
                'name' => 'Islas Maldivas',
                'phone_code' => '+960',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 =>
            array(
                'id' => 112,
                'name' => 'Islas Malvinas',
                'phone_code' => '+500',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 =>
            array(
                'id' => 113,
                'name' => 'Islas Marianas del Norte',
                'phone_code' => '+1 670',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 =>
            array(
                'id' => 114,
                'name' => 'Islas Marshall',
                'phone_code' => '+692',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 =>
            array(
                'id' => 115,
                'name' => 'Islas Pitcairn',
                'phone_code' => '+870',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 =>
            array(
                'id' => 116,
                'name' => 'Islas Salomón',
                'phone_code' => '+677',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 =>
            array(
                'id' => 117,
                'name' => 'Islas Turcas y Caicos',
                'phone_code' => '+1 649',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 =>
            array(
                'id' => 118,
                'name' => 'Islas Ultramarinas Menores de Estados Unidos',
                'phone_code' => '+246',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 =>
            array(
                'id' => 119,
                'name' => 'Islas Vírgenes Británicas',
                'phone_code' => '+1 284',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 =>
            array(
                'id' => 120,
                'name' => 'Islas Vírgenes de los Estados Unidos',
                'phone_code' => '+1 340',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 =>
            array(
                'id' => 121,
                'name' => 'Israel',
                'phone_code' => '+972',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 =>
            array(
                'id' => 122,
                'name' => 'Italia',
                'phone_code' => '+39',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 =>
            array(
                'id' => 123,
                'name' => 'Jamaica',
                'phone_code' => '+1 876',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 =>
            array(
                'id' => 124,
                'name' => 'Japón',
                'phone_code' => '+81',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 =>
            array(
                'id' => 125,
                'name' => 'Jersey',
                'phone_code' => '+44',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 =>
            array(
                'id' => 126,
                'name' => 'Jordania',
                'phone_code' => '+962',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 =>
            array(
                'id' => 127,
                'name' => 'Kazajistán',
                'phone_code' => '+7',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 =>
            array(
                'id' => 128,
                'name' => 'Kenia',
                'phone_code' => '+254',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 =>
            array(
                'id' => 129,
                'name' => 'Kirguistán',
                'phone_code' => '+996',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 =>
            array(
                'id' => 130,
                'name' => 'Kiribati',
                'phone_code' => '+686',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 =>
            array(
                'id' => 131,
                'name' => 'Kuwait',
                'phone_code' => '+965',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 =>
            array(
                'id' => 132,
                'name' => 'Líbano',
                'phone_code' => '+961',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 =>
            array(
                'id' => 133,
                'name' => 'Laos',
                'phone_code' => '+856',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 =>
            array(
                'id' => 134,
                'name' => 'Lesoto',
                'phone_code' => '+266',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 =>
            array(
                'id' => 135,
                'name' => 'Letonia',
                'phone_code' => '+371',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 =>
            array(
                'id' => 136,
                'name' => 'Liberia',
                'phone_code' => '+231',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 =>
            array(
                'id' => 137,
                'name' => 'Libia',
                'phone_code' => '+218',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 =>
            array(
                'id' => 138,
                'name' => 'Liechtenstein',
                'phone_code' => '+423',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 =>
            array(
                'id' => 139,
                'name' => 'Lituania',
                'phone_code' => '+370',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 =>
            array(
                'id' => 140,
                'name' => 'Luxemburgo',
                'phone_code' => '+352',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 =>
            array(
                'id' => 141,
                'name' => 'México',
                'phone_code' => '+52',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 =>
            array(
                'id' => 142,
                'name' => 'Mónaco',
                'phone_code' => '+377',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 =>
            array(
                'id' => 143,
                'name' => 'Macao',
                'phone_code' => '+853',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 =>
            array(
                'id' => 144,
                'name' => 'Macedônia',
                'phone_code' => '+389',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 =>
            array(
                'id' => 145,
                'name' => 'Madagascar',
                'phone_code' => '+261',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 =>
            array(
                'id' => 146,
                'name' => 'Malasia',
                'phone_code' => '+60',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 =>
            array(
                'id' => 147,
                'name' => 'Malawi',
                'phone_code' => '+265',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 =>
            array(
                'id' => 148,
                'name' => 'Mali',
                'phone_code' => '+223',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 =>
            array(
                'id' => 149,
                'name' => 'Malta',
                'phone_code' => '+356',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 =>
            array(
                'id' => 150,
                'name' => 'Marruecos',
                'phone_code' => '+212',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 =>
            array(
                'id' => 151,
                'name' => 'Martinica',
                'phone_code' => '+596',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 =>
            array(
                'id' => 152,
                'name' => 'Mauricio',
                'phone_code' => '+230',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 =>
            array(
                'id' => 153,
                'name' => 'Mauritania',
                'phone_code' => '+222',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 =>
            array(
                'id' => 154,
                'name' => 'Mayotte',
                'phone_code' => '+262',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 =>
            array(
                'id' => 155,
                'name' => 'Micronesia',
                'phone_code' => '+691',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 =>
            array(
                'id' => 156,
                'name' => 'Moldavia',
                'phone_code' => '+373',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 =>
            array(
                'id' => 157,
                'name' => 'Mongolia',
                'phone_code' => '+976',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 =>
            array(
                'id' => 158,
                'name' => 'Montenegro',
                'phone_code' => '+382',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 =>
            array(
                'id' => 159,
                'name' => 'Montserrat',
                'phone_code' => '+1 664',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 =>
            array(
                'id' => 160,
                'name' => 'Mozambique',
                'phone_code' => '+258',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 =>
            array(
                'id' => 161,
                'name' => 'Namibia',
                'phone_code' => '+264',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 =>
            array(
                'id' => 162,
                'name' => 'Nauru',
                'phone_code' => '+674',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 =>
            array(
                'id' => 163,
                'name' => 'Nepal',
                'phone_code' => '+977',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 =>
            array(
                'id' => 164,
                'name' => 'Nicaragua',
                'phone_code' => '+505',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 =>
            array(
                'id' => 165,
                'name' => 'Niger',
                'phone_code' => '+227',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 =>
            array(
                'id' => 166,
                'name' => 'Nigeria',
                'phone_code' => '+234',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 =>
            array(
                'id' => 167,
                'name' => 'Niue',
                'phone_code' => '+683',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 =>
            array(
                'id' => 168,
                'name' => 'Noruega',
                'phone_code' => '+47',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 =>
            array(
                'id' => 169,
                'name' => 'Nueva Caledonia',
                'phone_code' => '+687',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 =>
            array(
                'id' => 170,
                'name' => 'Nueva Zelanda',
                'phone_code' => '+64',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 =>
            array(
                'id' => 171,
                'name' => 'Omán',
                'phone_code' => '+968',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 =>
            array(
                'id' => 172,
                'name' => 'Países Bajos',
                'phone_code' => '+31',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 =>
            array(
                'id' => 173,
                'name' => 'Pakistán',
                'phone_code' => '+92',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 =>
            array(
                'id' => 174,
                'name' => 'Palau',
                'phone_code' => '+680',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 =>
            array(
                'id' => 175,
                'name' => 'Palestina',
                'phone_code' => '+970',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 =>
            array(
                'id' => 176,
                'name' => 'Panamá',
                'phone_code' => '+507',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 =>
            array(
                'id' => 177,
                'name' => 'Papúa Nueva Guinea',
                'phone_code' => '+675',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 =>
            array(
                'id' => 178,
                'name' => 'Paraguay',
                'phone_code' => '+595',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 =>
            array(
                'id' => 179,
                'name' => 'Perú',
                'phone_code' => '+51',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 =>
            array(
                'id' => 180,
                'name' => 'Polinesia Francesa',
                'phone_code' => '+689',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 =>
            array(
                'id' => 181,
                'name' => 'Polonia',
                'phone_code' => '+48',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 =>
            array(
                'id' => 182,
                'name' => 'Portugal',
                'phone_code' => '+351',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 =>
            array(
                'id' => 183,
                'name' => 'Puerto Rico',
                'phone_code' => '+1',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 =>
            array(
                'id' => 184,
                'name' => 'Qatar',
                'phone_code' => '+974',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 =>
            array(
                'id' => 185,
                'name' => 'Reino Unido',
                'phone_code' => '+44',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 =>
            array(
                'id' => 186,
                'name' => 'República Centroafricana',
                'phone_code' => '+236',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 =>
            array(
                'id' => 187,
                'name' => 'República Checa',
                'phone_code' => '+420',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 =>
            array(
                'id' => 188,
                'name' => 'República Dominicana',
                'phone_code' => '+1 809',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 =>
            array(
                'id' => 189,
                'name' => 'República de Sudán del Sur',
                'phone_code' => '+211',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 =>
            array(
                'id' => 190,
                'name' => 'Reunión',
                'phone_code' => '+262',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 =>
            array(
                'id' => 191,
                'name' => 'Ruanda',
                'phone_code' => '+250',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 =>
            array(
                'id' => 192,
                'name' => 'Rumanía',
                'phone_code' => '+40',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 =>
            array(
                'id' => 193,
                'name' => 'Rusia',
                'phone_code' => '+7',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 =>
            array(
                'id' => 194,
                'name' => 'Sahara Occidental',
                'phone_code' => '+212',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 =>
            array(
                'id' => 195,
                'name' => 'Samoa',
                'phone_code' => '+685',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 =>
            array(
                'id' => 196,
                'name' => 'Samoa Americana',
                'phone_code' => '+1 684',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 =>
            array(
                'id' => 197,
                'name' => 'San Bartolomé',
                'phone_code' => '+590',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 =>
            array(
                'id' => 198,
                'name' => 'San Cristóbal y Nieves',
                'phone_code' => '+1 869',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 =>
            array(
                'id' => 199,
                'name' => 'San Marino',
                'phone_code' => '+378',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 =>
            array(
                'id' => 200,
                'name' => 'San Martín (Francia)',
                'phone_code' => '+1 599',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 =>
            array(
                'id' => 201,
                'name' => 'San Pedro y Miquelón',
                'phone_code' => '+508',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 =>
            array(
                'id' => 202,
                'name' => 'San Vicente y las Granadinas',
                'phone_code' => '+1 784',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 =>
            array(
                'id' => 203,
                'name' => 'Santa Elena',
                'phone_code' => '+290',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 =>
            array(
                'id' => 204,
                'name' => 'Santa Lucía',
                'phone_code' => '+1 758',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 =>
            array(
                'id' => 205,
                'name' => 'Santo Tomé y Príncipe',
                'phone_code' => '+239',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 =>
            array(
                'id' => 206,
                'name' => 'Senegal',
                'phone_code' => '+221',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 =>
            array(
                'id' => 207,
                'name' => 'Serbia',
                'phone_code' => '+381',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 =>
            array(
                'id' => 208,
                'name' => 'Seychelles',
                'phone_code' => '+248',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 =>
            array(
                'id' => 209,
                'name' => 'Sierra Leona',
                'phone_code' => '+232',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 =>
            array(
                'id' => 210,
                'name' => 'Singapur',
                'phone_code' => '+65',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 =>
            array(
                'id' => 211,
                'name' => 'Sint Maarten',
                'phone_code' => '+1 721',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 =>
            array(
                'id' => 212,
                'name' => 'Siria',
                'phone_code' => '+963',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 =>
            array(
                'id' => 213,
                'name' => 'Somalia',
                'phone_code' => '+252',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 =>
            array(
                'id' => 214,
                'name' => 'Sri lanka',
                'phone_code' => '+94',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 =>
            array(
                'id' => 215,
                'name' => 'Sudáfrica',
                'phone_code' => '+27',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 =>
            array(
                'id' => 216,
                'name' => 'Sudán',
                'phone_code' => '+249',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 =>
            array(
                'id' => 217,
                'name' => 'Suecia',
                'phone_code' => '+46',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 =>
            array(
                'id' => 218,
                'name' => 'Suiza',
                'phone_code' => '+41',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 =>
            array(
                'id' => 219,
                'name' => 'Surinám',
                'phone_code' => '+597',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 =>
            array(
                'id' => 220,
                'name' => 'Svalbard y Jan Mayen',
                'phone_code' => '+47',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 =>
            array(
                'id' => 221,
                'name' => 'Swazilandia',
                'phone_code' => '+268',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 =>
            array(
                'id' => 222,
                'name' => 'Tayikistán',
                'phone_code' => '+992',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 =>
            array(
                'id' => 223,
                'name' => 'Tailandia',
                'phone_code' => '+66',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 =>
            array(
                'id' => 224,
                'name' => 'Taiwán',
                'phone_code' => '+886',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 =>
            array(
                'id' => 225,
                'name' => 'Tanzania',
                'phone_code' => '+255',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 =>
            array(
                'id' => 226,
                'name' => 'Territorio Británico del Océano Índico',
                'phone_code' => '+246',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 =>
            array(
                'id' => 227,
                'name' => 'Territorios Australes y Antárticas Franceses',
                'phone_code' => '+',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 =>
            array(
                'id' => 228,
                'name' => 'Timor Oriental',
                'phone_code' => '+670',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 =>
            array(
                'id' => 229,
                'name' => 'Togo',
                'phone_code' => '+228',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 =>
            array(
                'id' => 230,
                'name' => 'Tokelau',
                'phone_code' => '+690',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 =>
            array(
                'id' => 231,
                'name' => 'Tonga',
                'phone_code' => '+676',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 =>
            array(
                'id' => 232,
                'name' => 'Trinidad y Tobago',
                'phone_code' => '+1 868',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 =>
            array(
                'id' => 233,
                'name' => 'Tunez',
                'phone_code' => '+216',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 =>
            array(
                'id' => 234,
                'name' => 'Turkmenistán',
                'phone_code' => '+993',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 =>
            array(
                'id' => 235,
                'name' => 'Turquía',
                'phone_code' => '+90',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 =>
            array(
                'id' => 236,
                'name' => 'Tuvalu',
                'phone_code' => '+688',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 =>
            array(
                'id' => 237,
                'name' => 'Ucrania',
                'phone_code' => '+380',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 =>
            array(
                'id' => 238,
                'name' => 'Uganda',
                'phone_code' => '+256',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 =>
            array(
                'id' => 239,
                'name' => 'Uruguay',
                'phone_code' => '+598',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 =>
            array(
                'id' => 240,
                'name' => 'Uzbekistán',
                'phone_code' => '+998',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 =>
            array(
                'id' => 241,
                'name' => 'Vanuatu',
                'phone_code' => '+678',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 =>
            array(
                'id' => 242,
                'name' => 'Venezuela',
                'phone_code' => '+58',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 =>
            array(
                'id' => 243,
                'name' => 'Vietnam',
                'phone_code' => '+84',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 =>
            array(
                'id' => 244,
                'name' => 'Wallis y Futuna',
                'phone_code' => '+681',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 =>
            array(
                'id' => 245,
                'name' => 'Yemen',
                'phone_code' => '+967',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 =>
            array(
                'id' => 246,
                'name' => 'Yibuti',
                'phone_code' => '+253',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 =>
            array(
                'id' => 247,
                'name' => 'Zambia',
                'phone_code' => '+260',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 =>
            array(
                'id' => 248,
                'name' => 'Zimbabue',
                'phone_code' => '+263',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 =>
            array(
                'id' => 249,
                'name' => 'Maldivas',
                'phone_code' => '+963',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('country_states')->delete();

        \DB::table('country_states')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Berat',
                'country' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Diber',
                'country' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Durres',
                'country' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Elbasan',
                'country' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Fier',
                'country' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Gjirokaster',
                'country' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Korce',
                'country' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Kukes',
                'country' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Lezhe',
                'country' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Shkoder',
                'country' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Tirane',
                'country' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'Vlore',
                'country' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'Brandenburg',
                'country' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'Baden-Württemberg',
                'country' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'Bayern',
                'country' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Hessen',
                'country' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'Hamburg',
                'country' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            17 =>
            array(
                'id' => 18,
                'name' => 'Mecklenburg-Vorpommern',
                'country' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            18 =>
            array(
                'id' => 19,
                'name' => 'Niedersachsen',
                'country' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            19 =>
            array(
                'id' => 20,
                'name' => 'Nordrhein-Westfalen',
                'country' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            20 =>
            array(
                'id' => 21,
                'name' => 'Rheinland-Pfalz',
                'country' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            21 =>
            array(
                'id' => 22,
                'name' => 'Schleswig-Holstein',
                'country' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            22 =>
            array(
                'id' => 23,
                'name' => 'Sachsen',
                'country' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            23 =>
            array(
                'id' => 24,
                'name' => 'Sachsen-Anhalt',
                'country' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            24 =>
            array(
                'id' => 25,
                'name' => 'Thüringen',
                'country' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            25 =>
            array(
                'id' => 26,
                'name' => 'Berlin',
                'country' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            26 =>
            array(
                'id' => 27,
                'name' => 'Bremen',
                'country' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            27 =>
            array(
                'id' => 28,
                'name' => 'Saarland',
                'country' => 3,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            28 =>
            array(
                'id' => 29,
                'name' => 'Canillo',
                'country' => 4,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            29 =>
            array(
                'id' => 30,
                'name' => 'Encamp',
                'country' => 4,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            30 =>
            array(
                'id' => 31,
                'name' => 'La Massana',
                'country' => 4,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            31 =>
            array(
                'id' => 32,
                'name' => 'Ordino',
                'country' => 4,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            32 =>
            array(
                'id' => 33,
                'name' => 'Sant Julia de Loria',
                'country' => 4,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            33 =>
            array(
                'id' => 34,
                'name' => 'Andorra la Vella',
                'country' => 4,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            34 =>
            array(
                'id' => 35,
                'name' => 'Escaldes-Engordany',
                'country' => 4,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            35 =>
            array(
                'id' => 36,
                'name' => 'Buenos Aires',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            36 =>
            array(
                'id' => 37,
                'name' => 'Catamarca',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            37 =>
            array(
                'id' => 38,
                'name' => 'Chaco',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            38 =>
            array(
                'id' => 39,
                'name' => 'Chubut',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            39 =>
            array(
                'id' => 40,
                'name' => 'Córdoba',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            40 =>
            array(
                'id' => 41,
                'name' => 'Corrientes',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            41 =>
            array(
                'id' => 42,
                'name' => 'Distrito Federal',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            42 =>
            array(
                'id' => 43,
                'name' => 'Entre Ríos',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            43 =>
            array(
                'id' => 44,
                'name' => 'Formosa',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            44 =>
            array(
                'id' => 45,
                'name' => 'Jujuy',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            45 =>
            array(
                'id' => 46,
                'name' => 'La Pampa',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            46 =>
            array(
                'id' => 47,
                'name' => 'La Rioja',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            47 =>
            array(
                'id' => 48,
                'name' => 'Mendoza',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            48 =>
            array(
                'id' => 49,
                'name' => 'Misiones',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            49 =>
            array(
                'id' => 50,
                'name' => 'Neuquén',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            50 =>
            array(
                'id' => 51,
                'name' => 'Río Negro',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            51 =>
            array(
                'id' => 52,
                'name' => 'Salta',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            52 =>
            array(
                'id' => 53,
                'name' => 'San Juan',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            53 =>
            array(
                'id' => 54,
                'name' => 'San Luis',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            54 =>
            array(
                'id' => 55,
                'name' => 'Santa Cruz',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            55 =>
            array(
                'id' => 56,
                'name' => 'Santa Fe',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            56 =>
            array(
                'id' => 57,
                'name' => 'Santiago del Estero',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            57 =>
            array(
                'id' => 58,
                'name' => 'Tierra del Fuego',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            58 =>
            array(
                'id' => 59,
                'name' => 'Tucumán',
                'country' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            59 =>
            array(
                'id' => 60,
                'name' => 'Aragatsotn',
                'country' => 12,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            60 =>
            array(
                'id' => 61,
                'name' => 'Ararat',
                'country' => 12,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            61 =>
            array(
                'id' => 62,
                'name' => 'Armavir',
                'country' => 12,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            62 =>
            array(
                'id' => 63,
                'name' => 'Gegharkunik',
                'country' => 12,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            63 =>
            array(
                'id' => 64,
                'name' => 'Kotayk',
                'country' => 12,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            64 =>
            array(
                'id' => 65,
                'name' => 'Lorri',
                'country' => 12,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            65 =>
            array(
                'id' => 66,
                'name' => 'Shirak',
                'country' => 12,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            66 =>
            array(
                'id' => 67,
                'name' => 'Syunik',
                'country' => 12,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            67 =>
            array(
                'id' => 68,
                'name' => 'Tavush',
                'country' => 12,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            68 =>
            array(
                'id' => 69,
                'name' => 'Vayots Dzor',
                'country' => 12,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            69 =>
            array(
                'id' => 70,
                'name' => 'Yerevan',
                'country' => 12,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            70 =>
            array(
                'id' => 71,
                'name' => 'Australian Capital Territory',
                'country' => 14,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            71 =>
            array(
                'id' => 72,
                'name' => 'New South Wales',
                'country' => 14,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            72 =>
            array(
                'id' => 73,
                'name' => 'Northern Territory',
                'country' => 14,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            73 =>
            array(
                'id' => 74,
                'name' => 'Queensland',
                'country' => 14,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            74 =>
            array(
                'id' => 75,
                'name' => 'South Australia',
                'country' => 14,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            75 =>
            array(
                'id' => 76,
                'name' => 'Tasmania',
                'country' => 14,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            76 =>
            array(
                'id' => 77,
                'name' => 'Victoria',
                'country' => 14,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            77 =>
            array(
                'id' => 78,
                'name' => 'Western Australia',
                'country' => 14,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            78 =>
            array(
                'id' => 79,
                'name' => 'Burgenland',
                'country' => 15,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            79 =>
            array(
                'id' => 80,
                'name' => 'Kärnten',
                'country' => 15,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            80 =>
            array(
                'id' => 81,
                'name' => 'Niederösterreich',
                'country' => 15,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            81 =>
            array(
                'id' => 82,
                'name' => 'Oberösterreich',
                'country' => 15,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            82 =>
            array(
                'id' => 83,
                'name' => 'Salzburg',
                'country' => 15,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            83 =>
            array(
                'id' => 84,
                'name' => 'Steiermark',
                'country' => 15,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            84 =>
            array(
                'id' => 85,
                'name' => 'Tirol',
                'country' => 15,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            85 =>
            array(
                'id' => 86,
                'name' => 'Vorarlberg',
                'country' => 15,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            86 =>
            array(
                'id' => 87,
                'name' => 'Wien',
                'country' => 15,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            87 =>
            array(
                'id' => 88,
                'name' => 'Azerbaijan',
                'country' => 16,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            88 =>
            array(
                'id' => 89,
                'name' => 'Nargorni Karabakh',
                'country' => 16,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            89 =>
            array(
                'id' => 90,
                'name' => 'Nakhichevanskaya Region',
                'country' => 16,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            90 =>
            array(
                'id' => 91,
                'name' => 'Bruxelles',
                'country' => 17,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            91 =>
            array(
                'id' => 92,
                'name' => 'West-Vlaanderen',
                'country' => 17,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            92 =>
            array(
                'id' => 93,
                'name' => 'Oost-Vlaanderen',
                'country' => 17,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            93 =>
            array(
                'id' => 94,
                'name' => 'Limburg',
                'country' => 17,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            94 =>
            array(
                'id' => 95,
                'name' => 'Vlaams Brabant',
                'country' => 17,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            95 =>
            array(
                'id' => 96,
                'name' => 'Antwerpen',
                'country' => 17,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            96 =>
            array(
                'id' => 97,
                'name' => 'LiÄ ge',
                'country' => 17,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            97 =>
            array(
                'id' => 98,
                'name' => 'Namur',
                'country' => 17,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            98 =>
            array(
                'id' => 99,
                'name' => 'Hainaut',
                'country' => 17,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            99 =>
            array(
                'id' => 100,
                'name' => 'Luxembourg',
                'country' => 17,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            100 =>
            array(
                'id' => 101,
                'name' => 'Brabant Wallon',
                'country' => 17,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            101 =>
            array(
                'id' => 102,
                'name' => 'Brestskaya obl.',
                'country' => 25,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            102 =>
            array(
                'id' => 103,
                'name' => 'Vitebskaya obl.',
                'country' => 25,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            103 =>
            array(
                'id' => 104,
                'name' => 'Gomelskaya obl.',
                'country' => 25,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            104 =>
            array(
                'id' => 105,
                'name' => 'Grodnenskaya obl.',
                'country' => 25,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            105 =>
            array(
                'id' => 106,
                'name' => 'Minskaya obl.',
                'country' => 25,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            106 =>
            array(
                'id' => 107,
                'name' => 'Mogilevskaya obl.',
                'country' => 25,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            107 =>
            array(
                'id' => 108,
                'name' => 'Chuquisaca',
                'country' => 27,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            108 =>
            array(
                'id' => 109,
                'name' => 'Cochabamba',
                'country' => 27,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            109 =>
            array(
                'id' => 110,
                'name' => 'El Beni',
                'country' => 27,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            110 =>
            array(
                'id' => 111,
                'name' => 'La Paz',
                'country' => 27,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            111 =>
            array(
                'id' => 112,
                'name' => 'Oruro',
                'country' => 27,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            112 =>
            array(
                'id' => 113,
                'name' => 'Pando',
                'country' => 27,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            113 =>
            array(
                'id' => 114,
                'name' => 'Potosí',
                'country' => 27,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            114 =>
            array(
                'id' => 115,
                'name' => 'Santa Cruz',
                'country' => 27,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            115 =>
            array(
                'id' => 116,
                'name' => 'Tarija',
                'country' => 27,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            116 =>
            array(
                'id' => 117,
                'name' => 'Federation of Bosnia and Herzegovina',
                'country' => 28,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            117 =>
            array(
                'id' => 118,
                'name' => 'Republika Srpska',
                'country' => 28,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            118 =>
            array(
                'id' => 119,
                'name' => 'Acre',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            119 =>
            array(
                'id' => 120,
                'name' => 'Alagoas',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            120 =>
            array(
                'id' => 121,
                'name' => 'Amapa',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            121 =>
            array(
                'id' => 122,
                'name' => 'Amazonas',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            122 =>
            array(
                'id' => 123,
                'name' => 'Bahia',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            123 =>
            array(
                'id' => 124,
                'name' => 'Ceara',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            124 =>
            array(
                'id' => 125,
                'name' => 'Distrito Federal',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            125 =>
            array(
                'id' => 126,
                'name' => 'Espirito Santo',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            126 =>
            array(
                'id' => 127,
                'name' => 'Mato Grosso do Sul',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            127 =>
            array(
                'id' => 128,
                'name' => 'Maranhao',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            128 =>
            array(
                'id' => 129,
                'name' => 'Mato Grosso',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            129 =>
            array(
                'id' => 130,
                'name' => 'Minas Gerais',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            130 =>
            array(
                'id' => 131,
                'name' => 'Para',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            131 =>
            array(
                'id' => 132,
                'name' => 'Paraiba',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            132 =>
            array(
                'id' => 133,
                'name' => 'Parana',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            133 =>
            array(
                'id' => 134,
                'name' => 'Piaui',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            134 =>
            array(
                'id' => 135,
                'name' => 'Rio de Janeiro',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            135 =>
            array(
                'id' => 136,
                'name' => 'Rio Grande do Norte',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            136 =>
            array(
                'id' => 137,
                'name' => 'Rio Grande do Sul',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            137 =>
            array(
                'id' => 138,
                'name' => 'Rondonia',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            138 =>
            array(
                'id' => 139,
                'name' => 'Roraima',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            139 =>
            array(
                'id' => 140,
                'name' => 'Santa Catarina',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            140 =>
            array(
                'id' => 141,
                'name' => 'Sao Paulo',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            141 =>
            array(
                'id' => 142,
                'name' => 'Sergipe',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            142 =>
            array(
                'id' => 143,
                'name' => 'Goias',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            143 =>
            array(
                'id' => 144,
                'name' => 'Pernambuco',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            144 =>
            array(
                'id' => 145,
                'name' => 'Tocantins',
                'country' => 30,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            145 =>
            array(
                'id' => 146,
                'name' => 'Mikhaylovgrad',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            146 =>
            array(
                'id' => 147,
                'name' => 'Blagoevgrad',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            147 =>
            array(
                'id' => 148,
                'name' => 'Burgas',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            148 =>
            array(
                'id' => 149,
                'name' => 'Dobrich',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            149 =>
            array(
                'id' => 150,
                'name' => 'Gabrovo',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            150 =>
            array(
                'id' => 151,
                'name' => 'Grad Sofiya',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            151 =>
            array(
                'id' => 152,
                'name' => 'Khaskovo',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            152 =>
            array(
                'id' => 153,
                'name' => 'Kurdzhali',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            153 =>
            array(
                'id' => 154,
                'name' => 'Kyustendil',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            154 =>
            array(
                'id' => 155,
                'name' => 'Lovech',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            155 =>
            array(
                'id' => 156,
                'name' => 'Montana',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            156 =>
            array(
                'id' => 157,
                'name' => 'Pazardzhik',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            157 =>
            array(
                'id' => 158,
                'name' => 'Pernik',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            158 =>
            array(
                'id' => 159,
                'name' => 'Pleven',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            159 =>
            array(
                'id' => 160,
                'name' => 'Plovdiv',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            160 =>
            array(
                'id' => 161,
                'name' => 'Razgrad',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            161 =>
            array(
                'id' => 162,
                'name' => 'Ruse',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            162 =>
            array(
                'id' => 163,
                'name' => 'Shumen',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            163 =>
            array(
                'id' => 164,
                'name' => 'Silistra',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            164 =>
            array(
                'id' => 165,
                'name' => 'Sliven',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            165 =>
            array(
                'id' => 166,
                'name' => 'Smolyan',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            166 =>
            array(
                'id' => 167,
                'name' => 'Sofiya',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            167 =>
            array(
                'id' => 168,
                'name' => 'Stara Zagora',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            168 =>
            array(
                'id' => 169,
                'name' => 'Turgovishte',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            169 =>
            array(
                'id' => 170,
                'name' => 'Varna',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            170 =>
            array(
                'id' => 171,
                'name' => 'Veliko Turnovo',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            171 =>
            array(
                'id' => 172,
                'name' => 'Vidin',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            172 =>
            array(
                'id' => 173,
                'name' => 'Vratsa',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            173 =>
            array(
                'id' => 174,
                'name' => 'Yambol',
                'country' => 32,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            174 =>
            array(
                'id' => 175,
                'name' => 'Littoral',
                'country' => 37,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            175 =>
            array(
                'id' => 176,
                'name' => 'Southwest Region',
                'country' => 37,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            176 =>
            array(
                'id' => 177,
                'name' => 'North',
                'country' => 37,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            177 =>
            array(
                'id' => 178,
                'name' => 'Central',
                'country' => 37,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            178 =>
            array(
                'id' => 179,
                'name' => 'Newfoundland',
                'country' => 38,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            179 =>
            array(
                'id' => 180,
                'name' => 'Nova Scotia',
                'country' => 38,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            180 =>
            array(
                'id' => 181,
                'name' => 'Prince Edward Island',
                'country' => 38,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            181 =>
            array(
                'id' => 182,
                'name' => 'New Brunswick',
                'country' => 38,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            182 =>
            array(
                'id' => 183,
                'name' => 'Quebec',
                'country' => 38,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            183 =>
            array(
                'id' => 184,
                'name' => 'Ontario',
                'country' => 38,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            184 =>
            array(
                'id' => 185,
                'name' => 'Manitoba',
                'country' => 38,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            185 =>
            array(
                'id' => 186,
                'name' => 'Saskatchewan',
                'country' => 38,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            186 =>
            array(
                'id' => 187,
                'name' => 'Alberta',
                'country' => 38,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            187 =>
            array(
                'id' => 188,
                'name' => 'British Columbia',
                'country' => 38,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            188 =>
            array(
                'id' => 189,
                'name' => 'Nunavut',
                'country' => 38,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            189 =>
            array(
                'id' => 190,
                'name' => 'Northwest Territories',
                'country' => 38,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            190 =>
            array(
                'id' => 191,
                'name' => 'Yukon Territory',
                'country' => 38,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            191 =>
            array(
                'id' => 192,
                'name' => 'Región de Tarapacá',
                'country' => 40,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            192 =>
            array(
                'id' => 193,
                'name' => 'Región de Antofagasta',
                'country' => 40,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            193 =>
            array(
                'id' => 194,
                'name' => 'Región de Atacama',
                'country' => 40,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            194 =>
            array(
                'id' => 195,
                'name' => 'Región de Coquimbo',
                'country' => 40,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            195 =>
            array(
                'id' => 196,
                'name' => 'Región de Valparaíso',
                'country' => 40,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            196 =>
            array(
                'id' => 197,
                'name' => 'Región del Libertador General Bernardo O\'Higgins',
                'country' => 40,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            197 =>
            array(
                'id' => 198,
                'name' => 'Región del Maule',
                'country' => 40,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            198 =>
            array(
                'id' => 199,
                'name' => 'Región del Bío Bío',
                'country' => 40,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            199 =>
            array(
                'id' => 200,
                'name' => 'Región de La Araucanía',
                'country' => 40,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            200 =>
            array(
                'id' => 201,
                'name' => 'Región de Los Lagos',
                'country' => 40,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            201 =>
            array(
                'id' => 202,
                'name' => 'Región Aisén del General Carlos Ibáñez del Campo',
                'country' => 40,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            202 =>
            array(
                'id' => 203,
                'name' => 'Región de Magallanes y de la Antártica Chilena',
                'country' => 40,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            203 =>
            array(
                'id' => 204,
                'name' => 'Región Metropolitana de Santiago',
                'country' => 40,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            204 =>
            array(
                'id' => 205,
                'name' => 'Anhui',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            205 =>
            array(
                'id' => 206,
                'name' => 'Zhejiang',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            206 =>
            array(
                'id' => 207,
                'name' => 'Jiangxi',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            207 =>
            array(
                'id' => 208,
                'name' => 'Jiangsu',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            208 =>
            array(
                'id' => 209,
                'name' => 'Jilin',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            209 =>
            array(
                'id' => 210,
                'name' => 'Qinghai',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            210 =>
            array(
                'id' => 211,
                'name' => 'Fujian',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            211 =>
            array(
                'id' => 212,
                'name' => 'Heilongjiang',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            212 =>
            array(
                'id' => 213,
                'name' => 'Henan',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            213 =>
            array(
                'id' => 214,
                'name' => 'Hebei',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            214 =>
            array(
                'id' => 215,
                'name' => 'Hunan',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            215 =>
            array(
                'id' => 216,
                'name' => 'Hubei',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            216 =>
            array(
                'id' => 217,
                'name' => 'Xinjiang',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            217 =>
            array(
                'id' => 218,
                'name' => 'Xizang',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            218 =>
            array(
                'id' => 219,
                'name' => 'Gansu',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            219 =>
            array(
                'id' => 220,
                'name' => 'Guangxi',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            220 =>
            array(
                'id' => 221,
                'name' => 'Guizhou',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            221 =>
            array(
                'id' => 222,
                'name' => 'Liaoning',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            222 =>
            array(
                'id' => 223,
                'name' => 'Nei Mongol',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            223 =>
            array(
                'id' => 224,
                'name' => 'Ningxia',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            224 =>
            array(
                'id' => 225,
                'name' => 'Beijing',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            225 =>
            array(
                'id' => 226,
                'name' => 'Shanghai',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            226 =>
            array(
                'id' => 227,
                'name' => 'Shanxi',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            227 =>
            array(
                'id' => 228,
                'name' => 'Shandong',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            228 =>
            array(
                'id' => 229,
                'name' => 'Shaanxi',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            229 =>
            array(
                'id' => 230,
                'name' => 'Sichuan',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            230 =>
            array(
                'id' => 231,
                'name' => 'Tianjin',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            231 =>
            array(
                'id' => 232,
                'name' => 'Yunnan',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            232 =>
            array(
                'id' => 233,
                'name' => 'Guangdong',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            233 =>
            array(
                'id' => 234,
                'name' => 'Hainan',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            234 =>
            array(
                'id' => 235,
                'name' => 'Chongqing',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            235 =>
            array(
                'id' => 236,
                'name' => 'Schanghai',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            236 =>
            array(
                'id' => 237,
                'name' => 'Hongkong',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            237 =>
            array(
                'id' => 238,
                'name' => 'Neimenggu',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            238 =>
            array(
                'id' => 239,
                'name' => 'Aomen',
                'country' => 41,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            239 =>
            array(
                'id' => 240,
                'name' => 'Government controlled area',
                'country' => 42,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            240 =>
            array(
                'id' => 241,
                'name' => 'Turkish controlled area',
                'country' => 42,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            241 =>
            array(
                'id' => 242,
                'name' => 'Amazonas',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            242 =>
            array(
                'id' => 243,
                'name' => 'Antioquia',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            243 =>
            array(
                'id' => 244,
                'name' => 'Arauca',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            244 =>
            array(
                'id' => 245,
                'name' => 'Atlántico',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            245 =>
            array(
                'id' => 246,
                'name' => 'Caquetá',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            246 =>
            array(
                'id' => 247,
                'name' => 'Cauca',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            247 =>
            array(
                'id' => 248,
                'name' => 'César',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            248 =>
            array(
                'id' => 249,
                'name' => 'Chocó',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            249 =>
            array(
                'id' => 250,
                'name' => 'Córdoba',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            250 =>
            array(
                'id' => 251,
                'name' => 'Guaviare',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            251 =>
            array(
                'id' => 252,
                'name' => 'Guainía',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            252 =>
            array(
                'id' => 253,
                'name' => 'Huila',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            253 =>
            array(
                'id' => 254,
                'name' => 'La Guajira',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            254 =>
            array(
                'id' => 255,
                'name' => 'Meta',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            255 =>
            array(
                'id' => 256,
                'name' => 'Narino',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            256 =>
            array(
                'id' => 257,
                'name' => 'Norte de Santander',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            257 =>
            array(
                'id' => 258,
                'name' => 'Putumayo',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            258 =>
            array(
                'id' => 259,
                'name' => 'Quindío',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            259 =>
            array(
                'id' => 260,
                'name' => 'Risaralda',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            260 =>
            array(
                'id' => 261,
                'name' => 'San Andrés y Providencia',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            261 =>
            array(
                'id' => 262,
                'name' => 'Santander',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            262 =>
            array(
                'id' => 263,
                'name' => 'Sucre',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            263 =>
            array(
                'id' => 264,
                'name' => 'Tolima',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            264 =>
            array(
                'id' => 265,
                'name' => 'Valle del Cauca',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            265 =>
            array(
                'id' => 266,
                'name' => 'Vaupés',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            266 =>
            array(
                'id' => 267,
                'name' => 'Vichada',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            267 =>
            array(
                'id' => 268,
                'name' => 'Casanare',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            268 =>
            array(
                'id' => 269,
                'name' => 'Cundinamarca',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            269 =>
            array(
                'id' => 270,
                'name' => 'Distrito Especial',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            270 =>
            array(
                'id' => 271,
                'name' => 'Caldas',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            271 =>
            array(
                'id' => 272,
                'name' => 'Magdalena',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            272 =>
            array(
                'id' => 273,
                'name' => 'Cheju',
                'country' => 45,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            273 =>
            array(
                'id' => 274,
                'name' => 'Congo Brazzaville',
                'country' => 46,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            274 =>
            array(
                'id' => 275,
                'name' => 'Congo',
                'country' => 47,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            275 =>
            array(
                'id' => 276,
                'name' => 'Korea',
                'country' => 48,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            276 =>
            array(
                'id' => 277,
                'name' => 'Chollabuk',
                'country' => 49,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            277 =>
            array(
                'id' => 278,
                'name' => 'Chollanam',
                'country' => 49,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            278 =>
            array(
                'id' => 279,
                'name' => 'Chungcheongbuk',
                'country' => 49,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            279 =>
            array(
                'id' => 280,
                'name' => 'Chungcheongnam',
                'country' => 49,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            280 =>
            array(
                'id' => 281,
                'name' => 'Incheon',
                'country' => 49,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            281 =>
            array(
                'id' => 282,
                'name' => 'Kangweon',
                'country' => 49,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            282 =>
            array(
                'id' => 283,
                'name' => 'Kwangju',
                'country' => 49,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            283 =>
            array(
                'id' => 284,
                'name' => 'Kyeonggi',
                'country' => 49,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            284 =>
            array(
                'id' => 285,
                'name' => 'Kyeongsangbuk',
                'country' => 49,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            285 =>
            array(
                'id' => 286,
                'name' => 'Kyeongsangnam',
                'country' => 49,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            286 =>
            array(
                'id' => 287,
                'name' => 'Pusan',
                'country' => 49,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            287 =>
            array(
                'id' => 288,
                'name' => 'Seoul',
                'country' => 49,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            288 =>
            array(
                'id' => 289,
                'name' => 'Taegu',
                'country' => 49,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            289 =>
            array(
                'id' => 290,
                'name' => 'Taejeon',
                'country' => 49,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            290 =>
            array(
                'id' => 291,
                'name' => 'Ulsan',
                'country' => 49,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            291 =>
            array(
                'id' => 292,
                'name' => 'Cote D Ivoire',
                'country' => 50,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            292 =>
            array(
                'id' => 293,
                'name' => 'Alajuela',
                'country' => 51,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            293 =>
            array(
                'id' => 294,
                'name' => 'Cartago',
                'country' => 51,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            294 =>
            array(
                'id' => 295,
                'name' => 'Guanacaste',
                'country' => 51,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            295 =>
            array(
                'id' => 296,
                'name' => 'Heredia',
                'country' => 51,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            296 =>
            array(
                'id' => 297,
                'name' => 'Limón',
                'country' => 51,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            297 =>
            array(
                'id' => 298,
                'name' => 'Puntarenas',
                'country' => 51,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            298 =>
            array(
                'id' => 299,
                'name' => 'San José',
                'country' => 51,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            299 =>
            array(
                'id' => 300,
                'name' => 'Bjelovarsko-Bilogorska',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            300 =>
            array(
                'id' => 301,
                'name' => 'Brodsko-Posavska',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            301 =>
            array(
                'id' => 302,
                'name' => 'Dubrovacko-Neretvanska',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            302 =>
            array(
                'id' => 303,
                'name' => 'Istarska',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            303 =>
            array(
                'id' => 304,
                'name' => 'Karlovacka',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            304 =>
            array(
                'id' => 305,
                'name' => 'Koprivnicko-Krizevacka',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            305 =>
            array(
                'id' => 306,
                'name' => 'Krapinsko-Zagorska',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            306 =>
            array(
                'id' => 307,
                'name' => 'Licko-Senjska',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            307 =>
            array(
                'id' => 308,
                'name' => 'Medimurska',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            308 =>
            array(
                'id' => 309,
                'name' => 'Osjecko-Baranjska',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            309 =>
            array(
                'id' => 310,
                'name' => 'Pozesko-Slavonska',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            310 =>
            array(
                'id' => 311,
                'name' => 'Primorsko-Goranska',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            311 =>
            array(
                'id' => 312,
                'name' => 'Sibensko-Kninska',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            312 =>
            array(
                'id' => 313,
                'name' => 'Sisacko-Moslavacka',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            313 =>
            array(
                'id' => 314,
                'name' => 'Splitsko-Dalmatinska',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            314 =>
            array(
                'id' => 315,
                'name' => 'Varazdinska',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            315 =>
            array(
                'id' => 316,
                'name' => 'Viroviticko-Podravska',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            316 =>
            array(
                'id' => 317,
                'name' => 'Vukovarsko-Srijemska',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            317 =>
            array(
                'id' => 318,
                'name' => 'Zadarska',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            318 =>
            array(
                'id' => 319,
                'name' => 'Zagrebacka',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            319 =>
            array(
                'id' => 320,
                'name' => 'Grad Zagreb',
                'country' => 52,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            320 =>
            array(
                'id' => 321,
                'name' => 'Pinar del Rio',
                'country' => 53,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            321 =>
            array(
                'id' => 322,
                'name' => 'Ciudad de la Habana',
                'country' => 53,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            322 =>
            array(
                'id' => 323,
                'name' => 'Matanzas',
                'country' => 53,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            323 =>
            array(
                'id' => 324,
                'name' => 'Isla de la Juventud',
                'country' => 53,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            324 =>
            array(
                'id' => 325,
                'name' => 'Camaguey',
                'country' => 53,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            325 =>
            array(
                'id' => 326,
                'name' => 'Ciego de Avila',
                'country' => 53,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            326 =>
            array(
                'id' => 327,
                'name' => 'Cienfuegos',
                'country' => 53,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            327 =>
            array(
                'id' => 328,
                'name' => 'Granma',
                'country' => 53,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            328 =>
            array(
                'id' => 329,
                'name' => 'Guantanamo',
                'country' => 53,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            329 =>
            array(
                'id' => 330,
                'name' => 'La Habana',
                'country' => 53,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            330 =>
            array(
                'id' => 331,
                'name' => 'Holguin',
                'country' => 53,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            331 =>
            array(
                'id' => 332,
                'name' => 'Las Tunas',
                'country' => 53,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            332 =>
            array(
                'id' => 333,
                'name' => 'Sancti Spiritus',
                'country' => 53,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            333 =>
            array(
                'id' => 334,
                'name' => 'Santiago de Cuba',
                'country' => 53,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            334 =>
            array(
                'id' => 335,
                'name' => 'Villa Clara',
                'country' => 53,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            335 =>
            array(
                'id' => 336,
                'name' => 'Willemstad',
                'country' => 54,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            336 =>
            array(
                'id' => 337,
                'name' => 'Arhus',
                'country' => 55,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            337 =>
            array(
                'id' => 338,
                'name' => 'Bornholm',
                'country' => 55,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            338 =>
            array(
                'id' => 339,
                'name' => 'Frederiksborg',
                'country' => 55,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            339 =>
            array(
                'id' => 340,
                'name' => 'Fyn',
                'country' => 55,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            340 =>
            array(
                'id' => 341,
                'name' => 'Kobenhavn',
                'country' => 55,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            341 =>
            array(
                'id' => 342,
                'name' => 'Staden Kobenhavn',
                'country' => 55,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            342 =>
            array(
                'id' => 343,
                'name' => 'Nordjylland',
                'country' => 55,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            343 =>
            array(
                'id' => 344,
                'name' => 'Ribe',
                'country' => 55,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            344 =>
            array(
                'id' => 345,
                'name' => 'Ringkobing',
                'country' => 55,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            345 =>
            array(
                'id' => 346,
                'name' => 'Roskilde',
                'country' => 55,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            346 =>
            array(
                'id' => 347,
                'name' => 'Sonderjylland',
                'country' => 55,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            347 =>
            array(
                'id' => 348,
                'name' => 'Storstrom',
                'country' => 55,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            348 =>
            array(
                'id' => 349,
                'name' => 'Vejle',
                'country' => 55,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            349 =>
            array(
                'id' => 350,
                'name' => 'Vestsjalland',
                'country' => 55,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            350 =>
            array(
                'id' => 351,
                'name' => 'Viborg',
                'country' => 55,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            351 =>
            array(
                'id' => 352,
                'name' => 'Galápagos',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            352 =>
            array(
                'id' => 353,
                'name' => 'Azuay',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            353 =>
            array(
                'id' => 354,
                'name' => 'Bolívar',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            354 =>
            array(
                'id' => 355,
                'name' => 'Canar',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            355 =>
            array(
                'id' => 356,
                'name' => 'Carchi',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            356 =>
            array(
                'id' => 357,
                'name' => 'Chimborazo',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            357 =>
            array(
                'id' => 358,
                'name' => 'Cotopaxi',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            358 =>
            array(
                'id' => 359,
                'name' => 'El Oro',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            359 =>
            array(
                'id' => 360,
                'name' => 'Esmeraldas',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            360 =>
            array(
                'id' => 361,
                'name' => 'Guayas',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            361 =>
            array(
                'id' => 362,
                'name' => 'Imbabura',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            362 =>
            array(
                'id' => 363,
                'name' => 'Loja',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            363 =>
            array(
                'id' => 364,
                'name' => 'Los Ríos',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            364 =>
            array(
                'id' => 365,
                'name' => 'Manabí',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            365 =>
            array(
                'id' => 366,
                'name' => 'Morona-Santiago',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            366 =>
            array(
                'id' => 367,
                'name' => 'Pastaza',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            367 =>
            array(
                'id' => 368,
                'name' => 'Pichincha',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            368 =>
            array(
                'id' => 369,
                'name' => 'Tungurahua',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            369 =>
            array(
                'id' => 370,
                'name' => 'Zamora-Chinchipe',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            370 =>
            array(
                'id' => 371,
                'name' => 'Sucumbíos',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            371 =>
            array(
                'id' => 372,
                'name' => 'Napo',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            372 =>
            array(
                'id' => 373,
                'name' => 'Orellana',
                'country' => 57,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            373 =>
            array(
                'id' => 374,
                'name' => 'Al QÄ hira',
                'country' => 58,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            374 =>
            array(
                'id' => 375,
                'name' => 'Aswan',
                'country' => 58,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            375 =>
            array(
                'id' => 376,
                'name' => 'Asyut',
                'country' => 58,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            376 =>
            array(
                'id' => 377,
                'name' => 'Beni Suef',
                'country' => 58,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            377 =>
            array(
                'id' => 378,
                'name' => 'Gharbia',
                'country' => 58,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            378 =>
            array(
                'id' => 379,
                'name' => 'Damietta',
                'country' => 58,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            379 =>
            array(
                'id' => 380,
                'name' => 'Egypt',
                'country' => 58,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            380 =>
            array(
                'id' => 381,
                'name' => 'Sinai',
                'country' => 58,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            381 =>
            array(
                'id' => 382,
                'name' => 'Ahuachapán',
                'country' => 59,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            382 =>
            array(
                'id' => 383,
                'name' => 'Cuscatlán',
                'country' => 59,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            383 =>
            array(
                'id' => 384,
                'name' => 'La Libertad',
                'country' => 59,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            384 =>
            array(
                'id' => 385,
                'name' => 'La Paz',
                'country' => 59,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            385 =>
            array(
                'id' => 386,
                'name' => 'La Unión',
                'country' => 59,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            386 =>
            array(
                'id' => 387,
                'name' => 'San Miguel',
                'country' => 59,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            387 =>
            array(
                'id' => 388,
                'name' => 'San Salvador',
                'country' => 59,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            388 =>
            array(
                'id' => 389,
                'name' => 'Santa Ana',
                'country' => 59,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            389 =>
            array(
                'id' => 390,
                'name' => 'Sonsonate',
                'country' => 59,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            390 =>
            array(
                'id' => 391,
                'name' => 'Dubai',
                'country' => 60,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            391 =>
            array(
                'id' => 392,
                'name' => 'Banska Bystrica',
                'country' => 62,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            392 =>
            array(
                'id' => 393,
                'name' => 'Bratislava',
                'country' => 62,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            393 =>
            array(
                'id' => 394,
                'name' => 'Kosice',
                'country' => 62,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            394 =>
            array(
                'id' => 395,
                'name' => 'Nitra',
                'country' => 62,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            395 =>
            array(
                'id' => 396,
                'name' => 'Presov',
                'country' => 62,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            396 =>
            array(
                'id' => 397,
                'name' => 'Trencin',
                'country' => 62,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            397 =>
            array(
                'id' => 398,
                'name' => 'Trnava',
                'country' => 62,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            398 =>
            array(
                'id' => 399,
                'name' => 'Zilina',
                'country' => 62,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            399 =>
            array(
                'id' => 400,
                'name' => 'Beltinci',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            400 =>
            array(
                'id' => 401,
                'name' => 'Bohinj',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            401 =>
            array(
                'id' => 402,
                'name' => 'Borovnica',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            402 =>
            array(
                'id' => 403,
                'name' => 'Bovec',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            403 =>
            array(
                'id' => 404,
                'name' => 'Brda',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            404 =>
            array(
                'id' => 405,
                'name' => 'Brezice',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            405 =>
            array(
                'id' => 406,
                'name' => 'Brezovica',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            406 =>
            array(
                'id' => 407,
                'name' => 'Cerklje na Gorenjskem',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            407 =>
            array(
                'id' => 408,
                'name' => 'Cerkno',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            408 =>
            array(
                'id' => 409,
                'name' => 'Crna na Koroskem',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            409 =>
            array(
                'id' => 410,
                'name' => 'Crnomelj',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            410 =>
            array(
                'id' => 411,
                'name' => 'Divaca',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            411 =>
            array(
                'id' => 412,
                'name' => 'Dobrepolje',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            412 =>
            array(
                'id' => 413,
                'name' => 'Dol pri Ljubljani',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            413 =>
            array(
                'id' => 414,
                'name' => 'Duplek',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            414 =>
            array(
                'id' => 415,
                'name' => 'Gornji Grad',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            415 =>
            array(
                'id' => 416,
                'name' => 'Hrastnik',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            416 =>
            array(
                'id' => 417,
                'name' => 'Hrpelje-Kozina',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            417 =>
            array(
                'id' => 418,
                'name' => 'Idrija',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            418 =>
            array(
                'id' => 419,
                'name' => 'Ig',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            419 =>
            array(
                'id' => 420,
                'name' => 'Ilirska Bistrica',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            420 =>
            array(
                'id' => 421,
                'name' => 'Ivancna Gorica',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            421 =>
            array(
                'id' => 422,
                'name' => 'Komen',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            422 =>
            array(
                'id' => 423,
                'name' => 'Koper-Capodistria',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            423 =>
            array(
                'id' => 424,
                'name' => 'Kozje',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            424 =>
            array(
                'id' => 425,
                'name' => 'Kranj',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            425 =>
            array(
                'id' => 426,
                'name' => 'Kranjska Gora',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            426 =>
            array(
                'id' => 427,
                'name' => 'Krsko',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            427 =>
            array(
                'id' => 428,
                'name' => 'Lasko',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            428 =>
            array(
                'id' => 429,
                'name' => 'Ljubljana',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            429 =>
            array(
                'id' => 430,
                'name' => 'Ljubno',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            430 =>
            array(
                'id' => 431,
                'name' => 'Logatec',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            431 =>
            array(
                'id' => 432,
                'name' => 'Medvode',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            432 =>
            array(
                'id' => 433,
                'name' => 'Menges',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            433 =>
            array(
                'id' => 434,
                'name' => 'Mezica',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            434 =>
            array(
                'id' => 435,
                'name' => 'Moravce',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            435 =>
            array(
                'id' => 436,
                'name' => 'Mozirje',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            436 =>
            array(
                'id' => 437,
                'name' => 'Murska Sobota',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            437 =>
            array(
                'id' => 438,
                'name' => 'Nova Gorica',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            438 =>
            array(
                'id' => 439,
                'name' => 'Ormoz',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            439 =>
            array(
                'id' => 440,
                'name' => 'Pesnica',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            440 =>
            array(
                'id' => 441,
                'name' => 'Postojna',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            441 =>
            array(
                'id' => 442,
                'name' => 'Radece',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            442 =>
            array(
                'id' => 443,
                'name' => 'Radenci',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            443 =>
            array(
                'id' => 444,
                'name' => 'Radovljica',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            444 =>
            array(
                'id' => 445,
                'name' => 'Rogaska Slatina',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            445 =>
            array(
                'id' => 446,
                'name' => 'Sencur',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            446 =>
            array(
                'id' => 447,
                'name' => 'Sentilj',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            447 =>
            array(
                'id' => 448,
                'name' => 'Sevnica',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            448 =>
            array(
                'id' => 449,
                'name' => 'Sezana',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            449 =>
            array(
                'id' => 450,
                'name' => 'Skofja Loka',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            450 =>
            array(
                'id' => 451,
                'name' => 'Slovenj Gradec',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            451 =>
            array(
                'id' => 452,
                'name' => 'Slovenske Konjice',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            452 =>
            array(
                'id' => 453,
                'name' => 'Smarje pri Jelsah',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            453 =>
            array(
                'id' => 454,
                'name' => 'Tolmin',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            454 =>
            array(
                'id' => 455,
                'name' => 'Trbovlje',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            455 =>
            array(
                'id' => 456,
                'name' => 'Trzic',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            456 =>
            array(
                'id' => 457,
                'name' => 'Velenje',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            457 =>
            array(
                'id' => 458,
                'name' => 'Vipava',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            458 =>
            array(
                'id' => 459,
                'name' => 'Vrhnika',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            459 =>
            array(
                'id' => 460,
                'name' => 'Vuzenica',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            460 =>
            array(
                'id' => 461,
                'name' => 'Zagorje ob Savi',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            461 =>
            array(
                'id' => 462,
                'name' => 'Zelezniki',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            462 =>
            array(
                'id' => 463,
                'name' => 'Ziri',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            463 =>
            array(
                'id' => 464,
                'name' => 'Zrece',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            464 =>
            array(
                'id' => 465,
                'name' => 'Domzale',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            465 =>
            array(
                'id' => 466,
                'name' => 'Jesenice',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            466 =>
            array(
                'id' => 467,
                'name' => 'Kamnik',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            467 =>
            array(
                'id' => 468,
                'name' => 'Kocevje',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            468 =>
            array(
                'id' => 469,
                'name' => 'Lenart',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            469 =>
            array(
                'id' => 470,
                'name' => 'Litija',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            470 =>
            array(
                'id' => 471,
                'name' => 'Ljutomer',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            471 =>
            array(
                'id' => 472,
                'name' => 'Maribor',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            472 =>
            array(
                'id' => 473,
                'name' => 'Novo Mesto',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            473 =>
            array(
                'id' => 474,
                'name' => 'Piran',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            474 =>
            array(
                'id' => 475,
                'name' => 'Preddvor',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            475 =>
            array(
                'id' => 476,
                'name' => 'Ptuj',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            476 =>
            array(
                'id' => 477,
                'name' => 'Ribnica',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            477 =>
            array(
                'id' => 478,
                'name' => 'Sentjur pri Celju',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            478 =>
            array(
                'id' => 479,
                'name' => 'Slovenska Bistrica',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            479 =>
            array(
                'id' => 480,
                'name' => 'Videm',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            480 =>
            array(
                'id' => 481,
                'name' => 'Zalec',
                'country' => 63,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            481 =>
            array(
                'id' => 482,
                'name' => 'Las Palmas',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            482 =>
            array(
                'id' => 483,
                'name' => 'Soria',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            483 =>
            array(
                'id' => 484,
                'name' => 'Palencia',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            484 =>
            array(
                'id' => 485,
                'name' => 'Zamora',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            485 =>
            array(
                'id' => 486,
                'name' => 'Cádiz',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            486 =>
            array(
                'id' => 487,
                'name' => 'Navarra',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            487 =>
            array(
                'id' => 488,
                'name' => 'Ourense',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            488 =>
            array(
                'id' => 489,
                'name' => 'Segovia',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            489 =>
            array(
                'id' => 490,
                'name' => 'Guipuacutezcoa',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            490 =>
            array(
                'id' => 491,
                'name' => 'Ciudad Real',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            491 =>
            array(
                'id' => 492,
                'name' => 'Vizcaya',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            492 =>
            array(
                'id' => 493,
                'name' => 'álava',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            493 =>
            array(
                'id' => 494,
                'name' => 'A Coruña',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            494 =>
            array(
                'id' => 495,
                'name' => 'Cantabria',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            495 =>
            array(
                'id' => 496,
                'name' => 'Almería',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            496 =>
            array(
                'id' => 497,
                'name' => 'Zaragoza',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            497 =>
            array(
                'id' => 498,
                'name' => 'Santa Cruz de Tenerife',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            498 =>
            array(
                'id' => 499,
                'name' => 'Cáceres',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            499 =>
            array(
                'id' => 500,
                'name' => 'Guadalajara',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
        ));
        \DB::table('country_states')->insert(array(
            0 =>
            array(
                'id' => 501,
                'name' => 'ávila',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id' => 502,
                'name' => 'Toledo',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id' => 503,
                'name' => 'Castellón',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'id' => 504,
                'name' => 'Tarragona',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            4 =>
            array(
                'id' => 505,
                'name' => 'Lugo',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            5 =>
            array(
                'id' => 506,
                'name' => 'La Rioja',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            6 =>
            array(
                'id' => 507,
                'name' => 'Ceuta',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            7 =>
            array(
                'id' => 508,
                'name' => 'Murcia',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            8 =>
            array(
                'id' => 509,
                'name' => 'Salamanca',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            9 =>
            array(
                'id' => 510,
                'name' => 'Valladolid',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            10 =>
            array(
                'id' => 511,
                'name' => 'Jaén',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            11 =>
            array(
                'id' => 512,
                'name' => 'Girona',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            12 =>
            array(
                'id' => 513,
                'name' => 'Granada',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            13 =>
            array(
                'id' => 514,
                'name' => 'Alacant',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            14 =>
            array(
                'id' => 515,
                'name' => 'Córdoba',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            15 =>
            array(
                'id' => 516,
                'name' => 'Albacete',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            16 =>
            array(
                'id' => 517,
                'name' => 'Cuenca',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            17 =>
            array(
                'id' => 518,
                'name' => 'Pontevedra',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            18 =>
            array(
                'id' => 519,
                'name' => 'Teruel',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            19 =>
            array(
                'id' => 520,
                'name' => 'Melilla',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            20 =>
            array(
                'id' => 521,
                'name' => 'Barcelona',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            21 =>
            array(
                'id' => 522,
                'name' => 'Badajoz',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            22 =>
            array(
                'id' => 523,
                'name' => 'Madrid',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            23 =>
            array(
                'id' => 524,
                'name' => 'Sevilla',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            24 =>
            array(
                'id' => 525,
                'name' => 'Valegravencia',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            25 =>
            array(
                'id' => 526,
                'name' => 'Huelva',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            26 =>
            array(
                'id' => 527,
                'name' => 'Lleida',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            27 =>
            array(
                'id' => 528,
                'name' => 'León',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            28 =>
            array(
                'id' => 529,
                'name' => 'Illes Balears',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            29 =>
            array(
                'id' => 530,
                'name' => 'Burgos',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            30 =>
            array(
                'id' => 531,
                'name' => 'Huesca',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            31 =>
            array(
                'id' => 532,
                'name' => 'Asturias',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            32 =>
            array(
                'id' => 533,
                'name' => 'Málaga',
                'country' => 64,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            33 =>
            array(
                'id' => 534,
                'name' => 'Armed Forces Americas',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            34 =>
            array(
                'id' => 535,
                'name' => 'Armed Forces Europe',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            35 =>
            array(
                'id' => 536,
                'name' => 'Alaska',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            36 =>
            array(
                'id' => 537,
                'name' => 'Alabama',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            37 =>
            array(
                'id' => 538,
                'name' => 'Armed Forces Pacific',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            38 =>
            array(
                'id' => 539,
                'name' => 'Arkansas',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            39 =>
            array(
                'id' => 540,
                'name' => 'American Samoa',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            40 =>
            array(
                'id' => 541,
                'name' => 'Arizona',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            41 =>
            array(
                'id' => 542,
                'name' => 'California',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            42 =>
            array(
                'id' => 543,
                'name' => 'Colorado',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            43 =>
            array(
                'id' => 544,
                'name' => 'Connecticut',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            44 =>
            array(
                'id' => 545,
                'name' => 'District of Columbia',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            45 =>
            array(
                'id' => 546,
                'name' => 'Delaware',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            46 =>
            array(
                'id' => 547,
                'name' => 'Florida',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            47 =>
            array(
                'id' => 548,
                'name' => 'Federated States of Micronesia',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            48 =>
            array(
                'id' => 549,
                'name' => 'Georgia',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            49 =>
            array(
                'id' => 550,
                'name' => 'Hawaii',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            50 =>
            array(
                'id' => 551,
                'name' => 'Iowa',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            51 =>
            array(
                'id' => 552,
                'name' => 'Idaho',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            52 =>
            array(
                'id' => 553,
                'name' => 'Illinois',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            53 =>
            array(
                'id' => 554,
                'name' => 'Indiana',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            54 =>
            array(
                'id' => 555,
                'name' => 'Kansas',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            55 =>
            array(
                'id' => 556,
                'name' => 'Kentucky',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            56 =>
            array(
                'id' => 557,
                'name' => 'Louisiana',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            57 =>
            array(
                'id' => 558,
                'name' => 'Massachusetts',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            58 =>
            array(
                'id' => 559,
                'name' => 'Maryland',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            59 =>
            array(
                'id' => 560,
                'name' => 'Maine',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            60 =>
            array(
                'id' => 561,
                'name' => 'Marshall Islands',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            61 =>
            array(
                'id' => 562,
                'name' => 'Michigan',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            62 =>
            array(
                'id' => 563,
                'name' => 'Minnesota',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            63 =>
            array(
                'id' => 564,
                'name' => 'Missouri',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            64 =>
            array(
                'id' => 565,
                'name' => 'Northern Mariana Islands',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            65 =>
            array(
                'id' => 566,
                'name' => 'Mississippi',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            66 =>
            array(
                'id' => 567,
                'name' => 'Montana',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            67 =>
            array(
                'id' => 568,
                'name' => 'North Carolina',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            68 =>
            array(
                'id' => 569,
                'name' => 'North Dakota',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            69 =>
            array(
                'id' => 570,
                'name' => 'Nebraska',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            70 =>
            array(
                'id' => 571,
                'name' => 'New Hampshire',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            71 =>
            array(
                'id' => 572,
                'name' => 'New Jersey',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            72 =>
            array(
                'id' => 573,
                'name' => 'New Mexico',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            73 =>
            array(
                'id' => 574,
                'name' => 'Nevada',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            74 =>
            array(
                'id' => 575,
                'name' => 'New York',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            75 =>
            array(
                'id' => 576,
                'name' => 'Ohio',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            76 =>
            array(
                'id' => 577,
                'name' => 'Oklahoma',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            77 =>
            array(
                'id' => 578,
                'name' => 'Oregon',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            78 =>
            array(
                'id' => 579,
                'name' => 'Pennsylvania',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            79 =>
            array(
                'id' => 580,
                'name' => 'Palau',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            80 =>
            array(
                'id' => 581,
                'name' => 'Rhode Island',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            81 =>
            array(
                'id' => 582,
                'name' => 'South Carolina',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            82 =>
            array(
                'id' => 583,
                'name' => 'South Dakota',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            83 =>
            array(
                'id' => 584,
                'name' => 'Tennessee',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            84 =>
            array(
                'id' => 585,
                'name' => 'Texas',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            85 =>
            array(
                'id' => 586,
                'name' => 'Utah',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            86 =>
            array(
                'id' => 587,
                'name' => 'Virginia',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            87 =>
            array(
                'id' => 588,
                'name' => 'Virgin Islands',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            88 =>
            array(
                'id' => 589,
                'name' => 'Vermont',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            89 =>
            array(
                'id' => 590,
                'name' => 'Washington',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            90 =>
            array(
                'id' => 591,
                'name' => 'West Virginia',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            91 =>
            array(
                'id' => 592,
                'name' => 'Wisconsin',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            92 =>
            array(
                'id' => 593,
                'name' => 'Wyoming',
                'country' => 65,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            93 =>
            array(
                'id' => 594,
                'name' => 'Lapland',
                'country' => 69,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            94 =>
            array(
                'id' => 595,
                'name' => 'Oulu',
                'country' => 69,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            95 =>
            array(
                'id' => 596,
                'name' => 'Southern Finland',
                'country' => 69,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            96 =>
            array(
                'id' => 597,
                'name' => 'Eastern Finland',
                'country' => 69,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            97 =>
            array(
                'id' => 598,
                'name' => 'Western Finland',
                'country' => 69,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            98 =>
            array(
                'id' => 599,
                'name' => 'Ain',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            99 =>
            array(
                'id' => 600,
                'name' => 'Haute-Savoie',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            100 =>
            array(
                'id' => 601,
                'name' => 'Aisne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            101 =>
            array(
                'id' => 602,
                'name' => 'Allier',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            102 =>
            array(
                'id' => 603,
                'name' => 'Alpes-de-Haute-Provence',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            103 =>
            array(
                'id' => 604,
                'name' => 'Hautes-Alpes',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            104 =>
            array(
                'id' => 605,
                'name' => 'Alpes-Maritimes',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            105 =>
            array(
                'id' => 606,
                'name' => 'Ardegraveche',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            106 =>
            array(
                'id' => 607,
                'name' => 'Ardennes',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            107 =>
            array(
                'id' => 608,
                'name' => 'Ariegravege',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            108 =>
            array(
                'id' => 609,
                'name' => 'Aube',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            109 =>
            array(
                'id' => 610,
                'name' => 'Aude',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            110 =>
            array(
                'id' => 611,
                'name' => 'Aveyron',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            111 =>
            array(
                'id' => 612,
                'name' => 'Bouches-du-Rhocircne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            112 =>
            array(
                'id' => 613,
                'name' => 'Calvados',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            113 =>
            array(
                'id' => 614,
                'name' => 'Cantal',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            114 =>
            array(
                'id' => 615,
                'name' => 'Charente',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            115 =>
            array(
                'id' => 616,
                'name' => 'Charente Maritime',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            116 =>
            array(
                'id' => 617,
                'name' => 'Cher',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            117 =>
            array(
                'id' => 618,
                'name' => 'Corregraveze',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            118 =>
            array(
                'id' => 619,
                'name' => 'Dordogne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            119 =>
            array(
                'id' => 620,
                'name' => 'Corse',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            120 =>
            array(
                'id' => 621,
                'name' => 'Cocircte dOr',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            121 =>
            array(
                'id' => 622,
                'name' => 'Saocircne et Loire',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            122 =>
            array(
                'id' => 623,
                'name' => 'Cocirctes dArmor',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            123 =>
            array(
                'id' => 624,
                'name' => 'Creuse',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            124 =>
            array(
                'id' => 625,
                'name' => 'Doubs',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            125 =>
            array(
                'id' => 626,
                'name' => 'Drocircme',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            126 =>
            array(
                'id' => 627,
                'name' => 'Eure',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            127 =>
            array(
                'id' => 628,
                'name' => 'Eure-et-Loire',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            128 =>
            array(
                'id' => 629,
                'name' => 'Finistegravere',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            129 =>
            array(
                'id' => 630,
                'name' => 'Gard',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            130 =>
            array(
                'id' => 631,
                'name' => 'Haute-Garonne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            131 =>
            array(
                'id' => 632,
                'name' => 'Gers',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            132 =>
            array(
                'id' => 633,
                'name' => 'Gironde',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            133 =>
            array(
                'id' => 634,
                'name' => 'Hérault',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            134 =>
            array(
                'id' => 635,
                'name' => 'Ille et Vilaine',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            135 =>
            array(
                'id' => 636,
                'name' => 'Indre',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            136 =>
            array(
                'id' => 637,
                'name' => 'Indre-et-Loire',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            137 =>
            array(
                'id' => 638,
                'name' => 'Isère',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            138 =>
            array(
                'id' => 639,
                'name' => 'Jura',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            139 =>
            array(
                'id' => 640,
                'name' => 'Landes',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            140 =>
            array(
                'id' => 641,
                'name' => 'Loir-et-Cher',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            141 =>
            array(
                'id' => 642,
                'name' => 'Loire',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            142 =>
            array(
                'id' => 643,
                'name' => 'Rhocircne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            143 =>
            array(
                'id' => 644,
                'name' => 'Haute-Loire',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            144 =>
            array(
                'id' => 645,
                'name' => 'Loire Atlantique',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            145 =>
            array(
                'id' => 646,
                'name' => 'Loiret',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            146 =>
            array(
                'id' => 647,
                'name' => 'Lot',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            147 =>
            array(
                'id' => 648,
                'name' => 'Lot-et-Garonne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            148 =>
            array(
                'id' => 649,
                'name' => 'Lozegravere',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            149 =>
            array(
                'id' => 650,
                'name' => 'Maine et Loire',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            150 =>
            array(
                'id' => 651,
                'name' => 'Manche',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            151 =>
            array(
                'id' => 652,
                'name' => 'Marne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            152 =>
            array(
                'id' => 653,
                'name' => 'Haute-Marne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            153 =>
            array(
                'id' => 654,
                'name' => 'Mayenne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            154 =>
            array(
                'id' => 655,
                'name' => 'Meurthe-et-Moselle',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            155 =>
            array(
                'id' => 656,
                'name' => 'Meuse',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            156 =>
            array(
                'id' => 657,
                'name' => 'Morbihan',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            157 =>
            array(
                'id' => 658,
                'name' => 'Moselle',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            158 =>
            array(
                'id' => 659,
                'name' => 'Niegravevre',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            159 =>
            array(
                'id' => 660,
                'name' => 'Nord',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            160 =>
            array(
                'id' => 661,
                'name' => 'Oise',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            161 =>
            array(
                'id' => 662,
                'name' => 'Orne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            162 =>
            array(
                'id' => 663,
                'name' => 'Pas-de-Calais',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            163 =>
            array(
                'id' => 664,
                'name' => 'Puy-de-Docircme',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            164 =>
            array(
                'id' => 665,
                'name' => 'Pyrénées-Atlantiques',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            165 =>
            array(
                'id' => 666,
                'name' => 'Hautes-Pyrénées',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            166 =>
            array(
                'id' => 667,
                'name' => 'Pyrénées-Orientales',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            167 =>
            array(
                'id' => 668,
                'name' => 'Bas Rhin',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            168 =>
            array(
                'id' => 669,
                'name' => 'Haut Rhin',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            169 =>
            array(
                'id' => 670,
                'name' => 'Haute-Saocircne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            170 =>
            array(
                'id' => 671,
                'name' => 'Sarthe',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            171 =>
            array(
                'id' => 672,
                'name' => 'Savoie',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            172 =>
            array(
                'id' => 673,
                'name' => 'Paris',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            173 =>
            array(
                'id' => 674,
                'name' => 'Seine-Maritime',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            174 =>
            array(
                'id' => 675,
                'name' => 'Seine-et-Marne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            175 =>
            array(
                'id' => 676,
                'name' => 'Yvelines',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            176 =>
            array(
                'id' => 677,
                'name' => 'Deux-Segravevres',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            177 =>
            array(
                'id' => 678,
                'name' => 'Somme',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            178 =>
            array(
                'id' => 679,
                'name' => 'Tarn',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            179 =>
            array(
                'id' => 680,
                'name' => 'Tarn-et-Garonne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            180 =>
            array(
                'id' => 681,
                'name' => 'Var',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            181 =>
            array(
                'id' => 682,
                'name' => 'Vaucluse',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            182 =>
            array(
                'id' => 683,
                'name' => 'Vendée',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            183 =>
            array(
                'id' => 684,
                'name' => 'Vienne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            184 =>
            array(
                'id' => 685,
                'name' => 'Haute-Vienne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            185 =>
            array(
                'id' => 686,
                'name' => 'Vosges',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            186 =>
            array(
                'id' => 687,
                'name' => 'Yonne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            187 =>
            array(
                'id' => 688,
                'name' => 'Territoire de Belfort',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            188 =>
            array(
                'id' => 689,
                'name' => 'Essonne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            189 =>
            array(
                'id' => 690,
                'name' => 'Hauts-de-Seine',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            190 =>
            array(
                'id' => 691,
                'name' => 'Seine-Saint-Denis',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            191 =>
            array(
                'id' => 692,
                'name' => 'Val-de-Marne',
                'country' => 71,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            192 =>
            array(
                'id' => 693,
                'name' => 'Abkhazia',
                'country' => 74,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            193 =>
            array(
                'id' => 694,
                'name' => 'Ajaria',
                'country' => 74,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            194 =>
            array(
                'id' => 695,
                'name' => 'Georgia',
                'country' => 74,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            195 =>
            array(
                'id' => 696,
                'name' => 'South Ossetia',
                'country' => 74,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            196 =>
            array(
                'id' => 697,
                'name' => 'Evros',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            197 =>
            array(
                'id' => 698,
                'name' => 'Rodhopi',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            198 =>
            array(
                'id' => 699,
                'name' => 'Xanthi',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            199 =>
            array(
                'id' => 700,
                'name' => 'Drama',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            200 =>
            array(
                'id' => 701,
                'name' => 'Serrai',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            201 =>
            array(
                'id' => 702,
                'name' => 'Kilkis',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            202 =>
            array(
                'id' => 703,
                'name' => 'Pella',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            203 =>
            array(
                'id' => 704,
                'name' => 'Florina',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            204 =>
            array(
                'id' => 705,
                'name' => 'Kastoria',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            205 =>
            array(
                'id' => 706,
                'name' => 'Grevena',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            206 =>
            array(
                'id' => 707,
                'name' => 'Kozani',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            207 =>
            array(
                'id' => 708,
                'name' => 'Imathia',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            208 =>
            array(
                'id' => 709,
                'name' => 'Thessaloniki',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            209 =>
            array(
                'id' => 710,
                'name' => 'Kavala',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            210 =>
            array(
                'id' => 711,
                'name' => 'Khalkidhiki',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            211 =>
            array(
                'id' => 712,
                'name' => 'Pieria',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            212 =>
            array(
                'id' => 713,
                'name' => 'Ioannina',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            213 =>
            array(
                'id' => 714,
                'name' => 'Thesprotia',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            214 =>
            array(
                'id' => 715,
                'name' => 'Preveza',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            215 =>
            array(
                'id' => 716,
                'name' => 'Arta',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            216 =>
            array(
                'id' => 717,
                'name' => 'Larisa',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            217 =>
            array(
                'id' => 718,
                'name' => 'Trikala',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            218 =>
            array(
                'id' => 719,
                'name' => 'Kardhitsa',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            219 =>
            array(
                'id' => 720,
                'name' => 'Magnisia',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            220 =>
            array(
                'id' => 721,
                'name' => 'Kerkira',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            221 =>
            array(
                'id' => 722,
                'name' => 'Levkas',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            222 =>
            array(
                'id' => 723,
                'name' => 'Kefallinia',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            223 =>
            array(
                'id' => 724,
                'name' => 'Zakinthos',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            224 =>
            array(
                'id' => 725,
                'name' => 'Fthiotis',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            225 =>
            array(
                'id' => 726,
                'name' => 'Evritania',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            226 =>
            array(
                'id' => 727,
                'name' => 'Aitolia kai Akarnania',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            227 =>
            array(
                'id' => 728,
                'name' => 'Fokis',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            228 =>
            array(
                'id' => 729,
                'name' => 'Voiotia',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            229 =>
            array(
                'id' => 730,
                'name' => 'Evvoia',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            230 =>
            array(
                'id' => 731,
                'name' => 'Attiki',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            231 =>
            array(
                'id' => 732,
                'name' => 'Argolis',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            232 =>
            array(
                'id' => 733,
                'name' => 'Korinthia',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            233 =>
            array(
                'id' => 734,
                'name' => 'Akhaia',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            234 =>
            array(
                'id' => 735,
                'name' => 'Ilia',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            235 =>
            array(
                'id' => 736,
                'name' => 'Messinia',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            236 =>
            array(
                'id' => 737,
                'name' => 'Arkadhia',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            237 =>
            array(
                'id' => 738,
                'name' => 'Lakonia',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            238 =>
            array(
                'id' => 739,
                'name' => 'Khania',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            239 =>
            array(
                'id' => 740,
                'name' => 'Rethimni',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            240 =>
            array(
                'id' => 741,
                'name' => 'Iraklion',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            241 =>
            array(
                'id' => 742,
                'name' => 'Lasithi',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            242 =>
            array(
                'id' => 743,
                'name' => 'Dhodhekanisos',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            243 =>
            array(
                'id' => 744,
                'name' => 'Samos',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            244 =>
            array(
                'id' => 745,
                'name' => 'Kikladhes',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            245 =>
            array(
                'id' => 746,
                'name' => 'Khios',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            246 =>
            array(
                'id' => 747,
                'name' => 'Lesvos',
                'country' => 78,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            247 =>
            array(
                'id' => 748,
                'name' => 'Grande-Terre',
                'country' => 80,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            248 =>
            array(
                'id' => 749,
                'name' => 'Basse-Terre',
                'country' => 80,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            249 =>
            array(
                'id' => 750,
                'name' => 'Alta Verapaz',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            250 =>
            array(
                'id' => 751,
                'name' => 'Baja Verapaz',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            251 =>
            array(
                'id' => 752,
                'name' => 'Chimaltenango',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            252 =>
            array(
                'id' => 753,
                'name' => 'Chiquimula',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            253 =>
            array(
                'id' => 754,
                'name' => 'El Progreso',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            254 =>
            array(
                'id' => 755,
                'name' => 'Escuintla',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            255 =>
            array(
                'id' => 756,
                'name' => 'Guatemala',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            256 =>
            array(
                'id' => 757,
                'name' => 'Huehuetenango',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            257 =>
            array(
                'id' => 758,
                'name' => 'Izabal',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            258 =>
            array(
                'id' => 759,
                'name' => 'Jalapa',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            259 =>
            array(
                'id' => 760,
                'name' => 'Jutiapa',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            260 =>
            array(
                'id' => 761,
                'name' => 'Petén',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            261 =>
            array(
                'id' => 762,
                'name' => 'Quetzaltenango',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            262 =>
            array(
                'id' => 763,
                'name' => 'Quiché',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            263 =>
            array(
                'id' => 764,
                'name' => 'Retalhuleu',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            264 =>
            array(
                'id' => 765,
                'name' => 'Sacatepéquez',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            265 =>
            array(
                'id' => 766,
                'name' => 'San Marcos',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            266 =>
            array(
                'id' => 767,
                'name' => 'Santa Rosa',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            267 =>
            array(
                'id' => 768,
                'name' => 'Sololá',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            268 =>
            array(
                'id' => 769,
                'name' => 'Suchitepequez',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            269 =>
            array(
                'id' => 770,
                'name' => 'Totonicapán',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            270 =>
            array(
                'id' => 771,
                'name' => 'Zacapa',
                'country' => 82,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            271 =>
            array(
                'id' => 772,
                'name' => 'Artibonite',
                'country' => 89,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            272 =>
            array(
                'id' => 773,
                'name' => 'GrandAnse',
                'country' => 89,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            273 =>
            array(
                'id' => 774,
                'name' => 'North West',
                'country' => 89,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            274 =>
            array(
                'id' => 775,
                'name' => 'West',
                'country' => 89,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            275 =>
            array(
                'id' => 776,
                'name' => 'South',
                'country' => 89,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            276 =>
            array(
                'id' => 777,
                'name' => 'South East',
                'country' => 89,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            277 =>
            array(
                'id' => 778,
                'name' => 'Tegucigalpa',
                'country' => 90,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            278 =>
            array(
                'id' => 779,
                'name' => 'Bacs-Kiskun',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            279 =>
            array(
                'id' => 780,
                'name' => 'Baranya',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            280 =>
            array(
                'id' => 781,
                'name' => 'Bekes',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            281 =>
            array(
                'id' => 782,
                'name' => 'Borsod-Abauj-Zemplen',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            282 =>
            array(
                'id' => 783,
                'name' => 'Budapest',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            283 =>
            array(
                'id' => 784,
                'name' => 'Csongrad',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            284 =>
            array(
                'id' => 785,
                'name' => 'Debrecen',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            285 =>
            array(
                'id' => 786,
                'name' => 'Fejer',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            286 =>
            array(
                'id' => 787,
                'name' => 'Gyor-Moson-Sopron',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            287 =>
            array(
                'id' => 788,
                'name' => 'Hajdu-Bihar',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            288 =>
            array(
                'id' => 789,
                'name' => 'Heves',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            289 =>
            array(
                'id' => 790,
                'name' => 'Komarom-Esztergom',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            290 =>
            array(
                'id' => 791,
                'name' => 'Miskolc',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            291 =>
            array(
                'id' => 792,
                'name' => 'Nograd',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            292 =>
            array(
                'id' => 793,
                'name' => 'Pecs',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            293 =>
            array(
                'id' => 794,
                'name' => 'Pest',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            294 =>
            array(
                'id' => 795,
                'name' => 'Somogy',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            295 =>
            array(
                'id' => 796,
                'name' => 'Szabolcs-Szatmar-Bereg',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            296 =>
            array(
                'id' => 797,
                'name' => 'Szeged',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            297 =>
            array(
                'id' => 798,
                'name' => 'Jasz-Nagykun-Szolnok',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            298 =>
            array(
                'id' => 799,
                'name' => 'Tolna',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            299 =>
            array(
                'id' => 800,
                'name' => 'Vas',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            300 =>
            array(
                'id' => 801,
                'name' => 'Veszprem',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            301 =>
            array(
                'id' => 802,
                'name' => 'Zala',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            302 =>
            array(
                'id' => 803,
                'name' => 'Gyor',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            303 =>
            array(
                'id' => 804,
                'name' => 'Veszprem',
                'country' => 92,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            304 =>
            array(
                'id' => 805,
                'name' => 'Delhi',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            305 =>
            array(
                'id' => 806,
                'name' => 'Bangala',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            306 =>
            array(
                'id' => 807,
                'name' => 'Chhattisgarh',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            307 =>
            array(
                'id' => 808,
                'name' => 'Karnataka',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            308 =>
            array(
                'id' => 809,
                'name' => 'Uttaranchal',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            309 =>
            array(
                'id' => 810,
                'name' => 'Andhara Pradesh',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            310 =>
            array(
                'id' => 811,
                'name' => 'Assam',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            311 =>
            array(
                'id' => 812,
                'name' => 'Bihar',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            312 =>
            array(
                'id' => 813,
                'name' => 'Gujarat',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            313 =>
            array(
                'id' => 814,
                'name' => 'Jammu and Kashmir',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            314 =>
            array(
                'id' => 815,
                'name' => 'Kerala',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            315 =>
            array(
                'id' => 816,
                'name' => 'Madhya Pradesh',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            316 =>
            array(
                'id' => 817,
                'name' => 'Manipur',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            317 =>
            array(
                'id' => 818,
                'name' => 'Maharashtra',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            318 =>
            array(
                'id' => 819,
                'name' => 'Megahalaya',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            319 =>
            array(
                'id' => 820,
                'name' => 'Orissa',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            320 =>
            array(
                'id' => 821,
                'name' => 'Punjab',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            321 =>
            array(
                'id' => 822,
                'name' => 'Pondisheri',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            322 =>
            array(
                'id' => 823,
                'name' => 'Rajasthan',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            323 =>
            array(
                'id' => 824,
                'name' => 'Tamil Nadu',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            324 =>
            array(
                'id' => 825,
                'name' => 'Tripura',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            325 =>
            array(
                'id' => 826,
                'name' => 'Uttar Pradesh',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            326 =>
            array(
                'id' => 827,
                'name' => 'Haryana',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            327 =>
            array(
                'id' => 828,
                'name' => 'Chandigarh',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            328 =>
            array(
                'id' => 829,
                'name' => 'India',
                'country' => 93,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            329 =>
            array(
                'id' => 830,
                'name' => 'Husistan',
                'country' => 95,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            330 =>
            array(
                'id' => 831,
                'name' => 'Azarbayjan-e Khavari',
                'country' => 95,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            331 =>
            array(
                'id' => 832,
                'name' => 'Esfahan',
                'country' => 95,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            332 =>
            array(
                'id' => 833,
                'name' => 'Hamadan',
                'country' => 95,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            333 =>
            array(
                'id' => 834,
                'name' => 'Kordestan',
                'country' => 95,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            334 =>
            array(
                'id' => 835,
                'name' => 'Markazi',
                'country' => 95,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            335 =>
            array(
                'id' => 836,
                'name' => 'Sistan-e Baluches',
                'country' => 95,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            336 =>
            array(
                'id' => 837,
                'name' => 'Yazd',
                'country' => 95,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            337 =>
            array(
                'id' => 838,
                'name' => 'Kerman',
                'country' => 95,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            338 =>
            array(
                'id' => 839,
                'name' => 'Kermanshakhan',
                'country' => 95,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            339 =>
            array(
                'id' => 840,
                'name' => 'Mazenderan',
                'country' => 95,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            340 =>
            array(
                'id' => 841,
                'name' => 'Tehran',
                'country' => 95,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            341 =>
            array(
                'id' => 842,
                'name' => 'Fars',
                'country' => 95,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            342 =>
            array(
                'id' => 843,
                'name' => 'Horasan',
                'country' => 95,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            343 =>
            array(
                'id' => 844,
                'name' => 'Baghdad',
                'country' => 96,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            344 =>
            array(
                'id' => 845,
                'name' => 'Basra',
                'country' => 96,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            345 =>
            array(
                'id' => 846,
                'name' => 'Mosul',
                'country' => 96,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            346 =>
            array(
                'id' => 847,
                'name' => 'Dublin',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            347 =>
            array(
                'id' => 848,
                'name' => 'Galway',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            348 =>
            array(
                'id' => 849,
                'name' => 'Kildare',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            349 =>
            array(
                'id' => 850,
                'name' => 'Leitrim',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            350 =>
            array(
                'id' => 851,
                'name' => 'Limerick',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            351 =>
            array(
                'id' => 852,
                'name' => 'Mayo',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            352 =>
            array(
                'id' => 853,
                'name' => 'Meath',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            353 =>
            array(
                'id' => 854,
                'name' => 'Carlow',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            354 =>
            array(
                'id' => 855,
                'name' => 'Kilkenny',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            355 =>
            array(
                'id' => 856,
                'name' => 'Laois',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            356 =>
            array(
                'id' => 857,
                'name' => 'Longford',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            357 =>
            array(
                'id' => 858,
                'name' => 'Louth',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            358 =>
            array(
                'id' => 859,
                'name' => 'Offaly',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            359 =>
            array(
                'id' => 860,
                'name' => 'Westmeath',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            360 =>
            array(
                'id' => 861,
                'name' => 'Wexford',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            361 =>
            array(
                'id' => 862,
                'name' => 'Wicklow',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            362 =>
            array(
                'id' => 863,
                'name' => 'Roscommon',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            363 =>
            array(
                'id' => 864,
                'name' => 'Sligo',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            364 =>
            array(
                'id' => 865,
                'name' => 'Clare',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            365 =>
            array(
                'id' => 866,
                'name' => 'Cork',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            366 =>
            array(
                'id' => 867,
                'name' => 'Kerry',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            367 =>
            array(
                'id' => 868,
                'name' => 'Tipperary',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            368 =>
            array(
                'id' => 869,
                'name' => 'Waterford',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            369 =>
            array(
                'id' => 870,
                'name' => 'Cavan',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            370 =>
            array(
                'id' => 871,
                'name' => 'Donegal',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            371 =>
            array(
                'id' => 872,
                'name' => 'Monaghan',
                'country' => 97,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            372 =>
            array(
                'id' => 873,
                'name' => 'Kingston',
                'country' => 101,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            373 =>
            array(
                'id' => 874,
                'name' => 'Akureyri',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            374 =>
            array(
                'id' => 875,
                'name' => 'Arnessysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            375 =>
            array(
                'id' => 876,
                'name' => 'Austur-Bardastrandarsysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            376 =>
            array(
                'id' => 877,
                'name' => 'Austur-Hunavatnssysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            377 =>
            array(
                'id' => 878,
                'name' => 'Austur-Skaftafellssysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            378 =>
            array(
                'id' => 879,
                'name' => 'Borgarfjardarsysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            379 =>
            array(
                'id' => 880,
                'name' => 'Dalasysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            380 =>
            array(
                'id' => 881,
                'name' => 'Eyjafjardarsysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            381 =>
            array(
                'id' => 882,
                'name' => 'Gullbringusysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            382 =>
            array(
                'id' => 883,
                'name' => 'Hafnarfjordur',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            383 =>
            array(
                'id' => 884,
                'name' => 'Kjosarsysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            384 =>
            array(
                'id' => 885,
                'name' => 'Kopavogur',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            385 =>
            array(
                'id' => 886,
                'name' => 'Myrasysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            386 =>
            array(
                'id' => 887,
                'name' => 'Neskaupstadur',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            387 =>
            array(
                'id' => 888,
                'name' => 'Nordur-Isafjardarsysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            388 =>
            array(
                'id' => 889,
                'name' => 'Nordur-Mulasysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            389 =>
            array(
                'id' => 890,
                'name' => 'Nordur-Tingeyjarsysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            390 =>
            array(
                'id' => 891,
                'name' => 'Olafsfjordur',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            391 =>
            array(
                'id' => 892,
                'name' => 'Rangarvallasysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            392 =>
            array(
                'id' => 893,
                'name' => 'Reykjavik',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            393 =>
            array(
                'id' => 894,
                'name' => 'Saudarkrokur',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            394 =>
            array(
                'id' => 895,
                'name' => 'Seydisfjordur',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            395 =>
            array(
                'id' => 896,
                'name' => 'Skagafjardarsysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            396 =>
            array(
                'id' => 897,
                'name' => 'Snafellsnes- og Hnappadalssysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            397 =>
            array(
                'id' => 898,
                'name' => 'Strandasysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            398 =>
            array(
                'id' => 899,
                'name' => 'Sudur-Mulasysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            399 =>
            array(
                'id' => 900,
                'name' => 'Sudur-Tingeyjarsysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            400 =>
            array(
                'id' => 901,
                'name' => 'Vestmannaeyjar',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            401 =>
            array(
                'id' => 902,
                'name' => 'Vestur-Bardastrandarsysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            402 =>
            array(
                'id' => 903,
                'name' => 'Vestur-Isafjardarsysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            403 =>
            array(
                'id' => 904,
                'name' => 'Vestur-Skaftafellssysla',
                'country' => 102,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            404 =>
            array(
                'id' => 905,
                'name' => 'Hamilton',
                'country' => 103,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            405 =>
            array(
                'id' => 906,
                'name' => 'Avarua',
                'country' => 106,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            406 =>
            array(
                'id' => 907,
                'name' => 'Torshavn',
                'country' => 108,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            407 =>
            array(
                'id' => 908,
                'name' => 'Maldives',
                'country' => 111,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            408 =>
            array(
                'id' => 909,
                'name' => 'Isle of Man',
                'country' => 113,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            409 =>
            array(
                'id' => 910,
                'name' => 'Adamstown',
                'country' => 115,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            410 =>
            array(
                'id' => 911,
                'name' => 'Grand Turk',
                'country' => 117,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            411 =>
            array(
                'id' => 912,
                'name' => 'Road Town',
                'country' => 119,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            412 =>
            array(
                'id' => 913,
                'name' => 'Southern District',
                'country' => 121,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            413 =>
            array(
                'id' => 914,
                'name' => 'Central District',
                'country' => 121,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            414 =>
            array(
                'id' => 915,
                'name' => 'Northern District',
                'country' => 121,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            415 =>
            array(
                'id' => 916,
                'name' => 'Haifa',
                'country' => 121,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            416 =>
            array(
                'id' => 917,
                'name' => 'Tel Aviv',
                'country' => 121,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            417 =>
            array(
                'id' => 918,
                'name' => 'Jerusalem',
                'country' => 121,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            418 =>
            array(
                'id' => 919,
                'name' => 'Ramat Hagolan',
                'country' => 121,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            419 =>
            array(
                'id' => 920,
                'name' => 'Piemonte - Torino',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            420 =>
            array(
                'id' => 921,
                'name' => 'Piemonte - Alessandria',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            421 =>
            array(
                'id' => 922,
                'name' => 'Piemonte - Asti',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            422 =>
            array(
                'id' => 923,
                'name' => 'Piemonte - Biella',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            423 =>
            array(
                'id' => 924,
                'name' => 'Piemonte - Cuneo',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            424 =>
            array(
                'id' => 925,
                'name' => 'Piemonte - Novara',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            425 =>
            array(
                'id' => 926,
                'name' => 'Piemonte - Verbania',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            426 =>
            array(
                'id' => 927,
                'name' => 'Piemonte - Vercelli',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            427 =>
            array(
                'id' => 928,
                'name' => 'Valle dAosta - Aosta',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            428 =>
            array(
                'id' => 929,
                'name' => 'Lombardia - Milano',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            429 =>
            array(
                'id' => 930,
                'name' => 'Lombardia - Bergamo',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            430 =>
            array(
                'id' => 931,
                'name' => 'Lombardia - Brescia',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            431 =>
            array(
                'id' => 932,
                'name' => 'Lombardia - Como',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            432 =>
            array(
                'id' => 933,
                'name' => 'Lombardia - Cremona',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            433 =>
            array(
                'id' => 934,
                'name' => 'Lombardia - Lecco',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            434 =>
            array(
                'id' => 935,
                'name' => 'Lombardia - Lodi',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            435 =>
            array(
                'id' => 936,
                'name' => 'Lombardia - Mantova',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            436 =>
            array(
                'id' => 937,
                'name' => 'Lombardia - Pavia',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            437 =>
            array(
                'id' => 938,
                'name' => 'Lombardia - Sondrio',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            438 =>
            array(
                'id' => 939,
                'name' => 'Lombardia - Varese',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            439 =>
            array(
                'id' => 940,
                'name' => 'Trentino Alto Adige - Trento',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            440 =>
            array(
                'id' => 941,
                'name' => 'Trentino Alto Adige - Bolzano',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            441 =>
            array(
                'id' => 942,
                'name' => 'Veneto - Venezia',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            442 =>
            array(
                'id' => 943,
                'name' => 'Veneto - Belluno',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            443 =>
            array(
                'id' => 944,
                'name' => 'Veneto - Padova',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            444 =>
            array(
                'id' => 945,
                'name' => 'Veneto - Rovigo',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            445 =>
            array(
                'id' => 946,
                'name' => 'Veneto - Treviso',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            446 =>
            array(
                'id' => 947,
                'name' => 'Veneto - Verona',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            447 =>
            array(
                'id' => 948,
                'name' => 'Veneto - Vicenza',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            448 =>
            array(
                'id' => 949,
                'name' => 'Friuli Venezia Giulia - Trieste',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            449 =>
            array(
                'id' => 950,
                'name' => 'Friuli Venezia Giulia - Gorizia',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            450 =>
            array(
                'id' => 951,
                'name' => 'Friuli Venezia Giulia - Pordenone',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            451 =>
            array(
                'id' => 952,
                'name' => 'Friuli Venezia Giulia - Udine',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            452 =>
            array(
                'id' => 953,
                'name' => 'Liguria - Genova',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            453 =>
            array(
                'id' => 954,
                'name' => 'Liguria - Imperia',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            454 =>
            array(
                'id' => 955,
                'name' => 'Liguria - La Spezia',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            455 =>
            array(
                'id' => 956,
                'name' => 'Liguria - Savona',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            456 =>
            array(
                'id' => 957,
                'name' => 'Emilia Romagna - Bologna',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            457 =>
            array(
                'id' => 958,
                'name' => 'Emilia Romagna - Ferrara',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            458 =>
            array(
                'id' => 959,
                'name' => 'Emilia Romagna - Forlì-Cesena',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            459 =>
            array(
                'id' => 960,
                'name' => 'Emilia Romagna - Modena',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            460 =>
            array(
                'id' => 961,
                'name' => 'Emilia Romagna - Parma',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            461 =>
            array(
                'id' => 962,
                'name' => 'Emilia Romagna - Piacenza',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            462 =>
            array(
                'id' => 963,
                'name' => 'Emilia Romagna - Ravenna',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            463 =>
            array(
                'id' => 964,
                'name' => 'Emilia Romagna - Reggio Emilia',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            464 =>
            array(
                'id' => 965,
                'name' => 'Emilia Romagna - Rimini',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            465 =>
            array(
                'id' => 966,
                'name' => 'Toscana - Firenze',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            466 =>
            array(
                'id' => 967,
                'name' => 'Toscana - Arezzo',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            467 =>
            array(
                'id' => 968,
                'name' => 'Toscana - Grosseto',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            468 =>
            array(
                'id' => 969,
                'name' => 'Toscana - Livorno',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            469 =>
            array(
                'id' => 970,
                'name' => 'Toscana - Lucca',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            470 =>
            array(
                'id' => 971,
                'name' => 'Toscana - Massa Carrara',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            471 =>
            array(
                'id' => 972,
                'name' => 'Toscana - Pisa',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            472 =>
            array(
                'id' => 973,
                'name' => 'Toscana - Pistoia',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            473 =>
            array(
                'id' => 974,
                'name' => 'Toscana - Prato',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            474 =>
            array(
                'id' => 975,
                'name' => 'Toscana - Siena',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            475 =>
            array(
                'id' => 976,
                'name' => 'Umbria - Perugia',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            476 =>
            array(
                'id' => 977,
                'name' => 'Umbria - Terni',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            477 =>
            array(
                'id' => 978,
                'name' => 'Marche - Ancona',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            478 =>
            array(
                'id' => 979,
                'name' => 'Marche - Ascoli Piceno',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            479 =>
            array(
                'id' => 980,
                'name' => 'Marche - Macerata',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            480 =>
            array(
                'id' => 981,
                'name' => 'Marche - Pesaro - Urbino',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            481 =>
            array(
                'id' => 982,
                'name' => 'Lazio - Roma',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            482 =>
            array(
                'id' => 983,
                'name' => 'Lazio - Frosinone',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            483 =>
            array(
                'id' => 984,
                'name' => 'Lazio - Latina',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            484 =>
            array(
                'id' => 985,
                'name' => 'Lazio - Rieti',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            485 =>
            array(
                'id' => 986,
                'name' => 'Lazio - Viterbo',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            486 =>
            array(
                'id' => 987,
                'name' => 'Abruzzo - L´Aquila',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            487 =>
            array(
                'id' => 988,
                'name' => 'Abruzzo - Chieti',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            488 =>
            array(
                'id' => 989,
                'name' => 'Abruzzo - Pescara',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            489 =>
            array(
                'id' => 990,
                'name' => 'Abruzzo - Teramo',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            490 =>
            array(
                'id' => 991,
                'name' => 'Molise - Campobasso',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            491 =>
            array(
                'id' => 992,
                'name' => 'Molise - Isernia',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            492 =>
            array(
                'id' => 993,
                'name' => 'Campania - Napoli',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            493 =>
            array(
                'id' => 994,
                'name' => 'Campania - Avellino',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            494 =>
            array(
                'id' => 995,
                'name' => 'Campania - Benevento',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            495 =>
            array(
                'id' => 996,
                'name' => 'Campania - Caserta',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            496 =>
            array(
                'id' => 997,
                'name' => 'Campania - Salerno',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            497 =>
            array(
                'id' => 998,
                'name' => 'Puglia - Bari',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            498 =>
            array(
                'id' => 999,
                'name' => 'Puglia - Brindisi',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            499 =>
            array(
                'id' => 1000,
                'name' => 'Puglia - Foggia',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
        ));
        \DB::table('country_states')->insert(array(
            0 =>
            array(
                'id' => 1001,
                'name' => 'Puglia - Lecce',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id' => 1002,
                'name' => 'Puglia - Taranto',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id' => 1003,
                'name' => 'Basilicata - Potenza',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'id' => 1004,
                'name' => 'Basilicata - Matera',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            4 =>
            array(
                'id' => 1005,
                'name' => 'Calabria - Catanzaro',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            5 =>
            array(
                'id' => 1006,
                'name' => 'Calabria - Cosenza',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            6 =>
            array(
                'id' => 1007,
                'name' => 'Calabria - Crotone',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            7 =>
            array(
                'id' => 1008,
                'name' => 'Calabria - Reggio Calabria',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            8 =>
            array(
                'id' => 1009,
                'name' => 'Calabria - Vibo Valentia',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            9 =>
            array(
                'id' => 1010,
                'name' => 'Sicilia - Palermo',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            10 =>
            array(
                'id' => 1011,
                'name' => 'Sicilia - Agrigento',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            11 =>
            array(
                'id' => 1012,
                'name' => 'Sicilia - Caltanissetta',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            12 =>
            array(
                'id' => 1013,
                'name' => 'Sicilia - Catania',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            13 =>
            array(
                'id' => 1014,
                'name' => 'Sicilia - Enna',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            14 =>
            array(
                'id' => 1015,
                'name' => 'Sicilia - Messina',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            15 =>
            array(
                'id' => 1016,
                'name' => 'Sicilia - Ragusa',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            16 =>
            array(
                'id' => 1017,
                'name' => 'Sicilia - Siracusa',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            17 =>
            array(
                'id' => 1018,
                'name' => 'Sicilia - Trapani',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            18 =>
            array(
                'id' => 1019,
                'name' => 'Sardegna - Cagliari',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            19 =>
            array(
                'id' => 1020,
                'name' => 'Sardegna - Nuoro',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            20 =>
            array(
                'id' => 1021,
                'name' => 'Sardegna - Oristano',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            21 =>
            array(
                'id' => 1022,
                'name' => 'Sardegna - Sassari',
                'country' => 122,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            22 =>
            array(
                'id' => 1023,
                'name' => 'Aichi',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            23 =>
            array(
                'id' => 1024,
                'name' => 'Akita',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            24 =>
            array(
                'id' => 1025,
                'name' => 'Aomori',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            25 =>
            array(
                'id' => 1026,
                'name' => 'Wakayama',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            26 =>
            array(
                'id' => 1027,
                'name' => 'Gifu',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            27 =>
            array(
                'id' => 1028,
                'name' => 'Gunma',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            28 =>
            array(
                'id' => 1029,
                'name' => 'Ibaraki',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            29 =>
            array(
                'id' => 1030,
                'name' => 'Iwate',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            30 =>
            array(
                'id' => 1031,
                'name' => 'Ishikawa',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            31 =>
            array(
                'id' => 1032,
                'name' => 'Kagawa',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            32 =>
            array(
                'id' => 1033,
                'name' => 'Kagoshima',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            33 =>
            array(
                'id' => 1034,
                'name' => 'Kanagawa',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            34 =>
            array(
                'id' => 1035,
                'name' => 'Kyoto',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            35 =>
            array(
                'id' => 1036,
                'name' => 'Kochi',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            36 =>
            array(
                'id' => 1037,
                'name' => 'Kumamoto',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            37 =>
            array(
                'id' => 1038,
                'name' => 'Mie',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            38 =>
            array(
                'id' => 1039,
                'name' => 'Miyagi',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            39 =>
            array(
                'id' => 1040,
                'name' => 'Miyazaki',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            40 =>
            array(
                'id' => 1041,
                'name' => 'Nagano',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            41 =>
            array(
                'id' => 1042,
                'name' => 'Nagasaki',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            42 =>
            array(
                'id' => 1043,
                'name' => 'Nara',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            43 =>
            array(
                'id' => 1044,
                'name' => 'Niigata',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            44 =>
            array(
                'id' => 1045,
                'name' => 'Okayama',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            45 =>
            array(
                'id' => 1046,
                'name' => 'Okinawa',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            46 =>
            array(
                'id' => 1047,
                'name' => 'Osaka',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            47 =>
            array(
                'id' => 1048,
                'name' => 'Saga',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            48 =>
            array(
                'id' => 1049,
                'name' => 'Saitama',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            49 =>
            array(
                'id' => 1050,
                'name' => 'Shiga',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            50 =>
            array(
                'id' => 1051,
                'name' => 'Shizuoka',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            51 =>
            array(
                'id' => 1052,
                'name' => 'Shimane',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            52 =>
            array(
                'id' => 1053,
                'name' => 'Tiba',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            53 =>
            array(
                'id' => 1054,
                'name' => 'Tokyo',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            54 =>
            array(
                'id' => 1055,
                'name' => 'Tokushima',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            55 =>
            array(
                'id' => 1056,
                'name' => 'Tochigi',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            56 =>
            array(
                'id' => 1057,
                'name' => 'Tottori',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            57 =>
            array(
                'id' => 1058,
                'name' => 'Toyama',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            58 =>
            array(
                'id' => 1059,
                'name' => 'Fukui',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            59 =>
            array(
                'id' => 1060,
                'name' => 'Fukuoka',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            60 =>
            array(
                'id' => 1061,
                'name' => 'Fukushima',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            61 =>
            array(
                'id' => 1062,
                'name' => 'Hiroshima',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            62 =>
            array(
                'id' => 1063,
                'name' => 'Hokkaido',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            63 =>
            array(
                'id' => 1064,
                'name' => 'Hyogo',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            64 =>
            array(
                'id' => 1065,
                'name' => 'Yoshimi',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            65 =>
            array(
                'id' => 1066,
                'name' => 'Yamagata',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            66 =>
            array(
                'id' => 1067,
                'name' => 'Yamaguchi',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            67 =>
            array(
                'id' => 1068,
                'name' => 'Yamanashi',
                'country' => 124,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            68 =>
            array(
                'id' => 1069,
                'name' => 'Saint Helier',
                'country' => 125,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            69 =>
            array(
                'id' => 1070,
                'name' => 'Jordan',
                'country' => 126,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            70 =>
            array(
                'id' => 1071,
                'name' => 'Aktyubinskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            71 =>
            array(
                'id' => 1072,
                'name' => 'Alma-Atinskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            72 =>
            array(
                'id' => 1073,
                'name' => 'Vostochno-Kazahstanskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            73 =>
            array(
                'id' => 1074,
                'name' => 'Gurevskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            74 =>
            array(
                'id' => 1075,
                'name' => 'Zhambylskaya obl. Dzhambulskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            75 =>
            array(
                'id' => 1076,
                'name' => 'Dzhezkazganskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            76 =>
            array(
                'id' => 1077,
                'name' => 'Karagandinskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            77 =>
            array(
                'id' => 1078,
                'name' => 'Kzyl-Ordinskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            78 =>
            array(
                'id' => 1079,
                'name' => 'Kokchetavskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            79 =>
            array(
                'id' => 1080,
                'name' => 'Kustanaiskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            80 =>
            array(
                'id' => 1081,
                'name' => 'Mangystauskaya Mangyshlakskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            81 =>
            array(
                'id' => 1082,
                'name' => 'Pavlodarskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            82 =>
            array(
                'id' => 1083,
                'name' => 'Severo-Kazahstanskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            83 =>
            array(
                'id' => 1084,
                'name' => 'Taldy-Kurganskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            84 =>
            array(
                'id' => 1085,
                'name' => 'Turgaiskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            85 =>
            array(
                'id' => 1086,
                'name' => 'Akmolinskaya obl. Tselinogradskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            86 =>
            array(
                'id' => 1087,
                'name' => 'Chimkentskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            87 =>
            array(
                'id' => 1088,
                'name' => 'Littoral',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            88 =>
            array(
                'id' => 1089,
                'name' => 'Southwest Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            89 =>
            array(
                'id' => 1090,
                'name' => 'North',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            90 =>
            array(
                'id' => 1091,
                'name' => 'Central',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            91 =>
            array(
                'id' => 1092,
                'name' => 'Government controlled area',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            92 =>
            array(
                'id' => 1093,
                'name' => 'Turkish controlled area',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            93 =>
            array(
                'id' => 1094,
                'name' => 'Issik Kulskaya Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            94 =>
            array(
                'id' => 1095,
                'name' => 'Kyrgyzstan',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            95 =>
            array(
                'id' => 1096,
                'name' => 'Narinskaya Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            96 =>
            array(
                'id' => 1097,
                'name' => 'Oshskaya Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            97 =>
            array(
                'id' => 1098,
                'name' => 'Tallaskaya Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            98 =>
            array(
                'id' => 1099,
                'name' => 'al-Jahra',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            99 =>
            array(
                'id' => 1100,
                'name' => 'al-Kuwait',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            100 =>
            array(
                'id' => 1101,
                'name' => 'Latviya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            101 =>
            array(
                'id' => 1102,
                'name' => 'Tarabulus',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            102 =>
            array(
                'id' => 1103,
                'name' => 'Bengasi',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            103 =>
            array(
                'id' => 1104,
                'name' => 'Litva',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            104 =>
            array(
                'id' => 1105,
                'name' => 'Moldova',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            105 =>
            array(
                'id' => 1106,
                'name' => 'Auckland',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            106 =>
            array(
                'id' => 1107,
                'name' => 'Bay of Plenty',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            107 =>
            array(
                'id' => 1108,
                'name' => 'Canterbury',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            108 =>
            array(
                'id' => 1109,
                'name' => 'Gisborne',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            109 =>
            array(
                'id' => 1110,
                'name' => 'Hawkes Bay',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            110 =>
            array(
                'id' => 1111,
                'name' => 'Manawatu-Wanganui',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            111 =>
            array(
                'id' => 1112,
                'name' => 'Marlborough',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            112 =>
            array(
                'id' => 1113,
                'name' => 'Nelson',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            113 =>
            array(
                'id' => 1114,
                'name' => 'Northland',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            114 =>
            array(
                'id' => 1115,
                'name' => 'Otago',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            115 =>
            array(
                'id' => 1116,
                'name' => 'Southland',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            116 =>
            array(
                'id' => 1117,
                'name' => 'Taranaki',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            117 =>
            array(
                'id' => 1118,
                'name' => 'Tasman',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            118 =>
            array(
                'id' => 1119,
                'name' => 'Waikato',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            119 =>
            array(
                'id' => 1120,
                'name' => 'Wellington',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            120 =>
            array(
                'id' => 1121,
                'name' => 'West Coast',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            121 =>
            array(
                'id' => 1122,
                'name' => 'Saint-Denis',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            122 =>
            array(
                'id' => 1123,
                'name' => 'Altaiskii krai',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            123 =>
            array(
                'id' => 1124,
                'name' => 'Amurskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            124 =>
            array(
                'id' => 1125,
                'name' => 'Arhangelskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            125 =>
            array(
                'id' => 1126,
                'name' => 'Astrahanskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            126 =>
            array(
                'id' => 1127,
                'name' => 'Bashkiriya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            127 =>
            array(
                'id' => 1128,
                'name' => 'Belgorodskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            128 =>
            array(
                'id' => 1129,
                'name' => 'Bryanskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            129 =>
            array(
                'id' => 1130,
                'name' => 'Buryatiya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            130 =>
            array(
                'id' => 1131,
                'name' => 'Vladimirskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            131 =>
            array(
                'id' => 1132,
                'name' => 'Volgogradskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            132 =>
            array(
                'id' => 1133,
                'name' => 'Vologodskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            133 =>
            array(
                'id' => 1134,
                'name' => 'Voronezhskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            134 =>
            array(
                'id' => 1135,
                'name' => 'Nizhegorodskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            135 =>
            array(
                'id' => 1136,
                'name' => 'Dagestan',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            136 =>
            array(
                'id' => 1137,
                'name' => 'Evreiskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            137 =>
            array(
                'id' => 1138,
                'name' => 'Ivanovskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            138 =>
            array(
                'id' => 1139,
                'name' => 'Irkutskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            139 =>
            array(
                'id' => 1140,
                'name' => 'Kabardino-Balkariya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            140 =>
            array(
                'id' => 1141,
                'name' => 'Kaliningradskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            141 =>
            array(
                'id' => 1142,
                'name' => 'Tverskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            142 =>
            array(
                'id' => 1143,
                'name' => 'Kalmykiya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            143 =>
            array(
                'id' => 1144,
                'name' => 'Kaluzhskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            144 =>
            array(
                'id' => 1145,
                'name' => 'Kamchatskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            145 =>
            array(
                'id' => 1146,
                'name' => 'Kareliya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            146 =>
            array(
                'id' => 1147,
                'name' => 'Kemerovskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            147 =>
            array(
                'id' => 1148,
                'name' => 'Kirovskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            148 =>
            array(
                'id' => 1149,
                'name' => 'Komi',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            149 =>
            array(
                'id' => 1150,
                'name' => 'Kostromskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            150 =>
            array(
                'id' => 1151,
                'name' => 'Krasnodarskii krai',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            151 =>
            array(
                'id' => 1152,
                'name' => 'Krasnoyarskii krai',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            152 =>
            array(
                'id' => 1153,
                'name' => 'Kurganskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            153 =>
            array(
                'id' => 1154,
                'name' => 'Kurskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            154 =>
            array(
                'id' => 1155,
                'name' => 'Lipetskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            155 =>
            array(
                'id' => 1156,
                'name' => 'Magadanskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            156 =>
            array(
                'id' => 1157,
                'name' => 'Marii El',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            157 =>
            array(
                'id' => 1158,
                'name' => 'Mordoviya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            158 =>
            array(
                'id' => 1159,
                'name' => 'Moscow amp Moscow Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            159 =>
            array(
                'id' => 1160,
                'name' => 'Murmanskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            160 =>
            array(
                'id' => 1161,
                'name' => 'Novgorodskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            161 =>
            array(
                'id' => 1162,
                'name' => 'Novosibirskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            162 =>
            array(
                'id' => 1163,
                'name' => 'Omskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            163 =>
            array(
                'id' => 1164,
                'name' => 'Orenburgskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            164 =>
            array(
                'id' => 1165,
                'name' => 'Orlovskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            165 =>
            array(
                'id' => 1166,
                'name' => 'Penzenskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            166 =>
            array(
                'id' => 1167,
                'name' => 'Permskiy krai',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            167 =>
            array(
                'id' => 1168,
                'name' => 'Primorskii krai',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            168 =>
            array(
                'id' => 1169,
                'name' => 'Pskovskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            169 =>
            array(
                'id' => 1170,
                'name' => 'Rostovskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            170 =>
            array(
                'id' => 1171,
                'name' => 'Ryazanskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            171 =>
            array(
                'id' => 1172,
                'name' => 'Samarskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            172 =>
            array(
                'id' => 1173,
                'name' => 'Saint-Petersburg and Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            173 =>
            array(
                'id' => 1174,
                'name' => 'Saratovskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            174 =>
            array(
                'id' => 1175,
                'name' => 'Saha (Yakutiya)',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            175 =>
            array(
                'id' => 1176,
                'name' => 'Sahalin',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            176 =>
            array(
                'id' => 1177,
                'name' => 'Sverdlovskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            177 =>
            array(
                'id' => 1178,
                'name' => 'Severnaya Osetiya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            178 =>
            array(
                'id' => 1179,
                'name' => 'Smolenskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            179 =>
            array(
                'id' => 1180,
                'name' => 'Stavropolskii krai',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            180 =>
            array(
                'id' => 1181,
                'name' => 'Tambovskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            181 =>
            array(
                'id' => 1182,
                'name' => 'Tatarstan',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            182 =>
            array(
                'id' => 1183,
                'name' => 'Tomskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            183 =>
            array(
                'id' => 1184,
                'name' => 'Tulskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            184 =>
            array(
                'id' => 1185,
                'name' => 'Tyumenskaya obl. i Hanty-Mansiiskii AO',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            185 =>
            array(
                'id' => 1186,
                'name' => 'Udmurtiya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            186 =>
            array(
                'id' => 1187,
                'name' => 'Ulyanovskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            187 =>
            array(
                'id' => 1188,
                'name' => 'Uralskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            188 =>
            array(
                'id' => 1189,
                'name' => 'Habarovskii krai',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            189 =>
            array(
                'id' => 1190,
                'name' => 'Chelyabinskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            190 =>
            array(
                'id' => 1191,
                'name' => 'Checheno-Ingushetiya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            191 =>
            array(
                'id' => 1192,
                'name' => 'Chitinskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            192 =>
            array(
                'id' => 1193,
                'name' => 'Chuvashiya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            193 =>
            array(
                'id' => 1194,
                'name' => 'Yaroslavskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            194 =>
            array(
                'id' => 1195,
                'name' => 'Ahuachapán',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            195 =>
            array(
                'id' => 1196,
                'name' => 'Cuscatlán',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            196 =>
            array(
                'id' => 1197,
                'name' => 'La Libertad',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            197 =>
            array(
                'id' => 1198,
                'name' => 'La Paz',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            198 =>
            array(
                'id' => 1199,
                'name' => 'La Unión',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            199 =>
            array(
                'id' => 1200,
                'name' => 'San Miguel',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            200 =>
            array(
                'id' => 1201,
                'name' => 'San Salvador',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            201 =>
            array(
                'id' => 1202,
                'name' => 'Santa Ana',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            202 =>
            array(
                'id' => 1203,
                'name' => 'Sonsonate',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            203 =>
            array(
                'id' => 1204,
                'name' => 'Paramaribo',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            204 =>
            array(
                'id' => 1205,
                'name' => 'Gorno-Badakhshan Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            205 =>
            array(
                'id' => 1206,
                'name' => 'Kuljabsk Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            206 =>
            array(
                'id' => 1207,
                'name' => 'Kurgan-Tjube Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            207 =>
            array(
                'id' => 1208,
                'name' => 'Sughd Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            208 =>
            array(
                'id' => 1209,
                'name' => 'Tajikistan',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            209 =>
            array(
                'id' => 1210,
                'name' => 'Ashgabat Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            210 =>
            array(
                'id' => 1211,
                'name' => 'Krasnovodsk Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            211 =>
            array(
                'id' => 1212,
                'name' => 'Mary Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            212 =>
            array(
                'id' => 1213,
                'name' => 'Tashauz Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            213 =>
            array(
                'id' => 1214,
                'name' => 'Chardzhou Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            214 =>
            array(
                'id' => 1215,
                'name' => 'Grand Turk',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            215 =>
            array(
                'id' => 1216,
                'name' => 'Bartin',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            216 =>
            array(
                'id' => 1217,
                'name' => 'Bayburt',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            217 =>
            array(
                'id' => 1218,
                'name' => 'Karabuk',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            218 =>
            array(
                'id' => 1219,
                'name' => 'Adana',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            219 =>
            array(
                'id' => 1220,
                'name' => 'Aydin',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            220 =>
            array(
                'id' => 1221,
                'name' => 'Amasya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            221 =>
            array(
                'id' => 1222,
                'name' => 'Ankara',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            222 =>
            array(
                'id' => 1223,
                'name' => 'Antalya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            223 =>
            array(
                'id' => 1224,
                'name' => 'Artvin',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            224 =>
            array(
                'id' => 1225,
                'name' => 'Afion',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            225 =>
            array(
                'id' => 1226,
                'name' => 'Balikesir',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            226 =>
            array(
                'id' => 1227,
                'name' => 'Bilecik',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            227 =>
            array(
                'id' => 1228,
                'name' => 'Bursa',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            228 =>
            array(
                'id' => 1229,
                'name' => 'Gaziantep',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            229 =>
            array(
                'id' => 1230,
                'name' => 'Denizli',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            230 =>
            array(
                'id' => 1231,
                'name' => 'Izmir',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            231 =>
            array(
                'id' => 1232,
                'name' => 'Isparta',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            232 =>
            array(
                'id' => 1233,
                'name' => 'Icel',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            233 =>
            array(
                'id' => 1234,
                'name' => 'Kayseri',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            234 =>
            array(
                'id' => 1235,
                'name' => 'Kars',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            235 =>
            array(
                'id' => 1236,
                'name' => 'Kodjaeli',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            236 =>
            array(
                'id' => 1237,
                'name' => 'Konya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            237 =>
            array(
                'id' => 1238,
                'name' => 'Kirklareli',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            238 =>
            array(
                'id' => 1239,
                'name' => 'Kutahya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            239 =>
            array(
                'id' => 1240,
                'name' => 'Malatya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            240 =>
            array(
                'id' => 1241,
                'name' => 'Manisa',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            241 =>
            array(
                'id' => 1242,
                'name' => 'Sakarya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            242 =>
            array(
                'id' => 1243,
                'name' => 'Samsun',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            243 =>
            array(
                'id' => 1244,
                'name' => 'Sivas',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            244 =>
            array(
                'id' => 1245,
                'name' => 'Istanbul',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            245 =>
            array(
                'id' => 1246,
                'name' => 'Trabzon',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            246 =>
            array(
                'id' => 1247,
                'name' => 'Corum',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            247 =>
            array(
                'id' => 1248,
                'name' => 'Edirne',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            248 =>
            array(
                'id' => 1249,
                'name' => 'Elazig',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            249 =>
            array(
                'id' => 1250,
                'name' => 'Erzincan',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            250 =>
            array(
                'id' => 1251,
                'name' => 'Erzurum',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            251 =>
            array(
                'id' => 1252,
                'name' => 'Eskisehir',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            252 =>
            array(
                'id' => 1253,
                'name' => 'Jinja',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            253 =>
            array(
                'id' => 1254,
                'name' => 'Kampala',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            254 =>
            array(
                'id' => 1255,
                'name' => 'Andijon Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            255 =>
            array(
                'id' => 1256,
                'name' => 'Buxoro Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            256 =>
            array(
                'id' => 1257,
                'name' => 'Jizzac Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            257 =>
            array(
                'id' => 1258,
                'name' => 'Qaraqalpaqstan',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            258 =>
            array(
                'id' => 1259,
                'name' => 'Qashqadaryo Región',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            259 =>
            array(
                'id' => 1260,
                'name' => 'Navoiy Región',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            260 =>
            array(
                'id' => 1261,
                'name' => 'Namangan Región',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            261 =>
            array(
                'id' => 1262,
                'name' => 'Samarkand Región',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            262 =>
            array(
                'id' => 1263,
                'name' => 'Surxondaryo Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            263 =>
            array(
                'id' => 1264,
                'name' => 'Sirdaryo Region',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            264 =>
            array(
                'id' => 1265,
                'name' => 'Tashkent Región',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            265 =>
            array(
                'id' => 1266,
                'name' => 'Fergana Región',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            266 =>
            array(
                'id' => 1267,
                'name' => 'Xorazm Región',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            267 =>
            array(
                'id' => 1268,
                'name' => 'Vinnitskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            268 =>
            array(
                'id' => 1269,
                'name' => 'Volynskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            269 =>
            array(
                'id' => 1270,
                'name' => 'Dnepropetrovskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            270 =>
            array(
                'id' => 1271,
                'name' => 'Donetskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            271 =>
            array(
                'id' => 1272,
                'name' => 'Zhitomirskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            272 =>
            array(
                'id' => 1273,
                'name' => 'Zakarpatskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            273 =>
            array(
                'id' => 1274,
                'name' => 'Zaporozhskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            274 =>
            array(
                'id' => 1275,
                'name' => 'Ivano-Frankovskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            275 =>
            array(
                'id' => 1276,
                'name' => 'Kievskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            276 =>
            array(
                'id' => 1277,
                'name' => 'Kirovogradskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            277 =>
            array(
                'id' => 1278,
                'name' => 'Krymskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            278 =>
            array(
                'id' => 1279,
                'name' => 'Luganskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            279 =>
            array(
                'id' => 1280,
                'name' => 'Lvovskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            280 =>
            array(
                'id' => 1281,
                'name' => 'Nikolaevskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            281 =>
            array(
                'id' => 1282,
                'name' => 'Odesskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            282 =>
            array(
                'id' => 1283,
                'name' => 'Poltavskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            283 =>
            array(
                'id' => 1284,
                'name' => 'Rovenskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            284 =>
            array(
                'id' => 1285,
                'name' => 'Sumskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            285 =>
            array(
                'id' => 1286,
                'name' => 'Ternopolskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            286 =>
            array(
                'id' => 1287,
                'name' => 'Harkovskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            287 =>
            array(
                'id' => 1288,
                'name' => 'Hersonskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            288 =>
            array(
                'id' => 1289,
                'name' => 'Hmelnitskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            289 =>
            array(
                'id' => 1290,
                'name' => 'Cherkasskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            290 =>
            array(
                'id' => 1291,
                'name' => 'Chernigovskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            291 =>
            array(
                'id' => 1292,
                'name' => 'Chernovitskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            292 =>
            array(
                'id' => 1293,
                'name' => 'Estoniya',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            293 =>
            array(
                'id' => 1294,
                'name' => 'Cheju',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            294 =>
            array(
                'id' => 1295,
                'name' => 'Chollabuk',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            295 =>
            array(
                'id' => 1296,
                'name' => 'Chollanam',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            296 =>
            array(
                'id' => 1297,
                'name' => 'Chungcheongbuk',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            297 =>
            array(
                'id' => 1298,
                'name' => 'Chungcheongnam',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            298 =>
            array(
                'id' => 1299,
                'name' => 'Incheon',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            299 =>
            array(
                'id' => 1300,
                'name' => 'Kangweon',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            300 =>
            array(
                'id' => 1301,
                'name' => 'Kwangju',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            301 =>
            array(
                'id' => 1302,
                'name' => 'Kyeonggi',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            302 =>
            array(
                'id' => 1303,
                'name' => 'Kyeongsangbuk',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            303 =>
            array(
                'id' => 1304,
                'name' => 'Kyeongsangnam',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            304 =>
            array(
                'id' => 1305,
                'name' => 'Pusan',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            305 =>
            array(
                'id' => 1306,
                'name' => 'Seoul',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            306 =>
            array(
                'id' => 1307,
                'name' => 'Taegu',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            307 =>
            array(
                'id' => 1308,
                'name' => 'Taejeon',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            308 =>
            array(
                'id' => 1309,
                'name' => 'Ulsan',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            309 =>
            array(
                'id' => 1310,
                'name' => 'Aichi',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            310 =>
            array(
                'id' => 1311,
                'name' => 'Akita',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            311 =>
            array(
                'id' => 1312,
                'name' => 'Aomori',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            312 =>
            array(
                'id' => 1313,
                'name' => 'Wakayama',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            313 =>
            array(
                'id' => 1314,
                'name' => 'Gifu',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            314 =>
            array(
                'id' => 1315,
                'name' => 'Gunma',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            315 =>
            array(
                'id' => 1316,
                'name' => 'Ibaraki',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            316 =>
            array(
                'id' => 1317,
                'name' => 'Iwate',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            317 =>
            array(
                'id' => 1318,
                'name' => 'Ishikawa',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            318 =>
            array(
                'id' => 1319,
                'name' => 'Kagawa',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            319 =>
            array(
                'id' => 1320,
                'name' => 'Kagoshima',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            320 =>
            array(
                'id' => 1321,
                'name' => 'Kanagawa',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            321 =>
            array(
                'id' => 1322,
                'name' => 'Kyoto',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            322 =>
            array(
                'id' => 1323,
                'name' => 'Kochi',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            323 =>
            array(
                'id' => 1324,
                'name' => 'Kumamoto',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            324 =>
            array(
                'id' => 1325,
                'name' => 'Mie',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            325 =>
            array(
                'id' => 1326,
                'name' => 'Miyagi',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            326 =>
            array(
                'id' => 1327,
                'name' => 'Miyazaki',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            327 =>
            array(
                'id' => 1328,
                'name' => 'Nagano',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            328 =>
            array(
                'id' => 1329,
                'name' => 'Nagasaki',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            329 =>
            array(
                'id' => 1330,
                'name' => 'Nara',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            330 =>
            array(
                'id' => 1331,
                'name' => 'Niigata',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            331 =>
            array(
                'id' => 1332,
                'name' => 'Okayama',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            332 =>
            array(
                'id' => 1333,
                'name' => 'Okinawa',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            333 =>
            array(
                'id' => 1334,
                'name' => 'Osaka',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            334 =>
            array(
                'id' => 1335,
                'name' => 'Saga',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            335 =>
            array(
                'id' => 1336,
                'name' => 'Saitama',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            336 =>
            array(
                'id' => 1337,
                'name' => 'Shiga',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            337 =>
            array(
                'id' => 1338,
                'name' => 'Shizuoka',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            338 =>
            array(
                'id' => 1339,
                'name' => 'Shimane',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            339 =>
            array(
                'id' => 1340,
                'name' => 'Tiba',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            340 =>
            array(
                'id' => 1341,
                'name' => 'Tokyo',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            341 =>
            array(
                'id' => 1342,
                'name' => 'Tokushima',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            342 =>
            array(
                'id' => 1343,
                'name' => 'Tochigi',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            343 =>
            array(
                'id' => 1344,
                'name' => 'Tottori',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            344 =>
            array(
                'id' => 1345,
                'name' => 'Toyama',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            345 =>
            array(
                'id' => 1346,
                'name' => 'Fukui',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            346 =>
            array(
                'id' => 1347,
                'name' => 'Fukuoka',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            347 =>
            array(
                'id' => 1348,
                'name' => 'Fukushima',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            348 =>
            array(
                'id' => 1349,
                'name' => 'Hiroshima',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            349 =>
            array(
                'id' => 1350,
                'name' => 'Hokkaido',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            350 =>
            array(
                'id' => 1351,
                'name' => 'Hyogo',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            351 =>
            array(
                'id' => 1352,
                'name' => 'Yoshimi',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            352 =>
            array(
                'id' => 1353,
                'name' => 'Yamagata',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            353 =>
            array(
                'id' => 1354,
                'name' => 'Yamaguchi',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            354 =>
            array(
                'id' => 1355,
                'name' => 'Yamanashi',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            355 =>
            array(
                'id' => 1356,
                'name' => 'Hong Kong',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            356 =>
            array(
                'id' => 1357,
                'name' => 'Indonesia',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            357 =>
            array(
                'id' => 1358,
                'name' => 'Jordan',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            358 =>
            array(
                'id' => 1359,
                'name' => 'Malaysia',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            359 =>
            array(
                'id' => 1360,
                'name' => 'Singapore',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            360 =>
            array(
                'id' => 1361,
                'name' => 'Taiwan',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            361 =>
            array(
                'id' => 1362,
                'name' => 'Kazahstan',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            362 =>
            array(
                'id' => 1363,
                'name' => 'Ukraina',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            363 =>
            array(
                'id' => 1364,
                'name' => 'India',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            364 =>
            array(
                'id' => 1365,
                'name' => 'Egypt',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            365 =>
            array(
                'id' => 1366,
                'name' => 'Damascus',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            366 =>
            array(
                'id' => 1367,
                'name' => 'Isle of Man',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            367 =>
            array(
                'id' => 1368,
                'name' => 'Zapadno-Kazahstanskaya obl.',
                'country' => 127,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            368 =>
            array(
                'id' => 1369,
                'name' => 'Central',
                'country' => 128,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            369 =>
            array(
                'id' => 1370,
                'name' => 'Coast',
                'country' => 128,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            370 =>
            array(
                'id' => 1371,
                'name' => 'Eastern',
                'country' => 128,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            371 =>
            array(
                'id' => 1372,
                'name' => 'Nairobi Area',
                'country' => 128,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            372 =>
            array(
                'id' => 1373,
                'name' => 'North-Eastern',
                'country' => 128,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            373 =>
            array(
                'id' => 1374,
                'name' => 'Nyanza',
                'country' => 128,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            374 =>
            array(
                'id' => 1375,
                'name' => 'Rift Valley',
                'country' => 128,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            375 =>
            array(
                'id' => 1376,
                'name' => 'Western',
                'country' => 128,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            376 =>
            array(
                'id' => 1377,
                'name' => 'Issik Kulskaya Region',
                'country' => 129,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            377 =>
            array(
                'id' => 1378,
                'name' => 'Kyrgyzstan',
                'country' => 129,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            378 =>
            array(
                'id' => 1379,
                'name' => 'Narinskaya Region',
                'country' => 129,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            379 =>
            array(
                'id' => 1380,
                'name' => 'Oshskaya Region',
                'country' => 129,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            380 =>
            array(
                'id' => 1381,
                'name' => 'Tallaskaya Region',
                'country' => 129,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            381 =>
            array(
                'id' => 1382,
                'name' => 'Gilbert Islands',
                'country' => 130,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            382 =>
            array(
                'id' => 1383,
                'name' => 'Line Islands',
                'country' => 130,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            383 =>
            array(
                'id' => 1384,
                'name' => 'Phoenix Islands',
                'country' => 130,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            384 =>
            array(
                'id' => 1385,
                'name' => 'al-Jahra',
                'country' => 131,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            385 =>
            array(
                'id' => 1386,
                'name' => 'al-Kuwait',
                'country' => 131,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            386 =>
            array(
                'id' => 1387,
                'name' => 'Beirut',
                'country' => 132,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            387 =>
            array(
                'id' => 1388,
                'name' => 'Tarabulus',
                'country' => 137,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            388 =>
            array(
                'id' => 1389,
                'name' => 'Bengasi',
                'country' => 137,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            389 =>
            array(
                'id' => 1390,
                'name' => 'Balzers',
                'country' => 138,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            390 =>
            array(
                'id' => 1391,
                'name' => 'Eschen',
                'country' => 138,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            391 =>
            array(
                'id' => 1392,
                'name' => 'Gamprin',
                'country' => 138,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            392 =>
            array(
                'id' => 1393,
                'name' => 'Mauren',
                'country' => 138,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            393 =>
            array(
                'id' => 1394,
                'name' => 'Planken',
                'country' => 138,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            394 =>
            array(
                'id' => 1395,
                'name' => 'Ruggell',
                'country' => 138,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            395 =>
            array(
                'id' => 1396,
                'name' => 'Schaan',
                'country' => 138,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            396 =>
            array(
                'id' => 1397,
                'name' => 'Schellenberg',
                'country' => 138,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            397 =>
            array(
                'id' => 1398,
                'name' => 'Triesen',
                'country' => 138,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            398 =>
            array(
                'id' => 1399,
                'name' => 'Triesenberg',
                'country' => 138,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            399 =>
            array(
                'id' => 1400,
                'name' => 'Vaduz',
                'country' => 138,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            400 =>
            array(
                'id' => 1401,
                'name' => 'Diekirch',
                'country' => 140,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            401 =>
            array(
                'id' => 1402,
                'name' => 'Grevenmacher',
                'country' => 140,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            402 =>
            array(
                'id' => 1403,
                'name' => 'Luxembourg',
                'country' => 140,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            403 =>
            array(
                'id' => 1404,
                'name' => 'Aguascalientes',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            404 =>
            array(
                'id' => 1405,
                'name' => 'Baja California',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            405 =>
            array(
                'id' => 1406,
                'name' => 'Baja California Sur',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            406 =>
            array(
                'id' => 1407,
                'name' => 'Campeche',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            407 =>
            array(
                'id' => 1408,
                'name' => 'Chiapas',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            408 =>
            array(
                'id' => 1409,
                'name' => 'Chihuahua',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            409 =>
            array(
                'id' => 1410,
                'name' => 'Coahuila de Zaragoza',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            410 =>
            array(
                'id' => 1411,
                'name' => 'Colima',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            411 =>
            array(
                'id' => 1412,
                'name' => 'Distrito Federal',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            412 =>
            array(
                'id' => 1413,
                'name' => 'Durango',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            413 =>
            array(
                'id' => 1414,
                'name' => 'Guanajuato',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            414 =>
            array(
                'id' => 1415,
                'name' => 'Guerrero',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            415 =>
            array(
                'id' => 1416,
                'name' => 'Hidalgo',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            416 =>
            array(
                'id' => 1417,
                'name' => 'Jalisco',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            417 =>
            array(
                'id' => 1418,
                'name' => 'México',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            418 =>
            array(
                'id' => 1419,
                'name' => 'Michoacán de Ocampo',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            419 =>
            array(
                'id' => 1420,
                'name' => 'Morelos',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            420 =>
            array(
                'id' => 1421,
                'name' => 'Nayarit',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            421 =>
            array(
                'id' => 1422,
                'name' => 'Nuevo León',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            422 =>
            array(
                'id' => 1423,
                'name' => 'Oaxaca',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            423 =>
            array(
                'id' => 1424,
                'name' => 'Puebla',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            424 =>
            array(
                'id' => 1425,
                'name' => 'Querétaro de Arteaga',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            425 =>
            array(
                'id' => 1426,
                'name' => 'Quintana Roo',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            426 =>
            array(
                'id' => 1427,
                'name' => 'San Luis Potosí',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            427 =>
            array(
                'id' => 1428,
                'name' => 'Sinaloa',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            428 =>
            array(
                'id' => 1429,
                'name' => 'Sonora',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            429 =>
            array(
                'id' => 1430,
                'name' => 'Tabasco',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            430 =>
            array(
                'id' => 1431,
                'name' => 'Tamaulipas',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            431 =>
            array(
                'id' => 1432,
                'name' => 'Tlaxcala',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            432 =>
            array(
                'id' => 1433,
                'name' => 'Veracruz-Llave',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            433 =>
            array(
                'id' => 1434,
                'name' => 'Yucatán',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            434 =>
            array(
                'id' => 1435,
                'name' => 'Zacatecas',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            435 =>
            array(
                'id' => 1436,
                'name' => 'La Condamine',
                'country' => 142,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            436 =>
            array(
                'id' => 1437,
                'name' => 'Monaco',
                'country' => 142,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            437 =>
            array(
                'id' => 1438,
                'name' => 'Monte-Carlo',
                'country' => 142,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            438 =>
            array(
                'id' => 1439,
                'name' => 'Aracinovo',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            439 =>
            array(
                'id' => 1440,
                'name' => 'Bac',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            440 =>
            array(
                'id' => 1441,
                'name' => 'Belcista',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            441 =>
            array(
                'id' => 1442,
                'name' => 'Berovo',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            442 =>
            array(
                'id' => 1443,
                'name' => 'Bistrica',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            443 =>
            array(
                'id' => 1444,
                'name' => 'Bitola',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            444 =>
            array(
                'id' => 1445,
                'name' => 'Blatec',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            445 =>
            array(
                'id' => 1446,
                'name' => 'Bogdanci',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            446 =>
            array(
                'id' => 1447,
                'name' => 'Bogomila',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            447 =>
            array(
                'id' => 1448,
                'name' => 'Bogovinje',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            448 =>
            array(
                'id' => 1449,
                'name' => 'Bosilovo',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            449 =>
            array(
                'id' => 1450,
                'name' => 'Cair',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            450 =>
            array(
                'id' => 1451,
                'name' => 'Capari',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            451 =>
            array(
                'id' => 1452,
                'name' => 'Caska',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            452 =>
            array(
                'id' => 1453,
                'name' => 'Cegrane',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            453 =>
            array(
                'id' => 1454,
                'name' => 'Centar Zupa',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            454 =>
            array(
                'id' => 1455,
                'name' => 'Debar',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            455 =>
            array(
                'id' => 1456,
                'name' => 'Delcevo',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            456 =>
            array(
                'id' => 1457,
                'name' => 'Demir Hisar',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            457 =>
            array(
                'id' => 1458,
                'name' => 'Demir Kapija',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            458 =>
            array(
                'id' => 1459,
                'name' => 'Dorce Petrov',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            459 =>
            array(
                'id' => 1460,
                'name' => 'Gazi Baba',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            460 =>
            array(
                'id' => 1461,
                'name' => 'Gevgelija',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            461 =>
            array(
                'id' => 1462,
                'name' => 'Gostivar',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            462 =>
            array(
                'id' => 1463,
                'name' => 'Gradsko',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            463 =>
            array(
                'id' => 1464,
                'name' => 'Jegunovce',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            464 =>
            array(
                'id' => 1465,
                'name' => 'Kamenjane',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            465 =>
            array(
                'id' => 1466,
                'name' => 'Karpos',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            466 =>
            array(
                'id' => 1467,
                'name' => 'Kavadarci',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            467 =>
            array(
                'id' => 1468,
                'name' => 'Kicevo',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            468 =>
            array(
                'id' => 1469,
                'name' => 'Kisela Voda',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            469 =>
            array(
                'id' => 1470,
                'name' => 'Klecevce',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            470 =>
            array(
                'id' => 1471,
                'name' => 'Kocani',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            471 =>
            array(
                'id' => 1472,
                'name' => 'Kondovo',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            472 =>
            array(
                'id' => 1473,
                'name' => 'Kratovo',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            473 =>
            array(
                'id' => 1474,
                'name' => 'Krivogastani',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            474 =>
            array(
                'id' => 1475,
                'name' => 'Krusevo',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            475 =>
            array(
                'id' => 1476,
                'name' => 'Kumanovo',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            476 =>
            array(
                'id' => 1477,
                'name' => 'Labunista',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            477 =>
            array(
                'id' => 1478,
                'name' => 'Lipkovo',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            478 =>
            array(
                'id' => 1479,
                'name' => 'Makedonska Kamenica',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            479 =>
            array(
                'id' => 1480,
                'name' => 'Makedonski Brod',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            480 =>
            array(
                'id' => 1481,
                'name' => 'Murtino',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            481 =>
            array(
                'id' => 1482,
                'name' => 'Negotino',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            482 =>
            array(
                'id' => 1483,
                'name' => 'Novo Selo',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            483 =>
            array(
                'id' => 1484,
                'name' => 'Ohrid',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            484 =>
            array(
                'id' => 1485,
                'name' => 'Orizari',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            485 =>
            array(
                'id' => 1486,
                'name' => 'Petrovec',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            486 =>
            array(
                'id' => 1487,
                'name' => 'Prilep',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            487 =>
            array(
                'id' => 1488,
                'name' => 'Probistip',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            488 =>
            array(
                'id' => 1489,
                'name' => 'Radovis',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            489 =>
            array(
                'id' => 1490,
                'name' => 'Resen',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            490 =>
            array(
                'id' => 1491,
                'name' => 'Rosoman',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            491 =>
            array(
                'id' => 1492,
                'name' => 'Saraj',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            492 =>
            array(
                'id' => 1493,
                'name' => 'Srbinovo',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            493 =>
            array(
                'id' => 1494,
                'name' => 'Star Dojran',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            494 =>
            array(
                'id' => 1495,
                'name' => 'Stip',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            495 =>
            array(
                'id' => 1496,
                'name' => 'Struga',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            496 =>
            array(
                'id' => 1497,
                'name' => 'Strumica',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            497 =>
            array(
                'id' => 1498,
                'name' => 'Studenicani',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            498 =>
            array(
                'id' => 1499,
                'name' => 'Suto Orizari',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            499 =>
            array(
                'id' => 1500,
                'name' => 'Sveti Nikole',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
        ));
        \DB::table('country_states')->insert(array(
            0 =>
            array(
                'id' => 1501,
                'name' => 'Tearce',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id' => 1502,
                'name' => 'Tetovo',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id' => 1503,
                'name' => 'Valandovo',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'id' => 1504,
                'name' => 'Veles',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            4 =>
            array(
                'id' => 1505,
                'name' => 'Vevcani',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            5 =>
            array(
                'id' => 1506,
                'name' => 'Vinica',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            6 =>
            array(
                'id' => 1507,
                'name' => 'Vrapciste',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            7 =>
            array(
                'id' => 1508,
                'name' => 'Zelino',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            8 =>
            array(
                'id' => 1509,
                'name' => 'Zrnovci',
                'country' => 144,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            9 =>
            array(
                'id' => 1510,
                'name' => 'Morocco',
                'country' => 150,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            10 =>
            array(
                'id' => 1511,
                'name' => 'Tangier',
                'country' => 150,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            11 =>
            array(
                'id' => 1512,
                'name' => 'Fort-de-France',
                'country' => 151,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            12 =>
            array(
                'id' => 1513,
                'name' => 'Fort-de-France',
                'country' => 151,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            13 =>
            array(
                'id' => 1514,
                'name' => 'Ulan Bator',
                'country' => 157,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            14 =>
            array(
                'id' => 1515,
                'name' => 'Belgrade',
                'country' => 158,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            15 =>
            array(
                'id' => 1516,
                'name' => 'Boaco',
                'country' => 164,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            16 =>
            array(
                'id' => 1517,
                'name' => 'Carazo',
                'country' => 164,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            17 =>
            array(
                'id' => 1518,
                'name' => 'Chinandega',
                'country' => 164,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            18 =>
            array(
                'id' => 1519,
                'name' => 'Chontales',
                'country' => 164,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            19 =>
            array(
                'id' => 1520,
                'name' => 'Estelí',
                'country' => 164,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            20 =>
            array(
                'id' => 1521,
                'name' => 'Granada',
                'country' => 164,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            21 =>
            array(
                'id' => 1522,
                'name' => 'Jinotega',
                'country' => 164,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            22 =>
            array(
                'id' => 1523,
                'name' => 'León',
                'country' => 164,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            23 =>
            array(
                'id' => 1524,
                'name' => 'Madriz',
                'country' => 164,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            24 =>
            array(
                'id' => 1525,
                'name' => 'Managua',
                'country' => 164,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            25 =>
            array(
                'id' => 1526,
                'name' => 'Masaya',
                'country' => 164,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            26 =>
            array(
                'id' => 1527,
                'name' => 'Matagalpa',
                'country' => 164,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            27 =>
            array(
                'id' => 1528,
                'name' => 'Nueva Segovia',
                'country' => 164,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            28 =>
            array(
                'id' => 1529,
                'name' => 'Rio San Juan',
                'country' => 164,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            29 =>
            array(
                'id' => 1530,
                'name' => 'Rivas',
                'country' => 164,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            30 =>
            array(
                'id' => 1531,
                'name' => 'Zelaya',
                'country' => 164,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            31 =>
            array(
                'id' => 1532,
                'name' => 'Akershus',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            32 =>
            array(
                'id' => 1533,
                'name' => 'Aust-Agder',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            33 =>
            array(
                'id' => 1534,
                'name' => 'Buskerud',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            34 =>
            array(
                'id' => 1535,
                'name' => 'Finnmark',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            35 =>
            array(
                'id' => 1536,
                'name' => 'Hedmark',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            36 =>
            array(
                'id' => 1537,
                'name' => 'Hordaland',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            37 =>
            array(
                'id' => 1538,
                'name' => 'More og Romsdal',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            38 =>
            array(
                'id' => 1539,
                'name' => 'Nordland',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            39 =>
            array(
                'id' => 1540,
                'name' => 'Nord-Trondelag',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            40 =>
            array(
                'id' => 1541,
                'name' => 'Oppland',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            41 =>
            array(
                'id' => 1542,
                'name' => 'Oslo',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            42 =>
            array(
                'id' => 1543,
                'name' => 'Ostfold',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            43 =>
            array(
                'id' => 1544,
                'name' => 'Rogaland',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            44 =>
            array(
                'id' => 1545,
                'name' => 'Sogn og Fjordane',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            45 =>
            array(
                'id' => 1546,
                'name' => 'Sor-Trondelag',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            46 =>
            array(
                'id' => 1547,
                'name' => 'Telemark',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            47 =>
            array(
                'id' => 1548,
                'name' => 'Troms',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            48 =>
            array(
                'id' => 1549,
                'name' => 'Vest-Agder',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            49 =>
            array(
                'id' => 1550,
                'name' => 'Vestfold',
                'country' => 168,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            50 =>
            array(
                'id' => 1551,
                'name' => 'Noumea',
                'country' => 169,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            51 =>
            array(
                'id' => 1552,
                'name' => 'Auckland',
                'country' => 170,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            52 =>
            array(
                'id' => 1553,
                'name' => 'Bay of Plenty',
                'country' => 170,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            53 =>
            array(
                'id' => 1554,
                'name' => 'Canterbury',
                'country' => 170,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            54 =>
            array(
                'id' => 1555,
                'name' => 'Gisborne',
                'country' => 170,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            55 =>
            array(
                'id' => 1556,
                'name' => 'Hawkes Bay',
                'country' => 170,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            56 =>
            array(
                'id' => 1557,
                'name' => 'Manawatu-Wanganui',
                'country' => 170,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            57 =>
            array(
                'id' => 1558,
                'name' => 'Marlborough',
                'country' => 170,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            58 =>
            array(
                'id' => 1559,
                'name' => 'Nelson',
                'country' => 170,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            59 =>
            array(
                'id' => 1560,
                'name' => 'Northland',
                'country' => 170,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            60 =>
            array(
                'id' => 1561,
                'name' => 'Otago',
                'country' => 170,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            61 =>
            array(
                'id' => 1562,
                'name' => 'Southland',
                'country' => 170,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            62 =>
            array(
                'id' => 1563,
                'name' => 'Taranaki',
                'country' => 170,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            63 =>
            array(
                'id' => 1564,
                'name' => 'Tasman',
                'country' => 170,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            64 =>
            array(
                'id' => 1565,
                'name' => 'Waikato',
                'country' => 170,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            65 =>
            array(
                'id' => 1566,
                'name' => 'Wellington',
                'country' => 170,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            66 =>
            array(
                'id' => 1567,
                'name' => 'West Coast',
                'country' => 170,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            67 =>
            array(
                'id' => 1568,
                'name' => 'Drenthe',
                'country' => 172,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            68 =>
            array(
                'id' => 1569,
                'name' => 'Friesland',
                'country' => 172,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            69 =>
            array(
                'id' => 1570,
                'name' => 'Gelderland',
                'country' => 172,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            70 =>
            array(
                'id' => 1571,
                'name' => 'Groningen',
                'country' => 172,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            71 =>
            array(
                'id' => 1572,
                'name' => 'Limburg',
                'country' => 172,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            72 =>
            array(
                'id' => 1573,
                'name' => 'Noord-Brabant',
                'country' => 172,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            73 =>
            array(
                'id' => 1574,
                'name' => 'Noord-Holland',
                'country' => 172,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            74 =>
            array(
                'id' => 1575,
                'name' => 'Utrecht',
                'country' => 172,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            75 =>
            array(
                'id' => 1576,
                'name' => 'Zeeland',
                'country' => 172,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            76 =>
            array(
                'id' => 1577,
                'name' => 'Zuid-Holland',
                'country' => 172,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            77 =>
            array(
                'id' => 1578,
                'name' => 'Overijssel',
                'country' => 172,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            78 =>
            array(
                'id' => 1579,
                'name' => 'Flevoland',
                'country' => 172,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            79 =>
            array(
                'id' => 1580,
                'name' => 'Bocas del Toro',
                'country' => 176,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            80 =>
            array(
                'id' => 1581,
                'name' => 'Chiriquí',
                'country' => 176,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            81 =>
            array(
                'id' => 1582,
                'name' => 'Coclé',
                'country' => 176,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            82 =>
            array(
                'id' => 1583,
                'name' => 'Colón',
                'country' => 176,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            83 =>
            array(
                'id' => 1584,
                'name' => 'Darién',
                'country' => 176,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            84 =>
            array(
                'id' => 1585,
                'name' => 'Herrera',
                'country' => 176,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            85 =>
            array(
                'id' => 1586,
                'name' => 'Los Santos',
                'country' => 176,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            86 =>
            array(
                'id' => 1587,
                'name' => 'Panamá',
                'country' => 176,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            87 =>
            array(
                'id' => 1588,
                'name' => 'San Blas',
                'country' => 176,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            88 =>
            array(
                'id' => 1589,
                'name' => 'Veraguas',
                'country' => 176,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            89 =>
            array(
                'id' => 1590,
                'name' => 'Alto Paraná',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            90 =>
            array(
                'id' => 1591,
                'name' => 'Amambay',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            91 =>
            array(
                'id' => 1592,
                'name' => 'Boquerón',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            92 =>
            array(
                'id' => 1593,
                'name' => 'Caaguazuacute',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            93 =>
            array(
                'id' => 1594,
                'name' => 'Caazapá',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            94 =>
            array(
                'id' => 1595,
                'name' => 'Central',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            95 =>
            array(
                'id' => 1596,
                'name' => 'Concepción',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            96 =>
            array(
                'id' => 1597,
                'name' => 'Cordillera',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            97 =>
            array(
                'id' => 1598,
                'name' => 'Guairá',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            98 =>
            array(
                'id' => 1599,
                'name' => 'Itapuacutea',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            99 =>
            array(
                'id' => 1600,
                'name' => 'Misiones',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            100 =>
            array(
                'id' => 1601,
                'name' => 'Neembucuacute',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            101 =>
            array(
                'id' => 1602,
                'name' => 'Paraguarí',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            102 =>
            array(
                'id' => 1603,
                'name' => 'Presidente Hayes',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            103 =>
            array(
                'id' => 1604,
                'name' => 'San Pedro',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            104 =>
            array(
                'id' => 1605,
                'name' => 'Alto Paraguay',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            105 =>
            array(
                'id' => 1606,
                'name' => 'Canindeyuacute',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            106 =>
            array(
                'id' => 1607,
                'name' => 'Chaco',
                'country' => 178,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            107 =>
            array(
                'id' => 1608,
                'name' => 'Amazonas',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            108 =>
            array(
                'id' => 1609,
                'name' => 'Ancash',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            109 =>
            array(
                'id' => 1610,
                'name' => 'Apurímac',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            110 =>
            array(
                'id' => 1611,
                'name' => 'Arequipa',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            111 =>
            array(
                'id' => 1612,
                'name' => 'Ayacucho',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            112 =>
            array(
                'id' => 1613,
                'name' => 'Cajamarca',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            113 =>
            array(
                'id' => 1614,
                'name' => 'Callao',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            114 =>
            array(
                'id' => 1615,
                'name' => 'Cusco',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            115 =>
            array(
                'id' => 1616,
                'name' => 'Huancavelica',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            116 =>
            array(
                'id' => 1617,
                'name' => 'Huánuco',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            117 =>
            array(
                'id' => 1618,
                'name' => 'Ica',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            118 =>
            array(
                'id' => 1619,
                'name' => 'Junín',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            119 =>
            array(
                'id' => 1620,
                'name' => 'La Libertad',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            120 =>
            array(
                'id' => 1621,
                'name' => 'Lambayeque',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            121 =>
            array(
                'id' => 1622,
                'name' => 'Lima',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            122 =>
            array(
                'id' => 1623,
                'name' => 'Loreto',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            123 =>
            array(
                'id' => 1624,
                'name' => 'Madre de Dios',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            124 =>
            array(
                'id' => 1625,
                'name' => 'Moquegua',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            125 =>
            array(
                'id' => 1626,
                'name' => 'Pasco',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            126 =>
            array(
                'id' => 1627,
                'name' => 'Piura',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            127 =>
            array(
                'id' => 1628,
                'name' => 'Puno',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            128 =>
            array(
                'id' => 1629,
                'name' => 'San Martín',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            129 =>
            array(
                'id' => 1630,
                'name' => 'Tacna',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            130 =>
            array(
                'id' => 1631,
                'name' => 'Tumbes',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            131 =>
            array(
                'id' => 1632,
                'name' => 'Ucayali',
                'country' => 179,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            132 =>
            array(
                'id' => 1633,
                'name' => 'Papeete',
                'country' => 180,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            133 =>
            array(
                'id' => 1634,
                'name' => 'Biala Podlaska',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            134 =>
            array(
                'id' => 1635,
                'name' => 'Bialystok',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            135 =>
            array(
                'id' => 1636,
                'name' => 'Bielsko',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            136 =>
            array(
                'id' => 1637,
                'name' => 'Bydgoszcz',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            137 =>
            array(
                'id' => 1638,
                'name' => 'Chelm',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            138 =>
            array(
                'id' => 1639,
                'name' => 'Ciechanow',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            139 =>
            array(
                'id' => 1640,
                'name' => 'Czestochowa',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            140 =>
            array(
                'id' => 1641,
                'name' => 'Elblag',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            141 =>
            array(
                'id' => 1642,
                'name' => 'Gdansk',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            142 =>
            array(
                'id' => 1643,
                'name' => 'Gorzow',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            143 =>
            array(
                'id' => 1644,
                'name' => 'Jelenia Gora',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            144 =>
            array(
                'id' => 1645,
                'name' => 'Kalisz',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            145 =>
            array(
                'id' => 1646,
                'name' => 'Katowice',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            146 =>
            array(
                'id' => 1647,
                'name' => 'Kielce',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            147 =>
            array(
                'id' => 1648,
                'name' => 'Konin',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            148 =>
            array(
                'id' => 1649,
                'name' => 'Koszalin',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            149 =>
            array(
                'id' => 1650,
                'name' => 'Krakow',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            150 =>
            array(
                'id' => 1651,
                'name' => 'Krosno',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            151 =>
            array(
                'id' => 1652,
                'name' => 'Legnica',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            152 =>
            array(
                'id' => 1653,
                'name' => 'Leszno',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            153 =>
            array(
                'id' => 1654,
                'name' => 'Lodz',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            154 =>
            array(
                'id' => 1655,
                'name' => 'Lomza',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            155 =>
            array(
                'id' => 1656,
                'name' => 'Lublin',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            156 =>
            array(
                'id' => 1657,
                'name' => 'Nowy Sacz',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            157 =>
            array(
                'id' => 1658,
                'name' => 'Olsztyn',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            158 =>
            array(
                'id' => 1659,
                'name' => 'Opole',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            159 =>
            array(
                'id' => 1660,
                'name' => 'Ostroleka',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            160 =>
            array(
                'id' => 1661,
                'name' => 'Pila',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            161 =>
            array(
                'id' => 1662,
                'name' => 'Piotrkow',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            162 =>
            array(
                'id' => 1663,
                'name' => 'Plock',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            163 =>
            array(
                'id' => 1664,
                'name' => 'Poznan',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            164 =>
            array(
                'id' => 1665,
                'name' => 'Przemysl',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            165 =>
            array(
                'id' => 1666,
                'name' => 'Radom',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            166 =>
            array(
                'id' => 1667,
                'name' => 'Rzeszow',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            167 =>
            array(
                'id' => 1668,
                'name' => 'Siedlce',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            168 =>
            array(
                'id' => 1669,
                'name' => 'Sieradz',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            169 =>
            array(
                'id' => 1670,
                'name' => 'Skierniewice',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            170 =>
            array(
                'id' => 1671,
                'name' => 'Slupsk',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            171 =>
            array(
                'id' => 1672,
                'name' => 'Suwalki',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            172 =>
            array(
                'id' => 1673,
                'name' => 'Tarnobrzeg',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            173 =>
            array(
                'id' => 1674,
                'name' => 'Tarnow',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            174 =>
            array(
                'id' => 1675,
                'name' => 'Torun',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            175 =>
            array(
                'id' => 1676,
                'name' => 'Walbrzych',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            176 =>
            array(
                'id' => 1677,
                'name' => 'Warszawa',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            177 =>
            array(
                'id' => 1678,
                'name' => 'Wloclawek',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            178 =>
            array(
                'id' => 1679,
                'name' => 'Wroclaw',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            179 =>
            array(
                'id' => 1680,
                'name' => 'Zamosc',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            180 =>
            array(
                'id' => 1681,
                'name' => 'Zielona Gora',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            181 =>
            array(
                'id' => 1682,
                'name' => 'Dolnoslaskie',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            182 =>
            array(
                'id' => 1683,
                'name' => 'Kujawsko-Pomorskie',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            183 =>
            array(
                'id' => 1684,
                'name' => 'Lodzkie',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            184 =>
            array(
                'id' => 1685,
                'name' => 'Lubelskie',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            185 =>
            array(
                'id' => 1686,
                'name' => 'Lubuskie',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            186 =>
            array(
                'id' => 1687,
                'name' => 'Malopolskie',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            187 =>
            array(
                'id' => 1688,
                'name' => 'Mazowieckie',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            188 =>
            array(
                'id' => 1689,
                'name' => 'Opolskie',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            189 =>
            array(
                'id' => 1690,
                'name' => 'Podkarpackie',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            190 =>
            array(
                'id' => 1691,
                'name' => 'Podlaskie',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            191 =>
            array(
                'id' => 1692,
                'name' => 'Pomorskie',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            192 =>
            array(
                'id' => 1693,
                'name' => 'Slaskie',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            193 =>
            array(
                'id' => 1694,
                'name' => 'Swietokrzyskie',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            194 =>
            array(
                'id' => 1695,
                'name' => 'Warminsko-Mazurskie',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            195 =>
            array(
                'id' => 1696,
                'name' => 'Wielkopolskie',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            196 =>
            array(
                'id' => 1697,
                'name' => 'Zachodniopomorskie',
                'country' => 181,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            197 =>
            array(
                'id' => 1698,
                'name' => 'Aveiro',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            198 =>
            array(
                'id' => 1699,
                'name' => 'Beja',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            199 =>
            array(
                'id' => 1700,
                'name' => 'Braga',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            200 =>
            array(
                'id' => 1701,
                'name' => 'Braganca',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            201 =>
            array(
                'id' => 1702,
                'name' => 'Castelo Branco',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            202 =>
            array(
                'id' => 1703,
                'name' => 'Coimbra',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            203 =>
            array(
                'id' => 1704,
                'name' => 'Evora',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            204 =>
            array(
                'id' => 1705,
                'name' => 'Faro',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            205 =>
            array(
                'id' => 1706,
                'name' => 'Madeira',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            206 =>
            array(
                'id' => 1707,
                'name' => 'Guarda',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            207 =>
            array(
                'id' => 1708,
                'name' => 'Leiria',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            208 =>
            array(
                'id' => 1709,
                'name' => 'Lisboa',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            209 =>
            array(
                'id' => 1710,
                'name' => 'Portalegre',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            210 =>
            array(
                'id' => 1711,
                'name' => 'Porto',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            211 =>
            array(
                'id' => 1712,
                'name' => 'Santarem',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            212 =>
            array(
                'id' => 1713,
                'name' => 'Setubal',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            213 =>
            array(
                'id' => 1714,
                'name' => 'Viana do Castelo',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            214 =>
            array(
                'id' => 1715,
                'name' => 'Vila Real',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            215 =>
            array(
                'id' => 1716,
                'name' => 'Viseu',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            216 =>
            array(
                'id' => 1717,
                'name' => 'Azores',
                'country' => 182,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            217 =>
            array(
                'id' => 1718,
                'name' => 'Doha',
                'country' => 184,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            218 =>
            array(
                'id' => 1719,
                'name' => 'Scotland North',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            219 =>
            array(
                'id' => 1720,
                'name' => 'England - East',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            220 =>
            array(
                'id' => 1721,
                'name' => 'England - West Midlands',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            221 =>
            array(
                'id' => 1722,
                'name' => 'England - South West',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            222 =>
            array(
                'id' => 1723,
                'name' => 'England - North West',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            223 =>
            array(
                'id' => 1724,
                'name' => 'England - Yorks amp Humber',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            224 =>
            array(
                'id' => 1725,
                'name' => 'England - South East',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            225 =>
            array(
                'id' => 1726,
                'name' => 'England - London',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            226 =>
            array(
                'id' => 1727,
                'name' => 'Northern Ireland',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            227 =>
            array(
                'id' => 1728,
                'name' => 'England - North East',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            228 =>
            array(
                'id' => 1729,
                'name' => 'Wales South',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            229 =>
            array(
                'id' => 1730,
                'name' => 'Wales North',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            230 =>
            array(
                'id' => 1731,
                'name' => 'England - East Midlands',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            231 =>
            array(
                'id' => 1732,
                'name' => 'Scotland Central',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            232 =>
            array(
                'id' => 1733,
                'name' => 'Scotland South',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            233 =>
            array(
                'id' => 1734,
                'name' => 'Channel Islands',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            234 =>
            array(
                'id' => 1735,
                'name' => 'Isle of Man',
                'country' => 185,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            235 =>
            array(
                'id' => 1736,
                'name' => 'Hlavni Mesto Praha',
                'country' => 187,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            236 =>
            array(
                'id' => 1737,
                'name' => 'Jihomoravsky Kraj',
                'country' => 187,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            237 =>
            array(
                'id' => 1738,
                'name' => 'Jihocesky Kraj',
                'country' => 187,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            238 =>
            array(
                'id' => 1739,
                'name' => 'Vysocina',
                'country' => 187,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            239 =>
            array(
                'id' => 1740,
                'name' => 'Karlovarsky Kraj',
                'country' => 187,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            240 =>
            array(
                'id' => 1741,
                'name' => 'Kralovehradecky Kraj',
                'country' => 187,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            241 =>
            array(
                'id' => 1742,
                'name' => 'Liberecky Kraj',
                'country' => 187,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            242 =>
            array(
                'id' => 1743,
                'name' => 'Olomoucky Kraj',
                'country' => 187,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            243 =>
            array(
                'id' => 1744,
                'name' => 'Moravskoslezsky Kraj',
                'country' => 187,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            244 =>
            array(
                'id' => 1745,
                'name' => 'Pardubicky Kraj',
                'country' => 187,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            245 =>
            array(
                'id' => 1746,
                'name' => 'Plzensky Kraj',
                'country' => 187,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            246 =>
            array(
                'id' => 1747,
                'name' => 'Stredocesky Kraj',
                'country' => 187,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            247 =>
            array(
                'id' => 1748,
                'name' => 'Ustecky Kraj',
                'country' => 187,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            248 =>
            array(
                'id' => 1749,
                'name' => 'Zlinsky Kraj',
                'country' => 187,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            249 =>
            array(
                'id' => 1750,
                'name' => 'Santo Domingo',
                'country' => 188,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            250 =>
            array(
                'id' => 1751,
                'name' => 'Saint-Denis',
                'country' => 190,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            251 =>
            array(
                'id' => 1752,
                'name' => 'Alba',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            252 =>
            array(
                'id' => 1753,
                'name' => 'Arad',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            253 =>
            array(
                'id' => 1754,
                'name' => 'Arges',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            254 =>
            array(
                'id' => 1755,
                'name' => 'Bacau',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            255 =>
            array(
                'id' => 1756,
                'name' => 'Bihor',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            256 =>
            array(
                'id' => 1757,
                'name' => 'Bistrita-Nasaud',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            257 =>
            array(
                'id' => 1758,
                'name' => 'Botosani',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            258 =>
            array(
                'id' => 1759,
                'name' => 'Braila',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            259 =>
            array(
                'id' => 1760,
                'name' => 'Brasov',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            260 =>
            array(
                'id' => 1761,
                'name' => 'Bucuresti',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            261 =>
            array(
                'id' => 1762,
                'name' => 'Buzau',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            262 =>
            array(
                'id' => 1763,
                'name' => 'Caras-Severin',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            263 =>
            array(
                'id' => 1764,
                'name' => 'Cluj',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            264 =>
            array(
                'id' => 1765,
                'name' => 'Constanta',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            265 =>
            array(
                'id' => 1766,
                'name' => 'Covasna',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            266 =>
            array(
                'id' => 1767,
                'name' => 'Dambovita',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            267 =>
            array(
                'id' => 1768,
                'name' => 'Dolj',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            268 =>
            array(
                'id' => 1769,
                'name' => 'Galati',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            269 =>
            array(
                'id' => 1770,
                'name' => 'Gorj',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            270 =>
            array(
                'id' => 1771,
                'name' => 'Harghita',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            271 =>
            array(
                'id' => 1772,
                'name' => 'Hunedoara',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            272 =>
            array(
                'id' => 1773,
                'name' => 'Ialomita',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            273 =>
            array(
                'id' => 1774,
                'name' => 'Iasi',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            274 =>
            array(
                'id' => 1775,
                'name' => 'Maramures',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            275 =>
            array(
                'id' => 1776,
                'name' => 'Mehedinti',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            276 =>
            array(
                'id' => 1777,
                'name' => 'Mures',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            277 =>
            array(
                'id' => 1778,
                'name' => 'Neamt',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            278 =>
            array(
                'id' => 1779,
                'name' => 'Olt',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            279 =>
            array(
                'id' => 1780,
                'name' => 'Prahova',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            280 =>
            array(
                'id' => 1781,
                'name' => 'Salaj',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            281 =>
            array(
                'id' => 1782,
                'name' => 'Satu Mare',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            282 =>
            array(
                'id' => 1783,
                'name' => 'Sibiu',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            283 =>
            array(
                'id' => 1784,
                'name' => 'Suceava',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            284 =>
            array(
                'id' => 1785,
                'name' => 'Teleorman',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            285 =>
            array(
                'id' => 1786,
                'name' => 'Timis',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            286 =>
            array(
                'id' => 1787,
                'name' => 'Tulcea',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            287 =>
            array(
                'id' => 1788,
                'name' => 'Vaslui',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            288 =>
            array(
                'id' => 1789,
                'name' => 'Valcea',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            289 =>
            array(
                'id' => 1790,
                'name' => 'Vrancea',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            290 =>
            array(
                'id' => 1791,
                'name' => 'Calarasi',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            291 =>
            array(
                'id' => 1792,
                'name' => 'Giurgiu',
                'country' => 192,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            292 =>
            array(
                'id' => 1793,
                'name' => 'Altaiskii krai',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            293 =>
            array(
                'id' => 1794,
                'name' => 'Amurskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            294 =>
            array(
                'id' => 1795,
                'name' => 'Arhangelskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            295 =>
            array(
                'id' => 1796,
                'name' => 'Astrahanskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            296 =>
            array(
                'id' => 1797,
                'name' => 'Bashkiriya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            297 =>
            array(
                'id' => 1798,
                'name' => 'Belgorodskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            298 =>
            array(
                'id' => 1799,
                'name' => 'Bryanskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            299 =>
            array(
                'id' => 1800,
                'name' => 'Buryatiya',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            300 =>
            array(
                'id' => 1801,
                'name' => 'Vladimirskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            301 =>
            array(
                'id' => 1802,
                'name' => 'Volgogradskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            302 =>
            array(
                'id' => 1803,
                'name' => 'Vologodskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            303 =>
            array(
                'id' => 1804,
                'name' => 'Voronezhskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            304 =>
            array(
                'id' => 1805,
                'name' => 'Nizhegorodskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            305 =>
            array(
                'id' => 1806,
                'name' => 'Dagestan',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            306 =>
            array(
                'id' => 1807,
                'name' => 'Evreiskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            307 =>
            array(
                'id' => 1808,
                'name' => 'Ivanovskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            308 =>
            array(
                'id' => 1809,
                'name' => 'Irkutskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            309 =>
            array(
                'id' => 1810,
                'name' => 'Kabardino-Balkariya',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            310 =>
            array(
                'id' => 1811,
                'name' => 'Kaliningradskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            311 =>
            array(
                'id' => 1812,
                'name' => 'Tverskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            312 =>
            array(
                'id' => 1813,
                'name' => 'Kalmykiya',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            313 =>
            array(
                'id' => 1814,
                'name' => 'Kaluzhskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            314 =>
            array(
                'id' => 1815,
                'name' => 'Kamchatskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            315 =>
            array(
                'id' => 1816,
                'name' => 'Kareliya',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            316 =>
            array(
                'id' => 1817,
                'name' => 'Kemerovskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            317 =>
            array(
                'id' => 1818,
                'name' => 'Kirovskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            318 =>
            array(
                'id' => 1819,
                'name' => 'Komi',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            319 =>
            array(
                'id' => 1820,
                'name' => 'Kostromskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            320 =>
            array(
                'id' => 1821,
                'name' => 'Krasnodarskii krai',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            321 =>
            array(
                'id' => 1822,
                'name' => 'Krasnoyarskii krai',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            322 =>
            array(
                'id' => 1823,
                'name' => 'Kurganskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            323 =>
            array(
                'id' => 1824,
                'name' => 'Kurskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            324 =>
            array(
                'id' => 1825,
                'name' => 'Lipetskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            325 =>
            array(
                'id' => 1826,
                'name' => 'Magadanskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            326 =>
            array(
                'id' => 1827,
                'name' => 'Marii El',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            327 =>
            array(
                'id' => 1828,
                'name' => 'Mordoviya',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            328 =>
            array(
                'id' => 1829,
                'name' => 'Moscow amp Moscow Region',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            329 =>
            array(
                'id' => 1830,
                'name' => 'Murmanskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            330 =>
            array(
                'id' => 1831,
                'name' => 'Novgorodskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            331 =>
            array(
                'id' => 1832,
                'name' => 'Novosibirskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            332 =>
            array(
                'id' => 1833,
                'name' => 'Omskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            333 =>
            array(
                'id' => 1834,
                'name' => 'Orenburgskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            334 =>
            array(
                'id' => 1835,
                'name' => 'Orlovskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            335 =>
            array(
                'id' => 1836,
                'name' => 'Penzenskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            336 =>
            array(
                'id' => 1837,
                'name' => 'Permskiy krai',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            337 =>
            array(
                'id' => 1838,
                'name' => 'Primorskii krai',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            338 =>
            array(
                'id' => 1839,
                'name' => 'Pskovskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            339 =>
            array(
                'id' => 1840,
                'name' => 'Rostovskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            340 =>
            array(
                'id' => 1841,
                'name' => 'Ryazanskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            341 =>
            array(
                'id' => 1842,
                'name' => 'Samarskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            342 =>
            array(
                'id' => 1843,
                'name' => 'Saint-Petersburg and Region',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            343 =>
            array(
                'id' => 1844,
                'name' => 'Saratovskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            344 =>
            array(
                'id' => 1845,
                'name' => 'Saha Yakutiya',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            345 =>
            array(
                'id' => 1846,
                'name' => 'Sahalin',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            346 =>
            array(
                'id' => 1847,
                'name' => 'Sverdlovskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            347 =>
            array(
                'id' => 1848,
                'name' => 'Severnaya Osetiya',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            348 =>
            array(
                'id' => 1849,
                'name' => 'Smolenskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            349 =>
            array(
                'id' => 1850,
                'name' => 'Stavropolskii krai',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            350 =>
            array(
                'id' => 1851,
                'name' => 'Tambovskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            351 =>
            array(
                'id' => 1852,
                'name' => 'Tatarstan',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            352 =>
            array(
                'id' => 1853,
                'name' => 'Tomskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            353 =>
            array(
                'id' => 1854,
                'name' => 'Tulskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            354 =>
            array(
                'id' => 1855,
                'name' => 'Tyumenskaya obl. i Hanty-Mansiiskii AO',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            355 =>
            array(
                'id' => 1856,
                'name' => 'Udmurtiya',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            356 =>
            array(
                'id' => 1857,
                'name' => 'Ulyanovskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            357 =>
            array(
                'id' => 1858,
                'name' => 'Uralskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            358 =>
            array(
                'id' => 1859,
                'name' => 'Habarovskii krai',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            359 =>
            array(
                'id' => 1860,
                'name' => 'Chelyabinskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            360 =>
            array(
                'id' => 1861,
                'name' => 'Checheno-Ingushetiya',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            361 =>
            array(
                'id' => 1862,
                'name' => 'Chitinskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            362 =>
            array(
                'id' => 1863,
                'name' => 'Chuvashiya',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            363 =>
            array(
                'id' => 1864,
                'name' => 'Yaroslavskaya obl.',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            364 =>
            array(
                'id' => 1865,
                'name' => 'Adygeya',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            365 =>
            array(
                'id' => 1866,
                'name' => 'Hakasiya',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            366 =>
            array(
                'id' => 1867,
                'name' => 'Chukotskii AO',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            367 =>
            array(
                'id' => 1868,
                'name' => 'Yamalo-Nenetskii AO',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            368 =>
            array(
                'id' => 1869,
                'name' => 'Karachaeva-Cherkesskaya Respublica',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            369 =>
            array(
                'id' => 1870,
                'name' => 'Raimirskii Dolgano-Nenetskii AO',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            370 =>
            array(
                'id' => 1871,
                'name' => 'Respublica Tiva',
                'country' => 193,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            371 =>
            array(
                'id' => 1872,
                'name' => 'Basseterre',
                'country' => 198,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            372 =>
            array(
                'id' => 1873,
                'name' => 'Acquaviva',
                'country' => 199,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            373 =>
            array(
                'id' => 1874,
                'name' => 'Chiesanuova',
                'country' => 199,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            374 =>
            array(
                'id' => 1875,
                'name' => 'Domagnano',
                'country' => 199,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            375 =>
            array(
                'id' => 1876,
                'name' => 'Faetano',
                'country' => 199,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            376 =>
            array(
                'id' => 1877,
                'name' => 'Fiorentino',
                'country' => 199,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            377 =>
            array(
                'id' => 1878,
                'name' => 'Borgo Maggiore',
                'country' => 199,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            378 =>
            array(
                'id' => 1879,
                'name' => 'San Marino',
                'country' => 199,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            379 =>
            array(
                'id' => 1880,
                'name' => 'Monte Giardino',
                'country' => 199,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            380 =>
            array(
                'id' => 1881,
                'name' => 'Serravalle',
                'country' => 199,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            381 =>
            array(
                'id' => 1882,
                'name' => 'Kingstown',
                'country' => 200,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            382 =>
            array(
                'id' => 1883,
                'name' => 'Jamestown',
                'country' => 203,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            383 =>
            array(
                'id' => 1884,
                'name' => 'Castries',
                'country' => 204,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            384 =>
            array(
                'id' => 1885,
                'name' => 'Freetown',
                'country' => 209,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            385 =>
            array(
                'id' => 1886,
                'name' => 'Damascus',
                'country' => 212,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            386 =>
            array(
                'id' => 1887,
                'name' => 'Mogadishu',
                'country' => 213,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            387 =>
            array(
                'id' => 1888,
                'name' => 'Johannesburg',
                'country' => 215,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            388 =>
            array(
                'id' => 1889,
                'name' => 'Blekinge Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            389 =>
            array(
                'id' => 1890,
                'name' => 'Gavleborgs Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            390 =>
            array(
                'id' => 1891,
                'name' => 'Gotlands Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            391 =>
            array(
                'id' => 1892,
                'name' => 'Hallands Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            392 =>
            array(
                'id' => 1893,
                'name' => 'Jamtlands Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            393 =>
            array(
                'id' => 1894,
                'name' => 'Jonkopings Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            394 =>
            array(
                'id' => 1895,
                'name' => 'Kalmar Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            395 =>
            array(
                'id' => 1896,
                'name' => 'Dalarnas Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            396 =>
            array(
                'id' => 1897,
                'name' => 'Kronobergs Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            397 =>
            array(
                'id' => 1898,
                'name' => 'Norrbottens Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            398 =>
            array(
                'id' => 1899,
                'name' => 'Orebro Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            399 =>
            array(
                'id' => 1900,
                'name' => 'Ostergotlands Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            400 =>
            array(
                'id' => 1901,
                'name' => 'Sodermanlands Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            401 =>
            array(
                'id' => 1902,
                'name' => 'Uppsala Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            402 =>
            array(
                'id' => 1903,
                'name' => 'Varmlands Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            403 =>
            array(
                'id' => 1904,
                'name' => 'Vasterbottens Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            404 =>
            array(
                'id' => 1905,
                'name' => 'Vasternorrlands Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            405 =>
            array(
                'id' => 1906,
                'name' => 'Vastmanlands Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            406 =>
            array(
                'id' => 1907,
                'name' => 'Stockholms Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            407 =>
            array(
                'id' => 1908,
                'name' => 'Skane Lan',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            408 =>
            array(
                'id' => 1909,
                'name' => 'Vastra Gotaland',
                'country' => 217,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            409 =>
            array(
                'id' => 1910,
                'name' => 'Appenzell Ausserrhoden',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            410 =>
            array(
                'id' => 1911,
                'name' => 'Bern',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            411 =>
            array(
                'id' => 1912,
                'name' => 'Basel-Landschaft',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            412 =>
            array(
                'id' => 1913,
                'name' => 'Basel-Stadt',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            413 =>
            array(
                'id' => 1914,
                'name' => 'Fribourg',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            414 =>
            array(
                'id' => 1915,
                'name' => 'Genegraveve',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            415 =>
            array(
                'id' => 1916,
                'name' => 'Glarus',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            416 =>
            array(
                'id' => 1917,
                'name' => 'Graubünden',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            417 =>
            array(
                'id' => 1918,
                'name' => 'Jura',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            418 =>
            array(
                'id' => 1919,
                'name' => 'Luzern',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            419 =>
            array(
                'id' => 1920,
                'name' => 'Neuchacirctel',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            420 =>
            array(
                'id' => 1921,
                'name' => 'Nidwalden',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            421 =>
            array(
                'id' => 1922,
                'name' => 'Obwalden',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            422 =>
            array(
                'id' => 1923,
                'name' => 'Sankt Gallen',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            423 =>
            array(
                'id' => 1924,
                'name' => 'Schaffhausen',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            424 =>
            array(
                'id' => 1925,
                'name' => 'Solothurn',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            425 =>
            array(
                'id' => 1926,
                'name' => 'Schwyz',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            426 =>
            array(
                'id' => 1927,
                'name' => 'Thurgau',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            427 =>
            array(
                'id' => 1928,
                'name' => 'Ticino',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            428 =>
            array(
                'id' => 1929,
                'name' => 'Uri',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            429 =>
            array(
                'id' => 1930,
                'name' => 'Vaud',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            430 =>
            array(
                'id' => 1931,
                'name' => 'Valais',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            431 =>
            array(
                'id' => 1932,
                'name' => 'Zug',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            432 =>
            array(
                'id' => 1933,
                'name' => 'Zürich',
                'country' => 218,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            433 =>
            array(
                'id' => 1934,
                'name' => 'Paramaribo',
                'country' => 219,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            434 =>
            array(
                'id' => 1935,
                'name' => 'Gorno-Badakhshan Region',
                'country' => 222,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            435 =>
            array(
                'id' => 1936,
                'name' => 'Kuljabsk Region',
                'country' => 222,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            436 =>
            array(
                'id' => 1937,
                'name' => 'Kurgan-Tjube Region',
                'country' => 222,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            437 =>
            array(
                'id' => 1938,
                'name' => 'Sughd Region',
                'country' => 222,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            438 =>
            array(
                'id' => 1939,
                'name' => 'Tajikistan',
                'country' => 222,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            439 =>
            array(
                'id' => 1940,
                'name' => 'Amnat Charoen',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            440 =>
            array(
                'id' => 1941,
                'name' => 'Ang Thong',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            441 =>
            array(
                'id' => 1942,
                'name' => 'Bangkok',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            442 =>
            array(
                'id' => 1943,
                'name' => 'Buri Ram',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            443 =>
            array(
                'id' => 1944,
                'name' => 'Chachoengsao',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            444 =>
            array(
                'id' => 1945,
                'name' => 'Chai Nat',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            445 =>
            array(
                'id' => 1946,
                'name' => 'Chaiyaphum',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            446 =>
            array(
                'id' => 1947,
                'name' => 'Chanthaburi',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            447 =>
            array(
                'id' => 1948,
                'name' => 'Chiang Mai',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            448 =>
            array(
                'id' => 1949,
                'name' => 'Chiang Rai',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            449 =>
            array(
                'id' => 1950,
                'name' => 'Chon Buri',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            450 =>
            array(
                'id' => 1951,
                'name' => 'Kalasin',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            451 =>
            array(
                'id' => 1952,
                'name' => 'Kanchanaburi',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            452 =>
            array(
                'id' => 1953,
                'name' => 'Khon Kaen',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            453 =>
            array(
                'id' => 1954,
                'name' => 'Krabi',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            454 =>
            array(
                'id' => 1955,
                'name' => 'Lampang',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            455 =>
            array(
                'id' => 1956,
                'name' => 'Loei',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            456 =>
            array(
                'id' => 1957,
                'name' => 'Lop Buri',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            457 =>
            array(
                'id' => 1958,
                'name' => 'Mae Hong Son',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            458 =>
            array(
                'id' => 1959,
                'name' => 'Maha Sarakham',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            459 =>
            array(
                'id' => 1960,
                'name' => 'Nakhon Pathom',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            460 =>
            array(
                'id' => 1961,
                'name' => 'Nakhon Ratchasima',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            461 =>
            array(
                'id' => 1962,
                'name' => 'Nakhon Sawan',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            462 =>
            array(
                'id' => 1963,
                'name' => 'Nakhon Si Thammarat',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            463 =>
            array(
                'id' => 1964,
                'name' => 'Narathiwat',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            464 =>
            array(
                'id' => 1965,
                'name' => 'Nong Bua Lam Phu',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            465 =>
            array(
                'id' => 1966,
                'name' => 'Nong Khai',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            466 =>
            array(
                'id' => 1967,
                'name' => 'Nonthaburi',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            467 =>
            array(
                'id' => 1968,
                'name' => 'Pathum Thani',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            468 =>
            array(
                'id' => 1969,
                'name' => 'Pattani',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            469 =>
            array(
                'id' => 1970,
                'name' => 'Phangnga',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            470 =>
            array(
                'id' => 1971,
                'name' => 'Phatthalung',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            471 =>
            array(
                'id' => 1972,
                'name' => 'Phichit',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            472 =>
            array(
                'id' => 1973,
                'name' => 'Phitsanulok',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            473 =>
            array(
                'id' => 1974,
                'name' => 'Phra Nakhon Si Ayutthaya',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            474 =>
            array(
                'id' => 1975,
                'name' => 'Phrae',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            475 =>
            array(
                'id' => 1976,
                'name' => 'Phuket',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            476 =>
            array(
                'id' => 1977,
                'name' => 'Prachin Buri',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            477 =>
            array(
                'id' => 1978,
                'name' => 'Prachuap Khiri Khan',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            478 =>
            array(
                'id' => 1979,
                'name' => 'Ratchaburi',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            479 =>
            array(
                'id' => 1980,
                'name' => 'Rayong',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            480 =>
            array(
                'id' => 1981,
                'name' => 'Roi Et',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            481 =>
            array(
                'id' => 1982,
                'name' => 'Sa Kaeo',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            482 =>
            array(
                'id' => 1983,
                'name' => 'Sakon Nakhon',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            483 =>
            array(
                'id' => 1984,
                'name' => 'Samut Prakan',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            484 =>
            array(
                'id' => 1985,
                'name' => 'Samut Sakhon',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            485 =>
            array(
                'id' => 1986,
                'name' => 'Samut Songkhran',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            486 =>
            array(
                'id' => 1987,
                'name' => 'Saraburi',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            487 =>
            array(
                'id' => 1988,
                'name' => 'Si Sa Ket',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            488 =>
            array(
                'id' => 1989,
                'name' => 'Sing Buri',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            489 =>
            array(
                'id' => 1990,
                'name' => 'Songkhla',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            490 =>
            array(
                'id' => 1991,
                'name' => 'Sukhothai',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            491 =>
            array(
                'id' => 1992,
                'name' => 'Suphan Buri',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            492 =>
            array(
                'id' => 1993,
                'name' => 'Surat Thani',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            493 =>
            array(
                'id' => 1994,
                'name' => 'Surin',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            494 =>
            array(
                'id' => 1995,
                'name' => 'Trang',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            495 =>
            array(
                'id' => 1996,
                'name' => 'Ubon Ratchathani',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            496 =>
            array(
                'id' => 1997,
                'name' => 'Udon Thani',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            497 =>
            array(
                'id' => 1998,
                'name' => 'Uthai Thani',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            498 =>
            array(
                'id' => 1999,
                'name' => 'Uttaradit',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            499 =>
            array(
                'id' => 2000,
                'name' => 'Yala',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
        ));
        \DB::table('country_states')->insert(array(
            0 =>
            array(
                'id' => 2001,
                'name' => 'Yasothon',
                'country' => 223,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2002,
                'name' => 'Fakaofo',
                'country' => 230,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id' => 2003,
                'name' => 'Port of Spain',
                'country' => 232,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'id' => 2004,
                'name' => 'Ashgabat Region',
                'country' => 234,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            4 =>
            array(
                'id' => 2005,
                'name' => 'Krasnovodsk Region',
                'country' => 234,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            5 =>
            array(
                'id' => 2006,
                'name' => 'Mary Region',
                'country' => 234,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            6 =>
            array(
                'id' => 2007,
                'name' => 'Tashauz Region',
                'country' => 234,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            7 =>
            array(
                'id' => 2008,
                'name' => 'Chardzhou Region',
                'country' => 234,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            8 =>
            array(
                'id' => 2009,
                'name' => 'Bartin',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            9 =>
            array(
                'id' => 2010,
                'name' => 'Bayburt',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            10 =>
            array(
                'id' => 2011,
                'name' => 'Karabuk',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            11 =>
            array(
                'id' => 2012,
                'name' => 'Adana',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            12 =>
            array(
                'id' => 2013,
                'name' => 'Aydin',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            13 =>
            array(
                'id' => 2014,
                'name' => 'Amasya',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            14 =>
            array(
                'id' => 2015,
                'name' => 'Ankara',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            15 =>
            array(
                'id' => 2016,
                'name' => 'Antalya',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            16 =>
            array(
                'id' => 2017,
                'name' => 'Artvin',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            17 =>
            array(
                'id' => 2018,
                'name' => 'Afion',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            18 =>
            array(
                'id' => 2019,
                'name' => 'Balikesir',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            19 =>
            array(
                'id' => 2020,
                'name' => 'Bilecik',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            20 =>
            array(
                'id' => 2021,
                'name' => 'Bursa',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            21 =>
            array(
                'id' => 2022,
                'name' => 'Gaziantep',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            22 =>
            array(
                'id' => 2023,
                'name' => 'Denizli',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            23 =>
            array(
                'id' => 2024,
                'name' => 'Izmir',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            24 =>
            array(
                'id' => 2025,
                'name' => 'Isparta',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            25 =>
            array(
                'id' => 2026,
                'name' => 'Icel',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            26 =>
            array(
                'id' => 2027,
                'name' => 'Kayseri',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            27 =>
            array(
                'id' => 2028,
                'name' => 'Kars',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            28 =>
            array(
                'id' => 2029,
                'name' => 'Kodjaeli',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            29 =>
            array(
                'id' => 2030,
                'name' => 'Konya',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            30 =>
            array(
                'id' => 2031,
                'name' => 'Kirklareli',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            31 =>
            array(
                'id' => 2032,
                'name' => 'Kutahya',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            32 =>
            array(
                'id' => 2033,
                'name' => 'Malatya',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            33 =>
            array(
                'id' => 2034,
                'name' => 'Manisa',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            34 =>
            array(
                'id' => 2035,
                'name' => 'Sakarya',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            35 =>
            array(
                'id' => 2036,
                'name' => 'Samsun',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            36 =>
            array(
                'id' => 2037,
                'name' => 'Sivas',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            37 =>
            array(
                'id' => 2038,
                'name' => 'Istanbul',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            38 =>
            array(
                'id' => 2039,
                'name' => 'Trabzon',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            39 =>
            array(
                'id' => 2040,
                'name' => 'Corum',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            40 =>
            array(
                'id' => 2041,
                'name' => 'Edirne',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            41 =>
            array(
                'id' => 2042,
                'name' => 'Elazig',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            42 =>
            array(
                'id' => 2043,
                'name' => 'Erzincan',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            43 =>
            array(
                'id' => 2044,
                'name' => 'Erzurum',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            44 =>
            array(
                'id' => 2045,
                'name' => 'Eskisehir',
                'country' => 235,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            45 =>
            array(
                'id' => 2046,
                'name' => 'Vinnitskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            46 =>
            array(
                'id' => 2047,
                'name' => 'Volynskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            47 =>
            array(
                'id' => 2048,
                'name' => 'Dnepropetrovskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            48 =>
            array(
                'id' => 2049,
                'name' => 'Donetskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            49 =>
            array(
                'id' => 2050,
                'name' => 'Zhitomirskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            50 =>
            array(
                'id' => 2051,
                'name' => 'Zakarpatskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            51 =>
            array(
                'id' => 2052,
                'name' => 'Zaporozhskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            52 =>
            array(
                'id' => 2053,
                'name' => 'Ivano-Frankovskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            53 =>
            array(
                'id' => 2054,
                'name' => 'Kievskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            54 =>
            array(
                'id' => 2055,
                'name' => 'Kirovogradskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            55 =>
            array(
                'id' => 2056,
                'name' => 'Krymskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            56 =>
            array(
                'id' => 2057,
                'name' => 'Luganskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            57 =>
            array(
                'id' => 2058,
                'name' => 'Lvovskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            58 =>
            array(
                'id' => 2059,
                'name' => 'Nikolaevskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            59 =>
            array(
                'id' => 2060,
                'name' => 'Odesskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            60 =>
            array(
                'id' => 2061,
                'name' => 'Poltavskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            61 =>
            array(
                'id' => 2062,
                'name' => 'Rovenskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            62 =>
            array(
                'id' => 2063,
                'name' => 'Sumskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            63 =>
            array(
                'id' => 2064,
                'name' => 'Ternopolskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            64 =>
            array(
                'id' => 2065,
                'name' => 'Harkovskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            65 =>
            array(
                'id' => 2066,
                'name' => 'Hersonskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            66 =>
            array(
                'id' => 2067,
                'name' => 'Hmelnitskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            67 =>
            array(
                'id' => 2068,
                'name' => 'Cherkasskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            68 =>
            array(
                'id' => 2069,
                'name' => 'Chernigovskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            69 =>
            array(
                'id' => 2070,
                'name' => 'Chernovitskaya obl.',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            70 =>
            array(
                'id' => 2071,
                'name' => 'Estoniya',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            71 =>
            array(
                'id' => 2072,
                'name' => 'Cheju',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            72 =>
            array(
                'id' => 2073,
                'name' => 'Chollabuk',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            73 =>
            array(
                'id' => 2074,
                'name' => 'Chollanam',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            74 =>
            array(
                'id' => 2075,
                'name' => 'Chungcheongbuk',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            75 =>
            array(
                'id' => 2076,
                'name' => 'Chungcheongnam',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            76 =>
            array(
                'id' => 2077,
                'name' => 'Incheon',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            77 =>
            array(
                'id' => 2078,
                'name' => 'Kangweon',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            78 =>
            array(
                'id' => 2079,
                'name' => 'Kwangju',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            79 =>
            array(
                'id' => 2080,
                'name' => 'Kyeonggi',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            80 =>
            array(
                'id' => 2081,
                'name' => 'Kyeongsangbuk',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            81 =>
            array(
                'id' => 2082,
                'name' => 'Kyeongsangnam',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            82 =>
            array(
                'id' => 2083,
                'name' => 'Pusan',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            83 =>
            array(
                'id' => 2084,
                'name' => 'Seoul',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            84 =>
            array(
                'id' => 2085,
                'name' => 'Taegu',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            85 =>
            array(
                'id' => 2086,
                'name' => 'Taejeon',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            86 =>
            array(
                'id' => 2087,
                'name' => 'Ulsan',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            87 =>
            array(
                'id' => 2088,
                'name' => 'Aichi',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            88 =>
            array(
                'id' => 2089,
                'name' => 'Akita',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            89 =>
            array(
                'id' => 2090,
                'name' => 'Aomori',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            90 =>
            array(
                'id' => 2091,
                'name' => 'Wakayama',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            91 =>
            array(
                'id' => 2092,
                'name' => 'Gifu',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            92 =>
            array(
                'id' => 2093,
                'name' => 'Gunma',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            93 =>
            array(
                'id' => 2094,
                'name' => 'Ibaraki',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            94 =>
            array(
                'id' => 2095,
                'name' => 'Iwate',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            95 =>
            array(
                'id' => 2096,
                'name' => 'Ishikawa',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            96 =>
            array(
                'id' => 2097,
                'name' => 'Kagawa',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            97 =>
            array(
                'id' => 2098,
                'name' => 'Kagoshima',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            98 =>
            array(
                'id' => 2099,
                'name' => 'Kanagawa',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            99 =>
            array(
                'id' => 2100,
                'name' => 'Kyoto',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            100 =>
            array(
                'id' => 2101,
                'name' => 'Kochi',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            101 =>
            array(
                'id' => 2102,
                'name' => 'Kumamoto',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            102 =>
            array(
                'id' => 2103,
                'name' => 'Mie',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            103 =>
            array(
                'id' => 2104,
                'name' => 'Miyagi',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            104 =>
            array(
                'id' => 2105,
                'name' => 'Miyazaki',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            105 =>
            array(
                'id' => 2106,
                'name' => 'Nagano',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            106 =>
            array(
                'id' => 2107,
                'name' => 'Nagasaki',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            107 =>
            array(
                'id' => 2108,
                'name' => 'Nara',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            108 =>
            array(
                'id' => 2109,
                'name' => 'Niigata',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            109 =>
            array(
                'id' => 2110,
                'name' => 'Okayama',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            110 =>
            array(
                'id' => 2111,
                'name' => 'Okinawa',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            111 =>
            array(
                'id' => 2112,
                'name' => 'Osaka',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            112 =>
            array(
                'id' => 2113,
                'name' => 'Saga',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            113 =>
            array(
                'id' => 2114,
                'name' => 'Saitama',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            114 =>
            array(
                'id' => 2115,
                'name' => 'Shiga',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            115 =>
            array(
                'id' => 2116,
                'name' => 'Shizuoka',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            116 =>
            array(
                'id' => 2117,
                'name' => 'Shimane',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            117 =>
            array(
                'id' => 2118,
                'name' => 'Tiba',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            118 =>
            array(
                'id' => 2119,
                'name' => 'Tokyo',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            119 =>
            array(
                'id' => 2120,
                'name' => 'Tokushima',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            120 =>
            array(
                'id' => 2121,
                'name' => 'Tochigi',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            121 =>
            array(
                'id' => 2122,
                'name' => 'Tottori',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            122 =>
            array(
                'id' => 2123,
                'name' => 'Toyama',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            123 =>
            array(
                'id' => 2124,
                'name' => 'Fukui',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            124 =>
            array(
                'id' => 2125,
                'name' => 'Fukuoka',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            125 =>
            array(
                'id' => 2126,
                'name' => 'Fukushima',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            126 =>
            array(
                'id' => 2127,
                'name' => 'Hiroshima',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            127 =>
            array(
                'id' => 2128,
                'name' => 'Hokkaido',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            128 =>
            array(
                'id' => 2129,
                'name' => 'Hyogo',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            129 =>
            array(
                'id' => 2130,
                'name' => 'Yoshimi',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            130 =>
            array(
                'id' => 2131,
                'name' => 'Yamagata',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            131 =>
            array(
                'id' => 2132,
                'name' => 'Yamaguchi',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            132 =>
            array(
                'id' => 2133,
                'name' => 'Yamanashi',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            133 =>
            array(
                'id' => 2134,
                'name' => 'Hong Kong',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            134 =>
            array(
                'id' => 2135,
                'name' => 'Indonesia',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            135 =>
            array(
                'id' => 2136,
                'name' => 'Jordan',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            136 =>
            array(
                'id' => 2137,
                'name' => 'Malaysia',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            137 =>
            array(
                'id' => 2138,
                'name' => 'Singapore',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            138 =>
            array(
                'id' => 2139,
                'name' => 'Taiwan',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            139 =>
            array(
                'id' => 2140,
                'name' => 'Kazahstan',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            140 =>
            array(
                'id' => 2141,
                'name' => 'Ukraina',
                'country' => 237,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            141 =>
            array(
                'id' => 2142,
                'name' => 'Jinja',
                'country' => 238,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            142 =>
            array(
                'id' => 2143,
                'name' => 'Kampala',
                'country' => 238,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            143 =>
            array(
                'id' => 2144,
                'name' => 'Artigas',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            144 =>
            array(
                'id' => 2145,
                'name' => 'Canelones',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            145 =>
            array(
                'id' => 2146,
                'name' => 'Cerro Largo',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            146 =>
            array(
                'id' => 2147,
                'name' => 'Colonia',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            147 =>
            array(
                'id' => 2148,
                'name' => 'Durazno',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            148 =>
            array(
                'id' => 2149,
                'name' => 'Flores',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            149 =>
            array(
                'id' => 2150,
                'name' => 'Florida',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            150 =>
            array(
                'id' => 2151,
                'name' => 'Lavalleja',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            151 =>
            array(
                'id' => 2152,
                'name' => 'Maldonado',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            152 =>
            array(
                'id' => 2153,
                'name' => 'Montevideo',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            153 =>
            array(
                'id' => 2154,
                'name' => 'Paysanduacute',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            154 =>
            array(
                'id' => 2155,
                'name' => 'Río Negro',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            155 =>
            array(
                'id' => 2156,
                'name' => 'Rivera',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            156 =>
            array(
                'id' => 2157,
                'name' => 'Rocha',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            157 =>
            array(
                'id' => 2158,
                'name' => 'Salto',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            158 =>
            array(
                'id' => 2159,
                'name' => 'San José',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            159 =>
            array(
                'id' => 2160,
                'name' => 'Soriano',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            160 =>
            array(
                'id' => 2161,
                'name' => 'Tacuarembó',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            161 =>
            array(
                'id' => 2162,
                'name' => 'Treinta y Tres',
                'country' => 239,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            162 =>
            array(
                'id' => 2163,
                'name' => 'Andijon Region',
                'country' => 240,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            163 =>
            array(
                'id' => 2164,
                'name' => 'Buxoro Region',
                'country' => 240,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            164 =>
            array(
                'id' => 2165,
                'name' => 'Jizzac Region',
                'country' => 240,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            165 =>
            array(
                'id' => 2166,
                'name' => 'Qaraqalpaqstan',
                'country' => 240,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            166 =>
            array(
                'id' => 2167,
                'name' => 'Qashqadaryo Region',
                'country' => 240,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            167 =>
            array(
                'id' => 2168,
                'name' => 'Navoiy Region',
                'country' => 240,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            168 =>
            array(
                'id' => 2169,
                'name' => 'Namangan Region',
                'country' => 240,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            169 =>
            array(
                'id' => 2170,
                'name' => 'Samarqand Region',
                'country' => 240,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            170 =>
            array(
                'id' => 2171,
                'name' => 'Surxondaryo Region',
                'country' => 240,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            171 =>
            array(
                'id' => 2172,
                'name' => 'Sirdaryo Region',
                'country' => 240,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            172 =>
            array(
                'id' => 2173,
                'name' => 'Tashkent Region',
                'country' => 240,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            173 =>
            array(
                'id' => 2174,
                'name' => 'Fergana Region',
                'country' => 240,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            174 =>
            array(
                'id' => 2175,
                'name' => 'Xorazm Region',
                'country' => 240,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            175 =>
            array(
                'id' => 2176,
                'name' => 'Amazonas',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            176 =>
            array(
                'id' => 2177,
                'name' => 'Anzoategui',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            177 =>
            array(
                'id' => 2178,
                'name' => 'Apure',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            178 =>
            array(
                'id' => 2179,
                'name' => 'Aragua',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            179 =>
            array(
                'id' => 2180,
                'name' => 'Barinas',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            180 =>
            array(
                'id' => 2181,
                'name' => 'Bolívar',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            181 =>
            array(
                'id' => 2182,
                'name' => 'Carabobo',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            182 =>
            array(
                'id' => 2183,
                'name' => 'Cojedes',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            183 =>
            array(
                'id' => 2184,
                'name' => 'Delta Amacuro',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            184 =>
            array(
                'id' => 2185,
                'name' => 'Falcón',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            185 =>
            array(
                'id' => 2186,
                'name' => 'Guárico',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            186 =>
            array(
                'id' => 2187,
                'name' => 'Lara',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            187 =>
            array(
                'id' => 2188,
                'name' => 'Mérida',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            188 =>
            array(
                'id' => 2189,
                'name' => 'Miranda',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            189 =>
            array(
                'id' => 2190,
                'name' => 'Monagas',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            190 =>
            array(
                'id' => 2191,
                'name' => 'Nueva Esparta',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            191 =>
            array(
                'id' => 2192,
                'name' => 'Portuguesa',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            192 =>
            array(
                'id' => 2193,
                'name' => 'Sucre',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            193 =>
            array(
                'id' => 2194,
                'name' => 'Táchira',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            194 =>
            array(
                'id' => 2195,
                'name' => 'Trujillo',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            195 =>
            array(
                'id' => 2196,
                'name' => 'Yaracuy',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            196 =>
            array(
                'id' => 2197,
                'name' => 'Zulia',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            197 =>
            array(
                'id' => 2198,
                'name' => 'Dependencias Federales',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            198 =>
            array(
                'id' => 2199,
                'name' => 'Distrito Capital',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            199 =>
            array(
                'id' => 2200,
                'name' => 'Vargas',
                'country' => 242,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            200 =>
            array(
                'id' => 2201,
                'name' => 'Dong Bang Song Cuu Long',
                'country' => 243,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            201 =>
            array(
                'id' => 2202,
                'name' => 'Dong Bang Song Hong',
                'country' => 243,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            202 =>
            array(
                'id' => 2203,
                'name' => 'Dong Nam Bo',
                'country' => 243,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            203 =>
            array(
                'id' => 2204,
                'name' => 'Duyen Hai Mien Trung',
                'country' => 243,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            204 =>
            array(
                'id' => 2205,
                'name' => 'Khu Bon Cu',
                'country' => 243,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            205 =>
            array(
                'id' => 2206,
                'name' => 'Mien Nui Va Trung Du',
                'country' => 243,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            206 =>
            array(
                'id' => 2207,
                'name' => 'Thai Nguyen',
                'country' => 243,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            207 =>
            array(
                'id' => 2208,
                'name' => 'Mata-Utu',
                'country' => 244,
                'deleted_at' => NULL,
                'created_at' => '2022-03-08 11:15:06',
                'updated_at' => NULL,
            ),
            208 =>
            array(
                'id' => 2209,
                'name' => 'Boyacá',
                'country' => 44,
                'deleted_at' => NULL,
                'created_at' => '2022-05-26 22:39:52',
                'updated_at' => NULL,
            ),
            209 =>
            array(
                'id' => 2210,
                'name' => 'Ciudad de México',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-05-26 22:39:52',
                'updated_at' => NULL,
            ),
            210 =>
            array(
                'id' => 2211,
                'name' => 'Querétaro',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-05-26 22:39:53',
                'updated_at' => NULL,
            ),
            211 =>
            array(
                'id' => 2212,
                'name' => 'Veracruz',
                'country' => 141,
                'deleted_at' => NULL,
                'created_at' => '2022-05-26 22:39:53',
                'updated_at' => NULL,
            ),
        ));
        \DB::table('cities')->delete();

        \DB::table('cities')->insert(array(
            0 =>
            array(
                'name' => 'Caracas',
                'country_id' => 242,
                'state_id' => 2199,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'name' => 'Maracaibo',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'name' => 'Valencia',
                'country_id' => 242,
                'state_id' => 2182,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'name' => 'Barquisimeto',
                'country_id' => 242,
                'state_id' => 2187,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array(
                'name' => 'Ciudad Guayana',
                'country_id' => 242,
                'state_id' => 2181,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array(
                'name' => 'Catia La Mar',
                'country_id' => 242,
                'state_id' => 2200,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array(
                'name' => 'Ciudad 2181',
                'country_id' => 242,
                'state_id' => 2181,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array(
                'name' => 'Maturín',
                'country_id' => 242,
                'state_id' => 2190,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array(
                'name' => 'Santa Teresa del Tuy',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array(
                'name' => 'Barcelona',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array(
                'name' => 'San Cristóbal',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array(
                'name' => 'Maracay',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array(
                'name' => 'Cumaná',
                'country_id' => 242,
                'state_id' => 2193,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array(
                'name' => 'Cabimas',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            14 =>
            array(
                'name' => 'Puerto La Cruz',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            15 =>
            array(
                'name' => 'Merida',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            16 =>
            array(
                'name' => 'Punto Fijo',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            17 =>
            array(
                'name' => 'Barinas',
                'country_id' => 242,
                'state_id' => 2180,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array(
                'name' => 'Coro',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            19 =>
            array(
                'name' => 'La Guaira',
                'country_id' => 242,
                'state_id' => 2200,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            20 =>
            array(
                'name' => 'Turmero',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            21 =>
            array(
                'name' => 'Los Teques',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            22 =>
            array(
                'name' => 'Baruta',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            23 =>
            array(
                'name' => 'Cúa',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            24 =>
            array(
                'name' => 'La Victoria',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            25 =>
            array(
                'name' => 'El Tigre',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            26 =>
            array(
                'name' => 'Puerto Cabello',
                'country_id' => 242,
                'state_id' => 2182,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            27 =>
            array(
                'name' => 'Guarenas',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            28 =>
            array(
                'name' => 'Guacara',
                'country_id' => 242,
                'state_id' => 2182,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            29 =>
            array(
                'name' => 'Tocuyito',
                'country_id' => 242,
                'state_id' => 2182,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            30 =>
            array(
                'name' => 'Acarigua',
                'country_id' => 242,
                'state_id' => 2192,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            31 =>
            array(
                'name' => 'Guanare',
                'country_id' => 242,
                'state_id' => 2192,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            32 =>
            array(
                'name' => 'Valera',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            33 =>
            array(
                'name' => 'Guatire',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            34 =>
            array(
                'name' => 'San Diego',
                'country_id' => 242,
                'state_id' => 2182,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            35 =>
            array(
                'name' => 'Carúpano',
                'country_id' => 242,
                'state_id' => 2193,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            36 =>
            array(
                'name' => 'Santa Rita',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            37 =>
            array(
                'name' => 'Anaco',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            38 =>
            array(
                'name' => 'Palo Negro',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            39 =>
            array(
                'name' => 'Ocumare del Tuy',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            40 =>
            array(
                'name' => 'Villa de Cura',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            41 =>
            array(
                'name' => 'Yaritagua',
                'country_id' => 242,
                'state_id' => 2196,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            42 =>
            array(
                'name' => 'Calabozo',
                'country_id' => 242,
                'state_id' => 2186,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            43 =>
            array(
                'name' => 'Táriba',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            44 =>
            array(
                'name' => 'Guasdualito',
                'country_id' => 242,
                'state_id' => 2178,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            45 =>
            array(
                'name' => 'Machiques',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            46 =>
            array(
                'name' => 'San Fernando',
                'country_id' => 242,
                'state_id' => 2178,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            47 =>
            array(
                'name' => 'Cagua',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            48 =>
            array(
                'name' => 'Ciudad Ojeda',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            49 =>
            array(
                'name' => 'Porlamar',
                'country_id' => 242,
                'state_id' => 2191,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            50 =>
            array(
                'name' => 'San Carlos',
                'country_id' => 242,
                'state_id' => 2183,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            51 =>
            array(
                'name' => 'Charalla242',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            52 =>
            array(
                'name' => 'Valle de La Pascua',
                'country_id' => 242,
                'state_id' => 2186,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            53 =>
            array(
                'name' => 'Carora',
                'country_id' => 242,
                'state_id' => 2187,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            54 =>
            array(
                'name' => 'Santa Lucía',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            55 =>
            array(
                'name' => 'Quíbor',
                'country_id' => 242,
                'state_id' => 2187,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            56 =>
            array(
                'name' => 'Socopó',
                'country_id' => 242,
                'state_id' => 2180,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            57 =>
            array(
                'name' => 'El Limón',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            58 =>
            array(
                'name' => 'Rubio',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            59 =>
            array(
                'name' => 'Cantaura',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            60 =>
            array(
                'name' => 'La Grita',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            61 =>
            array(
                'name' => 'Maiquetía',
                'country_id' => 242,
                'state_id' => 2200,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            62 =>
            array(
                'name' => 'San Juan de los Morros',
                'country_id' => 242,
                'state_id' => 2186,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            63 =>
            array(
                'name' => 'Tucupita',
                'country_id' => 242,
                'state_id' => 2184,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            64 =>
            array(
                'name' => 'Puerto Ayacucho',
                'country_id' => 242,
                'state_id' => 2176,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            65 =>
            array(
                'name' => 'San Carlos del 2197',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            66 =>
            array(
                'name' => 'San Felipe',
                'country_id' => 242,
                'state_id' => 2196,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            67 =>
            array(
                'name' => 'Cabudare',
                'country_id' => 242,
                'state_id' => 2187,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            68 =>
            array(
                'name' => 'Caripito',
                'country_id' => 242,
                'state_id' => 2190,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            69 =>
            array(
                'name' => 'Zaraza',
                'country_id' => 242,
                'state_id' => 2186,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            70 =>
            array(
                'name' => 'San Antonio del 2194',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            71 =>
            array(
                'name' => 'Upata',
                'country_id' => 242,
                'state_id' => 2181,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            72 =>
            array(
                'name' => 'Trujillo',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            73 =>
            array(
                'name' => 'Sanare',
                'country_id' => 242,
                'state_id' => 2187,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            74 =>
            array(
                'name' => 'Santa Cruz de Los Taques',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            75 =>
            array(
                'name' => 'El Tocuyo',
                'country_id' => 242,
                'state_id' => 2187,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            76 =>
            array(
                'name' => 'Altagracia de Orituco',
                'country_id' => 242,
                'state_id' => 2186,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            77 =>
            array(
                'name' => 'Lecherías',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            78 =>
            array(
                'name' => 'La Asunción',
                'country_id' => 242,
                'state_id' => 2191,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            79 =>
            array(
                'name' => 'Santa Rita',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            80 =>
            array(
                'name' => 'Sabaneta',
                'country_id' => 242,
                'state_id' => 2180,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            81 =>
            array(
                'name' => 'Puerto Píritu',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            82 =>
            array(
                'name' => 'La Colonia Tovar',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            83 =>
            array(
                'name' => 'Tucacas',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            84 =>
            array(
                'name' => 'Onoto',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            85 =>
            array(
                'name' => 'San José de Aerocuar',
                'country_id' => 242,
                'state_id' => 2193,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            86 =>
            array(
                'name' => 'Uracoa',
                'country_id' => 242,
                'state_id' => 2190,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            87 =>
            array(
                'name' => 'Bruzual',
                'country_id' => 242,
                'state_id' => 2178,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            88 =>
            array(
                'name' => 'Mucuchíes',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            89 =>
            array(
                'name' => 'Mapire',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            90 =>
            array(
                'name' => 'San Fernando de Atabapo',
                'country_id' => 242,
                'state_id' => 2176,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            91 =>
            array(
                'name' => 'San Carlos de Río Negro',
                'country_id' => 242,
                'state_id' => 2176,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            92 =>
            array(
                'name' => 'Maroa',
                'country_id' => 242,
                'state_id' => 2176,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            93 =>
            array(
                'name' => 'La Esmeralda',
                'country_id' => 242,
                'state_id' => 2176,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            94 =>
            array(
                'name' => 'Chacao',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            95 =>
            array(
                'name' => 'San Francisco',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            96 =>
            array(
                'name' => 'Pampatar',
                'country_id' => 242,
                'state_id' => 2191,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            97 =>
            array(
                'name' => 'Petare',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            98 =>
            array(
                'name' => 'San Antonio de Los Altos',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            99 =>
            array(
                'name' => 'Los Guayos',
                'country_id' => 242,
                'state_id' => 2182,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            100 =>
            array(
                'name' => 'Naguanagua',
                'country_id' => 242,
                'state_id' => 2182,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            101 =>
            array(
                'name' => 'El Hatillo',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            102 =>
            array(
                'name' => 'El Valle del Espíritu Santo',
                'country_id' => 242,
                'state_id' => 2191,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            103 =>
            array(
                'name' => 'Juangriego',
                'country_id' => 242,
                'state_id' => 2191,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            104 =>
            array(
                'name' => 'Palmira',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            105 =>
            array(
                'name' => 'Capacho Nuevo',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            106 =>
            array(
                'name' => 'Capacho Viejo',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            107 =>
            array(
                'name' => 'Santa Cruz',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            108 =>
            array(
                'name' => 'Motatán',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            109 =>
            array(
                'name' => 'Mariara',
                'country_id' => 242,
                'state_id' => 2182,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            110 =>
            array(
                'name' => 'El Junko',
                'country_id' => 242,
                'state_id' => 2200,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            111 =>
            array(
                'name' => 'La Plaza de P2179chí',
                'country_id' => 242,
                'state_id' => 2191,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            112 =>
            array(
                'name' => 'Santa Ana',
                'country_id' => 242,
                'state_id' => 2191,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            113 =>
            array(
                'name' => 'San Juan Bautista',
                'country_id' => 242,
                'state_id' => 2191,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            114 =>
            array(
                'name' => 'San Joaquín',
                'country_id' => 242,
                'state_id' => 2182,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            115 =>
            array(
                'name' => 'San Mateo',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            116 =>
            array(
                'name' => 'Carvajal',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            117 =>
            array(
                'name' => 'Carrizal',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            118 =>
            array(
                'name' => 'San Josecito',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            119 =>
            array(
                'name' => 'Ureña',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            120 =>
            array(
                'name' => 'Caraballeda',
                'country_id' => 242,
                'state_id' => 2200,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            121 =>
            array(
                'name' => 'Naiguatá',
                'country_id' => 242,
                'state_id' => 2200,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            122 =>
            array(
                'name' => 'La Sabana',
                'country_id' => 242,
                'state_id' => 2200,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            123 =>
            array(
                'name' => 'Macuto',
                'country_id' => 242,
                'state_id' => 2200,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            124 =>
            array(
                'name' => 'Carayaca',
                'country_id' => 242,
                'state_id' => 2200,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            125 =>
            array(
                'name' => 'El Consejo',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            126 =>
            array(
                'name' => 'Cojedes',
                'country_id' => 242,
                'state_id' => 2183,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            127 =>
            array(
                'name' => 'Duaca',
                'country_id' => 242,
                'state_id' => 2187,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            128 =>
            array(
                'name' => 'Pampán',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            129 =>
            array(
                'name' => 'Guanta',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            130 =>
            array(
                'name' => 'Las Tejerías',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            131 =>
            array(
                'name' => 'San Francisco de Yare',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            132 =>
            array(
                'name' => 'Boraure',
                'country_id' => 242,
                'state_id' => 2196,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            133 =>
            array(
                'name' => 'Guama',
                'country_id' => 242,
                'state_id' => 2196,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            134 =>
            array(
                'name' => 'San Pablo',
                'country_id' => 242,
                'state_id' => 2196,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            135 =>
            array(
                'name' => 'Tovar',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            136 =>
            array(
                'name' => 'Agua Blanca',
                'country_id' => 242,
                'state_id' => 2192,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            137 =>
            array(
                'name' => 'Araure',
                'country_id' => 242,
                'state_id' => 2192,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            138 =>
            array(
                'name' => 'Betijoque',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            139 =>
            array(
                'name' => 'Escuque',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            140 =>
            array(
                'name' => 'Urachiche',
                'country_id' => 242,
                'state_id' => 2196,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            141 =>
            array(
                'name' => 'Sabana de Parra',
                'country_id' => 242,
                'state_id' => 2196,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            142 =>
            array(
                'name' => 'El Vigía',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            143 =>
            array(
                'name' => 'Tinaquillo',
                'country_id' => 242,
                'state_id' => 2183,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            144 =>
            array(
                'name' => 'Tabay',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            145 =>
            array(
                'name' => 'Morón',
                'country_id' => 242,
                'state_id' => 2182,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            146 =>
            array(
                'name' => 'Güigüe',
                'country_id' => 242,
                'state_id' => 2182,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            147 =>
            array(
                'name' => 'San Pedro de Coche',
                'country_id' => 242,
                'state_id' => 2191,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            148 =>
            array(
                'name' => 'Michelena',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            149 =>
            array(
                'name' => 'Bejuma',
                'country_id' => 242,
                'state_id' => 2182,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            150 =>
            array(
                'name' => 'Montalbán',
                'country_id' => 242,
                'state_id' => 2182,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            151 =>
            array(
                'name' => 'San José de Barlo242nto',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            152 =>
            array(
                'name' => 'Cordero',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            153 =>
            array(
                'name' => 'Chivacoa',
                'country_id' => 242,
                'state_id' => 2196,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            154 =>
            array(
                'name' => 'Punta de Mata',
                'country_id' => 242,
                'state_id' => 2190,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            155 =>
            array(
                'name' => 'Bailadores',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            156 =>
            array(
                'name' => 'Tía Juana',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            157 =>
            array(
                'name' => 'El Dividi242',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            158 =>
            array(
                'name' => 'Ejido',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            159 =>
            array(
                'name' => 'San Rafael de Onoto',
                'country_id' => 242,
                'state_id' => 2192,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            160 =>
            array(
                'name' => 'Independencia',
                'country_id' => 242,
                'state_id' => 2196,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            161 =>
            array(
                'name' => 'Cocorote',
                'country_id' => 242,
                'state_id' => 2196,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            162 =>
            array(
                'name' => 'Pampanito',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            163 =>
            array(
                'name' => 'Mamporal',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            164 =>
            array(
                'name' => 'Colón',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            165 =>
            array(
                'name' => 'Barinitas',
                'country_id' => 242,
                'state_id' => 2180,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            166 =>
            array(
                'name' => 'Higuerote',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            167 =>
            array(
                'name' => 'El Toro',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            168 =>
            array(
                'name' => 'Marigüitar',
                'country_id' => 242,
                'state_id' => 2193,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            169 =>
            array(
                'name' => 'Zea',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            170 =>
            array(
                'name' => 'Píritu',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            171 =>
            array(
                'name' => 'Paraíso de Chabasquén',
                'country_id' => 242,
                'state_id' => 2192,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            172 =>
            array(
                'name' => 'Obispos',
                'country_id' => 242,
                'state_id' => 2180,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            173 =>
            array(
                'name' => 'Campo Elías',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            174 =>
            array(
                'name' => 'Biscucuy',
                'country_id' => 242,
                'state_id' => 2192,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            175 =>
            array(
                'name' => 'Las Mesas',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            176 =>
            array(
                'name' => 'Valle de Guanape',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            177 =>
            array(
                'name' => 'Macapo',
                'country_id' => 242,
                'state_id' => 2183,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            178 =>
            array(
                'name' => 'Bobures',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            179 =>
            array(
                'name' => 'Güiria',
                'country_id' => 242,
                'state_id' => 2193,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            180 =>
            array(
                'name' => 'Lagunillas',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            181 =>
            array(
                'name' => 'Boconoito',
                'country_id' => 242,
                'state_id' => 2192,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            182 =>
            array(
                'name' => 'Santa Ana',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            183 =>
            array(
                'name' => 'Pueblo Llano',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            184 =>
            array(
                'name' => 'La 242la de Coro',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            185 =>
            array(
                'name' => 'Santa Elena de Arenales',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            186 =>
            array(
                'name' => 'San Rafael de El Moján',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            187 =>
            array(
                'name' => 'Río Caribe',
                'country_id' => 242,
                'state_id' => 2193,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            188 =>
            array(
                'name' => 'Sabana de Mendoza',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            189 =>
            array(
                'name' => 'Sabana Grande',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            190 =>
            array(
                'name' => 'Santa Isabel',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            191 =>
            array(
                'name' => 'Araya',
                'country_id' => 242,
                'state_id' => 2193,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            192 =>
            array(
                'name' => 'Yaracal',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            193 =>
            array(
                'name' => 'Chejendé',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            194 =>
            array(
                'name' => 'Punta de Piedras',
                'country_id' => 242,
                'state_id' => 2191,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            195 =>
            array(
                'name' => 'Boca de Río',
                'country_id' => 242,
                'state_id' => 2191,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            196 =>
            array(
                'name' => 'La Quebrada',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            197 =>
            array(
                'name' => 'Arapuey',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            198 =>
            array(
                'name' => 'Yaguaraparo',
                'country_id' => 242,
                'state_id' => 2193,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            199 =>
            array(
                'name' => 'Seboruco',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            200 =>
            array(
                'name' => 'Nueva Bolivia',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            201 =>
            array(
                'name' => 'San Antonio del Golfo',
                'country_id' => 242,
                'state_id' => 2193,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            202 =>
            array(
                'name' => 'Los Puertos de Altagracia',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            203 =>
            array(
                'name' => 'La Fría',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            204 =>
            array(
                'name' => 'Tocópero',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            205 =>
            array(
                'name' => 'Boconó',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            206 =>
            array(
                'name' => 'San Sebastián',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            207 =>
            array(
                'name' => 'San Casimiro',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            208 =>
            array(
                'name' => 'Sinamaica',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            209 =>
            array(
                'name' => 'Santa Cruz de Mora',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            210 =>
            array(
                'name' => 'Aragua',
                'country_id' => 242,
                'state_id' => 2190,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            211 =>
            array(
                'name' => 'Irapa',
                'country_id' => 242,
                'state_id' => 2193,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            212 =>
            array(
                'name' => 'Píritu',
                'country_id' => 242,
                'state_id' => 2192,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            213 =>
            array(
                'name' => 'Villa Bruzual',
                'country_id' => 242,
                'state_id' => 2192,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            214 =>
            array(
                'name' => 'Lobatera',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            215 =>
            array(
                'name' => 'Cumanacoa',
                'country_id' => 242,
                'state_id' => 2193,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            216 =>
            array(
                'name' => 'Concepción',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            217 =>
            array(
                'name' => 'San Timoteo',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            218 =>
            array(
                'name' => 'Caucagua',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            219 =>
            array(
                'name' => 'El Piñal',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            220 =>
            array(
                'name' => 'Timotes',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            221 =>
            array(
                'name' => 'Bachaquero',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            222 =>
            array(
                'name' => 'Puerto Cumarebo',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            223 =>
            array(
                'name' => 'La Tendida',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            224 =>
            array(
                'name' => 'Pueblo Nuevo El Chivo',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            225 =>
            array(
                'name' => 'Sarare',
                'country_id' => 242,
                'state_id' => 2187,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            226 =>
            array(
                'name' => 'Torondoy',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            227 =>
            array(
                'name' => 'Santa Apolonia',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            228 =>
            array(
                'name' => 'La Concepción',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            229 =>
            array(
                'name' => 'Quiriquire',
                'country_id' => 242,
                'state_id' => 2190,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            230 =>
            array(
                'name' => 'Cariaco',
                'country_id' => 242,
                'state_id' => 2193,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            231 =>
            array(
                'name' => 'Casanay',
                'country_id' => 242,
                'state_id' => 2193,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            232 =>
            array(
                'name' => 'El Cobre',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            233 =>
            array(
                'name' => 'Caripe',
                'country_id' => 242,
                'state_id' => 2190,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            234 =>
            array(
                'name' => 'Ocumare de la Costa',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            235 =>
            array(
                'name' => 'Río Chico',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            236 =>
            array(
                'name' => 'San Simón',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            237 =>
            array(
                'name' => 'La Azulita',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            238 =>
            array(
                'name' => 'Aroa',
                'country_id' => 242,
                'state_id' => 2196,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            239 =>
            array(
                'name' => 'Palmasola',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            240 =>
            array(
                'name' => 'Farriar',
                'country_id' => 242,
                'state_id' => 2196,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            241 =>
            array(
                'name' => 'Yumare',
                'country_id' => 242,
                'state_id' => 2196,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            242 =>
            array(
                'name' => 'Delicias',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            243 =>
            array(
                'name' => 'San Antonio',
                'country_id' => 242,
                'state_id' => 2190,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            244 =>
            array(
                'name' => 'El Pao',
                'country_id' => 242,
                'state_id' => 2183,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            245 =>
            array(
                'name' => 'Tinaco',
                'country_id' => 242,
                'state_id' => 2183,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            246 =>
            array(
                'name' => 'Coloncito',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            247 =>
            array(
                'name' => 'Umuquena',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            248 =>
            array(
                'name' => 'Mirimire',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            249 =>
            array(
                'name' => 'Nirgua',
                'country_id' => 242,
                'state_id' => 2196,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            250 =>
            array(
                'name' => 'Delta Amacuro',
                'country_id' => 242,
                'state_id' => 2182,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            251 =>
            array(
                'name' => 'Tucaní',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            252 =>
            array(
                'name' => 'Santo Domingo',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            253 =>
            array(
                'name' => 'Pueblo Nuevo',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            254 =>
            array(
                'name' => 'Monte Carmelo',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            255 =>
            array(
                'name' => 'San Juan de Payara',
                'country_id' => 242,
                'state_id' => 2178,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            256 =>
            array(
                'name' => 'San Juan de los Cayos',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            257 =>
            array(
                'name' => 'Santa Bárbara',
                'country_id' => 242,
                'state_id' => 2190,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            258 =>
            array(
                'name' => 'Carache',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            259 =>
            array(
                'name' => 'La Villa del Rosario',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            260 =>
            array(
                'name' => 'Churuguara',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            261 =>
            array(
                'name' => 'Boca de Uchire',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            262 =>
            array(
                'name' => 'Cúpira',
                'country_id' => 242,
                'state_id' => 2189,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            263 =>
            array(
                'name' => 'Ospino',
                'country_id' => 242,
                'state_id' => 2192,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            264 =>
            array(
                'name' => 'Tunapuy',
                'country_id' => 242,
                'state_id' => 2193,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            265 =>
            array(
                'name' => 'Abejales',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            266 =>
            array(
                'name' => 'Libertad',
                'country_id' => 242,
                'state_id' => 2180,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            267 =>
            array(
                'name' => 'Barrancas',
                'country_id' => 242,
                'state_id' => 2180,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            268 =>
            array(
                'name' => 'Chichiriviche',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            269 =>
            array(
                'name' => 'Camaguán',
                'country_id' => 242,
                'state_id' => 2186,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            270 =>
            array(
                'name' => 'El Playón',
                'country_id' => 242,
                'state_id' => 2192,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            271 =>
            array(
                'name' => 'Clarines',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            272 =>
            array(
                'name' => 'Camatagua',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            273 =>
            array(
                'name' => 'Siquisique',
                'country_id' => 242,
                'state_id' => 2187,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            274 =>
            array(
                'name' => 'Caicara',
                'country_id' => 242,
                'state_id' => 2190,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            275 =>
            array(
                'name' => 'Barrancas',
                'country_id' => 242,
                'state_id' => 2190,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            276 =>
            array(
                'name' => 'Dabajuro',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            277 =>
            array(
                'name' => 'Santa Cruz de Bucaral',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            278 =>
            array(
                'name' => 'Queniquea',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            279 =>
            array(
                'name' => 'San José de 2181',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            280 =>
            array(
                'name' => 'Tucupido',
                'country_id' => 242,
                'state_id' => 2186,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            281 =>
            array(
                'name' => 'Santa María de Caparo',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            282 =>
            array(
                'name' => 'Guaraque',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            283 =>
            array(
                'name' => 'San Luis',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            284 =>
            array(
                'name' => 'El Sombrero',
                'country_id' => 242,
                'state_id' => 2186,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            285 =>
            array(
                'name' => 'Mene de Mauroa',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            286 =>
            array(
                'name' => 'Cabure',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            287 =>
            array(
                'name' => 'Pregonero',
                'country_id' => 242,
                'state_id' => 2194,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            288 =>
            array(
                'name' => 'Temblador',
                'country_id' => 242,
                'state_id' => 2190,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            289 =>
            array(
                'name' => 'Santa Bárbara',
                'country_id' => 242,
                'state_id' => 2180,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            290 =>
            array(
                'name' => 'El Pilar',
                'country_id' => 242,
                'state_id' => 2193,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            291 =>
            array(
                'name' => 'El Cantón',
                'country_id' => 242,
                'state_id' => 2180,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            292 =>
            array(
                'name' => 'Santa Ana',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            293 =>
            array(
                'name' => 'Tumeremo',
                'country_id' => 242,
                'state_id' => 2181,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            294 =>
            array(
                'name' => 'Biruaca',
                'country_id' => 242,
                'state_id' => 2178,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            295 =>
            array(
                'name' => 'Libertad',
                'country_id' => 242,
                'state_id' => 2183,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            296 =>
            array(
                'name' => 'Las 242gas',
                'country_id' => 242,
                'state_id' => 2183,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            297 =>
            array(
                'name' => 'San José de Guaribe',
                'country_id' => 242,
                'state_id' => 2186,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            298 =>
            array(
                'name' => 'Urumaco',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            299 =>
            array(
                'name' => 'La Cruz de Taratara',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            300 =>
            array(
                'name' => 'Barbacoas',
                'country_id' => 242,
                'state_id' => 2179,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            301 =>
            array(
                'name' => 'San José de Guanipa',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            302 =>
            array(
                'name' => 'Sierra Imataca',
                'country_id' => 242,
                'state_id' => 2184,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            303 =>
            array(
                'name' => 'Ciudad Bolivia',
                'country_id' => 242,
                'state_id' => 2180,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            304 =>
            array(
                'name' => '2179 de Barcelona',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            305 =>
            array(
                'name' => 'Pariaguán',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            306 =>
            array(
                'name' => 'Píritu',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            307 =>
            array(
                'name' => 'Guanarito',
                'country_id' => 242,
                'state_id' => 2192,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            308 =>
            array(
                'name' => 'Encontrados',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            309 =>
            array(
                'name' => 'Canaguá',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            310 =>
            array(
                'name' => 'El Socorro',
                'country_id' => 242,
                'state_id' => 2186,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            311 =>
            array(
                'name' => 'El Paradero',
                'country_id' => 242,
                'state_id' => 2195,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            312 =>
            array(
                'name' => 'Casigua El Cubo',
                'country_id' => 242,
                'state_id' => 2197,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            313 =>
            array(
                'name' => 'Ciudad de Nutrias',
                'country_id' => 242,
                'state_id' => 2180,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            314 =>
            array(
                'name' => 'Capatárida',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            315 =>
            array(
                'name' => 'Guayabal',
                'country_id' => 242,
                'state_id' => 2186,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            316 =>
            array(
                'name' => 'Papelón',
                'country_id' => 242,
                'state_id' => 2192,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            317 =>
            array(
                'name' => 'San Mateo',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            318 =>
            array(
                'name' => 'El Chaparro',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            319 =>
            array(
                'name' => 'Aguasay',
                'country_id' => 242,
                'state_id' => 2190,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            320 =>
            array(
                'name' => 'Ortiz',
                'country_id' => 242,
                'state_id' => 2186,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            321 =>
            array(
                'name' => 'Jacura',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            322 =>
            array(
                'name' => 'Chaguaramas',
                'country_id' => 242,
                'state_id' => 2186,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            323 =>
            array(
                'name' => 'Las Mercedes',
                'country_id' => 242,
                'state_id' => 2186,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            324 =>
            array(
                'name' => 'El Palmar',
                'country_id' => 242,
                'state_id' => 2181,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            325 =>
            array(
                'name' => 'Caicara del Orinoco',
                'country_id' => 242,
                'state_id' => 2181,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            326 =>
            array(
                'name' => 'Soledad',
                'country_id' => 242,
                'state_id' => 2177,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            327 =>
            array(
                'name' => 'Achaguas',
                'country_id' => 242,
                'state_id' => 2178,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            328 =>
            array(
                'name' => 'Aricagua',
                'country_id' => 242,
                'state_id' => 2188,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            329 =>
            array(
                'name' => 'Arismendi',
                'country_id' => 242,
                'state_id' => 2180,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            330 =>
            array(
                'name' => 'Pedregal',
                'country_id' => 242,
                'state_id' => 2185,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            331 =>
            array(
                'name' => 'El Baúl',
                'country_id' => 242,
                'state_id' => 2183,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            332 =>
            array(
                'name' => 'Curiapo',
                'country_id' => 242,
                'state_id' => 2184,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            333 =>
            array(
                'name' => 'Guasipati',
                'country_id' => 242,
                'state_id' => 2181,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            334 =>
            array(
                'name' => 'Pedernales',
                'country_id' => 242,
                'state_id' => 2184,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            335 =>
            array(
                'name' => 'El Callao',
                'country_id' => 242,
                'state_id' => 2181,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            336 =>
            array(
                'name' => 'Santa María de Ipire',
                'country_id' => 242,
                'state_id' => 2186,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            337 =>
            array(
                'name' => 'Elorza',
                'country_id' => 242,
                'state_id' => 2178,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            338 =>
            array(
                'name' => 'Maripa',
                'country_id' => 242,
                'state_id' => 2181,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            339 =>
            array(
                'name' => 'Santa Elena de Uairén',
                'country_id' => 242,
                'state_id' => 2181,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            340 =>
            array(
                'name' => 'Ciudad Piar',
                'country_id' => 242,
                'state_id' => 2181,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            341 =>
            array(
                'name' => 'Isla Ratón',
                'country_id' => 242,
                'state_id' => 2176,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
            342 =>
            array(
                'name' => 'San Juan de Manapiare',
                'country_id' => 242,
                'state_id' => 2176,
                'created_at' => '2022-03-08 11:15:06',
                'deleted_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
