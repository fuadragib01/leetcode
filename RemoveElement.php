class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $len = count($nums);
        for( $i=0; $i<$len; $i++ ) {
            if( $nums[$i] == $val ) {
                unset($nums[$i]);
            }
        }
        return count($nums);
    }
}
