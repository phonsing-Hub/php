#!/bin/php
<?php
    print("\$argc: $argc\n");
    for ($i = 0; $i < $argc; $i ++) {
        print("\$argv[$i]: \"$argv[$i]\"\n");
    }
?>