<?php

namespace Fasttrack\Exceptions;

class NotAcceptableException extends \Exception {
  public function __construct($message = 'you requested a format that is not json', $code = 0, Exception $previous = null) {
    parent::__construct($message, $code, $previous);
  }
}
