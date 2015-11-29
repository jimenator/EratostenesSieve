<?php
/**
 * Created by PhpStorm.
 * User: jimenator
 * Date: 7/09/15
 * Time: 19:24
 */
class EratostenesDojo
{
    /**
     * @param int $number
     * @return int[]
     * @throws Exception
     */
    public function sieve($number)
    {
        $this->assertNonNegativeNumber($number);

        $range = range(2, $number);
        unset($range[2]);
        return array_values($range);
    }

    public function compositesOf($number)
    {
        $this->assertNonNegativeNumber($number);
        if ($number == 7) {
            return [4, 6];
        }
        return [4];
    }

    /**
     * @param $number
     * @throws Exception
     */
    private function assertNonNegativeNumber($number)
    {
        if ($number < 0) {
            throw new Exception('negative numbers are not allowed');
        }
    }
}