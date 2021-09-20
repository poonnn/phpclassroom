<?php
$score = $_GET['data1'];

if( $score >= 80 ){
     echo "คุณได้เกรด 4";
}else if( $score >= 75 && $score < 80 ){
     echo "คุณได้เกรด 3.5";
}else if( $score >= 70 && $score < 75 ){
     echo "คุณได้เกรด 3";
}else if( $score >= 65 && $score < 70 ){
     echo "คุณได้เกรด 2.5";
}else if( $score >= 60 && $score < 70 ){
     echo "คุณได้เกรด 2";
}else if( $score >= 55 && $score < 60 ){
     echo "คุณได้เกรด 1.5";
}else if( $score >= 50 && $score < 60 ){
     echo "คุณได้เกรด 1";
}else{
     echo "สอบตก";
}
?>
