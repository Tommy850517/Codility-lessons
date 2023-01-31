
function solution($A, $B, $K) {
    // Implement your solution here
    if($A > 2000000000 || $A < 0 || $B > 2000000000 || $B < 0) return -1;
    if($K > 2000000000 || $K < 1) return -1;
    if($A > $B) return -1;
    $lowerbound = (int)ceil($A/$K);
    $upperbound = (int)floor($B/$K);
    return $upperbound - $lowerbound + 1;
    
}