<?php

namespace Database\Seeders;

use App\Models\Roll;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Sample Dummy Users Array
        $rolls = [
            [
                'barcodeRoll'=>'a3d07b6b3958c37aa17d554a37293bac',
                'source'=>'esfahan',
                'weight'=>'5000'
            ],
            [
                'barcodeRoll'=>'b64fc875dfb241092ac597a29bd10869',
                'source'=>'kashan',
                'weight'=>'8000'
            ]
        ];

        // Looping and Inserting Array's Users into User Table
        foreach($rolls as $roll){
            Roll::create($roll);
        }
    }
}
