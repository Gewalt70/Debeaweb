const express = require('express');
const mysql = require('mysql2');
const cors = require('cors');
 
const app = express();
const port = 3000;
 
app.use(cors());
app.use(express.json());
 
// Configurer la connexion à la base de données MySQL
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',       // Remplacez par votre nom d'utilisateur MySQL
    password: '',       // Remplacez par votre mot de passe MySQL
    database: 'ddblvsp1' // Remplacez par le nom de votre base de données
});
 
// Connexion à la base de données
db.connect(err => {
    if (err) {
        console.error('Erreur de connexion à la base de données:', err);
        return;
    }
    console.log('Connecté à la base de données MySQL');
});
 
// Endpoint pour la recherche
app.get('/rechercher', (req, res) => {
    const { champ1, champ2 } = req.query;
 
    let query = 'SELECT * FROM palettes';
    const params = [];
 
    if (champ1) {
        query += ' AND champ1 LIKE ?';
        params.push(`%${champ1}%`);
    }
 
    if (champ2) {
        query += ' AND champ2 LIKE ?';
        params.push(`%${champ2}%`);
    }
 
    db.query(query, params, (err, results) => {
        if (err) {
            console.error('Erreur lors de la requête:', err);
            res.status(500).send('Erreur lors de la requête');
            return;
        }
        res.json(results);
    });
});
 
app.listen(port, () => {
    console.log(`Serveur en cours d'exécution sur http://localhost:${port}`);
});