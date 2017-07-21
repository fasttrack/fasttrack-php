<?php

namespace Fasttrack\Exceptions;

class VersionRequiredException extends \Exception {
  public function __construct($message = 'send API version in the HTTP Accept headers', $code = 0, Exception $previous = null) {
    parent::__construct($message, $code, $previous);
  }
}
