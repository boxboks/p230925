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
            <button onclick="location.href='index.php'">Strona Główna</button>
            <button onclick="location.href='dyskografia.php'">Dyskografia</button>
            <button onclick="location.href='produkty.php'">Produkty</button>
            <button onclick="location.href='gra.php'">Gra</button>
        </div>
    </header>
    <main>
        <div class="container" id="zamownienia">
            <a href="../PHP/produkty.php" style="position: absolute; left: 190px; top: 200px;"><button>Powrót</button><img id="back" src="../pics/back.png" alt="" height="15px"></a> 
            <div class="form">
                <div class="zdj">
                    <img src="../pics/PROBLEM-COVERRR.jpg" alt="" id="zamowienie" style="cursor:pointer;">
                    <div class="min" id="miniatury-list">
                        <img src="../pics/PROBLEM-COVERRR.jpg" alt="" height="100px" style="border-radius: 7px; cursor:pointer;" class="miniaturka">
                        <img src="../pics/EUAL-PRE-Sticker-pack.png" alt="" height="100px" style="border-radius: 7px; cursor:pointer;" class="miniaturka">
                        <img src="../pics/PRO8L3M_25_2_10-600x600.jpg" alt="" height="100px" style="border-radius: 7px; cursor:pointer;" class="miniaturka">
                        <img src="../pics/PRO8L3M_25_2_2.jpg" alt="" height="100px" style="border-radius: 7px; cursor:pointer;" class="miniaturka">
                        <img src="../pics/PRO8L3M_25_2_5.jpg" alt="" height="100px" style="border-radius: 7px; cursor:pointer;" class="miniaturka">
                        <img src="../pics/PRO8L3M_25_2_6.jpg" alt="" height="100px" style="border-radius: 7px; cursor:pointer;" class="miniaturka">
                        <img src="../pics/PRO8L3M_25_2_7.jpg" alt="" height="100px" style="border-radius: 7px; cursor:pointer;" class="miniaturka">
                        <img src="../pics/PRO8L3M_25_2_8-1.jpg" alt="" height="100px" style="border-radius: 7px; cursor:pointer;" class="miniaturka">
                        <img src="../pics/PRO8L3M_25_2_9-1.jpg" alt="" height="100px" style="border-radius: 7px; cursor:pointer;" class="miniaturka">
                        <img src="../pics/PRO8L3M_25_2_11.jpg" alt="" height="100px" style="border-radius: 7px; cursor:pointer;" class="miniaturka">
                        <img src="../pics/PRO8L3M_25_2_12.jpg" alt="" height="100px" style="border-radius: 7px; cursor:pointer;" class="miniaturka">
                    </div>
                </div>
                <div id="nazwa">
                    <h3 style="color: white; font-size: 30px;">PŁYTA EX UMBRA AD LIBERTATEM + ZESTAW LOCKPICKING P8M x MOK WORKSHOP PREORDER</h3>
                    <button style="border: solid 3px black; border-radius: 7px; width: 200px;">ZAMÓW</button>
                </div>
            </div>
            <p id="opis"><i>Z mroku ku wolności.</i> <br><br>

Kilkanaście nowych numerów zamknięte w kawałku plastiku. Wersję preorder odróżniają książeczka z tekstami Oskara, wyjątkowy sticker pack oraz detale opakowania. <br>
<br>
Do CD dostajesz wyjątkowy zestaw lockpicking’owy będący efektem naszej współpracy z MOK-Workshop. Set łączy najwyższej klasy niemieckie rzemiosło w świecie locksportu z unikalną estetyką PRO8L3M. Wszystkie metalowe elementy są grawerowane logotypami obu marek, a detale wykończono w charakterystycznym kolorze brudnego bordo. Limitowany do 200 sztuk zestaw.
<br>
<br>
Zawartość zestawu to:

<br>
– Lockpicking Bag (saszetka) <br>
– The Minimalist Set (wytrychy) <br>
– Handle Set (nakładki na wytrychy) <br>
– Transparent Training Padlock (kłódka treningowa) <br>
<br>

Set ma przeznaczenie stricte kolekcjonerskie i edukacyjne (locksport).</p>
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

const zamowienieImg = document.getElementById('zamowienie');
const miniaturki = document.querySelectorAll('.miniaturka');

miniaturki.forEach(function(mini) {
    mini.addEventListener('click', function() {
        zamowienieImg.src = this.src;
    });
});

const miniaturyList = document.getElementById('miniatury-list');

miniaturyList.addEventListener('wheel', function(e) {
    e.preventDefault();
    miniaturyList.scrollTop += e.deltaY * 1.5; // 1.5x szybciej, możesz zmienić
}, { passive: false });
</script>
</body>
</html>