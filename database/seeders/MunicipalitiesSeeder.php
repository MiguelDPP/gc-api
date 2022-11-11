<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipalitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipalities = [
            array( // row #0
                'id' => 1,
                'name' => 'Leticia',
                'department_id' => 1,
            ),
            array( // row #1
                'id' => 2,
                'name' => 'Puerto Nari�o',
                'department_id' => 1,
            ),
            array( // row #2
                'id' => 3,
                'name' => 'Abejorral',
                'department_id' => 2,
            ),
            array( // row #3
                'id' => 4,
                'name' => 'Abriaqu�',
                'department_id' => 2,
            ),
            array( // row #4
                'id' => 5,
                'name' => 'Alejandria',
                'department_id' => 2,
            ),
            array( // row #5
                'id' => 6,
                'name' => 'Amag�',
                'department_id' => 2,
            ),
            array( // row #6
                'id' => 7,
                'name' => 'Amalfi',
                'department_id' => 2,
            ),
            array( // row #7
                'id' => 8,
                'name' => 'Andes',
                'department_id' => 2,
            ),
            array( // row #8
                'id' => 9,
                'name' => 'Angel�polis',
                'department_id' => 2,
            ),
            array( // row #9
                'id' => 10,
                'name' => 'Angostura',
                'department_id' => 2,
            ),
            array( // row #10
                'id' => 11,
                'name' => 'Anor�',
                'department_id' => 2,
            ),
            array( // row #11
                'id' => 12,
                'name' => 'Anz�',
                'department_id' => 2,
            ),
            array( // row #12
                'id' => 13,
                'name' => 'Apartad�',
                'department_id' => 2,
            ),
            array( // row #13
                'id' => 14,
                'name' => 'Arboletes',
                'department_id' => 2,
            ),
            array( // row #14
                'id' => 15,
                'name' => 'Argelia',
                'department_id' => 2,
            ),
            array( // row #15
                'id' => 16,
                'name' => 'Armenia',
                'department_id' => 2,
            ),
            array( // row #16
                'id' => 17,
                'name' => 'Barbosa',
                'department_id' => 2,
            ),
            array( // row #17
                'id' => 18,
                'name' => 'Bello',
                'department_id' => 2,
            ),
            array( // row #18
                'id' => 19,
                'name' => 'Belmira',
                'department_id' => 2,
            ),
            array( // row #19
                'id' => 20,
                'name' => 'Betania',
                'department_id' => 2,
            ),
            array( // row #20
                'id' => 21,
                'name' => 'Betulia',
                'department_id' => 2,
            ),
            array( // row #21
                'id' => 22,
                'name' => 'Bol�var',
                'department_id' => 2,
            ),
            array( // row #22
                'id' => 23,
                'name' => 'Brice�o',
                'department_id' => 2,
            ),
            array( // row #23
                'id' => 24,
                'name' => 'Bur�tica',
                'department_id' => 2,
            ),
            array( // row #24
                'id' => 25,
                'name' => 'Caicedo',
                'department_id' => 2,
            ),
            array( // row #25
                'id' => 26,
                'name' => 'Caldas',
                'department_id' => 2,
            ),
            array( // row #26
                'id' => 27,
                'name' => 'Campamento',
                'department_id' => 2,
            ),
            array( // row #27
                'id' => 28,
                'name' => 'Caracol�',
                'department_id' => 2,
            ),
            array( // row #28
                'id' => 29,
                'name' => 'Caramanta',
                'department_id' => 2,
            ),
            array( // row #29
                'id' => 30,
                'name' => 'Carepa',
                'department_id' => 2,
            ),
            array( // row #30
                'id' => 31,
                'name' => 'Carmen de Viboral',
                'department_id' => 2,
            ),
            array( // row #31
                'id' => 32,
                'name' => 'Carolina',
                'department_id' => 2,
            ),
            array( // row #32
                'id' => 33,
                'name' => 'Caucasia',
                'department_id' => 2,
            ),
            array( // row #33
                'id' => 34,
                'name' => 'Ca�asgordas',
                'department_id' => 2,
            ),
            array( // row #34
                'id' => 35,
                'name' => 'Chigorod�',
                'department_id' => 2,
            ),
            array( // row #35
                'id' => 36,
                'name' => 'Cisneros',
                'department_id' => 2,
            ),
            array( // row #36
                'id' => 37,
                'name' => 'Cocorn�',
                'department_id' => 2,
            ),
            array( // row #37
                'id' => 38,
                'name' => 'Concepci�n',
                'department_id' => 2,
            ),
            array( // row #38
                'id' => 39,
                'name' => 'Concordia',
                'department_id' => 2,
            ),
            array( // row #39
                'id' => 40,
                'name' => 'Copacabana',
                'department_id' => 2,
            ),
            array( // row #40
                'id' => 41,
                'name' => 'C�ceres',
                'department_id' => 2,
            ),
            array( // row #41
                'id' => 42,
                'name' => 'Dabeiba',
                'department_id' => 2,
            ),
            array( // row #42
                'id' => 43,
                'name' => 'Don Mat�as',
                'department_id' => 2,
            ),
            array( // row #43
                'id' => 44,
                'name' => 'Eb�jico',
                'department_id' => 2,
            ),
            array( // row #44
                'id' => 45,
                'name' => 'El Bagre',
                'department_id' => 2,
            ),
            array( // row #45
                'id' => 46,
                'name' => 'Entrerr�os',
                'department_id' => 2,
            ),
            array( // row #46
                'id' => 47,
                'name' => 'Envigado',
                'department_id' => 2,
            ),
            array( // row #47
                'id' => 48,
                'name' => 'Fredonia',
                'department_id' => 2,
            ),
            array( // row #48
                'id' => 49,
                'name' => 'Frontino',
                'department_id' => 2,
            ),
            array( // row #49
                'id' => 50,
                'name' => 'Giraldo',
                'department_id' => 2,
            ),
            array( // row #50
                'id' => 51,
                'name' => 'Girardota',
                'department_id' => 2,
            ),
            array( // row #51
                'id' => 52,
                'name' => 'Granada',
                'department_id' => 2,
            ),
            array( // row #52
                'id' => 53,
                'name' => 'Guadalupe',
                'department_id' => 2,
            ),
            array( // row #53
                'id' => 54,
                'name' => 'Guarne',
                'department_id' => 2,
            ),
            array( // row #54
                'id' => 55,
                'name' => 'Guatap�',
                'department_id' => 2,
            ),
            array( // row #55
                'id' => 56,
                'name' => 'G�mez Plata',
                'department_id' => 2,
            ),
            array( // row #56
                'id' => 57,
                'name' => 'Heliconia',
                'department_id' => 2,
            ),
            array( // row #57
                'id' => 58,
                'name' => 'Hispania',
                'department_id' => 2,
            ),
            array( // row #58
                'id' => 59,
                'name' => 'Itag��',
                'department_id' => 2,
            ),
            array( // row #59
                'id' => 60,
                'name' => 'Ituango',
                'department_id' => 2,
            ),
            array( // row #60
                'id' => 61,
                'name' => 'Jard�n',
                'department_id' => 2,
            ),
            array( // row #61
                'id' => 62,
                'name' => 'Jeric�',
                'department_id' => 2,
            ),
            array( // row #62
                'id' => 63,
                'name' => 'La Ceja',
                'department_id' => 2,
            ),
            array( // row #63
                'id' => 64,
                'name' => 'La Estrella',
                'department_id' => 2,
            ),
            array( // row #64
                'id' => 65,
                'name' => 'La Pintada',
                'department_id' => 2,
            ),
            array( // row #65
                'id' => 66,
                'name' => 'La Uni�n',
                'department_id' => 2,
            ),
            array( // row #66
                'id' => 67,
                'name' => 'Liborina',
                'department_id' => 2,
            ),
            array( // row #67
                'id' => 68,
                'name' => 'Maceo',
                'department_id' => 2,
            ),
            array( // row #68
                'id' => 69,
                'name' => 'Marinilla',
                'department_id' => 2,
            ),
            array( // row #69
                'id' => 70,
                'name' => 'Medell�n',
                'department_id' => 2,
            ),
            array( // row #70
                'id' => 71,
                'name' => 'Montebello',
                'department_id' => 2,
            ),
            array( // row #71
                'id' => 72,
                'name' => 'Murind�',
                'department_id' => 2,
            ),
            array( // row #72
                'id' => 73,
                'name' => 'Mutat�',
                'department_id' => 2,
            ),
            array( // row #73
                'id' => 74,
                'name' => 'Nari�o',
                'department_id' => 2,
            ),
            array( // row #74
                'id' => 75,
                'name' => 'Nech�',
                'department_id' => 2,
            ),
            array( // row #75
                'id' => 76,
                'name' => 'Necocl�',
                'department_id' => 2,
            ),
            array( // row #76
                'id' => 77,
                'name' => 'Olaya',
                'department_id' => 2,
            ),
            array( // row #77
                'id' => 78,
                'name' => 'Peque',
                'department_id' => 2,
            ),
            array( // row #78
                'id' => 79,
                'name' => 'Pe�ol',
                'department_id' => 2,
            ),
            array( // row #79
                'id' => 80,
                'name' => 'Pueblorrico',
                'department_id' => 2,
            ),
            array( // row #80
                'id' => 81,
                'name' => 'Puerto Berr�o',
                'department_id' => 2,
            ),
            array( // row #81
                'id' => 82,
                'name' => 'Puerto Nare',
                'department_id' => 2,
            ),
            array( // row #82
                'id' => 83,
                'name' => 'Puerto Triunfo',
                'department_id' => 2,
            ),
            array( // row #83
                'id' => 84,
                'name' => 'Remedios',
                'department_id' => 2,
            ),
            array( // row #84
                'id' => 85,
                'name' => 'Retiro',
                'department_id' => 2,
            ),
            array( // row #85
                'id' => 86,
                'name' => 'R�onegro',
                'department_id' => 2,
            ),
            array( // row #86
                'id' => 87,
                'name' => 'Sabanalarga',
                'department_id' => 2,
            ),
            array( // row #87
                'id' => 88,
                'name' => 'Sabaneta',
                'department_id' => 2,
            ),
            array( // row #88
                'id' => 89,
                'name' => 'Salgar',
                'department_id' => 2,
            ),
            array( // row #89
                'id' => 90,
                'name' => 'San Andr�s de Cuerqu�a',
                'department_id' => 2,
            ),
            array( // row #90
                'id' => 91,
                'name' => 'San Carlos',
                'department_id' => 2,
            ),
            array( // row #91
                'id' => 92,
                'name' => 'San Francisco',
                'department_id' => 2,
            ),
            array( // row #92
                'id' => 93,
                'name' => 'San Jer�nimo',
                'department_id' => 2,
            ),
            array( // row #93
                'id' => 94,
                'name' => 'San Jos� de Monta�a',
                'department_id' => 2,
            ),
            array( // row #94
                'id' => 95,
                'name' => 'San Juan de Urab�',
                'department_id' => 2,
            ),
            array( // row #95
                'id' => 96,
                'name' => 'San Lu�s',
                'department_id' => 2,
            ),
            array( // row #96
                'id' => 97,
                'name' => 'San Pedro',
                'department_id' => 2,
            ),
            array( // row #97
                'id' => 98,
                'name' => 'San Pedro de Urab�',
                'department_id' => 2,
            ),
            array( // row #98
                'id' => 99,
                'name' => 'San Rafael',
                'department_id' => 2,
            ),
            array( // row #99
                'id' => 100,
                'name' => 'San Roque',
                'department_id' => 2,
            ),
            array( // row #100
                'id' => 101,
                'name' => 'San Vicente',
                'department_id' => 2,
            ),
            array( // row #101
                'id' => 102,
                'name' => 'Santa B�rbara',
                'department_id' => 2,
            ),
            array( // row #102
                'id' => 103,
                'name' => 'Santa F� de Antioquia',
                'department_id' => 2,
            ),
            array( // row #103
                'id' => 104,
                'name' => 'Santa Rosa de Osos',
                'department_id' => 2,
            ),
            array( // row #104
                'id' => 105,
                'name' => 'Santo Domingo',
                'department_id' => 2,
            ),
            array( // row #105
                'id' => 106,
                'name' => 'Santuario',
                'department_id' => 2,
            ),
            array( // row #106
                'id' => 107,
                'name' => 'Segovia',
                'department_id' => 2,
            ),
            array( // row #107
                'id' => 108,
                'name' => 'Sons�n',
                'department_id' => 2,
            ),
            array( // row #108
                'id' => 109,
                'name' => 'Sopetr�n',
                'department_id' => 2,
            ),
            array( // row #109
                'id' => 110,
                'name' => 'Taraz�',
                'department_id' => 2,
            ),
            array( // row #110
                'id' => 111,
                'name' => 'Tarso',
                'department_id' => 2,
            ),
            array( // row #111
                'id' => 112,
                'name' => 'Titirib�',
                'department_id' => 2,
            ),
            array( // row #112
                'id' => 113,
                'name' => 'Toledo',
                'department_id' => 2,
            ),
            array( // row #113
                'id' => 114,
                'name' => 'Turbo',
                'department_id' => 2,
            ),
            array( // row #114
                'id' => 115,
                'name' => 'T�mesis',
                'department_id' => 2,
            ),
            array( // row #115
                'id' => 116,
                'name' => 'Uramita',
                'department_id' => 2,
            ),
            array( // row #116
                'id' => 117,
                'name' => 'Urrao',
                'department_id' => 2,
            ),
            array( // row #117
                'id' => 118,
                'name' => 'Valdivia',
                'department_id' => 2,
            ),
            array( // row #118
                'id' => 119,
                'name' => 'Valparaiso',
                'department_id' => 2,
            ),
            array( // row #119
                'id' => 120,
                'name' => 'Vegach�',
                'department_id' => 2,
            ),
            array( // row #120
                'id' => 121,
                'name' => 'Venecia',
                'department_id' => 2,
            ),
            array( // row #121
                'id' => 122,
                'name' => 'Vig�a del Fuerte',
                'department_id' => 2,
            ),
            array( // row #122
                'id' => 123,
                'name' => 'Yal�',
                'department_id' => 2,
            ),
            array( // row #123
                'id' => 124,
                'name' => 'Yarumal',
                'department_id' => 2,
            ),
            array( // row #124
                'id' => 125,
                'name' => 'Yolomb�',
                'department_id' => 2,
            ),
            array( // row #125
                'id' => 126,
                'name' => 'Yond� (Casabe)',
                'department_id' => 2,
            ),
            array( // row #126
                'id' => 127,
                'name' => 'Zaragoza',
                'department_id' => 2,
            ),
            array( // row #127
                'id' => 128,
                'name' => 'Arauca',
                'department_id' => 3,
            ),
            array( // row #128
                'id' => 129,
                'name' => 'Arauquita',
                'department_id' => 3,
            ),
            array( // row #129
                'id' => 130,
                'name' => 'Cravo Norte',
                'department_id' => 3,
            ),
            array( // row #130
                'id' => 131,
                'name' => 'Fort�l',
                'department_id' => 3,
            ),
            array( // row #131
                'id' => 132,
                'name' => 'Puerto Rond�n',
                'department_id' => 3,
            ),
            array( // row #132
                'id' => 133,
                'name' => 'Saravena',
                'department_id' => 3,
            ),
            array( // row #133
                'id' => 134,
                'name' => 'Tame',
                'department_id' => 3,
            ),
            array( // row #134
                'id' => 135,
                'name' => 'Baranoa',
                'department_id' => 4,
            ),
            array( // row #135
                'id' => 136,
                'name' => 'Barranquilla',
                'department_id' => 4,
            ),
            array( // row #136
                'id' => 137,
                'name' => 'Campo de la Cruz',
                'department_id' => 4,
            ),
            array( // row #137
                'id' => 138,
                'name' => 'Candelaria',
                'department_id' => 4,
            ),
            array( // row #138
                'id' => 139,
                'name' => 'Galapa',
                'department_id' => 4,
            ),
            array( // row #139
                'id' => 140,
                'name' => 'Juan de Acosta',
                'department_id' => 4,
            ),
            array( // row #140
                'id' => 141,
                'name' => 'Luruaco',
                'department_id' => 4,
            ),
            array( // row #141
                'id' => 142,
                'name' => 'Malambo',
                'department_id' => 4,
            ),
            array( // row #142
                'id' => 143,
                'name' => 'Manat�',
                'department_id' => 4,
            ),
            array( // row #143
                'id' => 144,
                'name' => 'Palmar de Varela',
                'department_id' => 4,
            ),
            array( // row #144
                'id' => 145,
                'name' => 'Piojo',
                'department_id' => 4,
            ),
            array( // row #145
                'id' => 146,
                'name' => 'Polonuevo',
                'department_id' => 4,
            ),
            array( // row #146
                'id' => 147,
                'name' => 'Ponedera',
                'department_id' => 4,
            ),
            array( // row #147
                'id' => 148,
                'name' => 'Puerto Colombia',
                'department_id' => 4,
            ),
            array( // row #148
                'id' => 149,
                'name' => 'Repel�n',
                'department_id' => 4,
            ),
            array( // row #149
                'id' => 150,
                'name' => 'Sabanagrande',
                'department_id' => 4,
            ),
            array( // row #150
                'id' => 151,
                'name' => 'Sabanalarga',
                'department_id' => 4,
            ),
            array( // row #151
                'id' => 152,
                'name' => 'Santa Luc�a',
                'department_id' => 4,
            ),
            array( // row #152
                'id' => 153,
                'name' => 'Santo Tom�s',
                'department_id' => 4,
            ),
            array( // row #153
                'id' => 154,
                'name' => 'Soledad',
                'department_id' => 4,
            ),
            array( // row #154
                'id' => 155,
                'name' => 'Suan',
                'department_id' => 4,
            ),
            array( // row #155
                'id' => 156,
                'name' => 'Tubar�',
                'department_id' => 4,
            ),
            array( // row #156
                'id' => 157,
                'name' => 'Usiacuri',
                'department_id' => 4,
            ),
            array( // row #157
                'id' => 158,
                'name' => 'Ach�',
                'department_id' => 5,
            ),
            array( // row #158
                'id' => 159,
                'name' => 'Altos del Rosario',
                'department_id' => 5,
            ),
            array( // row #159
                'id' => 160,
                'name' => 'Arenal',
                'department_id' => 5,
            ),
            array( // row #160
                'id' => 161,
                'name' => 'Arjona',
                'department_id' => 5,
            ),
            array( // row #161
                'id' => 162,
                'name' => 'Arroyohondo',
                'department_id' => 5,
            ),
            array( // row #162
                'id' => 163,
                'name' => 'Barranco de Loba',
                'department_id' => 5,
            ),
            array( // row #163
                'id' => 164,
                'name' => 'Calamar',
                'department_id' => 5,
            ),
            array( // row #164
                'id' => 165,
                'name' => 'Cantagallo',
                'department_id' => 5,
            ),
            array( // row #165
                'id' => 166,
                'name' => 'Cartagena',
                'department_id' => 5,
            ),
            array( // row #166
                'id' => 167,
                'name' => 'Cicuco',
                'department_id' => 5,
            ),
            array( // row #167
                'id' => 168,
                'name' => 'Clemencia',
                'department_id' => 5,
            ),
            array( // row #168
                'id' => 169,
                'name' => 'C�rdoba',
                'department_id' => 5,
            ),
            array( // row #169
                'id' => 170,
                'name' => 'El Carmen de Bol�var',
                'department_id' => 5,
            ),
            array( // row #170
                'id' => 171,
                'name' => 'El Guamo',
                'department_id' => 5,
            ),
            array( // row #171
                'id' => 172,
                'name' => 'El Pe�on',
                'department_id' => 5,
            ),
            array( // row #172
                'id' => 173,
                'name' => 'Hatillo de Loba',
                'department_id' => 5,
            ),
            array( // row #173
                'id' => 174,
                'name' => 'Magangu�',
                'department_id' => 5,
            ),
            array( // row #174
                'id' => 175,
                'name' => 'Mahates',
                'department_id' => 5,
            ),
            array( // row #175
                'id' => 176,
                'name' => 'Margarita',
                'department_id' => 5,
            ),
            array( // row #176
                'id' => 177,
                'name' => 'Mar�a la Baja',
                'department_id' => 5,
            ),
            array( // row #177
                'id' => 178,
                'name' => 'Momp�s',
                'department_id' => 5,
            ),
            array( // row #178
                'id' => 179,
                'name' => 'Montecristo',
                'department_id' => 5,
            ),
            array( // row #179
                'id' => 180,
                'name' => 'Morales',
                'department_id' => 5,
            ),
            array( // row #180
                'id' => 181,
                'name' => 'Noros�',
                'department_id' => 5,
            ),
            array( // row #181
                'id' => 182,
                'name' => 'Pinillos',
                'department_id' => 5,
            ),
            array( // row #182
                'id' => 183,
                'name' => 'Regidor',
                'department_id' => 5,
            ),
            array( // row #183
                'id' => 184,
                'name' => 'R�o Viejo',
                'department_id' => 5,
            ),
            array( // row #184
                'id' => 185,
                'name' => 'San Cristobal',
                'department_id' => 5,
            ),
            array( // row #185
                'id' => 186,
                'name' => 'San Estanislao',
                'department_id' => 5,
            ),
            array( // row #186
                'id' => 187,
                'name' => 'San Fernando',
                'department_id' => 5,
            ),
            array( // row #187
                'id' => 188,
                'name' => 'San Jacinto',
                'department_id' => 5,
            ),
            array( // row #188
                'id' => 189,
                'name' => 'San Jacinto del Cauca',
                'department_id' => 5,
            ),
            array( // row #189
                'id' => 190,
                'name' => 'San Juan de Nepomuceno',
                'department_id' => 5,
            ),
            array( // row #190
                'id' => 191,
                'name' => 'San Mart�n de Loba',
                'department_id' => 5,
            ),
            array( // row #191
                'id' => 192,
                'name' => 'San Pablo',
                'department_id' => 5,
            ),
            array( // row #192
                'id' => 193,
                'name' => 'Santa Catalina',
                'department_id' => 5,
            ),
            array( // row #193
                'id' => 194,
                'name' => 'Santa Rosa ',
                'department_id' => 5,
            ),
            array( // row #194
                'id' => 195,
                'name' => 'Santa Rosa del Sur',
                'department_id' => 5,
            ),
            array( // row #195
                'id' => 196,
                'name' => 'Simit�',
                'department_id' => 5,
            ),
            array( // row #196
                'id' => 197,
                'name' => 'Soplaviento',
                'department_id' => 5,
            ),
            array( // row #197
                'id' => 198,
                'name' => 'Talaigua Nuevo',
                'department_id' => 5,
            ),
            array( // row #198
                'id' => 199,
                'name' => 'Tiquisio (Puerto Rico)',
                'department_id' => 5,
            ),
            array( // row #199
                'id' => 200,
                'name' => 'Turbaco',
                'department_id' => 5,
            ),
            array( // row #200
                'id' => 201,
                'name' => 'Turban�',
                'department_id' => 5,
            ),
            array( // row #201
                'id' => 202,
                'name' => 'Villanueva',
                'department_id' => 5,
            ),
            array( // row #202
                'id' => 203,
                'name' => 'Zambrano',
                'department_id' => 5,
            ),
            array( // row #203
                'id' => 204,
                'name' => 'Almeida',
                'department_id' => 6,
            ),
            array( // row #204
                'id' => 205,
                'name' => 'Aquitania',
                'department_id' => 6,
            ),
            array( // row #205
                'id' => 206,
                'name' => 'Arcabuco',
                'department_id' => 6,
            ),
            array( // row #206
                'id' => 207,
                'name' => 'Bel�n',
                'department_id' => 6,
            ),
            array( // row #207
                'id' => 208,
                'name' => 'Berbeo',
                'department_id' => 6,
            ),
            array( // row #208
                'id' => 209,
                'name' => 'Beteitiva',
                'department_id' => 6,
            ),
            array( // row #209
                'id' => 210,
                'name' => 'Boavita',
                'department_id' => 6,
            ),
            array( // row #210
                'id' => 211,
                'name' => 'Boyac�',
                'department_id' => 6,
            ),
            array( // row #211
                'id' => 212,
                'name' => 'Brice�o',
                'department_id' => 6,
            ),
            array( // row #212
                'id' => 213,
                'name' => 'Buenavista',
                'department_id' => 6,
            ),
            array( // row #213
                'id' => 214,
                'name' => 'Busbanza',
                'department_id' => 6,
            ),
            array( // row #214
                'id' => 215,
                'name' => 'Caldas',
                'department_id' => 6,
            ),
            array( // row #215
                'id' => 216,
                'name' => 'Campohermoso',
                'department_id' => 6,
            ),
            array( // row #216
                'id' => 217,
                'name' => 'Cerinza',
                'department_id' => 6,
            ),
            array( // row #217
                'id' => 218,
                'name' => 'Chinavita',
                'department_id' => 6,
            ),
            array( // row #218
                'id' => 219,
                'name' => 'Chiquinquir�',
                'department_id' => 6,
            ),
            array( // row #219
                'id' => 220,
                'name' => 'Chiscas',
                'department_id' => 6,
            ),
            array( // row #220
                'id' => 221,
                'name' => 'Chita',
                'department_id' => 6,
            ),
            array( // row #221
                'id' => 222,
                'name' => 'Chitaraque',
                'department_id' => 6,
            ),
            array( // row #222
                'id' => 223,
                'name' => 'Chivat�',
                'department_id' => 6,
            ),
            array( // row #223
                'id' => 224,
                'name' => 'Ch�quiza',
                'department_id' => 6,
            ),
            array( // row #224
                'id' => 225,
                'name' => 'Ch�vor',
                'department_id' => 6,
            ),
            array( // row #225
                'id' => 226,
                'name' => 'Ci�naga',
                'department_id' => 6,
            ),
            array( // row #226
                'id' => 227,
                'name' => 'Coper',
                'department_id' => 6,
            ),
            array( // row #227
                'id' => 228,
                'name' => 'Corrales',
                'department_id' => 6,
            ),
            array( // row #228
                'id' => 229,
                'name' => 'Covarach�a',
                'department_id' => 6,
            ),
            array( // row #229
                'id' => 230,
                'name' => 'Cubar�',
                'department_id' => 6,
            ),
            array( // row #230
                'id' => 231,
                'name' => 'Cucaita',
                'department_id' => 6,
            ),
            array( // row #231
                'id' => 232,
                'name' => 'Cuitiva',
                'department_id' => 6,
            ),
            array( // row #232
                'id' => 233,
                'name' => 'C�mbita',
                'department_id' => 6,
            ),
            array( // row #233
                'id' => 234,
                'name' => 'Duitama',
                'department_id' => 6,
            ),
            array( // row #234
                'id' => 235,
                'name' => 'El Cocuy',
                'department_id' => 6,
            ),
            array( // row #235
                'id' => 236,
                'name' => 'El Espino',
                'department_id' => 6,
            ),
            array( // row #236
                'id' => 237,
                'name' => 'Firavitoba',
                'department_id' => 6,
            ),
            array( // row #237
                'id' => 238,
                'name' => 'Floresta',
                'department_id' => 6,
            ),
            array( // row #238
                'id' => 239,
                'name' => 'Gachantiv�',
                'department_id' => 6,
            ),
            array( // row #239
                'id' => 240,
                'name' => 'Garagoa',
                'department_id' => 6,
            ),
            array( // row #240
                'id' => 241,
                'name' => 'Guacamayas',
                'department_id' => 6,
            ),
            array( // row #241
                'id' => 242,
                'name' => 'Guateque',
                'department_id' => 6,
            ),
            array( // row #242
                'id' => 243,
                'name' => 'Guayat�',
                'department_id' => 6,
            ),
            array( // row #243
                'id' => 244,
                'name' => 'Guic�n',
                'department_id' => 6,
            ),
            array( // row #244
                'id' => 245,
                'name' => 'G�meza',
                'department_id' => 6,
            ),
            array( // row #245
                'id' => 246,
                'name' => 'Iz�',
                'department_id' => 6,
            ),
            array( // row #246
                'id' => 247,
                'name' => 'Jenesano',
                'department_id' => 6,
            ),
            array( // row #247
                'id' => 248,
                'name' => 'Jeric�',
                'department_id' => 6,
            ),
            array( // row #248
                'id' => 249,
                'name' => 'La Capilla',
                'department_id' => 6,
            ),
            array( // row #249
                'id' => 250,
                'name' => 'La Uvita',
                'department_id' => 6,
            ),
            array( // row #250
                'id' => 251,
                'name' => 'La Victoria',
                'department_id' => 6,
            ),
            array( // row #251
                'id' => 252,
                'name' => 'Labranzagrande',
                'department_id' => 6,
            ),
            array( // row #252
                'id' => 253,
                'name' => 'Macanal',
                'department_id' => 6,
            ),
            array( // row #253
                'id' => 254,
                'name' => 'Marip�',
                'department_id' => 6,
            ),
            array( // row #254
                'id' => 255,
                'name' => 'Miraflores',
                'department_id' => 6,
            ),
            array( // row #255
                'id' => 256,
                'name' => 'Mongua',
                'department_id' => 6,
            ),
            array( // row #256
                'id' => 257,
                'name' => 'Mongu�',
                'department_id' => 6,
            ),
            array( // row #257
                'id' => 258,
                'name' => 'Moniquir�',
                'department_id' => 6,
            ),
            array( // row #258
                'id' => 259,
                'name' => 'Motavita',
                'department_id' => 6,
            ),
            array( // row #259
                'id' => 260,
                'name' => 'Muzo',
                'department_id' => 6,
            ),
            array( // row #260
                'id' => 261,
                'name' => 'Nobsa',
                'department_id' => 6,
            ),
            array( // row #261
                'id' => 262,
                'name' => 'Nuevo Col�n',
                'department_id' => 6,
            ),
            array( // row #262
                'id' => 263,
                'name' => 'Oicat�',
                'department_id' => 6,
            ),
            array( // row #263
                'id' => 264,
                'name' => 'Otanche',
                'department_id' => 6,
            ),
            array( // row #264
                'id' => 265,
                'name' => 'Pachavita',
                'department_id' => 6,
            ),
            array( // row #265
                'id' => 266,
                'name' => 'Paipa',
                'department_id' => 6,
            ),
            array( // row #266
                'id' => 267,
                'name' => 'Pajarito',
                'department_id' => 6,
            ),
            array( // row #267
                'id' => 268,
                'name' => 'Panqueba',
                'department_id' => 6,
            ),
            array( // row #268
                'id' => 269,
                'name' => 'Pauna',
                'department_id' => 6,
            ),
            array( // row #269
                'id' => 270,
                'name' => 'Paya',
                'department_id' => 6,
            ),
            array( // row #270
                'id' => 271,
                'name' => 'Paz de R�o',
                'department_id' => 6,
            ),
            array( // row #271
                'id' => 272,
                'name' => 'Pesca',
                'department_id' => 6,
            ),
            array( // row #272
                'id' => 273,
                'name' => 'Pisva',
                'department_id' => 6,
            ),
            array( // row #273
                'id' => 274,
                'name' => 'Puerto Boyac�',
                'department_id' => 6,
            ),
            array( // row #274
                'id' => 275,
                'name' => 'P�ez',
                'department_id' => 6,
            ),
            array( // row #275
                'id' => 276,
                'name' => 'Quipama',
                'department_id' => 6,
            ),
            array( // row #276
                'id' => 277,
                'name' => 'Ramiriqu�',
                'department_id' => 6,
            ),
            array( // row #277
                'id' => 278,
                'name' => 'Rond�n',
                'department_id' => 6,
            ),
            array( // row #278
                'id' => 279,
                'name' => 'R�quira',
                'department_id' => 6,
            ),
            array( // row #279
                'id' => 280,
                'name' => 'Saboy�',
                'department_id' => 6,
            ),
            array( // row #280
                'id' => 281,
                'name' => 'Samac�',
                'department_id' => 6,
            ),
            array( // row #281
                'id' => 282,
                'name' => 'San Eduardo',
                'department_id' => 6,
            ),
            array( // row #282
                'id' => 283,
                'name' => 'San Jos� de Pare',
                'department_id' => 6,
            ),
            array( // row #283
                'id' => 284,
                'name' => 'San Lu�s de Gaceno',
                'department_id' => 6,
            ),
            array( // row #284
                'id' => 285,
                'name' => 'San Mateo',
                'department_id' => 6,
            ),
            array( // row #285
                'id' => 286,
                'name' => 'San Miguel de Sema',
                'department_id' => 6,
            ),
            array( // row #286
                'id' => 287,
                'name' => 'San Pablo de Borbur',
                'department_id' => 6,
            ),
            array( // row #287
                'id' => 288,
                'name' => 'Santa Mar�a',
                'department_id' => 6,
            ),
            array( // row #288
                'id' => 289,
                'name' => 'Santa Rosa de Viterbo',
                'department_id' => 6,
            ),
            array( // row #289
                'id' => 290,
                'name' => 'Santa Sof�a',
                'department_id' => 6,
            ),
            array( // row #290
                'id' => 291,
                'name' => 'Santana',
                'department_id' => 6,
            ),
            array( // row #291
                'id' => 292,
                'name' => 'Sativanorte',
                'department_id' => 6,
            ),
            array( // row #292
                'id' => 293,
                'name' => 'Sativasur',
                'department_id' => 6,
            ),
            array( // row #293
                'id' => 294,
                'name' => 'Siachoque',
                'department_id' => 6,
            ),
            array( // row #294
                'id' => 295,
                'name' => 'Soat�',
                'department_id' => 6,
            ),
            array( // row #295
                'id' => 296,
                'name' => 'Socha',
                'department_id' => 6,
            ),
            array( // row #296
                'id' => 297,
                'name' => 'Socot�',
                'department_id' => 6,
            ),
            array( // row #297
                'id' => 298,
                'name' => 'Sogamoso',
                'department_id' => 6,
            ),
            array( // row #298
                'id' => 299,
                'name' => 'Somondoco',
                'department_id' => 6,
            ),
            array( // row #299
                'id' => 300,
                'name' => 'Sora',
                'department_id' => 6,
            ),
            array( // row #300
                'id' => 301,
                'name' => 'Sorac�',
                'department_id' => 6,
            ),
            array( // row #301
                'id' => 302,
                'name' => 'Sotaquir�',
                'department_id' => 6,
            ),
            array( // row #302
                'id' => 303,
                'name' => 'Susac�n',
                'department_id' => 6,
            ),
            array( // row #303
                'id' => 304,
                'name' => 'Sutamarch�n',
                'department_id' => 6,
            ),
            array( // row #304
                'id' => 305,
                'name' => 'Sutatenza',
                'department_id' => 6,
            ),
            array( // row #305
                'id' => 306,
                'name' => 'S�chica',
                'department_id' => 6,
            ),
            array( // row #306
                'id' => 307,
                'name' => 'Tasco',
                'department_id' => 6,
            ),
            array( // row #307
                'id' => 308,
                'name' => 'Tenza',
                'department_id' => 6,
            ),
            array( // row #308
                'id' => 309,
                'name' => 'Tiban�',
                'department_id' => 6,
            ),
            array( // row #309
                'id' => 310,
                'name' => 'Tibasosa',
                'department_id' => 6,
            ),
            array( // row #310
                'id' => 311,
                'name' => 'Tinjac�',
                'department_id' => 6,
            ),
            array( // row #311
                'id' => 312,
                'name' => 'Tipacoque',
                'department_id' => 6,
            ),
            array( // row #312
                'id' => 313,
                'name' => 'Toca',
                'department_id' => 6,
            ),
            array( // row #313
                'id' => 314,
                'name' => 'Togu�',
                'department_id' => 6,
            ),
            array( // row #314
                'id' => 315,
                'name' => 'Topag�',
                'department_id' => 6,
            ),
            array( // row #315
                'id' => 316,
                'name' => 'Tota',
                'department_id' => 6,
            ),
            array( // row #316
                'id' => 317,
                'name' => 'Tunja',
                'department_id' => 6,
            ),
            array( // row #317
                'id' => 318,
                'name' => 'Tunungua',
                'department_id' => 6,
            ),
            array( // row #318
                'id' => 319,
                'name' => 'Turmequ�',
                'department_id' => 6,
            ),
            array( // row #319
                'id' => 320,
                'name' => 'Tuta',
                'department_id' => 6,
            ),
            array( // row #320
                'id' => 321,
                'name' => 'Tutas�',
                'department_id' => 6,
            ),
            array( // row #321
                'id' => 322,
                'name' => 'Ventaquemada',
                'department_id' => 6,
            ),
            array( // row #322
                'id' => 323,
                'name' => 'Villa de Leiva',
                'department_id' => 6,
            ),
            array( // row #323
                'id' => 324,
                'name' => 'Viracach�',
                'department_id' => 6,
            ),
            array( // row #324
                'id' => 325,
                'name' => 'Zetaquir�',
                'department_id' => 6,
            ),
            array( // row #325
                'id' => 326,
                'name' => '�mbita',
                'department_id' => 6,
            ),
            array( // row #326
                'id' => 327,
                'name' => 'Aguadas',
                'department_id' => 7,
            ),
            array( // row #327
                'id' => 328,
                'name' => 'Anserma',
                'department_id' => 7,
            ),
            array( // row #328
                'id' => 329,
                'name' => 'Aranzazu',
                'department_id' => 7,
            ),
            array( // row #329
                'id' => 330,
                'name' => 'Belalc�zar',
                'department_id' => 7,
            ),
            array( // row #330
                'id' => 331,
                'name' => 'Chinchin�',
                'department_id' => 7,
            ),
            array( // row #331
                'id' => 332,
                'name' => 'Filadelfia',
                'department_id' => 7,
            ),
            array( // row #332
                'id' => 333,
                'name' => 'La Dorada',
                'department_id' => 7,
            ),
            array( // row #333
                'id' => 334,
                'name' => 'La Merced',
                'department_id' => 7,
            ),
            array( // row #334
                'id' => 335,
                'name' => 'La Victoria',
                'department_id' => 7,
            ),
            array( // row #335
                'id' => 336,
                'name' => 'Manizales',
                'department_id' => 7,
            ),
            array( // row #336
                'id' => 337,
                'name' => 'Manzanares',
                'department_id' => 7,
            ),
            array( // row #337
                'id' => 338,
                'name' => 'Marmato',
                'department_id' => 7,
            ),
            array( // row #338
                'id' => 339,
                'name' => 'Marquetalia',
                'department_id' => 7,
            ),
            array( // row #339
                'id' => 340,
                'name' => 'Marulanda',
                'department_id' => 7,
            ),
            array( // row #340
                'id' => 341,
                'name' => 'Neira',
                'department_id' => 7,
            ),
            array( // row #341
                'id' => 342,
                'name' => 'Norcasia',
                'department_id' => 7,
            ),
            array( // row #342
                'id' => 343,
                'name' => 'Palestina',
                'department_id' => 7,
            ),
            array( // row #343
                'id' => 344,
                'name' => 'Pensilvania',
                'department_id' => 7,
            ),
            array( // row #344
                'id' => 345,
                'name' => 'P�cora',
                'department_id' => 7,
            ),
            array( // row #345
                'id' => 346,
                'name' => 'Risaralda',
                'department_id' => 7,
            ),
            array( // row #346
                'id' => 347,
                'name' => 'R�o Sucio',
                'department_id' => 7,
            ),
            array( // row #347
                'id' => 348,
                'name' => 'Salamina',
                'department_id' => 7,
            ),
            array( // row #348
                'id' => 349,
                'name' => 'Saman�',
                'department_id' => 7,
            ),
            array( // row #349
                'id' => 350,
                'name' => 'San Jos�',
                'department_id' => 7,
            ),
            array( // row #350
                'id' => 351,
                'name' => 'Sup�a',
                'department_id' => 7,
            ),
            array( // row #351
                'id' => 352,
                'name' => 'Villamar�a',
                'department_id' => 7,
            ),
            array( // row #352
                'id' => 353,
                'name' => 'Viterbo',
                'department_id' => 7,
            ),
            array( // row #353
                'id' => 354,
                'name' => 'Albania',
                'department_id' => 8,
            ),
            array( // row #354
                'id' => 355,
                'name' => 'Bel�n de los Andaqu�es',
                'department_id' => 8,
            ),
            array( // row #355
                'id' => 356,
                'name' => 'Cartagena del Chair�',
                'department_id' => 8,
            ),
            array( // row #356
                'id' => 357,
                'name' => 'Curillo',
                'department_id' => 8,
            ),
            array( // row #357
                'id' => 358,
                'name' => 'El Doncello',
                'department_id' => 8,
            ),
            array( // row #358
                'id' => 359,
                'name' => 'El Paujil',
                'department_id' => 8,
            ),
            array( // row #359
                'id' => 360,
                'name' => 'Florencia',
                'department_id' => 8,
            ),
            array( // row #360
                'id' => 361,
                'name' => 'La Monta�ita',
                'department_id' => 8,
            ),
            array( // row #361
                'id' => 362,
                'name' => 'Mil�n',
                'department_id' => 8,
            ),
            array( // row #362
                'id' => 363,
                'name' => 'Morelia',
                'department_id' => 8,
            ),
            array( // row #363
                'id' => 364,
                'name' => 'Puerto Rico',
                'department_id' => 8,
            ),
            array( // row #364
                'id' => 365,
                'name' => 'San Jos� del Fragua',
                'department_id' => 8,
            ),
            array( // row #365
                'id' => 366,
                'name' => 'San Vicente del Cagu�n',
                'department_id' => 8,
            ),
            array( // row #366
                'id' => 367,
                'name' => 'Solano',
                'department_id' => 8,
            ),
            array( // row #367
                'id' => 368,
                'name' => 'Solita',
                'department_id' => 8,
            ),
            array( // row #368
                'id' => 369,
                'name' => 'Valparaiso',
                'department_id' => 8,
            ),
            array( // row #369
                'id' => 370,
                'name' => 'Aguazul',
                'department_id' => 9,
            ),
            array( // row #370
                'id' => 371,
                'name' => 'Ch�meza',
                'department_id' => 9,
            ),
            array( // row #371
                'id' => 372,
                'name' => 'Hato Corozal',
                'department_id' => 9,
            ),
            array( // row #372
                'id' => 373,
                'name' => 'La Salina',
                'department_id' => 9,
            ),
            array( // row #373
                'id' => 374,
                'name' => 'Man�',
                'department_id' => 9,
            ),
            array( // row #374
                'id' => 375,
                'name' => 'Monterrey',
                'department_id' => 9,
            ),
            array( // row #375
                'id' => 376,
                'name' => 'Nunch�a',
                'department_id' => 9,
            ),
            array( // row #376
                'id' => 377,
                'name' => 'Orocu�',
                'department_id' => 9,
            ),
            array( // row #377
                'id' => 378,
                'name' => 'Paz de Ariporo',
                'department_id' => 9,
            ),
            array( // row #378
                'id' => 379,
                'name' => 'Pore',
                'department_id' => 9,
            ),
            array( // row #379
                'id' => 380,
                'name' => 'Recetor',
                'department_id' => 9,
            ),
            array( // row #380
                'id' => 381,
                'name' => 'Sabanalarga',
                'department_id' => 9,
            ),
            array( // row #381
                'id' => 382,
                'name' => 'San Lu�s de Palenque',
                'department_id' => 9,
            ),
            array( // row #382
                'id' => 383,
                'name' => 'S�cama',
                'department_id' => 9,
            ),
            array( // row #383
                'id' => 384,
                'name' => 'Tauramena',
                'department_id' => 9,
            ),
            array( // row #384
                'id' => 385,
                'name' => 'Trinidad',
                'department_id' => 9,
            ),
            array( // row #385
                'id' => 386,
                'name' => 'T�mara',
                'department_id' => 9,
            ),
            array( // row #386
                'id' => 387,
                'name' => 'Villanueva',
                'department_id' => 9,
            ),
            array( // row #387
                'id' => 388,
                'name' => 'Yopal',
                'department_id' => 9,
            ),
            array( // row #388
                'id' => 389,
                'name' => 'Almaguer',
                'department_id' => 10,
            ),
            array( // row #389
                'id' => 390,
                'name' => 'Argelia',
                'department_id' => 10,
            ),
            array( // row #390
                'id' => 391,
                'name' => 'Balboa',
                'department_id' => 10,
            ),
            array( // row #391
                'id' => 392,
                'name' => 'Bol�var',
                'department_id' => 10,
            ),
            array( // row #392
                'id' => 393,
                'name' => 'Buenos Aires',
                'department_id' => 10,
            ),
            array( // row #393
                'id' => 394,
                'name' => 'Cajib�o',
                'department_id' => 10,
            ),
            array( // row #394
                'id' => 395,
                'name' => 'Caldono',
                'department_id' => 10,
            ),
            array( // row #395
                'id' => 396,
                'name' => 'Caloto',
                'department_id' => 10,
            ),
            array( // row #396
                'id' => 397,
                'name' => 'Corinto',
                'department_id' => 10,
            ),
            array( // row #397
                'id' => 398,
                'name' => 'El Tambo',
                'department_id' => 10,
            ),
            array( // row #398
                'id' => 399,
                'name' => 'Florencia',
                'department_id' => 10,
            ),
            array( // row #399
                'id' => 400,
                'name' => 'Guachen�',
                'department_id' => 10,
            ),
            array( // row #400
                'id' => 401,
                'name' => 'Guap�',
                'department_id' => 10,
            ),
            array( // row #401
                'id' => 402,
                'name' => 'Inz�',
                'department_id' => 10,
            ),
            array( // row #402
                'id' => 403,
                'name' => 'Jambal�',
                'department_id' => 10,
            ),
            array( // row #403
                'id' => 404,
                'name' => 'La Sierra',
                'department_id' => 10,
            ),
            array( // row #404
                'id' => 405,
                'name' => 'La Vega',
                'department_id' => 10,
            ),
            array( // row #405
                'id' => 406,
                'name' => 'L�pez (Micay)',
                'department_id' => 10,
            ),
            array( // row #406
                'id' => 407,
                'name' => 'Mercaderes',
                'department_id' => 10,
            ),
            array( // row #407
                'id' => 408,
                'name' => 'Miranda',
                'department_id' => 10,
            ),
            array( // row #408
                'id' => 409,
                'name' => 'Morales',
                'department_id' => 10,
            ),
            array( // row #409
                'id' => 410,
                'name' => 'Padilla',
                'department_id' => 10,
            ),
            array( // row #410
                'id' => 411,
                'name' => 'Pat�a (El Bordo)',
                'department_id' => 10,
            ),
            array( // row #411
                'id' => 412,
                'name' => 'Piamonte',
                'department_id' => 10,
            ),
            array( // row #412
                'id' => 413,
                'name' => 'Piendam�',
                'department_id' => 10,
            ),
            array( // row #413
                'id' => 414,
                'name' => 'Popay�n',
                'department_id' => 10,
            ),
            array( // row #414
                'id' => 415,
                'name' => 'Puerto Tejada',
                'department_id' => 10,
            ),
            array( // row #415
                'id' => 416,
                'name' => 'Purac� (Coconuco)',
                'department_id' => 10,
            ),
            array( // row #416
                'id' => 417,
                'name' => 'P�ez (Belalcazar)',
                'department_id' => 10,
            ),
            array( // row #417
                'id' => 418,
                'name' => 'Rosas',
                'department_id' => 10,
            ),
            array( // row #418
                'id' => 419,
                'name' => 'San Sebasti�n',
                'department_id' => 10,
            ),
            array( // row #419
                'id' => 420,
                'name' => 'Santa Rosa',
                'department_id' => 10,
            ),
            array( // row #420
                'id' => 421,
                'name' => 'Santander de Quilichao',
                'department_id' => 10,
            ),
            array( // row #421
                'id' => 422,
                'name' => 'Silvia',
                'department_id' => 10,
            ),
            array( // row #422
                'id' => 423,
                'name' => 'Sotara (Paispamba)',
                'department_id' => 10,
            ),
            array( // row #423
                'id' => 424,
                'name' => 'Sucre',
                'department_id' => 10,
            ),
            array( // row #424
                'id' => 425,
                'name' => 'Su�rez',
                'department_id' => 10,
            ),
            array( // row #425
                'id' => 426,
                'name' => 'Timbiqu�',
                'department_id' => 10,
            ),
            array( // row #426
                'id' => 427,
                'name' => 'Timb�o',
                'department_id' => 10,
            ),
            array( // row #427
                'id' => 428,
                'name' => 'Torib�o',
                'department_id' => 10,
            ),
            array( // row #428
                'id' => 429,
                'name' => 'Totor�',
                'department_id' => 10,
            ),
            array( // row #429
                'id' => 430,
                'name' => 'Villa Rica',
                'department_id' => 10,
            ),
            array( // row #430
                'id' => 431,
                'name' => 'Aguachica',
                'department_id' => 11,
            ),
            array( // row #431
                'id' => 432,
                'name' => 'Agust�n Codazzi',
                'department_id' => 11,
            ),
            array( // row #432
                'id' => 433,
                'name' => 'Astrea',
                'department_id' => 11,
            ),
            array( // row #433
                'id' => 434,
                'name' => 'Becerr�l',
                'department_id' => 11,
            ),
            array( // row #434
                'id' => 435,
                'name' => 'Bosconia',
                'department_id' => 11,
            ),
            array( // row #435
                'id' => 436,
                'name' => 'Chimichagua',
                'department_id' => 11,
            ),
            array( // row #436
                'id' => 437,
                'name' => 'Chiriguan�',
                'department_id' => 11,
            ),
            array( // row #437
                'id' => 438,
                'name' => 'Curuman�',
                'department_id' => 11,
            ),
            array( // row #438
                'id' => 439,
                'name' => 'El Copey',
                'department_id' => 11,
            ),
            array( // row #439
                'id' => 440,
                'name' => 'El Paso',
                'department_id' => 11,
            ),
            array( // row #440
                'id' => 441,
                'name' => 'Gamarra',
                'department_id' => 11,
            ),
            array( // row #441
                'id' => 442,
                'name' => 'Gonzalez',
                'department_id' => 11,
            ),
            array( // row #442
                'id' => 443,
                'name' => 'La Gloria',
                'department_id' => 11,
            ),
            array( // row #443
                'id' => 444,
                'name' => 'La Jagua de Ibirico',
                'department_id' => 11,
            ),
            array( // row #444
                'id' => 445,
                'name' => 'La Paz (Robles)',
                'department_id' => 11,
            ),
            array( // row #445
                'id' => 446,
                'name' => 'Manaure Balc�n del Cesar',
                'department_id' => 11,
            ),
            array( // row #446
                'id' => 447,
                'name' => 'Pailitas',
                'department_id' => 11,
            ),
            array( // row #447
                'id' => 448,
                'name' => 'Pelaya',
                'department_id' => 11,
            ),
            array( // row #448
                'id' => 449,
                'name' => 'Pueblo Bello',
                'department_id' => 11,
            ),
            array( // row #449
                'id' => 450,
                'name' => 'R�o de oro',
                'department_id' => 11,
            ),
            array( // row #450
                'id' => 451,
                'name' => 'San Alberto',
                'department_id' => 11,
            ),
            array( // row #451
                'id' => 452,
                'name' => 'San Diego',
                'department_id' => 11,
            ),
            array( // row #452
                'id' => 453,
                'name' => 'San Mart�n',
                'department_id' => 11,
            ),
            array( // row #453
                'id' => 454,
                'name' => 'Tamalameque',
                'department_id' => 11,
            ),
            array( // row #454
                'id' => 455,
                'name' => 'Valledupar',
                'department_id' => 11,
            ),
            array( // row #455
                'id' => 456,
                'name' => 'Acand�',
                'department_id' => 12,
            ),
            array( // row #456
                'id' => 457,
                'name' => 'Alto Baud� (Pie de Pato)',
                'department_id' => 12,
            ),
            array( // row #457
                'id' => 458,
                'name' => 'Atrato (Yuto)',
                'department_id' => 12,
            ),
            array( // row #458
                'id' => 459,
                'name' => 'Bagad�',
                'department_id' => 12,
            ),
            array( // row #459
                'id' => 460,
                'name' => 'Bah�a Solano (M�tis)',
                'department_id' => 12,
            ),
            array( // row #460
                'id' => 461,
                'name' => 'Bajo Baud� (Pizarro)',
                'department_id' => 12,
            ),
            array( // row #461
                'id' => 462,
                'name' => 'Bel�n de Bajir�',
                'department_id' => 12,
            ),
            array( // row #462
                'id' => 463,
                'name' => 'Bojay� (Bellavista)',
                'department_id' => 12,
            ),
            array( // row #463
                'id' => 464,
                'name' => 'Cant�n de San Pablo',
                'department_id' => 12,
            ),
            array( // row #464
                'id' => 465,
                'name' => 'Carmen del Dari�n (CURBARAD�)',
                'department_id' => 12,
            ),
            array( // row #465
                'id' => 466,
                'name' => 'Condoto',
                'department_id' => 12,
            ),
            array( // row #466
                'id' => 467,
                'name' => 'C�rtegui',
                'department_id' => 12,
            ),
            array( // row #467
                'id' => 468,
                'name' => 'El Carmen de Atrato',
                'department_id' => 12,
            ),
            array( // row #468
                'id' => 469,
                'name' => 'Istmina',
                'department_id' => 12,
            ),
            array( // row #469
                'id' => 470,
                'name' => 'Jurad�',
                'department_id' => 12,
            ),
            array( // row #470
                'id' => 471,
                'name' => 'Llor�',
                'department_id' => 12,
            ),
            array( // row #471
                'id' => 472,
                'name' => 'Medio Atrato',
                'department_id' => 12,
            ),
            array( // row #472
                'id' => 473,
                'name' => 'Medio Baud�',
                'department_id' => 12,
            ),
            array( // row #473
                'id' => 474,
                'name' => 'Medio San Juan (ANDAGOYA)',
                'department_id' => 12,
            ),
            array( // row #474
                'id' => 475,
                'name' => 'Novita',
                'department_id' => 12,
            ),
            array( // row #475
                'id' => 476,
                'name' => 'Nuqu�',
                'department_id' => 12,
            ),
            array( // row #476
                'id' => 477,
                'name' => 'Quibd�',
                'department_id' => 12,
            ),
            array( // row #477
                'id' => 478,
                'name' => 'R�o Ir�',
                'department_id' => 12,
            ),
            array( // row #478
                'id' => 479,
                'name' => 'R�o Quito',
                'department_id' => 12,
            ),
            array( // row #479
                'id' => 480,
                'name' => 'R�osucio',
                'department_id' => 12,
            ),
            array( // row #480
                'id' => 481,
                'name' => 'San Jos� del Palmar',
                'department_id' => 12,
            ),
            array( // row #481
                'id' => 482,
                'name' => 'Santa Genoveva de Docorod�',
                'department_id' => 12,
            ),
            array( // row #482
                'id' => 483,
                'name' => 'Sip�',
                'department_id' => 12,
            ),
            array( // row #483
                'id' => 484,
                'name' => 'Tad�',
                'department_id' => 12,
            ),
            array( // row #484
                'id' => 485,
                'name' => 'Ungu�a',
                'department_id' => 12,
            ),
            array( // row #485
                'id' => 486,
                'name' => 'Uni�n Panamericana (�NIMAS)',
                'department_id' => 12,
            ),
            array( // row #486
                'id' => 487,
                'name' => 'Ayapel',
                'department_id' => 13,
            ),
            array( // row #487
                'id' => 488,
                'name' => 'Buenavista',
                'department_id' => 13,
            ),
            array( // row #488
                'id' => 489,
                'name' => 'Canalete',
                'department_id' => 13,
            ),
            array( // row #489
                'id' => 490,
                'name' => 'Ceret�',
                'department_id' => 13,
            ),
            array( // row #490
                'id' => 491,
                'name' => 'Chim�',
                'department_id' => 13,
            ),
            array( // row #491
                'id' => 492,
                'name' => 'Chin�',
                'department_id' => 13,
            ),
            array( // row #492
                'id' => 493,
                'name' => 'Ci�naga de Oro',
                'department_id' => 13,
            ),
            array( // row #493
                'id' => 494,
                'name' => 'Cotorra',
                'department_id' => 13,
            ),
            array( // row #494
                'id' => 495,
                'name' => 'La Apartada y La Frontera',
                'department_id' => 13,
            ),
            array( // row #495
                'id' => 496,
                'name' => 'Lorica',
                'department_id' => 13,
            ),
            array( // row #496
                'id' => 497,
                'name' => 'Los C�rdobas',
                'department_id' => 13,
            ),
            array( // row #497
                'id' => 498,
                'name' => 'Momil',
                'department_id' => 13,
            ),
            array( // row #498
                'id' => 499,
                'name' => 'Montel�bano',
                'department_id' => 13,
            ),
            array( // row #499
                'id' => 500,
                'name' => 'Monteria',
                'department_id' => 13,
            ),
            array( // row #500
                'id' => 501,
                'name' => 'Mo�itos',
                'department_id' => 13,
            ),
            array( // row #501
                'id' => 502,
                'name' => 'Planeta Rica',
                'department_id' => 13,
            ),
            array( // row #502
                'id' => 503,
                'name' => 'Pueblo Nuevo',
                'department_id' => 13,
            ),
            array( // row #503
                'id' => 504,
                'name' => 'Puerto Escondido',
                'department_id' => 13,
            ),
            array( // row #504
                'id' => 505,
                'name' => 'Puerto Libertador',
                'department_id' => 13,
            ),
            array( // row #505
                'id' => 506,
                'name' => 'Pur�sima',
                'department_id' => 13,
            ),
            array( // row #506
                'id' => 507,
                'name' => 'Sahag�n',
                'department_id' => 13,
            ),
            array( // row #507
                'id' => 508,
                'name' => 'San Andr�s Sotavento',
                'department_id' => 13,
            ),
            array( // row #508
                'id' => 509,
                'name' => 'San Antero',
                'department_id' => 13,
            ),
            array( // row #509
                'id' => 510,
                'name' => 'San Bernardo del Viento',
                'department_id' => 13,
            ),
            array( // row #510
                'id' => 511,
                'name' => 'San Carlos',
                'department_id' => 13,
            ),
            array( // row #511
                'id' => 512,
                'name' => 'San Jos� de Ur�',
                'department_id' => 13,
            ),
            array( // row #512
                'id' => 513,
                'name' => 'San Pelayo',
                'department_id' => 13,
            ),
            array( // row #513
                'id' => 514,
                'name' => 'Tierralta',
                'department_id' => 13,
            ),
            array( // row #514
                'id' => 515,
                'name' => 'Tuch�n',
                'department_id' => 13,
            ),
            array( // row #515
                'id' => 516,
                'name' => 'Valencia',
                'department_id' => 13,
            ),
            array( // row #516
                'id' => 517,
                'name' => 'Agua de Dios',
                'department_id' => 14,
            ),
            array( // row #517
                'id' => 518,
                'name' => 'Alb�n',
                'department_id' => 14,
            ),
            array( // row #518
                'id' => 519,
                'name' => 'Anapoima',
                'department_id' => 14,
            ),
            array( // row #519
                'id' => 520,
                'name' => 'Anolaima',
                'department_id' => 14,
            ),
            array( // row #520
                'id' => 521,
                'name' => 'Apulo',
                'department_id' => 14,
            ),
            array( // row #521
                'id' => 522,
                'name' => 'Arbel�ez',
                'department_id' => 14,
            ),
            array( // row #522
                'id' => 523,
                'name' => 'Beltr�n',
                'department_id' => 14,
            ),
            array( // row #523
                'id' => 524,
                'name' => 'Bituima',
                'department_id' => 14,
            ),
            array( // row #524
                'id' => 525,
                'name' => 'Bogot� D.C.',
                'department_id' => 14,
            ),
            array( // row #525
                'id' => 526,
                'name' => 'Bojac�',
                'department_id' => 14,
            ),
            array( // row #526
                'id' => 527,
                'name' => 'Cabrera',
                'department_id' => 14,
            ),
            array( // row #527
                'id' => 528,
                'name' => 'Cachipay',
                'department_id' => 14,
            ),
            array( // row #528
                'id' => 529,
                'name' => 'Cajic�',
                'department_id' => 14,
            ),
            array( // row #529
                'id' => 530,
                'name' => 'Caparrap�',
                'department_id' => 14,
            ),
            array( // row #530
                'id' => 531,
                'name' => 'Carmen de Carupa',
                'department_id' => 14,
            ),
            array( // row #531
                'id' => 532,
                'name' => 'Chaguan�',
                'department_id' => 14,
            ),
            array( // row #532
                'id' => 533,
                'name' => 'Chipaque',
                'department_id' => 14,
            ),
            array( // row #533
                'id' => 534,
                'name' => 'Choach�',
                'department_id' => 14,
            ),
            array( // row #534
                'id' => 535,
                'name' => 'Chocont�',
                'department_id' => 14,
            ),
            array( // row #535
                'id' => 536,
                'name' => 'Ch�a',
                'department_id' => 14,
            ),
            array( // row #536
                'id' => 537,
                'name' => 'Cogua',
                'department_id' => 14,
            ),
            array( // row #537
                'id' => 538,
                'name' => 'Cota',
                'department_id' => 14,
            ),
            array( // row #538
                'id' => 539,
                'name' => 'Cucunub�',
                'department_id' => 14,
            ),
            array( // row #539
                'id' => 540,
                'name' => 'C�queza',
                'department_id' => 14,
            ),
            array( // row #540
                'id' => 541,
                'name' => 'El Colegio',
                'department_id' => 14,
            ),
            array( // row #541
                'id' => 542,
                'name' => 'El Pe��n',
                'department_id' => 14,
            ),
            array( // row #542
                'id' => 543,
                'name' => 'El Rosal',
                'department_id' => 14,
            ),
            array( // row #543
                'id' => 544,
                'name' => 'Facatativ�',
                'department_id' => 14,
            ),
            array( // row #544
                'id' => 545,
                'name' => 'Fosca',
                'department_id' => 14,
            ),
            array( // row #545
                'id' => 546,
                'name' => 'Funza',
                'department_id' => 14,
            ),
            array( // row #546
                'id' => 547,
                'name' => 'Fusagasug�',
                'department_id' => 14,
            ),
            array( // row #547
                'id' => 548,
                'name' => 'F�meque',
                'department_id' => 14,
            ),
            array( // row #548
                'id' => 549,
                'name' => 'F�quene',
                'department_id' => 14,
            ),
            array( // row #549
                'id' => 550,
                'name' => 'Gachal�',
                'department_id' => 14,
            ),
            array( // row #550
                'id' => 551,
                'name' => 'Gachancip�',
                'department_id' => 14,
            ),
            array( // row #551
                'id' => 552,
                'name' => 'Gachet�',
                'department_id' => 14,
            ),
            array( // row #552
                'id' => 553,
                'name' => 'Gama',
                'department_id' => 14,
            ),
            array( // row #553
                'id' => 554,
                'name' => 'Girardot',
                'department_id' => 14,
            ),
            array( // row #554
                'id' => 555,
                'name' => 'Granada',
                'department_id' => 14,
            ),
            array( // row #555
                'id' => 556,
                'name' => 'Guachet�',
                'department_id' => 14,
            ),
            array( // row #556
                'id' => 557,
                'name' => 'Guaduas',
                'department_id' => 14,
            ),
            array( // row #557
                'id' => 558,
                'name' => 'Guasca',
                'department_id' => 14,
            ),
            array( // row #558
                'id' => 559,
                'name' => 'Guataqu�',
                'department_id' => 14,
            ),
            array( // row #559
                'id' => 560,
                'name' => 'Guatavita',
                'department_id' => 14,
            ),
            array( // row #560
                'id' => 561,
                'name' => 'Guayabal de Siquima',
                'department_id' => 14,
            ),
            array( // row #561
                'id' => 562,
                'name' => 'Guayabetal',
                'department_id' => 14,
            ),
            array( // row #562
                'id' => 563,
                'name' => 'Guti�rrez',
                'department_id' => 14,
            ),
            array( // row #563
                'id' => 564,
                'name' => 'Jerusal�n',
                'department_id' => 14,
            ),
            array( // row #564
                'id' => 565,
                'name' => 'Jun�n',
                'department_id' => 14,
            ),
            array( // row #565
                'id' => 566,
                'name' => 'La Calera',
                'department_id' => 14,
            ),
            array( // row #566
                'id' => 567,
                'name' => 'La Mesa',
                'department_id' => 14,
            ),
            array( // row #567
                'id' => 568,
                'name' => 'La Palma',
                'department_id' => 14,
            ),
            array( // row #568
                'id' => 569,
                'name' => 'La Pe�a',
                'department_id' => 14,
            ),
            array( // row #569
                'id' => 570,
                'name' => 'La Vega',
                'department_id' => 14,
            ),
            array( // row #570
                'id' => 571,
                'name' => 'Lenguazaque',
                'department_id' => 14,
            ),
            array( // row #571
                'id' => 572,
                'name' => 'Machet�',
                'department_id' => 14,
            ),
            array( // row #572
                'id' => 573,
                'name' => 'Madrid',
                'department_id' => 14,
            ),
            array( // row #573
                'id' => 574,
                'name' => 'Manta',
                'department_id' => 14,
            ),
            array( // row #574
                'id' => 575,
                'name' => 'Medina',
                'department_id' => 14,
            ),
            array( // row #575
                'id' => 576,
                'name' => 'Mosquera',
                'department_id' => 14,
            ),
            array( // row #576
                'id' => 577,
                'name' => 'Nari�o',
                'department_id' => 14,
            ),
            array( // row #577
                'id' => 578,
                'name' => 'Nemoc�n',
                'department_id' => 14,
            ),
            array( // row #578
                'id' => 579,
                'name' => 'Nilo',
                'department_id' => 14,
            ),
            array( // row #579
                'id' => 580,
                'name' => 'Nimaima',
                'department_id' => 14,
            ),
            array( // row #580
                'id' => 581,
                'name' => 'Nocaima',
                'department_id' => 14,
            ),
            array( // row #581
                'id' => 582,
                'name' => 'Pacho',
                'department_id' => 14,
            ),
            array( // row #582
                'id' => 583,
                'name' => 'Paime',
                'department_id' => 14,
            ),
            array( // row #583
                'id' => 584,
                'name' => 'Pandi',
                'department_id' => 14,
            ),
            array( // row #584
                'id' => 585,
                'name' => 'Paratebueno',
                'department_id' => 14,
            ),
            array( // row #585
                'id' => 586,
                'name' => 'Pasca',
                'department_id' => 14,
            ),
            array( // row #586
                'id' => 587,
                'name' => 'Puerto Salgar',
                'department_id' => 14,
            ),
            array( // row #587
                'id' => 588,
                'name' => 'Pul�',
                'department_id' => 14,
            ),
            array( // row #588
                'id' => 589,
                'name' => 'Quebradanegra',
                'department_id' => 14,
            ),
            array( // row #589
                'id' => 590,
                'name' => 'Quetame',
                'department_id' => 14,
            ),
            array( // row #590
                'id' => 591,
                'name' => 'Quipile',
                'department_id' => 14,
            ),
            array( // row #591
                'id' => 592,
                'name' => 'Ricaurte',
                'department_id' => 14,
            ),
            array( // row #592
                'id' => 593,
                'name' => 'San Antonio de Tequendama',
                'department_id' => 14,
            ),
            array( // row #593
                'id' => 594,
                'name' => 'San Bernardo',
                'department_id' => 14,
            ),
            array( // row #594
                'id' => 595,
                'name' => 'San Cayetano',
                'department_id' => 14,
            ),
            array( // row #595
                'id' => 596,
                'name' => 'San Francisco',
                'department_id' => 14,
            ),
            array( // row #596
                'id' => 597,
                'name' => 'San Juan de R�o Seco',
                'department_id' => 14,
            ),
            array( // row #597
                'id' => 598,
                'name' => 'Sasaima',
                'department_id' => 14,
            ),
            array( // row #598
                'id' => 599,
                'name' => 'Sesquil�',
                'department_id' => 14,
            ),
            array( // row #599
                'id' => 600,
                'name' => 'Sibat�',
                'department_id' => 14,
            ),
            array( // row #600
                'id' => 601,
                'name' => 'Silvania',
                'department_id' => 14,
            ),
            array( // row #601
                'id' => 602,
                'name' => 'Simijaca',
                'department_id' => 14,
            ),
            array( // row #602
                'id' => 603,
                'name' => 'Soacha',
                'department_id' => 14,
            ),
            array( // row #603
                'id' => 604,
                'name' => 'Sop�',
                'department_id' => 14,
            ),
            array( // row #604
                'id' => 605,
                'name' => 'Subachoque',
                'department_id' => 14,
            ),
            array( // row #605
                'id' => 606,
                'name' => 'Suesca',
                'department_id' => 14,
            ),
            array( // row #606
                'id' => 607,
                'name' => 'Supat�',
                'department_id' => 14,
            ),
            array( // row #607
                'id' => 608,
                'name' => 'Susa',
                'department_id' => 14,
            ),
            array( // row #608
                'id' => 609,
                'name' => 'Sutatausa',
                'department_id' => 14,
            ),
            array( // row #609
                'id' => 610,
                'name' => 'Tabio',
                'department_id' => 14,
            ),
            array( // row #610
                'id' => 611,
                'name' => 'Tausa',
                'department_id' => 14,
            ),
            array( // row #611
                'id' => 612,
                'name' => 'Tena',
                'department_id' => 14,
            ),
            array( // row #612
                'id' => 613,
                'name' => 'Tenjo',
                'department_id' => 14,
            ),
            array( // row #613
                'id' => 614,
                'name' => 'Tibacuy',
                'department_id' => 14,
            ),
            array( // row #614
                'id' => 615,
                'name' => 'Tibirita',
                'department_id' => 14,
            ),
            array( // row #615
                'id' => 616,
                'name' => 'Tocaima',
                'department_id' => 14,
            ),
            array( // row #616
                'id' => 617,
                'name' => 'Tocancip�',
                'department_id' => 14,
            ),
            array( // row #617
                'id' => 618,
                'name' => 'Topaip�',
                'department_id' => 14,
            ),
            array( // row #618
                'id' => 619,
                'name' => 'Ubal�',
                'department_id' => 14,
            ),
            array( // row #619
                'id' => 620,
                'name' => 'Ubaque',
                'department_id' => 14,
            ),
            array( // row #620
                'id' => 621,
                'name' => 'Ubat�',
                'department_id' => 14,
            ),
            array( // row #621
                'id' => 622,
                'name' => 'Une',
                'department_id' => 14,
            ),
            array( // row #622
                'id' => 623,
                'name' => 'Venecia (Ospina P�rez)',
                'department_id' => 14,
            ),
            array( // row #623
                'id' => 624,
                'name' => 'Vergara',
                'department_id' => 14,
            ),
            array( // row #624
                'id' => 625,
                'name' => 'Viani',
                'department_id' => 14,
            ),
            array( // row #625
                'id' => 626,
                'name' => 'Villag�mez',
                'department_id' => 14,
            ),
            array( // row #626
                'id' => 627,
                'name' => 'Villapinz�n',
                'department_id' => 14,
            ),
            array( // row #627
                'id' => 628,
                'name' => 'Villeta',
                'department_id' => 14,
            ),
            array( // row #628
                'id' => 629,
                'name' => 'Viot�',
                'department_id' => 14,
            ),
            array( // row #629
                'id' => 630,
                'name' => 'Yacop�',
                'department_id' => 14,
            ),
            array( // row #630
                'id' => 631,
                'name' => 'Zipac�n',
                'department_id' => 14,
            ),
            array( // row #631
                'id' => 632,
                'name' => 'Zipaquir�',
                'department_id' => 14,
            ),
            array( // row #632
                'id' => 633,
                'name' => '�tica',
                'department_id' => 14,
            ),
            array( // row #633
                'id' => 634,
                'name' => 'In�rida',
                'department_id' => 15,
            ),
            array( // row #634
                'id' => 635,
                'name' => 'Calamar',
                'department_id' => 16,
            ),
            array( // row #635
                'id' => 636,
                'name' => 'El Retorno',
                'department_id' => 16,
            ),
            array( // row #636
                'id' => 637,
                'name' => 'Miraflores',
                'department_id' => 16,
            ),
            array( // row #637
                'id' => 638,
                'name' => 'San Jos� del Guaviare',
                'department_id' => 16,
            ),
            array( // row #638
                'id' => 639,
                'name' => 'Acevedo',
                'department_id' => 17,
            ),
            array( // row #639
                'id' => 640,
                'name' => 'Agrado',
                'department_id' => 17,
            ),
            array( // row #640
                'id' => 641,
                'name' => 'Aipe',
                'department_id' => 17,
            ),
            array( // row #641
                'id' => 642,
                'name' => 'Algeciras',
                'department_id' => 17,
            ),
            array( // row #642
                'id' => 643,
                'name' => 'Altamira',
                'department_id' => 17,
            ),
            array( // row #643
                'id' => 644,
                'name' => 'Baraya',
                'department_id' => 17,
            ),
            array( // row #644
                'id' => 645,
                'name' => 'Campoalegre',
                'department_id' => 17,
            ),
            array( // row #645
                'id' => 646,
                'name' => 'Colombia',
                'department_id' => 17,
            ),
            array( // row #646
                'id' => 647,
                'name' => 'El�as',
                'department_id' => 17,
            ),
            array( // row #647
                'id' => 648,
                'name' => 'Garz�n',
                'department_id' => 17,
            ),
            array( // row #648
                'id' => 649,
                'name' => 'Gigante',
                'department_id' => 17,
            ),
            array( // row #649
                'id' => 650,
                'name' => 'Guadalupe',
                'department_id' => 17,
            ),
            array( // row #650
                'id' => 651,
                'name' => 'Hobo',
                'department_id' => 17,
            ),
            array( // row #651
                'id' => 652,
                'name' => 'Isnos',
                'department_id' => 17,
            ),
            array( // row #652
                'id' => 653,
                'name' => 'La Argentina',
                'department_id' => 17,
            ),
            array( // row #653
                'id' => 654,
                'name' => 'La Plata',
                'department_id' => 17,
            ),
            array( // row #654
                'id' => 655,
                'name' => 'Neiva',
                'department_id' => 17,
            ),
            array( // row #655
                'id' => 656,
                'name' => 'N�taga',
                'department_id' => 17,
            ),
            array( // row #656
                'id' => 657,
                'name' => 'Oporapa',
                'department_id' => 17,
            ),
            array( // row #657
                'id' => 658,
                'name' => 'Paicol',
                'department_id' => 17,
            ),
            array( // row #658
                'id' => 659,
                'name' => 'Palermo',
                'department_id' => 17,
            ),
            array( // row #659
                'id' => 660,
                'name' => 'Palestina',
                'department_id' => 17,
            ),
            array( // row #660
                'id' => 661,
                'name' => 'Pital',
                'department_id' => 17,
            ),
            array( // row #661
                'id' => 662,
                'name' => 'Pitalito',
                'department_id' => 17,
            ),
            array( // row #662
                'id' => 663,
                'name' => 'Rivera',
                'department_id' => 17,
            ),
            array( // row #663
                'id' => 664,
                'name' => 'Saladoblanco',
                'department_id' => 17,
            ),
            array( // row #664
                'id' => 665,
                'name' => 'San Agust�n',
                'department_id' => 17,
            ),
            array( // row #665
                'id' => 666,
                'name' => 'Santa Mar�a',
                'department_id' => 17,
            ),
            array( // row #666
                'id' => 667,
                'name' => 'Suaza',
                'department_id' => 17,
            ),
            array( // row #667
                'id' => 668,
                'name' => 'Tarqui',
                'department_id' => 17,
            ),
            array( // row #668
                'id' => 669,
                'name' => 'Tello',
                'department_id' => 17,
            ),
            array( // row #669
                'id' => 670,
                'name' => 'Teruel',
                'department_id' => 17,
            ),
            array( // row #670
                'id' => 671,
                'name' => 'Tesalia',
                'department_id' => 17,
            ),
            array( // row #671
                'id' => 672,
                'name' => 'Timan�',
                'department_id' => 17,
            ),
            array( // row #672
                'id' => 673,
                'name' => 'Villavieja',
                'department_id' => 17,
            ),
            array( // row #673
                'id' => 674,
                'name' => 'Yaguar�',
                'department_id' => 17,
            ),
            array( // row #674
                'id' => 675,
                'name' => '�quira',
                'department_id' => 17,
            ),
            array( // row #675
                'id' => 676,
                'name' => 'Albania',
                'department_id' => 18,
            ),
            array( // row #676
                'id' => 677,
                'name' => 'Barrancas',
                'department_id' => 18,
            ),
            array( // row #677
                'id' => 678,
                'name' => 'Dibulla',
                'department_id' => 18,
            ),
            array( // row #678
                'id' => 679,
                'name' => 'Distracci�n',
                'department_id' => 18,
            ),
            array( // row #679
                'id' => 680,
                'name' => 'El Molino',
                'department_id' => 18,
            ),
            array( // row #680
                'id' => 681,
                'name' => 'Fonseca',
                'department_id' => 18,
            ),
            array( // row #681
                'id' => 682,
                'name' => 'Hatonuevo',
                'department_id' => 18,
            ),
            array( // row #682
                'id' => 683,
                'name' => 'La Jagua del Pilar',
                'department_id' => 18,
            ),
            array( // row #683
                'id' => 684,
                'name' => 'Maicao',
                'department_id' => 18,
            ),
            array( // row #684
                'id' => 685,
                'name' => 'Manaure',
                'department_id' => 18,
            ),
            array( // row #685
                'id' => 686,
                'name' => 'Riohacha',
                'department_id' => 18,
            ),
            array( // row #686
                'id' => 687,
                'name' => 'San Juan del Cesar',
                'department_id' => 18,
            ),
            array( // row #687
                'id' => 688,
                'name' => 'Uribia',
                'department_id' => 18,
            ),
            array( // row #688
                'id' => 689,
                'name' => 'Urumita',
                'department_id' => 18,
            ),
            array( // row #689
                'id' => 690,
                'name' => 'Villanueva',
                'department_id' => 18,
            ),
            array( // row #690
                'id' => 691,
                'name' => 'Algarrobo',
                'department_id' => 19,
            ),
            array( // row #691
                'id' => 692,
                'name' => 'Aracataca',
                'department_id' => 19,
            ),
            array( // row #692
                'id' => 693,
                'name' => 'Ariguan� (El Dif�cil)',
                'department_id' => 19,
            ),
            array( // row #693
                'id' => 694,
                'name' => 'Cerro San Antonio',
                'department_id' => 19,
            ),
            array( // row #694
                'id' => 695,
                'name' => 'Chivolo',
                'department_id' => 19,
            ),
            array( // row #695
                'id' => 696,
                'name' => 'Ci�naga',
                'department_id' => 19,
            ),
            array( // row #696
                'id' => 697,
                'name' => 'Concordia',
                'department_id' => 19,
            ),
            array( // row #697
                'id' => 698,
                'name' => 'El Banco',
                'department_id' => 19,
            ),
            array( // row #698
                'id' => 699,
                'name' => 'El Pi�on',
                'department_id' => 19,
            ),
            array( // row #699
                'id' => 700,
                'name' => 'El Ret�n',
                'department_id' => 19,
            ),
            array( // row #700
                'id' => 701,
                'name' => 'Fundaci�n',
                'department_id' => 19,
            ),
            array( // row #701
                'id' => 702,
                'name' => 'Guamal',
                'department_id' => 19,
            ),
            array( // row #702
                'id' => 703,
                'name' => 'Nueva Granada',
                'department_id' => 19,
            ),
            array( // row #703
                'id' => 704,
                'name' => 'Pedraza',
                'department_id' => 19,
            ),
            array( // row #704
                'id' => 705,
                'name' => 'Piji�o',
                'department_id' => 19,
            ),
            array( // row #705
                'id' => 706,
                'name' => 'Pivijay',
                'department_id' => 19,
            ),
            array( // row #706
                'id' => 707,
                'name' => 'Plato',
                'department_id' => 19,
            ),
            array( // row #707
                'id' => 708,
                'name' => 'Puebloviejo',
                'department_id' => 19,
            ),
            array( // row #708
                'id' => 709,
                'name' => 'Remolino',
                'department_id' => 19,
            ),
            array( // row #709
                'id' => 710,
                'name' => 'Sabanas de San Angel (SAN ANGEL)',
                'department_id' => 19,
            ),
            array( // row #710
                'id' => 711,
                'name' => 'Salamina',
                'department_id' => 19,
            ),
            array( // row #711
                'id' => 712,
                'name' => 'San Sebasti�n de Buenavista',
                'department_id' => 19,
            ),
            array( // row #712
                'id' => 713,
                'name' => 'San Zen�n',
                'department_id' => 19,
            ),
            array( // row #713
                'id' => 714,
                'name' => 'Santa Ana',
                'department_id' => 19,
            ),
            array( // row #714
                'id' => 715,
                'name' => 'Santa B�rbara de Pinto',
                'department_id' => 19,
            ),
            array( // row #715
                'id' => 716,
                'name' => 'Santa Marta',
                'department_id' => 19,
            ),
            array( // row #716
                'id' => 717,
                'name' => 'Sitionuevo',
                'department_id' => 19,
            ),
            array( // row #717
                'id' => 718,
                'name' => 'Tenerife',
                'department_id' => 19,
            ),
            array( // row #718
                'id' => 719,
                'name' => 'Zapay�n (PUNTA DE PIEDRAS)',
                'department_id' => 19,
            ),
            array( // row #719
                'id' => 720,
                'name' => 'Zona Bananera (PRADO - SEVILLA)',
                'department_id' => 19,
            ),
            array( // row #720
                'id' => 721,
                'name' => 'Acac�as',
                'department_id' => 20,
            ),
            array( // row #721
                'id' => 722,
                'name' => 'Barranca de Up�a',
                'department_id' => 20,
            ),
            array( // row #722
                'id' => 723,
                'name' => 'Cabuyaro',
                'department_id' => 20,
            ),
            array( // row #723
                'id' => 724,
                'name' => 'Castilla la Nueva',
                'department_id' => 20,
            ),
            array( // row #724
                'id' => 725,
                'name' => 'Cubarral',
                'department_id' => 20,
            ),
            array( // row #725
                'id' => 726,
                'name' => 'Cumaral',
                'department_id' => 20,
            ),
            array( // row #726
                'id' => 727,
                'name' => 'El Calvario',
                'department_id' => 20,
            ),
            array( // row #727
                'id' => 728,
                'name' => 'El Castillo',
                'department_id' => 20,
            ),
            array( // row #728
                'id' => 729,
                'name' => 'El Dorado',
                'department_id' => 20,
            ),
            array( // row #729
                'id' => 730,
                'name' => 'Fuente de Oro',
                'department_id' => 20,
            ),
            array( // row #730
                'id' => 731,
                'name' => 'Granada',
                'department_id' => 20,
            ),
            array( // row #731
                'id' => 732,
                'name' => 'Guamal',
                'department_id' => 20,
            ),
            array( // row #732
                'id' => 733,
                'name' => 'La Macarena',
                'department_id' => 20,
            ),
            array( // row #733
                'id' => 734,
                'name' => 'Lejan�as',
                'department_id' => 20,
            ),
            array( // row #734
                'id' => 735,
                'name' => 'Mapiripan',
                'department_id' => 20,
            ),
            array( // row #735
                'id' => 736,
                'name' => 'Mesetas',
                'department_id' => 20,
            ),
            array( // row #736
                'id' => 737,
                'name' => 'Puerto Concordia',
                'department_id' => 20,
            ),
            array( // row #737
                'id' => 738,
                'name' => 'Puerto Gait�n',
                'department_id' => 20,
            ),
            array( // row #738
                'id' => 739,
                'name' => 'Puerto Lleras',
                'department_id' => 20,
            ),
            array( // row #739
                'id' => 740,
                'name' => 'Puerto L�pez',
                'department_id' => 20,
            ),
            array( // row #740
                'id' => 741,
                'name' => 'Puerto Rico',
                'department_id' => 20,
            ),
            array( // row #741
                'id' => 742,
                'name' => 'Restrepo',
                'department_id' => 20,
            ),
            array( // row #742
                'id' => 743,
                'name' => 'San Carlos de Guaroa',
                'department_id' => 20,
            ),
            array( // row #743
                'id' => 744,
                'name' => 'San Juan de Arama',
                'department_id' => 20,
            ),
            array( // row #744
                'id' => 745,
                'name' => 'San Juanito',
                'department_id' => 20,
            ),
            array( // row #745
                'id' => 746,
                'name' => 'San Mart�n',
                'department_id' => 20,
            ),
            array( // row #746
                'id' => 747,
                'name' => 'Uribe',
                'department_id' => 20,
            ),
            array( // row #747
                'id' => 748,
                'name' => 'Villavicencio',
                'department_id' => 20,
            ),
            array( // row #748
                'id' => 749,
                'name' => 'Vista Hermosa',
                'department_id' => 20,
            ),
            array( // row #749
                'id' => 750,
                'name' => 'Alb�n (San Jos�)',
                'department_id' => 21,
            ),
            array( // row #750
                'id' => 751,
                'name' => 'Aldana',
                'department_id' => 21,
            ),
            array( // row #751
                'id' => 752,
                'name' => 'Ancuya',
                'department_id' => 21,
            ),
            array( // row #752
                'id' => 753,
                'name' => 'Arboleda (Berruecos)',
                'department_id' => 21,
            ),
            array( // row #753
                'id' => 754,
                'name' => 'Barbacoas',
                'department_id' => 21,
            ),
            array( // row #754
                'id' => 755,
                'name' => 'Bel�n',
                'department_id' => 21,
            ),
            array( // row #755
                'id' => 756,
                'name' => 'Buesaco',
                'department_id' => 21,
            ),
            array( // row #756
                'id' => 757,
                'name' => 'Chachagu�',
                'department_id' => 21,
            ),
            array( // row #757
                'id' => 758,
                'name' => 'Col�n (G�nova)',
                'department_id' => 21,
            ),
            array( // row #758
                'id' => 759,
                'name' => 'Consaca',
                'department_id' => 21,
            ),
            array( // row #759
                'id' => 760,
                'name' => 'Contadero',
                'department_id' => 21,
            ),
            array( // row #760
                'id' => 761,
                'name' => 'Cuaspud (Carlosama)',
                'department_id' => 21,
            ),
            array( // row #761
                'id' => 762,
                'name' => 'Cumbal',
                'department_id' => 21,
            ),
            array( // row #762
                'id' => 763,
                'name' => 'Cumbitara',
                'department_id' => 21,
            ),
            array( // row #763
                'id' => 764,
                'name' => 'C�rdoba',
                'department_id' => 21,
            ),
            array( // row #764
                'id' => 765,
                'name' => 'El Charco',
                'department_id' => 21,
            ),
            array( // row #765
                'id' => 766,
                'name' => 'El Pe�ol',
                'department_id' => 21,
            ),
            array( // row #766
                'id' => 767,
                'name' => 'El Rosario',
                'department_id' => 21,
            ),
            array( // row #767
                'id' => 768,
                'name' => 'El Tabl�n de G�mez',
                'department_id' => 21,
            ),
            array( // row #768
                'id' => 769,
                'name' => 'El Tambo',
                'department_id' => 21,
            ),
            array( // row #769
                'id' => 770,
                'name' => 'Francisco Pizarro',
                'department_id' => 21,
            ),
            array( // row #770
                'id' => 771,
                'name' => 'Funes',
                'department_id' => 21,
            ),
            array( // row #771
                'id' => 772,
                'name' => 'Guachav�s',
                'department_id' => 21,
            ),
            array( // row #772
                'id' => 773,
                'name' => 'Guachucal',
                'department_id' => 21,
            ),
            array( // row #773
                'id' => 774,
                'name' => 'Guaitarilla',
                'department_id' => 21,
            ),
            array( // row #774
                'id' => 775,
                'name' => 'Gualmat�n',
                'department_id' => 21,
            ),
            array( // row #775
                'id' => 776,
                'name' => 'Iles',
                'department_id' => 21,
            ),
            array( // row #776
                'id' => 777,
                'name' => 'Im�es',
                'department_id' => 21,
            ),
            array( // row #777
                'id' => 778,
                'name' => 'Ipiales',
                'department_id' => 21,
            ),
            array( // row #778
                'id' => 779,
                'name' => 'La Cruz',
                'department_id' => 21,
            ),
            array( // row #779
                'id' => 780,
                'name' => 'La Florida',
                'department_id' => 21,
            ),
            array( // row #780
                'id' => 781,
                'name' => 'La Llanada',
                'department_id' => 21,
            ),
            array( // row #781
                'id' => 782,
                'name' => 'La Tola',
                'department_id' => 21,
            ),
            array( // row #782
                'id' => 783,
                'name' => 'La Uni�n',
                'department_id' => 21,
            ),
            array( // row #783
                'id' => 784,
                'name' => 'Leiva',
                'department_id' => 21,
            ),
            array( // row #784
                'id' => 785,
                'name' => 'Linares',
                'department_id' => 21,
            ),
            array( // row #785
                'id' => 786,
                'name' => 'Mag�i (Pay�n)',
                'department_id' => 21,
            ),
            array( // row #786
                'id' => 787,
                'name' => 'Mallama (Piedrancha)',
                'department_id' => 21,
            ),
            array( // row #787
                'id' => 788,
                'name' => 'Mosquera',
                'department_id' => 21,
            ),
            array( // row #788
                'id' => 789,
                'name' => 'Nari�o',
                'department_id' => 21,
            ),
            array( // row #789
                'id' => 790,
                'name' => 'Olaya Herrera',
                'department_id' => 21,
            ),
            array( // row #790
                'id' => 791,
                'name' => 'Ospina',
                'department_id' => 21,
            ),
            array( // row #791
                'id' => 792,
                'name' => 'Policarpa',
                'department_id' => 21,
            ),
            array( // row #792
                'id' => 793,
                'name' => 'Potos�',
                'department_id' => 21,
            ),
            array( // row #793
                'id' => 794,
                'name' => 'Providencia',
                'department_id' => 21,
            ),
            array( // row #794
                'id' => 795,
                'name' => 'Puerres',
                'department_id' => 21,
            ),
            array( // row #795
                'id' => 796,
                'name' => 'Pupiales',
                'department_id' => 21,
            ),
            array( // row #796
                'id' => 797,
                'name' => 'Ricaurte',
                'department_id' => 21,
            ),
            array( // row #797
                'id' => 798,
                'name' => 'Roberto Pay�n (San Jos�)',
                'department_id' => 21,
            ),
            array( // row #798
                'id' => 799,
                'name' => 'Samaniego',
                'department_id' => 21,
            ),
            array( // row #799
                'id' => 800,
                'name' => 'San Bernardo',
                'department_id' => 21,
            ),
            array( // row #800
                'id' => 801,
                'name' => 'San Juan de Pasto',
                'department_id' => 21,
            ),
            array( // row #801
                'id' => 802,
                'name' => 'San Lorenzo',
                'department_id' => 21,
            ),
            array( // row #802
                'id' => 803,
                'name' => 'San Pablo',
                'department_id' => 21,
            ),
            array( // row #803
                'id' => 804,
                'name' => 'San Pedro de Cartago',
                'department_id' => 21,
            ),
            array( // row #804
                'id' => 805,
                'name' => 'Sandon�',
                'department_id' => 21,
            ),
            array( // row #805
                'id' => 806,
                'name' => 'Santa B�rbara (Iscuand�)',
                'department_id' => 21,
            ),
            array( // row #806
                'id' => 807,
                'name' => 'Sapuyes',
                'department_id' => 21,
            ),
            array( // row #807
                'id' => 808,
                'name' => 'Sotomayor (Los Andes)',
                'department_id' => 21,
            ),
            array( // row #808
                'id' => 809,
                'name' => 'Taminango',
                'department_id' => 21,
            ),
            array( // row #809
                'id' => 810,
                'name' => 'Tangua',
                'department_id' => 21,
            ),
            array( // row #810
                'id' => 811,
                'name' => 'Tumaco',
                'department_id' => 21,
            ),
            array( // row #811
                'id' => 812,
                'name' => 'T�querres',
                'department_id' => 21,
            ),
            array( // row #812
                'id' => 813,
                'name' => 'Yacuanquer',
                'department_id' => 21,
            ),
            array( // row #813
                'id' => 814,
                'name' => 'Arboledas',
                'department_id' => 22,
            ),
            array( // row #814
                'id' => 815,
                'name' => 'Bochalema',
                'department_id' => 22,
            ),
            array( // row #815
                'id' => 816,
                'name' => 'Bucarasica',
                'department_id' => 22,
            ),
            array( // row #816
                'id' => 817,
                'name' => 'Chin�cota',
                'department_id' => 22,
            ),
            array( // row #817
                'id' => 818,
                'name' => 'Chitag�',
                'department_id' => 22,
            ),
            array( // row #818
                'id' => 819,
                'name' => 'Convenci�n',
                'department_id' => 22,
            ),
            array( // row #819
                'id' => 820,
                'name' => 'Cucutilla',
                'department_id' => 22,
            ),
            array( // row #820
                'id' => 821,
                'name' => 'C�chira',
                'department_id' => 22,
            ),
            array( // row #821
                'id' => 822,
                'name' => 'C�cota',
                'department_id' => 22,
            ),
            array( // row #822
                'id' => 823,
                'name' => 'C�cuta',
                'department_id' => 22,
            ),
            array( // row #823
                'id' => 824,
                'name' => 'Durania',
                'department_id' => 22,
            ),
            array( // row #824
                'id' => 825,
                'name' => 'El Carmen',
                'department_id' => 22,
            ),
            array( // row #825
                'id' => 826,
                'name' => 'El Tarra',
                'department_id' => 22,
            ),
            array( // row #826
                'id' => 827,
                'name' => 'El Zulia',
                'department_id' => 22,
            ),
            array( // row #827
                'id' => 828,
                'name' => 'Gramalote',
                'department_id' => 22,
            ),
            array( // row #828
                'id' => 829,
                'name' => 'Hacar�',
                'department_id' => 22,
            ),
            array( // row #829
                'id' => 830,
                'name' => 'Herr�n',
                'department_id' => 22,
            ),
            array( // row #830
                'id' => 831,
                'name' => 'La Esperanza',
                'department_id' => 22,
            ),
            array( // row #831
                'id' => 832,
                'name' => 'La Playa',
                'department_id' => 22,
            ),
            array( // row #832
                'id' => 833,
                'name' => 'Labateca',
                'department_id' => 22,
            ),
            array( // row #833
                'id' => 834,
                'name' => 'Los Patios',
                'department_id' => 22,
            ),
            array( // row #834
                'id' => 835,
                'name' => 'Lourdes',
                'department_id' => 22,
            ),
            array( // row #835
                'id' => 836,
                'name' => 'Mutiscua',
                'department_id' => 22,
            ),
            array( // row #836
                'id' => 837,
                'name' => 'Oca�a',
                'department_id' => 22,
            ),
            array( // row #837
                'id' => 838,
                'name' => 'Pamplona',
                'department_id' => 22,
            ),
            array( // row #838
                'id' => 839,
                'name' => 'Pamplonita',
                'department_id' => 22,
            ),
            array( // row #839
                'id' => 840,
                'name' => 'Puerto Santander',
                'department_id' => 22,
            ),
            array( // row #840
                'id' => 841,
                'name' => 'Ragonvalia',
                'department_id' => 22,
            ),
            array( // row #841
                'id' => 842,
                'name' => 'Salazar',
                'department_id' => 22,
            ),
            array( // row #842
                'id' => 843,
                'name' => 'San Calixto',
                'department_id' => 22,
            ),
            array( // row #843
                'id' => 844,
                'name' => 'San Cayetano',
                'department_id' => 22,
            ),
            array( // row #844
                'id' => 845,
                'name' => 'Santiago',
                'department_id' => 22,
            ),
            array( // row #845
                'id' => 846,
                'name' => 'Sardinata',
                'department_id' => 22,
            ),
            array( // row #846
                'id' => 847,
                'name' => 'Silos',
                'department_id' => 22,
            ),
            array( // row #847
                'id' => 848,
                'name' => 'Teorama',
                'department_id' => 22,
            ),
            array( // row #848
                'id' => 849,
                'name' => 'Tib�',
                'department_id' => 22,
            ),
            array( // row #849
                'id' => 850,
                'name' => 'Toledo',
                'department_id' => 22,
            ),
            array( // row #850
                'id' => 851,
                'name' => 'Villa Caro',
                'department_id' => 22,
            ),
            array( // row #851
                'id' => 852,
                'name' => 'Villa del Rosario',
                'department_id' => 22,
            ),
            array( // row #852
                'id' => 853,
                'name' => '�brego',
                'department_id' => 22,
            ),
            array( // row #853
                'id' => 854,
                'name' => 'Col�n',
                'department_id' => 23,
            ),
            array( // row #854
                'id' => 855,
                'name' => 'Mocoa',
                'department_id' => 23,
            ),
            array( // row #855
                'id' => 856,
                'name' => 'Orito',
                'department_id' => 23,
            ),
            array( // row #856
                'id' => 857,
                'name' => 'Puerto As�s',
                'department_id' => 23,
            ),
            array( // row #857
                'id' => 858,
                'name' => 'Puerto Caicedo',
                'department_id' => 23,
            ),
            array( // row #858
                'id' => 859,
                'name' => 'Puerto Guzm�n',
                'department_id' => 23,
            ),
            array( // row #859
                'id' => 860,
                'name' => 'Puerto Legu�zamo',
                'department_id' => 23,
            ),
            array( // row #860
                'id' => 861,
                'name' => 'San Francisco',
                'department_id' => 23,
            ),
            array( // row #861
                'id' => 862,
                'name' => 'San Miguel',
                'department_id' => 23,
            ),
            array( // row #862
                'id' => 863,
                'name' => 'Santiago',
                'department_id' => 23,
            ),
            array( // row #863
                'id' => 864,
                'name' => 'Sibundoy',
                'department_id' => 23,
            ),
            array( // row #864
                'id' => 865,
                'name' => 'Valle del Guamuez',
                'department_id' => 23,
            ),
            array( // row #865
                'id' => 866,
                'name' => 'Villagarz�n',
                'department_id' => 23,
            ),
            array( // row #866
                'id' => 867,
                'name' => 'Armenia',
                'department_id' => 24,
            ),
            array( // row #867
                'id' => 868,
                'name' => 'Buenavista',
                'department_id' => 24,
            ),
            array( // row #868
                'id' => 869,
                'name' => 'Calarc�',
                'department_id' => 24,
            ),
            array( // row #869
                'id' => 870,
                'name' => 'Circasia',
                'department_id' => 24,
            ),
            array( // row #870
                'id' => 871,
                'name' => 'Cordob�',
                'department_id' => 24,
            ),
            array( // row #871
                'id' => 872,
                'name' => 'Filandia',
                'department_id' => 24,
            ),
            array( // row #872
                'id' => 873,
                'name' => 'G�nova',
                'department_id' => 24,
            ),
            array( // row #873
                'id' => 874,
                'name' => 'La Tebaida',
                'department_id' => 24,
            ),
            array( // row #874
                'id' => 875,
                'name' => 'Montenegro',
                'department_id' => 24,
            ),
            array( // row #875
                'id' => 876,
                'name' => 'Pijao',
                'department_id' => 24,
            ),
            array( // row #876
                'id' => 877,
                'name' => 'Quimbaya',
                'department_id' => 24,
            ),
            array( // row #877
                'id' => 878,
                'name' => 'Salento',
                'department_id' => 24,
            ),
            array( // row #878
                'id' => 879,
                'name' => 'Ap�a',
                'department_id' => 25,
            ),
            array( // row #879
                'id' => 880,
                'name' => 'Balboa',
                'department_id' => 25,
            ),
            array( // row #880
                'id' => 881,
                'name' => 'Bel�n de Umbr�a',
                'department_id' => 25,
            ),
            array( // row #881
                'id' => 882,
                'name' => 'Dos Quebradas',
                'department_id' => 25,
            ),
            array( // row #882
                'id' => 883,
                'name' => 'Gu�tica',
                'department_id' => 25,
            ),
            array( // row #883
                'id' => 884,
                'name' => 'La Celia',
                'department_id' => 25,
            ),
            array( // row #884
                'id' => 885,
                'name' => 'La Virginia',
                'department_id' => 25,
            ),
            array( // row #885
                'id' => 886,
                'name' => 'Marsella',
                'department_id' => 25,
            ),
            array( // row #886
                'id' => 887,
                'name' => 'Mistrat�',
                'department_id' => 25,
            ),
            array( // row #887
                'id' => 888,
                'name' => 'Pereira',
                'department_id' => 25,
            ),
            array( // row #888
                'id' => 889,
                'name' => 'Pueblo Rico',
                'department_id' => 25,
            ),
            array( // row #889
                'id' => 890,
                'name' => 'Quinch�a',
                'department_id' => 25,
            ),
            array( // row #890
                'id' => 891,
                'name' => 'Santa Rosa de Cabal',
                'department_id' => 25,
            ),
            array( // row #891
                'id' => 892,
                'name' => 'Santuario',
                'department_id' => 25,
            ),
            array( // row #892
                'id' => 893,
                'name' => 'Providencia',
                'department_id' => 26,
            ),
            array( // row #893
                'id' => 894,
                'name' => 'Aguada',
                'department_id' => 27,
            ),
            array( // row #894
                'id' => 895,
                'name' => 'Albania',
                'department_id' => 27,
            ),
            array( // row #895
                'id' => 896,
                'name' => 'Aratoca',
                'department_id' => 27,
            ),
            array( // row #896
                'id' => 897,
                'name' => 'Barbosa',
                'department_id' => 27,
            ),
            array( // row #897
                'id' => 898,
                'name' => 'Barichara',
                'department_id' => 27,
            ),
            array( // row #898
                'id' => 899,
                'name' => 'Barrancabermeja',
                'department_id' => 27,
            ),
            array( // row #899
                'id' => 900,
                'name' => 'Betulia',
                'department_id' => 27,
            ),
            array( // row #900
                'id' => 901,
                'name' => 'Bol�var',
                'department_id' => 27,
            ),
            array( // row #901
                'id' => 902,
                'name' => 'Bucaramanga',
                'department_id' => 27,
            ),
            array( // row #902
                'id' => 903,
                'name' => 'Cabrera',
                'department_id' => 27,
            ),
            array( // row #903
                'id' => 904,
                'name' => 'California',
                'department_id' => 27,
            ),
            array( // row #904
                'id' => 905,
                'name' => 'Capitanejo',
                'department_id' => 27,
            ),
            array( // row #905
                'id' => 906,
                'name' => 'Carcas�',
                'department_id' => 27,
            ),
            array( // row #906
                'id' => 907,
                'name' => 'Cepita',
                'department_id' => 27,
            ),
            array( // row #907
                'id' => 908,
                'name' => 'Cerrito',
                'department_id' => 27,
            ),
            array( // row #908
                'id' => 909,
                'name' => 'Charal�',
                'department_id' => 27,
            ),
            array( // row #909
                'id' => 910,
                'name' => 'Charta',
                'department_id' => 27,
            ),
            array( // row #910
                'id' => 911,
                'name' => 'Chima',
                'department_id' => 27,
            ),
            array( // row #911
                'id' => 912,
                'name' => 'Chipat�',
                'department_id' => 27,
            ),
            array( // row #912
                'id' => 913,
                'name' => 'Cimitarra',
                'department_id' => 27,
            ),
            array( // row #913
                'id' => 914,
                'name' => 'Concepci�n',
                'department_id' => 27,
            ),
            array( // row #914
                'id' => 915,
                'name' => 'Confines',
                'department_id' => 27,
            ),
            array( // row #915
                'id' => 916,
                'name' => 'Contrataci�n',
                'department_id' => 27,
            ),
            array( // row #916
                'id' => 917,
                'name' => 'Coromoro',
                'department_id' => 27,
            ),
            array( // row #917
                'id' => 918,
                'name' => 'Curit�',
                'department_id' => 27,
            ),
            array( // row #918
                'id' => 919,
                'name' => 'El Carmen',
                'department_id' => 27,
            ),
            array( // row #919
                'id' => 920,
                'name' => 'El Guacamayo',
                'department_id' => 27,
            ),
            array( // row #920
                'id' => 921,
                'name' => 'El Pe�on',
                'department_id' => 27,
            ),
            array( // row #921
                'id' => 922,
                'name' => 'El Play�n',
                'department_id' => 27,
            ),
            array( // row #922
                'id' => 923,
                'name' => 'Encino',
                'department_id' => 27,
            ),
            array( // row #923
                'id' => 924,
                'name' => 'Enciso',
                'department_id' => 27,
            ),
            array( // row #924
                'id' => 925,
                'name' => 'Floridablanca',
                'department_id' => 27,
            ),
            array( // row #925
                'id' => 926,
                'name' => 'Flori�n',
                'department_id' => 27,
            ),
            array( // row #926
                'id' => 927,
                'name' => 'Gal�n',
                'department_id' => 27,
            ),
            array( // row #927
                'id' => 928,
                'name' => 'Gir�n',
                'department_id' => 27,
            ),
            array( // row #928
                'id' => 929,
                'name' => 'Guaca',
                'department_id' => 27,
            ),
            array( // row #929
                'id' => 930,
                'name' => 'Guadalupe',
                'department_id' => 27,
            ),
            array( // row #930
                'id' => 931,
                'name' => 'Guapota',
                'department_id' => 27,
            ),
            array( // row #931
                'id' => 932,
                'name' => 'Guavat�',
                'department_id' => 27,
            ),
            array( // row #932
                'id' => 933,
                'name' => 'Guepsa',
                'department_id' => 27,
            ),
            array( // row #933
                'id' => 934,
                'name' => 'G�mbita',
                'department_id' => 27,
            ),
            array( // row #934
                'id' => 935,
                'name' => 'Hato',
                'department_id' => 27,
            ),
            array( // row #935
                'id' => 936,
                'name' => 'Jes�s Mar�a',
                'department_id' => 27,
            ),
            array( // row #936
                'id' => 937,
                'name' => 'Jord�n',
                'department_id' => 27,
            ),
            array( // row #937
                'id' => 938,
                'name' => 'La Belleza',
                'department_id' => 27,
            ),
            array( // row #938
                'id' => 939,
                'name' => 'La Paz',
                'department_id' => 27,
            ),
            array( // row #939
                'id' => 940,
                'name' => 'Land�zuri',
                'department_id' => 27,
            ),
            array( // row #940
                'id' => 941,
                'name' => 'Lebrija',
                'department_id' => 27,
            ),
            array( // row #941
                'id' => 942,
                'name' => 'Los Santos',
                'department_id' => 27,
            ),
            array( // row #942
                'id' => 943,
                'name' => 'Macaravita',
                'department_id' => 27,
            ),
            array( // row #943
                'id' => 944,
                'name' => 'Matanza',
                'department_id' => 27,
            ),
            array( // row #944
                'id' => 945,
                'name' => 'Mogotes',
                'department_id' => 27,
            ),
            array( // row #945
                'id' => 946,
                'name' => 'Molagavita',
                'department_id' => 27,
            ),
            array( // row #946
                'id' => 947,
                'name' => 'M�laga',
                'department_id' => 27,
            ),
            array( // row #947
                'id' => 948,
                'name' => 'Ocamonte',
                'department_id' => 27,
            ),
            array( // row #948
                'id' => 949,
                'name' => 'Oiba',
                'department_id' => 27,
            ),
            array( // row #949
                'id' => 950,
                'name' => 'Onzaga',
                'department_id' => 27,
            ),
            array( // row #950
                'id' => 951,
                'name' => 'Palmar',
                'department_id' => 27,
            ),
            array( // row #951
                'id' => 952,
                'name' => 'Palmas del Socorro',
                'department_id' => 27,
            ),
            array( // row #952
                'id' => 953,
                'name' => 'Pie de Cuesta',
                'department_id' => 27,
            ),
            array( // row #953
                'id' => 954,
                'name' => 'Pinchote',
                'department_id' => 27,
            ),
            array( // row #954
                'id' => 955,
                'name' => 'Puente Nacional',
                'department_id' => 27,
            ),
            array( // row #955
                'id' => 956,
                'name' => 'Puerto Parra',
                'department_id' => 27,
            ),
            array( // row #956
                'id' => 957,
                'name' => 'Puerto Wilches',
                'department_id' => 27,
            ),
            array( // row #957
                'id' => 958,
                'name' => 'P�ramo',
                'department_id' => 27,
            ),
            array( // row #958
                'id' => 959,
                'name' => 'Rio Negro',
                'department_id' => 27,
            ),
            array( // row #959
                'id' => 960,
                'name' => 'Sabana de Torres',
                'department_id' => 27,
            ),
            array( // row #960
                'id' => 961,
                'name' => 'San Andr�s',
                'department_id' => 27,
            ),
            array( // row #961
                'id' => 962,
                'name' => 'San Benito',
                'department_id' => 27,
            ),
            array( // row #962
                'id' => 963,
                'name' => 'San G�l',
                'department_id' => 27,
            ),
            array( // row #963
                'id' => 964,
                'name' => 'San Joaqu�n',
                'department_id' => 27,
            ),
            array( // row #964
                'id' => 965,
                'name' => 'San Jos� de Miranda',
                'department_id' => 27,
            ),
            array( // row #965
                'id' => 966,
                'name' => 'San Miguel',
                'department_id' => 27,
            ),
            array( // row #966
                'id' => 967,
                'name' => 'San Vicente del Chucur�',
                'department_id' => 27,
            ),
            array( // row #967
                'id' => 968,
                'name' => 'Santa B�rbara',
                'department_id' => 27,
            ),
            array( // row #968
                'id' => 969,
                'name' => 'Santa Helena del Op�n',
                'department_id' => 27,
            ),
            array( // row #969
                'id' => 970,
                'name' => 'Simacota',
                'department_id' => 27,
            ),
            array( // row #970
                'id' => 971,
                'name' => 'Socorro',
                'department_id' => 27,
            ),
            array( // row #971
                'id' => 972,
                'name' => 'Suaita',
                'department_id' => 27,
            ),
            array( // row #972
                'id' => 973,
                'name' => 'Sucre',
                'department_id' => 27,
            ),
            array( // row #973
                'id' => 974,
                'name' => 'Surat�',
                'department_id' => 27,
            ),
            array( // row #974
                'id' => 975,
                'name' => 'Tona',
                'department_id' => 27,
            ),
            array( // row #975
                'id' => 976,
                'name' => 'Valle de San Jos�',
                'department_id' => 27,
            ),
            array( // row #976
                'id' => 977,
                'name' => 'Vetas',
                'department_id' => 27,
            ),
            array( // row #977
                'id' => 978,
                'name' => 'Villanueva',
                'department_id' => 27,
            ),
            array( // row #978
                'id' => 979,
                'name' => 'V�lez',
                'department_id' => 27,
            ),
            array( // row #979
                'id' => 980,
                'name' => 'Zapatoca',
                'department_id' => 27,
            ),
            array( // row #980
                'id' => 981,
                'name' => 'Buenavista',
                'department_id' => 28,
            ),
            array( // row #981
                'id' => 982,
                'name' => 'Caimito',
                'department_id' => 28,
            ),
            array( // row #982
                'id' => 983,
                'name' => 'Chal�n',
                'department_id' => 28,
            ),
            array( // row #983
                'id' => 984,
                'name' => 'Colos� (Ricaurte)',
                'department_id' => 28,
            ),
            array( // row #984
                'id' => 985,
                'name' => 'Corozal',
                'department_id' => 28,
            ),
            array( // row #985
                'id' => 986,
                'name' => 'Cove�as',
                'department_id' => 28,
            ),
            array( // row #986
                'id' => 987,
                'name' => 'El Roble',
                'department_id' => 28,
            ),
            array( // row #987
                'id' => 988,
                'name' => 'Galeras (Nueva Granada)',
                'department_id' => 28,
            ),
            array( // row #988
                'id' => 989,
                'name' => 'Guaranda',
                'department_id' => 28,
            ),
            array( // row #989
                'id' => 990,
                'name' => 'La Uni�n',
                'department_id' => 28,
            ),
            array( // row #990
                'id' => 991,
                'name' => 'Los Palmitos',
                'department_id' => 28,
            ),
            array( // row #991
                'id' => 992,
                'name' => 'Majagual',
                'department_id' => 28,
            ),
            array( // row #992
                'id' => 993,
                'name' => 'Morroa',
                'department_id' => 28,
            ),
            array( // row #993
                'id' => 994,
                'name' => 'Ovejas',
                'department_id' => 28,
            ),
            array( // row #994
                'id' => 995,
                'name' => 'Palmito',
                'department_id' => 28,
            ),
            array( // row #995
                'id' => 996,
                'name' => 'Sampu�s',
                'department_id' => 28,
            ),
            array( // row #996
                'id' => 997,
                'name' => 'San Benito Abad',
                'department_id' => 28,
            ),
            array( // row #997
                'id' => 998,
                'name' => 'San Juan de Betulia',
                'department_id' => 28,
            ),
            array( // row #998
                'id' => 999,
                'name' => 'San Marcos',
                'department_id' => 28,
            ),
            array( // row #999
                'id' => 1000,
                'name' => 'San Onofre',
                'department_id' => 28,
            ),
        ];

        foreach ($municipalities as $municipality) {
            DB::table('municipalities')->insert($municipality);

        }
    }
}
