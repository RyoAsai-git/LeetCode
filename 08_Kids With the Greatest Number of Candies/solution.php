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
