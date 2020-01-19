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
