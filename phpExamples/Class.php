#!/bin/php
<?php
    class Student {
        
        private string $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function display() {
            print("Name: $this->name\n");
        }
    }

    $a = new Student("Pin");
    $a->display();

?>