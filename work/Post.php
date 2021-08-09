<?php

// 名前空間
// namespace Dotinstall\MyPHPApp;

class Post
{
  private $text;

  public function __construct($text)
  {
    if(strlen($text) <= 3){ //3文字以下のテキストが渡されたらメッセージを表示して、終了させる。
      // echo 'Text too short.' . PHP_EOL;
      // exit; // 処理終了させる。
      throw new Exception('Text too short.');
    }
    $this->text = $text;
  }

  public function show()
  {
    printf("%s" . PHP_EOL, $this->text);
  }
}