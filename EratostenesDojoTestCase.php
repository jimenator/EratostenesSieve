<?php
/**
 * Created by PhpStorm.
 * User: jimenator
 * Date: 7/09/15
 * Time: 19:25
 */
require_once "EratostenesDojo.php";

class EratostenesDojoTestCase extends PHPUnit_Framework_TestCase
{
    /** @var EratostenesDojo */
    private $class;

    public function setUp()
    {
        $this->class = new EratostenesDojo();
    }

    /** @test */
    public function base_case()
    {
        $this->assertEquals(array(2), $this->class->sieve(2));
    }

    /** @test */
    public function it_discards_all_not_primes_until_5()
    {
        $expectedDiscardedNumbers = [4];
        $actualDiscardedNumbers= $this->class->compositesOf(5);

        $this->assertEquals($actualDiscardedNumbers, $expectedDiscardedNumbers);
    }

    /** @test */
    public function it_discards_all_not_primes_until_7()
    {
        $expectedDiscardedNumbers = [4, 6];
        $actualDiscardedNumbers= $this->class->compositesOf(7);

        $this->assertEquals($actualDiscardedNumbers, $expectedDiscardedNumbers);
    }

    /** @test */
    public function sieve_of_3()
    {
        $this->assertEquals([2,3], $this->class->sieve(3));
    }

    /** @test */
    public function sieve_of_5()
    {
        $this->assertEquals([2,3,5], $this->class->sieve(5));
    }

    /** @test */
    public function it_throws_exception_when_passed_number_is_negative()
    {
        $this->setExpectedException('Exception', 'negative numbers are not allowed');
        $this->class->sieve(-1);
    }

    /** @test */
    public function it_throws_exception_when_passed_number_is_negative_when_calculating_composites()
    {
        $this->setExpectedException('Exception', 'negative numbers are not allowed');
        $this->class->compositesOf(-1);
    }
}
