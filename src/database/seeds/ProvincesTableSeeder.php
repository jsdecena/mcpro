<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('provinces')->insert(array(
            0 => array
            (
                'id' => '2',
                'country_id' => '0',
                'name' => 'Адыгея',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            1 => array
            (
                'id' => '3',
                'country_id' => '0',
                'name' => 'Алтай',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            2 => array
            (
                'id' => '4',
                'country_id' => '0',
                'name' => 'Алтайский край',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            3 => array
            (
                'id' => '5',
                'country_id' => '0',
                'name' => 'Амурская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            4 => array
            (
                'id' => '6',
                'country_id' => '0',
                'name' => 'Архангельская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            5 => array
            (
                'id' => '7',
                'country_id' => '0',
                'name' => 'Астраханская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            6 => array
            (
                'id' => '8',
                'country_id' => '0',
                'name' => 'Башкортостан',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            7 => array
            (
                'id' => '9',
                'country_id' => '0',
                'name' => 'Белгородская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            8 => array
            (
                'id' => '10',
                'country_id' => '0',
                'name' => 'Брянская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            9 => array
            (
                'id' => '11',
                'country_id' => '0',
                'name' => 'Бурятия',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            10 => array
            (
                'id' => '12',
                'country_id' => '0',
                'name' => 'Владимирская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            11 => array
            (
                'id' => '13',
                'country_id' => '0',
                'name' => 'Волгоградская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            12 => array
            (
                'id' => '14',
                'country_id' => '0',
                'name' => 'Вологодская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            13 => array
            (
                'id' => '15',
                'country_id' => '0',
                'name' => 'Воронежская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            14 => array
            (
                'id' => '16',
                'country_id' => '0',
                'name' => 'Дагестан',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            15 => array
            (
                'id' => '17',
                'country_id' => '0',
                'name' => 'Еврейская АО',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            16 => array
            (
                'id' => '18',
                'country_id' => '0',
                'name' => 'Забайкальский край',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            17 => array
            (
                'id' => '19',
                'country_id' => '0',
                'name' => 'Ивановская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            18 => array
            (
                'id' => '20',
                'country_id' => '0',
                'name' => 'Ингушетия',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            19 => array
            (
                'id' => '21',
                'country_id' => '0',
                'name' => 'Иркутская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            20 => array
            (
                'id' => '22',
                'country_id' => '0',
                'name' => 'Кабардино-Балкария',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            21 => array
            (
                'id' => '23',
                'country_id' => '0',
                'name' => 'Калининградская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            22 => array
            (
                'id' => '24',
                'country_id' => '0',
                'name' => 'Калмыкия',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            23 => array
            (
                'id' => '25',
                'country_id' => '0',
                'name' => 'Калужская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            24 => array
            (
                'id' => '26',
                'country_id' => '0',
                'name' => 'Камчатский край',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            25 => array
            (
                'id' => '27',
                'country_id' => '0',
                'name' => 'Карачаево-Черкессия',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            26 => array
            (
                'id' => '28',
                'country_id' => '0',
                'name' => 'Карелия',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            27 => array
            (
                'id' => '29',
                'country_id' => '0',
                'name' => 'Кемеровская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            28 => array
            (
                'id' => '30',
                'country_id' => '0',
                'name' => 'Кировская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            29 => array
            (
                'id' => '31',
                'country_id' => '0',
                'name' => 'Коми',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            30 => array
            (
                'id' => '32',
                'country_id' => '0',
                'name' => 'Костромская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            31 => array
            (
                'id' => '33',
                'country_id' => '0',
                'name' => 'Краснодарский край',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            32 => array
            (
                'id' => '34',
                'country_id' => '0',
                'name' => 'Красноярский край',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            33 => array
            (
                'id' => '35',
                'country_id' => '0',
                'name' => 'Курганская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            34 => array
            (
                'id' => '36',
                'country_id' => '0',
                'name' => 'Курская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            35 => array
            (
                'id' => '37',
                'country_id' => '0',
                'name' => 'Ленинградская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            36 => array
            (
                'id' => '38',
                'country_id' => '0',
                'name' => 'Липецкая область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            37 => array
            (
                'id' => '39',
                'country_id' => '0',
                'name' => 'Магаданская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            38 => array
            (
                'id' => '40',
                'country_id' => '0',
                'name' => 'Марий Эл',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            39 => array
            (
                'id' => '41',
                'country_id' => '0',
                'name' => 'Мордовия',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            40 => array
            (
                'id' => '42',
                'country_id' => '0',
                'name' => 'Москва',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            41 => array
            (
                'id' => '43',
                'country_id' => '0',
                'name' => 'Московская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            42 => array
            (
                'id' => '44',
                'country_id' => '0',
                'name' => 'Мурманская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            43 => array
            (
                'id' => '45',
                'country_id' => '0',
                'name' => 'Ненецкий АО',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            44 => array
            (
                'id' => '46',
                'country_id' => '0',
                'name' => 'Нижегородская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            45 => array
            (
                'id' => '47',
                'country_id' => '0',
                'name' => 'Новгородская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            46 => array
            (
                'id' => '48',
                'country_id' => '0',
                'name' => 'Новосибирская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            47 => array
            (
                'id' => '49',
                'country_id' => '0',
                'name' => 'Омская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            48 => array
            (
                'id' => '50',
                'country_id' => '0',
                'name' => 'Оренбургская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            49 => array
            (
                'id' => '51',
                'country_id' => '0',
                'name' => 'Орловская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            50 => array
            (
                'id' => '52',
                'country_id' => '0',
                'name' => 'Пензенская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            51 => array
            (
                'id' => '53',
                'country_id' => '0',
                'name' => 'Пермский край',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            52 => array
            (
                'id' => '54',
                'country_id' => '0',
                'name' => 'Приморский край',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            53 => array
            (
                'id' => '55',
                'country_id' => '0',
                'name' => 'Псковская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            54 => array
            (
                'id' => '56',
                'country_id' => '0',
                'name' => 'Ростовская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            55 => array
            (
                'id' => '57',
                'country_id' => '0',
                'name' => 'Рязанская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            56 => array
            (
                'id' => '58',
                'country_id' => '0',
                'name' => 'Самарская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            57 => array
            (
                'id' => '59',
                'country_id' => '0',
                'name' => 'Санкт-Петербург',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            58 => array
            (
                'id' => '60',
                'country_id' => '0',
                'name' => 'Саратовская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            59 => array
            (
                'id' => '61',
                'country_id' => '0',
                'name' => 'Саха array (Якутия)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            60 => array
            (
                'id' => '62',
                'country_id' => '0',
                'name' => 'Сахалинская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            61 => array
            (
                'id' => '63',
                'country_id' => '0',
                'name' => 'Свердловская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            62 => array
            (
                'id' => '64',
                'country_id' => '0',
                'name' => 'Северная Осетия - Алания',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            63 => array
            (
                'id' => '65',
                'country_id' => '0',
                'name' => 'Смоленская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            64 => array
            (
                'id' => '66',
                'country_id' => '0',
                'name' => 'Ставропольский край',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            65 => array
            (
                'id' => '67',
                'country_id' => '0',
                'name' => 'Тамбовская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            66 => array
            (
                'id' => '68',
                'country_id' => '0',
                'name' => 'Татарстан',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            67 => array
            (
                'id' => '69',
                'country_id' => '0',
                'name' => 'Тверская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            68 => array
            (
                'id' => '70',
                'country_id' => '0',
                'name' => 'Томская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            69 => array
            (
                'id' => '71',
                'country_id' => '0',
                'name' => 'Тульская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            70 => array
            (
                'id' => '72',
                'country_id' => '0',
                'name' => 'Тыва',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            71 => array
            (
                'id' => '73',
                'country_id' => '0',
                'name' => 'Тюменская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            72 => array
            (
                'id' => '74',
                'country_id' => '0',
                'name' => 'Удмуртия',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            73 => array
            (
                'id' => '75',
                'country_id' => '0',
                'name' => 'Ульяновская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            74 => array
            (
                'id' => '76',
                'country_id' => '0',
                'name' => 'Хабаровский край',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            75 => array
            (
                'id' => '77',
                'country_id' => '0',
                'name' => 'Хакасия',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            76 => array
            (
                'id' => '78',
                'country_id' => '0',
                'name' => 'Ханты-Мансийский АО - Югра',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            77 => array
            (
                'id' => '79',
                'country_id' => '0',
                'name' => 'Челябинская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            78 => array
            (
                'id' => '80',
                'country_id' => '0',
                'name' => 'Чеченская республика',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            79 => array
            (
                'id' => '81',
                'country_id' => '0',
                'name' => 'Чувашская республика',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            80 => array
            (
                'id' => '82',
                'country_id' => '0',
                'name' => 'Чукотский АО',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            81 => array
            (
                'id' => '83',
                'country_id' => '0',
                'name' => 'Ямало-Ненецкий АО',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            82 => array
            (
                'id' => '84',
                'country_id' => '0',
                'name' => 'Ярославская область',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            83 => array
            (
                'id' => '86',
                'country_id' => '0',
                'name' => 'Крым',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),

            84 => array
            (
                'id' => '87',
                'country_id' => '0',
                'name' => 'Севастополь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ),
        ));

    }
}
