<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cut extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded;

//    public function roll()
//    {
//        return $this->belongsTo(Roll::class , 'barcodeRoll' , 'barcodeRoll');
//    }
}
