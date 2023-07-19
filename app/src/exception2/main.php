<?php declare(strict_types=1); ?>

<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>例外処理 - honkaku</title>
</head>
<body>
  <pre>
    <?php
    require_once dirname(__FILE__) . '/ClassA.php';
    try {
      $classA = new ClassA();
      $classA->methodA();
    } catch (Exception $exception) {
      echo 'メインルーチンで例外をキャッチ。エラー内容：', $exception->getMessage(), PHP_EOL;
      print_r($exception->getTrace());
    }
    echo 'メインルーチン終了します。';
    ?>
  </pre>
</body>
</html>