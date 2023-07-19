<?php declare(strict_types=1); ?>
<body>
  <pre>
  <?php
  require_once dirname(__FILE__) . '/TaxCalculator.php';
  $calculator = new TaxCalculator();
  try {
    $priceWithTax = $calculator->calculate(100, -0.08);
    echo 'Price', $priceWithTax, '円';
  } catch (Exception $excepton) {
    echo '税込金額が計算できませんでした。理由：', $excepton->getMessage(), PHP_EOL;
  } finally {
    $calculator->reset();
  }
  echo 'プログラム処理を終了します。';
  ?>

  </pre>
</body>