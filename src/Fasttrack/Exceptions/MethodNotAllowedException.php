<?php

namespace Fasttrack\Exceptions;

class MethodNotAllowedException extends \Exception {
  public function __construct($message = 'you tried to access an endpoint with an invalid method', $code = 0, Exception $previous = null) {
    parent::__construct($message, $code, $previous);
  }
}
