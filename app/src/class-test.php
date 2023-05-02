<?php
class Slime
{
  // オブジェクトの変数（値）
  public static $type  = 'スライム'; //クラス変数
  public $suffix = '';

  public $hp    = 10;
  public $power = 3;

  function __construct($a) {
    $this->suffix = $a;
  }

  function name() {
    return self::$type . '-' . $this->suffix;
  }

  // オブジェクトの関数（処理）
  function attack($chara_name)
  {
    print $this->name() . 'が' . $chara_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた' . PHP_EOL;
  }

  // クラスメソッド
  static function description() {
    print self::$type . 'は、最強のモンスターだ' . PHP_EOL;
  }

}

$slime = new Slime('a');
$slime->attack('主人公');
$slime->description();

print_r($slime);
