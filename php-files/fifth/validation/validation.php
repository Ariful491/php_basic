<?php
$nameError='';
$emailError='';
$genderError='';
$phoneError='';
if(isset($_POST['btn'])){
    if (empty($_POST['name'])){
        $nameError = "* Name is required";
    }else{

        if(!preg_match("/^[a-zA-Z ]+$/",$_POST['name'])){
            $nameError ="* only latter are allowed";
        }
    }
    if (empty($_POST['email'])){
        $emailError = "* Email is required";
    }else{

        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST['email'])){
            $emailError ="* email must www . @ allowed";
        }
    }
    if (empty($_POST['gender'])){
        $genderError = "* Gender is required";
    }

    if (empty($_POST['phone'])){
        $phoneError = "* Phone Number is required";
    }else{

        if(!preg_match("/^(?:\+88|01)?(?:\d{11}|\d{13})$/",$_POST['phone'])){
            $phoneError ="* Only number with +880";
        }
    }

}


?>
<form action="" method="post">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name"> </td>
            <td><span style="color:red"> <?php echo $nameError; ?><span> </td>
        </tr>

        <tr>
            <td>Email:</td>
            <td><input type="email" name="email"> </td>
            <td><span style="color:red"><?php echo $emailError; ?></span></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><input type="text" name="phone"> </td>
            <td><span style="color:red" ><?php echo $phoneError; ?></span></td>
        </tr>

        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            </td>
            <td><span style="color:red"><?php echo $genderError; ?></span></td>
        </tr>
        <tr>
            <td></td>
            <td><input  type="submit" name="btn" value="submit"> </td>

        </tr>
    </table>
</form>
