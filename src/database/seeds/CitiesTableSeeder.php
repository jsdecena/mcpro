<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\DB::table('cities')->insert(array (
            0 => array
            (
                'id' => '0',
                'province_id' => '2',
                'name' => 'Майкоп',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1 => array
            (
                'id' => '1',
                'province_id' => '3',
                'name' => 'Горно-Алтайск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            2 => array
            (
                'id' => '2',
                'province_id' => '4',
                'name' => 'Барнаул',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            3 => array
            (
                'id' => '3',
                'province_id' => '4',
                'name' => 'Бийск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            4 => array
            (
                'id' => '4',
                'province_id' => '4',
                'name' => 'Рубцовск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            5 => array
            (
                'id' => '5',
                'province_id' => '4',
                'name' => 'Новоалтайск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            6 => array
            (
                'id' => '6',
                'province_id' => '4',
                'name' => 'Заринск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            7 => array
            (
                'id' => '7',
                'province_id' => '5',
                'name' => 'Благовещенск (Амурская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            8 => array
            (
                'id' => '8',
                'province_id' => '5',
                'name' => 'Белогорск (Амурская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            9 => array
            (
                'id' => '9',
                'province_id' => '5',
                'name' => 'Свободный',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            10 => array
            (
                'id' => '10',
                'province_id' => '6',
                'name' => 'Архангельск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            11 => array
            (
                'id' => '11',
                'province_id' => '6',
                'name' => 'Северодвинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            12 => array
            (
                'id' => '12',
                'province_id' => '6',
                'name' => 'Котлас',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            13 => array
            (
                'id' => '13',
                'province_id' => '7',
                'name' => 'Астрахань',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            14 => array
            (
                'id' => '14',
                'province_id' => '7',
                'name' => 'Ахтубинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            15 => array
            (
                'id' => '15',
                'province_id' => '7',
                'name' => 'Знаменск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            16 => array
            (
                'id' => '16',
                'province_id' => '8',
                'name' => 'Уфа',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            17 => array
            (
                'id' => '17',
                'province_id' => '8',
                'name' => 'Стерлитамак',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            18 => array
            (
                'id' => '18',
                'province_id' => '8',
                'name' => 'Салават',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            19 => array
            (
                'id' => '19',
                'province_id' => '8',
                'name' => 'Нефтекамск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            20 => array
            (
                'id' => '20',
                'province_id' => '8',
                'name' => 'Октябрьский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            21 => array
            (
                'id' => '21',
                'province_id' => '8',
                'name' => 'Белорецк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            22 => array
            (
                'id' => '22',
                'province_id' => '8',
                'name' => 'Благовещенск (Башкортостан)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            23 => array
            (
                'id' => '23',
                'province_id' => '9',
                'name' => 'Белгород',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            24 => array
            (
                'id' => '24',
                'province_id' => '9',
                'name' => 'Старый Оскол',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            25 => array
            (
                'id' => '25',
                'province_id' => '9',
                'name' => 'Губкин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            26 => array
            (
                'id' => '26',
                'province_id' => '9',
                'name' => 'Шебекино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            27 => array
            (
                'id' => '27',
                'province_id' => '9',
                'name' => 'Новый Оскол',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            28 => array
            (
                'id' => '28',
                'province_id' => '10',
                'name' => 'Брянск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            29 => array
            (
                'id' => '29',
                'province_id' => '10',
                'name' => 'Клинцы',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            30 => array
            (
                'id' => '30',
                'province_id' => '11',
                'name' => 'Улан-Удэ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            31 => array
            (
                'id' => '31',
                'province_id' => '11',
                'name' => 'Северобайкальск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            32 => array
            (
                'id' => '32',
                'province_id' => '12',
                'name' => 'Владимир',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            33 => array
            (
                'id' => '33',
                'province_id' => '12',
                'name' => 'Ковров',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            34 => array
            (
                'id' => '34',
                'province_id' => '12',
                'name' => 'Муром',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            35 => array
            (
                'id' => '35',
                'province_id' => '12',
                'name' => 'Александров',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            36 => array
            (
                'id' => '36',
                'province_id' => '12',
                'name' => 'Гусь-Хрустальный',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            37 => array
            (
                'id' => '37',
                'province_id' => '12',
                'name' => 'Киржач',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            38 => array
            (
                'id' => '38',
                'province_id' => '13',
                'name' => 'Волгоград',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            39 => array
            (
                'id' => '39',
                'province_id' => '13',
                'name' => 'Волжский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            40 => array
            (
                'id' => '40',
                'province_id' => '13',
                'name' => 'Камышин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            41 => array
            (
                'id' => '41',
                'province_id' => '13',
                'name' => 'Калач-на-Дону',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            42 => array
            (
                'id' => '42',
                'province_id' => '14',
                'name' => 'Череповец',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            43 => array
            (
                'id' => '43',
                'province_id' => '14',
                'name' => 'Вологда',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            44 => array
            (
                'id' => '44',
                'province_id' => '14',
                'name' => 'Сокол',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            45 => array
            (
                'id' => '45',
                'province_id' => '15',
                'name' => 'Воронеж',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            46 => array
            (
                'id' => '46',
                'province_id' => '15',
                'name' => 'Борисоглебск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            47 => array
            (
                'id' => '47',
                'province_id' => '15',
                'name' => 'Россошь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            48 => array
            (
                'id' => '48',
                'province_id' => '15',
                'name' => 'Лиски',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            49 => array
            (
                'id' => '49',
                'province_id' => '15',
                'name' => 'Павловск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            50 => array
            (
                'id' => '50',
                'province_id' => '16',
                'name' => 'Махачкала',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            51 => array
            (
                'id' => '51',
                'province_id' => '16',
                'name' => 'Хасавюрт',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            52 => array
            (
                'id' => '52',
                'province_id' => '16',
                'name' => 'Дербент',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            53 => array
            (
                'id' => '53',
                'province_id' => '17',
                'name' => 'Биробиджан',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            54 => array
            (
                'id' => '54',
                'province_id' => '18',
                'name' => 'Чита',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            55 => array
            (
                'id' => '55',
                'province_id' => '18',
                'name' => 'Краснокаменск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            56 => array
            (
                'id' => '56',
                'province_id' => '19',
                'name' => 'Иваново',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            57 => array
            (
                'id' => '57',
                'province_id' => '19',
                'name' => 'Кинешма',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            58 => array
            (
                'id' => '58',
                'province_id' => '19',
                'name' => 'Шуя',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            59 => array
            (
                'id' => '59',
                'province_id' => '20',
                'name' => 'Назрань',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            60 => array
            (
                'id' => '60',
                'province_id' => '21',
                'name' => 'Иркутск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            61 => array
            (
                'id' => '61',
                'province_id' => '21',
                'name' => 'Братск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            62 => array
            (
                'id' => '62',
                'province_id' => '21',
                'name' => 'Ангарск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            63 => array
            (
                'id' => '63',
                'province_id' => '21',
                'name' => 'Усть-Илимск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            64 => array
            (
                'id' => '64',
                'province_id' => '22',
                'name' => 'Нальчик',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            65 => array
            (
                'id' => '65',
                'province_id' => '22',
                'name' => 'Прохладный',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            66 => array
            (
                'id' => '66',
                'province_id' => '23',
                'name' => 'Калининград',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            67 => array
            (
                'id' => '67',
                'province_id' => '23',
                'name' => 'Советск (Калининградская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            68 => array
            (
                'id' => '68',
                'province_id' => '24',
                'name' => 'Элиста',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            69 => array
            (
                'id' => '69',
                'province_id' => '25',
                'name' => 'Калуга',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            70 => array
            (
                'id' => '70',
                'province_id' => '25',
                'name' => 'Обнинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            71 => array
            (
                'id' => '71',
                'province_id' => '26',
                'name' => 'Петропавловск-Камчатский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            72 => array
            (
                'id' => '72',
                'province_id' => '26',
                'name' => 'Елизово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            73 => array
            (
                'id' => '73',
                'province_id' => '26',
                'name' => 'Вилючинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            74 => array
            (
                'id' => '74',
                'province_id' => '27',
                'name' => 'Черкесск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            75 => array
            (
                'id' => '75',
                'province_id' => '28',
                'name' => 'Петрозаводск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            76 => array
            (
                'id' => '76',
                'province_id' => '28',
                'name' => 'Кондопога',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            77 => array
            (
                'id' => '77',
                'province_id' => '29',
                'name' => 'Новокузнецк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            78 => array
            (
                'id' => '78',
                'province_id' => '29',
                'name' => 'Кемерово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            79 => array
            (
                'id' => '79',
                'province_id' => '29',
                'name' => 'Прокопьевск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            80 => array
            (
                'id' => '80',
                'province_id' => '29',
                'name' => 'Ленинск-Кузнецкий',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            81 => array
            (
                'id' => '81',
                'province_id' => '29',
                'name' => 'Междуреченск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            82 => array
            (
                'id' => '82',
                'province_id' => '29',
                'name' => 'Киселёвск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            83 => array
            (
                'id' => '83',
                'province_id' => '29',
                'name' => 'Юрга',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            84 => array
            (
                'id' => '84',
                'province_id' => '30',
                'name' => 'Киров (Кировская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            85 => array
            (
                'id' => '85',
                'province_id' => '30',
                'name' => 'Кирово-Чепецк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            86 => array
            (
                'id' => '86',
                'province_id' => '31',
                'name' => 'Сыктывкар',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            87 => array
            (
                'id' => '87',
                'province_id' => '31',
                'name' => 'Ухта',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            88 => array
            (
                'id' => '88',
                'province_id' => '31',
                'name' => 'Воркута',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            89 => array
            (
                'id' => '89',
                'province_id' => '31',
                'name' => 'Печора',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            90 => array
            (
                'id' => '90',
                'province_id' => '32',
                'name' => 'Кострома',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            91 => array
            (
                'id' => '91',
                'province_id' => '33',
                'name' => 'Краснодар',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            92 => array
            (
                'id' => '92',
                'province_id' => '33',
                'name' => 'Сочи',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            93 => array
            (
                'id' => '93',
                'province_id' => '33',
                'name' => 'Новороссийск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            94 => array
            (
                'id' => '94',
                'province_id' => '33',
                'name' => 'Армавир',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            95 => array
            (
                'id' => '95',
                'province_id' => '33',
                'name' => 'Ейск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            96 => array
            (
                'id' => '96',
                'province_id' => '33',
                'name' => 'Кропоткин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            97 => array
            (
                'id' => '97',
                'province_id' => '33',
                'name' => 'Туапсе',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            98 => array
            (
                'id' => '98',
                'province_id' => '33',
                'name' => 'Тихорецк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            99 => array
            (
                'id' => '99',
                'province_id' => '33',
                'name' => 'Анапа',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            100 => array
            (
                'id' => '100',
                'province_id' => '33',
                'name' => 'Белореченск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            101 => array
            (
                'id' => '101',
                'province_id' => '33',
                'name' => 'Геленджик',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            102 => array
            (
                'id' => '102',
                'province_id' => '34',
                'name' => 'Красноярск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            103 => array
            (
                'id' => '103',
                'province_id' => '34',
                'name' => 'Норильск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            104 => array
            (
                'id' => '104',
                'province_id' => '34',
                'name' => 'Ачинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            105 => array
            (
                'id' => '105',
                'province_id' => '34',
                'name' => 'Канск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            106 => array
            (
                'id' => '106',
                'province_id' => '34',
                'name' => 'Железногорск (Красноярский край)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            107 => array
            (
                'id' => '107',
                'province_id' => '34',
                'name' => 'Зеленогорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            108 => array
            (
                'id' => '108',
                'province_id' => '35',
                'name' => 'Курган',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            109 => array
            (
                'id' => '109',
                'province_id' => '35',
                'name' => 'Шадринск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            110 => array
            (
                'id' => '110',
                'province_id' => '36',
                'name' => 'Курск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            111 => array
            (
                'id' => '111',
                'province_id' => '36',
                'name' => 'Железногорск (Курская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            112 => array
            (
                'id' => '112',
                'province_id' => '36',
                'name' => 'Курчатов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            113 => array
            (
                'id' => '113',
                'province_id' => '37',
                'name' => 'Гатчина',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            114 => array
            (
                'id' => '114',
                'province_id' => '37',
                'name' => 'Выборг',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            115 => array
            (
                'id' => '115',
                'province_id' => '37',
                'name' => 'Сосновый Бор',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            116 => array
            (
                'id' => '116',
                'province_id' => '37',
                'name' => 'Тихвин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            117 => array
            (
                'id' => '117',
                'province_id' => '37',
                'name' => 'Кириши',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            118 => array
            (
                'id' => '118',
                'province_id' => '37',
                'name' => 'Кингисепп',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            119 => array
            (
                'id' => '119',
                'province_id' => '37',
                'name' => 'Всеволожск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            120 => array
            (
                'id' => '120',
                'province_id' => '37',
                'name' => 'Волхов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            121 => array
            (
                'id' => '121',
                'province_id' => '37',
                'name' => 'Сертолово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            122 => array
            (
                'id' => '122',
                'province_id' => '37',
                'name' => 'Луга',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            123 => array
            (
                'id' => '123',
                'province_id' => '37',
                'name' => 'Тосно',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            124 => array
            (
                'id' => '124',
                'province_id' => '37',
                'name' => 'Сланцы',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            125 => array
            (
                'id' => '125',
                'province_id' => '37',
                'name' => 'Кировск (Ленинградская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            126 => array
            (
                'id' => '126',
                'province_id' => '37',
                'name' => 'Лодейное Поле',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            127 => array
            (
                'id' => '127',
                'province_id' => '37',
                'name' => 'Пикалёво',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            128 => array
            (
                'id' => '128',
                'province_id' => '37',
                'name' => 'Отрадное',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            129 => array
            (
                'id' => '129',
                'province_id' => '37',
                'name' => 'Подпорожье',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            130 => array
            (
                'id' => '130',
                'province_id' => '37',
                'name' => 'Коммунар',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            131 => array
            (
                'id' => '131',
                'province_id' => '37',
                'name' => 'Приозерск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            132 => array
            (
                'id' => '132',
                'province_id' => '37',
                'name' => 'Никольское',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            133 => array
            (
                'id' => '133',
                'province_id' => '37',
                'name' => 'Бокситогорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            134 => array
            (
                'id' => '134',
                'province_id' => '37',
                'name' => 'Светогорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            135 => array
            (
                'id' => '135',
                'province_id' => '37',
                'name' => 'Сясьстрой',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            136 => array
            (
                'id' => '136',
                'province_id' => '37',
                'name' => 'Шлиссельбург',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            137 => array
            (
                'id' => '137',
                'province_id' => '37',
                'name' => 'Сиверский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            138 => array
            (
                'id' => '138',
                'province_id' => '37',
                'name' => 'Волосово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            139 => array
            (
                'id' => '139',
                'province_id' => '37',
                'name' => 'Ивангород',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            140 => array
            (
                'id' => '140',
                'province_id' => '37',
                'name' => 'Вырица',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            141 => array
            (
                'id' => '141',
                'province_id' => '37',
                'name' => 'Поселок им. Морозова',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            142 => array
            (
                'id' => '142',
                'province_id' => '38',
                'name' => 'Липецк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            143 => array
            (
                'id' => '143',
                'province_id' => '38',
                'name' => 'Елец',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            144 => array
            (
                'id' => '144',
                'province_id' => '39',
                'name' => 'Магадан',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            145 => array
            (
                'id' => '145',
                'province_id' => '40',
                'name' => 'Йошкар-Ола',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            146 => array
            (
                'id' => '146',
                'province_id' => '40',
                'name' => 'Волжск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            147 => array
            (
                'id' => '147',
                'province_id' => '41',
                'name' => 'Саранск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            148 => array
            (
                'id' => '148',
                'province_id' => '41',
                'name' => 'Рузаевка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            149 => array
            (
                'id' => '149',
                'province_id' => '43',
                'name' => 'Балашиха',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            150 => array
            (
                'id' => '150',
                'province_id' => '43',
                'name' => 'Химки',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            151 => array
            (
                'id' => '151',
                'province_id' => '43',
                'name' => 'Подольск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            152 => array
            (
                'id' => '152',
                'province_id' => '43',
                'name' => 'Королёв',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            153 => array
            (
                'id' => '153',
                'province_id' => '43',
                'name' => 'Мытищи',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            154 => array
            (
                'id' => '154',
                'province_id' => '43',
                'name' => 'Люберцы',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            155 => array
            (
                'id' => '155',
                'province_id' => '43',
                'name' => 'Коломна',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            156 => array
            (
                'id' => '156',
                'province_id' => '43',
                'name' => 'Электросталь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            157 => array
            (
                'id' => '157',
                'province_id' => '43',
                'name' => 'Одинцово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            158 => array
            (
                'id' => '158',
                'province_id' => '43',
                'name' => 'Железнодорожный (Балашиха)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            159 => array
            (
                'id' => '159',
                'province_id' => '43',
                'name' => 'Серпухов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            160 => array
            (
                'id' => '160',
                'province_id' => '43',
                'name' => 'Орехово-Зуево',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            161 => array
            (
                'id' => '161',
                'province_id' => '43',
                'name' => 'Ногинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            162 => array
            (
                'id' => '162',
                'province_id' => '43',
                'name' => 'Щёлково',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            163 => array
            (
                'id' => '163',
                'province_id' => '43',
                'name' => 'Сергиев Посад',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            164 => array
            (
                'id' => '164',
                'province_id' => '43',
                'name' => 'Жуковский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            165 => array
            (
                'id' => '165',
                'province_id' => '43',
                'name' => 'Красногорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            166 => array
            (
                'id' => '166',
                'province_id' => '43',
                'name' => 'Пушкино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            167 => array
            (
                'id' => '167',
                'province_id' => '43',
                'name' => 'Воскресенск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            168 => array
            (
                'id' => '168',
                'province_id' => '43',
                'name' => 'Домодедово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            169 => array
            (
                'id' => '169',
                'province_id' => '43',
                'name' => 'Раменское',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            170 => array
            (
                'id' => '170',
                'province_id' => '43',
                'name' => 'Реутов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            171 => array
            (
                'id' => '171',
                'province_id' => '43',
                'name' => 'Долгопрудный',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            172 => array
            (
                'id' => '172',
                'province_id' => '43',
                'name' => 'Клин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            173 => array
            (
                'id' => '173',
                'province_id' => '43',
                'name' => 'Чехов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            174 => array
            (
                'id' => '174',
                'province_id' => '43',
                'name' => 'Наро-Фоминск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            175 => array
            (
                'id' => '175',
                'province_id' => '43',
                'name' => 'Лобня',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            176 => array
            (
                'id' => '176',
                'province_id' => '43',
                'name' => 'Егорьевск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            177 => array
            (
                'id' => '177',
                'province_id' => '43',
                'name' => 'Ступино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            178 => array
            (
                'id' => '178',
                'province_id' => '43',
                'name' => 'Дмитров',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            179 => array
            (
                'id' => '179',
                'province_id' => '43',
                'name' => 'Дубна',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            180 => array
            (
                'id' => '180',
                'province_id' => '43',
                'name' => 'Павловский Посад',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            181 => array
            (
                'id' => '181',
                'province_id' => '43',
                'name' => 'Солнечногорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            182 => array
            (
                'id' => '182',
                'province_id' => '43',
                'name' => 'Ивантеевка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            183 => array
            (
                'id' => '183',
                'province_id' => '42',
                'name' => 'Климовск (Москва)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            184 => array
            (
                'id' => '184',
                'province_id' => '43',
                'name' => 'Видное',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            185 => array
            (
                'id' => '185',
                'province_id' => '43',
                'name' => 'Фрязино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            186 => array
            (
                'id' => '186',
                'province_id' => '43',
                'name' => 'Лыткарино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            187 => array
            (
                'id' => '187',
                'province_id' => '43',
                'name' => 'Дзержинский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            188 => array
            (
                'id' => '188',
                'province_id' => '43',
                'name' => 'Кашира',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            189 => array
            (
                'id' => '189',
                'province_id' => '43',
                'name' => 'Протвино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            190 => array
            (
                'id' => '190',
                'province_id' => '42',
                'name' => 'Троицк (Москва)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            191 => array
            (
                'id' => '191',
                'province_id' => '42',
                'name' => 'Юбилейный (Москва)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            192 => array
            (
                'id' => '192',
                'province_id' => '43',
                'name' => 'Истра',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            193 => array
            (
                'id' => '193',
                'province_id' => '43',
                'name' => 'Нахабино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            194 => array
            (
                'id' => '194',
                'province_id' => '43',
                'name' => 'Краснознаменск (Московская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            195 => array
            (
                'id' => '195',
                'province_id' => '43',
                'name' => 'Луховицы',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            196 => array
            (
                'id' => '196',
                'province_id' => '42',
                'name' => 'Щербинка (Москва)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            197 => array
            (
                'id' => '197',
                'province_id' => '43',
                'name' => 'Шатура',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            198 => array
            (
                'id' => '198',
                'province_id' => '43',
                'name' => 'Ликино-Дулёво',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            199 => array
            (
                'id' => '199',
                'province_id' => '43',
                'name' => 'Можайск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            200 => array
            (
                'id' => '200',
                'province_id' => '43',
                'name' => 'Томилино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            201 => array
            (
                'id' => '201',
                'province_id' => '43',
                'name' => 'Дедовск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            202 => array
            (
                'id' => '202',
                'province_id' => '43',
                'name' => 'Красноармейск (Московская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            203 => array
            (
                'id' => '203',
                'province_id' => '43',
                'name' => 'Кубинка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            204 => array
            (
                'id' => '204',
                'province_id' => '43',
                'name' => 'Озёры',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            205 => array
            (
                'id' => '205',
                'province_id' => '43',
                'name' => 'Зарайск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            206 => array
            (
                'id' => '206',
                'province_id' => '43',
                'name' => 'Калининец',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            207 => array
            (
                'id' => '207',
                'province_id' => '43',
                'name' => 'Волоколамск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            208 => array
            (
                'id' => '208',
                'province_id' => '43',
                'name' => 'Лосино-Петровский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            209 => array
            (
                'id' => '209',
                'province_id' => '43',
                'name' => 'Старая Купавна',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            210 => array
            (
                'id' => '210',
                'province_id' => '43',
                'name' => 'Рошаль',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            211 => array
            (
                'id' => '211',
                'province_id' => '43',
                'name' => 'Электрогорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            212 => array
            (
                'id' => '212',
                'province_id' => '43',
                'name' => 'Электроугли',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            213 => array
            (
                'id' => '213',
                'province_id' => '43',
                'name' => 'Черноголовка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            214 => array
            (
                'id' => '214',
                'province_id' => '43',
                'name' => 'Котельники',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            215 => array
            (
                'id' => '215',
                'province_id' => '43',
                'name' => 'Пущино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            216 => array
            (
                'id' => '216',
                'province_id' => '43',
                'name' => 'Красково',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            217 => array
            (
                'id' => '217',
                'province_id' => '44',
                'name' => 'Мурманск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            218 => array
            (
                'id' => '218',
                'province_id' => '44',
                'name' => 'Апатиты',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            219 => array
            (
                'id' => '219',
                'province_id' => '44',
                'name' => 'Североморск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            220 => array
            (
                'id' => '220',
                'province_id' => '45',
                'name' => 'Нарьян-Мар',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            221 => array
            (
                'id' => '221',
                'province_id' => '46',
                'name' => 'Нижний Новгород',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            222 => array
            (
                'id' => '222',
                'province_id' => '46',
                'name' => 'Дзержинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            223 => array
            (
                'id' => '223',
                'province_id' => '46',
                'name' => 'Арзамас',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            224 => array
            (
                'id' => '224',
                'province_id' => '46',
                'name' => 'Саров',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            225 => array
            (
                'id' => '225',
                'province_id' => '46',
                'name' => 'Бор',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            226 => array
            (
                'id' => '226',
                'province_id' => '46',
                'name' => 'Кстово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            227 => array
            (
                'id' => '227',
                'province_id' => '46',
                'name' => 'Павлово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            228 => array
            (
                'id' => '228',
                'province_id' => '46',
                'name' => 'Выкса',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            229 => array
            (
                'id' => '229',
                'province_id' => '46',
                'name' => 'Балахна',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            230 => array
            (
                'id' => '230',
                'province_id' => '47',
                'name' => 'Великий Новгород',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            231 => array
            (
                'id' => '231',
                'province_id' => '47',
                'name' => 'Боровичи',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            232 => array
            (
                'id' => '232',
                'province_id' => '47',
                'name' => 'Старая Русса',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            233 => array
            (
                'id' => '233',
                'province_id' => '48',
                'name' => 'Новосибирск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            234 => array
            (
                'id' => '234',
                'province_id' => '48',
                'name' => 'Бердск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            235 => array
            (
                'id' => '235',
                'province_id' => '48',
                'name' => 'Куйбышев',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            236 => array
            (
                'id' => '236',
                'province_id' => '49',
                'name' => 'Омск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            237 => array
            (
                'id' => '237',
                'province_id' => '50',
                'name' => 'Оренбург',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            238 => array
            (
                'id' => '238',
                'province_id' => '50',
                'name' => 'Орск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            239 => array
            (
                'id' => '239',
                'province_id' => '50',
                'name' => 'Новотроицк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            240 => array
            (
                'id' => '240',
                'province_id' => '50',
                'name' => 'Бузулук',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            241 => array
            (
                'id' => '241',
                'province_id' => '51',
                'name' => 'Орёл',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            242 => array
            (
                'id' => '242',
                'province_id' => '51',
                'name' => 'Ливны',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            243 => array
            (
                'id' => '243',
                'province_id' => '51',
                'name' => 'Мценск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            244 => array
            (
                'id' => '244',
                'province_id' => '52',
                'name' => 'Пенза',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            245 => array
            (
                'id' => '245',
                'province_id' => '52',
                'name' => 'Кузнецк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            246 => array
            (
                'id' => '246',
                'province_id' => '52',
                'name' => 'Заречный (Пензенская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            247 => array
            (
                'id' => '247',
                'province_id' => '52',
                'name' => 'Каменка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            248 => array
            (
                'id' => '248',
                'province_id' => '53',
                'name' => 'Пермь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            249 => array
            (
                'id' => '249',
                'province_id' => '53',
                'name' => 'Березники',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            250 => array
            (
                'id' => '250',
                'province_id' => '53',
                'name' => 'Соликамск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            251 => array
            (
                'id' => '251',
                'province_id' => '53',
                'name' => 'Чайковский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            252 => array
            (
                'id' => '252',
                'province_id' => '53',
                'name' => 'Лысьва',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            253 => array
            (
                'id' => '253',
                'province_id' => '53',
                'name' => 'Кунгур',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            254 => array
            (
                'id' => '254',
                'province_id' => '53',
                'name' => 'Краснокамск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            255 => array
            (
                'id' => '255',
                'province_id' => '54',
                'name' => 'Владивосток',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            256 => array
            (
                'id' => '256',
                'province_id' => '54',
                'name' => 'Находка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            257 => array
            (
                'id' => '257',
                'province_id' => '54',
                'name' => 'Уссурийск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            258 => array
            (
                'id' => '258',
                'province_id' => '54',
                'name' => 'Артём',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            259 => array
            (
                'id' => '259',
                'province_id' => '55',
                'name' => 'Псков',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            260 => array
            (
                'id' => '260',
                'province_id' => '55',
                'name' => 'Великие Луки',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            261 => array
            (
                'id' => '261',
                'province_id' => '56',
                'name' => 'Ростов-на-Дону',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            262 => array
            (
                'id' => '262',
                'province_id' => '56',
                'name' => 'Таганрог',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            263 => array
            (
                'id' => '263',
                'province_id' => '56',
                'name' => 'Шахты',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            264 => array
            (
                'id' => '264',
                'province_id' => '56',
                'name' => 'Новочеркасск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            265 => array
            (
                'id' => '265',
                'province_id' => '56',
                'name' => 'Волгодонск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            266 => array
            (
                'id' => '266',
                'province_id' => '56',
                'name' => 'Новошахтинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            267 => array
            (
                'id' => '267',
                'province_id' => '56',
                'name' => 'Батайск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            268 => array
            (
                'id' => '268',
                'province_id' => '56',
                'name' => 'Каменск-Шахтинский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            269 => array
            (
                'id' => '269',
                'province_id' => '56',
                'name' => 'Азов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            270 => array
            (
                'id' => '270',
                'province_id' => '56',
                'name' => 'Гуково',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            271 => array
            (
                'id' => '271',
                'province_id' => '56',
                'name' => 'Сальск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            272 => array
            (
                'id' => '272',
                'province_id' => '56',
                'name' => 'Донецк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            273 => array
            (
                'id' => '273',
                'province_id' => '56',
                'name' => 'Белая Калитва',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            274 => array
            (
                'id' => '274',
                'province_id' => '57',
                'name' => 'Рязань',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            275 => array
            (
                'id' => '275',
                'province_id' => '57',
                'name' => 'Касимов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            276 => array
            (
                'id' => '276',
                'province_id' => '58',
                'name' => 'Самара',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            277 => array
            (
                'id' => '277',
                'province_id' => '58',
                'name' => 'Тольятти',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            278 => array
            (
                'id' => '278',
                'province_id' => '58',
                'name' => 'Сызрань',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            279 => array
            (
                'id' => '279',
                'province_id' => '58',
                'name' => 'Новокуйбышевск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            280 => array
            (
                'id' => '280',
                'province_id' => '58',
                'name' => 'Чапаевск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            281 => array
            (
                'id' => '281',
                'province_id' => '58',
                'name' => 'Жигулёвск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            282 => array
            (
                'id' => '282',
                'province_id' => '60',
                'name' => 'Саратов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            283 => array
            (
                'id' => '283',
                'province_id' => '60',
                'name' => 'Энгельс',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            284 => array
            (
                'id' => '284',
                'province_id' => '60',
                'name' => 'Балаково',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            285 => array
            (
                'id' => '285',
                'province_id' => '60',
                'name' => 'Балашов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            286 => array
            (
                'id' => '286',
                'province_id' => '60',
                'name' => 'Вольск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            287 => array
            (
                'id' => '287',
                'province_id' => '61',
                'name' => 'Якутск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            288 => array
            (
                'id' => '288',
                'province_id' => '61',
                'name' => 'Нерюнгри',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            289 => array
            (
                'id' => '289',
                'province_id' => '61',
                'name' => 'Мирный',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            290 => array
            (
                'id' => '290',
                'province_id' => '62',
                'name' => 'Южно-Сахалинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            291 => array
            (
                'id' => '291',
                'province_id' => '63',
                'name' => 'Екатеринбург',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            292 => array
            (
                'id' => '292',
                'province_id' => '63',
                'name' => 'Нижний Тагил',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            293 => array
            (
                'id' => '293',
                'province_id' => '63',
                'name' => 'Каменск-Уральский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            294 => array
            (
                'id' => '294',
                'province_id' => '63',
                'name' => 'Первоуральск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            295 => array
            (
                'id' => '295',
                'province_id' => '63',
                'name' => 'Серов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            296 => array
            (
                'id' => '296',
                'province_id' => '63',
                'name' => 'Новоуральск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            297 => array
            (
                'id' => '297',
                'province_id' => '63',
                'name' => 'Асбест',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            298 => array
            (
                'id' => '298',
                'province_id' => '63',
                'name' => 'Полевской',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            299 => array
            (
                'id' => '299',
                'province_id' => '63',
                'name' => 'Ревда',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            300 => array
            (
                'id' => '300',
                'province_id' => '63',
                'name' => 'Краснотурьинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            301 => array
            (
                'id' => '301',
                'province_id' => '64',
                'name' => 'Владикавказ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            302 => array
            (
                'id' => '302',
                'province_id' => '64',
                'name' => 'Моздок',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            303 => array
            (
                'id' => '303',
                'province_id' => '65',
                'name' => 'Смоленск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            304 => array
            (
                'id' => '304',
                'province_id' => '65',
                'name' => 'Вязьма',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            305 => array
            (
                'id' => '305',
                'province_id' => '66',
                'name' => 'Ставрополь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            306 => array
            (
                'id' => '306',
                'province_id' => '66',
                'name' => 'Пятигорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            307 => array
            (
                'id' => '307',
                'province_id' => '66',
                'name' => 'Кисловодск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            308 => array
            (
                'id' => '308',
                'province_id' => '66',
                'name' => 'Ессентуки',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            309 => array
            (
                'id' => '309',
                'province_id' => '66',
                'name' => 'Минеральные Воды',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            310 => array
            (
                'id' => '310',
                'province_id' => '66',
                'name' => 'Будённовск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            311 => array
            (
                'id' => '311',
                'province_id' => '67',
                'name' => 'Тамбов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            312 => array
            (
                'id' => '312',
                'province_id' => '67',
                'name' => 'Мичуринск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            313 => array
            (
                'id' => '313',
                'province_id' => '68',
                'name' => 'Казань',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            314 => array
            (
                'id' => '314',
                'province_id' => '68',
                'name' => 'Набережные Челны',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            315 => array
            (
                'id' => '315',
                'province_id' => '68',
                'name' => 'Нижнекамск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            316 => array
            (
                'id' => '316',
                'province_id' => '68',
                'name' => 'Альметьевск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            317 => array
            (
                'id' => '317',
                'province_id' => '68',
                'name' => 'Зеленодольск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            318 => array
            (
                'id' => '318',
                'province_id' => '68',
                'name' => 'Бугульма',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            319 => array
            (
                'id' => '319',
                'province_id' => '69',
                'name' => 'Тверь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            320 => array
            (
                'id' => '320',
                'province_id' => '69',
                'name' => 'Ржев',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            321 => array
            (
                'id' => '321',
                'province_id' => '70',
                'name' => 'Томск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            322 => array
            (
                'id' => '322',
                'province_id' => '70',
                'name' => 'Северск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            323 => array
            (
                'id' => '323',
                'province_id' => '71',
                'name' => 'Тула',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            324 => array
            (
                'id' => '324',
                'province_id' => '71',
                'name' => 'Новомосковск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            325 => array
            (
                'id' => '325',
                'province_id' => '71',
                'name' => 'Узловая',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            326 => array
            (
                'id' => '326',
                'province_id' => '72',
                'name' => 'Кызыл',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            327 => array
            (
                'id' => '327',
                'province_id' => '73',
                'name' => 'Тюмень',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            328 => array
            (
                'id' => '328',
                'province_id' => '73',
                'name' => 'Тобольск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            329 => array
            (
                'id' => '329',
                'province_id' => '74',
                'name' => 'Ижевск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            330 => array
            (
                'id' => '330',
                'province_id' => '74',
                'name' => 'Сарапул',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            331 => array
            (
                'id' => '331',
                'province_id' => '74',
                'name' => 'Глазов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            332 => array
            (
                'id' => '332',
                'province_id' => '74',
                'name' => 'Воткинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            333 => array
            (
                'id' => '333',
                'province_id' => '75',
                'name' => 'Ульяновск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            334 => array
            (
                'id' => '334',
                'province_id' => '75',
                'name' => 'Димитровград',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            335 => array
            (
                'id' => '335',
                'province_id' => '76',
                'name' => 'Хабаровск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            336 => array
            (
                'id' => '336',
                'province_id' => '76',
                'name' => 'Комсомольск-на-Амуре',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            337 => array
            (
                'id' => '337',
                'province_id' => '76',
                'name' => 'Амурск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            338 => array
            (
                'id' => '338',
                'province_id' => '77',
                'name' => 'Абакан',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            339 => array
            (
                'id' => '339',
                'province_id' => '77',
                'name' => 'Черногорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            340 => array
            (
                'id' => '340',
                'province_id' => '78',
                'name' => 'Сургут',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            341 => array
            (
                'id' => '341',
                'province_id' => '78',
                'name' => 'Нижневартовск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            342 => array
            (
                'id' => '342',
                'province_id' => '78',
                'name' => 'Нефтеюганск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            343 => array
            (
                'id' => '343',
                'province_id' => '78',
                'name' => 'Ханты-Мансийск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            344 => array
            (
                'id' => '344',
                'province_id' => '79',
                'name' => 'Челябинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            345 => array
            (
                'id' => '345',
                'province_id' => '79',
                'name' => 'Магнитогорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            346 => array
            (
                'id' => '346',
                'province_id' => '79',
                'name' => 'Златоуст',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            347 => array
            (
                'id' => '347',
                'province_id' => '79',
                'name' => 'Миасс',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            348 => array
            (
                'id' => '348',
                'province_id' => '79',
                'name' => 'Копейск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            349 => array
            (
                'id' => '349',
                'province_id' => '79',
                'name' => 'Озёрск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            350 => array
            (
                'id' => '350',
                'province_id' => '79',
                'name' => 'Троицк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            351 => array
            (
                'id' => '351',
                'province_id' => '79',
                'name' => 'Снежинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            352 => array
            (
                'id' => '352',
                'province_id' => '79',
                'name' => 'Сатка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            353 => array
            (
                'id' => '353',
                'province_id' => '80',
                'name' => 'Грозный',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            354 => array
            (
                'id' => '354',
                'province_id' => '80',
                'name' => 'Урус-Мартан',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            355 => array
            (
                'id' => '355',
                'province_id' => '81',
                'name' => 'Чебоксары',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            356 => array
            (
                'id' => '356',
                'province_id' => '81',
                'name' => 'Новочебоксарск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            357 => array
            (
                'id' => '357',
                'province_id' => '83',
                'name' => 'Новый Уренгой',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            358 => array
            (
                'id' => '358',
                'province_id' => '83',
                'name' => 'Ноябрьск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            359 => array
            (
                'id' => '359',
                'province_id' => '84',
                'name' => 'Ярославль',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            360 => array
            (
                'id' => '360',
                'province_id' => '84',
                'name' => 'Рыбинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            361 => array
            (
                'id' => '361',
                'province_id' => '84',
                'name' => 'Переславль-Залесский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            362 => array
            (
                'id' => '362',
                'province_id' => '42',
                'name' => 'Москва',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            363 => array
            (
                'id' => '363',
                'province_id' => '59',
                'name' => 'Санкт-Петербург',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            364 => array
            (
                'id' => '364',
                'province_id' => '77',
                'name' => 'Абаза',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            365 => array
            (
                'id' => '365',
                'province_id' => '50',
                'name' => 'Абдулино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            366 => array
            (
                'id' => '366',
                'province_id' => '33',
                'name' => 'Абинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            367 => array
            (
                'id' => '367',
                'province_id' => '8',
                'name' => 'Агидель',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            368 => array
            (
                'id' => '368',
                'province_id' => '68',
                'name' => 'Агрыз',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            369 => array
            (
                'id' => '369',
                'province_id' => '2',
                'name' => 'Адыгейск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            370 => array
            (
                'id' => '370',
                'province_id' => '68',
                'name' => 'Азнакаево',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            371 => array
            (
                'id' => '371',
                'province_id' => '72',
                'name' => 'Ак-Довурак',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            372 => array
            (
                'id' => '372',
                'province_id' => '56',
                'name' => 'Аксай',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            373 => array
            (
                'id' => '373',
                'province_id' => '64',
                'name' => 'Алагир',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            374 => array
            (
                'id' => '374',
                'province_id' => '63',
                'name' => 'Алапаевск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            375 => array
            (
                'id' => '375',
                'province_id' => '81',
                'name' => 'Алатырь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            376 => array
            (
                'id' => '376',
                'province_id' => '61',
                'name' => 'Алдан',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            377 => array
            (
                'id' => '377',
                'province_id' => '4',
                'name' => 'Алейск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            378 => array
            (
                'id' => '378',
                'province_id' => '53',
                'name' => 'Александровск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            379 => array
            (
                'id' => '379',
                'province_id' => '62',
                'name' => 'Александровск-Сахалинский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            380 => array
            (
                'id' => '380',
                'province_id' => '9',
                'name' => 'Алексеевка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            381 => array
            (
                'id' => '381',
                'province_id' => '71',
                'name' => 'Алексин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            382 => array
            (
                'id' => '382',
                'province_id' => '21',
                'name' => 'Алзамай',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            383 => array
            (
                'id' => '383',
                'province_id' => '82',
                'name' => 'Анадырь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            384 => array
            (
                'id' => '384',
                'province_id' => '69',
                'name' => 'Андреаполь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            385 => array
            (
                'id' => '385',
                'province_id' => '29',
                'name' => 'Анжеро-Судженск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            386 => array
            (
                'id' => '386',
                'province_id' => '62',
                'name' => 'Анива',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            387 => array
            (
                'id' => '387',
                'province_id' => '43',
                'name' => 'Апрелевка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            388 => array
            (
                'id' => '388',
                'province_id' => '33',
                'name' => 'Апшеронск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            389 => array
            (
                'id' => '389',
                'province_id' => '63',
                'name' => 'Арамиль',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            390 => array
            (
                'id' => '390',
                'province_id' => '80',
                'name' => 'Аргун',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            391 => array
            (
                'id' => '391',
                'province_id' => '41',
                'name' => 'Ардатов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            392 => array
            (
                'id' => '392',
                'province_id' => '64',
                'name' => 'Ардон',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            393 => array
            (
                'id' => '393',
                'province_id' => '60',
                'name' => 'Аркадак',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            394 => array
            (
                'id' => '394',
                'province_id' => '54',
                'name' => 'Арсеньев',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            395 => array
            (
                'id' => '395',
                'province_id' => '68',
                'name' => 'Арск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            396 => array
            (
                'id' => '396',
                'province_id' => '34',
                'name' => 'Артёмовск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            397 => array
            (
                'id' => '397',
                'province_id' => '63',
                'name' => 'Артёмовский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            398 => array
            (
                'id' => '398',
                'province_id' => '70',
                'name' => 'Асино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            399 => array
            (
                'id' => '399',
                'province_id' => '60',
                'name' => 'Аткарск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            400 => array
            (
                'id' => '400',
                'province_id' => '79',
                'name' => 'Аша',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            401 => array
            (
                'id' => '401',
                'province_id' => '14',
                'name' => 'Бабаево',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            402 => array
            (
                'id' => '402',
                'province_id' => '11',
                'name' => 'Бабушкин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            403 => array
            (
                'id' => '403',
                'province_id' => '68',
                'name' => 'Бавлы',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            404 => array
            (
                'id' => '404',
                'province_id' => '23',
                'name' => 'Багратионовск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            405 => array
            (
                'id' => '405',
                'province_id' => '21',
                'name' => 'Байкальск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            406 => array
            (
                'id' => '406',
                'province_id' => '8',
                'name' => 'Баймак',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            407 => array
            (
                'id' => '407',
                'province_id' => '79',
                'name' => 'Бакал',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            408 => array
            (
                'id' => '408',
                'province_id' => '22',
                'name' => 'Баксан',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            409 => array
            (
                'id' => '409',
                'province_id' => '25',
                'name' => 'Балабаново',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            410 => array
            (
                'id' => '410',
                'province_id' => '18',
                'name' => 'Балей',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            411 => array
            (
                'id' => '411',
                'province_id' => '23',
                'name' => 'Балтийск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            412 => array
            (
                'id' => '412',
                'province_id' => '48',
                'name' => 'Барабинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            413 => array
            (
                'id' => '413',
                'province_id' => '75',
                'name' => 'Барыш',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            414 => array
            (
                'id' => '414',
                'province_id' => '69',
                'name' => 'Бежецк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            415 => array
            (
                'id' => '415',
                'province_id' => '71',
                'name' => 'Белёв',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            416 => array
            (
                'id' => '416',
                'province_id' => '30',
                'name' => 'Белая Холуница',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            417 => array
            (
                'id' => '417',
                'province_id' => '8',
                'name' => 'Белебей',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            418 => array
            (
                'id' => '418',
                'province_id' => '52',
                'name' => 'Белинский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            419 => array
            (
                'id' => '419',
                'province_id' => '29',
                'name' => 'Белово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            420 => array
            (
                'id' => '420',
                'province_id' => '14',
                'name' => 'Белозерск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            421 => array
            (
                'id' => '421',
                'province_id' => '4',
                'name' => 'Белокуриха',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            422 => array
            (
                'id' => '422',
                'province_id' => '28',
                'name' => 'Беломорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            423 => array
            (
                'id' => '423',
                'province_id' => '25',
                'name' => 'Белоусово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            424 => array
            (
                'id' => '424',
                'province_id' => '78',
                'name' => 'Белоярский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            425 => array
            (
                'id' => '425',
                'province_id' => '69',
                'name' => 'Белый',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            426 => array
            (
                'id' => '426',
                'province_id' => '29',
                'name' => 'Березовский (Кемеровская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            427 => array
            (
                'id' => '427',
                'province_id' => '63',
                'name' => 'Березовский (Свердловская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            428 => array
            (
                'id' => '428',
                'province_id' => '64',
                'name' => 'Беслан',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            429 => array
            (
                'id' => '429',
                'province_id' => '76',
                'name' => 'Бикин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            430 => array
            (
                'id' => '430',
                'province_id' => '82',
                'name' => 'Билибино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            431 => array
            (
                'id' => '431',
                'province_id' => '8',
                'name' => 'Бирск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            432 => array
            (
                'id' => '432',
                'province_id' => '21',
                'name' => 'Бирюсинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            433 => array
            (
                'id' => '433',
                'province_id' => '9',
                'name' => 'Бирюч',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            434 => array
            (
                'id' => '434',
                'province_id' => '66',
                'name' => 'Благодарный',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            435 => array
            (
                'id' => '435',
                'province_id' => '15',
                'name' => 'Бобров',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            436 => array
            (
                'id' => '436',
                'province_id' => '63',
                'name' => 'Богданович',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            437 => array
            (
                'id' => '437',
                'province_id' => '71',
                'name' => 'Богородицк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            438 => array
            (
                'id' => '438',
                'province_id' => '46',
                'name' => 'Богородск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            439 => array
            (
                'id' => '439',
                'province_id' => '34',
                'name' => 'Боготол',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            440 => array
            (
                'id' => '440',
                'province_id' => '15',
                'name' => 'Богучар',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            441 => array
            (
                'id' => '441',
                'province_id' => '21',
                'name' => 'Бодайбо',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            442 => array
            (
                'id' => '442',
                'province_id' => '68',
                'name' => 'Болгар',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            443 => array
            (
                'id' => '443',
                'province_id' => '69',
                'name' => 'Бологое',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            444 => array
            (
                'id' => '444',
                'province_id' => '48',
                'name' => 'Болотное',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            445 => array
            (
                'id' => '445',
                'province_id' => '71',
                'name' => 'Болохово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            446 => array
            (
                'id' => '446',
                'province_id' => '51',
                'name' => 'Болхов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            447 => array
            (
                'id' => '447',
                'province_id' => '54',
                'name' => 'Большой Камень',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            448 => array
            (
                'id' => '448',
                'province_id' => '18',
                'name' => 'Борзя',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            449 => array
            (
                'id' => '449',
                'province_id' => '25',
                'name' => 'Боровск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            450 => array
            (
                'id' => '450',
                'province_id' => '34',
                'name' => 'Бородино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            451 => array
            (
                'id' => '451',
                'province_id' => '43',
                'name' => 'Бронницы',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            452 => array
            (
                'id' => '452',
                'province_id' => '50',
                'name' => 'Бугуруслан',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            453 => array
            (
                'id' => '453',
                'province_id' => '68',
                'name' => 'Буинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            454 => array
            (
                'id' => '454',
                'province_id' => '32',
                'name' => 'Буй',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            455 => array
            (
                'id' => '455',
                'province_id' => '16',
                'name' => 'Буйнакск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            456 => array
            (
                'id' => '456',
                'province_id' => '15',
                'name' => 'Бутурлиновка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            457 => array
            (
                'id' => '457',
                'province_id' => '47',
                'name' => 'Валдай',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            458 => array
            (
                'id' => '458',
                'province_id' => '9',
                'name' => 'Валуйки',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            459 => array
            (
                'id' => '459',
                'province_id' => '65',
                'name' => 'Велиж',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            460 => array
            (
                'id' => '460',
                'province_id' => '14',
                'name' => 'Великий Устюг',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            461 => array
            (
                'id' => '461',
                'province_id' => '6',
                'name' => 'Вельск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            462 => array
            (
                'id' => '462',
                'province_id' => '71',
                'name' => 'Венёв',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            463 => array
            (
                'id' => '463',
                'province_id' => '53',
                'name' => 'Верещагино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            464 => array
            (
                'id' => '464',
                'province_id' => '43',
                'name' => 'Верея',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            465 => array
            (
                'id' => '465',
                'province_id' => '79',
                'name' => 'Верхнеуральск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            466 => array
            (
                'id' => '466',
                'province_id' => '63',
                'name' => 'Верхний Тагил',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            467 => array
            (
                'id' => '467',
                'province_id' => '79',
                'name' => 'Верхний Уфалей',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            468 => array
            (
                'id' => '468',
                'province_id' => '63',
                'name' => 'Верхняя Пышма',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            469 => array
            (
                'id' => '469',
                'province_id' => '63',
                'name' => 'Верхняя Салда',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            470 => array
            (
                'id' => '470',
                'province_id' => '63',
                'name' => 'Верхняя Тура',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            471 => array
            (
                'id' => '471',
                'province_id' => '63',
                'name' => 'Верхотурье',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            472 => array
            (
                'id' => '472',
                'province_id' => '61',
                'name' => 'Верхоянск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            473 => array
            (
                'id' => '473',
                'province_id' => '69',
                'name' => 'Весьегонск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            474 => array
            (
                'id' => '474',
                'province_id' => '46',
                'name' => 'Ветлуга',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            475 => array
            (
                'id' => '475',
                'province_id' => '61',
                'name' => 'Вилюйск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            476 => array
            (
                'id' => '476',
                'province_id' => '21',
                'name' => 'Вихоревка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            477 => array
            (
                'id' => '477',
                'province_id' => '19',
                'name' => 'Вичуга',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            478 => array
            (
                'id' => '478',
                'province_id' => '32',
                'name' => 'Волгореченск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            479 => array
            (
                'id' => '479',
                'province_id' => '46',
                'name' => 'Володарск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            480 => array
            (
                'id' => '480',
                'province_id' => '63',
                'name' => 'Волчанск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            481 => array
            (
                'id' => '481',
                'province_id' => '46',
                'name' => 'Ворсма',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            482 => array
            (
                'id' => '482',
                'province_id' => '31',
                'name' => 'Вуктыл',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            483 => array
            (
                'id' => '483',
                'province_id' => '43',
                'name' => 'Высоковск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            484 => array
            (
                'id' => '484',
                'province_id' => '37',
                'name' => 'Высоцк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            485 => array
            (
                'id' => '485',
                'province_id' => '14',
                'name' => 'Вытегра',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            486 => array
            (
                'id' => '486',
                'province_id' => '69',
                'name' => 'Вышний Волочёк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            487 => array
            (
                'id' => '487',
                'province_id' => '76',
                'name' => 'Вяземский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            488 => array
            (
                'id' => '488',
                'province_id' => '12',
                'name' => 'Вязники',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            489 => array
            (
                'id' => '489',
                'province_id' => '30',
                'name' => 'Вятские Поляны',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            490 => array
            (
                'id' => '490',
                'province_id' => '19',
                'name' => 'Гаврилов Посад',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            491 => array
            (
                'id' => '491',
                'province_id' => '84',
                'name' => 'Гаврилов-Ям',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            492 => array
            (
                'id' => '492',
                'province_id' => '65',
                'name' => 'Гагарин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            493 => array
            (
                'id' => '493',
                'province_id' => '44',
                'name' => 'Гаджиево',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            494 => array
            (
                'id' => '494',
                'province_id' => '50',
                'name' => 'Гай',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            495 => array
            (
                'id' => '495',
                'province_id' => '32',
                'name' => 'Галич',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            496 => array
            (
                'id' => '496',
                'province_id' => '23',
                'name' => 'Гвардейск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            497 => array
            (
                'id' => '497',
                'province_id' => '55',
                'name' => 'Гдов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            498 => array
            (
                'id' => '498',
                'province_id' => '66',
                'name' => 'Георгиевск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            499 => array
            (
                'id' => '499',
                'province_id' => '43',
                'name' => 'Голицыно',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            500 => array
            (
                'id' => '500',
                'province_id' => '46',
                'name' => 'Горбатов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            501 => array
            (
                'id' => '501',
                'province_id' => '53',
                'name' => 'Горнозаводск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            502 => array
            (
                'id' => '502',
                'province_id' => '4',
                'name' => 'Горняк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            503 => array
            (
                'id' => '503',
                'province_id' => '46',
                'name' => 'Городец',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            504 => array
            (
                'id' => '504',
                'province_id' => '52',
                'name' => 'Городище',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            505 => array
            (
                'id' => '505',
                'province_id' => '24',
                'name' => 'Городовиковск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            506 => array
            (
                'id' => '506',
                'province_id' => '12',
                'name' => 'Гороховец',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            507 => array
            (
                'id' => '507',
                'province_id' => '33',
                'name' => 'Горячий Ключ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            508 => array
            (
                'id' => '508',
                'province_id' => '9',
                'name' => 'Грайворон',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            509 => array
            (
                'id' => '509',
                'province_id' => '53',
                'name' => 'Гремячинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            510 => array
            (
                'id' => '510',
                'province_id' => '38',
                'name' => 'Грязи',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            511 => array
            (
                'id' => '511',
                'province_id' => '14',
                'name' => 'Грязовец',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            512 => array
            (
                'id' => '512',
                'province_id' => '53',
                'name' => 'Губаха',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            513 => array
            (
                'id' => '513',
                'province_id' => '83',
                'name' => 'Губкинский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            514 => array
            (
                'id' => '514',
                'province_id' => '80',
                'name' => 'Гудермес',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            515 => array
            (
                'id' => '515',
                'province_id' => '33',
                'name' => 'Гулькевичи',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            516 => array
            (
                'id' => '516',
                'province_id' => '23',
                'name' => 'Гурьевск (Калининградская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            517 => array
            (
                'id' => '517',
                'province_id' => '29',
                'name' => 'Гурьевск (Кемеровская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            518 => array
            (
                'id' => '518',
                'province_id' => '23',
                'name' => 'Гусев',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            519 => array
            (
                'id' => '519',
                'province_id' => '11',
                'name' => 'Гусиноозёрск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            520 => array
            (
                'id' => '520',
                'province_id' => '8',
                'name' => 'Давлеканово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            521 => array
            (
                'id' => '521',
                'province_id' => '16',
                'name' => 'Дагестанские Огни',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            522 => array
            (
                'id' => '522',
                'province_id' => '35',
                'name' => 'Далматово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            523 => array
            (
                'id' => '523',
                'province_id' => '54',
                'name' => 'Дальнегорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            524 => array
            (
                'id' => '524',
                'province_id' => '54',
                'name' => 'Дальнереченск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            525 => array
            (
                'id' => '525',
                'province_id' => '84',
                'name' => 'Данилов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            526 => array
            (
                'id' => '526',
                'province_id' => '38',
                'name' => 'Данков',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            527 => array
            (
                'id' => '527',
                'province_id' => '63',
                'name' => 'Дегтярск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            528 => array
            (
                'id' => '528',
                'province_id' => '65',
                'name' => 'Демидов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            529 => array
            (
                'id' => '529',
                'province_id' => '65',
                'name' => 'Десногорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            530 => array
            (
                'id' => '530',
                'province_id' => '34',
                'name' => 'Дивногорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            531 => array
            (
                'id' => '531',
                'province_id' => '64',
                'name' => 'Дигора',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            532 => array
            (
                'id' => '532',
                'province_id' => '36',
                'name' => 'Дмитриев',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            533 => array
            (
                'id' => '533',
                'province_id' => '51',
                'name' => 'Дмитровск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            534 => array
            (
                'id' => '534',
                'province_id' => '55',
                'name' => 'Дно',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            535 => array
            (
                'id' => '535',
                'province_id' => '53',
                'name' => 'Добрянка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            536 => array
            (
                'id' => '536',
                'province_id' => '62',
                'name' => 'Долинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            537 => array
            (
                'id' => '537',
                'province_id' => '71',
                'name' => 'Донской',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            538 => array
            (
                'id' => '538',
                'province_id' => '65',
                'name' => 'Дорогобуж',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            539 => array
            (
                'id' => '539',
                'province_id' => '43',
                'name' => 'Дрезна',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            540 => array
            (
                'id' => '540',
                'province_id' => '13',
                'name' => 'Дубовка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            541 => array
            (
                'id' => '541',
                'province_id' => '34',
                'name' => 'Дудинка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            542 => array
            (
                'id' => '542',
                'province_id' => '65',
                'name' => 'Духовщина',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            543 => array
            (
                'id' => '543',
                'province_id' => '8',
                'name' => 'Дюртюли',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            544 => array
            (
                'id' => '544',
                'province_id' => '10',
                'name' => 'Дятьково',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            545 => array
            (
                'id' => '545',
                'province_id' => '68',
                'name' => 'Елабуга',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            546 => array
            (
                'id' => '546',
                'province_id' => '65',
                'name' => 'Ельня',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            547 => array
            (
                'id' => '547',
                'province_id' => '79',
                'name' => 'Еманжелинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            548 => array
            (
                'id' => '548',
                'province_id' => '31',
                'name' => 'Емва',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            549 => array
            (
                'id' => '549',
                'province_id' => '34',
                'name' => 'Енисейск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            550 => array
            (
                'id' => '550',
                'province_id' => '25',
                'name' => 'Ермолино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            551 => array
            (
                'id' => '551',
                'province_id' => '60',
                'name' => 'Ершов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            552 => array
            (
                'id' => '552',
                'province_id' => '71',
                'name' => 'Ефремов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            553 => array
            (
                'id' => '553',
                'province_id' => '66',
                'name' => 'Железноводск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            554 => array
            (
                'id' => '554',
                'province_id' => '21',
                'name' => 'Железногорск-Илимский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            555 => array
            (
                'id' => '555',
                'province_id' => '67',
                'name' => 'Жердевка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            556 => array
            (
                'id' => '556',
                'province_id' => '25',
                'name' => 'Жиздра',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            557 => array
            (
                'id' => '557',
                'province_id' => '13',
                'name' => 'Жирновск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            558 => array
            (
                'id' => '558',
                'province_id' => '25',
                'name' => 'Жуков',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            559 => array
            (
                'id' => '559',
                'province_id' => '10',
                'name' => 'Жуковка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            560 => array
            (
                'id' => '560',
                'province_id' => '5',
                'name' => 'Завитинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            561 => array
            (
                'id' => '561',
                'province_id' => '73',
                'name' => 'Заводоуковск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            562 => array
            (
                'id' => '562',
                'province_id' => '19',
                'name' => 'Заволжск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            563 => array
            (
                'id' => '563',
                'province_id' => '46',
                'name' => 'Заволжье',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            564 => array
            (
                'id' => '564',
                'province_id' => '38',
                'name' => 'Задонск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            565 => array
            (
                'id' => '565',
                'province_id' => '68',
                'name' => 'Заинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            566 => array
            (
                'id' => '566',
                'province_id' => '11',
                'name' => 'Закаменск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            567 => array
            (
                'id' => '567',
                'province_id' => '34',
                'name' => 'Заозёрный',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            568 => array
            (
                'id' => '568',
                'province_id' => '44',
                'name' => 'Заозёрск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            569 => array
            (
                'id' => '569',
                'province_id' => '69',
                'name' => 'Западная Двина',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            570 => array
            (
                'id' => '570',
                'province_id' => '44',
                'name' => 'Заполярный',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            571 => array
            (
                'id' => '571',
                'province_id' => '63',
                'name' => 'Заречный (Свердловская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            572 => array
            (
                'id' => '572',
                'province_id' => '40',
                'name' => 'Звенигово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            573 => array
            (
                'id' => '573',
                'province_id' => '43',
                'name' => 'Звенигород',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            574 => array
            (
                'id' => '574',
                'province_id' => '56',
                'name' => 'Зверево',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            575 => array
            (
                'id' => '575',
                'province_id' => '23',
                'name' => 'Зеленоградск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            576 => array
            (
                'id' => '576',
                'province_id' => '66',
                'name' => 'Зеленокумск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            577 => array
            (
                'id' => '577',
                'province_id' => '56',
                'name' => 'Зерноград',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            578 => array
            (
                'id' => '578',
                'province_id' => '5',
                'name' => 'Зея',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            579 => array
            (
                'id' => '579',
                'province_id' => '21',
                'name' => 'Зима',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            580 => array
            (
                'id' => '580',
                'province_id' => '10',
                'name' => 'Злынка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            581 => array
            (
                'id' => '581',
                'province_id' => '4',
                'name' => 'Змеиногорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            582 => array
            (
                'id' => '582',
                'province_id' => '69',
                'name' => 'Зубцов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            583 => array
            (
                'id' => '583',
                'province_id' => '30',
                'name' => 'Зуевка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            584 => array
            (
                'id' => '584',
                'province_id' => '63',
                'name' => 'Ивдель',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            585 => array
            (
                'id' => '585',
                'province_id' => '34',
                'name' => 'Игарка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            586 => array
            (
                'id' => '586',
                'province_id' => '16',
                'name' => 'Избербаш',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            587 => array
            (
                'id' => '587',
                'province_id' => '66',
                'name' => 'Изобильный',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            588 => array
            (
                'id' => '588',
                'province_id' => '34',
                'name' => 'Иланский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            589 => array
            (
                'id' => '589',
                'province_id' => '75',
                'name' => 'Инза',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            590 => array
            (
                'id' => '590',
                'province_id' => '41',
                'name' => 'Инсар',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            591 => array
            (
                'id' => '591',
                'province_id' => '31',
                'name' => 'Инта',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            592 => array
            (
                'id' => '592',
                'province_id' => '66',
                'name' => 'Ипатово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            593 => array
            (
                'id' => '593',
                'province_id' => '63',
                'name' => 'Ирбит',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            594 => array
            (
                'id' => '594',
                'province_id' => '49',
                'name' => 'Исилькуль',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            595 => array
            (
                'id' => '595',
                'province_id' => '48',
                'name' => 'Искитим',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            596 => array
            (
                'id' => '596',
                'province_id' => '73',
                'name' => 'Ишим',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            597 => array
            (
                'id' => '597',
                'province_id' => '8',
                'name' => 'Ишимбай',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            598 => array
            (
                'id' => '598',
                'province_id' => '14',
                'name' => 'Кадников',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            599 => array
            (
                'id' => '599',
                'province_id' => '15',
                'name' => 'Калач',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            600 => array
            (
                'id' => '600',
                'province_id' => '49',
                'name' => 'Калачинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            601 => array
            (
                'id' => '601',
                'province_id' => '60',
                'name' => 'Калининск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            602 => array
            (
                'id' => '602',
                'province_id' => '29',
                'name' => 'Калтан',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            603 => array
            (
                'id' => '603',
                'province_id' => '69',
                'name' => 'Калязин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            604 => array
            (
                'id' => '604',
                'province_id' => '74',
                'name' => 'Камбарка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            605 => array
            (
                'id' => '605',
                'province_id' => '37',
                'name' => 'Каменногорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            606 => array
            (
                'id' => '606',
                'province_id' => '4',
                'name' => 'Камень-на-Оби',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            607 => array
            (
                'id' => '607',
                'province_id' => '12',
                'name' => 'Камешково',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            608 => array
            (
                'id' => '608',
                'province_id' => '7',
                'name' => 'Камызяк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            609 => array
            (
                'id' => '609',
                'province_id' => '63',
                'name' => 'Камышлов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            610 => array
            (
                'id' => '610',
                'province_id' => '81',
                'name' => 'Канаш',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            611 => array
            (
                'id' => '611',
                'province_id' => '44',
                'name' => 'Кандалакша',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            612 => array
            (
                'id' => '612',
                'province_id' => '12',
                'name' => 'Карабаново',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            613 => array
            (
                'id' => '613',
                'province_id' => '79',
                'name' => 'Карабаш',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            614 => array
            (
                'id' => '614',
                'province_id' => '20',
                'name' => 'Карабулак',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            615 => array
            (
                'id' => '615',
                'province_id' => '48',
                'name' => 'Карасук',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            616 => array
            (
                'id' => '616',
                'province_id' => '27',
                'name' => 'Карачаевск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            617 => array
            (
                'id' => '617',
                'province_id' => '10',
                'name' => 'Карачев',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            618 => array
            (
                'id' => '618',
                'province_id' => '48',
                'name' => 'Каргат',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            619 => array
            (
                'id' => '619',
                'province_id' => '6',
                'name' => 'Каргополь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            620 => array
            (
                'id' => '620',
                'province_id' => '63',
                'name' => 'Карпинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            621 => array
            (
                'id' => '621',
                'province_id' => '79',
                'name' => 'Карталы',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            622 => array
            (
                'id' => '622',
                'province_id' => '79',
                'name' => 'Касли',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            623 => array
            (
                'id' => '623',
                'province_id' => '16',
                'name' => 'Каспийск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            624 => array
            (
                'id' => '624',
                'province_id' => '79',
                'name' => 'Катав-Ивановск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            625 => array
            (
                'id' => '625',
                'province_id' => '35',
                'name' => 'Катайск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            626 => array
            (
                'id' => '626',
                'province_id' => '63',
                'name' => 'Качканар',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            627 => array
            (
                'id' => '627',
                'province_id' => '69',
                'name' => 'Кашин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            628 => array
            (
                'id' => '628',
                'province_id' => '70',
                'name' => 'Кедровый',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            629 => array
            (
                'id' => '629',
                'province_id' => '28',
                'name' => 'Кемь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            630 => array
            (
                'id' => '630',
                'province_id' => '53',
                'name' => 'Кизел',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            631 => array
            (
                'id' => '631',
                'province_id' => '16',
                'name' => 'Кизилюрт',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            632 => array
            (
                'id' => '632',
                'province_id' => '16',
                'name' => 'Кизляр',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            633 => array
            (
                'id' => '633',
                'province_id' => '71',
                'name' => 'Кимовск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            634 => array
            (
                'id' => '634',
                'province_id' => '69',
                'name' => 'Кимры',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            635 => array
            (
                'id' => '635',
                'province_id' => '58',
                'name' => 'Кинель',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            636 => array
            (
                'id' => '636',
                'province_id' => '71',
                'name' => 'Киреевск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            637 => array
            (
                'id' => '637',
                'province_id' => '21',
                'name' => 'Киренск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            638 => array
            (
                'id' => '638',
                'province_id' => '14',
                'name' => 'Кириллов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            639 => array
            (
                'id' => '639',
                'province_id' => '25',
                'name' => 'Киров (Калужская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            640 => array
            (
                'id' => '640',
                'province_id' => '63',
                'name' => 'Кировград',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            641 => array
            (
                'id' => '641',
                'province_id' => '44',
                'name' => 'Кировск (Мурманская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            642 => array
            (
                'id' => '642',
                'province_id' => '30',
                'name' => 'Кирс',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            643 => array
            (
                'id' => '643',
                'province_id' => '67',
                'name' => 'Кирсанов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            644 => array
            (
                'id' => '644',
                'province_id' => '46',
                'name' => 'Княгинино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            645 => array
            (
                'id' => '645',
                'province_id' => '44',
                'name' => 'Ковдор',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            646 => array
            (
                'id' => '646',
                'province_id' => '41',
                'name' => 'Ковылкино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            647 => array
            (
                'id' => '647',
                'province_id' => '78',
                'name' => 'Когалым',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            648 => array
            (
                'id' => '648',
                'province_id' => '34',
                'name' => 'Кодинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            649 => array
            (
                'id' => '649',
                'province_id' => '25',
                'name' => 'Козельск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            650 => array
            (
                'id' => '650',
                'province_id' => '81',
                'name' => 'Козловка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            651 => array
            (
                'id' => '651',
                'province_id' => '40',
                'name' => 'Козьмодемьянск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            652 => array
            (
                'id' => '652',
                'province_id' => '44',
                'name' => 'Кола',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            653 => array
            (
                'id' => '653',
                'province_id' => '32',
                'name' => 'Кологрив',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            654 => array
            (
                'id' => '654',
                'province_id' => '70',
                'name' => 'Колпашево',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            655 => array
            (
                'id' => '655',
                'province_id' => '12',
                'name' => 'Кольчугино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            656 => array
            (
                'id' => '656',
                'province_id' => '19',
                'name' => 'Комсомольск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            657 => array
            (
                'id' => '657',
                'province_id' => '69',
                'name' => 'Конаково',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            658 => array
            (
                'id' => '658',
                'province_id' => '25',
                'name' => 'Кондрово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            659 => array
            (
                'id' => '659',
                'province_id' => '56',
                'name' => 'Константиновск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            660 => array
            (
                'id' => '660',
                'province_id' => '57',
                'name' => 'Кораблино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            661 => array
            (
                'id' => '661',
                'province_id' => '33',
                'name' => 'Кореновск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            662 => array
            (
                'id' => '662',
                'province_id' => '79',
                'name' => 'Коркино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            663 => array
            (
                'id' => '663',
                'province_id' => '9',
                'name' => 'Короча',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            664 => array
            (
                'id' => '664',
                'province_id' => '62',
                'name' => 'Корсаков',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            665 => array
            (
                'id' => '665',
                'province_id' => '6',
                'name' => 'Коряжма',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            666 => array
            (
                'id' => '666',
                'province_id' => '12',
                'name' => 'Костерёво',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            667 => array
            (
                'id' => '667',
                'province_id' => '28',
                'name' => 'Костомукша',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            668 => array
            (
                'id' => '668',
                'province_id' => '13',
                'name' => 'Котельниково',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            669 => array
            (
                'id' => '669',
                'province_id' => '30',
                'name' => 'Котельнич',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            670 => array
            (
                'id' => '670',
                'province_id' => '13',
                'name' => 'Котово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            671 => array
            (
                'id' => '671',
                'province_id' => '67',
                'name' => 'Котовск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            672 => array
            (
                'id' => '672',
                'province_id' => '19',
                'name' => 'Кохма',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            673 => array
            (
                'id' => '673',
                'province_id' => '14',
                'name' => 'Красавино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            674 => array
            (
                'id' => '674',
                'province_id' => '60',
                'name' => 'Красноармейск (Саратовская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            675 => array
            (
                'id' => '675',
                'province_id' => '53',
                'name' => 'Красновишерск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            676 => array
            (
                'id' => '676',
                'province_id' => '43',
                'name' => 'Краснозаводск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            677 => array
            (
                'id' => '677',
                'province_id' => '13',
                'name' => 'Краснослободск (Волгоградская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            678 => array
            (
                'id' => '678',
                'province_id' => '41',
                'name' => 'Краснослободск (Мордовия)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            679 => array
            (
                'id' => '679',
                'province_id' => '63',
                'name' => 'Красноуральск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            680 => array
            (
                'id' => '680',
                'province_id' => '63',
                'name' => 'Красноуфимск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            681 => array
            (
                'id' => '681',
                'province_id' => '60',
                'name' => 'Красный Кут',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            682 => array
            (
                'id' => '682',
                'province_id' => '56',
                'name' => 'Красный Сулин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            683 => array
            (
                'id' => '683',
                'province_id' => '69',
                'name' => 'Красный Холм',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            684 => array
            (
                'id' => '684',
                'province_id' => '25',
                'name' => 'Кремёнки',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            685 => array
            (
                'id' => '685',
                'province_id' => '33',
                'name' => 'Крымск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            686 => array
            (
                'id' => '686',
                'province_id' => '50',
                'name' => 'Кувандык',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            687 => array
            (
                'id' => '687',
                'province_id' => '69',
                'name' => 'Кувшиново',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            688 => array
            (
                'id' => '688',
                'province_id' => '53',
                'name' => 'Кудымкар',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            689 => array
            (
                'id' => '689',
                'province_id' => '46',
                'name' => 'Кулебаки',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            690 => array
            (
                'id' => '690',
                'province_id' => '8',
                'name' => 'Кумертау',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            691 => array
            (
                'id' => '691',
                'province_id' => '48',
                'name' => 'Купино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            692 => array
            (
                'id' => '692',
                'province_id' => '33',
                'name' => 'Курганинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            693 => array
            (
                'id' => '693',
                'province_id' => '62',
                'name' => 'Курильск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            694 => array
            (
                'id' => '694',
                'province_id' => '12',
                'name' => 'Курлово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            695 => array
            (
                'id' => '695',
                'province_id' => '43',
                'name' => 'Куровское',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            696 => array
            (
                'id' => '696',
                'province_id' => '35',
                'name' => 'Куртамыш',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            697 => array
            (
                'id' => '697',
                'province_id' => '79',
                'name' => 'Куса',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            698 => array
            (
                'id' => '698',
                'province_id' => '63',
                'name' => 'Кушва',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            699 => array
            (
                'id' => '699',
                'province_id' => '79',
                'name' => 'Кыштым',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            700 => array
            (
                'id' => '700',
                'province_id' => '11',
                'name' => 'Кяхта',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            701 => array
            (
                'id' => '701',
                'province_id' => '33',
                'name' => 'Лабинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            702 => array
            (
                'id' => '702',
                'province_id' => '83',
                'name' => 'Лабытнанги',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            703 => array
            (
                'id' => '703',
                'province_id' => '24',
                'name' => 'Лагань',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            704 => array
            (
                'id' => '704',
                'province_id' => '23',
                'name' => 'Ладушкин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            705 => array
            (
                'id' => '705',
                'province_id' => '68',
                'name' => 'Лаишево',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            706 => array
            (
                'id' => '706',
                'province_id' => '12',
                'name' => 'Лакинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            707 => array
            (
                'id' => '707',
                'province_id' => '78',
                'name' => 'Лангепас',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            708 => array
            (
                'id' => '708',
                'province_id' => '28',
                'name' => 'Лахденпохья',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            709 => array
            (
                'id' => '709',
                'province_id' => '38',
                'name' => 'Лебедянь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            710 => array
            (
                'id' => '710',
                'province_id' => '68',
                'name' => 'Лениногорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            711 => array
            (
                'id' => '711',
                'province_id' => '13',
                'name' => 'Ленинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            712 => array
            (
                'id' => '712',
                'province_id' => '61',
                'name' => 'Ленск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            713 => array
            (
                'id' => '713',
                'province_id' => '66',
                'name' => 'Лермонтов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            714 => array
            (
                'id' => '714',
                'province_id' => '63',
                'name' => 'Лесной',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            715 => array
            (
                'id' => '715',
                'province_id' => '54',
                'name' => 'Лесозаводск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            716 => array
            (
                'id' => '716',
                'province_id' => '34',
                'name' => 'Лесосибирск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            717 => array
            (
                'id' => '717',
                'province_id' => '71',
                'name' => 'Липки',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            718 => array
            (
                'id' => '718',
                'province_id' => '69',
                'name' => 'Лихославль',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            719 => array
            (
                'id' => '719',
                'province_id' => '30',
                'name' => 'Луза',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            720 => array
            (
                'id' => '720',
                'province_id' => '46',
                'name' => 'Лукоянов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            721 => array
            (
                'id' => '721',
                'province_id' => '46',
                'name' => 'Лысково',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            722 => array
            (
                'id' => '722',
                'province_id' => '36',
                'name' => 'Льгов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            723 => array
            (
                'id' => '723',
                'province_id' => '37',
                'name' => 'Любань',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            724 => array
            (
                'id' => '724',
                'province_id' => '84',
                'name' => 'Любим',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            725 => array
            (
                'id' => '725',
                'province_id' => '25',
                'name' => 'Людиново',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            726 => array
            (
                'id' => '726',
                'province_id' => '78',
                'name' => 'Лянтор',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            727 => array
            (
                'id' => '727',
                'province_id' => '20',
                'name' => 'Магас',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            728 => array
            (
                'id' => '728',
                'province_id' => '22',
                'name' => 'Майский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            729 => array
            (
                'id' => '729',
                'province_id' => '62',
                'name' => 'Макаров',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            730 => array
            (
                'id' => '730',
                'province_id' => '32',
                'name' => 'Макарьев',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            731 => array
            (
                'id' => '731',
                'province_id' => '35',
                'name' => 'Макушино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            732 => array
            (
                'id' => '732',
                'province_id' => '47',
                'name' => 'Малая Вишера',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            733 => array
            (
                'id' => '733',
                'province_id' => '20',
                'name' => 'Малгобек',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            734 => array
            (
                'id' => '734',
                'province_id' => '30',
                'name' => 'Малмыж',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            735 => array
            (
                'id' => '735',
                'province_id' => '51',
                'name' => 'Малоархангельск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            736 => array
            (
                'id' => '736',
                'province_id' => '25',
                'name' => 'Малоярославец',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            737 => array
            (
                'id' => '737',
                'province_id' => '68',
                'name' => 'Мамадыш',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            738 => array
            (
                'id' => '738',
                'province_id' => '23',
                'name' => 'Мамоново',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            739 => array
            (
                'id' => '739',
                'province_id' => '32',
                'name' => 'Мантурово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            740 => array
            (
                'id' => '740',
                'province_id' => '29',
                'name' => 'Мариинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            741 => array
            (
                'id' => '741',
                'province_id' => '81',
                'name' => 'Мариинский Посад',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            742 => array
            (
                'id' => '742',
                'province_id' => '60',
                'name' => 'Маркс',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            743 => array
            (
                'id' => '743',
                'province_id' => '10',
                'name' => 'Мглин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            744 => array
            (
                'id' => '744',
                'province_id' => '78',
                'name' => 'Мегион',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            745 => array
            (
                'id' => '745',
                'province_id' => '28',
                'name' => 'Медвежьегорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            746 => array
            (
                'id' => '746',
                'province_id' => '50',
                'name' => 'Медногорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            747 => array
            (
                'id' => '747',
                'province_id' => '25',
                'name' => 'Медынь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            748 => array
            (
                'id' => '748',
                'province_id' => '8',
                'name' => 'Межгорье',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            749 => array
            (
                'id' => '749',
                'province_id' => '6',
                'name' => 'Мезень',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            750 => array
            (
                'id' => '750',
                'province_id' => '12',
                'name' => 'Меленки',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            751 => array
            (
                'id' => '751',
                'province_id' => '8',
                'name' => 'Мелеуз',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            752 => array
            (
                'id' => '752',
                'province_id' => '68',
                'name' => 'Менделеевск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            753 => array
            (
                'id' => '753',
                'province_id' => '68',
                'name' => 'Мензелинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            754 => array
            (
                'id' => '754',
                'province_id' => '25',
                'name' => 'Мещовск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            755 => array
            (
                'id' => '755',
                'province_id' => '31',
                'name' => 'Микунь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            756 => array
            (
                'id' => '756',
                'province_id' => '56',
                'name' => 'Миллерово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            757 => array
            (
                'id' => '757',
                'province_id' => '34',
                'name' => 'Минусинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            758 => array
            (
                'id' => '758',
                'province_id' => '79',
                'name' => 'Миньяр',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            759 => array
            (
                'id' => '759',
                'province_id' => '57',
                'name' => 'Михайлов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            760 => array
            (
                'id' => '760',
                'province_id' => '13',
                'name' => 'Михайловка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            761 => array
            (
                'id' => '761',
                'province_id' => '63',
                'name' => 'Михайловск (Свердловская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            762 => array
            (
                'id' => '762',
                'province_id' => '66',
                'name' => 'Михайловск (Ставропольский край)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            763 => array
            (
                'id' => '763',
                'province_id' => '18',
                'name' => 'Могоча',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            764 => array
            (
                'id' => '764',
                'province_id' => '74',
                'name' => 'Можга',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            765 => array
            (
                'id' => '765',
                'province_id' => '44',
                'name' => 'Мончегорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            766 => array
            (
                'id' => '766',
                'province_id' => '56',
                'name' => 'Морозовск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            767 => array
            (
                'id' => '767',
                'province_id' => '67',
                'name' => 'Моршанск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            768 => array
            (
                'id' => '768',
                'province_id' => '25',
                'name' => 'Мосальск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            769 => array
            (
                'id' => '769',
                'province_id' => '83',
                'name' => 'Муравленко',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            770 => array
            (
                'id' => '770',
                'province_id' => '30',
                'name' => 'Мураши',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            771 => array
            (
                'id' => '771',
                'province_id' => '29',
                'name' => 'Мыски',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            772 => array
            (
                'id' => '772',
                'province_id' => '84',
                'name' => 'Мышкин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            773 => array
            (
                'id' => '773',
                'province_id' => '46',
                'name' => 'Навашино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            774 => array
            (
                'id' => '774',
                'province_id' => '19',
                'name' => 'Наволоки',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            775 => array
            (
                'id' => '775',
                'province_id' => '83',
                'name' => 'Надым',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            776 => array
            (
                'id' => '776',
                'province_id' => '34',
                'name' => 'Назарово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            777 => array
            (
                'id' => '777',
                'province_id' => '49',
                'name' => 'Называевск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            778 => array
            (
                'id' => '778',
                'province_id' => '7',
                'name' => 'Нариманов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            779 => array
            (
                'id' => '779',
                'province_id' => '22',
                'name' => 'Нарткала',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            780 => array
            (
                'id' => '780',
                'province_id' => '55',
                'name' => 'Невель',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            781 => array
            (
                'id' => '781',
                'province_id' => '62',
                'name' => 'Невельск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            782 => array
            (
                'id' => '782',
                'province_id' => '66',
                'name' => 'Невинномысск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            783 => array
            (
                'id' => '783',
                'province_id' => '63',
                'name' => 'Невьянск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            784 => array
            (
                'id' => '784',
                'province_id' => '69',
                'name' => 'Нелидово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            785 => array
            (
                'id' => '785',
                'province_id' => '23',
                'name' => 'Неман',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            786 => array
            (
                'id' => '786',
                'province_id' => '32',
                'name' => 'Нерехта',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            787 => array
            (
                'id' => '787',
                'province_id' => '18',
                'name' => 'Нерчинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            788 => array
            (
                'id' => '788',
                'province_id' => '23',
                'name' => 'Нестеров',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            789 => array
            (
                'id' => '789',
                'province_id' => '58',
                'name' => 'Нефтегорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            790 => array
            (
                'id' => '790',
                'province_id' => '66',
                'name' => 'Нефтекумск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            791 => array
            (
                'id' => '791',
                'province_id' => '32',
                'name' => 'Нея',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            792 => array
            (
                'id' => '792',
                'province_id' => '21',
                'name' => 'Нижнеудинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            793 => array
            (
                'id' => '793',
                'province_id' => '63',
                'name' => 'Нижние Серги',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            794 => array
            (
                'id' => '794',
                'province_id' => '52',
                'name' => 'Нижний Ломов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            795 => array
            (
                'id' => '795',
                'province_id' => '63',
                'name' => 'Нижняя Салда',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            796 => array
            (
                'id' => '796',
                'province_id' => '63',
                'name' => 'Нижняя Тура',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            797 => array
            (
                'id' => '797',
                'province_id' => '13',
                'name' => 'Николаевск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            798 => array
            (
                'id' => '798',
                'province_id' => '76',
                'name' => 'Николаевск-на-Амуре',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            799 => array
            (
                'id' => '799',
                'province_id' => '14',
                'name' => 'Никольск (Вологодская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            800 => array
            (
                'id' => '800',
                'province_id' => '52',
                'name' => 'Никольск (Пензенская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            801 => array
            (
                'id' => '801',
                'province_id' => '37',
                'name' => 'Новая Ладога',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            802 => array
            (
                'id' => '802',
                'province_id' => '63',
                'name' => 'Новая Ляля',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            803 => array
            (
                'id' => '803',
                'province_id' => '66',
                'name' => 'Новоалександровск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            804 => array
            (
                'id' => '804',
                'province_id' => '13',
                'name' => 'Новоаннинский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            805 => array
            (
                'id' => '805',
                'province_id' => '15',
                'name' => 'Нововоронеж',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            806 => array
            (
                'id' => '806',
                'province_id' => '6',
                'name' => 'Новодвинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            807 => array
            (
                'id' => '807',
                'province_id' => '10',
                'name' => 'Новозыбков',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            808 => array
            (
                'id' => '808',
                'province_id' => '33',
                'name' => 'Новокубанск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            809 => array
            (
                'id' => '809',
                'province_id' => '57',
                'name' => 'Новомичуринск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            810 => array
            (
                'id' => '810',
                'province_id' => '66',
                'name' => 'Новопавловск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            811 => array
            (
                'id' => '811',
                'province_id' => '55',
                'name' => 'Новоржев',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            812 => array
            (
                'id' => '812',
                'province_id' => '51',
                'name' => 'Новосиль',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            813 => array
            (
                'id' => '813',
                'province_id' => '55',
                'name' => 'Новосокольники',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            814 => array
            (
                'id' => '814',
                'province_id' => '60',
                'name' => 'Новоузенск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            815 => array
            (
                'id' => '815',
                'province_id' => '75',
                'name' => 'Новоульяновск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            816 => array
            (
                'id' => '816',
                'province_id' => '15',
                'name' => 'Новохопёрск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            817 => array
            (
                'id' => '817',
                'province_id' => '30',
                'name' => 'Нолинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            818 => array
            (
                'id' => '818',
                'province_id' => '68',
                'name' => 'Нурлат',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            819 => array
            (
                'id' => '819',
                'province_id' => '53',
                'name' => 'Нытва',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            820 => array
            (
                'id' => '820',
                'province_id' => '61',
                'name' => 'Нюрба',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            821 => array
            (
                'id' => '821',
                'province_id' => '78',
                'name' => 'Нягань',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            822 => array
            (
                'id' => '822',
                'province_id' => '79',
                'name' => 'Нязепетровск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            823 => array
            (
                'id' => '823',
                'province_id' => '6',
                'name' => 'Няндома',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            824 => array
            (
                'id' => '824',
                'province_id' => '17',
                'name' => 'Облучье',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            825 => array
            (
                'id' => '825',
                'province_id' => '36',
                'name' => 'Обоянь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            826 => array
            (
                'id' => '826',
                'province_id' => '48',
                'name' => 'Обь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            827 => array
            (
                'id' => '827',
                'province_id' => '43',
                'name' => 'Ожерелье',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            828 => array
            (
                'id' => '828',
                'province_id' => '58',
                'name' => 'Октябрьск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            829 => array
            (
                'id' => '829',
                'province_id' => '47',
                'name' => 'Окуловка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            830 => array
            (
                'id' => '830',
                'province_id' => '61',
                'name' => 'Олёкминск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            831 => array
            (
                'id' => '831',
                'province_id' => '44',
                'name' => 'Оленегорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            832 => array
            (
                'id' => '832',
                'province_id' => '28',
                'name' => 'Олонец',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            833 => array
            (
                'id' => '833',
                'province_id' => '30',
                'name' => 'Омутнинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            834 => array
            (
                'id' => '834',
                'province_id' => '6',
                'name' => 'Онега',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            835 => array
            (
                'id' => '835',
                'province_id' => '55',
                'name' => 'Опочка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            836 => array
            (
                'id' => '836',
                'province_id' => '30',
                'name' => 'Орлов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            837 => array
            (
                'id' => '837',
                'province_id' => '53',
                'name' => 'Оса',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            838 => array
            (
                'id' => '838',
                'province_id' => '29',
                'name' => 'Осинники',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            839 => array
            (
                'id' => '839',
                'province_id' => '69',
                'name' => 'Осташков',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            840 => array
            (
                'id' => '840',
                'province_id' => '55',
                'name' => 'Остров',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            841 => array
            (
                'id' => '841',
                'province_id' => '44',
                'name' => 'Островной',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            842 => array
            (
                'id' => '842',
                'province_id' => '15',
                'name' => 'Острогожск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            843 => array
            (
                'id' => '843',
                'province_id' => '58',
                'name' => 'Отрадный',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            844 => array
            (
                'id' => '844',
                'province_id' => '62',
                'name' => 'Оха',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            845 => array
            (
                'id' => '845',
                'province_id' => '53',
                'name' => 'Оханск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            846 => array
            (
                'id' => '846',
                'province_id' => '53',
                'name' => 'Очёр',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            847 => array
            (
                'id' => '847',
                'province_id' => '13',
                'name' => 'Палласовка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            848 => array
            (
                'id' => '848',
                'province_id' => '54',
                'name' => 'Партизанск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            849 => array
            (
                'id' => '849',
                'province_id' => '82',
                'name' => 'Певек',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            850 => array
            (
                'id' => '850',
                'province_id' => '46',
                'name' => 'Первомайск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            851 => array
            (
                'id' => '851',
                'province_id' => '46',
                'name' => 'Перевоз',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            852 => array
            (
                'id' => '852',
                'province_id' => '43',
                'name' => 'Пересвет',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            853 => array
            (
                'id' => '853',
                'province_id' => '47',
                'name' => 'Пестово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            854 => array
            (
                'id' => '854',
                'province_id' => '13',
                'name' => 'Петров Вал',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            855 => array
            (
                'id' => '855',
                'province_id' => '60',
                'name' => 'Петровск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            856 => array
            (
                'id' => '856',
                'province_id' => '18',
                'name' => 'Петровск-Забайкальский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            857 => array
            (
                'id' => '857',
                'province_id' => '35',
                'name' => 'Петухово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            858 => array
            (
                'id' => '858',
                'province_id' => '12',
                'name' => 'Петушки',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            859 => array
            (
                'id' => '859',
                'province_id' => '55',
                'name' => 'Печоры',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            860 => array
            (
                'id' => '860',
                'province_id' => '23',
                'name' => 'Пионерский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            861 => array
            (
                'id' => '861',
                'province_id' => '28',
                'name' => 'Питкяранта',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            862 => array
            (
                'id' => '862',
                'province_id' => '19',
                'name' => 'Плёс',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            863 => array
            (
                'id' => '863',
                'province_id' => '71',
                'name' => 'Плавск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            864 => array
            (
                'id' => '864',
                'province_id' => '79',
                'name' => 'Пласт',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            865 => array
            (
                'id' => '865',
                'province_id' => '15',
                'name' => 'Поворино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            866 => array
            (
                'id' => '866',
                'province_id' => '78',
                'name' => 'Покачи',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            867 => array
            (
                'id' => '867',
                'province_id' => '12',
                'name' => 'Покров',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            868 => array
            (
                'id' => '868',
                'province_id' => '61',
                'name' => 'Покровск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            869 => array
            (
                'id' => '869',
                'province_id' => '23',
                'name' => 'Полесск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            870 => array
            (
                'id' => '870',
                'province_id' => '29',
                'name' => 'Полысаево',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            871 => array
            (
                'id' => '871',
                'province_id' => '44',
                'name' => 'Полярные Зори',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            872 => array
            (
                'id' => '872',
                'province_id' => '44',
                'name' => 'Полярный',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            873 => array
            (
                'id' => '873',
                'province_id' => '62',
                'name' => 'Поронайск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            874 => array
            (
                'id' => '874',
                'province_id' => '55',
                'name' => 'Порхов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            875 => array
            (
                'id' => '875',
                'province_id' => '58',
                'name' => 'Похвистнево',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            876 => array
            (
                'id' => '876',
                'province_id' => '10',
                'name' => 'Почеп',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            877 => array
            (
                'id' => '877',
                'province_id' => '65',
                'name' => 'Починок',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            878 => array
            (
                'id' => '878',
                'province_id' => '84',
                'name' => 'Пошехонье',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            879 => array
            (
                'id' => '879',
                'province_id' => '23',
                'name' => 'Правдинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            880 => array
            (
                'id' => '880',
                'province_id' => '19',
                'name' => 'Приволжск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            881 => array
            (
                'id' => '881',
                'province_id' => '23',
                'name' => 'Приморск (Калининградская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            882 => array
            (
                'id' => '882',
                'province_id' => '37',
                'name' => 'Приморск (Ленинградская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            883 => array
            (
                'id' => '883',
                'province_id' => '33',
                'name' => 'Приморско-Ахтарск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            884 => array
            (
                'id' => '884',
                'province_id' => '56',
                'name' => 'Пролетарск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            885 => array
            (
                'id' => '885',
                'province_id' => '60',
                'name' => 'Пугачёв',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            886 => array
            (
                'id' => '886',
                'province_id' => '28',
                'name' => 'Пудож',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            887 => array
            (
                'id' => '887',
                'province_id' => '55',
                'name' => 'Пустошка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            888 => array
            (
                'id' => '888',
                'province_id' => '19',
                'name' => 'Пучеж',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            889 => array
            (
                'id' => '889',
                'province_id' => '55',
                'name' => 'Пыталово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            890 => array
            (
                'id' => '890',
                'province_id' => '78',
                'name' => 'Пыть-Ях',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            891 => array
            (
                'id' => '891',
                'province_id' => '12',
                'name' => 'Радужный (Владимирская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            892 => array
            (
                'id' => '892',
                'province_id' => '78',
                'name' => 'Радужный (Ханты-Мансийский АО - Югра)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            893 => array
            (
                'id' => '893',
                'province_id' => '5',
                'name' => 'Райчихинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            894 => array
            (
                'id' => '894',
                'province_id' => '67',
                'name' => 'Рассказово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            895 => array
            (
                'id' => '895',
                'province_id' => '63',
                'name' => 'Реж',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            896 => array
            (
                'id' => '896',
                'province_id' => '19',
                'name' => 'Родники',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            897 => array
            (
                'id' => '897',
                'province_id' => '65',
                'name' => 'Рославль',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            898 => array
            (
                'id' => '898',
                'province_id' => '84',
                'name' => 'Ростов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            899 => array
            (
                'id' => '899',
                'province_id' => '60',
                'name' => 'Ртищево',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            900 => array
            (
                'id' => '900',
                'province_id' => '65',
                'name' => 'Рудня',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            901 => array
            (
                'id' => '901',
                'province_id' => '43',
                'name' => 'Руза',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            902 => array
            (
                'id' => '902',
                'province_id' => '57',
                'name' => 'Рыбное',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            903 => array
            (
                'id' => '903',
                'province_id' => '36',
                'name' => 'Рыльск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            904 => array
            (
                'id' => '904',
                'province_id' => '57',
                'name' => 'Ряжск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            905 => array
            (
                'id' => '905',
                'province_id' => '29',
                'name' => 'Салаир',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            906 => array
            (
                'id' => '906',
                'province_id' => '83',
                'name' => 'Салехард',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            907 => array
            (
                'id' => '907',
                'province_id' => '57',
                'name' => 'Сасово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            908 => array
            (
                'id' => '908',
                'province_id' => '65',
                'name' => 'Сафоново',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            909 => array
            (
                'id' => '909',
                'province_id' => '77',
                'name' => 'Саяногорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            910 => array
            (
                'id' => '910',
                'province_id' => '21',
                'name' => 'Саянск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            911 => array
            (
                'id' => '911',
                'province_id' => '23',
                'name' => 'Светлогорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            912 => array
            (
                'id' => '912',
                'province_id' => '66',
                'name' => 'Светлоград',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            913 => array
            (
                'id' => '913',
                'province_id' => '23',
                'name' => 'Светлый',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            914 => array
            (
                'id' => '914',
                'province_id' => '21',
                'name' => 'Свирск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            915 => array
            (
                'id' => '915',
                'province_id' => '55',
                'name' => 'Себеж',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            916 => array
            (
                'id' => '916',
                'province_id' => '62',
                'name' => 'Северо-Курильск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            917 => array
            (
                'id' => '917',
                'province_id' => '63',
                'name' => 'Североуральск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            918 => array
            (
                'id' => '918',
                'province_id' => '10',
                'name' => 'Севск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            919 => array
            (
                'id' => '919',
                'province_id' => '28',
                'name' => 'Сегежа',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            920 => array
            (
                'id' => '920',
                'province_id' => '10',
                'name' => 'Сельцо',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            921 => array
            (
                'id' => '921',
                'province_id' => '46',
                'name' => 'Семёнов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            922 => array
            (
                'id' => '922',
                'province_id' => '56',
                'name' => 'Семикаракорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            923 => array
            (
                'id' => '923',
                'province_id' => '15',
                'name' => 'Семилуки',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            924 => array
            (
                'id' => '924',
                'province_id' => '75',
                'name' => 'Сенгилей',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            925 => array
            (
                'id' => '925',
                'province_id' => '13',
                'name' => 'Серафимович',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            926 => array
            (
                'id' => '926',
                'province_id' => '46',
                'name' => 'Сергач',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            927 => array
            (
                'id' => '927',
                'province_id' => '52',
                'name' => 'Сердобск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            928 => array
            (
                'id' => '928',
                'province_id' => '8',
                'name' => 'Сибай',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            929 => array
            (
                'id' => '929',
                'province_id' => '79',
                'name' => 'Сим',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            930 => array
            (
                'id' => '930',
                'province_id' => '5',
                'name' => 'Сковородино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            931 => array
            (
                'id' => '931',
                'province_id' => '57',
                'name' => 'Скопин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            932 => array
            (
                'id' => '932',
                'province_id' => '4',
                'name' => 'Славгород',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            933 => array
            (
                'id' => '933',
                'province_id' => '23',
                'name' => 'Славск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            934 => array
            (
                'id' => '934',
                'province_id' => '33',
                'name' => 'Славянск-на-Кубани',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            935 => array
            (
                'id' => '935',
                'province_id' => '30',
                'name' => 'Слободской',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            936 => array
            (
                'id' => '936',
                'province_id' => '21',
                'name' => 'Слюдянка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            937 => array
            (
                'id' => '937',
                'province_id' => '44',
                'name' => 'Снежногорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            938 => array
            (
                'id' => '938',
                'province_id' => '12',
                'name' => 'Собинка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            939 => array
            (
                'id' => '939',
                'province_id' => '30',
                'name' => 'Советск (Кировская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            940 => array
            (
                'id' => '940',
                'province_id' => '71',
                'name' => 'Советск (Тульская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            941 => array
            (
                'id' => '941',
                'province_id' => '76',
                'name' => 'Советская Гавань',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            942 => array
            (
                'id' => '942',
                'province_id' => '78',
                'name' => 'Советский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            943 => array
            (
                'id' => '943',
                'province_id' => '32',
                'name' => 'Солигалич',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            944 => array
            (
                'id' => '944',
                'province_id' => '50',
                'name' => 'Соль-Илецк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            945 => array
            (
                'id' => '945',
                'province_id' => '6',
                'name' => 'Сольвычегодск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            946 => array
            (
                'id' => '946',
                'province_id' => '47',
                'name' => 'Сольцы',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            947 => array
            (
                'id' => '947',
                'province_id' => '50',
                'name' => 'Сорочинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            948 => array
            (
                'id' => '948',
                'province_id' => '77',
                'name' => 'Сорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            949 => array
            (
                'id' => '949',
                'province_id' => '28',
                'name' => 'Сортавала',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            950 => array
            (
                'id' => '950',
                'province_id' => '25',
                'name' => 'Сосенский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            951 => array
            (
                'id' => '951',
                'province_id' => '30',
                'name' => 'Сосновка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            952 => array
            (
                'id' => '952',
                'province_id' => '34',
                'name' => 'Сосновоборск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            953 => array
            (
                'id' => '953',
                'province_id' => '31',
                'name' => 'Сосногорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            954 => array
            (
                'id' => '954',
                'province_id' => '25',
                'name' => 'Спас-Деменск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            955 => array
            (
                'id' => '955',
                'province_id' => '57',
                'name' => 'Спас-Клепики',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            956 => array
            (
                'id' => '956',
                'province_id' => '52',
                'name' => 'Спасск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            957 => array
            (
                'id' => '957',
                'province_id' => '54',
                'name' => 'Спасск-Дальний',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            958 => array
            (
                'id' => '958',
                'province_id' => '57',
                'name' => 'Спасск-Рязанский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            959 => array
            (
                'id' => '959',
                'province_id' => '61',
                'name' => 'Среднеколымск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            960 => array
            (
                'id' => '960',
                'province_id' => '63',
                'name' => 'Среднеуральск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            961 => array
            (
                'id' => '961',
                'province_id' => '18',
                'name' => 'Сретенск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            962 => array
            (
                'id' => '962',
                'province_id' => '69',
                'name' => 'Старица',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            963 => array
            (
                'id' => '963',
                'province_id' => '10',
                'name' => 'Стародуб',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            964 => array
            (
                'id' => '964',
                'province_id' => '70',
                'name' => 'Стрежевой',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            965 => array
            (
                'id' => '965',
                'province_id' => '9',
                'name' => 'Строитель',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            966 => array
            (
                'id' => '966',
                'province_id' => '12',
                'name' => 'Струнино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            967 => array
            (
                'id' => '967',
                'province_id' => '71',
                'name' => 'Суворов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            968 => array
            (
                'id' => '968',
                'province_id' => '36',
                'name' => 'Суджа',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            969 => array
            (
                'id' => '969',
                'province_id' => '12',
                'name' => 'Судогда',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            970 => array
            (
                'id' => '970',
                'province_id' => '12',
                'name' => 'Суздаль',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            971 => array
            (
                'id' => '971',
                'province_id' => '28',
                'name' => 'Суоярви',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            972 => array
            (
                'id' => '972',
                'province_id' => '10',
                'name' => 'Сураж',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            973 => array
            (
                'id' => '973',
                'province_id' => '13',
                'name' => 'Суровикино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            974 => array
            (
                'id' => '974',
                'province_id' => '52',
                'name' => 'Сурск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            975 => array
            (
                'id' => '975',
                'province_id' => '39',
                'name' => 'Сусуман',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            976 => array
            (
                'id' => '976',
                'province_id' => '25',
                'name' => 'Сухиничи',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            977 => array
            (
                'id' => '977',
                'province_id' => '63',
                'name' => 'Сухой Лог',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            978 => array
            (
                'id' => '978',
                'province_id' => '63',
                'name' => 'Сысерть',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            979 => array
            (
                'id' => '979',
                'province_id' => '65',
                'name' => 'Сычёвка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            980 => array
            (
                'id' => '980',
                'province_id' => '63',
                'name' => 'Тавда',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            981 => array
            (
                'id' => '981',
                'province_id' => '29',
                'name' => 'Тайга',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            982 => array
            (
                'id' => '982',
                'province_id' => '21',
                'name' => 'Тайшет',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            983 => array
            (
                'id' => '983',
                'province_id' => '43',
                'name' => 'Талдом',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            984 => array
            (
                'id' => '984',
                'province_id' => '63',
                'name' => 'Талица',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            985 => array
            (
                'id' => '985',
                'province_id' => '49',
                'name' => 'Тара',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            986 => array
            (
                'id' => '986',
                'province_id' => '83',
                'name' => 'Тарко-Сале',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            987 => array
            (
                'id' => '987',
                'province_id' => '25',
                'name' => 'Таруса',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            988 => array
            (
                'id' => '988',
                'province_id' => '48',
                'name' => 'Татарск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            989 => array
            (
                'id' => '989',
                'province_id' => '29',
                'name' => 'Таштагол',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            990 => array
            (
                'id' => '990',
                'province_id' => '27',
                'name' => 'Теберда',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            991 => array
            (
                'id' => '991',
                'province_id' => '19',
                'name' => 'Тейково',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            992 => array
            (
                'id' => '992',
                'province_id' => '41',
                'name' => 'Темников',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            993 => array
            (
                'id' => '993',
                'province_id' => '33',
                'name' => 'Темрюк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            994 => array
            (
                'id' => '994',
                'province_id' => '22',
                'name' => 'Терек',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            995 => array
            (
                'id' => '995',
                'province_id' => '68',
                'name' => 'Тетюши',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            996 => array
            (
                'id' => '996',
                'province_id' => '33',
                'name' => 'Тимашевск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            997 => array
            (
                'id' => '997',
                'province_id' => '48',
                'name' => 'Тогучин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            998 => array
            (
                'id' => '998',
                'province_id' => '62',
                'name' => 'Томари',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            999 => array
            (
                'id' => '999',
                'province_id' => '61',
                'name' => 'Томмот',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1000 => array
            (
                'id' => '1000',
                'province_id' => '29',
                'name' => 'Топки',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1001 => array
            (
                'id' => '1001',
                'province_id' => '69',
                'name' => 'Торжок',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1002 => array
            (
                'id' => '1002',
                'province_id' => '69',
                'name' => 'Торопец',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1003 => array
            (
                'id' => '1003',
                'province_id' => '14',
                'name' => 'Тотьма',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1004 => array
            (
                'id' => '1004',
                'province_id' => '79',
                'name' => 'Трёхгорный',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1005 => array
            (
                'id' => '1005',
                'province_id' => '10',
                'name' => 'Трубчевск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1006 => array
            (
                'id' => '1006',
                'province_id' => '8',
                'name' => 'Туймазы',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1007 => array
            (
                'id' => '1007',
                'province_id' => '21',
                'name' => 'Тулун',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1008 => array
            (
                'id' => '1008',
                'province_id' => '72',
                'name' => 'Туран',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1009 => array
            (
                'id' => '1009',
                'province_id' => '63',
                'name' => 'Туринск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1010 => array
            (
                'id' => '1010',
                'province_id' => '84',
                'name' => 'Тутаев',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1011 => array
            (
                'id' => '1011',
                'province_id' => '5',
                'name' => 'Тында',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1012 => array
            (
                'id' => '1012',
                'province_id' => '22',
                'name' => 'Тырныауз',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1013 => array
            (
                'id' => '1013',
                'province_id' => '49',
                'name' => 'Тюкалинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1014 => array
            (
                'id' => '1014',
                'province_id' => '67',
                'name' => 'Уварово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1015 => array
            (
                'id' => '1015',
                'province_id' => '62',
                'name' => 'Углегорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1016 => array
            (
                'id' => '1016',
                'province_id' => '84',
                'name' => 'Углич',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1017 => array
            (
                'id' => '1017',
                'province_id' => '61',
                'name' => 'Удачный',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1018 => array
            (
                'id' => '1018',
                'province_id' => '69',
                'name' => 'Удомля',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1019 => array
            (
                'id' => '1019',
                'province_id' => '34',
                'name' => 'Ужур',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1020 => array
            (
                'id' => '1020',
                'province_id' => '10',
                'name' => 'Унеча',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1021 => array
            (
                'id' => '1021',
                'province_id' => '78',
                'name' => 'Урай',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1022 => array
            (
                'id' => '1022',
                'province_id' => '46',
                'name' => 'Урень',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1023 => array
            (
                'id' => '1023',
                'province_id' => '30',
                'name' => 'Уржум',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1024 => array
            (
                'id' => '1024',
                'province_id' => '13',
                'name' => 'Урюпинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1025 => array
            (
                'id' => '1025',
                'province_id' => '31',
                'name' => 'Усинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1026 => array
            (
                'id' => '1026',
                'province_id' => '38',
                'name' => 'Усмань',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1027 => array
            (
                'id' => '1027',
                'province_id' => '53',
                'name' => 'Усолье',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1028 => array
            (
                'id' => '1028',
                'province_id' => '21',
                'name' => 'Усолье-Сибирское',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1029 => array
            (
                'id' => '1029',
                'province_id' => '27',
                'name' => 'Усть-Джегута',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1030 => array
            (
                'id' => '1030',
                'province_id' => '79',
                'name' => 'Усть-Катав',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1031 => array
            (
                'id' => '1031',
                'province_id' => '21',
                'name' => 'Усть-Кут',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1032 => array
            (
                'id' => '1032',
                'province_id' => '33',
                'name' => 'Усть-Лабинск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1033 => array
            (
                'id' => '1033',
                'province_id' => '14',
                'name' => 'Устюжна',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1034 => array
            (
                'id' => '1034',
                'province_id' => '8',
                'name' => 'Учалы',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1035 => array
            (
                'id' => '1035',
                'province_id' => '34',
                'name' => 'Уяр',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1036 => array
            (
                'id' => '1036',
                'province_id' => '36',
                'name' => 'Фатеж',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1037 => array
            (
                'id' => '1037',
                'province_id' => '10',
                'name' => 'Фокино (Брянская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1038 => array
            (
                'id' => '1038',
                'province_id' => '54',
                'name' => 'Фокино (Приморский край)\n',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1039 => array
            (
                'id' => '1039',
                'province_id' => '13',
                'name' => 'Фролово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1040 => array
            (
                'id' => '1040',
                'province_id' => '19',
                'name' => 'Фурманов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1041 => array
            (
                'id' => '1041',
                'province_id' => '33',
                'name' => 'Хадыженск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1042 => array
            (
                'id' => '1042',
                'province_id' => '7',
                'name' => 'Харабали',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1043 => array
            (
                'id' => '1043',
                'province_id' => '14',
                'name' => 'Харовск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1044 => array
            (
                'id' => '1044',
                'province_id' => '60',
                'name' => 'Хвалынск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1045 => array
            (
                'id' => '1045',
                'province_id' => '18',
                'name' => 'Хилок',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1046 => array
            (
                'id' => '1046',
                'province_id' => '47',
                'name' => 'Холм',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1047 => array
            (
                'id' => '1047',
                'province_id' => '62',
                'name' => 'Холмск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1048 => array
            (
                'id' => '1048',
                'province_id' => '43',
                'name' => 'Хотьково',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1049 => array
            (
                'id' => '1049',
                'province_id' => '81',
                'name' => 'Цивильск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1050 => array
            (
                'id' => '1050',
                'province_id' => '56',
                'name' => 'Цимлянск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1051 => array
            (
                'id' => '1051',
                'province_id' => '53',
                'name' => 'Чёрмоз',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1052 => array
            (
                'id' => '1052',
                'province_id' => '72',
                'name' => 'Чадан',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1053 => array
            (
                'id' => '1053',
                'province_id' => '38',
                'name' => 'Чаплыгин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1054 => array
            (
                'id' => '1054',
                'province_id' => '79',
                'name' => 'Чебаркуль',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1055 => array
            (
                'id' => '1055',
                'province_id' => '22',
                'name' => 'Чегем',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1056 => array
            (
                'id' => '1056',
                'province_id' => '71',
                'name' => 'Чекалин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1057 => array
            (
                'id' => '1057',
                'province_id' => '53',
                'name' => 'Чердынь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1058 => array
            (
                'id' => '1058',
                'province_id' => '21',
                'name' => 'Черемхово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1059 => array
            (
                'id' => '1059',
                'province_id' => '48',
                'name' => 'Черепаново',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1060 => array
            (
                'id' => '1060',
                'province_id' => '53',
                'name' => 'Чернушка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1061 => array
            (
                'id' => '1061',
                'province_id' => '23',
                'name' => 'Черняховск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1062 => array
            (
                'id' => '1062',
                'province_id' => '68',
                'name' => 'Чистополь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1063 => array
            (
                'id' => '1063',
                'province_id' => '46',
                'name' => 'Чкаловск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1064 => array
            (
                'id' => '1064',
                'province_id' => '47',
                'name' => 'Чудово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1065 => array
            (
                'id' => '1065',
                'province_id' => '48',
                'name' => 'Чулым',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1066 => array
            (
                'id' => '1066',
                'province_id' => '53',
                'name' => 'Чусовой',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1067 => array
            (
                'id' => '1067',
                'province_id' => '32',
                'name' => 'Чухлома',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1068 => array
            (
                'id' => '1068',
                'province_id' => '72',
                'name' => 'Шагонар',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1069 => array
            (
                'id' => '1069',
                'province_id' => '80',
                'name' => 'Шали',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1070 => array
            (
                'id' => '1070',
                'province_id' => '34',
                'name' => 'Шарыпово',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1071 => array
            (
                'id' => '1071',
                'province_id' => '32',
                'name' => 'Шарья',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1072 => array
            (
                'id' => '1072',
                'province_id' => '62',
                'name' => 'Шахтёрск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1073 => array
            (
                'id' => '1073',
                'province_id' => '46',
                'name' => 'Шахунья',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1074 => array
            (
                'id' => '1074',
                'province_id' => '57',
                'name' => 'Шацк',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1075 => array
            (
                'id' => '1075',
                'province_id' => '21',
                'name' => 'Шелехов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1076 => array
            (
                'id' => '1076',
                'province_id' => '6',
                'name' => 'Шенкурск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1077 => array
            (
                'id' => '1077',
                'province_id' => '18',
                'name' => 'Шилка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1078 => array
            (
                'id' => '1078',
                'province_id' => '5',
                'name' => 'Шимановск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1079 => array
            (
                'id' => '1079',
                'province_id' => '60',
                'name' => 'Шиханы',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1080 => array
            (
                'id' => '1080',
                'province_id' => '81',
                'name' => 'Шумерля',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1081 => array
            (
                'id' => '1081',
                'province_id' => '35',
                'name' => 'Шумиха',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1082 => array
            (
                'id' => '1082',
                'province_id' => '71',
                'name' => 'Щёкино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1083 => array
            (
                'id' => '1083',
                'province_id' => '36',
                'name' => 'Щигры',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1084 => array
            (
                'id' => '1084',
                'province_id' => '35',
                'name' => 'Щучье',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1085 => array
            (
                'id' => '1085',
                'province_id' => '15',
                'name' => 'Эртиль',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1086 => array
            (
                'id' => '1086',
                'province_id' => '78',
                'name' => 'Югорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1087 => array
            (
                'id' => '1087',
                'province_id' => '19',
                'name' => 'Южа',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1088 => array
            (
                'id' => '1088',
                'province_id' => '16',
                'name' => 'Южно-Сухокумск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1089 => array
            (
                'id' => '1089',
                'province_id' => '79',
                'name' => 'Южноуральск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1090 => array
            (
                'id' => '1090',
                'province_id' => '12',
                'name' => 'Юрьев-Польский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1091 => array
            (
                'id' => '1091',
                'province_id' => '19',
                'name' => 'Юрьевец',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1092 => array
            (
                'id' => '1092',
                'province_id' => '79',
                'name' => 'Юрюзань',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1093 => array
            (
                'id' => '1093',
                'province_id' => '25',
                'name' => 'Юхнов',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1094 => array
            (
                'id' => '1094',
                'province_id' => '81',
                'name' => 'Ядрин',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1095 => array
            (
                'id' => '1095',
                'province_id' => '73',
                'name' => 'Ялуторовск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1096 => array
            (
                'id' => '1096',
                'province_id' => '8',
                'name' => 'Янаул',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1097 => array
            (
                'id' => '1097',
                'province_id' => '30',
                'name' => 'Яранск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1098 => array
            (
                'id' => '1098',
                'province_id' => '4',
                'name' => 'Яровое',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1099 => array
            (
                'id' => '1099',
                'province_id' => '65',
                'name' => 'Ярцево',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1100 => array
            (
                'id' => '1100',
                'province_id' => '71',
                'name' => 'Ясногорск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1101 => array
            (
                'id' => '1101',
                'province_id' => '50',
                'name' => 'Ясный',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1102 => array
            (
                'id' => '1102',
                'province_id' => '43',
                'name' => 'Яхрома',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1103 => array
            (
                'id' => '1103',
                'province_id' => '86',
                'name' => 'Алупка',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1104 => array
            (
                'id' => '1104',
                'province_id' => '86',
                'name' => 'Алушта',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1105 => array
            (
                'id' => '1105',
                'province_id' => '86',
                'name' => 'Армянск\r\n',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1106 => array
            (
                'id' => '1106',
                'province_id' => '86',
                'name' => 'Бахчисарай',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1107 => array
            (
                'id' => '1107',
                'province_id' => '86',
                'name' => 'Белогорск (Крым)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1108 => array
            (
                'id' => '1108',
                'province_id' => '86',
                'name' => 'Джанкой',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1109 => array
            (
                'id' => '1109',
                'province_id' => '86',
                'name' => 'Евпатория',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1110 => array
            (
                'id' => '1110',
                'province_id' => '87',
                'name' => 'Инкерман',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1111 => array
            (
                'id' => '1111',
                'province_id' => '68',
                'name' => 'Иннополис',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1112 => array
            (
                'id' => '1112',
                'province_id' => '86',
                'name' => 'Керчь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1113 => array
            (
                'id' => '1113',
                'province_id' => '23',
                'name' => 'Краснознаменск (Калининградская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1114 => array
            (
                'id' => '1114',
                'province_id' => '86',
                'name' => 'Красноперекопск',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1115 => array
            (
                'id' => '1115',
                'province_id' => '6',
                'name' => 'Мирный (Архангельская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1116 => array
            (
                'id' => '1116',
                'province_id' => '23',
                'name' => 'Озерск (Калининградская область)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1117 => array
            (
                'id' => '1117',
                'province_id' => '86',
                'name' => 'Саки',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1118 => array
            (
                'id' => '1118',
                'province_id' => '87',
                'name' => 'Севастополь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1119 => array
            (
                'id' => '1119',
                'province_id' => '86',
                'name' => 'Симферополь',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1120 => array
            (
                'id' => '1120',
                'province_id' => '86',
                'name' => 'Старый Крым',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1121 => array
            (
                'id' => '1121',
                'province_id' => '86',
                'name' => 'Судак',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1122 => array
            (
                'id' => '1122',
                'province_id' => '5',
                'name' => 'Циолковский',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1123 => array
            (
                'id' => '1123',
                'province_id' => '86',
                'name' => 'Феодосия',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1124 => array
            (
                'id' => '1124',
                'province_id' => '86',
                'name' => 'Щелкино',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),

            1125 => array
            (
                'id' => '1125',
                'province_id' => '86',
                'name' => 'Ялта',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '0',
            ),
		));
    }
}
