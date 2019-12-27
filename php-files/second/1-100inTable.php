<?php
//echo"<table border='1'>";
//
//for($x=1; $x<=100;$x++){
//    if($x%10 ==1){
//        echo "<tr>";
//    }
//  echo "<td>$x</td>";
//}
//echo "</table>";
//
$k=0;
echo "<table border='1'>";
for($i=1 ; $i<=10;$i++){
    echo"<tr>";
    for ($j=1;$j<=10;$j++){
        ++$k;
        echo"<td>$k</td>";
    }
    echo"</tr>";
}
echo "</table>";