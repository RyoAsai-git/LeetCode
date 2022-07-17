<?php
class Solution
{
    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function minTimeToVisitAllPoints($points)
    {
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

//最短経路を求めるには単純にそれぞれ与えられた座標からより差が大きい方の数値を引けば良い
//値をそのまま取得するのではなく、絶対値を取得する

// 解答のテストケースでは[[1,1],[3,4],[-1,0]]が使われているので、この場合はx1,y1には-1,0が代入され、x2,y2には3,4がそれぞれ代入されます。
// そしてそれぞれx2からx1を、y2からy1を引いた後、大きい方の数値を抽出するためにmax関数を使い、secに代入します。
// その後にx1,y1にx2,y2を代入し、それをpointsの要素数がなくなるまでループさせ、最後に差の最大値の総和であるsecを返す、という関数です。