function solution($A) {
    // Implement your solution here
    $size_A = count($A);
    $left_count = 0;
    $right_count = array_sum($A);
    $min = 1000000000;
    for($i=0; $i<$size_A-1; $i++){
        $left_count = $left_count + $A[$i];
        $right_count = $right_count - $A[$i];
        if(abs($left_count - $right_count) < $min)
            $min =  abs($left_count - $right_count);
    }
    return $min;
}