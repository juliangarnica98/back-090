<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stores')->delete();
        
        \DB::table('stores')->insert(array (
            0 => 
            array (
                'id' => 1,
              
                'description' => 'YAHAD VLL CLI LA LUNA',
                'status' => 1,
                'regional_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
              
                'description' => 'YOI PEI UNICENTRO PEREIRA',
                'status' => 1,
                'regional_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
              
                'description' => 'LLP BOG CC HEROES',
                'status' => 1,
                'regional_id' => 4,
            ),
            3 => 
            array (
                'id' => 4,
              
                'description' => 'LLP PSO PLAZA DE NARI?O',
                'status' => 1,
                'regional_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
              
                'description' => 'LILI&YOI SCH YAHAD VENTURA SOACHA',
                'status' => 1,
                'regional_id' => 2,
            ),
            5 => 
            array (
                'id' => 6,
              
                'description' => 'YOI CLI EXITO LA FLORA L-0204A',
                'status' => 1,
                'regional_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
              
                'description' => 'LLP PEI CENTRO CRA 7',
                'status' => 1,
                'regional_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
              
                'description' => 'LILI&YOI YAHAAD ATL BRQ CC PASEO',
                'status' => 1,
                'regional_id' => 5,
            ),
            8 => 
            array (
                'id' => 9,
              
                'description' => 'YAHAD UNICO CALI',
                'status' => 1,
                'regional_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
              
                'description' => 'LLP CLD CALDAS CRA 49',
                'status' => 1,
                'regional_id' => 3,
            ),
            10 => 
            array (
                'id' => 11,
              
                'description' => 'YOI SOL CC GRAN PLAZA SOLEDAD L-1-53',
                'status' => 1,
                'regional_id' => 5,
            ),
            11 => 
            array (
                'id' => 12,
              
                'description' => 'L&Y YAH CC NOVACENTRO PASTO',
                'status' => 1,
                'regional_id' => 1,
            ),
            12 => 
            array (
                'id' => 13,
              
                'description' => 'LLP PSO CC IDEMA L-60',
                'status' => 1,
                'regional_id' => 1,
            ),
            13 => 
            array (
                'id' => 14,
              
                'description' => 'LILI&YOI YAHAD BOG RESTREPO CLL16',
                'status' => 1,
                'regional_id' => 2,
            ),
            14 => 
            array (
                'id' => 15,
              
                'description' => 'LLP BOG RESTREPO CLL 18 SUR',
                'status' => 1,
                'regional_id' => 2,
            ),
            15 => 
            array (
                'id' => 16,
              
                'description' => 'LILIPINK VLL CLI CEIBAS LOWCOST',
                'status' => 1,
                'regional_id' => 1,
            ),
            16 => 
            array (
                'id' => 17,
              
                'description' => 'YOI CTG EXITO MATUNA',
                'status' => 1,
                'regional_id' => 5,
            ),
            17 => 
            array (
                'id' => 18,
              
                'description' => 'YOI CUC EXITO SAN MATEO',
                'status' => 1,
                'regional_id' => 3,
            ),
            18 => 
            array (
                'id' => 19,
              
                'description' => 'YOI BOG EXITO CHAPINERO',
                'status' => 1,
                'regional_id' => 4,
            ),
            19 => 
            array (
                'id' => 20,
              
                'description' => 'YOI BGA CC LA CUESTA L-149-150',
                'status' => 1,
                'regional_id' => 3,
            ),
            20 => 
            array (
                'id' => 21,
              
                'description' => 'LLP BOG CC HAYUELOS L-1-103',
                'status' => 1,
                'regional_id' => 4,
            ),
            21 => 
            array (
                'id' => 22,
              
                'description' => 'LLP DTM CC LIBERTADORES L-102',
                'status' => 1,
                'regional_id' => 4,
            ),
            22 => 
            array (
                'id' => 23,
              
                'description' => 'YOI EXITO ANT BELLO CENTRO',
                'status' => 1,
                'regional_id' => 3,
            ),
            23 => 
            array (
                'id' => 24,
              
                'description' => 'L&Y YAH BOG TOBERIN',
                'status' => 1,
                'regional_id' => 4,
            ),
            24 => 
            array (
                'id' => 25,
              
                'description' => 'LLP VUP CC MAYALES L-81',
                'status' => 1,
                'regional_id' => 5,
            ),
            25 => 
            array (
                'id' => 26,
              
                'description' => 'LLP CLI CC PALMETO PLAZA L1-71',
                'status' => 1,
                'regional_id' => 1,
            ),
            26 => 
            array (
                'id' => 27,
              
                'description' => 'YOI MDE EXITO UNICENTRO',
                'status' => 1,
                'regional_id' => 3,
            ),
            27 => 
            array (
                'id' => 28,
              
                'description' => 'YOI BOG EXITO OCCIDENTE',
                'status' => 1,
                'regional_id' => 4,
            ),
            28 => 
            array (
                'id' => 29,
              
                'description' => 'LLP BGA CC MEGAMALL L-20-21',
                'status' => 1,
                'regional_id' => 3,
            ),
            29 => 
            array (
                'id' => 30,
              
                'description' => 'LLP SMR CC ARRECIFE L-104',
                'status' => 1,
                'regional_id' => 5,
            ),
            30 => 
            array (
                'id' => 31,
              
                'description' => 'YOI IBE EXITO IBAGUE',
                'status' => 1,
                'regional_id' => 2,
            ),
            31 => 
            array (
                'id' => 32,
              
                'description' => 'LLP CIE CRA 11 CIENAGA',
                'status' => 1,
                'regional_id' => 5,
            ),
            32 => 
            array (
                'id' => 33,
              
                'description' => 'L&Y YAH SAD SAN ANDRES',
                'status' => 1,
                'regional_id' => 5,
            ),
            33 => 
            array (
                'id' => 34,
              
                'description' => 'LLP IPI CENTRO CRA 5',
                'status' => 1,
                'regional_id' => 1,
            ),
            34 => 
            array (
                'id' => 35,
              
                'description' => 'LLP GIR CENTRO CRA10',
                'status' => 1,
                'regional_id' => 2,
            ),
            35 => 
            array (
                'id' => 36,
              
                'description' => 'L&Y BOG CIUDAD MONTE',
                'status' => 1,
                'regional_id' => 2,
            ),
            36 => 
            array (
                'id' => 37,
              
                'description' => 'LLP CLI CC COSMOCENTRO L-2G',
                'status' => 1,
                'regional_id' => 1,
            ),
            37 => 
            array (
                'id' => 38,
              
                'description' => 'LLP NVA CC SAN PEDRO',
                'status' => 1,
                'regional_id' => 2,
            ),
            38 => 
            array (
                'id' => 39,
              
                'description' => 'LLP BOG CC GRAN PLAZA ENSUE?O L-158',
                'status' => 1,
                'regional_id' => 2,
            ),
            39 => 
            array (
                'id' => 40,
              
                'description' => 'LILI&YOI YAHAD CLI CENTRO',
                'status' => 1,
                'regional_id' => 1,
            ),
            40 => 
            array (
                'id' => 41,
              
                'description' => 'LLP IBE CC LA ESTACION L-2-02',
                'status' => 1,
                'regional_id' => 2,
            ),
            41 => 
            array (
                'id' => 42,
              
                'description' => 'LLP CHI CC FONTANAR',
                'status' => 1,
                'regional_id' => 4,
            ),
            42 => 
            array (
                'id' => 43,
              
                'description' => 'LLP SMR CC ZAZUE L-1-21',
                'status' => 1,
                'regional_id' => 5,
            ),
            43 => 
            array (
                'id' => 44,
              
                'description' => 'LLP CLI PASO ANCHO',
                'status' => 1,
                'regional_id' => 1,
            ),
            44 => 
            array (
                'id' => 45,
              
                'description' => 'L&Y YAH ZPQ ZIPAQUIRA',
                'status' => 1,
                'regional_id' => 4,
            ),
            45 => 
            array (
                'id' => 46,
              
                'description' => 'LLP MTR CC NUESTRO MONTERIA L-0295',
                'status' => 1,
                'regional_id' => 5,
            ),
            46 => 
            array (
                'id' => 47,
              
                'description' => 'YOI ARM CC PORTAL QUINDIO L-313-314-315',
                'status' => 1,
                'regional_id' => 1,
            ),
            47 => 
            array (
                'id' => 48,
              
                'description' => 'YOI BOG EXITO NUEVO KENNEDY',
                'status' => 1,
                'regional_id' => 2,
            ),
            48 => 
            array (
                'id' => 49,
              
                'description' => 'L&Y YAH BGA CRA 33 BUCARAMANGA',
                'status' => 1,
                'regional_id' => 3,
            ),
            49 => 
            array (
                'id' => 50,
              
                'description' => 'LLP BOG ALAMOS INDUSTRIAL',
                'status' => 1,
                'regional_id' => 4,
            ),
            50 => 
            array (
                'id' => 51,
              
                'description' => 'YOI PSO CC UNICO PASTO',
                'status' => 1,
                'regional_id' => 1,
            ),
            51 => 
            array (
                'id' => 52,
              
                'description' => 'YOI EXITO ANT ROBLEDO',
                'status' => 1,
                'regional_id' => 3,
            ),
            52 => 
            array (
                'id' => 53,
              
                'description' => 'YOI BOG EXITO VILLA MAYOR',
                'status' => 1,
                'regional_id' => 2,
            ),
            53 => 
            array (
                'id' => 54,
              
                'description' => 'YAHAD MZL CENTRO OUT',
                'status' => 1,
                'regional_id' => 1,
            ),
            54 => 
            array (
                'id' => 55,
              
                'description' => 'L&Y YAH ITA ITAGUI',
                'status' => 1,
                'regional_id' => 3,
            ),
            55 => 
            array (
                'id' => 56,
              
                'description' => 'LLP VLL CLI REMANSO',
                'status' => 1,
                'regional_id' => 1,
            ),
            56 => 
            array (
                'id' => 57,
              
                'description' => 'YAHAD VLL CLI MANUELA BELTRAN',
                'status' => 1,
                'regional_id' => 1,
            ),
            57 => 
            array (
                'id' => 58,
              
                'description' => 'YOI EXITO VLL TULUA EL RETIRO',
                'status' => 1,
                'regional_id' => 1,
            ),
            58 => 
            array (
                'id' => 59,
              
                'description' => 'YOI SCJ CC GUACARI',
                'status' => 1,
                'regional_id' => 5,
            ),
            59 => 
            array (
                'id' => 60,
              
                'description' => 'LLP MTR LIA MONTERIA',
                'status' => 1,
                'regional_id' => 5,
            ),
            60 => 
            array (
                'id' => 61,
              
                'description' => 'YOI EXITO SANTA MARTA CENTRO',
                'status' => 1,
                'regional_id' => 5,
            ),
            61 => 
            array (
                'id' => 62,
              
                'description' => 'YOI BOG CC PLAZA DE LAS AMERICAS L-10-37',
                'status' => 1,
                'regional_id' => 2,
            ),
            62 => 
            array (
                'id' => 63,
              
                'description' => 'YOI ENV EXITO VIVA ENVIGADO',
                'status' => 1,
                'regional_id' => 3,
            ),
            63 => 
            array (
                'id' => 64,
              
                'description' => 'LLP MDE CC SANTAFE L-9100',
                'status' => 1,
                'regional_id' => 3,
            ),
            64 => 
            array (
                'id' => 65,
              
                'description' => 'LLP BGA CC ACROPOLIS L-156-157',
                'status' => 1,
                'regional_id' => 3,
            ),
            65 => 
            array (
                'id' => 66,
              
                'description' => 'YOI APO EXITO PLAZA DEL RIO',
                'status' => 1,
                'regional_id' => 5,
            ),
            66 => 
            array (
                'id' => 67,
              
                'description' => 'LLP ENV CC VIVA ENVIGADO L-227',
                'status' => 1,
                'regional_id' => 3,
            ),
            67 => 
            array (
                'id' => 68,
              
                'description' => 'LLP BOG CC TREBOLIS',
                'status' => 1,
                'regional_id' => 2,
            ),
            68 => 
            array (
                'id' => 69,
              
                'description' => 'YOI NVA EXITO SAN PEDRO',
                'status' => 1,
                'regional_id' => 2,
            ),
            69 => 
            array (
                'id' => 70,
              
                'description' => 'LLP BOG CC PLAZA IMPERIAL L-1-167',
                'status' => 1,
                'regional_id' => 4,
            ),
            70 => 
            array (
                'id' => 71,
              
                'description' => 'L&Y YAHAAD OUTLET AV 68',
                'status' => 1,
                'regional_id' => 4,
            ),
            71 => 
            array (
                'id' => 72,
              
                'description' => 'LLP RCH CC VIVA WAAJIRA L-108',
                'status' => 1,
                'regional_id' => 5,
            ),
            72 => 
            array (
                'id' => 73,
              
                'description' => 'YAHAD BOG FLORESTA',
                'status' => 1,
                'regional_id' => 4,
            ),
            73 => 
            array (
                'id' => 74,
              
                'description' => 'YOI CTG CC MALLPLAZA',
                'status' => 1,
                'regional_id' => 5,
            ),
            74 => 
            array (
                'id' => 75,
              
                'description' => 'YOI BAQ NUESTRO ATLANTICO BARRANQUILLA',
                'status' => 1,
                'regional_id' => 5,
            ),
            75 => 
            array (
                'id' => 76,
              
                'description' => 'YOI EXITO ANT MED BELEN',
                'status' => 1,
                'regional_id' => 3,
            ),
            76 => 
            array (
                'id' => 77,
              
                'description' => 'LLP CTG CC CARIBE PLAZA L-1-79-80',
                'status' => 1,
                'regional_id' => 5,
            ),
            77 => 
            array (
                'id' => 78,
              
                'description' => 'YOI MTR EXITO ALAMEDA DEL SINU MONTERIA',
                'status' => 1,
                'regional_id' => 5,
            ),
            78 => 
            array (
                'id' => 79,
              
                'description' => 'YOI MDE CC PREMIUN PLAZA',
                'status' => 1,
                'regional_id' => 3,
            ),
            79 => 
            array (
                'id' => 80,
              
                'description' => 'YOI EXITO ANT SABANETA',
                'status' => 1,
                'regional_id' => 3,
            ),
            80 => 
            array (
                'id' => 81,
              
                'description' => 'YOI BOG GALAN BOGOTA',
                'status' => 1,
                'regional_id' => 2,
            ),
            81 => 
            array (
                'id' => 82,
              
                'description' => 'LLP CTG CC MALLPLAZA L-122-123',
                'status' => 1,
                'regional_id' => 5,
            ),
            82 => 
            array (
                'id' => 83,
              
                'description' => 'YOI CTG EXITO CARTAGENA',
                'status' => 1,
                'regional_id' => 5,
            ),
            83 => 
            array (
                'id' => 84,
              
                'description' => 'LLP PEI CENTRO CRA 6',
                'status' => 1,
                'regional_id' => 1,
            ),
            84 => 
            array (
                'id' => 85,
              
                'description' => 'YOI BOG CHAPINERO CR13 - 63',
                'status' => 1,
                'regional_id' => 4,
            ),
            85 => 
            array (
                'id' => 86,
              
                'description' => 'YOI CTG EXITO LA CASTELLANA',
                'status' => 1,
                'regional_id' => 5,
            ),
            86 => 
            array (
                'id' => 87,
              
                'description' => 'LLP BOG CASTILLA BOGOTA',
                'status' => 1,
                'regional_id' => 2,
            ),
            87 => 
            array (
                'id' => 88,
              
                'description' => 'LLP BEL CC PLAZA FABRICATO BELLO',
                'status' => 1,
                'regional_id' => 3,
            ),
            88 => 
            array (
                'id' => 89,
              
                'description' => 'LLP BOG PRADERA CLL 9 L-10',
                'status' => 1,
                'regional_id' => 2,
            ),
            89 => 
            array (
                'id' => 90,
              
                'description' => 'YAHAD BOG MEGAAMERICAS',
                'status' => 1,
                'regional_id' => 2,
            ),
            90 => 
            array (
                'id' => 91,
              
                'description' => 'LLP BOG KENNEDY CLL 37 SUR',
                'status' => 1,
                'regional_id' => 2,
            ),
            91 => 
            array (
                'id' => 92,
              
                'description' => 'LLP VIL V/CENCIO CRA 30',
                'status' => 1,
                'regional_id' => 2,
            ),
            92 => 
            array (
                'id' => 93,
              
                'description' => 'YOI BOG EXITO FONTIBON',
                'status' => 1,
                'regional_id' => 4,
            ),
            93 => 
            array (
                'id' => 94,
              
                'description' => 'L&Y YAH CLI ROOSEVELT',
                'status' => 1,
                'regional_id' => 1,
            ),
            94 => 
            array (
                'id' => 95,
              
                'description' => 'YOI VUP EXITO LAS FLORES',
                'status' => 1,
                'regional_id' => 5,
            ),
            95 => 
            array (
                'id' => 96,
              
                'description' => 'LILI&YOI YAHAD BMG CRA 14 CENTRO',
                'status' => 1,
                'regional_id' => 3,
            ),
            96 => 
            array (
                'id' => 97,
              
                'description' => 'YOI SBN MAYORCA ETAPA 1 L-3237',
                'status' => 1,
                'regional_id' => 3,
            ),
            97 => 
            array (
                'id' => 98,
              
                'description' => 'LLP TNJ CC UNICENTRO L-1019',
                'status' => 1,
                'regional_id' => 4,
            ),
            98 => 
            array (
                'id' => 99,
              
                'description' => 'YOI MDE EXITO COLOMBIA',
                'status' => 1,
                'regional_id' => 3,
            ),
            99 => 
            array (
                'id' => 100,
              
                'description' => 'LLP PEI CC CALIMA L-19',
                'status' => 1,
                'regional_id' => 1,
            ),
            100 => 
            array (
                'id' => 101,
              
                'description' => 'YOI MTR CC NUESTRO MONTER?A L-165',
                'status' => 1,
                'regional_id' => 5,
            ),
            101 => 
            array (
                'id' => 102,
              
                'description' => 'LLP BOG CC GRAN PLAZA BOSA L-158',
                'status' => 1,
                'regional_id' => 2,
            ),
            102 => 
            array (
                'id' => 103,
              
                'description' => 'YAHAD MED MAYORCA OUTLET',
                'status' => 1,
                'regional_id' => 3,
            ),
            103 => 
            array (
                'id' => 104,
              
                'description' => 'LLP FSG CC AV CENTRAL L-227',
                'status' => 1,
                'regional_id' => 2,
            ),
            104 => 
            array (
                'id' => 105,
              
                'description' => 'L&Y BOG CALLE 93 DELIVERIES',
                'status' => 1,
                'regional_id' => 4,
            ),
            105 => 
            array (
                'id' => 106,
              
                'description' => 'YOI SMR CC ARRECIFE',
                'status' => 1,
                'regional_id' => 5,
            ),
            106 => 
            array (
                'id' => 107,
              
                'description' => 'YOI MDE EXITO PUERTA DEL NORTE',
                'status' => 1,
                'regional_id' => 3,
            ),
            107 => 
            array (
                'id' => 108,
              
                'description' => 'L&Y YAH YPL CASANARE YOPAL',
                'status' => 1,
                'regional_id' => 2,
            ),
            108 => 
            array (
                'id' => 109,
              
                'description' => 'LLP YPL CC UNICENTRO L-207',
                'status' => 1,
                'regional_id' => 2,
            ),
            109 => 
            array (
                'id' => 110,
              
                'description' => 'LLP BOG CC METROPOLIS L-120-A',
                'status' => 1,
                'regional_id' => 4,
            ),
            110 => 
            array (
                'id' => 111,
              
                'description' => 'YOI ENV EXITO ENVIGADO CENTRO',
                'status' => 1,
                'regional_id' => 3,
            ),
            111 => 
            array (
                'id' => 112,
              
                'description' => 'YOI CUN CHIA EXITO FONTANAR',
                'status' => 1,
                'regional_id' => 4,
            ),
            112 => 
            array (
                'id' => 113,
              
                'description' => 'LLP YPL CC ALCARAVAN L-1-074',
                'status' => 1,
                'regional_id' => 2,
            ),
            113 => 
            array (
                'id' => 114,
              
                'description' => 'LLP BOG CARPA AMERICAS PROM',
                'status' => 1,
                'regional_id' => 4,
            ),
            114 => 
            array (
                'id' => 115,
              
                'description' => 'YOI MDR CC CASA BLANCA',
                'status' => 1,
                'regional_id' => 4,
            ),
            115 => 
            array (
                'id' => 116,
              
                'description' => 'YOI CLI EXITO SAN FERNANDO',
                'status' => 1,
                'regional_id' => 1,
            ),
            116 => 
            array (
                'id' => 117,
              
                'description' => 'YOI MDE EXITO SAN DIEGO',
                'status' => 1,
                'regional_id' => 3,
            ),
            117 => 
            array (
                'id' => 118,
              
                'description' => 'LLP MDE CC VIVA LAURELES L-140',
                'status' => 1,
                'regional_id' => 3,
            ),
            118 => 
            array (
                'id' => 119,
              
                'description' => 'YOI ATL SOLEDAD CARNAVAL',
                'status' => 1,
                'regional_id' => 5,
            ),
            119 => 
            array (
                'id' => 120,
              
                'description' => 'LLP BGA CC LA CUESTA L-242',
                'status' => 1,
                'regional_id' => 3,
            ),
            120 => 
            array (
                'id' => 121,
              
                'description' => 'LLP PSO CC UNICO L-26',
                'status' => 1,
                'regional_id' => 1,
            ),
            121 => 
            array (
                'id' => 122,
              
                'description' => 'YOI MDE EXITO POBLADO',
                'status' => 1,
                'regional_id' => 3,
            ),
            122 => 
            array (
                'id' => 123,
              
                'description' => 'LILI&YOI YAHAD BOY SOGAMOSO CLL 11',
                'status' => 1,
                'regional_id' => 4,
            ),
            123 => 
            array (
                'id' => 124,
              
                'description' => 'LLP MDE LA PLAYA CLL 52',
                'status' => 1,
                'regional_id' => 3,
            ),
            124 => 
            array (
                'id' => 125,
              
                'description' => 'LLP PLM CC UNICENTRO L-1-51',
                'status' => 1,
                'regional_id' => 1,
            ),
            125 => 
            array (
                'id' => 126,
              
                'description' => 'YOI MDE EXITO SAN ANTONIO',
                'status' => 1,
                'regional_id' => 3,
            ),
            126 => 
            array (
                'id' => 127,
              
                'description' => 'YOI CRC CC NUESTRO CARTAGO L-2-66A',
                'status' => 1,
                'regional_id' => 1,
            ),
            127 => 
            array (
                'id' => 128,
              
                'description' => 'YOI BOG CC EL EDEN L-1-124',
                'status' => 1,
                'regional_id' => 2,
            ),
            128 => 
            array (
                'id' => 129,
              
                'description' => 'YOI SCJ EXITO VIVA SINCELEJO',
                'status' => 1,
                'regional_id' => 5,
            ),
            129 => 
            array (
                'id' => 130,
              
                'description' => 'LILI&YOI BAQ YAHAD',
                'status' => 1,
                'regional_id' => 5,
            ),
            130 => 
            array (
                'id' => 131,
              
                'description' => 'YOI SMR EXITO LIBERTADOR',
                'status' => 1,
                'regional_id' => 5,
            ),
            131 => 
            array (
                'id' => 132,
              
                'description' => 'YOI ANT MED CC DE MODA OUTLET',
                'status' => 1,
                'regional_id' => 3,
            ),
            132 => 
            array (
                'id' => 133,
              
                'description' => 'LLP MDE CC LA CENTRAL L-257',
                'status' => 1,
                'regional_id' => 3,
            ),
            133 => 
            array (
                'id' => 134,
              
                'description' => 'LLP MDE CC UNICENTRO L-023',
                'status' => 1,
                'regional_id' => 3,
            ),
            134 => 
            array (
                'id' => 135,
              
                'description' => 'YOI ARM EXITO UNICENTRO',
                'status' => 1,
                'regional_id' => 1,
            ),
            135 => 
            array (
                'id' => 136,
              
                'description' => 'LLP MDE CC ARKADIA L-318',
                'status' => 1,
                'regional_id' => 3,
            ),
            136 => 
            array (
                'id' => 137,
              
                'description' => 'LLP SBN MAYORCA ETAPA 2 L-2021',
                'status' => 1,
                'regional_id' => 3,
            ),
            137 => 
            array (
                'id' => 138,
              
                'description' => 'LLP PEI CENTRO CRA 9',
                'status' => 1,
                'regional_id' => 1,
            ),
            138 => 
            array (
                'id' => 139,
              
                'description' => 'LLP MDE CC SAN DIEGO L-1551',
                'status' => 1,
                'regional_id' => 3,
            ),
            139 => 
            array (
                'id' => 140,
              
                'description' => 'YOI IBE EXITO LA ESTACION',
                'status' => 1,
                'regional_id' => 2,
            ),
            140 => 
            array (
                'id' => 141,
              
                'description' => 'LLP PEI CC UNICENTRO L-B-02',
                'status' => 1,
                'regional_id' => 1,
            ),
            141 => 
            array (
                'id' => 142,
              
                'description' => 'LLP BOG QUIRIGUA TRV 94',
                'status' => 1,
                'regional_id' => 4,
            ),
            142 => 
            array (
                'id' => 143,
              
                'description' => 'LLP IBE CC MULTICENTRO L-2-34',
                'status' => 1,
                'regional_id' => 2,
            ),
            143 => 
            array (
                'id' => 144,
              
                'description' => 'YOI BAQ EXITO SAN FRANCISCO',
                'status' => 1,
                'regional_id' => 5,
            ),
            144 => 
            array (
                'id' => 145,
              
                'description' => 'L&Y YAH MDR MADRID',
                'status' => 1,
                'regional_id' => 4,
            ),
            145 => 
            array (
                'id' => 146,
              
                'description' => 'LLP BOG SAN VICTORINO CRA 10',
                'status' => 1,
                'regional_id' => 4,
            ),
            146 => 
            array (
                'id' => 147,
              
                'description' => 'LLP VIL CC UNICENTRO',
                'status' => 1,
                'regional_id' => 2,
            ),
            147 => 
            array (
                'id' => 148,
              
                'description' => 'YOI BOG CC GRAN PLAZA BOSA',
                'status' => 1,
                'regional_id' => 2,
            ),
            148 => 
            array (
                'id' => 149,
              
                'description' => 'LLP BAQ CC VILLA COUNTRY L-233',
                'status' => 1,
                'regional_id' => 5,
            ),
            149 => 
            array (
                'id' => 150,
              
                'description' => 'LLP GRA GRANADA CRA 14',
                'status' => 1,
                'regional_id' => 2,
            ),
            150 => 
            array (
                'id' => 151,
              
                'description' => 'YAHAD IPIALES CENTRO CRA 5',
                'status' => 1,
                'regional_id' => 1,
            ),
            151 => 
            array (
                'id' => 152,
              
                'description' => 'LLP BOG HIPER AMERICAS CLL 12',
                'status' => 1,
                'regional_id' => 2,
            ),
            152 => 
            array (
                'id' => 153,
              
                'description' => 'YOI BAQ CC PORTAL DEL PRADO L-1-97-98',
                'status' => 1,
                'regional_id' => 5,
            ),
            153 => 
            array (
                'id' => 154,
              
                'description' => 'LLP BOG CENTRO CARRERA 9',
                'status' => 1,
                'regional_id' => 4,
            ),
            154 => 
            array (
                'id' => 155,
              
                'description' => 'LLP BOG GAITANA CRA 126A',
                'status' => 1,
                'regional_id' => 4,
            ),
            155 => 
            array (
                'id' => 156,
              
                'description' => 'LLP GIR CC UNICENTRO L-2-32',
                'status' => 1,
                'regional_id' => 2,
            ),
            156 => 
            array (
                'id' => 157,
              
                'description' => 'LLP SCH SOACHA COMPARTIR',
                'status' => 1,
                'regional_id' => 2,
            ),
            157 => 
            array (
                'id' => 158,
              
                'description' => 'LLP BOG CC EL EDEN',
                'status' => 1,
                'regional_id' => 2,
            ),
            158 => 
            array (
                'id' => 159,
              
                'description' => 'LLP VUP CC GUATAPURI',
                'status' => 1,
                'regional_id' => 5,
            ),
            159 => 
            array (
                'id' => 160,
              
                'description' => 'YOI VUP AEROP ALFONSO LOPEZ',
                'status' => 1,
                'regional_id' => 5,
            ),
            160 => 
            array (
                'id' => 161,
              
                'description' => 'YOI SMR EXITO BUENAVISTA',
                'status' => 1,
                'regional_id' => 5,
            ),
            161 => 
            array (
                'id' => 162,
              
                'description' => 'LLP BOG LAS NIEVES CRA 7',
                'status' => 1,
                'regional_id' => 2,
            ),
            162 => 
            array (
                'id' => 163,
              
                'description' => 'LLP CTG CC SAN FERNANDO L-1-21',
                'status' => 1,
                'regional_id' => 5,
            ),
            163 => 
            array (
                'id' => 164,
              
                'description' => 'YOI BOG EXITO LA FELICIDAD',
                'status' => 1,
                'regional_id' => 4,
            ),
            164 => 
            array (
                'id' => 165,
              
                'description' => 'LLP LPT LOS PATIOS AV 10',
                'status' => 1,
                'regional_id' => 3,
            ),
            165 => 
            array (
                'id' => 166,
              
                'description' => 'LLP TUL LA HERRADURA',
                'status' => 1,
                'regional_id' => 1,
            ),
            166 => 
            array (
                'id' => 167,
              
                'description' => 'LLP CUC CC UNICENTRO L-1-115 A',
                'status' => 1,
                'regional_id' => 3,
            ),
            167 => 
            array (
                'id' => 168,
              
                'description' => 'L&Y YAHAD PPN CC CAM',
                'status' => 1,
                'regional_id' => 1,
            ),
            168 => 
            array (
                'id' => 169,
              
                'description' => 'LLP BOG SANTA LIBRADA CRA 14',
                'status' => 1,
                'regional_id' => 2,
            ),
            169 => 
            array (
                'id' => 170,
              
                'description' => 'YOI IPI CC GRAN PLAZA IPIALES L-206',
                'status' => 1,
                'regional_id' => 1,
            ),
            170 => 
            array (
                'id' => 171,
              
                'description' => 'LLP BOG CC LA FLORESTA',
                'status' => 1,
                'regional_id' => 4,
            ),
            171 => 
            array (
                'id' => 172,
              
                'description' => 'YOI BOG NUESTRO BOGOTA',
                'status' => 1,
                'regional_id' => 4,
            ),
            172 => 
            array (
                'id' => 173,
              
                'description' => 'LLP SCH CC GRAN PLAZA SOACHA L-1-113',
                'status' => 1,
                'regional_id' => 2,
            ),
            173 => 
            array (
                'id' => 174,
              
                'description' => 'LLP CTG LA PLAZUELA',
                'status' => 1,
                'regional_id' => 5,
            ),
            174 => 
            array (
                'id' => 175,
              
                'description' => 'LLP BOG CC BULEVAR L-156',
                'status' => 1,
                'regional_id' => 4,
            ),
            175 => 
            array (
                'id' => 176,
              
                'description' => 'YOI BOG EXITO CLL 170',
                'status' => 1,
                'regional_id' => 4,
            ),
            176 => 
            array (
                'id' => 177,
              
                'description' => 'LLP BOG CEDRITOS CLL 140',
                'status' => 1,
                'regional_id' => 4,
            ),
            177 => 
            array (
                'id' => 178,
              
                'description' => 'LLP IBE CENTRO CLL 15',
                'status' => 1,
                'regional_id' => 2,
            ),
            178 => 
            array (
                'id' => 179,
              
                'description' => 'LILI&YOI YAHAD BOG CC CONNECTA',
                'status' => 1,
                'regional_id' => 4,
            ),
            179 => 
            array (
                'id' => 180,
              
                'description' => 'LLP CLI CENTRO CLL 13 L-1-101-E',
                'status' => 1,
                'regional_id' => 1,
            ),
            180 => 
            array (
                'id' => 181,
              
                'description' => 'LILI&YOI YAHAD BOG EVACUADOR AUTOSUR',
                'status' => 1,
                'regional_id' => 2,
            ),
            181 => 
            array (
                'id' => 182,
              
                'description' => 'YOI EXITO BOG 20 DE JULIO',
                'status' => 1,
                'regional_id' => 2,
            ),
            182 => 
            array (
                'id' => 183,
              
                'description' => 'LILI VLL CALI LA NAV',
                'status' => 1,
                'regional_id' => 1,
            ),
            183 => 
            array (
                'id' => 184,
              
                'description' => 'LLP BOG MONTEVIDEO CLL 19 L-6',
                'status' => 1,
                'regional_id' => 4,
            ),
            184 => 
            array (
                'id' => 185,
              
                'description' => 'YOI EXITO CABECERA BUCARAMANGA',
                'status' => 1,
                'regional_id' => 3,
            ),
            185 => 
            array (
                'id' => 186,
              
                'description' => 'LLP MET VLL PORFIA',
                'status' => 1,
                'regional_id' => 2,
            ),
            186 => 
            array (
                'id' => 187,
              
                'description' => 'LILIPINK BOG CC MICENTRO PORVENIR CARPA',
                'status' => 1,
                'regional_id' => 2,
            ),
            187 => 
            array (
                'id' => 188,
              
                'description' => 'LLP CTG CC NAO L-28',
                'status' => 1,
                'regional_id' => 5,
            ),
            188 => 
            array (
                'id' => 189,
              
                'description' => 'YOI BOY DUITAMA',
                'status' => 1,
                'regional_id' => 4,
            ),
            189 => 
            array (
                'id' => 190,
              
                'description' => 'LILI&YOI YAHAD CTG CC EL BOSQUE',
                'status' => 1,
                'regional_id' => 5,
            ),
            190 => 
            array (
                'id' => 191,
              
                'description' => 'LLP CHI LA LIBERTAD L-106-107',
                'status' => 1,
                'regional_id' => 4,
            ),
            191 => 
            array (
                'id' => 192,
              
                'description' => 'LLP BOG CC PASEO DEL RIO L-244',
                'status' => 1,
                'regional_id' => 2,
            ),
            192 => 
            array (
                'id' => 193,
              
                'description' => 'LILI&YOI YAHAD BOG VENECIA',
                'status' => 1,
                'regional_id' => 2,
            ),
            193 => 
            array (
                'id' => 194,
              
                'description' => 'LLP VIL CC VIVA V/CENCIO L-152',
                'status' => 1,
                'regional_id' => 2,
            ),
            194 => 
            array (
                'id' => 195,
              
                'description' => 'YOI CLI EXITO UNICENTRO',
                'status' => 1,
                'regional_id' => 1,
            ),
            195 => 
            array (
                'id' => 196,
              
                'description' => 'LLP SOL CC CARNAVAL L-1121',
                'status' => 1,
                'regional_id' => 5,
            ),
            196 => 
            array (
                'id' => 197,
              
                'description' => 'YOI BOG DIVERPLAZA BOGOTA',
                'status' => 1,
                'regional_id' => 4,
            ),
            197 => 
            array (
                'id' => 198,
              
                'description' => 'LLP RCH CENTRO CRA 6',
                'status' => 1,
                'regional_id' => 5,
            ),
            198 => 
            array (
                'id' => 199,
              
                'description' => 'YAHAD CUN FSG CENTRO',
                'status' => 1,
                'regional_id' => 2,
            ),
            199 => 
            array (
                'id' => 200,
              
                'description' => 'LLP BOG 7 DE AGOSTO CRA 24',
                'status' => 1,
                'regional_id' => 4,
            ),
            200 => 
            array (
                'id' => 201,
              
                'description' => 'LLP BOG CC MULTIPLAZA L-B-133',
                'status' => 1,
                'regional_id' => 4,
            ),
            201 => 
            array (
                'id' => 202,
              
                'description' => 'LLP MDE CC DE MODA OUTLET L-N-106',
                'status' => 1,
                'regional_id' => 3,
            ),
            202 => 
            array (
                'id' => 203,
              
                'description' => 'YOI BOG EXITO GRAN ESTACION',
                'status' => 1,
                'regional_id' => 4,
            ),
            203 => 
            array (
                'id' => 204,
              
                'description' => 'LLP CUC CC JARDIN PLAZA L-74',
                'status' => 1,
                'regional_id' => 3,
            ),
            204 => 
            array (
                'id' => 205,
              
                'description' => 'LILI&YOI YAHAD ANT MED CLL33',
                'status' => 1,
                'regional_id' => 3,
            ),
            205 => 
            array (
                'id' => 206,
              
                'description' => 'LLP CLI CC UNICO L-509',
                'status' => 1,
                'regional_id' => 1,
            ),
            206 => 
            array (
                'id' => 207,
              
                'description' => 'YOI EXITO VLL CLI PALMETTO',
                'status' => 1,
                'regional_id' => 1,
            ),
            207 => 
            array (
                'id' => 208,
              
                'description' => 'LLP PTL CC SAN ANTONIO PLAZA L-182-183',
                'status' => 1,
                'regional_id' => 2,
            ),
            208 => 
            array (
                'id' => 209,
              
                'description' => 'YOI BOG CENTRO COMERCIAL TUNAL',
                'status' => 1,
                'regional_id' => 2,
            ),
            209 => 
            array (
                'id' => 210,
              
                'description' => 'LLP SMR CC BUENAVISTA L-107',
                'status' => 1,
                'regional_id' => 5,
            ),
            210 => 
            array (
                'id' => 211,
              
                'description' => 'YOI EXITO BOG PLAZA DE BOLIVAR',
                'status' => 1,
                'regional_id' => 4,
            ),
            211 => 
            array (
                'id' => 212,
              
                'description' => 'LLP BOG 20 DE JULIO CRA 6',
                'status' => 1,
                'regional_id' => 2,
            ),
            212 => 
            array (
                'id' => 213,
              
                'description' => 'LLP CLI CC CHIPICHAPE L-213',
                'status' => 1,
                'regional_id' => 1,
            ),
            213 => 
            array (
                'id' => 214,
              
                'description' => 'YOI GIR EXITO GIRARDOT',
                'status' => 1,
                'regional_id' => 2,
            ),
            214 => 
            array (
                'id' => 215,
              
                'description' => 'LLP CLI SANTIAGO PLAZA CALI',
                'status' => 1,
                'regional_id' => 1,
            ),
            215 => 
            array (
                'id' => 216,
              
                'description' => 'LLP BOG CC PLAZA CENTRAL L-208',
                'status' => 1,
                'regional_id' => 2,
            ),
            216 => 
            array (
                'id' => 217,
              
                'description' => 'LLP BAQ CC UNICO L-73',
                'status' => 1,
                'regional_id' => 5,
            ),
            217 => 
            array (
                'id' => 218,
              
                'description' => 'LLP CUC CC VENTURA PLAZA L-1-24',
                'status' => 1,
                'regional_id' => 3,
            ),
            218 => 
            array (
                'id' => 219,
              
                'description' => 'YOI BOG CC PLAZA CENTRAL L-1-65',
                'status' => 1,
                'regional_id' => 2,
            ),
            219 => 
            array (
                'id' => 220,
              
                'description' => 'LILI&YOI YAHAD CAL MZL CC MALLPLAZA',
                'status' => 1,
                'regional_id' => 1,
            ),
            220 => 
            array (
                'id' => 221,
              
                'description' => 'LLP CLI CC NORTE L-17',
                'status' => 1,
                'regional_id' => 1,
            ),
            221 => 
            array (
                'id' => 222,
              
                'description' => 'LILI&YOI YAHAD CUN CC CENTRO CHIA',
                'status' => 1,
                'regional_id' => 4,
            ),
            222 => 
            array (
                'id' => 223,
              
                'description' => 'YOI BOG EXITO COUNTRY',
                'status' => 1,
                'regional_id' => 4,
            ),
            223 => 
            array (
                'id' => 224,
              
                'description' => 'LLP BGA CC CARACOLI L336',
                'status' => 1,
                'regional_id' => 3,
            ),
            224 => 
            array (
                'id' => 225,
              
                'description' => 'LLP BGA CC CACIQUE L-384-A',
                'status' => 1,
                'regional_id' => 3,
            ),
            225 => 
            array (
                'id' => 226,
              
                'description' => 'YOI CUC AEROPUERTO CAMILO DAZA',
                'status' => 1,
                'regional_id' => 3,
            ),
            226 => 
            array (
                'id' => 227,
              
                'description' => 'LLP BOG CHAPINERO CLL 60',
                'status' => 1,
                'regional_id' => 4,
            ),
            227 => 
            array (
                'id' => 228,
              
                'description' => 'YOI BGA CALLE 37',
                'status' => 1,
                'regional_id' => 3,
            ),
            228 => 
            array (
                'id' => 229,
              
                'description' => 'YOI TUL EXITO TULUA',
                'status' => 1,
                'regional_id' => 1,
            ),
            229 => 
            array (
                'id' => 230,
              
                'description' => 'LLP PSO CC UNICENTRO L-151',
                'status' => 1,
                'regional_id' => 1,
            ),
            230 => 
            array (
                'id' => 231,
              
                'description' => 'LLP BOG CC DIVER PLAZA L-26',
                'status' => 1,
                'regional_id' => 4,
            ),
            231 => 
            array (
                'id' => 232,
              
                'description' => 'YOI BJA EXITO BARRANCABERMEJA',
                'status' => 1,
                'regional_id' => 3,
            ),
            232 => 
            array (
                'id' => 233,
              
                'description' => 'YOI SCH CC GRAN PLAZA SOACHA L-1-163',
                'status' => 1,
                'regional_id' => 2,
            ),
            233 => 
            array (
                'id' => 234,
              
                'description' => 'LLP BOG CLL 82 CRA 15',
                'status' => 1,
                'regional_id' => 4,
            ),
            234 => 
            array (
                'id' => 235,
              
                'description' => 'LLP VIL CC UNICO L-32',
                'status' => 1,
                'regional_id' => 2,
            ),
            235 => 
            array (
                'id' => 236,
              
                'description' => 'LLP ANT ITAGUI OUT',
                'status' => 1,
                'regional_id' => 3,
            ),
            236 => 
            array (
                'id' => 237,
              
                'description' => 'LLP ARM CC PORTAL QUINDIO L-3-13-14',
                'status' => 1,
                'regional_id' => 1,
            ),
            237 => 
            array (
                'id' => 238,
              
                'description' => 'LLP ARM CENTRO CRA 17',
                'status' => 1,
                'regional_id' => 1,
            ),
            238 => 
            array (
                'id' => 239,
              
                'description' => 'LLP VUP CENTRO CLL 16 L-4',
                'status' => 1,
                'regional_id' => 5,
            ),
            239 => 
            array (
                'id' => 240,
              
                'description' => 'YOI BGA CC LA QUINTA',
                'status' => 1,
                'regional_id' => 3,
            ),
            240 => 
            array (
                'id' => 241,
              
                'description' => 'YOI VIL EXITO LA SABANA V/CENCIO',
                'status' => 1,
                'regional_id' => 2,
            ),
            241 => 
            array (
                'id' => 242,
              
                'description' => 'LLP TNJ CC VIVA TUNJA L-128',
                'status' => 1,
                'regional_id' => 4,
            ),
            242 => 
            array (
                'id' => 243,
              
                'description' => 'L&Y YAHAAD EXITO NIZA',
                'status' => 1,
                'regional_id' => 4,
            ),
            243 => 
            array (
                'id' => 244,
              
                'description' => 'LLP VLT VILLETA CLL 5',
                'status' => 1,
                'regional_id' => 4,
            ),
            244 => 
            array (
                'id' => 245,
              
                'description' => 'YOI BOG CC PORTAL 80 L-3-003',
                'status' => 1,
                'regional_id' => 4,
            ),
            245 => 
            array (
                'id' => 246,
              
                'description' => 'LLP BOG BONANZA AV CLL 80',
                'status' => 1,
                'regional_id' => 4,
            ),
            246 => 
            array (
                'id' => 247,
              
                'description' => 'LLP BOG CC TINTAL PLAZA L-119',
                'status' => 1,
                'regional_id' => 2,
            ),
            247 => 
            array (
                'id' => 248,
              
                'description' => 'YOI PEI EXITO VICTORIA',
                'status' => 1,
                'regional_id' => 1,
            ),
            248 => 
            array (
                'id' => 249,
              
                'description' => 'LLP NVA CC UNICO L-29',
                'status' => 1,
                'regional_id' => 2,
            ),
            249 => 
            array (
                'id' => 250,
              
                'description' => 'LLP BAQ CC UNICO L-107',
                'status' => 1,
                'regional_id' => 5,
            ),
            250 => 
            array (
                'id' => 251,
              
                'description' => 'LLP DQB CC UNICO L-32',
                'status' => 1,
                'regional_id' => 1,
            ),
            251 => 
            array (
                'id' => 252,
              
                'description' => 'LLP VUP V/DUPAR',
                'status' => 1,
                'regional_id' => 5,
            ),
            252 => 
            array (
                'id' => 253,
              
                'description' => 'YOI BOG CC PASEO DEL RIO L-245',
                'status' => 1,
                'regional_id' => 2,
            ),
            253 => 
            array (
                'id' => 254,
              
                'description' => 'L&Y YAH IPI IPIALES',
                'status' => 1,
                'regional_id' => 1,
            ),
            254 => 
            array (
                'id' => 255,
              
                'description' => 'LLP CTG CC LA CASTELLANA L-93-94',
                'status' => 1,
                'regional_id' => 5,
            ),
            255 => 
            array (
                'id' => 256,
              
                'description' => 'LLP MDE PALACE',
                'status' => 1,
                'regional_id' => 3,
            ),
            256 => 
            array (
                'id' => 257,
              
                'description' => 'YOI BAQ EXITO PANORAMA',
                'status' => 1,
                'regional_id' => 5,
            ),
            257 => 
            array (
                'id' => 258,
              
                'description' => 'LLP BOG SANTA HELENITA AV CLL 68',
                'status' => 1,
                'regional_id' => 4,
            ),
            258 => 
            array (
                'id' => 259,
              
                'description' => 'LILI&YOI YAHAD CUN FUNZA CENTRO',
                'status' => 1,
                'regional_id' => 4,
            ),
            259 => 
            array (
                'id' => 260,
              
                'description' => 'YOI EXITO VALLE DE LILI CAL',
                'status' => 1,
                'regional_id' => 1,
            ),
            260 => 
            array (
                'id' => 261,
              
                'description' => 'YOI PPN EXITO PANAMERICANA',
                'status' => 1,
                'regional_id' => 1,
            ),
            261 => 
            array (
                'id' => 262,
              
                'description' => 'LLP BAQ CENTRO CLL 37',
                'status' => 1,
                'regional_id' => 5,
            ),
            262 => 
            array (
                'id' => 263,
              
                'description' => 'DIR VENTAS NACIONALES SUR',
                'status' => 1,
                'regional_id' => 1,
            ),
            263 => 
            array (
                'id' => 264,
              
                'description' => 'YAHAD NEIVA CC OASIS',
                'status' => 1,
                'regional_id' => 2,
            ),
            264 => 
            array (
                'id' => 265,
              
                'description' => 'LLP FLA CC GRAN PLAZA FLORENCIA',
                'status' => 1,
                'regional_id' => 2,
            ),
            265 => 
            array (
                'id' => 266,
              
                'description' => 'LLP CUC ATALAYA',
                'status' => 1,
                'regional_id' => 3,
            ),
            266 => 
            array (
                'id' => 267,
              
                'description' => 'YOI MDE EXITO LAURELES MEDELLIN',
                'status' => 1,
                'regional_id' => 3,
            ),
            267 => 
            array (
                'id' => 268,
              
                'description' => 'YOI VUP CC MAYALES',
                'status' => 1,
                'regional_id' => 5,
            ),
            268 => 
            array (
                'id' => 269,
              
                'description' => 'LLP BOG FERIAS 2 BOGOTA',
                'status' => 1,
                'regional_id' => 4,
            ),
            269 => 
            array (
                'id' => 270,
              
                'description' => 'LLP DQB CC EL PROGRESO',
                'status' => 1,
                'regional_id' => 1,
            ),
            270 => 
            array (
                'id' => 271,
              
                'description' => 'LLP BOG CC SANTAFE L-1-201',
                'status' => 1,
                'regional_id' => 4,
            ),
            271 => 
            array (
                'id' => 272,
              
                'description' => 'LLP BOG CC PARQUE COLINA L-320',
                'status' => 1,
                'regional_id' => 4,
            ),
            272 => 
            array (
                'id' => 273,
              
                'description' => 'YOI CLI EXITO SIMON BOLIVAR',
                'status' => 1,
                'regional_id' => 1,
            ),
            273 => 
            array (
                'id' => 274,
              
                'description' => 'L&Y BOG FONTIBON',
                'status' => 1,
                'regional_id' => 4,
            ),
            274 => 
            array (
                'id' => 275,
              
                'description' => 'DIR CCIAL ZONA NORTE RETAIL',
                'status' => 1,
                'regional_id' => 3,
            ),
            275 => 
            array (
                'id' => 276,
              
                'description' => 'LLP MDE CC PREMIUM PLAZA L-2302',
                'status' => 1,
                'regional_id' => 3,
            ),
            276 => 
            array (
                'id' => 277,
              
                'description' => 'YOI BEL CC PLAZA FABRICATO BELLO',
                'status' => 1,
                'regional_id' => 3,
            ),
            277 => 
            array (
                'id' => 278,
              
                'description' => 'YOI BOG EXITO SUBA',
                'status' => 1,
                'regional_id' => 4,
            ),
            278 => 
            array (
                'id' => 279,
              
                'description' => 'LILIPINK NEIVA CC UNICO CARPA',
                'status' => 1,
                'regional_id' => 5,
            ),
            279 => 
            array (
                'id' => 280,
              
                'description' => 'LLP BOG CC CENTRO MAYOR L-1-129',
                'status' => 1,
                'regional_id' => 2,
            ),
            280 => 
            array (
                'id' => 281,
              
                'description' => 'LLP MZL CC FUNDADORES L-308',
                'status' => 1,
                'regional_id' => 1,
            ),
            281 => 
            array (
                'id' => 282,
              
                'description' => 'YOI SMR AEROP SIMON',
                'status' => 1,
                'regional_id' => 5,
            ),
            282 => 
            array (
                'id' => 283,
              
                'description' => 'L&Y YAHAD ANT PARQUE ITAGUI OUTLET',
                'status' => 1,
                'regional_id' => 3,
            ),
            283 => 
            array (
                'id' => 284,
              
                'description' => 'YOI MZL EXITO SANCANCIO',
                'status' => 1,
                'regional_id' => 1,
            ),
            284 => 
            array (
                'id' => 285,
              
                'description' => 'YOI CTG EXITO SAN DIEGO',
                'status' => 1,
                'regional_id' => 5,
            ),
            285 => 
            array (
                'id' => 286,
              
                'description' => 'LLP IPI CC GRAN PLAZA IPIALES L-118',
                'status' => 1,
                'regional_id' => 1,
            ),
            286 => 
            array (
                'id' => 287,
              
                'description' => 'LLP PLM CC LLANO GRANDE',
                'status' => 1,
                'regional_id' => 1,
            ),
            287 => 
            array (
                'id' => 288,
              
                'description' => 'LLP MDE CC MALL GUAYABAL L-04',
                'status' => 1,
                'regional_id' => 3,
            ),
            288 => 
            array (
                'id' => 289,
              
                'description' => 'LLP IPI ESTRELLA PRINCIPAL',
                'status' => 1,
                'regional_id' => 1,
            ),
            289 => 
            array (
                'id' => 290,
              
                'description' => 'LLP BOG CC PLAZA DE LAS AMERICAS',
                'status' => 1,
                'regional_id' => 2,
            ),
            290 => 
            array (
                'id' => 291,
              
                'description' => 'YOI BOG EXITO FLORESTA',
                'status' => 1,
                'regional_id' => 4,
            ),
            291 => 
            array (
                'id' => 292,
              
                'description' => 'YOI ATQ EXITO CAUCASIA',
                'status' => 1,
                'regional_id' => 5,
            ),
            292 => 
            array (
                'id' => 293,
              
                'description' => 'LILIPINK SANTA MARTA CENTRO LOWCOST',
                'status' => 1,
                'regional_id' => 5,
            ),
            293 => 
            array (
                'id' => 294,
              
                'description' => 'YOI BGA EXITO ORIENTAL CACIQUE',
                'status' => 1,
                'regional_id' => 3,
            ),
            294 => 
            array (
                'id' => 295,
              
                'description' => 'LLP BAQ CC VIVA B/QUILLA L-340',
                'status' => 1,
                'regional_id' => 5,
            ),
            295 => 
            array (
                'id' => 296,
              
                'description' => 'LLP SCJ VIVA SINCELEJO',
                'status' => 1,
                'regional_id' => 5,
            ),
            296 => 
            array (
                'id' => 297,
              
                'description' => 'YOI PSO EXITO PANAMERICANA',
                'status' => 1,
                'regional_id' => 1,
            ),
            297 => 
            array (
                'id' => 298,
              
                'description' => 'LLP BOG GALERIAS CLL 53 L-102',
                'status' => 1,
                'regional_id' => 4,
            ),
            298 => 
            array (
                'id' => 299,
              
                'description' => 'LLP CLI CC UNICO L-12C',
                'status' => 1,
                'regional_id' => 1,
            ),
            299 => 
            array (
                'id' => 300,
              
                'description' => 'YOI SCJ EXITO CENTRO',
                'status' => 1,
                'regional_id' => 5,
            ),
            300 => 
            array (
                'id' => 301,
              
                'description' => 'YOI BOG EXITO COLINA',
                'status' => 1,
                'regional_id' => 4,
            ),
            301 => 
            array (
                'id' => 302,
              
                'description' => 'LLP SCJ CC GUACARI',
                'status' => 1,
                'regional_id' => 5,
            ),
            302 => 
            array (
                'id' => 303,
              
                'description' => 'YOI BOG CC GRAN PLAZA ENSUE?O L-159',
                'status' => 1,
                'regional_id' => 2,
            ),
            303 => 
            array (
                'id' => 304,
              
                'description' => 'YOI BAQ EXITO CALLE 77',
                'status' => 1,
                'regional_id' => 5,
            ),
            304 => 
            array (
                'id' => 305,
              
                'description' => 'LLP BOG SAN ANDRESITO SAN JOSE',
                'status' => 1,
                'regional_id' => 4,
            ),
            305 => 
            array (
                'id' => 306,
              
                'description' => 'LLP MDE CC AVENTURA L-254',
                'status' => 1,
                'regional_id' => 3,
            ),
            306 => 
            array (
                'id' => 307,
              
                'description' => 'LILI&YOI YAHAAD CDB MON CLL13',
                'status' => 1,
                'regional_id' => 5,
            ),
            307 => 
            array (
                'id' => 308,
              
                'description' => 'LLP TNJ CENTRO CLL 18',
                'status' => 1,
                'regional_id' => 4,
            ),
            308 => 
            array (
                'id' => 309,
              
                'description' => 'LLP IBE CC ACQUA L-203-204',
                'status' => 1,
                'regional_id' => 2,
            ),
            309 => 
            array (
                'id' => 310,
              
                'description' => 'LLP SCH CENTRO L-36 A',
                'status' => 1,
                'regional_id' => 2,
            ),
            310 => 
            array (
                'id' => 311,
              
                'description' => 'LLP CTG CC BOCAGRANDE L-4-5',
                'status' => 1,
                'regional_id' => 5,
            ),
            311 => 
            array (
                'id' => 312,
              
                'description' => 'YOI VUP EXITO VALLEDUPAR CENTRO',
                'status' => 1,
                'regional_id' => 5,
            ),
            312 => 
            array (
                'id' => 313,
              
                'description' => 'LLP CHI CENTRO L-102',
                'status' => 1,
                'regional_id' => 4,
            ),
            313 => 
            array (
                'id' => 314,
              
                'description' => 'LLP BJA CC SAN SILVESTRE L-214-215',
                'status' => 1,
                'regional_id' => 3,
            ),
            314 => 
            array (
                'id' => 315,
              
                'description' => 'LLP APO CC NUESTRO URABA',
                'status' => 1,
                'regional_id' => 5,
            ),
            315 => 
            array (
                'id' => 316,
              
                'description' => 'YOI MZL EXITO FUNDADORES',
                'status' => 1,
                'regional_id' => 1,
            ),
            316 => 
            array (
                'id' => 317,
              
                'description' => 'YOI BGA AEROPUERTO PALONEGRO BUC',
                'status' => 1,
                'regional_id' => 3,
            ),
            317 => 
            array (
                'id' => 318,
              
                'description' => 'YOI BOG EXITO USME',
                'status' => 1,
                'regional_id' => 2,
            ),
            318 => 
            array (
                'id' => 319,
              
                'description' => 'LLP BOG CHICO CLL 93',
                'status' => 1,
                'regional_id' => 4,
            ),
            319 => 
            array (
                'id' => 320,
              
                'description' => 'YOI BOG EXITO LAS NIEVES',
                'status' => 1,
                'regional_id' => 4,
            ),
            320 => 
            array (
                'id' => 321,
              
                'description' => 'L&Y BUC CLL36',
                'status' => 1,
                'regional_id' => 3,
            ),
            321 => 
            array (
                'id' => 322,
              
                'description' => 'LLP SOL CC NUESTRO ATLANTICO L-1013',
                'status' => 1,
                'regional_id' => 5,
            ),
            322 => 
            array (
                'id' => 323,
              
                'description' => 'YOI RCH EXITO VIVA WAAJIRA',
                'status' => 1,
                'regional_id' => 5,
            ),
            323 => 
            array (
                'id' => 324,
              
                'description' => 'YOI CTG CARIBE PLAZA',
                'status' => 1,
                'regional_id' => 5,
            ),
            324 => 
            array (
                'id' => 325,
              
                'description' => 'LLP SNT CC POBLADO PLAZA L-20-21',
                'status' => 1,
                'regional_id' => 5,
            ),
            325 => 
            array (
                'id' => 326,
              
                'description' => 'YOI CUC CC JARDIN PLAZA',
                'status' => 1,
                'regional_id' => 3,
            ),
            326 => 
            array (
                'id' => 327,
              
                'description' => 'YOI BOG EXITO AMERICAS',
                'status' => 1,
                'regional_id' => 2,
            ),
            327 => 
            array (
                'id' => 328,
              
                'description' => 'YOI EXITO ANT MEDELLIN MOLINOS',
                'status' => 1,
                'regional_id' => 3,
            ),
            328 => 
            array (
                'id' => 329,
              
                'description' => 'LLP PEI CC ARBOLEDA L-132A',
                'status' => 1,
                'regional_id' => 1,
            ),
            329 => 
            array (
                'id' => 330,
              
                'description' => 'LLP BOG CC CIUDAD TUNAL L-1051',
                'status' => 1,
                'regional_id' => 2,
            ),
            330 => 
            array (
                'id' => 331,
              
                'description' => 'LLP BEL BELLO CLL 51',
                'status' => 1,
                'regional_id' => 3,
            ),
            331 => 
            array (
                'id' => 332,
              
                'description' => 'YOI BOG CC ATLANTIS L-101-102',
                'status' => 1,
                'regional_id' => 4,
            ),
            332 => 
            array (
                'id' => 333,
              
                'description' => 'LLP BOG JAVERIANA CLL 41',
                'status' => 1,
                'regional_id' => 4,
            ),
            333 => 
            array (
                'id' => 334,
              
                'description' => 'L&Y NDS CUC CLL12',
                'status' => 1,
                'regional_id' => 3,
            ),
            334 => 
            array (
                'id' => 335,
              
                'description' => 'LLP BOG CC UNICENTRO DE OCCIDENTE L-130',
                'status' => 1,
                'regional_id' => 4,
            ),
            335 => 
            array (
                'id' => 336,
              
                'description' => 'LLP CEJ CC VIVA LA CEJA',
                'status' => 1,
                'regional_id' => 3,
            ),
            336 => 
            array (
                'id' => 337,
              
                'description' => 'LLP BOG NUESTRO BOGOTA',
                'status' => 1,
                'regional_id' => 4,
            ),
            337 => 
            array (
                'id' => 338,
              
                'description' => 'LLP BOG VENECIA CRA 53',
                'status' => 1,
                'regional_id' => 2,
            ),
            338 => 
            array (
                'id' => 339,
              
                'description' => 'LLP NVA CC SANTA LUCIA L-2-46',
                'status' => 1,
                'regional_id' => 2,
            ),
            339 => 
            array (
                'id' => 340,
              
                'description' => 'LLP RNG CC SAN NICOLAS L-3307',
                'status' => 1,
                'regional_id' => 3,
            ),
            340 => 
            array (
                'id' => 341,
              
                'description' => 'LLP CUN ZIP MEGACITY',
                'status' => 1,
                'regional_id' => 4,
            ),
            341 => 
            array (
                'id' => 342,
              
                'description' => 'LLP BOG CC PORTAL 80 L-N-2023',
                'status' => 1,
                'regional_id' => 4,
            ),
            342 => 
            array (
                'id' => 343,
              
                'description' => 'LLP MDR CC CASA BLANCA',
                'status' => 1,
                'regional_id' => 4,
            ),
            343 => 
            array (
                'id' => 344,
              
                'description' => 'LLP BOG CC SAN RAFAEL',
                'status' => 1,
                'regional_id' => 4,
            ),
            344 => 
            array (
                'id' => 345,
              
                'description' => 'LLP SMR CC OCEAN MALL',
                'status' => 1,
                'regional_id' => 5,
            ),
            345 => 
            array (
                'id' => 346,
              
                'description' => 'LLP BAQ PRADO CLL 72 L-9',
                'status' => 1,
                'regional_id' => 5,
            ),
            346 => 
            array (
                'id' => 347,
              
                'description' => 'LLP SOL CC PLAZA DEL SOL L-150',
                'status' => 1,
                'regional_id' => 5,
            ),
            347 => 
            array (
                'id' => 348,
              
                'description' => 'YOI BOG EXITO CALLE 80',
                'status' => 1,
                'regional_id' => 4,
            ),
            348 => 
            array (
                'id' => 349,
              
                'description' => 'LLP BEL CC PUERTA DEL NORTE',
                'status' => 1,
                'regional_id' => 3,
            ),
            349 => 
            array (
                'id' => 350,
              
                'description' => 'YOI PLM CC LLANOGRANDE PALMIRA',
                'status' => 1,
                'regional_id' => 1,
            ),
            350 => 
            array (
                'id' => 351,
              
                'description' => 'LLP MDE CENTRO JUNIN',
                'status' => 1,
                'regional_id' => 3,
            ),
            351 => 
            array (
                'id' => 352,
              
                'description' => 'LLP PSO CENTRO CLL 18',
                'status' => 1,
                'regional_id' => 1,
            ),
            352 => 
            array (
                'id' => 353,
              
                'description' => 'YOI EXITO CUBA PEREIRA',
                'status' => 1,
                'regional_id' => 1,
            ),
            353 => 
            array (
                'id' => 354,
              
                'description' => 'LLP BOG CC MILENIO L-130',
                'status' => 1,
                'regional_id' => 2,
            ),
            354 => 
            array (
                'id' => 355,
              
                'description' => 'LLP CRC CC NUESTRO CARTAGO L-1-42A-42B',
                'status' => 1,
                'regional_id' => 1,
            ),
            355 => 
            array (
                'id' => 356,
              
                'description' => 'LILI&YOI YAHAD EXITO BOG MODELIA',
                'status' => 1,
                'regional_id' => 4,
            ),
            356 => 
            array (
                'id' => 357,
              
                'description' => 'YOI FLA EXITO FLORENCIA CENTRO',
                'status' => 1,
                'regional_id' => 2,
            ),
            357 => 
            array (
                'id' => 358,
              
                'description' => 'YOI CLI EXITO CHIPICHAPE',
                'status' => 1,
                'regional_id' => 1,
            ),
            358 => 
            array (
                'id' => 359,
              
                'description' => 'LLP YBO CC UNICO L-6',
                'status' => 1,
                'regional_id' => 1,
            ),
            359 => 
            array (
                'id' => 360,
              
                'description' => 'LLP BOG CC HAYUELOS JUMBO L-2001',
                'status' => 1,
                'regional_id' => 4,
            ),
            360 => 
            array (
                'id' => 361,
              
                'description' => 'YOI BOG EXITO SALITRE PLAZA',
                'status' => 1,
                'regional_id' => 4,
            ),
            361 => 
            array (
                'id' => 362,
              
                'description' => 'LLP ARM CC PORTAL QUINDIO L-1-04',
                'status' => 1,
                'regional_id' => 1,
            ),
            362 => 
            array (
                'id' => 363,
              
                'description' => 'YOI BAQ CC UNICO BARRANQUILLA',
                'status' => 1,
                'regional_id' => 5,
            ),
            363 => 
            array (
                'id' => 364,
              
                'description' => 'LLP VIL LIA SECTOR EL STEREO L-2',
                'status' => 1,
                'regional_id' => 2,
            ),
            364 => 
            array (
                'id' => 365,
              
                'description' => 'YOI CTG EXITO EJECUTIVOS CARTAGENA',
                'status' => 1,
                'regional_id' => 5,
            ),
            365 => 
            array (
                'id' => 366,
              
                'description' => 'LLP BGA CC COSMOCENTRO L-101-102-103-104',
                'status' => 1,
                'regional_id' => 3,
            ),
            366 => 
            array (
                'id' => 367,
              
                'description' => 'LLP SCH CC MERCURIO L-206',
                'status' => 1,
                'regional_id' => 2,
            ),
            367 => 
            array (
                'id' => 368,
              
                'description' => 'YOI RIS DQ CC PROGRE',
                'status' => 1,
                'regional_id' => 1,
            ),
            368 => 
            array (
                'id' => 369,
              
                'description' => 'LLP BAQ CC PORTAL DEL PRADO L-5',
                'status' => 1,
                'regional_id' => 5,
            ),
            369 => 
            array (
                'id' => 370,
              
                'description' => 'YOI BAQ VIVA BARRANQUILLA',
                'status' => 1,
                'regional_id' => 5,
            ),
            370 => 
            array (
                'id' => 371,
              
                'description' => 'L&Y BOG CALIMA L-B-051-053-055-057',
                'status' => 1,
                'regional_id' => 4,
            ),
            371 => 
            array (
                'id' => 372,
              
                'description' => 'LLP CLI CC LIMONAR L-134-135',
                'status' => 1,
                'regional_id' => 1,
            ),
            372 => 
            array (
                'id' => 373,
              
                'description' => 'LLP BOG CC PLAZA CENTRAL L-3-67-3-68',
                'status' => 1,
                'regional_id' => 2,
            ),
            373 => 
            array (
                'id' => 374,
              
                'description' => 'YOI PEI EXITO PARQUE ARBOLEDA',
                'status' => 1,
                'regional_id' => 1,
            ),
            374 => 
            array (
                'id' => 375,
              
                'description' => 'YOI BGA CC CARACOLI',
                'status' => 1,
                'regional_id' => 3,
            ),
            375 => 
            array (
                'id' => 376,
              
                'description' => 'YOI FLA CC GRANPZFLORENCIA L-244-245-246',
                'status' => 1,
                'regional_id' => 2,
            ),
            376 => 
            array (
                'id' => 377,
              
                'description' => 'YOI BGA EXITO LA ROSITA',
                'status' => 1,
                'regional_id' => 3,
            ),
            377 => 
            array (
                'id' => 378,
              
                'description' => 'LLP APO CC PLAZA DEL RIO L-123',
                'status' => 1,
                'regional_id' => 5,
            ),
            378 => 
            array (
                'id' => 379,
              
                'description' => 'LLP BOG CC FACTORY L-1-38',
                'status' => 1,
                'regional_id' => 2,
            ),
            379 => 
            array (
                'id' => 380,
              
                'description' => 'LLP CLI LOW COST BOLIVARIANO',
                'status' => 1,
                'regional_id' => 1,
            ),
            380 => 
            array (
                'id' => 381,
              
                'description' => 'LLP MTR CC ALAMEDAS L-A-191',
                'status' => 1,
                'regional_id' => 5,
            ),
            381 => 
            array (
                'id' => 382,
              
                'description' => 'LLP IPI ESTRELLA EXPRESS',
                'status' => 1,
                'regional_id' => 1,
            ),
            382 => 
            array (
                'id' => 383,
              
                'description' => 'LLP BAQ CC METROPOLITANO L-203',
                'status' => 1,
                'regional_id' => 5,
            ),
        ));
        
        
    }
}