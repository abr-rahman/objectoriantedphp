<?php
    class car{
        function __construct(){
            echo "Hello I am First bancher <br>";
        }
        function __destruct(){
            echo "Hi I'm last bancher <br>";
        }
        function forward($name, $type){
            return "$name is a $type<br>";
        }
        function backword($name, $speed){
            return "$name id Going $speed<br>";
        }
       
    }
    $toyota = new car;
    echo $toyota->forward('Arif','Student');
    echo $toyota->forward('Najim','Warkar');
    echo $toyota->backword('Rickshaw','Faster');

    $ship = new car;
    echo $ship->backword('Ship','Slowly');
?>