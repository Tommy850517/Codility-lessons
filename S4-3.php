function solution($N, $A) {
    // Implement your solution here
    $result = array();
    for($i=0; $i<$N; $i++){
        $result[$i] = 0;
    }
    for($i=0; $i<count($A); $i++){
        if($A[$i]<=$N) {
            $result[ $A[$i]-1 ]++;
        }
        if($A[$i]>$N) {
            $result = max_counter($result);
        }
    }
    return $result;
}


function max_counter($tmp){
    $max = max($tmp);
    for($j=0; $j<count($tmp); $j++){
        $tmp[$j] = $max;
    }
    return $tmp;
}