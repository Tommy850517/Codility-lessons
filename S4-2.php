function solution($A) {
    // Implement your solution here
    sort($A);
    for($i=0; $i<count($A); $i++){
        if($i+1 != $A[$i]) return 0;
    }
    return 1;
}