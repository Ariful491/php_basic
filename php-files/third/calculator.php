<?php
$total='';
if (isset($_POST['operation'])){

      $first = $_POST['first_num'];
      $last = $_POST['last_num'];
      $operation = $_POST['operation'];
    if(is_numeric($first) &&  is_numeric($last)){
        switch ($operation){
            case'+':
                $total = $first + $last;
                break;

            case '-':
                $total = $first - $last;
                break;
            case '*':
                $total = $first * $last;
                break;
            case '/':
                $total = $first / $last;
                break;
            default:
                $total = "this is not num";
                break;

        }
    }

}

?>
<form action="" method="post" style="background-color: yellowgreen;

 margin: 400px;">
    <h1 style="text-align: center;color: #0f6848" >This is Our Calculator</h1>
    <table>
        <tr>
            <td>Enter your first number:</td>
            <td><input type="text" name="first_num" ></td>
        </tr>

        <tr>
            <td>Enter your last number:</td>
            <td><input type="text" name="last_num" ></td>
        </tr>
        <tr>
            <td>Result:</td>
            <td><?php echo $total?></td>
        </tr>

        <tr>
            <td></td>

            <td>
                <input type="submit" name="operation"  value="+">
                <input type="submit" name="operation"  value="-">
                <input type="submit" name="operation"  value="*">
                <input type="submit" name="operation"  value="/">
            </td>
        </tr>

    </table>
</form>
