<?php declare(strict_types=1); ?>
<pre>
  <?php
  require_once dirname(__FILE__) . '/ExelColumnConverter.php';

  echo ExcelColumnConverter::calcAlphabetColumnName(3), PHP_EOL;
  
  echo ExcelColumnConverter::calcNumberColumnName('F');
  ?>
</pre>