<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function numberOfSteps($num) {
        $steps = 0;
        while ($num !== 0) {
            if ($num % 2 === 0) {
                $num /= 2;
                $steps++;
            } else {
                $num -= 1;
                $steps++;
            }
        }
        return $steps;
    }
}


// Runtime: 9 ms, faster than 68.85% of PHP online submissions for Number of Steps to Reduce a Number to Zero.
// Memory Usage: 19.2 MB, less than 42.62% of PHP online submissions for Number of Steps to Reduce a Number to Zero.
// Next challenges: