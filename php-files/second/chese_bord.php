<table width="400px"  border="1">
    <?php for ($i=1 ; $i<=10; $i++){
        echo"<tr>";
        for($j=1; $j<=10;$j++){
            $k  =  $j+$i;
            if($k%2==0){
                echo "<td bgcolor='#87ceeb' height='50px'></td>";
            }else{
                echo "<td bgcolor='yellow' height='50px'></td>";
            }
        }
    }?>
</table>