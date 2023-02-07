<?php
use PHPUnit\Framework\TestCase;
require './src/Factorial.php';


class FactorialTest extends TestCase
{
    public function testFuctorial()
    {
        $c = new Factorial;
        $boolresult = $c->FactorialCalc(false);
        $this->assertEquals(null,$boolresult);

        $stringresult = $c->FactorialCalc('abc');
        $this->assertEquals(null,$stringresult);

        $floatresult = $c->FactorialCalc(2.55);
        $this->assertEquals(null,$floatresult);

        $zeroresult = $c->FactorialCalc(0);
        $this->assertEquals(1,$zeroresult);

        $fiveresult = $c->FactorialCalc(5);
        $this->assertEquals(120,$fiveresult);

        $sixesult = $c->FactorialCalc(6);
        $this->assertEquals(720,$sixesult);



    }
}



?>