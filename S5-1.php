// 1
function solution($A) {
    // Implement your solution here

    $num_1 = 0;
    $size = count($A);
    $ans = 0;
    for($i=0; $i<$size; $i++){
        if($ans >= 1000000000) return -1;
        $tmp = 0;
        if($A[$i] == 0){
            $tmp = array_sum($A) - $num_1;
            $ans += $tmp;
        }
        else if($A[$i] == 1){
            $num_1 += 1;
        }
    }
    return $ans;
}

// 2
function solution($A) {
    // Implement your solution here

    $ans = 0;
    while( in_array(0, $A) ){
        if($ans >= 1000000000) return -1;
        if($A[0] == 0){
            $ans += array_sum($A);
            array_shift($A);
        }
        if($A[0] == 1){
            array_shift($A);
        }
    }
    return $ans;
}

// 3
function solution($A) {
    // Implement your solution here
    $size = count($A);
    if($size < 1 || $size > 100000) return -1;

    $ans = 0;
    $ct = 0;
    for($i=0; $i<$size; $i++){
        if($ans >= 1000000000) return -1;
        if($A[$i] == 0){
            $ct += 1;
        }
        if($A[$i] == 1){
            $ans += $ct;
        }
    }
    return $ans;
}