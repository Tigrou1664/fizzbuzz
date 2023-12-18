<?php

/**
 * Display numbers from 1 to N with Fizz, Buzz, and FizzBuzz conditions.
 *
 * @param int $n the upper limit of numbers to display
 * 
 * @return void
 */
function fizzBuzz(int $n = 15)
{
    for ($i = 1; $i <= $n; ++$i) {
        $output = '';
        if (0 == $i % 3) {
            $output .= 'Fizz';
        }
        if (0 == $i % 5) {
            $output .= 'Buzz';
        }
        echo $output ? $output.PHP_EOL : $i.PHP_EOL;
    }
}

// Pass the value of N as per your requirement
fizzBuzz(100);
