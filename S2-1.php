function solution($A, $K) {
    // Implement your solution here
    $size = count($A);
    if(empty($A)) return $A;
    if($K % $size == 0) return $A;
    $K = $K % $size;
    for($j=0; $j<$K; $j++){
        for($i=$size-1; $i>0; $i--){
            $tmp = $A[$i];
            $A[$i] = $A[$i-1];
            $A[$i-1] = $tmp;
        }    

    }
    return $A;
}