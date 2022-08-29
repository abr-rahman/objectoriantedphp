<?php

use car as GlobalCar;

class car{
        // methods
        function forward($name, $speed = "Normally"){
            return "$this->color $name going $speed<br>";
        }
        function backword($name, $speed = "Normally"){
            return "$this->color $name id Going $speed<br>";
        }
       
    }

    //child class
    class Nissan extends car{
       function fly($name, $speed = "Normally"){
        return "$this->color $name id Going $speed<br>";
       }
    }

    $ob_nissan = new Nissan("Pink");
    echo $ob_nissan->forward("Nissan");
?>