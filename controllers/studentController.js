const studentData = require('../data/student');
const Student = require('../models/Student');

class StudentController {

    /** 
     * Mengambil semua data students
    */
    async index(req, res) {
        // get all students
        const students = await Student.all();

        const student = {
            message: 'Menampilkan semua students',
            data: students
        }
        return res.json(student);
    }

    /** 
     * Menyimpan data student baru
    */
    async store(req, res) {
        const studentModel = new Student();
        const students = await studentModel.save(req.body);
        return res.json({
            message: `Berhasil membuat student baru`,
            data: students
        });
    }

    /** 
     * Menampilkan data student by id
    */
    async show(req, res) {
        const userId = req.params.id;
        const student = await Student.find(userId);
        return res.json({
            message: `Menampilkan student dengan id ${req.params.id}`,
            data: student
        });
    }

    /** 
     * Mengubah data student by id
    */
    async update(req, res) {
        const studentModel = new Student();
        const userId = req.params.id;
        const result = await studentModel.update(userId, req.body);


        return res.json({
            message: `Mengupdate student dengan id ${req.params.id}`,
            data: result
        });
    }

    /** 
     * Menghapus data student by id
    */
    async destroy(req, res) {
        const userId = req.params.id;
        const studentModel = new Student();
        const result = await studentModel.delete(userId);

        return res.json({
            message: `Menghapus student dengan id ${req.params.id}`,
            data: result
        });
    }
}

const object = new StudentController();

module.exports = object;