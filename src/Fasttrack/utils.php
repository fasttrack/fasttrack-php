<?php

namespace Fasttrack\utils;

include 'Exceptions/BadParametersException.php';
include 'Exceptions/BadRequestException.php';
include 'Exceptions/InternalServerException.php';
include 'Exceptions/InvalidVersionException.php';
include 'Exceptions/MethodNotAllowedException.php';
include 'Exceptions/NoResultException.php';
include 'Exceptions/NotAcceptableException.php';
include 'Exceptions/NotFoundException.php';
include 'Exceptions/TooManyRequestsException.php';
include 'Exceptions/UnauthorizedException.php';
include 'Exceptions/VersionRequiredException.php';

function errorForStatus($status, $detail) {
  switch ($status) {
    case '400':
      throw new \Fasttrack\Exceptions\BadRequestException($detail);
      break;

    case '401':
      throw new \Fasttrack\Exceptions\UnauthorizedException($detail);
      break;

    case '404':
      throw new \Fasttrack\Exceptions\NotFoundException($detail);
      break;

    case '405':
      throw new \Fasttrack\Exceptions\MethodNotAllowedException($detail);
      break;

    case '406':
      throw new \Fasttrack\Exceptions\NotAcceptableException($detail);
      break;

    case '429':
      throw new \Fasttrack\Exceptions\TooManyRequestsException($detail);
      break;
  }
}

function errorForErrorCode($error_code, $detail) {
  switch ($error_code) {
    case '1':
      throw new \Fasttrack\Exceptions\VersionRequiredException($detail);
      break;

    case '2':
      throw new \Fasttrack\Exceptions\NoResultException($detail);
      break;

    case '3':
      throw new \Fasttrack\Exceptions\BadParametersException($detail);
      break;

    case '4':
      throw new \Fasttrack\Exceptions\InvalidVersionException($detail);
      break;
  }
}

function throwExceptionForResponse($status, $error_code, $detail) {
  if (isset($error_code)) {
    errorForErrorCode($error_code, $detail);
  }

  if (isset($status)) {
    errorForStatus($status, $detail);
  }

  if ($status >= 500 && $status <= 600) {
    throw new \Fasttrack\Exceptions\InternalServerException($detail);
  }
}
