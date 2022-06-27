class Solution {

/**
 * @param Integer[][] $points
 * @return Integer
 */
    function minTimeToVisitAllPoints($points) {
        $steps = 0;
        [$x1, $y1] = array_pop($points);
        while ($points) {
            [$x2, $y2] = array_pop($points);
            $steps += max(abs($x2 - $x1), abs($y2 - $y1));
            [$x1, $y1] = [$x2, $y2];
        }
        return $steps;
    }
}
