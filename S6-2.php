function solution($A) {
    $size = count($A);
    if($size == 3) return $A[0]*$A[1]*$A[2];
    sort($A);
    if($A[0]<0 && $A[1]<0){
        $max = $A[0] * $A[1] * $A[$size-1];
    }
    if($A[$size-3] * $A[$size-2] * $A[$size-1] > $max){
        $max = $A[$size-3] * $A[$size-2] * $A[$size-1];
    }
    return $max;
}