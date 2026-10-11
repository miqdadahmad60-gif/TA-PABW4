<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Mengambil data siswa beserta relasi ke tabel class menggunakan model
        $students = Student::with('class')->get();

        // Mengirim data ke view
        return view('students.index', compact('students'));
    }
}