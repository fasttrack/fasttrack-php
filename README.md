# Fasttrack (PHP)

## Installation

Add to your composer.json:
```json
{
    "require": {
        "fasttrack/fasttrack-client": "*"
    }
}
```

And do:
```sh
composer install
```

## Usage

### Get company

```php
<?php
use Fasttrack\Fasttrack;

$client = new \Fasttrack\Fasttrack('your_token');

try {
  $company = $client->getCompany('example.com');
  print_r($company);
} catch err {
  print_r(err);
}

?>
```

### Get contact

```php
<?php
use Fasttrack\Fasttrack;

$client = new \Fasttrack\Fasttrack('your_token');

try {
  $company = $client->getContact('example@example.com');
  print_r($company);
} catch err {
  print_r(err);
}

?>
```

### Error handling

```php
<?php
use Fasttrack\Fasttrack;
use Fasttrack\Exceptions;

$client = new \Fasttrack\Fasttrack('your_token');

try {
  $company = $client->getContact('example@example.com');
  print_r($company);
} catch (\Fasttrack\Exceptions\UnauthorizedException $e) {
  print_r('UnauthorizedException');
}

?>
```


### Available exceptions

- BadParametersException
- BadRequestException
- InternalServerException
- InvalidVersionException
- MethodNotAllowedException
- NoResultException
- NotAcceptableException
- NotFoundException
- TooManyRequestsException
- UnauthorizedException
- VersionRequiredException
