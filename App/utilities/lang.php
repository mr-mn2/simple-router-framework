<?php
namespace App\utilities;

class lang {
    public static function persian_number($input)
    {
        $fa_number = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
        $en_number = array('0','1','2','3','4','5','6','7','8','9');
        return str_replace($en_number,$fa_number,(string)$input);
    }

    public static function English_number($input)
    {
        $fa_number = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
        $en_number = array('0','1','2','3','4','5','6','7','8','9');
        return str_replace($fa_number,$en_number,(string)$input);
    }
}