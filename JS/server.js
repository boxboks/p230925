const express = require('express');
const session = require('express-session');
const path = require('path');
const app = express();

const USER = 'admin';
const PASS = 'haslo123';

app.use(express.urlencoded({ extended: true }));
app.use(express.static(path.join(__dirname, 'html')));
app.use(express.static(path.join(__dirname, 'css')));
app.use(session({
    secret: 'tajnyklucz',
    resave: false,
    saveUninitialized: true
}));

// Strona logowania
app.get('/login', (req, res) => {
    res.sendFile(path.join(__dirname, 'html', 'login.html'));
});

// Obsługa logowania
app.post('/login', (req, res) => {
    const { username, password } = req.body;
    if (username === USER && password === PASS) {
        req.session.loggedIn = true;
        res.redirect('/index.html'); // <-- Teraz przekierowuje na index.html
    } else {
        res.send(`<p style="color:red;">Błędny login lub hasło!</p><a href="/login">Powrót</a>`);
    }
});

// Panel CMS (tylko po zalogowaniu)
app.get('/cms', (req, res) => {
    if (req.session.loggedIn) {
        res.sendFile(path.join(__dirname, 'html', 'cms.html'));
    } else {
        res.redirect('/login');
    }
});

// Wylogowanie
app.get('/logout', (req, res) => {
    req.session.destroy(() => {
        res.redirect('/login');
    });
});

// Start serwera
app.listen(3000, () => {
    console.log('Serwer działa na http://localhost:3000');
});