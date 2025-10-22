<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRO8L3M</title>
    <link rel="stylesheet" href="..\css\style.css">
</head>
<body>
    <div id="background"></div>
    <header><h1>CHILL ROOM</h1>
        <img src="../pics/ustawienia.png" alt="motyw i czcionka" id="ustawienia" height="40px" width="40px">
        <ul id="lista-ustawien">
            <li id="motyw-li">
                Motyw:
                <select id="motyw-select">
                    <option value="default">Czarny - domyślny</option>
                    <option value="fiolet">Fioletowy</option>
                    <option value="niebieski">Niebieski</option>
                </select>
            </li>
            <li id="motyw-li">Czcionka
                <select id="czcionka-select">
                    <option value="16">Domyślny</option>
                    <option value="18">Większy</option>
                    <option value="20">Duży</option>
                    <option value="24">Bardzo duży</option>
                </select>
                <button id="reset-czcionka" type="button">Reset</button>
            </li>
        </ul>
        <div id="zegar"></div>
        <hr>
        <div class="menu">
            <div class="logout">
                <button onclick="location.href='php-login-project/public/login.php'">Wyloguj</button>
            </div>
            <button onclick="location.href='index.php'">Strona Główna</button>
            <button onclick="location.href='dyskografia.php'">Dyskografia</button>
            <button onclick="location.href='produkty.php'">Produkty</button>
            <button onclick="location.href='gra.php'">Gra</button>
        </div>
    </header>
    <main>
        <div class="container">
            <h1>SpaceShips</h1>
        <canvas id="gameCanvas" width="800" height="600"></canvas>
        <div id="score">Score: 0</div>
        <button id="startButton">Start Game</button>
        <script src="../JS/game.js"></script>
    </div>
    </main>
    <footer></footer>
    <script>
const ustawienia = document.getElementById('ustawienia');
const lista = document.getElementById('lista-ustawien');
const motywSelect = document.getElementById('motyw-select');
const czcionkaSelect = document.getElementById('czcionka-select');
const resetCzcionkaBtn = document.getElementById('reset-czcionka');
const background = document.getElementById('background');
let otwarte = false;

ustawienia.addEventListener('click', () => {
    otwarte = !otwarte;
    ustawienia.classList.toggle('rotated', otwarte);
    lista.style.display = otwarte ? 'block' : 'none';
});

motywSelect.addEventListener('change', function() {
    document.body.className = '';
    background.className = '';
    if (this.value !== 'default') {
        document.body.classList.add('motyw-' + this.value);
        background.classList.add('motyw-' + this.value);
    }
});

czcionkaSelect.addEventListener('change', function() {
    document.documentElement.style.fontSize = this.value + 'px';
});

resetCzcionkaBtn.addEventListener('click', function() {
    document.documentElement.style.fontSize = '16px';
    czcionkaSelect.value = '16';
});

function aktualizujZegar() {
    const zegar = document.getElementById('zegar');
    const teraz = new Date();
    const godzina = String(teraz.getHours()).padStart(2, '0');
    const minuta = String(teraz.getMinutes()).padStart(2, '0');
    const sekunda = String(teraz.getSeconds()).padStart(2, '0');
    zegar.textContent = `${godzina}:${minuta}:${sekunda}`;
}
setInterval(aktualizujZegar, 1000);
aktualizujZegar();
</script>
</body>
</html>