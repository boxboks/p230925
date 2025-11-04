# Project Documentation (English)

## Overview

This repository is a small web project intended to run locally under a LAMP/AMP (XAMPP) environment. It contains static HTML pages, PHP pages, a small Node/JS script, CSS, and image assets. There is also a small PHP login sub-project based on Composer.

Purpose: provide a simple multi-page site with a small game and a PHP login example.

## Repository structure

- `html/` — static HTML pages for the site (index, products, album, game pages, etc.).
- `PHP/` — PHP versions of pages and a `php-login-project/` subfolder containing a small Composer-based auth example.
- `css/` — styling (`style.css`).
- `JS/` — JavaScript files: `game.js` (client-side game code) and `server.js` (a Node script that may be used for local dev/testing).
- `pics/` — image assets used by pages.

Files present (non-exhaustive):

- `html/index.html`, `html/gra.html`, `html/dyskografia.html`, `html/plyta.html`, `html/produkty.html`, `html/zestaw.html`
- `PHP/index.php`, `PHP/gra.php`, `PHP/dyskografia.php`, `PHP/plyta.php`, `PHP/produkty.php`, `PHP/zestaw.php`
- `PHP/php-login-project/` — composer.json, config, public entry points, and simple auth code under `src/`.

## How to run (quick start)

Prerequisites:
- XAMPP (Apache + PHP + MySQL) for running PHP pages.
- (Optional) Node.js if you want to run `JS/server.js`.
- Composer to install dependencies for the `php-login-project` subfolder.

Steps:

1. Place the repository inside your XAMPP `htdocs` folder (it is already placed under `c:\\xampp\\htdocs\\GitHub\\p230925` in this workspace).
2. Start Apache (and MySQL if the login project needs a DB) using the XAMPP control panel.
3. Open the site in your browser:
   - For the static HTML pages: `http://localhost/GitHub/p230925/html/index.html`
   - For the PHP pages: `http://localhost/GitHub/p230925/PHP/index.php`

Notes about paths: depending on your Apache configuration, you might instead open `http://localhost/p230925/html/index.html` or similar. Adjust accordingly.

To run the PHP login subproject:

1. Open a terminal at `PHP/php-login-project`.
2. Run `composer install` to install dependencies (Composer must be installed globally or use the composer.phar).
3. Configure `config/config.php` if database credentials or other settings are required.
4. Point your browser to the `public/` folder served by Apache, for example `http://localhost/GitHub/p230925/PHP/php-login-project/public/index.php` (you may need to adjust virtual hosts or move the subproject to a dedicated folder within htdocs).

To run the Node script (optional):

1. Ensure Node.js is installed.
2. From the project root run `node JS\\server.js` (PowerShell: `node JS\\server.js`).
3. The behavior of `server.js` depends on its implementation — check the file to see what it serves or logs.

To open the game (client-side):

- Open `html/gra.html` in the browser. The page uses `JS/game.js` and `css/style.css`.

## Development notes

- The project mixes static HTML and PHP views. If you plan to make PHP changes, use the PHP files under `PHP/` and access them through Apache.
- Use Composer in the `php-login-project` folder only as needed; the main project does not appear to use Composer directly.
- If adding server-side features, consider setting up a virtual host for easier URLs (Apache httpd-vhosts.conf).

## Suggestions / next steps

- Add a top-level `README.md` with quickstart (done) and optionally a LICENSE file.
- Document any runtime requirements of `JS/server.js` if it is intended to be used.
- If the login example requires a database, include an SQL schema or migration script.

## Contact

If you need a different format (single-language README.md, PDF, or detailed API docs), say which and I can add it.
