<?php

declare(strict_types=1);

class Task
{

  // 優先度を表す定数
  public const PRIORITY_LOW = 0;
  public const PRIORITY_MIDDLE = 1;
  public const PRIORITY_HIGH = 2;


  // タスク名
  private string $name;

  // 優先度
  private $priority;

  // 進行度（0~100で表す）
  private int $progress;

  // nameプロパティのゲッターメソッド
  public function getName(): string
  {
    return $this->name;
  }

  // nameプロパティのセッターメソッド
  public function setName(string $name): void
  {
    $this->name = $name;
  }

  // progressプロパティのゲッターメソッド
  public function getProgress(): int
  {
    return $this->progress;
  }

  // progressプロパティのセッターメソッド
  public function setProgress(int $progress): void
  {
    if ($progress < 0) {
      $progress = 0;
    } elseif ($progress > 100) {
      $progress = 100;
    }
    $this->progress = $progress;
  }

  // タスクを完了ステータスにする
  public function completeProgress(): void
  {
    $this->progress = 100;
  }

  // タスクを未完了ステータスにする
  public function clearProgress(): void
  {
    $this->progress = 0;
  }

  public function getPriority(): int
  {
    return $this->priority;
  }

  public function setPriority(int $priority): void
  {
    $this->priority = $priority;
  }

  public function getPriorityAsString(): string
  {
    switch ($this->priority) {
      case self::PRIORITY_LOW:
        return '低';
        break;
      case self::PRIORITY_MIDDLE:
        return '中';
        break;
      case self::PRIORITY_HIGH:
        return '高';
        break;
    }
  }
}
