<?php declare(strict_types=1); ?>
<body>
  <?php
  require_once dirname(__FILE__) . '/office/word/Writer.php';
  use Office\Word\Writer;
  $writer = new Writer(); // WordのWriterクラスを使う
  $writer->write();

  ?>
</body>