<?php
//echo "<pre>";
//print_r($_POST)
//
//$firstName= $_POST['first_name'];
//$lastName= $_POST['last_name'];
//
//$fullName=$firstName.' '.$lastName;
//return $fullName;


 if(isset($_POST['btn'])){
     $firstName= $_POST['first_name'];
     $lastName= $_POST['last_name'];

     $fullName=$firstName.' '.$lastName;
    echo $fullName;
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
            <td></td>
        </tr>
    </table>
</form>
