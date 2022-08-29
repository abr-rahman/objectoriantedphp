<?php

class car{
    public static $color = 'Red <br>';

    //method
    public static function forword($new_color){
        return "$new_color Car going forward";
    }
}

echo car::$color;
echo car::forword("Pink");


?>