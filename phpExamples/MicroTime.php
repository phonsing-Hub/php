#!/bin/php
<?php
    // get microtime
    $mt = microtime();
    print("microtime: $mt\n");
    
    // explode
    $value = explode(" ", $mt);
    print("value[0] (microseconds.): $value[0]\n");
    print("value[1] (seconds., since Jan. 1, 1970): $value[1]\n");
        
?>