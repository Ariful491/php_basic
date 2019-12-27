<?php


class Langth
{
public function wordLetterCount($data){
  $stringLength = strlen($data['giving_string']);
  $stringWord = str_word_count($data['giving_string']);

  $result = [
      'stringLength' => $stringLength,
      'stringWord' => $stringWord
  ];
  return $result;

}
}