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
    <header><h1>PRO8L3M</h1>
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
                <button onclick="location.href='php-login-project/public/login.php'" id="logout"><img src="../pics/logout.png" alt="" height="60px" style="filter: brightness(10) invert(1);"></button>
            </div>
            <button onclick="location.href='index.php'">Strona Główna</button>
            <button onclick="location.href='dyskografia.php'">Dyskografia</button>
            <button onclick="location.href='produkty.php'">Produkty</button>
            <button onclick="location.href='gry.php'">Gry</button>
        </div>
    </header>
    <main>
        <div class="container" id="dyskografia">
            <h2>Dyskografia PRO8L3M</h2>
            <p style="text-align: center; font-size: 1.1em;" id="dyskografia">Poniżej znajdziesz kompletną dyskografię duetu PRO8L3M (Oskar i Steez), w tym albumy studyjne, mixtape'y, EP-ki oraz wybrane single i współprace. Informacje oparte na oficjalnych wydawnictwach. Daty premiery podane w formacie rok-miesiąc-dzień, gdzie dostępne.</p>

        <h2>Albumy studyjne</h2>
        <section>
            <div class="album-section">
                <aside>
                <h3>Art Brut</h3>
                <p id="p"><strong>Data premiery:</strong> 2014-10-31</p>
                <p id="p"><strong>Wydawca:</strong> Self-released / 700Blond Records</p>
                <h4>Tracklista:</h4>
                <ol class="tracklist">
                    <li>Intro</li>
                    <li>Art Brut</li>
                    <li>W samo południe</li>
                    <li>Gang</li>
                    <li>Podróże po orbitach</li>
                    <li>1996</li>
                    <li>Flava w twojej twarzy</li>
                    <li>2014</li>
                    <li>Outro</li>
                </ol>
                </aside>
            </div>

            <div class="album-section">
                <aside>
                <h3>C30-C39</h3>
                <p id="p"><strong>Data premiery:</strong> 2016-11-18</p>
                <p id="p"><strong>Wydawca:</strong> 700Blond Records</p>
                <h4>Tracklista:</h4>
                <ol class="tracklist">
                    <li>C30-C39</li>
                    <li>Eurogeddon</li>
                    <li>2016</li>
                    <li>Podróże po orbitach (Mixtape Version)</li>
                    <li>Ground Zero</li>
                    <li>Flava w twojej twarzy (Mixtape Version)</li>
                    <li>1996 (Mixtape Version)</li>
                    <li>Outro 2016</li>
                </ol>
                </aside>
            </div>
    </section>
    <section>
        <div class="album-section">
            <aside>
            <h3>Ground Zero</h3>
            <p id="p"><strong>Data premiery:</strong> 2018-11-09</p>
            <p id="p"><strong>Wydawca:</strong> 700Blond Records / Sony Music Poland</p>
            <h4>Tracklista:</h4>
            <ol class="tracklist">
                <li>Ground Zero</li>
                <li>To nie był film</li>
                <li>Podróże po orbitach (Album Version)</li>
                <li>2018</li>
                <li>Flava w twojej twarzy (Album Version)</li>
                <li>1996 (Album Version)</li>
                <li>Outro Ground Zero</li>
            </ol>
            </aside>
        </div>

        <div class="album-section">
            <aside>
            <h3>Fight Club</h3>
            <p id="p"><strong>Data premiery:</strong> 2020-11-13</p>
            <p id="p"><strong>Wydawca:</strong> Sony Music Poland</p>
            <h4>Tracklista:</h4>
            <ol class="tracklist">
                <li>Fight Club</li>
                <li>2020</li>
                <li>Podróże po orbitach (Fight Club Version)</li>
                <li>Flava w twojej twarzy (Fight Club Version)</li>
                <li>1996 (Fight Club Version)</li>
                <li>Outro Fight Club</li>
            </ol>
            </aside>
        </div>
    </section>    

        <div class="album-section_club">
            <aside id="club">
            <h3>Re-Fight Club</h3>
            <p id="p"><strong>Data premiery:</strong> 2021-11-12 (reedycja Fight Club)</p>
            <p id="p"><strong>Wydawca:</strong> Sony Music Poland</p>
            <p id="p"><strong>Tracklista:</strong> Rozszerzona wersja Fight Club z dodatkowymi remiksami i utworami bonusowymi (szczegóły zależne od edycji).</p>
            </aside>
        </div>
    </section>

    <h2>Mixtape'y i EP-ki</h2>
    <section>
        <div class="album-section">
            <aside>
            <h3>Mixtape PRO8L3M</h3>
            <p id="p"><strong>Data premiery:</strong> 2013</p>
            <p id="p"><strong>Wydawca:</strong> Self-released</p>
            <h4>Tracklista (wybrane utwory):</h4>
            <ol class="tracklist">
                <li>Intro Mixtape</li>
                <li>Podróże po orbitach</li>
                <li>Flava w twojej twarzy</li>
                <li>1996</li>
                <li>Outro Mixtape</li>
            </ol>
            </aside>
        </div>

        <div class="album-section">
        <aside>
        <h3>EP: Eurogeddon</h3>
        <p id="p"><strong>Data premiery:</strong> 2017</p>
        <p id="p"><strong>Wydawca:</strong> 700Blond Records</p>
        <h4>Tracklista:</h4>
        <ol class="tracklist">
            <li>Eurogeddon</li>
            <li>2017</li>
            <li>Bonus Track: Ground Zero (Demo)</li>
        </ol>
        </aside>
        </div>
    </section>
    <section id="single">
        <h2>Wybrane single i współprace</h2>
        <h2>Inne wydawnictwa</h2>
    </section>
    <aside id="inne">
        <section>
            <div class="album-section">
                <ul class="single-list">
                    <li><strong>2014:</strong> "Art Brut" (single z albumu)</li>
                    <li><strong>2016:</strong> "C30-C39" (lead single)</li>
                    <li><strong>2018:</strong> "To nie był film" (feat. PRO8L3M) – z albumu Ground Zero</li>
                    <li><strong>2019:</strong> "VHS" (single promocyjny)</li>
                    <li><strong>2020:</strong> "Fight Club" (lead single)</li>
                    <li><strong>2021:</strong> "Re-Fight" (z reedycji)</li>
                    <li><strong>Współprace:</strong>
                        <ul style="list-style-type: circle; padding-left: 20px;">
                            <li>"Flava" z Białasem (2015, z albumu Białasa)</li>
                            <li>"1996" remix z innymi artystami (różne wydania)</li>
                            <li>"Ground Zero" feat. Taco Hemingway (nieoficjalna współpraca w koncertach)</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
        <section>
            <div class="album-section">
                <ul class="single-list">
                    <li><strong>Kompilacje i reedycje:</strong> PRO8L3M pojawił się na wielu kompilacjach hip-hopowych w Polsce, np. "Raport z Oblężonego Miasta" (różne edycje).</li>
                    <li><strong>Live i bootlegi:</strong> Albumy live z koncertów (np. z festiwalu Open'er), ale nieoficjalne.</li>
                    <li><strong>Streaming:</strong> Cała dyskografia dostępna na Spotify, Apple Music i YouTube Music. Oficjalny kanał YouTube: PRO8L3M.</li>
                </ul>
            </div>
        </section>
    </aside>
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