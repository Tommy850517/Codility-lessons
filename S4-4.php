function solution($A) {
    // Implement your solution here
    if(max($A)<=0) return 1;
    $size = count($A);
    $counter = 1;
    sort($A);
    for($i=0; $i<$size; $i++){
        if($counter == $A[$i]){
            $counter++;
        }
        if($counter < $A[$i]){
            return $counter;
        }
    }
    return $counter; 
}