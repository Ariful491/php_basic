<?php
$total='';

if (isset($_POST['btn'])){
    $firstNumber = $_POST['s_num'];
    $lastNumber = $_POST['l_num'];
    if(is_numeric($firstNumber)&& is_numeric($lastNumber)){
        for ($i = $firstNumber; $i<=$lastNumber; $i++){
           $total .= $i.' ';

        }

    }

}



?>

<form action="" method="post" style="background-color: yellowgreen;
margin:0 500px; padding: 0 0">
    <table >
        <tr>
            <td>Enter first num:</td>
            <td><input type="text" name="s_num"></td>
        </tr>
        <tr>
            <td>Enter last num:</td>
            <td><input type="text" name="l_num"></td>
        </tr>
        <tr>
            <td>result:</td>
            <td><input type="text" readonly="readonly" value="<?php echo $total; ?>" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="all digit"> </td>
        </tr>
    </table>
</form>