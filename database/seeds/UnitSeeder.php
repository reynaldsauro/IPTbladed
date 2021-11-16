<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'unit_type'=> "Pieces",
                'description'=>'Count of the Vape Mod',
            ],
            [
                'unit_type'=> "Nic MG",
                'description'=>'Nicotine level',
            ],
            [
                'unit_type'=> "Juice ML",
                'description'=>'Milligram of the Bottle',
            ],
            [
                'unit_type'=> "Bundle",
                'description'=>'Units of Wires',
            ],
        ];
        foreach($data as $u){
            \App\Unit::create($u);
        }
    }
}