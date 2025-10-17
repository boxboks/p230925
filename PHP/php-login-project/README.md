# PHP Login Project

## Overview
This project is a simple PHP-based login system that allows users to authenticate and access a protected home page. It includes functionalities for logging in, logging out, and session management.

## Project Structure
```
php-login-project
├── public
│   ├── index.php          # Main entry point of the application
│   ├── login.php          # Login form and authentication handling
│   └── logout.php         # Logout functionality
├── src
│   ├── Auth.php           # Authentication class with login/logout methods
│   └── Controllers
│       └── AuthController.php # Manages login and logout processes
├── templates
│   ├── login.php          # HTML structure for the login form
│   └── home.php           # HTML structure for the home page
├── config
│   └── config.php         # Configuration settings (e.g., database connection)
├── composer.json           # Composer configuration file
└── README.md               # Project documentation
```

## Installation
1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Run `composer install` to install dependencies.

## Usage
- Access the login page at `public/login.php`.
- Enter your credentials to log in.
- Upon successful login, you will be redirected to `public/index.php`.
- To log out, visit `public/logout.php`.

## Contributing
Feel free to submit issues or pull requests for improvements or bug fixes.