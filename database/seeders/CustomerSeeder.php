<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            [
            'image' => '/template/img/cappuccino.jpg',
            'nama' => 'Alif Tegro surya Faridzki',
            'tanggal' => 'now'()],
            [
            'image' => '/template/img/espresso.jpg',
            'nama' => 'Muhammad Akbar Azmi',
            'tanggal' => now()]

        ]);
    }
}