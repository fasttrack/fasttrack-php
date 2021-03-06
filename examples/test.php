<?php

require __DIR__ . '/../src/Fasttrack/Fasttrack.php';

use Fasttrack\Fasttrack;
use Fasttrack\Exceptions;

$client = new \Fasttrack\Fasttrack('your_token');

print_r($client);

try {
  $result = $client->getCompany('example.com');
  print_r($result);
} catch (\Fasttrack\Exceptions\UnauthorizedException $e) {
  print_r('UnauthorizedException');
  print_r($e);
}

?>
