<?php
require_once "Demo.php";
$first_number='';
$second_num='';
$third_num='';
$fourth_num='';
$fifth_num='';
$result='';
if (isset($_POST['btn'])){
    $first_number = $_POST['first_num'];
    $second_num = $_POST['second_num'];
    $third_num = $_POST['third_num'];
    $fourth_num = $_POST['fourth_num'];
    $fifth_num = $_POST['fifth_num'];

    $userInput = new Demo();
    $result= $userInput ->UserInput($first_number,$second_num,$third_num,$fourth_num,$fifth_num);
}


?>
<form action="" method="post">
    <table>
        <tr>
            <td>Enter your first number:</td>
            <td><input type="text" name="first_num"> </td>
        </tr>
        <tr>
            <td>Enter your second number:</td>
            <td><input type="text" name="second_num"> </td>
        </tr>
        <tr>
            <td>Enter your third number:</td>
            <td><input type="text" name="third_num"> </td>
        </tr>
        <tr>
            <td>Enter your fourth number:</td>
            <td><input type="text" name="fourth_num"> </td>
        </tr>
        <tr>
            <td>Enter your fifth number:</td>
            <td><input type="text" name="fifth_num"> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="submit"> </td>
        </tr>
    </table>

</form>
<hr>
<hr>
<table border="1">
    <tr>
        <th>First Number</th>
        <th>Second Number</th>
        <th>Third Number</th>
        <th>Fourth Number</th>
        <th>Fifth Number</th>
        <th>total  Number</th>

    </tr>
    <tr>
        <td><?php echo $first_number ?></td>
        <td><?php echo $second_num ?></td>
        <td><?php echo $third_num ?></td>
        <td><?php echo $fourth_num ?></td>
        <td><?php echo $fifth_num ?></td>
        <td><?php echo $result ?></td>


    </tr>

</table>