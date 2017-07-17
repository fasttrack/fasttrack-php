<?php

namespace Fasttrack\Test;

require(dirname(dirname(dirname(__FILE__))) . '/src/Fasttrack/utils.php');

use PHPUnit\Framework\TestCase;
use Fasttrack\utils;
use Fasttrack\Exceptions;

const DETAIL = 'detail';

class StackTest extends TestCase {
  public function testErrorForStatus400() {
    $this->expectException(\Fasttrack\Exceptions\BadRequestException::class);
    $result = \Fasttrack\utils\errorForStatus(400, DETAIL);
  }

  public function testErrorForStatus401() {
    $this->expectException(\Fasttrack\Exceptions\UnauthorizedException::class);
    $result = \Fasttrack\utils\errorForStatus(401, DETAIL);
  }

  public function testErrorForStatus404() {
    $this->expectException(\Fasttrack\Exceptions\NotFoundException::class);
    $result = \Fasttrack\utils\errorForStatus(404, DETAIL);
  }

  public function testErrorForStatus405() {
    $this->expectException(\Fasttrack\Exceptions\MethodNotAllowedException::class);
    $result = \Fasttrack\utils\errorForStatus(405, DETAIL);
  }

  public function testErrorForStatus406() {
    $this->expectException(\Fasttrack\Exceptions\NotAcceptableException::class);
    $result = \Fasttrack\utils\errorForStatus(406, DETAIL);
  }

  public function testErrorForStatus429() {
    $this->expectException(\Fasttrack\Exceptions\TooManyRequestsException::class);
    $result = \Fasttrack\utils\errorForStatus(429, DETAIL);
  }

  public function testErrorForErrorCode1() {
    $this->expectException(\Fasttrack\Exceptions\VersionRequiredException::class);
    $result = \Fasttrack\utils\errorForErrorCode(1, DETAIL);
  }

  public function testErrorForErrorCode2() {
    $this->expectException(\Fasttrack\Exceptions\NoResultException::class);
    $result = \Fasttrack\utils\errorForErrorCode(2, DETAIL);
  }

  public function testErrorForErrorCode3() {
    $this->expectException(\Fasttrack\Exceptions\BadParametersException::class);
    $result = \Fasttrack\utils\errorForErrorCode(3, DETAIL);
  }

  public function testErrorForErrorCode4() {
    $this->expectException(\Fasttrack\Exceptions\InvalidVersionException::class);
    $result = \Fasttrack\utils\errorForErrorCode(4, DETAIL);
  }

  public function testThrowExceptionForResponseWhenStatus() {
    $this->expectException(\Fasttrack\Exceptions\BadRequestException::class);
    $result = \Fasttrack\utils\throwExceptionForResponse(400, null, DETAIL);
  }

  public function testThrowExceptionForResponseWhenErrorCode() {
    $this->expectException(\Fasttrack\Exceptions\VersionRequiredException::class);
    $result = \Fasttrack\utils\throwExceptionForResponse(430, 1, DETAIL);
  }

  public function testThrowExceptionForResponseWhenBadStatus() {
    $this->expectException(\Fasttrack\Exceptions\InternalServerException::class);
    $result = \Fasttrack\utils\throwExceptionForResponse(550, null, DETAIL);
  }
}
?>
