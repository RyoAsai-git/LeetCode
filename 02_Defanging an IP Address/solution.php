class Solution {

    /**
    * @param String $address
    * @return String
    */
    function defangIPaddr($address) {
        return str_replace(".", "[.]", $address, $n);
    }
}
<!-- Runtime: 2 ms, faster than 95.83% of PHP online submissions for Defanging an IP Address.
Memory Usage: 19 MB, less than 87.50% of PHP online submissions for Defanging an IP Address. -->

// str_replace("検索を行う文字列","置き換えを行う文字列","対象の文字列","str_replace処理の回数");
