function solution($A) {
    // Implement your solution here
    $count = array_count_values($A);
    // $size = count($A);
    // $list = array();
    // $list_count = array();
    // for($i=0; $i<$size; $i++){
    //     if(in_array($A[$i],$list)){
    //         $index = array_search($A[$i], $list);
    //         array_splice($list, $index, 1);
    //     }
    //     else{
    //         array_push($list, $A[$i]);
    //     }
    // }
    foreach($count as $k => $v) {
        if($v % 2 == 1) return $k;
    }
    // return $list[0];
}