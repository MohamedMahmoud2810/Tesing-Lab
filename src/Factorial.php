<?php 

    class Factorial
    {
        public function FactorialCalc($num)
        {
            $factorial = 1;

            if ($num<0 || is_string($num) || is_bool($num) || is_float($num)){
                return null;
            }
            else if ($num === 0){
                return 1;
            }
            else{
                for ($x=$num; $x>=1; $x--)
                {
                $factorial = $factorial * $x;
                }
                return $factorial;
            }
            
        }
    }

?>