<?php
// Połączenie z bazą danych (zakładam MySQL, dostosuj dane do swoich ustawień)
$servername = "localhost";
$username = "root"; // Zmień na swoją nazwę użytkownika
$password = ""; // Zmień na swoje hasło
$dbname = "pro8l3m"; // Zmień na nazwę swojej bazy danych

$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdź połączenie
if ($conn->connect_error) {
    die("Połączenie nieudane: " . $conn->connect_error);
}

// Obsługa formularza zamówienia (po wysłaniu POST)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_order'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $quantity = (int)$_POST['quantity']; // Ilość jako integer
    $payment = $_POST['payment']; // Metoda płatności
    $product = "EX UMBRA AD LIBERTATEM PREORDER"; // Stały produkt
    $price_per_unit = 69; // Cena za sztukę w zł
    $total_price = $price_per_unit * $quantity; // Całkowita cena

    // Przygotuj zapytanie INSERT (zakładam tabelę 'orders' z kolumnami: id (auto_increment), name, email, address, quantity, payment_method, product, price_per_unit, total_price, order_date)
    $sql = "INSERT INTO orders (name, email, address, quantity, payment_method, product, price_per_unit, total_price, order_date) VALUES ('$name', '$email', '$address', $quantity, '$payment', '$product', $price_per_unit, $total_price, NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Zamówienie zostało złożone pomyślnie! Całkowita cena: " . $total_price . "zł');</script>";
    } else {
        echo "<script>alert('Błąd podczas składania zamówienia: " . $conn->error . "');</script>";
    }
}

// Zamknij połączenie na końcu strony (ale nie tutaj, bo strona się kończy)
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRO8L3M</title>
    <link rel="stylesheet" href="..\css\style.css">
    <style>
        h3{
            color: white;
            font-size: 24px;
        }

        input{
            width: 200px;
        }
    </style>
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
                <button onclick="location.href='php-login-project/public/login.php'"><img src="../pics/logout.png" alt="" height="60px" style="filter: brightness(10) invert(1);"></button>
            </div>
            <button onclick="location.href='index.php'">Strona Główna</button>
            <button onclick="location.href='dyskografia.php'">Dyskografia</button>
            <button onclick="location.href='produkty.php'">Produkty</button>
            <button onclick="location.href='gry.php'">Gry</button>
        </div>
    </header>
    <main>
        <div class="container" id="zamownienia">
            <a href="../PHP/produkty.php" style="position: absolute; left: 190px; top: 200px;"><button>Powrót</button><img id="back" src="../pics/back.png" alt="" height="15px"></a> 
            <div class="form">
                <div class="zdj">
                    <img src="../pics/PROBLEM-COVERRR.jpg" alt="" id="zamowienie" style="cursor:pointer;">
                    <div class="min">
                        <img src="../pics/PROBLEM-COVERRR.jpg" alt="" height="100px" style="border-radius: 7px; cursor:pointer;" class="miniaturka">
                        <img src="../pics/EUAL-PRE-Sticker-pack.png" alt="" height="100px" style="border-radius: 7px; cursor:pointer;" class="miniaturka">
                    </div>
                </div>
                <div id="nazwa">
                    <h3 style="color: white; font-size: 30px;">EX UMBRA AD LIBERTATEM PREORDER</h3>
                    <h4 style="color: white;">69zł</h4>
                    <aside style="position: absolute; right: 30px; top: 300px;">
                        <button onclick="showOrderForm()" style="border: solid 3px black; border-radius: 7px; width: 200px; background-color: rgba(255,255,255,0.7); color: black;">ZAMÓW</button>
                    </aside>
                </div>
            </div>
            <p id="opis"><i>Z mroku ku wolności.</i> <br><br>
            Kilkanaście nowych numerów zamknięte w kawałku plastiku. Wersję preorder odróżniają książeczka z tekstami Oskara, wyjątkowy sticker pack oraz detale opakowania.</p>

            <!-- Formularz zamówienia (ukryty domyślnie) -->
            <div id="order-form" style="display: none; margin-top: 20px; padding: 20px; background-color: rgba(0,0,0,0.8); border-radius: 10px; color: white;">
                <h3>Złóż zamówienie</h3>
                <form action="" method="post">
                    <label for="name">Imię i nazwisko:</label><br>
                    <input type="text" id="name" name="name" required style="width: 100%; margin-bottom: 10px;"><br>
                    
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required style="width: 100%; margin-bottom: 10px;"><br>
                    
                    <label for="address">Adres dostawy:</label><br>
                    <textarea id="address" name="address" required style="width: 100%; height: 80px; margin-bottom: 10px;"></textarea><br>
                    
                    <label for="quantity">Ilość:</label><br>
                    <input type="number" id="quantity" name="quantity" min="1" value="1" required style="width: 100%; margin-bottom: 10px;"><br>
                    
                    <label for="payment">Metoda płatności:</label><br>
                    <select id="payment" name="payment" required style="width: 100%; margin-bottom: 10px;">
                        <option value="przelew">Przelew bankowy</option>
                        <option value="karta">Karta kredytowa</option>
                        <option value="paypal">PayPal</option>
                        <option value="pobranie">Za pobraniem</option>
                    </select><br>
                    
                    <button type="submit" name="submit_order" style="background-color: #fff; color: #000; border: none; padding: 10px 20px; border-radius: 5px;">Złóż zamówienie</button>
                </form>
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

const zamowienieImg = document.getElementById('zamowienie');
const miniaturki = document.querySelectorAll('.miniaturka');

miniaturki.forEach(function(mini) {
    mini.addEventListener('click', function() {
        zamowienieImg.src = this.src;
    });
});

// Funkcja do pokazywania formularza zamówienia
function showOrderForm() {
    document.getElementById('order-form').style.display = 'block';
}
</script>
</body>
</html>
<?php
// Zamknij połączenie z bazą danych na końcu
$conn->close();
?>
