<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRO8L3M</title>
    <link rel="stylesheet" href="..\css\style.css">
</head>
<body>
    <div id="cookieConsent" style="display: none;">
            <p>Ta strona używa plików cookie do personalizacji treści. Czy akceptujesz?</p>
            <button onclick="akceptujCookie()">Akceptuj</button>
            <button onclick="odrzucCookie()">Odrzuć</button>
        </div>
    <div id="background"></div>
    <header><h1>PRO8L3M</h1>
        <img src="../pics/ustawienia.png" alt="motyw i czcionka" id="ustawienia" height="40px" width="40px" tabindex="0">
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
        <h2>Popularne Wydania</h2>
        <div id="row1">
        <iframe 
        data-testid="embed-iframe" 
        style="border-radius:12px" 
        src="https://open.spotify.com/embed/track/7gPbVDk8Es7AVHTLUFq6CU?utm_source=generator" 
        width="45%" 
        height="352" 
        frameBorder="0" 
        allowfullscreen="" 
        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
        loading="lazy">
    </iframe>
        <iframe 
        data-testid="embed-iframe" 
        style="border-radius:12px" 
        src="https://open.spotify.com/embed/track/1088WwNMjp0QWvEP3aOgsf?utm_source=generator" 
        width="45%" 
        height="352" 
        frameBorder="0" 
        allowfullscreen="" 
        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
        loading="lazy">
    </iframe>
    </div>
    <div id="row2">
    </iframe>
        <iframe 
        data-testid="embed-iframe" 
        style="border-radius:12px" 
        src="https://open.spotify.com/embed/track/7t3iKbFf34FK5syqppOlIx?utm_source=generator" 
        width="45%" 
        height="352" 
        frameBorder="0" 
        allowfullscreen="" 
        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
        loading="lazy">
    </iframe>
    </iframe>
        <iframe 
        data-testid="embed-iframe" 
        style="border-radius:12px" 
        src="https://open.spotify.com/embed/track/2WFSy9WBAdKH8RnwL5deH2?utm_source=generator" 
        width="45%" 
        height="352" 
        frameBorder="0" 
        allowfullscreen="" 
        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
        loading="lazy">
    </iframe>
    </div>
    <div id="row3">
        <iframe 
        data-testid="embed-iframe" 
        style="border-radius:12px" 
        src="https://open.spotify.com/embed/track/0SSzxRyRVHfVZywNMlvuIp?utm_source=generator" 
        width="45%" 
        height="352" 
        frameBorder="0" 
        allowfullscreen="" 
        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
        loading="lazy">
    </iframe>
        <iframe 
        data-testid="embed-iframe" 
        style="border-radius:12px" 
        src="https://open.spotify.com/embed/track/6xon2TKhlpJCN8zP7tOp8C?utm_source=generator" 
        width="45%" 
        height="352" 
        frameBorder="0" 
        allowfullscreen="" 
        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
        loading="lazy">
    </iframe>
    </div>
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

function sprawdzZgodę() {
    let zgoda = pobierzCookie("cookieConsent");
    if (!zgoda) {
        document.getElementById("cookieConsent").style.display = "block";
    } else if (zgoda === "accepted") {
        pokazRekomendacje();
    } else {
        document.getElementById("rekomendacja").innerHTML = "Pliki cookie zostały odrzucone. Nie wyświetlamy personalizowanych treści.";
    }
}

function akceptujCookie() {
    ustawCookieZgody("accepted");
    document.getElementById("cookieConsent").style.display = "none";  
    pokazRekomendacje();  
}

function odrzucCookie() {
    ustawCookieZgody("rejected");
    document.getElementById("cookieConsent").style.display = "none";
    document.getElementById("rekomendacja").innerHTML = "Pliki cookie zostały odrzucone. Nie wyświetlamy personalizowanych treści.";
}

function ustawCookieZgody(value) {
    document.cookie = "cookieConsent=" + value + "; path=/; max-age=31536000";
}

function pobierzCookie(name) {
    let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
    if (match) return match[2];
    return null;
}

function pokazRekomendacje() {
    document.getElementById("rekomendacja").innerHTML = "Dziękujemy za akceptację plików cookie! Oto Twoje rekomendacje.";
}

window.onload = sprawdzZgodę;
</script>
</body>
</html>