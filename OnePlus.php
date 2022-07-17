class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $len = count($digits);
        $num = '';
        for ($i=0;$i<$len;$i++) {
            $num .= $digits[$i]; 
        }
        $num = bcadd($num, 1);
        $num = (string) $num;
        $len = strlen($num);
        for ($i=0;$i<$len;$i++) {
            $digits[$i] = $num[$i]; 
        }
        return $digits;
    }
}
