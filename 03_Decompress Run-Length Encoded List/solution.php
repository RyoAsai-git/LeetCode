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

<!-- Runtime: 38 ms, faster than 37.50% of PHP online submissions for Decompress Run-Length Encoded List.
Memory Usage: 20.1 MB, less than 31.25% of PHP online submissions for Decompress Run-Length Encoded List. -->

<!-- https://www.php.net/manual/ja/function.array-fill.php -->
<!-- https://www.php.net/manual/ja/function.array-merge.php -->
