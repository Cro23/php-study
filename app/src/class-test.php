<?php
class Slime
{
  // オブジェクトの変数（値）
  public $type  = 'スライム';
  public $suffix = '';

  public $hp    = 10;
  public $power = 3;

  function __construct($a) {
    $this->suffix = $a;
  }

  function name() {
    return $this->type . '-' . $this->suffix;
  }

  // オブジェクトの関数（処理）
  function attack($chara_name)
  {
    print $this->name() . 'が' . $chara_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた' . PHP_EOL;
  }
}

$slime = new Slime('a');
$slime->attack('主人公');

print_r($slime);
print 'タイプ：' . $slime->type;