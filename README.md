# Laravel Line notify

## How to install
```
composer require lexicon/line-notify
```

## Usage

### Send text message
```php
use Lexicon\LineNotify\LineNotify;

LineNotify::sendMessage('{accessToken}', '{message}');
```
