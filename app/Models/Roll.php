<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roll extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];

    public function cut()
    {
        return $this->hasMany(Cut::class, 'barcodeRoll' , 'barcodeRoll');
    }
}
