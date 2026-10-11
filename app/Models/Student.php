<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['class_id', 'nisn', 'nama_lengkap', 'jenis_kelamin', 'alamat'];

    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }
}