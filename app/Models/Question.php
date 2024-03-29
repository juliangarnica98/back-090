<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'week',
        'status',
    ];
    public function answer() 
    {
        return $this->hasOne(Answer::class);
    }
    public function header()
    {
        return $this->belongsTo(Header::class);
    }

}
