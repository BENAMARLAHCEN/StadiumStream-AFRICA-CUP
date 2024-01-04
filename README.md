# SIMPLE - StadiumStream-AFRICA-CUP

__All Posts__

<img src="./public/asset/img/SStream.svg" alt=">


### Knowleadge

- Apache setting (.htaccess)
- MySql


### Installation

- git clone
- config `core/config.php`
```
// Application 
define('APP_URL', 'http://localhost/StadiumStream-AFRICA-CUP/');
define('LOG_URL', 'C:\laragon\www\StadiumStream-AFRICA-CUP\app');


// Database
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASS', $_ENV['DB_PASS']);
define('DB_NAME', $_ENV['DB_NAME']);
```
- composer install
- add .env file like .env.example
- import db.sql
- entry point `public/index.php`
