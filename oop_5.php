<?php

abstract class car{

    //method
    abstract function forward();
    function backword(){
        return "Car going backward";
    }
}

class Nissan extends car{
    function forward(){
        return "Go to forward";
    }
}
$obj_nissan = new Nissan;
echo $obj_nissan->forward();
?>