# Dokumentacja projektu (Polski)

## Przegląd

To repozytorium to mały projekt webowy przeznaczony do uruchomienia lokalnie w środowisku LAMP/AMP (np. XAMPP). Zawiera statyczne strony HTML, strony PHP, mały skrypt Node/JS, pliki CSS oraz zasoby graficzne. W folderze `PHP/php-login-project/` znajduje się przykład logowania w PHP oparty na Composerze.

Cel: prosta wielostronicowa witryna z małą grą i przykładem logowania w PHP.

## Struktura repozytorium

- `html/` — statyczne strony HTML (index, produkty, dyskografia, gra, itp.).
- `PHP/` — wersje stron w PHP oraz podfolder `php-login-project/` z przykładem autoryzacji.
- `css/` — style (`style.css`).
- `JS/` — skrypty JavaScript: `game.js` (klient) i `server.js` (skrypt Node).
- `pics/` — zasoby graficzne.

Przykładowe pliki:

- `html/index.html`, `html/gra.html`, `html/dyskografia.html`, `html/plyta.html`, `html/produkty.html`, `html/zestaw.html`
- `PHP/index.php`, `PHP/gra.php`, `PHP/dyskografia.php`, `PHP/plyta.php`, `PHP/produkty.php`, `PHP/zestaw.php`
- `PHP/php-login-project/` — `composer.json`, `config/`, `public/` i kod w `src/`.

## Jak uruchomić (szybki start)

Wymagania:
- XAMPP (Apache + PHP + MySQL) do uruchamiania stron PHP.
- (Opcjonalnie) Node.js, jeśli chcesz uruchomić `JS/server.js`.
- Composer, aby zainstalować zależności w `php-login-project`.

Kroki:

1. Umieść repozytorium w folderze `htdocs` XAMPP (w tym workspace jest już w `c:\\xampp\\htdocs\\GitHub\\p230925`).
2. Uruchom Apache (i MySQL, jeśli subsprojekt logowania tego wymaga) przez panel XAMPP.
3. Otwórz stronę w przeglądarce:
   - Strony HTML: `http://localhost/GitHub/p230925/html/index.html`
   - Strony PHP: `http://localhost/GitHub/p230925/PHP/index.php`

Uwaga: w zależności od konfiguracji Apache adresy mogą być inne (np. `http://localhost/p230925/html/index.html`).

Uruchamianie podprojektu logowania (PHP):

1. Otwórz terminal w `PHP/php-login-project`.
2. Uruchom `composer install` (Composer musi być zainstalowany).
3. Skonfiguruj `config/config.php` (dane do bazy, ustawienia).
4. Udostępnij folder `public/` przez Apache i otwórz go w przeglądarce, np. `http://localhost/GitHub/p230925/PHP/php-login-project/public/index.php`.

Uruchamianie skryptu Node (opcjonalne):

1. Zainstaluj Node.js.
2. Z katalogu projektu uruchom `node JS\\server.js`.
3. Sprawdź zawartość `server.js`, aby zobaczyć jego zachowanie (serwowanie plików, logi, itp.).

Uruchamianie gry (po stronie klienta):

- Otwórz `html/gra.html` w przeglądarce. Strona korzysta z `JS/game.js` i `css/style.css`.

## Notatki developerskie

- Projekt łączy statyczne strony HTML i widoki PHP. Edytuj pliki PHP przez Apache, aby zobaczyć zmiany.
- Composer jest wymagany tylko dla `php-login-project`.
- Jeśli dodajesz funkcje serwerowe, rozważ ustawienie wirtualnego hosta dla wygodniejszych adresów.

## Sugestie / dalsze kroki

- Dodaj plik `LICENSE` z odpowiednią licencją.
- Dodaj plik SQL z schematem bazy danych, jeśli logowanie go wymaga.
- Udokumentuj wymagania `server.js` (jeśli ma być uruchamiany jako serwer pomocniczy).

Jeżeli chcesz wersję PDF, szczegółowe API docs lub inne formaty, powiedz które, a przygotuję je.
