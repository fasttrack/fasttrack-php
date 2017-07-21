<?php

namespace Fasttrack\Exceptions;

class BadRequestException extends \Exception {
  public function __construct($message = 'request is malformed', $code = 0, Exception $previous = null) {
    parent::__construct($message, $code, $previous);
  }
}
