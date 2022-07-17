class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ( $x < 0 ) {
            return false;
        }
        $x = (string)$x;
        $len = strlen($x);
        $new = '';
        for ( $i=0; $i<=$len; $i++ ) {
            $new .= $x[$len-$i];
        }
        if (!strcmp($new,$x)) {
            return true;
        }
        return false;
    }
}
