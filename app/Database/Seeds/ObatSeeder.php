<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

use function PHPSTORM_META\map;

class ObatSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_obat'     => 'Panadol',
                'jenis_obat'    => 'Kapsul',
                'harga'         =>  '5000',
                'deskripsi'     => 'Panadol adalah obat yang mengandung paracetamol. Panadol memiliki beberapa varian yang ditujukan untuk meredakan gejala dan keluhan, seperti demam, flu, sakit kepala, hidung tersumbat, batuk tidak berdahak, dan bersin-bersin',
                'sampul'        => '',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama_obat'     => 'Komix',
                'jenis_obat'    => 'Sirup',
                'harga'         =>  '5000',
                'deskripsi'     => 'Komix bermanfaat untuk meredakan batuk dan pilek. Komix tersedia dalam bentuk sirop di kemasan sachet.',
                'sampul'        => '',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama_obat'     => 'Amlodipine',
                'jenis_obat'    => 'Tablet',
                'harga'         =>  '12000',
                'deskripsi'     => 'Amlodipine adalah obat untuk menurunkan tekanan darah pada kondisi hipertensi. Selain itu, obat ini juga bisa digunakan dalam pengobatan nyeri dada akibat penyakit jantung koroner (angina pektoris).',
                'sampul'        => '',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama_obat'     => 'Inzana',
                'jenis_obat'    => 'Tablet',
                'harga'         =>  '8000',
                'deskripsi'     => 'Inzana digunakan untuk membantu menurunkan demam dan meredakan nyeri ringan seperti nyeri otot, sakit gigi, mengurangi rasa sakit dan bengkak di kondisi seperti kekakuan pada sendi, pilek dan sakit kepala. Inzana bekerja dengan cara menghalangi zat alami tertentu dalam tubuh (prostaglandin) untuk mengurangi rasa sakit dan pembengkakan.',
                'sampul'        => '',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ]
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('obat')->insertBatch($data);
    }
}
