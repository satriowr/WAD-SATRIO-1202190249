<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccines extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
    ];

    public function patient(){
        return $this->belongsTo(patients::class, 'vaccine_id', 'id');
    }
}
