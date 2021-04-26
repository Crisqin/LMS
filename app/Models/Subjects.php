<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subjects extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name','code', 'credit_value','description','user_id'];
    protected $dates = ['delete_at'];

    public function tasks()
    {
        return $this->hasMany(Tasks::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function students()
    {
        return $this->belongsToMany(User::class,'subjects_user','user_id','subjects_id');
    }
}
