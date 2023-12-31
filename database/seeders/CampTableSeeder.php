<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila_Belajar',
                'slug' => 'gila_belajar',
                'price' => 280,
                'created_at' => date ('Y-m-d H:i:s', time()),
                'updated_at' => date ('Y-m-d H:i:s', time()),    
            ],
            
            [
                'title' => 'Baru_Mulai',
                'slug' => 'baru_mulai',
                'price' => 140,
                'created_at' => date ('Y-m-d H:i:s', time()),
                'updated_at' => date ('Y-m-d H:i:s', time()),    
            ],    
         ];

         foreach ($camps as $key => $camp) {
            Camp::create($camp);
         }

    }
}