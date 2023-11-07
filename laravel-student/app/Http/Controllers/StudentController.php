<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\students\StoreRequest;
use App\Http\Requests\students\UpdateRequest;

class StudentController extends Controller
{
    public function index(Student $student)
    {
        if ($student->all()) {
            return response()->json([
                'success' => true,
                'message' => 'Daftar data mahasiswa',
                'data' => $student->all()
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Daftar data mahasiswa',
                'data' => []
            ], 404);
        }
    }

    public function show(Student $student, $id)
    {

        $student = $student->find($id);

        if ($student) {
            return response()->json([
                'success' => true,
                'message' => 'Detail data mahasiswa',
                'data' => $student
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data mahasiswa tidak ditemukan',
                'data' => ''
            ], 404);
        }
    }

    public function store(Student $student, StoreRequest $storeStudentRequest,)
    {
        $storeStudentRequest->validated();

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

    public function update(Student $student, UpdateRequest $updateRequest, $id)
    {

        $updateRequest->validated();

        $student = $student->find($id);

        if ($student) {
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
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data mahasiswa tidak ditemukan',
                'data' => ''
            ], 404);
        }
    }

    public function destroy($id, Student $student)
    {
        if ($student) {
            $student = $student->find($id);
            $student->delete();

            return response()->json([
                'success' => true,
                'message' => 'Data mahasiswa berhasil dihapus',
                'data' => $student
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data mahasiswa tidak ditemukan',
                'data' => ''
            ], 404);
        }
    }
}
