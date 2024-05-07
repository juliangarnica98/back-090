<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions')->delete();
        
        \DB::table('questions')->insert(array (
            0 => 
            array (
                'id' => 1,
                
                'description' => 'Cuentanos que aprendiste en tu semana de formación  ',
                'week' => 1,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                
                'description' => 'Ya sabes como marcar en el biometrico?',
                'week' => 1,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                
                'description' => '¿Sabes cual son los minimos del rol del lider de tienda? explicanos brevemente.',
                'week' => 1,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                
                'description' => '¿Que novedades tuviste esta semana?',
                'week' => 1,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                
                'description' => '¿Ya conoces tu tienda?',
                'week' => 2,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                
                'description' => '¿Conoces a tu jefe de zona? Indicanos su nombre. ',
                'week' => 2,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                
                'description' => '¿Como te recibio el equipo de tienda?',
                'week' => 2,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                
                'description' => '¿Ya conoces el directorio de atención a novedades del equipo de gestión humana?',
                'week' => 2,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                
                'description' => '¿Que novedades tuviste esta semana?',
                'week' => 2,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                
                'description' => '¿Ya conoces los indicadores comerciales y de gestión de la tienda? describelos.',
                'week' => 3,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 3,
            ),
            10 => 
            array (
                'id' => 11,
                
                'description' => '¿Como esta divido el presupuesto comercial de tu equipo?',
                'week' => 3,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 3,
            ),
            11 => 
            array (
                'id' => 12,
                
                'description' => '¿Cuentanos cual es la campaña de este mes?',
                'week' => 3,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 3,
            ),
            12 => 
            array (
                'id' => 13,
                
                'description' => '¿Que novedades tuviste esta semana?',
                'week' => 3,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 3,
            ),
            13 => 
            array (
                'id' => 15,
                
                'description' => '¿Conoces los beneficios del programa de bienestar ENYOI CON LILI?',
                'week' => 4,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 4,
            ),
            14 => 
            array (
                'id' => 16,
                
                'description' => '¿Ya identificaste la ruta de evacuación de la tienda?',
                'week' => 4,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 4,
            ),
            15 => 
            array (
                'id' => 17,
                
                'description' => '¿Que novedades tuviste esta semana?',
                'week' => 4,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 4,
            ),
            16 => 
            array (
                'id' => 18,
                
                'description' => '¿Consideras que en tu tienda se fomenta y desarrolla el trabajo en equipo?',
                'week' => 5,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 5,
            ),
            17 => 
            array (
                'id' => 19,
                
                'description' => '¿Te sientes bien en tu trabajo?',
                'week' => 5,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 5,
            ),
            18 => 
            array (
                'id' => 20,
                
                'description' => 'Tengo claro claro lo que se espera de mi en mi trabajo',
                'week' => 5,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 5,
            ),
            19 => 
            array (
                'id' => 21,
                
                'description' => '¿Que novedades tuviste esta semana?',
                'week' => 5,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 5,
            ),
            20 => 
            array (
                'id' => 22,
                
                'description' => '¿Que ejercicios ejecutas con tu equipo de trabajo y con que frecuencia?',
                'week' => 6,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 6,
            ),
            21 => 
            array (
                'id' => 23,
                
                'description' => '¿Como ha sido la comunicación de tu jefe de zona contigo en estas semanas?',
                'week' => 6,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 6,
            ),
            22 => 
            array (
                'id' => 24,
                
                'description' => '¿Cual es tu caja de compensación y sus convenios?',
                'week' => 6,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 6,
            ),
            23 => 
            array (
                'id' => 25,
                
                'description' => 'Contamos con una sucursal virtual para que gestiones todas las novedades de tu proceso en la compañia, sabes como funciona',
                'week' => 6,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 6,
            ),
            24 => 
            array (
                'id' => 26,
                
                'description' => 'Que novedades tuviste esta semana.',
                'week' => 6,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 6,
            ),
            25 => 
            array (
                'id' => 29,
                
                'description' => '¿Cuentanos como ha sido el proceso de adaptaci?n en tu tienda?',
                'week' => 7,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 7,
            ),
            26 => 
            array (
                'id' => 30,
                
                'description' => '¿Que novedades tuviste esta semana?',
                'week' => 7,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 7,
            ),
            27 => 
            array (
                'id' => 31,
                
                'description' => '¿Cuál es tu mayor reto a la hora de intervenir a tu equipo de trabajo?',
                'week' => 8,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 8,
            ),
            28 => 
            array (
                'id' => 32,
                
                'description' => '¿Que te hace sentir orgulloso de trabajar en lilipink & yoi?',
                'week' => 8,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 8,
            ),
            29 => 
            array (
                'id' => 33,
                
                'description' => '¿Que oportunidades de mejora te has detectado como lider de tienda y como lo estas trabajando?',
                'week' => 8,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 8,
            ),
            30 => 
            array (
                'id' => 34,
                
                'description' => '¿Que novedades tuviste esta semana?',
                'week' => 8,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 8,
            ),
            31 => 
            array (
                'id' => 35,
                
                'description' => '¿Te han realizado algún movimiento de tienda?',
                'week' => 9,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 9,
            ),
            32 => 
            array (
                'id' => 36,
                
                'description' => '¿Cual ha sido tu mayor reto al trabajar con nosotros?',
                'week' => 9,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 9,
            ),
            33 => 
            array (
                'id' => 37,
                
                'description' => '¿Conoces la linea etica de la compañia?',
                'week' => 9,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 9,
            ),
            34 => 
            array (
                'id' => 38,
                
                'description' => '¿Con que frecuencia realizar las reuniones con tu equipo de trabajo?',
                'week' => 9,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 9,
            ),
            35 => 
            array (
                'id' => 39,
                
                'description' => '¿Que novedades tuviste esta semana?',
                'week' => 9,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 9,
            ),
            36 => 
            array (
                'id' => 40,
                
                'description' => 'Cuentanos como es la comunicación con tu equipo de trabajo',
                'week' => 10,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 10,
            ),
            37 => 
            array (
                'id' => 41,
                
                'description' => 'Describe la counicaci?n que impartes con tu Director Regional',
                'week' => 10,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 10,
            ),
            38 => 
            array (
                'id' => 42,
                
                'description' => '¿Como es la comunicación con el equipo de visual?',
                'week' => 10,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 10,
            ),
            39 => 
            array (
                'id' => 43,
                
                'description' => 'Cuentanos detalladamente con es la comunicación con el equipo de gestión humana',
                'week' => 10,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 10,
            ),
            40 => 
            array (
                'id' => 44,
                
                'description' => '¿Que novedades tuviste esta semana?',
                'week' => 10,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 10,
            ),
            41 => 
            array (
                'id' => 45,
                
                'description' => '¿Que percepción tienes frente a tu labor administrativa en el cargo?',
                'week' => 11,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 11,
            ),
            42 => 
            array (
                'id' => 46,
                
                'description' => '¿Como estableces las labores operativas de tue tienda?',
                'week' => 11,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 11,
            ),
            43 => 
            array (
                'id' => 47,
                
                'description' => '¿Que estrategias comerciales implementas en tu tienda?',
                'week' => 11,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 11,
            ),
            44 => 
            array (
                'id' => 48,
                
                'description' => '¿Que novedades tuviste esta semana?.',
                'week' => 11,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 11,
            ),
            45 => 
            array (
                'id' => 49,
                
                'description' => '¿Como te proyecta a nivel laboral dentro de la compañia?',
                'week' => 12,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 12,
            ),
            46 => 
            array (
                'id' => 50,
                
                'description' => '¿Consideras que te has adaptado a nuestra compañia?',
                'week' => 12,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 12,
            ),
            47 => 
            array (
                'id' => 51,
                
                'description' => '¿Cuales son tus proyecciones al trabajar con nosotros?',
                'week' => 12,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 12,
            ),
            48 => 
            array (
                'id' => 52,
                
                'description' => 'Retroalimenta la gestión de tu jefe de zona.',
                'week' => 12,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 12,
            ),
            49 => 
            array (
                'id' => 53,
                
                'description' => '¿Que oportunidades de mejora consideras que deberia tener el equipo de gestion humana ?',
                'week' => 12,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 12,
            ),
            50 => 
            array (
                'id' => 54,
                
                'description' => 'Compartenos si tienes alguna observación adicional o novedad en esta ultima semana.',
                'week' => 12,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 12,
            ),

            51 => 
            array (
                'id' => 14,
                
                'description' => 'Cuentamos sobre el avance en los ejes de formación en lili te enseña',
                'week' => 4,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 4,
            ),

            52 => 
            array (
                'id' => 27,
                'description' => 'Con relación a tu proceso formativo en lili te enseña, cuentanos si ya finalizaste los ejes de formación',
                'week' => 7,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 7,
            ),

            53 => 
            array (
                'id' => 28,
                'description' => 'De todos los procesos en los que te has formado en ¿Cual consideras que necesitas reforzar información?',
                'week' => 7,
                'area_impacto' => '1',
                'status' => 0,
                'header_id' => 7,
            ),
        ));
        
        
    }
}