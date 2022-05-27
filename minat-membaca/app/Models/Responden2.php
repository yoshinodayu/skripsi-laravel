<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responden2 extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function data_testing() 
    {
        return $this->belongsTo(DataTesting::class);
    }
}
