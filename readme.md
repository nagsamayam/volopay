## Volopay - Make paymets easy ##

### Prerequisites ###

    *  Webserver(nginx) >= 1.10.3
    *  PHP >=7.0.0,
    *  Mysql >= 5.7,
    *  Composer >= 1.5.2
    *  NodeJS >= 8.9.1
    *  NPM >= 5.5.1
    *  Yarn >= 1.3.2
    *  git >= 2.7.4

### Installation ###

* run `https://github.com/nagsamayam/volopay.git projectname` to clone the repository
* type `cd projectname`
* run `mkdir bootstrap/cache`
* run `sudo chmod -R 755 bootstrap/cache`
* run `sudo chmod -R 755 storage/`
* run `cp .env.example .env` and fill in your database credentials
* run `composer --no-interaction --prefer-dist --optimize-autoloader`
* run `php artisan key:generate`

### Frontend Assets ###

* run `yarn` to install dependencies
* run `yarn run dev` to compile assets
* run `yarn --production` to compile assets for production environment