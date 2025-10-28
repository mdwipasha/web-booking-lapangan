<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //make seeder for fields table
        Field::create([
            'name' => 'Lapangan A',
            'description' => 'Lapangan sepak bola dengan rumput sintetis berkualitas tinggi.',
            'price_per_hour' => 150000.00,
            'location' => 'Jl. Merdeka No. 10, Jakarta',
            'latitude' => '-6.200000',
            'longtitude' => '106.816666',
            'is_active' => true,
        ]);
        Field::create([
            'name' => 'Lapangan B',
            'description' => 'Lapangan futsal indoor dengan fasilitas lengkap.',
            'price_per_hour' => 200000.00,
            'location' => 'Jl. Sudirman No. 20, Jakarta',
            'latitude' => '-6.210000',
            'longtitude' => '106.820000',
            'is_active' => true,
        ]);
        Field::create([
            'name' => 'Lapangan C',
            'description' => 'Lapangan basket outdoor dengan pencahayaan malam hari.',
            'price_per_hour' => 100000.00,
            'location' => 'Jl. Thamrin No. 30, Jakarta',
            'latitude' => '-6.220000',
            'longtitude' => '106.830000',
            'is_active' => false,
        ]);
    }
}
