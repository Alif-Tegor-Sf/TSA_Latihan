<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
            'image' => '/template/img/cappuccino.jpg',
            'nama' => 'Alif Tegro surya Faridzki',
            'tanggal' => '2022/09/08'],
            [
            'image' => '/template/img/espresso.jpg',
            'nama' => 'Muhammad Akbar Azmi',
            'tanggal' => now()],
            [
            'image' => '/template/img/red eye.jpg',
            'nama' => 'Jhon Baker',
            'tanggal' => now()],
            [
            'image' => '/template/img/kothok.jpeg',
            'nama' => 'Rey Akbar',
            'tanggal' => now()],
            [
            'image' => '/template/img/toraja.jpeg',
            'nama' => 'Lionel Ramon',
            'tanggal' => now()]

        ]);
    }
}
