const db = require('../config/database');

class Student {
    static all() {
        return new Promise((resolve, reject) => {
            // query ke database
            const query = 'SELECT * FROM students';
            db.query(query, (err, results, fields) => {
                if (err) {
                    reject(err);
                } else {
                    resolve(results);
                }
            });
        });

    }

    save(data) {
        return new Promise((resolve, reject) => {
            // query ke database
            const query = 'INSERT INTO students SET ?';
            db.query(query, data, (err, results, fields) => {
                if (err) {
                    reject(err);
                } else {
                    resolve(results);
                }
            });
        });
    }

    static find(id) {
        return new Promise((resolve, reject) => {
            // query ke database
            const query = 'SELECT * FROM students WHERE id = ?';
            db.query(query, [id], (err, results, fields) => {
                if (err) {
                    reject(err);
                } else {
                    resolve(results[0]);
                }
            });
        });
    }

    update(id, data) {
        return new Promise((resolve, reject) => {
            // query ke database
            const query = 'UPDATE students SET ? WHERE id = ?';
            // sesuai urutan [data,id]
            db.query(query, [data, id], (err, results, fields) => {
                if (err) {
                    reject(err);
                } else {
                    resolve(results);
                }
            });
        });
    }

    delete(id) {
        return new Promise((resolve, reject) => {
            // query ke database
            const query = 'DELETE FROM students WHERE id = ?';
            db.query(query, [id], (err, results, fields) => {
                if (err) {
                    reject(err);
                } else {
                    resolve(results);
                }
            });
        });
    }
}

module.exports = Student;