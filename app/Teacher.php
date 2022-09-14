<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function madrasha()
    {
        return $this->belongsTo(Madrasha::class);
    }

    protected $fillable = ['id','teacher', 'role', 'teacherideology', 'teacheraddress','madrasha_id'];
}
