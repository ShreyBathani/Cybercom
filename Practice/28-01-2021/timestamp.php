<?php

//timestamp
echo "<h1>Timestamp</h1><br>";
date_default_timezone_set('Asia/Kolkata');
echo 'Unix time: '.time().'<br>';
echo 'Current time: '.date('d/m/Y @ h:i:s a',time()).'<br>';
echo 'Modified Time : '.date('d/m/Y @ h:i:s a',strtotime('+4 hours 30 minutes'));

?>