<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $table = 'classes';
    protected $fillable = ['nama_kelas', 'tingkat'];

    public function students()
    {
        return $this->hasMany(Student::class, 'class_id');
    }
}