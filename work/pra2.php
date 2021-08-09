<?php

// 名前空間を言い換える。
// use Dotinstall\MyPHPApp as MyPHPApp;
// use Dotinstall\MyPHPApp;

require('Post.php');

try{
  $posts[0] = new Post('');
  $posts[1] = new Post('Hello again');
  
  
  foreach ($posts as $post) {
    $post->show();
  }
}catch (Exception $e){
  echo $e -> getMessage() . PHP_EOL;
}

// $posts[0] = new Dotinstall\MyPHPApp\Post('hello');
// $posts[1] = new Dotinstall\MyPHPApp\Post('hello again');
// $posts[0] = new MyPHPApp\Post('hello');
// $posts[1] = new MyPHPApp\Post('hello again');

