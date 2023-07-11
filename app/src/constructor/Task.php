<?php
declare(strict_types=1);

class Task
{
  // タスク名
  public string $name;

  // 優先度（0は低、1は中、2は高）
  public int $priority;

  // 進行度（0~100で表す）
  public int $progress;

  // コンストラクタ
  public function __construct(string $name)
  {
    $this->name = $name;
    $this->priority = 1; //優先度「中」を初期値とする
    $this->progress = 0; //進行度ははじめはゼロ
  }

  public function isCompleted(): bool
  {
    return $this->progress >= 100; // $progressが100以上なら真を返す
  }
}