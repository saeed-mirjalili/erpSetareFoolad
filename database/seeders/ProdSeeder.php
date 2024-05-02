<?php

namespace Database\Seeders;

use App\Models\Prod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Sample Dummy Users Array
        $prods = [
            [
                'barcodeCut'=>'9e99d247e7da84dd5b8b3956bcdd8437',
                'barcodeProd'=>md5(uniqid(rand(),true)),
                'type'=>'20.20',
                'numOfPack'=>40,
                'weight'=>2000
            ],
            [
                'barcodeCut'=>'7a9eff9835c00edf2dd0a42e00c4de7c',
                'barcodeProd'=>md5(uniqid(rand(),true)),
                'type'=>'30.30',
                'numOfPack'=>42,
                'weight'=>3000
            ]
        ];

        // Looping and Inserting Array's Users into User Table
        foreach($prods as $prod){
            Prod::create($prod);
        }
    }
}

