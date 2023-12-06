<?php
class Math {
    public static function addTwo($num1, $num2) {
        return $num1 + $num2;
    }

    public static function factorial($num) {
        if ($num === 0 || $num === 1) {
            return 1;
        } else {
            return $num * self::factorial($num - 1);
        }
    }

    public static function sum($array) {
        return array_sum($array);
    }

    public static function average($array) {
        if (count($array) === 0) {
            return 0;
        }
        return self::sum($array) / count($array);
    }

    public static function max($array) {
        return max($array);
    }
}
?>