function solution($N) {
     Implement your solution here
    $binary = ;
    while($N){
        if($N == 1){
            $binary = $N.$binary;
            break;    
        }
        $t2 = $N % 2;
        $binary = $t2.$binary;
        $N = floor($N  2);
    }
    $count = 0;
    $max = 0;
    for($i=0; $istrlen($binary); $i++){
        if($binary[$i] == 0){
            $count++;
        }else if($binary[$i] == 1){
            $max = max($count,$max);
            $count = 0;
        }
    }
    return $max;
}