function solution($A) {
    // Implement your solution here
    sort($A);
    $size = count($A);
    for($i=2; $i<$size; $i++){
        if($A[$i-2] + $A[$i-1] > $A[$i])
            return 1;
    }
    return 0;
}