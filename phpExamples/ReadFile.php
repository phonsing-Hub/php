#!/bin/php
<?php
    $filename = "data.txt";

    if (file_exists($filename)) {

        $file = fopen($filename, "rt");
    
        print("File $filename is open\n");

        fscanf($file, "%f", $value);
        printf("Value in file: $value\n");
        
        fclose($file);
        printf("File $filename is closed\n");

    } else {
        
        print("File $filename is not found\n");
    
    }
?>