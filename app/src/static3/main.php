<?php declare(strict_types=1);

class SomeClass
{
  // インスタンスプロパティ
  private $instanceProperty;

  public function instanceMethod()
  {
    echo 'instanceMethod() called.', PHP_EOL;
  }

  // 静的メソッド
  public static function staticMethod()
  {
    // 自分自身のインスタンスを作り、インスタンスメソッドを呼び出す
    $someClass = new SomeClass;
    $someClass->instanceMethod();

    // 外部クラスのインスタンスを作り、インスタンスメソッドを呼び出す
    $externalClass = new ExternalClass();
    $externalClass->externalMethod();
  }
}

class ExternalClass
{
  // 外部クラス内のインスタンスメソッド
  public function externalMethod()
  {
    echo 'externalMethod() called.', PHP_EOL;
  }
}

// メインルーチン
SomeClass::staticMethod();