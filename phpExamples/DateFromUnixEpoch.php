#!/bin/php
<?php
    
    $unixEpoch = 1675184400;

    $str = date("d M Y, H:i:s", $unixEpoch);

    print("Data: $str\n");
    
?>