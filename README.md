# Apiarist

[![Build Status](https://travis-ci.org/thepirateorange/apiarist.svg?branch=master)](https://travis-ci.org/thepirateorange/apiarist)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/thepirateorange/apiarist/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/thepirateorange/apiarist/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)
[![Coverage Status](https://coveralls.io/repos/github/thepirateorange/apiarist/badge.svg?branch=master)](https://coveralls.io/github/thepirateorange/apiarist?branch=master)

[![Packagist](https://img.shields.io/packagist/v/thepirateorange/apiarist.svg)](https://packagist.org/packages/thepirateorange/apiarist)
[![Packagist](https://poser.pugx.org/thepirateorange/apiarist/d/total.svg)](https://packagist.org/packages/thepirateorange/apiarist)
[![Packagist](https://img.shields.io/packagist/l/thepirateorange/apiarist.svg)](https://packagist.org/packages/thepirateorange/apiarist)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require thepirateorange/apiarist
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
thepirateorange\Apiarist\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
thepirateorange\Apiarist\Facades\Apiarist::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="thepirateorange\Apiarist\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## Security

If you discover any security related issues, please email thepirateorange@gmail.com
instead of using the issue tracker.

## Credits

- [Jonathan Tordesillas](https://github.com/thepirateorange/apiarist)
- [All contributors](https://github.com/thepirateorange/apiarist/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
