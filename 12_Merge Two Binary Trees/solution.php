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
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return TreeNode
     */
    function mergeTrees($r1, $r2)
    {
        if ($r1 == null && $r2 == null)
            return null;
        $root = new TreeNode($r1->val + $r2->val, null, null);
        $root->left = $this->mergeTrees($r1->left, $r2->left);
        $root->right = $this->mergeTrees($r1->right, $r2->right);
        return $root = new TreeNode($root->val, $root->left, $root->right);
    }
}
