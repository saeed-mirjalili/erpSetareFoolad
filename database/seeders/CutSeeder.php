<?php

namespace Database\Seeders;

use App\Models\Cut;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Sample Dummy Users Array
        $cuts = [
            [
                'barcodeRoll'=>'a3d07b6b3958c37aa17d554a37293bac',
                'barcodeCut'=>md5(uniqid(rand(),true)),
                'width'=>'75'
            ],
            [
                'barcodeRoll'=>'b64fc875dfb241092ac597a29bd10869',
                'barcodeCut'=>md5(uniqid(rand(),true)),
                'width'=>'108'
            ]
        ];

        // Looping and Inserting Array's Users into User Table
        foreach($cuts as $cut){
            Cut::create($cut);
        }
    }
}
