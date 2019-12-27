<?php
require_once "Demo.php";
$result = '';
if(isset($_POST['btn'])){
    $ex = new Demo();
   $result = $ex->oddEvenCheck($_POST);

}

?>
<form  action="" method="post">
    <table>
        <tr>
            <td>Starting Number:</td>
            <td><input type="text" name="starting_number"> </td>
        </tr>
        <tr>
            <td>Ending Number:</td>
            <td><input type="text" name="ending_number"></td>
        </tr>
        <tr>

            <td>  <input type="radio" name="check" value="odd"></td >
            <td><input type="radio" name="check" value="even"> </td>

        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="check" ></td>
        </tr>
        <tr>
            <td>Result:</td>
            <td><textarea rows="6" readonly cols="25"><?php echo $result; ?></textarea></td>
        </tr>
    </table>
</form>
