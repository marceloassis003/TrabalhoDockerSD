const express = require('express');
const mysql = require('mysql');

const app = express();

const connection = mysql.createConnection({
    host: '172.17.0.3',
    user: 'root',
    password: 'trabalhoSD'
    database: 'trabalhoSD'
});

connection.connect();

app.get('/quarentena', function(req, res){
    connection.query('SELECT * FROM quarentena', function (error, results) {
        if(error){
            throw error 
        };

        res.send(results.map(atividade => ({ atividade: atividade.atividade, descricao: atividade.descricao }
            )));
    });
});

app.listen(9000, '0.0.0.0', function(){
    console.log('Listening on port 9000');
})

