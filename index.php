<?php
include_once "connectdb.php";

$result = mysqli_query($con, "SELECT * FROM information ORDER BY studentId");
?>

<html>
<head>
    <title>Homepage</title>
</head>        
<body>
    <a href="add.html">Add New Data</a></br></br>

    <table width="80%" border=0>
        <tr bgcolor='#cccccc'>
            <td>First Name</td>
            <td>Sur Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Student ID</td>
            <td>Update</td>
        </tr>
        <?php
        while($res = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" .$res['firstName']. "</td>";
            echo "<td>" .$res['surName']. "</td>";
            echo "<td>" .$res['email']. "</td>";
            echo "<td>" .$res['phone']. "</td>";
            echo "<td>" .$res['studentId']. "</td>";

            echo "<td><a href=\"edit.php?id=$res[studentId]\">Edit</a> | 
            <a href=\"delete.php?id=$res[studentId]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td></tr>";
        }
        ?> 
    </table>
</body>       
</html>    