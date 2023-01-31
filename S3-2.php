function solution($A) {
    sort($A);
    $size_A = count($A);
    if($size_A == 0) return 1;

    if($A[0] != 1) return 1;

    for($i=1; $i < $size_A ;$i++){

        if($A[$i-1] != $A[$i]-1) return $A[$i]-1;

    }

    return $A[$size_A - 1] + 1;
}