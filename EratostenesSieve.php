<?php
/**
 * Created by PhpStorm.
 * User: jimenator
 * Date: 7/09/15
 * Time: 17:33
 */

class EratostenesSieve
{
    public function __construct(){}

    private function getNumbers($n)
    {
        return range(2, $n);
    }

    public function sieve($n)
    {
        $numbers = $this->getNumbers($n);

        foreach($numbers as $prime) {
            foreach ($numbers as $key => $multiple) {
                if (($multiple !== $prime) && (($multiple % $prime) === 0)) {
                    unset($numbers[$key]);
                }
            }
        }

        return array_values($numbers);
    }
}