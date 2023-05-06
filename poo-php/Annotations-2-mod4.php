<?php
// CONSTANTES
class Clock{
    public const DAY_IN_SECOND = 60 * 60 * 24;

    public function tomorrow(){
        return time() + self::DAY_IN_SECOND;
    }

}

echo Clock::DAY_IN_SECOND . "<br />";
$clock = new Clock;
echo $clock->tomorrow() . "<br />";

class Image{
    public static bool $resizing_enabled = true;

    public static function geometry(){
        echo "800x600";
    }
}

class ProfileImage extends Image{
    public static function geometry(){
        if(self::$resizing_enabled){
            echo "100x100";
        }else{
            //funciona apenas para métodos estáticos, para instanciáveis não
            parent::geometry();
        }
    }
}

echo Image::geometry() . "<br />";
echo ProfileImage::geometry() . "<br />";
echo Image::$resizing_enabled = false;
echo ProfileImage::geometry() . "<br />";