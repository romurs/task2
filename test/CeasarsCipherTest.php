<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Roma\Task2\mainClass;


class CeasarsCipherTest extends TestCase
{
  public function testCipherWithEnglishTextAndPositiveKey()
  {
    $result = MainClass::caesarsCipher('abcde', 2);
    $this->assertEquals('cdefg', $result);
  }

  public function testCipherWithKeyGreaterThanAlphabetLength()
  {
    $result = MainClass::caesarsCipher('abcde', 27);
    $this->assertEquals('bcdef', $result);
  }

  public function testCipherWithNonAlphabetCharacters()
  {
    $result = MainClass::caesarsCipher('abcde123', 1);
    $this->assertEquals('bcdef123', $result);
  }

  public function testCipherWithNegativeKey()
  {
    $result = MainClass::caesarsCipher('bcdef', -1);
    $this->assertEquals('abcde', $result);
  }}
