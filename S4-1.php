function solution($X, $A) {
    // Implement your solution here
    $appear = array();
    
    //foreach($A as $time => $pos){
    
    for($j=0; $j<count($A); $j++){
        $appear[$A[$j]-1] = 1;
        if(array_sum($appear)==$X) return $j;
    }
    return -1;
}

function solution($X, $A) {
    // Implement your solution here
    asort($A);
    $count = 1;
    foreach($A as $time=>$pos){
        if($count == $pos){
            $count++;
        }
        if($pos > $count) return -1;
        

        if($pos==$X) return $time;
    }
    return -1;
}