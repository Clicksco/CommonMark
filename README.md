# CommonMark Laravel 4 Wrapper

<!--[![Latest Version](https://img.shields.io/github/release/clicksco/commonmark-laravel.svg?style=flat-square)](https://github.com/Clicksco/CommonMark/releases)-->
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
<!--[![Build Status](https://img.shields.io/travis/clicksco/commonmark-laravel/master.svg?style=flat-square)](https://travis-ci.org/clicksco/commonmark-laravel)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/clicksco/commonmark-laravel.svg?style=flat-square)](https://scrutinizer-ci.com/g/clicksco/commonmark-laravel/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/clicksco/commonmark-laravel.svg?style=flat-square)](https://scrutinizer-ci.com/g/clicksco/commonmark-laravel)
[![Total Downloads](https://img.shields.io/packagist/dt/clicksco/commonmark-laravel.svg?style=flat-square)](https://packagist.org/packages/clicksco/commonmark-laravel)-->

Trivial Laravel 4 wrapper class for The PHP League's CommonMark package.

## Install

Require the package with Composer

``` bash
$ composer require clicksco/commonmark-laravel
```

Update app/config/app.php with the ServiceProvider and Facade

``` php
'providers' => [
    ...
    'Clicksco\CommonMark\ServiceProvider',
    ...
];
```

``` php
'aliases' => [
    ...
    'CommonMark' => 'Clicksco\CommonMark\Facade',
    ...
];
```

## Usage

``` php
echo CommonMark::convertToHtml('# Hello, World!');
```

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](https://github.com/clicksco/commonmarklaravel/blob/master/CONTRIBUTING.md) for details.

## Credits

- [Jon Park](https://github.com/jonspark)
- [All Contributors](https://github.com/clicksco/commonmarklaravel/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
