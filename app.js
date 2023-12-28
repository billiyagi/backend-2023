const express = require('express');
const app = express();
const bodyParser = require('body-parser');
const router = require('./routes/api');

// Middleware
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

app.use(router);

console.log('Server running at http://localhost:3000/');
app.listen(3000);