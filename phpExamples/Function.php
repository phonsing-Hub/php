#!/bin/php
<?php
    function noInputNoOutput() {
        print("Computer Engineering\n");
    }

    function inputWithNoOutput($str) {
        print("Message: \"$str\"\n");
    }

    function bothInputAndOutput(int $x1, int $x2) {
        return $x1 + $x2;
    }

    noInputNoOutput();
    inputWithNoOutput("What happen about thailand police?");
    
    $v1 = 10;
    $v2 = 20;
    $v3 = bothInputAndOutput($v1, $v2);
    print("$v1 + $v2 = $v3\n")

?>