// instale no seu pc o programa Node.js
// escreva no terminal do seu pc: cd C:\xampp\htdocs\TCC\TCCA\TCCA\SiteTcc\TCC\Frontend
// execute: npm install express axios
// digite node index.js

const express = require('express');
const axios = require('axios');
const app = express();
app.use((req, res, next) => {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
});

const port = 3000;

app.get('/cep/:cep', async (req, res) => {
    const cep = req.params.cep;

    try {
        const response = await axios.get(`https://viacep.com.br/ws/${cep}/json/`);
        const data = response.data;

        if (data.erro) {
            res.status(404).json({ error: 'CEP não encontrado' });
        } else {
            res.json(data);
        }
    } catch (error) {
        res.status(500).json({ error: 'Erro ao buscar o CEP' });
    }
});

app.listen(port, () => {
    console.log(`Servidor rodando em http://localhost:${port}`);
});
