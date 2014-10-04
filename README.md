ridvanbaluyos/chikka
=======

A Chikka API package for Laravel 4.

> This package makes use of the [Chikka API](http://api.chikka.com).<br />

<br />
[![Latest Stable Version](https://poser.pugx.org/ridvanbaluyos/chikka/v/stable.svg)](https://packagist.org/packages/ridvanbaluyos/chikka) [![Total Downloads](https://poser.pugx.org/ridvanbaluyos/chikka/downloads.svg)](https://packagist.org/packages/ridvanbaluyos/chikka) [![Latest Unstable Version](https://poser.pugx.org/ridvanbaluyos/chikka/v/unstable.svg)](https://packagist.org/packages/ridvanbaluyos/chikka) [![License](https://poser.pugx.org/ridvanbaluyos/chikka/license.svg)](https://packagist.org/packages/ridvanbaluyos/chikka)

## Table of contents ##
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
    - [Sending SMS](#send)


## Installation ##
Open your `composer.json` file and add the following to the `require` key:

    "ridvanbaluyos/chikka": "dev-master"

---

After adding the key, run composer update from the command line to install the package

```bash
composer update
```

Add the service provider to the `providers` array in your `app/config/app.php` file.

    'Ridvanbaluyos\Chikka\ChikkaServiceProvider'

## Configuration ##
Before you can start using the package we need to set some configurations.
To do so you must first publish the config file, you can do this with the following `artisan` command.

```bash
php artisan config:publish ridvanbaluyos/chikka
```

## Usage ##
### Sending SMS to users
```php
Chikka::send('Welcome to Chikka!', '639981234567');
```

