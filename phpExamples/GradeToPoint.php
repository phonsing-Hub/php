#!/bin/php
<?php
    $grade = 'acc';
    printf("Grade: $grade\n");
    switch ($grade) {
        case 'A':
            print("Point: x >= 80\n");
            break;
        case 'B':
            print("Point: 70 <= x < 80\n");
            break;
        case 'C':
            print("Point: 60 <= x < 70\n");
            break;
        case 'D':
            print("Point: 50 <= x < 60\n");
            break;
        case 'F':
            print("Point: x < 50\n");
            break;
        default:
            print("Invalid...\n");
            break;
    }
?>