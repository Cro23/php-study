<?php

declare(strict_types=1); ?>

<body>
  <pre>
  <?php
  require_once dirname(__FILE__) . '/Customer.php';
  require_once dirname(__FILE__) . '/Address.php';
  $customer1 = new Customer('山﨑太郎', new Address('東京都', '品川区'));
  print_r($customer1);
  ?>
  </pre>
</body>