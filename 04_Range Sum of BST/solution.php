/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
    function rangeSumBST($root, $low, $high) {
        if ($root == null) return 0;

        $sum = 0;
        $sum += $this->rangeSumBST($root->left, $low, $high);
        $sum += $this->rangeSumBST($root->right, $low, $high);

        if ($root->val >= $low && $root->val <= $high) $sum += $root->val;
        return $sum;
    }
}


<!-- 再起的に処理する -->
<!-- 考え方としては与えられたnodeの値がある間、LとRの値とnodeの値を比較し、L<= node.value <= Rの場合は総和にプラスし、それ以外の場合、
Lよりnode.valueが大きい場合は左のnodeへ移り、Rよりnode.valueが小さい場合は右のnodeへと移る関数を実装し、総和を出す -->

<!-- Runtime: 144 ms, faster than 25.00% of PHP online submissions for Range Sum of BST.
Memory Usage: 27 MB, less than 33.33% of PHP online submissions for Range Sum of BST.
Next challenges: -->