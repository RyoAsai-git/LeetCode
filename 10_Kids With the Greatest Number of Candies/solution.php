<?php

class Solution
{

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies)
    {
        $kids = max($candies);
        for ($i = 0; $i < count($candies); $i++) {

            if ($candies[$i] + $extraCandies >= $kids) {
                $candies[$i] = true;
            } else {
                $candies[$i] = false;
            }
        }
        return $candies;
    }
}


// Runtime: 24 ms, faster than 13.64% of PHP online submissions for Kids With the Greatest Number of Candies.
// Memory Usage: 19.1 MB, less than 72.73% of PHP online submissions for Kids With the Greatest Number of Candies.
