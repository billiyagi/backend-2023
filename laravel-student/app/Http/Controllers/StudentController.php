<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Student $student)
    {
        return response()->json([
            'success' => true,
            'message' => 'Daftar data mahasiswa',
            'data' => $student->all()
        ], 200);
    }

    public function store(Student $student)
    {
        $student::create([
            'nama' => request()->nama,
            'nim' => request()->nim,
            'jurusan' => request()->jurusan,
            'email' => request()->email
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data mahasiswa berhasil disimpan',
            'data' => $student
        ], 200);
    }

    public function update($id, Request $request, Student $student)
    {

        $student = $student->find($id);
        $student->update([
            'nama' => request()->nama,
            'nim' => request()->nim,
            'jurusan' => request()->jurusan,
            'email' => request()->email
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data mahasiswa berhasil diupdate',
            'data' => $student
        ], 200);
    }

    public function destroy($id, Student $student)
    {
        $student = $student->find($id);
        $student->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data mahasiswa berhasil dihapus',
            'data' => $student
        ], 200);
    }
}
