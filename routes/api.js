const express = require('express');
const StudentController = require('../controllers/studentController');
const router = express.Router();

router.get('/', (req, res) => {
    res.send('Hello World');
})

router.get('/about', (req, res) => {
    res.send('Hello my about');
})



// routing Student
router.get('/students', StudentController.index);
router.post('/students', StudentController.store);
router.get('/students/:id', StudentController.show);
router.put('/students/:id', StudentController.update);
router.delete('/students/:id', StudentController.destroy);

module.exports = router;