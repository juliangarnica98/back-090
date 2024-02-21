<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
    ];
    
    public function regional(){
        return $this->belongsTo(Regional::class);
    }
    public function user(){
        return $this->hasOne(User::class);
    }
}
