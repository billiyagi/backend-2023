const fruits = require('../data/data.js');

// Menampilkan semua data
const index = () => {
    console.log(`Method Index - Menampilkan buah`)
    for (const fruit of fruits) {
        console.log(fruit);
    }
}

// Menampilkan 1 data berdasarkan index
const show = (position) => {
    console.log(`Method show - Menampilkan 1 buah ${fruits[position]}`)
}

// Menambahkan data
const store = (name) => {
    console.log(`Method store - Menambahkan data buah`)
    fruits.push(name);
    index();
}

// Mengubah data
const update = (position, name) => {
    console.log(`Method update - Mengubah data buah ${fruits[position]} menjadi ${name}`)
    fruits[position] = name;
    index();
}

// Menghapus data
const destroy = (position) => {
    console.log(`Method destroy - Menghapus data buah ${fruits[position]}`)
    fruits.splice(position, 1);
    index();
}

module.exports = { index, store, update, destroy, show };