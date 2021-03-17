<html>
<head>
    <title>Add Data</title>
</head>
<body>
<?php
    include_once "connectdb.php";
    if(isset($_POST['Submit'])){
        $fname = $_POST['fname'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sid = $_POST['sid'];


            $insert = "INSERT INTO information(firstName, surName, email, phone, studentId) VALUES('$fname', '$surname', '$email', '$phone', '$sid')";
            $result = mysqli_query($con, $insert);

            header("Location: index.php");
            
    }
?>
</body>
</html>