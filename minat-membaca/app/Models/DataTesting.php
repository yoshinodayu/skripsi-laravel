<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTesting extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function responden2() 
    {
        return $this->belongsTo(Responden2::class);
    }
}
