<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AlamatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       DB::table('alamats')->insert([
           'nama' => 'Priyo Pujonggo',
           'address' => 'Pengadegan, RT004/012, Pengadegan',
           'city' => 'Purbalingga',
           'state' => 'Jawa Tengah',
           'hours' => '9:00am-6:00pm',
           'latitude' =>-7.364885626461162, 
           'longitude' =>109.48188815795508,
           'created_at' => date( format: 'Y-m-d H:i:s'),
           'updated_at' => date( format: 'Y-m-d H:i:s'),

       ]);
    }
}
