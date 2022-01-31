<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('countries')->insert(array(
            0 => array
            (
                'id' => '0',
                'iso' => 'RU',
                'name' => 'РОССИЯ',
                'iso3' => 'RUS',
                'numcode' => '643',
                'phonecode' => '7',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            1 => array
            (
                'id' => '1',
                'iso' => 'AB',
                'name' => 'АБХАЗИЯ',
                'iso3' => 'ABH',
                'numcode' => '895',
                'phonecode' => '840',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            2 => array
            (
                'id' => '2',
                'iso' => 'AU',
                'name' => 'АВСТРАЛИЯ',
                'iso3' => 'AUS',
                'numcode' => '036',
                'phonecode' => '61',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            3 => array
            (
                'id' => '3',
                'iso' => 'AT',
                'name' => 'АВСТРИЯ',
                'iso3' => 'AUT',
                'numcode' => '040',
                'phonecode' => '43',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            4 => array
            (
                'id' => '4',
                'iso' => 'AZ',
                'name' => 'АЗЕРБАЙДЖАН',
                'iso3' => 'AZE',
                'numcode' => '031',
                'phonecode' => '994',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            5 => array
            (
                'id' => '5',
                'iso' => 'AL',
                'name' => 'АЛБАНИЯ',
                'iso3' => 'ALB',
                'numcode' => '008',
                'phonecode' => '355',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            6 => array
            (
                'id' => '6',
                'iso' => 'DZ',
                'name' => 'АЛЖИР',
                'iso3' => 'DZA',
                'numcode' => '012',
                'phonecode' => '213',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            7 => array
            (
                'id' => '7',
                'iso' => 'AS',
                'name' => 'АМЕРИКАНСКОЕ САМОА',
                'iso3' => 'ASM',
                'numcode' => '016',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            8 => array
            (
                'id' => '8',
                'iso' => 'AI',
                'name' => 'АНГИЛЬЯ',
                'iso3' => 'AIA',
                'numcode' => '660',
                'phonecode' => '1264',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            9 => array
            (
                'id' => '9',
                'iso' => 'AO',
                'name' => 'АНГОЛА',
                'iso3' => 'AGO',
                'numcode' => '024',
                'phonecode' => '244',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            10 => array
            (
                'id' => '10',
                'iso' => 'AD',
                'name' => 'АНДОРРА',
                'iso3' => 'AND',
                'numcode' => '020',
                'phonecode' => '376',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            11 => array
            (
                'id' => '11',
                'iso' => 'AQ',
                'name' => 'АНТАРКТИДА',
                'iso3' => 'ATA',
                'numcode' => '010',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            12 => array
            (
                'id' => '12',
                'iso' => 'AG',
                'name' => 'АНТИГУА И БАРБУДА',
                'iso3' => 'ATG',
                'numcode' => '028',
                'phonecode' => '1268',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            13 => array
            (
                'id' => '13',
                'iso' => 'AR',
                'name' => 'АРГЕНТИНА',
                'iso3' => 'ARG',
                'numcode' => '032',
                'phonecode' => '54',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            14 => array
            (
                'id' => '14',
                'iso' => 'AM',
                'name' => 'АРМЕНИЯ',
                'iso3' => 'ARM',
                'numcode' => '051',
                'phonecode' => '374',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            15 => array
            (
                'id' => '15',
                'iso' => 'AW',
                'name' => 'АРУБА',
                'iso3' => 'ABW',
                'numcode' => '533',
                'phonecode' => '297',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            16 => array
            (
                'id' => '16',
                'iso' => 'AF',
                'name' => 'АФГАНИСТАН',
                'iso3' => 'AFG',
                'numcode' => '004',
                'phonecode' => '93',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            17 => array
            (
                'id' => '17',
                'iso' => 'BS',
                'name' => 'БАГАМЫ',
                'iso3' => 'BHS',
                'numcode' => '044',
                'phonecode' => '1242',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            18 => array
            (
                'id' => '18',
                'iso' => 'BD',
                'name' => 'БАНГЛАДЕШ',
                'iso3' => 'BGD',
                'numcode' => '050',
                'phonecode' => '880',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            19 => array
            (
                'id' => '19',
                'iso' => 'BB',
                'name' => 'БАРБАДОС',
                'iso3' => 'BRB',
                'numcode' => '052',
                'phonecode' => '1246',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            20 => array
            (
                'id' => '20',
                'iso' => 'BH',
                'name' => 'БАХРЕЙН',
                'iso3' => 'BHR',
                'numcode' => '048',
                'phonecode' => '973',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            21 => array
            (
                'id' => '21',
                'iso' => 'BZ',
                'name' => 'БЕЛИЗ',
                'iso3' => 'BLZ',
                'numcode' => '084',
                'phonecode' => '501',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            22 => array
            (
                'id' => '22',
                'iso' => 'BE',
                'name' => 'БЕЛЬГИЯ',
                'iso3' => 'BEL',
                'numcode' => '056',
                'phonecode' => '32',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            23 => array
            (
                'id' => '23',
                'iso' => 'BJ',
                'name' => 'БЕНИН',
                'iso3' => 'BEN',
                'numcode' => '204',
                'phonecode' => '229',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            24 => array
            (
                'id' => '24',
                'iso' => 'BM',
                'name' => 'БЕРМУДЫ',
                'iso3' => 'BMU',
                'numcode' => '060',
                'phonecode' => '1441',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            25 => array
            (
                'id' => '25',
                'iso' => 'BG',
                'name' => 'БОЛГАРИЯ',
                'iso3' => 'BGR',
                'numcode' => '100',
                'phonecode' => '359',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            26 => array
            (
                'id' => '26',
                'iso' => 'BO',
                'name' => 'БОЛИВИЯ',
                'iso3' => 'BOL',
                'numcode' => '068',
                'phonecode' => '591',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            27 => array
            (
                'id' => '27',
                'iso' => 'BA',
                'name' => 'БОСНИЯ И ГЕРЦЕГОВИНА',
                'iso3' => 'BIH',
                'numcode' => '070',
                'phonecode' => '387',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            28 => array
            (
                'id' => '28',
                'iso' => 'BW',
                'name' => 'БОТСВАНА',
                'iso3' => 'BWA',
                'numcode' => '072',
                'phonecode' => '267',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            29 => array
            (
                'id' => '29',
                'iso' => 'BR',
                'name' => 'БРАЗИЛИЯ',
                'iso3' => 'BRA',
                'numcode' => '076',
                'phonecode' => '55',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            30 => array
            (
                'id' => '30',
                'iso' => 'IO',
                'name' => 'БРИТАНСКАЯ ТЕРРИТОРИЯ В ИНДИЙСКОМ ОКЕАНЕ',
                'iso3' => 'IOT',
                'numcode' => '086',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            31 => array
            (
                'id' => '31',
                'iso' => 'BN',
                'name' => 'БРУНЕЙ-ДАРУССАЛАМ',
                'iso3' => 'BRN',
                'numcode' => '096',
                'phonecode' => '673',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            32 => array
            (
                'id' => '32',
                'iso' => 'BF',
                'name' => 'БУРКИНА-ФАСО',
                'iso3' => 'BFA',
                'numcode' => '854',
                'phonecode' => '226',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            33 => array
            (
                'id' => '33',
                'iso' => 'BI',
                'name' => 'БУРУНДИ',
                'iso3' => 'BDI',
                'numcode' => '108',
                'phonecode' => '257',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            34 => array
            (
                'id' => '34',
                'iso' => 'BT',
                'name' => 'БУТАН',
                'iso3' => 'BTN',
                'numcode' => '064',
                'phonecode' => '975',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            35 => array
            (
                'id' => '35',
                'iso' => 'VU',
                'name' => 'ВАНУАТУ',
                'iso3' => 'VUT',
                'numcode' => '548',
                'phonecode' => '678',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            36 => array
            (
                'id' => '36',
                'iso' => 'VA',
                'name' => 'ВАТИКАН',
                'iso3' => 'VAT',
                'numcode' => '336',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            37 => array
            (
                'id' => '37',
                'iso' => 'GB',
                'name' => 'ВЕЛИКОБРИТАНИЯ',
                'iso3' => 'GBR',
                'numcode' => '826',
                'phonecode' => '44',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            38 => array
            (
                'id' => '38',
                'iso' => 'HU',
                'name' => 'ВЕНГРИЯ',
                'iso3' => 'HUN',
                'numcode' => '348',
                'phonecode' => '36',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            39 => array
            (
                'id' => '39',
                'iso' => 'VE',
                'name' => 'ВЕНЕСУЭЛА',
                'iso3' => 'VEN',
                'numcode' => '862',
                'phonecode' => '58',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            40 => array
            (
                'id' => '40',
                'iso' => 'VG',
                'name' => 'ВИРГИНСКИЕ ОСТРОВА, БРИТАНСКИЕ',
                'iso3' => 'VGB',
                'numcode' => '092',
                'phonecode' => '1284',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            41 => array
            (
                'id' => '41',
                'iso' => 'VI',
                'name' => 'ВИРГИНСКИЕ ОСТРОВА, США',
                'iso3' => 'VIR',
                'numcode' => '850',
                'phonecode' => '1340',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            42 => array
            (
                'id' => '42',
                'iso' => 'VN',
                'name' => 'ВЬЕТНАМ',
                'iso3' => 'VNM',
                'numcode' => '704',
                'phonecode' => '84',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            43 => array
            (
                'id' => '43',
                'iso' => 'GA',
                'name' => 'ГАБОН',
                'iso3' => 'GAB',
                'numcode' => '266',
                'phonecode' => '241',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            44 => array
            (
                'id' => '44',
                'iso' => 'GY',
                'name' => 'ГАЙАНА',
                'iso3' => 'GUY',
                'numcode' => '328',
                'phonecode' => '592',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            45 => array
            (
                'id' => '45',
                'iso' => 'HT',
                'name' => 'ГАИТИ',
                'iso3' => 'HTI',
                'numcode' => '332',
                'phonecode' => '509',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            46 => array
            (
                'id' => '46',
                'iso' => 'GM',
                'name' => 'ГАМБИЯ',
                'iso3' => 'GMB',
                'numcode' => '270',
                'phonecode' => '220',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            47 => array
            (
                'id' => '47',
                'iso' => 'GH',
                'name' => 'ГАНА',
                'iso3' => 'GHA',
                'numcode' => '288',
                'phonecode' => '233',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            48 => array
            (
                'id' => '48',
                'iso' => 'GP',
                'name' => 'ГВАДЕЛУПА',
                'iso3' => 'GLP',
                'numcode' => '312',
                'phonecode' => '590',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            49 => array
            (
                'id' => '49',
                'iso' => 'GT',
                'name' => 'ГВАТЕМАЛА',
                'iso3' => 'GTM',
                'numcode' => '320',
                'phonecode' => '502',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            50 => array
            (
                'id' => '50',
                'iso' => 'GN',
                'name' => 'ГВИНЕЯ',
                'iso3' => 'GIN',
                'numcode' => '324',
                'phonecode' => '224',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            51 => array
            (
                'id' => '51',
                'iso' => 'GW',
                'name' => 'ГВИНЕЯ-БИСАУ',
                'iso3' => 'GNB',
                'numcode' => '624',
                'phonecode' => '245',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            52 => array
            (
                'id' => '52',
                'iso' => 'DE',
                'name' => 'ГЕРМАНИЯ',
                'iso3' => 'DEU',
                'numcode' => '276',
                'phonecode' => '49',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            53 => array
            (
                'id' => '53',
                'iso' => 'GG',
                'name' => 'ГЕРНСИ',
                'iso3' => 'GGY',
                'numcode' => '831',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            54 => array
            (
                'id' => '54',
                'iso' => 'GI',
                'name' => 'ГИБРАЛТАР',
                'iso3' => 'GIB',
                'numcode' => '292',
                'phonecode' => '350',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            55 => array
            (
                'id' => '55',
                'iso' => 'HN',
                'name' => 'ГОНДУРАС',
                'iso3' => 'HND',
                'numcode' => '340',
                'phonecode' => '504',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            56 => array
            (
                'id' => '56',
                'iso' => 'HK',
                'name' => 'ГОНКОНГ',
                'iso3' => 'HKG',
                'numcode' => '344',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            57 => array
            (
                'id' => '57',
                'iso' => 'GD',
                'name' => 'ГРЕНАДА',
                'iso3' => 'GRD',
                'numcode' => '308',
                'phonecode' => '1473',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            58 => array
            (
                'id' => '58',
                'iso' => 'GL',
                'name' => 'ГРЕНЛАНДИЯ',
                'iso3' => 'GRL',
                'numcode' => '304',
                'phonecode' => '299',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            59 => array
            (
                'id' => '59',
                'iso' => 'GR',
                'name' => 'ГРЕЦИЯ',
                'iso3' => 'GRC',
                'numcode' => '300',
                'phonecode' => '30',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            60 => array
            (
                'id' => '60',
                'iso' => 'GE',
                'name' => 'ГРУЗИЯ',
                'iso3' => 'GEO',
                'numcode' => '268',
                'phonecode' => '995',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            61 => array
            (
                'id' => '61',
                'iso' => 'GU',
                'name' => 'ГУАМ',
                'iso3' => 'GUM',
                'numcode' => '316',
                'phonecode' => '1671',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            62 => array
            (
                'id' => '62',
                'iso' => 'DK',
                'name' => 'ДАНИЯ',
                'iso3' => 'DNK',
                'numcode' => '208',
                'phonecode' => '45',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            63 => array
            (
                'id' => '63',
                'iso' => 'JE',
                'name' => 'ДЖЕРСИ',
                'iso3' => 'JEY',
                'numcode' => '832',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            64 => array
            (
                'id' => '64',
                'iso' => 'DJ',
                'name' => 'ДЖИБУТИ',
                'iso3' => 'DJI',
                'numcode' => '262',
                'phonecode' => '253',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            65 => array
            (
                'id' => '65',
                'iso' => 'DM',
                'name' => 'ДОМИНИКА',
                'iso3' => 'DMA',
                'numcode' => '212',
                'phonecode' => '1767',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            66 => array
            (
                'id' => '66',
                'iso' => 'DO',
                'name' => 'ДОМИНИКАНСКАЯ РЕСПУБЛИКА',
                'iso3' => 'DOM',
                'numcode' => '214',
                'phonecode' => '1809, 1829, 1849',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            67 => array
            (
                'id' => '67',
                'iso' => 'EG',
                'name' => 'ЕГИПЕТ',
                'iso3' => 'EGY',
                'numcode' => '818',
                'phonecode' => '20',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            68 => array
            (
                'id' => '68',
                'iso' => 'ZM',
                'name' => 'ЗАМБИЯ',
                'iso3' => 'ZMB',
                'numcode' => '894',
                'phonecode' => '260',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            69 => array
            (
                'id' => '69',
                'iso' => 'EH',
                'name' => 'ЗАПАДНАЯ САХАРА',
                'iso3' => 'ESH',
                'numcode' => '732',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            70 => array
            (
                'id' => '70',
                'iso' => 'ZW',
                'name' => 'ЗИМБАБВЕ',
                'iso3' => 'ZWE',
                'numcode' => '716',
                'phonecode' => '263',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            71 => array
            (
                'id' => '71',
                'iso' => 'YE',
                'name' => 'ЙЕМЕН',
                'iso3' => 'YEM',
                'numcode' => '887',
                'phonecode' => '967',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            72 => array
            (
                'id' => '72',
                'iso' => 'IL',
                'name' => 'ИЗРАИЛЬ',
                'iso3' => 'ISR',
                'numcode' => '376',
                'phonecode' => '972',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            73 => array
            (
                'id' => '73',
                'iso' => 'IN',
                'name' => 'ИНДИЯ',
                'iso3' => 'IND',
                'numcode' => '356',
                'phonecode' => '91',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            74 => array
            (
                'id' => '74',
                'iso' => 'ID',
                'name' => 'ИНДОНЕЗИЯ',
                'iso3' => 'IDN',
                'numcode' => '360',
                'phonecode' => '62',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            75 => array
            (
                'id' => '75',
                'iso' => 'JO',
                'name' => 'ИОРДАНИЯ',
                'iso3' => 'JOR',
                'numcode' => '400',
                'phonecode' => '962',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            76 => array
            (
                'id' => '76',
                'iso' => 'IQ',
                'name' => 'ИРАК',
                'iso3' => 'IRQ',
                'numcode' => '368',
                'phonecode' => '964',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            77 => array
            (
                'id' => '77',
                'iso' => 'IR',
                'name' => 'ИРАН',
                'iso3' => 'IRN',
                'numcode' => '364',
                'phonecode' => '98',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            78 => array
            (
                'id' => '78',
                'iso' => 'IE',
                'name' => 'ИРЛАНДИЯ',
                'iso3' => 'IRL',
                'numcode' => '372',
                'phonecode' => '353',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            79 => array
            (
                'id' => '79',
                'iso' => 'IS',
                'name' => 'ИСЛАНДИЯ',
                'iso3' => 'ISL',
                'numcode' => '352',
                'phonecode' => '354',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            80 => array
            (
                'id' => '80',
                'iso' => 'ES',
                'name' => 'ИСПАНИЯ',
                'iso3' => 'ESP',
                'numcode' => '724',
                'phonecode' => '34',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            81 => array
            (
                'id' => '81',
                'iso' => 'IT',
                'name' => 'ИТАЛИЯ',
                'iso3' => 'ITA',
                'numcode' => '380',
                'phonecode' => '39',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            82 => array
            (
                'id' => '82',
                'iso' => 'CV',
                'name' => 'КАБО-ВЕРДЕ',
                'iso3' => 'CPV',
                'numcode' => '132',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            83 => array
            (
                'id' => '83',
                'iso' => 'KZ',
                'name' => 'КАЗАХСТАН',
                'iso3' => 'KAZ',
                'numcode' => '398',
                'phonecode' => '7',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            84 => array
            (
                'id' => '84',
                'iso' => 'KH',
                'name' => 'КАМБОДЖА',
                'iso3' => 'KHM',
                'numcode' => '116',
                'phonecode' => '855',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            85 => array
            (
                'id' => '85',
                'iso' => 'CM',
                'name' => 'КАМЕРУН',
                'iso3' => 'CMR',
                'numcode' => '120',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            86 => array
            (
                'id' => '86',
                'iso' => 'CA',
                'name' => 'КАНАДА',
                'iso3' => 'CAN',
                'numcode' => '124',
                'phonecode' => '1',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            87 => array
            (
                'id' => '87',
                'iso' => 'QA',
                'name' => 'КАТАР',
                'iso3' => 'QAT',
                'numcode' => '634',
                'phonecode' => '974',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            88 => array
            (
                'id' => '88',
                'iso' => 'KE',
                'name' => 'КЕНИЯ',
                'iso3' => 'KEN',
                'numcode' => '404',
                'phonecode' => '254',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            89 => array
            (
                'id' => '89',
                'iso' => 'CY',
                'name' => 'КИПР',
                'iso3' => 'CYP',
                'numcode' => '196',
                'phonecode' => '357',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            90 => array
            (
                'id' => '90',
                'iso' => 'KG',
                'name' => 'КИРГИЗИЯ',
                'iso3' => 'KGZ',
                'numcode' => '417',
                'phonecode' => '996',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            91 => array
            (
                'id' => '91',
                'iso' => 'KI',
                'name' => 'КИРИБАТИ',
                'iso3' => 'KIR',
                'numcode' => '296',
                'phonecode' => '686',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            92 => array
            (
                'id' => '92',
                'iso' => 'CN',
                'name' => 'КИТАЙ',
                'iso3' => 'CHN',
                'numcode' => '156',
                'phonecode' => '86',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            93 => array
            (
                'id' => '93',
                'iso' => 'KP',
                'name' => 'КНДР',
                'iso3' => 'PRK',
                'numcode' => '408',
                'phonecode' => '850',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            94 => array
            (
                'id' => '94',
                'iso' => 'CC',
                'name' => 'КОКОСОВЫЕ (КИЛИНГ) ОСТРОВА',
                'iso3' => 'CCK',
                'numcode' => '166',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            95 => array
            (
                'id' => '95',
                'iso' => 'CO',
                'name' => 'КОЛУМБИЯ',
                'iso3' => 'COL',
                'numcode' => '170',
                'phonecode' => '57',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            96 => array
            (
                'id' => '96',
                'iso' => 'KM',
                'name' => 'КОМОРЫ',
                'iso3' => 'COM',
                'numcode' => '174',
                'phonecode' => '269',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            97 => array
            (
                'id' => '97',
                'iso' => 'CG',
                'name' => 'КОНГО',
                'iso3' => 'COG',
                'numcode' => '178',
                'phonecode' => '242',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            98 => array
            (
                'id' => '98',
                'iso' => 'CD',
                'name' => 'КОНГО, ДЕМОКРАТИЧЕСКАЯ РЕСПУБЛИКА',
                'iso3' => 'COD',
                'numcode' => '180',
                'phonecode' => '243',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            99 => array
            (
                'id' => '99',
                'iso' => 'KR',
                'name' => 'КОРЕЯ, РЕСПУБЛИКА',
                'iso3' => 'KOR',
                'numcode' => '410',
                'phonecode' => '82',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            100 => array
            (
                'id' => '100',
                'iso' => 'CR',
                'name' => 'КОСТА-РИКА',
                'iso3' => 'CRI',
                'numcode' => '188',
                'phonecode' => '506',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            101 => array
            (
                'id' => '101',
                'iso' => 'CI',
                'name' => 'КОТ Д\'ИВУАР',
                'iso3' => 'CIV',
                'numcode' => '384',
                'phonecode' => '225',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            102 => array
            (
                'id' => '102',
                'iso' => 'CU',
                'name' => 'КУБА',
                'iso3' => 'CUB',
                'numcode' => '192',
                'phonecode' => '53',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            103 => array
            (
                'id' => '103',
                'iso' => 'KW',
                'name' => 'КУВЕЙТ',
                'iso3' => 'KWT',
                'numcode' => '414',
                'phonecode' => '965',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            104 => array
            (
                'id' => '104',
                'iso' => 'LA',
                'name' => 'ЛАОС',
                'iso3' => 'LAO',
                'numcode' => '418',
                'phonecode' => '856',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            105 => array
            (
                'id' => '105',
                'iso' => 'LV',
                'name' => 'ЛАТВИЯ',
                'iso3' => 'LVA',
                'numcode' => '428',
                'phonecode' => '371',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            106 => array
            (
                'id' => '106',
                'iso' => 'LS',
                'name' => 'ЛЕСОТО',
                'iso3' => 'LSO',
                'numcode' => '426',
                'phonecode' => '266',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            107 => array
            (
                'id' => '107',
                'iso' => 'LR',
                'name' => 'ЛИБЕРИЯ',
                'iso3' => 'LBR',
                'numcode' => '430',
                'phonecode' => '231',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            108 => array
            (
                'id' => '108',
                'iso' => 'LB',
                'name' => 'ЛИВАН',
                'iso3' => 'LBN',
                'numcode' => '422',
                'phonecode' => '961',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            109 => array
            (
                'id' => '109',
                'iso' => 'LY',
                'name' => 'ЛИВИЯ',
                'iso3' => 'LBY',
                'numcode' => '434',
                'phonecode' => '218',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            110 => array
            (
                'id' => '110',
                'iso' => 'LT',
                'name' => 'ЛИТВА',
                'iso3' => 'LTU',
                'numcode' => '440',
                'phonecode' => '370',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            111 => array
            (
                'id' => '111',
                'iso' => 'LI',
                'name' => 'ЛИХТЕНШТЕЙН',
                'iso3' => 'LIE',
                'numcode' => '438',
                'phonecode' => '423',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            112 => array
            (
                'id' => '112',
                'iso' => 'LU',
                'name' => 'ЛЮКСЕМБУРГ',
                'iso3' => 'LUX',
                'numcode' => '442',
                'phonecode' => '352',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            113 => array
            (
                'id' => '113',
                'iso' => 'MU',
                'name' => 'МАВРИКИЙ',
                'iso3' => 'MUS',
                'numcode' => '480',
                'phonecode' => '230',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            114 => array
            (
                'id' => '114',
                'iso' => 'MR',
                'name' => 'МАВРИТАНИЯ',
                'iso3' => 'MRT',
                'numcode' => '478',
                'phonecode' => '222',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            115 => array
            (
                'id' => '115',
                'iso' => 'MG',
                'name' => 'МАДАГАСКАР',
                'iso3' => 'MDG',
                'numcode' => '450',
                'phonecode' => '261',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            116 => array
            (
                'id' => '116',
                'iso' => 'YT',
                'name' => 'МАЙОТТА',
                'iso3' => 'MYT',
                'numcode' => '175',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            117 => array
            (
                'id' => '117',
                'iso' => 'MO',
                'name' => 'МАКАО',
                'iso3' => 'MAC',
                'numcode' => '446',
                'phonecode' => '853',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            118 => array
            (
                'id' => '118',
                'iso' => 'MK',
                'name' => 'МАКЕДОНИЯ',
                'iso3' => 'MKD',
                'numcode' => '807',
                'phonecode' => '389',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            119 => array
            (
                'id' => '119',
                'iso' => 'MW',
                'name' => 'МАЛАВИ',
                'iso3' => 'MWI',
                'numcode' => '454',
                'phonecode' => '265',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            120 => array
            (
                'id' => '120',
                'iso' => 'MY',
                'name' => 'МАЛАЙЗИЯ',
                'iso3' => 'MYS',
                'numcode' => '458',
                'phonecode' => '60',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            121 => array
            (
                'id' => '121',
                'iso' => 'ML',
                'name' => 'МАЛИ',
                'iso3' => 'MLI',
                'numcode' => '466',
                'phonecode' => '223',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            122 => array
            (
                'id' => '122',
                'iso' => 'UM',
                'name' => 'МАЛЫЕ ТИХООКЕАНСКИЕ ОТДАЛЕННЫЕ ОСТРОВА СОЕДИНЕННЫХ ШТАТОВ',
                'iso3' => 'UMI',
                'numcode' => '581',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            123 => array
            (
                'id' => '123',
                'iso' => 'MV',
                'name' => 'МАЛЬДИВЫ',
                'iso3' => 'MDV',
                'numcode' => '462',
                'phonecode' => '960',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            124 => array
            (
                'id' => '124',
                'iso' => 'MT',
                'name' => 'МАЛЬТА',
                'iso3' => 'MLT',
                'numcode' => '470',
                'phonecode' => '356',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            125 => array
            (
                'id' => '125',
                'iso' => 'MA',
                'name' => 'МАРОККО',
                'iso3' => 'MAR',
                'numcode' => '504',
                'phonecode' => '212',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            126 => array
            (
                'id' => '126',
                'iso' => 'MQ',
                'name' => 'МАРТИНИКА',
                'iso3' => 'MTQ',
                'numcode' => '474',
                'phonecode' => '596',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            127 => array
            (
                'id' => '127',
                'iso' => 'MH',
                'name' => 'МАРШАЛЛОВЫ ОСТРОВА',
                'iso3' => 'MHL',
                'numcode' => '584',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            128 => array
            (
                'id' => '128',
                'iso' => 'MX',
                'name' => 'МЕКСИКА',
                'iso3' => 'MEX',
                'numcode' => '484',
                'phonecode' => '52',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            129 => array
            (
                'id' => '129',
                'iso' => 'FM',
                'name' => 'МИКРОНЕЗИЯ',
                'iso3' => 'FSM',
                'numcode' => '583',
                'phonecode' => '691',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            130 => array
            (
                'id' => '130',
                'iso' => 'MZ',
                'name' => 'МОЗАМБИК',
                'iso3' => 'MOZ',
                'numcode' => '508',
                'phonecode' => '258',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            131 => array
            (
                'id' => '131',
                'iso' => 'MD',
                'name' => 'МОЛДОВА',
                'iso3' => 'MDA',
                'numcode' => '498',
                'phonecode' => '373',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            132 => array
            (
                'id' => '132',
                'iso' => 'MC',
                'name' => 'МОНАКО',
                'iso3' => 'MCO',
                'numcode' => '492',
                'phonecode' => '377',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            133 => array
            (
                'id' => '133',
                'iso' => 'MN',
                'name' => 'МОНГОЛИЯ',
                'iso3' => 'MNG',
                'numcode' => '496',
                'phonecode' => '976',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            134 => array
            (
                'id' => '134',
                'iso' => 'MS',
                'name' => 'МОНТСЕРРАТ',
                'iso3' => 'MSR',
                'numcode' => '500',
                'phonecode' => '1664',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            135 => array
            (
                'id' => '135',
                'iso' => 'MM',
                'name' => 'МЬЯНМА',
                'iso3' => 'MMR',
                'numcode' => '104',
                'phonecode' => '95',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            136 => array
            (
                'id' => '136',
                'iso' => 'NA',
                'name' => 'НАМИБИЯ',
                'iso3' => 'NAM',
                'numcode' => '516',
                'phonecode' => '264',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            137 => array
            (
                'id' => '137',
                'iso' => 'NR',
                'name' => 'НАУРУ',
                'iso3' => 'NRU',
                'numcode' => '520',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            138 => array
            (
                'id' => '138',
                'iso' => 'NP',
                'name' => 'НЕПАЛ',
                'iso3' => 'NPL',
                'numcode' => '524',
                'phonecode' => '977',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            139 => array
            (
                'id' => '139',
                'iso' => 'NE',
                'name' => 'НИГЕР',
                'iso3' => 'NER',
                'numcode' => '562',
                'phonecode' => '227',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            140 => array
            (
                'id' => '140',
                'iso' => 'NG',
                'name' => 'НИГЕРИЯ',
                'iso3' => 'NGA',
                'numcode' => '566',
                'phonecode' => '234',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            141 => array
            (
                'id' => '141',
                'iso' => 'AN',
                'name' => 'НИДЕРЛАНДСКИЕ АНТИЛЫ',
                'iso3' => 'ANT',
                'numcode' => '530',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            142 => array
            (
                'id' => '142',
                'iso' => 'NL',
                'name' => 'НИДЕРЛАНДЫ',
                'iso3' => 'NLD',
                'numcode' => '528',
                'phonecode' => '31',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            143 => array
            (
                'id' => '143',
                'iso' => 'NI',
                'name' => 'НИКАРАГУА',
                'iso3' => 'NIC',
                'numcode' => '558',
                'phonecode' => '505',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            144 => array
            (
                'id' => '144',
                'iso' => 'NU',
                'name' => 'НИУЭ',
                'iso3' => 'NIU',
                'numcode' => '570',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            145 => array
            (
                'id' => '145',
                'iso' => 'NZ',
                'name' => 'НОВАЯ ЗЕЛАНДИЯ',
                'iso3' => 'NZL',
                'numcode' => '554',
                'phonecode' => '64',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            146 => array
            (
                'id' => '146',
                'iso' => 'NC',
                'name' => 'НОВАЯ КАЛЕДОНИЯ',
                'iso3' => 'NCL',
                'numcode' => '540',
                'phonecode' => '687',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            147 => array
            (
                'id' => '147',
                'iso' => 'NO',
                'name' => 'НОРВЕГИЯ',
                'iso3' => 'NOR',
                'numcode' => '578',
                'phonecode' => '47',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            148 => array
            (
                'id' => '148',
                'iso' => 'AE',
                'name' => 'ОАЭ',
                'iso3' => 'ARE',
                'numcode' => '784',
                'phonecode' => '971',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            149 => array
            (
                'id' => '149',
                'iso' => 'OM',
                'name' => 'ОМАН',
                'iso3' => 'OMN',
                'numcode' => '512',
                'phonecode' => '968',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            150 => array
            (
                'id' => '150',
                'iso' => 'BV',
                'name' => 'ОСТРОВ БУВЕ',
                'iso3' => 'BVT',
                'numcode' => '074',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            151 => array
            (
                'id' => '151',
                'iso' => 'IM',
                'name' => 'ОСТРОВ МЭН',
                'iso3' => 'IMN',
                'numcode' => '833',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            152 => array
            (
                'id' => '152',
                'iso' => 'NF',
                'name' => 'ОСТРОВ НОРФОЛК',
                'iso3' => 'NFK',
                'numcode' => '574',
                'phonecode' => '672',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            153 => array
            (
                'id' => '153',
                'iso' => 'CX',
                'name' => 'ОСТРОВ РОЖДЕСТВА',
                'iso3' => 'CXR',
                'numcode' => '162',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            154 => array
            (
                'id' => '154',
                'iso' => 'HM',
                'name' => 'ОСТРОВ ХЕРД И ОСТРОВА МАКДОНАЛЬД',
                'iso3' => 'HMD',
                'numcode' => '334',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            155 => array
            (
                'id' => '155',
                'iso' => 'KY',
                'name' => 'ОСТРОВА КАЙМАН',
                'iso3' => 'CYM',
                'numcode' => '136',
                'phonecode' => '1345',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            156 => array
            (
                'id' => '156',
                'iso' => 'CK',
                'name' => 'ОСТРОВА КУКА',
                'iso3' => 'COK',
                'numcode' => '184',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            157 => array
            (
                'id' => '157',
                'iso' => 'TC',
                'name' => 'ОСТРОВА ТЕРКС И КАЙКОС',
                'iso3' => 'TCA',
                'numcode' => '796',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            158 => array
            (
                'id' => '158',
                'iso' => 'PK',
                'name' => 'ПАКИСТАН',
                'iso3' => 'PAK',
                'numcode' => '586',
                'phonecode' => '92',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            159 => array
            (
                'id' => '159',
                'iso' => 'PW',
                'name' => 'ПАЛАУ',
                'iso3' => 'PLW',
                'numcode' => '585',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            160 => array
            (
                'id' => '160',
                'iso' => 'PS',
                'name' => 'ПАЛЕСТИНСКАЯ ТЕРРИТОРИЯ',
                'iso3' => 'PSE',
                'numcode' => '275',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            161 => array
            (
                'id' => '161',
                'iso' => 'PA',
                'name' => 'ПАНАМА',
                'iso3' => 'PAN',
                'numcode' => '591',
                'phonecode' => '507',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            162 => array
            (
                'id' => '162',
                'iso' => 'PG',
                'name' => 'ПАПУА-НОВАЯ ГВИНЕЯ',
                'iso3' => 'PNG',
                'numcode' => '598',
                'phonecode' => '675',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            163 => array
            (
                'id' => '163',
                'iso' => 'PY',
                'name' => 'ПАРАГВАЙ',
                'iso3' => 'PRY',
                'numcode' => '600',
                'phonecode' => '595',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            164 => array
            (
                'id' => '164',
                'iso' => 'PE',
                'name' => 'ПЕРУ',
                'iso3' => 'PER',
                'numcode' => '604',
                'phonecode' => '51',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            165 => array
            (
                'id' => '165',
                'iso' => 'PN',
                'name' => 'ПИТКЕРН',
                'iso3' => 'PCN',
                'numcode' => '612',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            166 => array
            (
                'id' => '166',
                'iso' => 'PL',
                'name' => 'ПОЛЬША',
                'iso3' => 'POL',
                'numcode' => '616',
                'phonecode' => '48',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            167 => array
            (
                'id' => '167',
                'iso' => 'PT',
                'name' => 'ПОРТУГАЛИЯ',
                'iso3' => 'PRT',
                'numcode' => '620',
                'phonecode' => '351',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            168 => array
            (
                'id' => '168',
                'iso' => 'PR',
                'name' => 'ПУЭРТО-РИКО',
                'iso3' => 'PRI',
                'numcode' => '630',
                'phonecode' => '1787',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            169 => array
            (
                'id' => '169',
                'iso' => 'RE',
                'name' => 'РЕЮНЬОН',
                'iso3' => 'REU',
                'numcode' => '638',
                'phonecode' => '262',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            170 => array
            (
                'id' => '170',
                'iso' => 'RW',
                'name' => 'РУАНДА',
                'iso3' => 'RWA',
                'numcode' => '646',
                'phonecode' => '250',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            171 => array
            (
                'id' => '171',
                'iso' => 'RO',
                'name' => 'РУМЫНИЯ',
                'iso3' => 'ROU',
                'numcode' => '642',
                'phonecode' => '40',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            172 => array
            (
                'id' => '172',
                'iso' => 'SV',
                'name' => 'САЛЬВАДОР',
                'iso3' => 'SLV',
                'numcode' => '222',
                'phonecode' => '503',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            173 => array
            (
                'id' => '173',
                'iso' => 'WS',
                'name' => 'САМОА',
                'iso3' => 'WSM',
                'numcode' => '882',
                'phonecode' => '685',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            174 => array
            (
                'id' => '174',
                'iso' => 'SM',
                'name' => 'САН-МАРИНО',
                'iso3' => 'SMR',
                'numcode' => '674',
                'phonecode' => '378',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            175 => array
            (
                'id' => '175',
                'iso' => 'ST',
                'name' => 'САН-ТОМЕ И ПРИНСИПИ',
                'iso3' => 'STP',
                'numcode' => '678',
                'phonecode' => '239',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            176 => array
            (
                'id' => '176',
                'iso' => 'SA',
                'name' => 'САУДОВСКАЯ АРАВИЯ',
                'iso3' => 'SAU',
                'numcode' => '682',
                'phonecode' => '966',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            177 => array
            (
                'id' => '177',
                'iso' => 'SZ',
                'name' => 'СВАЗИЛЕНД',
                'iso3' => 'SWZ',
                'numcode' => '748',
                'phonecode' => '268',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            178 => array
            (
                'id' => '178',
                'iso' => 'SH',
                'name' => 'СВЯТАЯ ЕЛЕНА, ОСТРОВ ВОЗНЕСЕНИЯ, ТРИСТАН-ДА-КУНЬЯ',
                'iso3' => 'SHN',
                'numcode' => '654',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            179 => array
            (
                'id' => '179',
                'iso' => 'MP',
                'name' => 'СЕВЕРНЫЕ МАРИАНСКИЕ ОСТРОВА',
                'iso3' => 'MNP',
                'numcode' => '580',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            180 => array
            (
                'id' => '180',
                'iso' => 'SC',
                'name' => 'СЕЙШЕЛЫ',
                'iso3' => 'SYC',
                'numcode' => '690',
                'phonecode' => '248',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            181 => array
            (
                'id' => '181',
                'iso' => 'BL',
                'name' => 'СЕН-БАРТЕЛЕМИ',
                'iso3' => 'BLM',
                'numcode' => '652',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            182 => array
            (
                'id' => '182',
                'iso' => 'SN',
                'name' => 'СЕНЕГАЛ',
                'iso3' => 'SEN',
                'numcode' => '686',
                'phonecode' => '221',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            183 => array
            (
                'id' => '183',
                'iso' => 'MF',
                'name' => 'СЕН-МАРТЕН',
                'iso3' => 'MAF',
                'numcode' => '663',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            184 => array
            (
                'id' => '184',
                'iso' => 'VC',
                'name' => 'СЕНТ-ВИНСЕНТ И ГРЕНАДИНЫ',
                'iso3' => 'VCT',
                'numcode' => '670',
                'phonecode' => '1784',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            185 => array
            (
                'id' => '185',
                'iso' => 'KN',
                'name' => 'СЕНТ-КИТС И НЕВИС',
                'iso3' => 'KNA',
                'numcode' => '659',
                'phonecode' => '1869',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            186 => array
            (
                'id' => '186',
                'iso' => 'LC',
                'name' => 'СЕНТ-ЛЮСИЯ',
                'iso3' => 'LCA',
                'numcode' => '662',
                'phonecode' => '1758',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            187 => array
            (
                'id' => '187',
                'iso' => 'PM',
                'name' => 'СЕНТ-ПЬЕР И МИКЕЛОН',
                'iso3' => 'SPM',
                'numcode' => '666',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            188 => array
            (
                'id' => '188',
                'iso' => 'RS',
                'name' => 'СЕРБИЯ',
                'iso3' => 'SRB',
                'numcode' => '688',
                'phonecode' => '381',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            189 => array
            (
                'id' => '189',
                'iso' => 'SG',
                'name' => 'СИНГАПУР',
                'iso3' => 'SGP',
                'numcode' => '702',
                'phonecode' => '65',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            190 => array
            (
                'id' => '190',
                'iso' => 'SY',
                'name' => 'СИРИЯ',
                'iso3' => 'SYR',
                'numcode' => '760',
                'phonecode' => '963',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            191 => array
            (
                'id' => '191',
                'iso' => 'SK',
                'name' => 'СЛОВАКИЯ',
                'iso3' => 'SVK',
                'numcode' => '703',
                'phonecode' => '421',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            192 => array
            (
                'id' => '192',
                'iso' => 'SI',
                'name' => 'СЛОВЕНИЯ',
                'iso3' => 'SVN',
                'numcode' => '705',
                'phonecode' => '386',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            193 => array
            (
                'id' => '193',
                'iso' => 'SB',
                'name' => 'СОЛОМОНОВЫ ОСТРОВА',
                'iso3' => 'SLB',
                'numcode' => '090',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            194 => array
            (
                'id' => '194',
                'iso' => 'SO',
                'name' => 'СОМАЛИ',
                'iso3' => 'SOM',
                'numcode' => '706',
                'phonecode' => '252',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            195 => array
            (
                'id' => '195',
                'iso' => 'SD',
                'name' => 'СУДАН',
                'iso3' => 'SDN',
                'numcode' => '736',
                'phonecode' => '249',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            196 => array
            (
                'id' => '196',
                'iso' => 'SR',
                'name' => 'СУРИНАМ',
                'iso3' => 'SUR',
                'numcode' => '740',
                'phonecode' => '597',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            197 => array
            (
                'id' => '197',
                'iso' => 'US',
                'name' => 'США',
                'iso3' => 'USA',
                'numcode' => '840',
                'phonecode' => '1',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            198 => array
            (
                'id' => '198',
                'iso' => 'SL',
                'name' => 'СЬЕРРА-ЛЕОНЕ',
                'iso3' => 'SLE',
                'numcode' => '694',
                'phonecode' => '232',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            199 => array
            (
                'id' => '199',
                'iso' => 'TJ',
                'name' => 'ТАДЖИКИСТАН',
                'iso3' => 'TJK',
                'numcode' => '762',
                'phonecode' => '992',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            200 => array
            (
                'id' => '200',
                'iso' => 'TW',
                'name' => 'ТАЙВАНЬ',
                'iso3' => 'TWN',
                'numcode' => '158',
                'phonecode' => '886',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            201 => array
            (
                'id' => '201',
                'iso' => 'TH',
                'name' => 'ТАИЛАНД',
                'iso3' => 'THA',
                'numcode' => '764',
                'phonecode' => '66',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            202 => array
            (
                'id' => '202',
                'iso' => 'TZ',
                'name' => 'ТАНЗАНИЯ',
                'iso3' => 'TZA',
                'numcode' => '834',
                'phonecode' => '255',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            203 => array
            (
                'id' => '203',
                'iso' => 'TL',
                'name' => 'ТИМОР-ЛЕСТЕ',
                'iso3' => 'TLS',
                'numcode' => '626',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            204 => array
            (
                'id' => '204',
                'iso' => 'TG',
                'name' => 'ТОГО',
                'iso3' => 'TGO',
                'numcode' => '768',
                'phonecode' => '228',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            205 => array
            (
                'id' => '205',
                'iso' => 'TK',
                'name' => 'ТОКЕЛАУ',
                'iso3' => 'TKL',
                'numcode' => '772',
                'phonecode' => '690',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            206 => array
            (
                'id' => '206',
                'iso' => 'TO',
                'name' => 'ТОНГА',
                'iso3' => 'TON',
                'numcode' => '776',
                'phonecode' => '676',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            207 => array
            (
                'id' => '207',
                'iso' => 'TT',
                'name' => 'ТРИНИДАД И ТОБАГО',
                'iso3' => 'TTO',
                'numcode' => '780',
                'phonecode' => '1868',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            208 => array
            (
                'id' => '208',
                'iso' => 'TV',
                'name' => 'ТУВАЛУ',
                'iso3' => 'TUV',
                'numcode' => '798',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            209 => array
            (
                'id' => '209',
                'iso' => 'TN',
                'name' => 'ТУНИС',
                'iso3' => 'TUN',
                'numcode' => '788',
                'phonecode' => '216',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            210 => array
            (
                'id' => '210',
                'iso' => 'TM',
                'name' => 'ТУРКМЕНИЯ',
                'iso3' => 'TKM',
                'numcode' => '795',
                'phonecode' => '993',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            211 => array
            (
                'id' => '211',
                'iso' => 'TR',
                'name' => 'ТУРЦИЯ',
                'iso3' => 'TUR',
                'numcode' => '792',
                'phonecode' => '90',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            212 => array
            (
                'id' => '212',
                'iso' => 'UG',
                'name' => 'УГАНДА',
                'iso3' => 'UGA',
                'numcode' => '800',
                'phonecode' => '256',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            213 => array
            (
                'id' => '213',
                'iso' => 'UZ',
                'name' => 'УЗБЕКИСТАН',
                'iso3' => 'UZB',
                'numcode' => '860',
                'phonecode' => '998',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            214 => array
            (
                'id' => '214',
                'iso' => 'UA',
                'name' => 'УКРАИНА',
                'iso3' => 'UKR',
                'numcode' => '804',
                'phonecode' => '380',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            215 => array
            (
                'id' => '215',
                'iso' => 'WF',
                'name' => 'УОЛЛИС И ФУТУНА',
                'iso3' => 'WLF',
                'numcode' => '876',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            216 => array
            (
                'id' => '216',
                'iso' => 'UY',
                'name' => 'УРУГВАЙ',
                'iso3' => 'URY',
                'numcode' => '858',
                'phonecode' => '598',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            217 => array
            (
                'id' => '217',
                'iso' => 'FO',
                'name' => 'ФАРЕРСКИЕ ОСТРОВА',
                'iso3' => 'FRO',
                'numcode' => '234',
                'phonecode' => '298',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            218 => array
            (
                'id' => '218',
                'iso' => 'FJ',
                'name' => 'ФИДЖИ',
                'iso3' => 'FJI',
                'numcode' => '242',
                'phonecode' => '679',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            219 => array
            (
                'id' => '219',
                'iso' => 'PH',
                'name' => 'ФИЛИППИНЫ',
                'iso3' => 'PHL',
                'numcode' => '608',
                'phonecode' => '63',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            220 => array
            (
                'id' => '220',
                'iso' => 'FI',
                'name' => 'ФИНЛЯНДИЯ',
                'iso3' => 'FIN',
                'numcode' => '246',
                'phonecode' => '358',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            221 => array
            (
                'id' => '221',
                'iso' => 'FK',
                'name' => 'ФОЛКЛЕНДСКИЕ ОСТРОВА (МАЛЬВИНСКИЕ)',
                'iso3' => 'FLK',
                'numcode' => '238',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            222 => array
            (
                'id' => '222',
                'iso' => 'FR',
                'name' => 'ФРАНЦИЯ',
                'iso3' => 'FRA',
                'numcode' => '250',
                'phonecode' => '33',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            223 => array
            (
                'id' => '223',
                'iso' => 'GF',
                'name' => 'ФРАНЦУЗСКАЯ ГВИАНА',
                'iso3' => 'GUF',
                'numcode' => '254',
                'phonecode' => '594',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            224 => array
            (
                'id' => '224',
                'iso' => 'PF',
                'name' => 'ФРАНЦУЗСКАЯ ПОЛИНЕЗИЯ',
                'iso3' => 'PYF',
                'numcode' => '258',
                'phonecode' => '689',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            225 => array
            (
                'id' => '225',
                'iso' => 'TF',
                'name' => 'ФРАНЦУЗСКИЕ ЮЖНЫЕ ТЕРРИТОРИИ',
                'iso3' => 'ATF',
                'numcode' => '260',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            226 => array
            (
                'id' => '226',
                'iso' => 'HR',
                'name' => 'ХОРВАТИЯ',
                'iso3' => 'HRV',
                'numcode' => '191',
                'phonecode' => '385',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            227 => array
            (
                'id' => '227',
                'iso' => 'CF',
                'name' => 'ЦАР',
                'iso3' => 'CAF',
                'numcode' => '140',
                'phonecode' => '236',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            228 => array
            (
                'id' => '228',
                'iso' => 'TD',
                'name' => 'ЧАД',
                'iso3' => 'TCD',
                'numcode' => '148',
                'phonecode' => '235',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            229 => array
            (
                'id' => '229',
                'iso' => 'ME',
                'name' => 'ЧЕРНОГОРИЯ',
                'iso3' => 'MNE',
                'numcode' => '499',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            230 => array
            (
                'id' => '230',
                'iso' => 'CZ',
                'name' => 'ЧЕХИЯ',
                'iso3' => 'CZE',
                'numcode' => '203',
                'phonecode' => '420',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            231 => array
            (
                'id' => '231',
                'iso' => 'CL',
                'name' => 'ЧИЛИ',
                'iso3' => 'CHL',
                'numcode' => '152',
                'phonecode' => '56',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            232 => array
            (
                'id' => '232',
                'iso' => 'CH',
                'name' => 'ШВЕЙЦАРИЯ',
                'iso3' => 'CHE',
                'numcode' => '756',
                'phonecode' => '41',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            233 => array
            (
                'id' => '233',
                'iso' => 'SE',
                'name' => 'ШВЕЦИЯ',
                'iso3' => 'SWE',
                'numcode' => '752',
                'phonecode' => '46',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            234 => array
            (
                'id' => '234',
                'iso' => 'SJ',
                'name' => 'ШПИЦБЕРГЕН И ЯН МАЙЕН',
                'iso3' => 'SJM',
                'numcode' => '744',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            235 => array
            (
                'id' => '235',
                'iso' => 'LK',
                'name' => 'ШРИ-ЛАНКА',
                'iso3' => 'LKA',
                'numcode' => '144',
                'phonecode' => '94',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            236 => array
            (
                'id' => '236',
                'iso' => 'EC',
                'name' => 'ЭКВАДОР',
                'iso3' => 'ECU',
                'numcode' => '218',
                'phonecode' => '593',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            237 => array
            (
                'id' => '237',
                'iso' => 'GQ',
                'name' => 'ЭКВАТОРИАЛЬНАЯ ГВИНЕЯ',
                'iso3' => 'GNQ',
                'numcode' => '226',
                'phonecode' => '240',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            238 => array
            (
                'id' => '238',
                'iso' => 'АХ',
                'name' => 'ЭЛАНДСКИЕ ОСТРОВА',
                'iso3' => 'ALA',
                'numcode' => '248',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            239 => array
            (
                'id' => '239',
                'iso' => 'ER',
                'name' => 'ЭРИТРЕЯ',
                'iso3' => 'ERI',
                'numcode' => '232',
                'phonecode' => '291',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            240 => array
            (
                'id' => '240',
                'iso' => 'EE',
                'name' => 'ЭСТОНИЯ',
                'iso3' => 'EST',
                'numcode' => '233',
                'phonecode' => '372',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            241 => array
            (
                'id' => '241',
                'iso' => 'ET',
                'name' => 'ЭФИОПИЯ',
                'iso3' => 'ETH',
                'numcode' => '231',
                'phonecode' => '251',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            242 => array
            (
                'id' => '242',
                'iso' => 'ZA',
                'name' => 'ЮАР',
                'iso3' => 'ZAF',
                'numcode' => '710',
                'phonecode' => '27',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            243 => array
            (
                'id' => '243',
                'iso' => 'GS',
                'name' => 'ЮЖНАЯ ДЖОРДЖИЯ И ЮЖНЫЕ САНДВИЧЕВЫ ОСТРОВА',
                'iso3' => 'SGS',
                'numcode' => '239',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            244 => array
            (
                'id' => '244',
                'iso' => 'OS',
                'name' => 'ЮЖНАЯ ОСЕТИЯ',
                'iso3' => 'OST',
                'numcode' => '896',
                'phonecode' => '',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            245 => array
            (
                'id' => '245',
                'iso' => 'JM',
                'name' => 'ЯМАЙКА',
                'iso3' => 'JAM',
                'numcode' => '388',
                'phonecode' => '1876',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

            246 => array
            (
                'id' => '246',
                'iso' => 'JP',
                'name' => 'ЯПОНИЯ',
                'iso3' => 'JPN',
                'numcode' => '392',
                'phonecode' => '81',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),

        ));
    }
}
