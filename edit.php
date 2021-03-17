<?php
include_once "connectdb.php";

if(isset($_POST['Submit'])){
    $fname = $_POST['fname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sid = $_POST['sid'];

    if(empty($fname) || empty($surname) || empty($email) || empty($phone) || empty($sid)){
        if(empty($fname)){
            echo "<font color='red'>First Name field is empty.</font></br>";
        }

        if(empty($surname)){
            echo "<font color='red'>Sur Name field is empty.</font></br>";
        }

        if(empty($email)){
            echo "<font color='red'>Email field is empty.</font></br>";
        }

        if(empty($phone)){
            echo "<font color='red'>Phone field is empty.</font></br>";
        }

        if(empty($sid)){
            echo "<font color='red'>Student ID field is empty.</font></br>";
        }

    }else{
        $result = mysqli_query($con, "UPDATE information SET firstName='$fname', surName='$surname', email='$email', phone='$phone', studentId='$sid' WHERE studentId='$sid'" );
        header("Location: index.php");
    }
}
?>


<?php

$id = $_GET['id'];

$result = mysqli_query($con, "SELECT * FROM information WHERE studentId = $id");

while($res = mysqli_fetch_array($result)){
    $firstName = $res['firstName'];
    $surName = $res['surName'];
    $email = $res['email'];
    $phone = $res['phone'];
    $sid = $res['studentId'];
}
?>
<html>
<head>
    <title>Updatepage</title>
</head>        
<body>
    <a href="index.php">Home</a>
</br></br>

<form action="edit.php" method="POST" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>First Name: </td>
                <td><input type="text" name="fname" value="<?php echo $firstName; ?>" /></td>
            </tr>
            <tr>
                <td>Sur Name: </td>
                <td><input type="text" name="surname" value="<?php echo $surName; ?>" /></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="email" name="email" value="<?php echo $email; ?>"/></td>
            </tr>
            <tr>
                <td>Phone: </td>
                <td><input type="text" name="phone" value="<?php echo $phone; ?>"/></td>
            </tr>
            <tr>
                <td>Student ID: </td>
                <td><input type="text" name="sid" value="<?php echo $sid; ?>" /></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $sid; ?>" /></td>
                <td><input type="submit" name="Submit" value="Update" /></td>
            </tr>
        </table>
    </form>
</body>    
</html>