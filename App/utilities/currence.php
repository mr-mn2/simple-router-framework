<?php 
namespace App\utilities;

class currency{
    public static function in_rial($amount_in_toman)
    {
        return $amount_in_toman * 10;
    }

    public static function in_thousend($amount_in_toman)
    {
        return $amount_in_toman / 1000 ." هزار تومن";
    }

    public static function in_million($amount_in_toman)
    {
        return $amount_in_toman / 1000000 ." میلیون تومن";
    }
}