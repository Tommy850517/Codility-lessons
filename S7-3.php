function solution($S) {
    // Implement your solution here
    $size = strlen($S);
    $stk = array();
    for($i=0; $i<$size; $i++){
        if($S[$i] == '('){
            array_push($stk,'(');
        }
        if($S[$i] == ')'){
            if(count($stk)>0){
                $top  = $stk[count($stk)-1];
                array_pop($stk);
                if($top != '(') 
                    return 0;
            }
            else{
                return 0;
            }
        }
    }
    if(count($stk) != 0){
        return 0;
    }
    else{
        return 1;
    }
}