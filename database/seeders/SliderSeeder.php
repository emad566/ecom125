<?php

namespace Database\Seeders;

use App\Models\Slider;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i=0; $i<20; $i++){
            Slider::create([
                'type'=>"type $i",
                'title'=>"title $i",
                'starting_price'=>"20 $i",
                'btn_url'=>"btn_url $i",
                'serial'=>"serial $i",
            ]);
        }
    }
}
