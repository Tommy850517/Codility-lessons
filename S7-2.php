function solution($A, $B) {
    // Implement your solution here
    $size = count($A);
    $stk = array();
    array_push($stk, 0);
    for($i=1; $i<$size; $i++){
        if($B[$i] == 0){
            
            $top_ele = $stk[count($stk)-1];
            if($B[$top_ele] == 0){
                array_push($stk, $i);
            }
            else if($B[$top_ele] == 1){
                t:
                    if($A[$top_ele] < $A[$i]){
                        array_pop($stk);
                        if( count($stk)>0 ){
                            $top_ele = $stk[count($stk)-1];
                            if($B[$top_ele] == 1){
                                goto t;
                            }else{
                                array_push($stk, $i);
                            }   
                        }
                        else{
                            array_push($stk, $i);
                        }  
                    }
            }
        }
        else if($B[$i] == 1){
            array_push($stk, $i);
        }
    }
    return count($stk);
}