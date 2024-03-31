#!/bin/php
<?php
    for ($sum = 1, $i = 0; $i <= 10; $i ++) { 
         $sum += $i;
    }
    print("For sum: $sum\n");

    $sum = 0;
    $i = 1;
    while ($i <= 10) {
        $sum += $i;
        $i ++;
    }
    print("While sum: $sum\n");

    $sum = 0;
    $i = 1;
    do {
        $sum += $i;
        $i ++;
    } while ($i <= 10);
    print("Do...While sum: $sum\n");
?>