function solution($A) {
    // Implement your solution here
    $size = count($A);
    $distinct = array();
    for($i=0; $i<$size; $i++){
        if( !in_array($A[$i], $distinct)){
            array_push($distinct, $A[$i]);
        }
    }
    return count($distinct);
}


function solution($A) {
    // Implement your solution here

    $distinct = array_unique($A);
    
    return count($distinct);
}