class Solution {

    /**
    * @param String $address
    * @return String
    */
    function defangIPaddr($address) {
        $defangedStr = str_replace(".", "[.]", $address, $n);
        return $defangedStr;
    }
}

// str_replace("検索を行う文字列","置き換えを行う文字列","対象の文字列","str_replace処理の回数");