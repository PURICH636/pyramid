<?php
class Prime
{
    var $input;
    public static function isPrime($input)
    {
        if (! is_numeric($input)) {
            echo 'An input is not numberic';
            return false;
        }
        if (round($input) != $input) {
            echo 'An input is not integer';
            return false;
        }
        if ($input === 1) {
            return false;
        }
        return self::doRecursion($input, $input - 1);
    }
    public static function doRecursion($a, $b)
    {
        if ($b == 1) {
            return true;
        }
        if ($a % $b == 0) {
            return false;
        }
        return self::doRecursion($a, $b - 1);
    }
}
for ($i = 1; $i <= 1000; $i++) {
    if (Prime::isPrime($i)) {
        echo "$i is prime number\n";
    }
}