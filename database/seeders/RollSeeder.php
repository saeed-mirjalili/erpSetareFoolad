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
                'source'=>'esfahan',
                'weight'=>'5000'
            ],
            [
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
