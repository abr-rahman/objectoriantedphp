<?php
    class car{
        public $color = '';
        // methods
        function __construct($color_given = 'Blue'){
            $this->color = $color_given;
        }
        function forward($name, $type){
            return "$this->color $name going $type<br>";
        }
        function backword($name, $speed){
            return "$this->color $name id Going $speed<br>";
        }
       
    }
    $toyota = new car('Blue');
    echo $toyota->forward('Bus','Student');

    $ship = new car('White');
    echo $ship->backword('Ship','Slowly');
?>