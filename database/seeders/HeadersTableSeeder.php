<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HeadersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('headers')->delete();
        
        \DB::table('headers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'week' => 1,
                'description' => 'Hola, un gusto saludarte, nuevamente paso a darte la bienvenida a la familia Lilipink & Yoi. Soy generalista de gestión  humana asignada a tu regional; y te quiero contar que a partir de hoy inicias tu proceso de acompañamiento llamado 0-90, el cual consiste en conocer tu percepción semana a semana durante los primeros 3 meses posteriores a tu ingreso acerca de tu desarrollo interno en nuestra compañia. Por lo anterior me gustaria que me contaras con mucho detalle lo siguiente',
                'status' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'week' => 2,
                'description' => 'Hola buen día. Hoy comenzamos la segunda semana de nuestro acompañamiento, nos gustaria que nos compartas el detalle de las siguientes preguntas',
                'status' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'week' => 3,
                'description' => 'Hola buen día. Hoy comenzamos la tercera semana de nuestro acompañamiento, nos gustaria que nos compartas el detalle de las siguientes preguntas',
                'status' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'week' => 4,
                'description' => 'Hola buen día. Hoy comenzamos la cuarta semana de nuestro acompañamiento, nos gustaria que nos compartas el detalle de las siguientes preguntas',
                'status' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'week' => 5,
                'description' => 'Hola buen día. Hoy comenzamos la quinta semana de nuestro acompañamiento, nos gustaria que nos compartas el detalle de las siguientes preguntas.',
                'status' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'week' => 6,
                'description' => 'Hola buen día. Hoy comenzamos la sexta semana de nuestro acompañamiento, nos gustaria que nos compartas el detalle de las siguientes preguntas',
                'status' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'week' => 7,
                'description' => 'Hola buen día. Hoy comenzamos la Septima semana de nuestro acompañamiento, nos gustaria que nos compartas el detalle de las siguientes preguntas.',
                'status' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'week' => 8,
                'description' => 'Hola buen día. Hoy comenzamos la octava semana de nuestro acompañamiento, nos gustaria que nos compartas el detalle de las siguientes preguntas.',
                'status' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'week' => 9,
                'description' => 'Hola buen día. Hoy comenzamos la semana nueve de nuestro acompañamiento, nos gustaria que nos compartas el detalle de las siguientes preguntas. ',
                'status' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'week' => 10,
                'description' => 'Hola buen día. Hoy comenzamos la decima semana de nuestro acompañamiento, nos gustaria que nos compartas el detalle de las siguientes preguntas. ',
                'status' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'week' => 11,
                'description' => 'Hola buen día. Hoy comenzamos la semana once  de nuestro acompañamiento, nos gustaria que nos compartas el detalle de las siguientes preguntas. ',
                'status' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'week' => 12,
                'description' => 'Felicidades! Nos encontramos en la semana final de nuestro seguimiento, gracias por tu empeño y dedicaci?n con el programa. Y a su vez pido de que me amplies la información con respecto a lo siguiente. ',
                'status' => 1,
            ),
        ));
        
        
    }
}