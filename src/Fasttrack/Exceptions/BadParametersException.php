<?php

namespace Fasttrack\Exceptions;

class BadParametersException extends \Exception {
  public function __construct($message = 'send parameters through GET method', $code = 0, Exception $previous = null) {
    parent::__construct($message, $code, $previous);
  }
}
