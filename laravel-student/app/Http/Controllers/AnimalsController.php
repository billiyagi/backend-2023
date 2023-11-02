<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AnimalsController extends Controller
{
    public $animals = ['kucing', 'anjing', 'burung', 'tikus'];

    // Get all animals data
    public function index()
    {
        echo "Menampilkan data animals";
        foreach ($this->animals as $animal) {
            echo "<li>$animal</li>";
        }
    }

    // Store data to array
    public function store(Request $request, Response $response)
    {
        array_push($this->animals, $request->name);
        echo "Menambahkan data animals";

        foreach ($this->animals as $animal) {
            echo "<li>$animal</li>";
        }
    }

    // Update data to array
    public function update(Request $request, $id)
    {
        $this->animals[$id - 1] = $request->name;
        echo "Mengubah data animals";
        foreach ($this->animals as $animal) {
            echo "<li>$animal</li>";
        }
    }

    // Delete data from array by id
    public function destroy(Request $request)
    {
        array_splice($this->animals, $request->id - 1, 1);
        echo "Menghapus data animals";
        foreach ($this->animals as $animal) {
            echo "<li>$animal</li>";
        }
    }
}
