# Dokumentacja projektu (Polski)

## Przegląd

To repozytorium to mały projekt webowy przeznaczony do uruchomienia lokalnie w środowisku XAMPP. Zawiera statyczne strony HTML, strony PHP, mały skrypt Node/JS, pliki CSS oraz zasoby graficzne. W folderze `PHP/php-login-project/` znajduje się formularz logowania w PHP.

Cel: prosta wielostronicowa witryna z małą grą i przykładem logowania w PHP.

## Struktura repozytorium

- `PHP/` — wersje stron w PHP oraz podfolder `php-login-project/` z przykładem autoryzacji.
- `css/` — style (`style.css`).
- `JS/` — skrypty JavaScript: `game.js` i `tictactoe.js`.
- `pics/` — zasoby graficzne.

## Jak uruchomić (szybki start)

Wymagania:
- XAMPP (Apache + PHP + MySQL) do uruchamiania stron PHP.
- Composer, aby zainstalować zależności w `php-login-project`.

Kroki:

1. Umieść repozytorium w folderze `htdocs` XAMPP.
2. Uruchom Apache i MySQL przez panel XAMPP.
3. Otwórz stronę w przeglądarce:
   - Strony PHP: `localhost/Aleksander/PHP/php-login-project/public/login.php`

Uwaga: w zależności od konfiguracji Apache adresy mogą być inne.

Uruchamianie logowania (PHP):

1. Otwórz terminal w `PHP/php-login-project`.
2. Uruchom `composer install` (Composer musi być zainstalowany).
3. Skonfiguruj `config/config.php` (dane do bazy, ustawienia).
4. Udostępnij folder `public/` przez Apache i otwórz go w przeglądarce.

## Notatki developerskie

- Projekt został w większości napisany w języku PHP i JS.
- Composer jest wymagany tylko dla `php-login-project`.
