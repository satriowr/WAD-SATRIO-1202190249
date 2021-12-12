<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function vaccine(){
        return $this->belongsTo(Vaccines::class, 'vaccine_id', 'id');
    }
}
