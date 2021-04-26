<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'points', 'subjects_id' ];

    public function subject()
    {
        return $this->belongsTo(Subjects::class);
    }

    public function solutions()
    {
        return $this->hasMany(Solutions::class);
    }
}
