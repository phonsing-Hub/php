#!/bin/php
<?php
    $point = 78;
    print("Point: $point\n");
    if ($point < 50) {
        print("Grade: F\n");
    } elseif ($point < 60) {
        print("Grade: D\n");
    } elseif ($point < 70) {
        print("Grade: C\n");
    } elseif ($point < 80) {
        print("Grade: B\n");
    } else {
        print("Grade: A\n");
    }
    

?>