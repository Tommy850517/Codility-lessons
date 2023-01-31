function solution($H) {
    // Implement your solution here
    $size = count($H);
    $stk = array();
    $ans = 0;
    array_push($stk, $H[0]);

    for($i=1; $i<$size; $i++){
        if(count($stk)==0){
            array_push($stk, $H[$i]);
        }else{
            if(in_array($H[$i], $stk)){
                t:
                $top = $stk[count($stk)-1];
                if($top!=$H[$i]){
                    array_pop($stk);
                    $ans++;
                    goto t;
                }else if($top==$H[$i]){
                    array_pop($stk);
                    $ans++;
                }
            }else{
                array_push($stk, $H[$i]);
            }
        }
    }
    return $ans+count($stk);
}