# Project Documentation (English)

## Overview

This repository is a small web project intended to run locally in a XAMPP environment. It contains static HTML pages, PHP pages, a small Node/JS script, CSS files and image assets. The folder `PHP/php-login-project/` contains a PHP login form example.

Purpose: a simple multi-page site with a small game and an example PHP login implementation.

## Repository structure

- `PHP/` — PHP versions of pages and the `php-login-project/` subfolder with an authentication example.
- `css/` — styles (`style.css`).
- `JS/` — JavaScript scripts: `game.js` and `tictactoe.js`.
- `pics/` — image assets.

## How to run (quick start)

Requirements:
- XAMPP (Apache + PHP + MySQL) to run the PHP pages.
- Composer to install dependencies in `php-login-project`.

Steps:

1. Place the repository folder in XAMPP's `htdocs` directory.
2. Start Apache and MySQL using the XAMPP control panel.
3. Open the site in your browser:
   - PHP pages: `http://localhost/Aleksander/PHP/php-login-project/public/login.php`

Note: depending on your Apache configuration the exact address may differ.

Running the login (PHP):

1. Open a terminal in `PHP/php-login-project`.
2. Run `composer install` (Composer must be installed).
3. Configure `config/config.php` (database credentials and settings).
4. Serve the `public/` folder via Apache and open it in your browser.

## Developer notes

- The project is mostly written in PHP and JavaScript.
- Composer is required only for the `php-login-project` subfolder.
