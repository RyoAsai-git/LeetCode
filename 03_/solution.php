class Solution {

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function decompressRLElist($nums) {
    $answer = [];
    for ($i = 0; $i < count($nums); $i += 2) {
        $answer = array_merge($answer, array_fill(0, $nums[$i], $nums[$i+1]));
    }
    return $answer;
    }
}