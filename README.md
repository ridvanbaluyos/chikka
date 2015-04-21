ridvanbaluyos/chikka
=======

A Chikka API package for Laravel 4. 

> This package makes use of the [Chikka API](http://api.chikka.com).<br />
>> Please DO NOT USE dev-master branch. :)

<br />
[![Latest Stable Version](https://poser.pugx.org/ridvanbaluyos/chikka/v/stable)](https://packagist.org/packages/ridvanbaluyos/chikka) [![Total Downloads](https://poser.pugx.org/ridvanbaluyos/chikka/downloads)](https://packagist.org/packages/ridvanbaluyos/chikka) [![Latest Unstable Version](https://poser.pugx.org/ridvanbaluyos/chikka/v/unstable)](https://packagist.org/packages/ridvanbaluyos/chikka) [![License](https://poser.pugx.org/ridvanbaluyos/chikka/license)](https://packagist.org/packages/ridvanbaluyos/chikka)

## Table of contents ##
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
    - [Receiving SMS](#receiving-sms-from-users)
    - [Sending SMS](#sending-sms-to-users)
    - [Replying to an SMS](#replying-to-an-sms)
    - [Receiving Delivery Notifications](#receiving-delivery-notifications)


## Installation ##
Open your `composer.json` file and add the following to the `require` key:

    "ridvanbaluyos/chikka": "v1.0"

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
### Receiving SMS from users
Not yet available

### Sending SMS to users
```php
Chikka::send('Welcome to Chikka!', '639981234567');
```

### Replying to an SMS
Not yet available

### Receiving Delivery Notifications
Not yet available

