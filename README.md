# [Algo] Fizzbuzz

## Instructions

The classical Fizz Buzz.

## Subject

Display numbers between **1** and **N** by following the rules:

- if number can be divided by 3: display **Fizz** ;
- if number can be divided by 5: display **Buzz** ;
- if number can be divided by 3 **AND** 5 : display **FizzBuzz** ;
- else: display the number.

## Description

In this version, a single $output variable is used to accumulate the **Fizz** and **Buzz** strings.
The condition **$output ? $output.PHP_EOL : $i.PHP_EOL** is a shorthand way of deciding whether to print the concatenated **Fizz** and **Buzz** string or the original number.
I tried to propose a concise and efficient version.
