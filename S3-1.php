function solution($X, $Y, $D) {
    if($X==$Y) return 0;
    $count = 0;
    while($X < $Y){
        $X = $X + $D;
        $count += 1;
        if($X >= $Y) return $count;
    }
}



function solution($X, $Y, $D) {
    if($X==$Y) return 0;
    $distance = $Y - $X;
    if($distance % $D != 0){
        return (int)ceil($distance / $D);
    }else if($distance % $D == 0){
        return (int)floor($distance / $D);
    }
    
}