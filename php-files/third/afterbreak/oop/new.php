<?php
require_once 'Demo.php';

if(isset($_POST['btn'])){
    $demo = new Demo();
   $request = $demo->fullName($_POST['first_name'],$_POST['last_name']);//parameter
}

?>

<form action="" method="post">
    <table>
        <tr>
            <td>First Name : </td>
            <td><input type="text" name="first_name"> </td>
        </tr>
        <tr>
            <td>Last Name : </td>
            <td><input type="text" name="last_name"> </td>
        </tr>
        <tr>
            <td> </td>
            <td><input type="submit" name="btn"> </td>
        </tr>
        <tr>
            <td>Full Name: </td>
            <td><?php echo $request ?></td>
        </tr>
    </table>
</form>
