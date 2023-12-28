const studentData = require('../data/student');

class StudentController {
    index(req, res) {
        const student = {
            message: 'Menampilkan semua students',
            data: studentData
        }
        return res.json(student);
    }

    store(req, res) {
        // console.log(req.body, 'wkwkw');
        const { name, age, address } = req.body;
        return res.json({
            message: `Membuat student baru, data: ${name}, usia: ${age} dan alamat: ${address}`
        });
    }

    show(req, res) {
        return res.send(`Menampilkan student dengan id ${req.params.id}`);
    }

    update(req, res) {
        return res.send(`Mengupdate student dengan id ${req.params.id}`);
    }

    destroy(req, res) {
        return res.send(`Menghapus student dengan id ${req.params.id}`);
    }
}

const object = new StudentController();

module.exports = object;