<?php
require_once "Demo.php";
$result='';
if (isset($_POST['operator'])){
    $calculator= new Demo();
    $result = $calculator->calculator($_POST['operator'],$_POST['first_number'],$_POST['second_number']);
}

?>
<form action="" method="post" style="background-color: #00b9eb">
    <table>
        <tr>
            <td>Enter Your first Number:</td>
            <td><input type="text" name="first_number"></td>
        </tr>
        <tr>
            <td>Enter Your second Number:</td>
            <td><input type="text" name="second_number"></td>
        </tr>
        <tr>
            <td>Result:</td>
            <td><input type="text" readonly="readonly" value="<?php echo $result;?>"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="operator" value="+">
                <input type="submit" name="operator" value="-">
                <input type="submit" name="operator" value="*">
                <input type="submit" name="operator" value="/">
            </td>
        </tr>
    </table>
</form>
