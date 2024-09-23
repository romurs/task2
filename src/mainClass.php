<?php

namespace Roma\Task2;

class MainClass
{
  public static function arrayUnique(array $arr): array
  {
    return array_values(array_unique($arr));
  }

  public static function mostRecent(string $text): string
  {

    $userText = mb_strtolower($text);
    $userText = preg_replace('/\s+/', ' ', $userText);
    $userText = preg_replace('/[^ a-zа-яё\d]/ui', '', $userText);
    $words = array_filter(explode(" ", $userText));

    $coutWords = array_count_values($words);
    arsort($coutWords);

    $mostCommonWordCount = reset($coutWords);
    $mostCommonWord = array_keys($coutWords, $mostCommonWordCount);

    return implode(' ', $mostCommonWord);
  }

  public static function caesarsCipher(string $text, int $shift) : string
  {
    $array = array(
      'A', 'a', 'B', 'b', 'C', 'c', 'D', 'd', 'E', 'e', 'F', 'f', 'G', 'g', 'H', 'h', 'I', 'i',
      'J', 'j', 'K', 'k', 'L', 'l', 'M', 'm', 'N', 'n', 'O', 'o', 'P', 'p', 'Q', 'q', 'R', 'r',
      'S', 's', 'T', 't', 'U', 'u', 'V', 'v', 'W', 'w', 'X', 'x', 'Y', 'y', 'Z', 'z',
      'A', 'a', 'B', 'b', 'C', 'c', 'D', 'd', 'E', 'e', 'F', 'f', 'G', 'g', 'H', 'h', 'I', 'i',
      'J', 'j', 'K', 'k', 'L', 'l', 'M', 'm', 'N', 'n', 'O', 'o', 'P', 'p', 'Q', 'q', 'R', 'r',
      'S', 's', 'T', 't', 'U', 'u', 'V', 'v', 'W', 'w', 'X', 'x', 'Y', 'y', 'Z', 'z'
    );
    $shift *= 2;
    $newText = '';
    for($i = 0; $i < strlen($text); $i++){
      $index = array_search($text[$i], $array);
      if ($index){
        $newText .= $array[$index + $shift];
      } else {
        $newText .= $text[$i];
      }
    }
    return $newText;
  }
}
