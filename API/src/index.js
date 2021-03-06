import express from 'express';
import { createConnection } from 'mysql';

const app = express();

const connection = createConnection ({
    host: 'mysql-container',
    user: 'root',
    password: 'trabalhoSD',
    database: 'trabalhoSD'
});

connection.connect();

app.get('/quarentena', function(req, res){
    connection.query('SELECT * FROM quarentena', function (error, results) {
        
        if (error) {
            throw error 
        };

        res.send(results.map(item => ({ atividade: item.atividade, descricao: item.descricao })));
     });
});

app.listen(9001, '0.0.0.0', function() {
    console.log('Listening on port 9001');
})

