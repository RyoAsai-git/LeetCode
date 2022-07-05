<?php

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
class Solution
{

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root)
    {
        if ($root == null) {
            return 0;
        }
        $maxDepth = 1 + max($this->maxDepth($root->left), $this->maxDepth($root->right));
        return $maxDepth;
    }
}

// Runtime: 23 ms, faster than 16.38% of PHP online submissions for Maximum Depth of Binary Tree.
// Memory Usage: 20.6 MB, less than 94.83% of PHP online submissions for Maximum Depth of Binary Tree.