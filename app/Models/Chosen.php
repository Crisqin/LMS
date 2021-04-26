<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chosen extends Model
{
    use HasFactory;
    protected $fillable = ['subject_id','user_id'];
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
