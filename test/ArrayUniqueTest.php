<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Roma\Task2\mainClass;

class ArrayUniqueTest extends TestCase
{
  public function testArrayWithDuplicates()
  {
    $result = MainClass::arrayUnique([666, 666, 666, 11, 52, 25]);
    $this->assertEquals([666, 11, 52, 25], $result);
  }

  public function testArrayWithoutDuplicates()
  {
    $result = MainClass::arrayUnique([1, 2, 3, 4, 5]);
    $this->assertEquals([1, 2, 3, 4, 5], $result);
  }

  public function testEmptyArray()
  {
    $result = MainClass::arrayUnique([]);
    $this->assertEquals([], $result);
  }

  public function testArrayWithAllSameElements()
  {
    $result = MainClass::arrayUnique([5, 5, 5, 5, 5]);
    $this->assertEquals([5], $result);
  }

  public function testArrayWithMixedTypes()
  {
    $result = MainClass::arrayUnique([1, '1', 1, '1', true, false, true]);
    $this->assertEquals([1, false], $result);
  }
}
