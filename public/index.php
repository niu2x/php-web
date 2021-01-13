<?php
  require('view/index.php');
?>

<p><?php echo "REMOTE_ADDR: {$_SERVER['REMOTE_ADDR']}\n"; ?></p>
<p><?php echo "HTTP_X_FORWARDED_FOR: {$_SERVER['HTTP_X_FORWARDED_FOR']}\n"; ?></p>
