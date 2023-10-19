<?php

class Animal
{
    public $animals;

    public function __construct($animals)
    {
        $this->animals = $animals;
    }

    // Get all animals data
    public function index()
    {
        return $this->animals;
    }

    // Store data to array
    public function store($animal)
    {
        $this->animals[] = $animal;
        return 'Stored successfully';
    }

    // Update data to array
    public function update($index, $animal)
    {
        $this->animals[$index] = $animal;
        return 'Updated successfully';
    }

    // Delete data from array by id
    public function destroy()
    {
    }
}



$animalClass = new Animal([
    [
        'id' => 1,
        'name' => 'Cat',
        'color' => 'Black',
        'age' => 2,
        'weight' => 5,
        'height' => 10,
        'description' => 'Cat is a pet'
    ],
    [
        'id' => 2,
        'name' => 'Dog',
        'color' => 'White',
        'age' => 3,
        'weight' => 10,
        'height' => 20,
        'description' => 'Dog is a pet'
    ],
    [
        'id' => 3,
        'name' => 'Bird',
        'color' => 'Yellow',
        'age' => 1,
        'weight' => 1,
        'height' => 5,
        'description' => 'Bird is a pet'
    ],
    [
        'id' => 4,
        'name' => 'Fish',
        'color' => 'Blue',
        'age' => 1,
        'weight' => 1,
        'height' => 5,
        'description' => 'Fish is a pet'
    ],
    [
        'id' => 5,
        'name' => 'Rabbit',
        'color' => 'Brown',
        'age' => 1,
        'weight' => 1,
        'height' => 5,
        'description' => 'Rabbit is a pet'
    ],
]);

$animalBeforeChanges = $animalClass->index();

// Store data to array
$animalClass->store([
    'id' => 6,
    'name' => 'Tiger',
    'color' => 'Orange',
    'age' => 5,
    'weight' => 100,
    'height' => 50,
    'description' => 'Tiger is a pet'
]);

$animalAfterStores = $animalClass->index();

// Update data to array
$animalClass->update(2, [
    'id' => 2,
    'name' => 'Chicken',
    'color' => 'black',
    'age' => 1,
    'weight' => 3,
    'height' => 15,
    'description' => 'Chicken is for eat'
]);

$animalAfterUpdates = $animalClass->index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Animal classes</h1>


        <!-- Animal before Changes anything -->
        <div id="beforeChange">
            <p class="bg-light p-3 border-start border-4 border-danger">Menampilkan semua data animal dan sebelum diubah</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Warna</th>
                        <th>Usia</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($animalBeforeChanges as $animalBeforeChange) : ?>
                        <tr>
                            <td><?php echo $animalBeforeChange['name']; ?></td>
                            <td><?php echo $animalBeforeChange['color']; ?></td>
                            <td><?php echo $animalBeforeChange['age']; ?></td>
                            <td><?php echo $animalBeforeChange['description']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>


        <!-- Animal after store data -->
        <div id="afterUpdate" class="my-5">
            <p class="bg-light p-3 border-start border-4 border-danger">Menampilkan semua data animal setelah data di simpan menggunakan method store</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Warna</th>
                        <th>Usia</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($animalAfterStores as $animalAfterStore) : ?>
                        <tr>
                            <td><?php echo $animalAfterStore['name']; ?></td>
                            <td><?php echo $animalAfterStore['color']; ?></td>
                            <td><?php echo $animalAfterStore['age']; ?></td>
                            <td><?php echo $animalAfterStore['description']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Animal after updated data -->
        <div id="afterUpdate" class="my-5">
            <p class="bg-light p-3 border-start border-4 border-danger">Menampilkan semua data animal setelah data di update dengan menambahkan data ayam</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Warna</th>
                        <th>Usia</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($animalAfterUpdates as $animalAfterUpdate) : ?>
                        <tr>
                            <td><?php echo $animalAfterUpdate['name']; ?></td>
                            <td><?php echo $animalAfterUpdate['color']; ?></td>
                            <td><?php echo $animalAfterUpdate['age']; ?></td>
                            <td><?php echo $animalAfterUpdate['description']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>




    </div>

</body>

</html>