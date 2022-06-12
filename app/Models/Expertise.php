<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Expertise extends Model
{
    use HasFactory;

    protected $table = 'expertises';

    public function pillar(){
        return $this->belongsTo(Pillar::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

}
