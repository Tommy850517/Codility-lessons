function solution($S) {
    $stack = array();
    $size = strlen($S);
    for($i=0; $i<$size; $i++){
        if($S[$i]=='(' || $S[$i]=='{' || $S[$i]=='['){
            array_push($stack, $S[$i]);
        }
        else if($S[$i]==')'){
            $tmp = array_pop($stack);
            if($tmp == '(') continue;
            else return 0;
        }
        else if($S[$i]=='}'){
            $tmp = array_pop($stack);
            if($tmp == '{') continue;
            else return 0;
        }
        else if($S[$i]==']'){
            $tmp = array_pop($stack);
            if($tmp == '[') continue;
            else return 0;
        }
    }
    if(empty($stack))   
        return 1;
    else    
        return 0;
}