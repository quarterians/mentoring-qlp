<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pillar extends Model
{
    use HasFactory;

    protected $table = 'pillars';

    public function expertises(){
        return $this->hasMany(Expertise::class);
    }
}
