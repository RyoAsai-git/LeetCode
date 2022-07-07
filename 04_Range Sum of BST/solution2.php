<?php

// 別解
class Solution
{

    /**
     * @param TreeNode $root
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
    function rangeSumBST($root, $low, $high)
    {
        echo "関数が呼ばれました";
        echo "\n";
        echo "nodeは" . $root->val . "です";
        echo "\n";

        $val = $root->val;
        $sum = ($val >= $low && $val <= $high) ? $val : 0;
        echo "合計は" . $sum;
        echo "\n";
        if ($val > $low && $root->left !== null) {
            echo "左へ" . "nodeは" . $root->val;
            echo "\n";
            $sum += $this->rangeSumBST($root->left, $low, $high);
        }

        if ($val < $high && $root->right !== null) {
            echo "右へ" . "nodeは" . $root->val;
            echo "\n";
            $sum += $this->rangeSumBST($root->right, $low, $high);
        }
        echo "合計を返します";
        echo "\n";
        return $sum;
    }

    function rangeSumBST($root, $low, $high)
    {
        $sum += ($root->val >= $low && $root->val <= $high) ? $root->val : 0;
        if ($root->val > $low && $root->val !== null) {
            $sum += $this->rangeSumBST($root->left, $low, $high);
        }
        if ($root->val < $high && $root->val !== null) {
            $sum += $this->rangeSumBST($root->right, $low, $high);
        }

        return $sum;
    }
}
