<?php
require_once "Langth.php";

if(isset($_POST['btn'])){
    $ex = new Langth();
    $result = $ex ->wordLetterCount($_POST);

}


?>
<form  action="" method="post">
    <table>
        <tr>
            <td>Enter your string:</td>
            <td><input type="text" name="giving_string"></td>
        </tr>
        <tr>
            <td>Total number of word:</td>
            <td><input type="text" readonly value="<?php echo $result['stringWord'] ?>"></td>
        </tr> <tr>
            <td>Total number of letter:</td>
            <td><input type="text" readonly value="<?php echo $result['stringLength'] ?>"></td>

        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn"  style="margin-left: 35px; border-collapse: collapse" ></td>
        </tr>
    </table>
</form>
