class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum( $nums, $target ) {
        $length = count( $nums );
        for( $i=0; $i<$length; $i++ ) {
            for( $j=$i+1; $j<$length; $j++ ) {
                $sum = $nums[$i] + $nums[$j];
                if( $sum == $target ) {
                    return [$i,$j];
                }
            }
        }
    }
}
