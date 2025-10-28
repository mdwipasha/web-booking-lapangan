<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::create([
            'name' => 'Team Alpha Booking',
            'user_id' => 1,
            'field_id' => 1,
            'date' => '2023-11-01',
            'start_time' => '10:00:00',
            'end_time' => '12:00:00',
            'total_price' => 300000.00,
            'status' => 'confirmed',
            'phone_number' => '081234567890',
            'note' => 'Please prepare the field in advance.',
        ]);
        Booking::create([
            'name' => 'Team Beta Booking',
            'user_id' => 2,
            'field_id' => 2,
            'date' => '2023-11-02',
            'start_time' => '14:00:00',
            'end_time' => '16:00:00',
            'total_price' => 400000.00,
            'status' => 'pending',
            'phone_number' => '089876543210',
            'note' => 'We will bring our own equipment.',
        ]);
    }
}
