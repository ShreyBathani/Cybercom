<?php

//reading xml
echo '<h1>Reading xml</h1><br>';

$xml = simplexml_load_file('producer.xml');

foreach ($xml->producer as $producer) {
    echo '<b>'. $producer->name . '</b> (' . $producer->age . ')<br>';
    foreach ($producer->show as $show) {
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-' . $show->showname . ' on ' . $show->showdate.'<br>';
    }
}

?>