<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'category'=> "Vape Mod",
                'description'=>'All Vape Mode items',
            ],
            [
                'category'=> "Vape Juice",
                'description'=>'All Vape Juice items',
            ],
            [
                'category'=> "Wires",
                'description'=>'All Wires items',
            ],
            [
                'category'=> "Atomizer",
                'description'=>'All Atomizer items',
            ],
            [
                'category'=> "Accessories",
                'description'=>'All Accessories items',
            ],
        ];
        foreach($data as $c){
            \App\Category::create($c);
        }
    }
}
