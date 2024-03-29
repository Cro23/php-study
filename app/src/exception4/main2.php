<?php declare(strict_types=1); ?>
<body>
  <?php
  require_once dirname(__FILE__) . '/PageNotFoundException.php';
  
  // ユーザー情報を管理するデータベーステーブルにアクセスするクラス
  class UserModel
  {
    // ユーザごとのプロフィールページを表示するメソッド
    public function findProfile(int $userId): array
    {
      // 引数$userIdに対応するプロフィールページが存在しなかったと仮定して例外をスローします
      throw new PageNotFoundException("User profile does not exist");
    }
  }

  // メインルーチン
  $model = new UserModel();
  try {
    $profile = $model->findProfile(1001);
  } catch (PageNotFoundException $exception) {
    echo file_get_contents('error-page-not-found.html'); // エラーページを表示する
    return;
  } catch (Exception $exception) {
    echo file_get_contents('error-unknown.html'); // エラーページを表示する
    return;
  }
  ?>
</body>