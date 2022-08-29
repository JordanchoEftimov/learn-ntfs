<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Lecture extends Model
{
    use HasFactory;

    protected $fillable = ['paragraph', 'image'];

    public function quiz(): HasOne
    {
        return $this->hasOne(Quiz::class);
    }
}
