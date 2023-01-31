function solution($S, $P, $Q) {
    // Implement your solution here
    $size = count($P);
    $result = array();
    for($i=0; $i<$size; $i++){
        $min = 5;
        for($j=$P[$i]; $j<=$Q[$i]; $j++){
            switch ($S[$j]){
                case 'A':
                    if($min > 1) $min = 1;
                    break;
                case 'C':
                    if($min > 2) $min = 2;
                    break;
                case 'G':
                    if($min > 3) $min = 3;
                    break;
                case 'T':
                    if($min > 4) $min = 4;
                    break;
            }
            $result[$i] = $min;
        }

    }
    return $result;

}