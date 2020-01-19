[![Build Status](https://travis-ci.org/marcopollacci//mezzio-sentrydelegator.svg?branch=master)](https://travis-ci.org/marcopollacci//mezzio-sentrydelegator) [![Maintainability](https://api.codeclimate.com/v1/badges/dbe96e7f622133daa7a8/maintainability)](https://codeclimate.com/github/marcopollacci/mezzio-sentrydelegator/maintainability)

[![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/marcopollacci/mezzio-sentrydelegator.svg)](http://isitmaintained.com/project/marcopollacci/mezzio-sentrydelegator "Average time to resolve an issue") [![Percentage of issues still open](http://isitmaintained.com/badge/open/marcopollacci/mezzio-sentrydelegator.svg)](http://isitmaintained.com/project/marcopollacci/mezzio-sentrydelegator "Percentage of issues still open")
# Sentry Delegator for Mezzio - Lamisas Framework

## Install by Composer
```
composer require marcopollacci/mezzio-sentrydelegator
```

## Usage

1) Set at your config file with sentry token and dsn (if no config given, no exception send to sentry). Es:
```php
return [
    'sentry' => [
        'dsn' => 'https://<your url>>/<your id>',
        'environment' => 'produzione' #optional
    ]
];
```
2) Enjoy it :D!

## Additional usage in try / catch statament

Code Example
```php
        try {
            throw new \Exception('something');
        }catch(\Exception $e){
            \Sentry\captureException($e);
            /* something else you want */
        }
```
