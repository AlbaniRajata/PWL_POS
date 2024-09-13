<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Albi',
                'penjualan_kode' => 'AS1',
                'penjualan_tanggal' => '2024-06-15',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Tasya',
                'penjualan_kode' => 'AS2',
                'penjualan_tanggal' => '2024-06-16',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Fikri',
                'penjualan_kode' => 'AS3',
                'penjualan_tanggal' => '2024-06-17',
            ],
            [
                'pemjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Yudha',
                'penjualan_kode' => 'AS4',
                'penjualan_tanggal' => '2024-06-17',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Athif',
                'penjualan_kode' => 'AS5',
                'penjualan_tanggal' => '2024-06-17',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Syauqi',
                'penjualan_kode' => 'AS6',
                'penjualan_tanggal' => '2024-06-17',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Sofi',
                'penjualan_kode' => 'AS7',
                'penjualan_tanggal' => '2024-06-18',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Adel',
                'penjualan_kode' => 'AS8',
                'penjualan_tanggal' => '2024-06-18',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Alodia',
                'penjualan_kode' => 'AS9',
                'penjualan_tanggal' => '2024-06-19',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Arif',
                'penjualan_kode' => 'AS10',
                'penjualan_tanggal' => '2024-06-19',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}