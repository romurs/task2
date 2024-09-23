<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Roma\Task2\mainClass;


class MostRecentTest extends TestCase
{
  public function testMostRecentWithRegularInput()
    {
        $result = MainClass::mostRecent('123 123 123 qq qq qq qq');
        $this->assertEquals('qq', $result);
    }

    public function testMostRecentWithSingleWord()
    {
        $result = MainClass::mostRecent('hello');
        $this->assertEquals('hello', $result);
    }

    public function testMostRecentWithEmptyString()
    {
        $result = MainClass::mostRecent('');
        $this->assertEquals('', $result);
    }

    public function testMostRecentWithEqualWordFrequency()
    {
        $result = MainClass::mostRecent('apple orange apple orange');
        $this->assertEquals('apple orange', $result);
    }

    public function testMostRecentWithSpaces()
    {
        $result = MainClass::mostRecent('  apple  banana  apple ');
        $this->assertEquals('apple', $result);
    }
}
