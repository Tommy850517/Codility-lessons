function solution($A) {
    // Implement your solution here
    $len = count($A);
    $sum = array();
    $sum[0] = $A[0];
    for($i=1; $i<$len; $i++){
        $sum[$i] = $sum[$i-1]+$A[$i];
    }
    print_r($sum);
    $min = $sum[1]/2;
    $result = 0;
    for($j=2; $j<count($sum); $j++){
        $tmp = $sum[$j];
        $div = $tmp / $j+1;
        if($div < $min){
            $min = $div;
            $result = 0;
        }
        echo $tmp;
        echo '<br>';
        for($k=0; $k<$j-1; $k++){
            $tmp = $tmp - $A[$k];
            echo $tmp;
            echo '<br>';
            $div = $tmp / ($j-$k);
            if($div < $min){
                $min = $div;
                $result = $k-1;
            }
        }
    }
    return $result;
}

function solution($A) {
    // Implement your solution here
    $len = count($A);
    $sum = array();
    $sum[0] = $A[0];
    for($i=1; $i<$len; $i++){
        $sum[$i] = $sum[$i-1]+$A[$i];
    }

    $min = $sum[1]/2;
    $firstptr = 0;
    for($j=2; $j<count($sum); $j++){
        if($sum[$j] / ($j+1) < $min){
            $min = $sum[$j] / ($j+1);
            $firstptr = 0;
        }
    }

    for($j=2; $j<count($sum); $j++){
        $k = 0;
        while($k < $j-1){
            $div = ($sum[$j]-$sum[$k]) / ($j-$k);
            if($div < $min){
                $min = $div;
                $firstptr= $k+1;
            }
            $k++;
        }
    }
    return $firstptr;
}