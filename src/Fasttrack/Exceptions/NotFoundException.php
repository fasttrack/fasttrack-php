<?php

namespace Fasttrack\Exceptions;

class NotFoundException extends \Exception {
  public function __construct($message = 'specified endpoint could not be found', $code = 0, Exception $previous = null) {
    parent::__construct($message, $code, $previous);
  }
}
