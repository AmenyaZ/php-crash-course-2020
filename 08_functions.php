<?php

// Function which prints "Hello I am Zura"

// Function with argument
function hello ($name){
    return "Hello I am $name";
}
echo hello ('Zura'). '<br>'; 
echo hello ('Brad').'<br>';


// Create sum of two functions

// function sum ($a, $b )
// {
//     return $a + $b;
// }
// echo sum (2,4);
// Create function to sum all numbers using ...$nums
function sum(...$nums)
{
    $sum = 0;
    foreach ($nums as $n){
        $sum += $n;
    }
    return $sum;
}
echo sum (1,2,3,4,5,6,7,8,9);
// Arrow functions
