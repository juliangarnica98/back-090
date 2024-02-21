<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
    ];

    public function question() {
        return $this->hasMany(Question::class);
      }
}
