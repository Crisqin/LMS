<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solutions extends Model
{
    use HasFactory;
    protected $fillable = ['name','solution_text','solution_statue','tasks_id','points','student_name','evaluated_at'];

    public function tasks()
    {
        return $this->belongsTo(Tasks::class);
    }
}
