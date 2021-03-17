<?php

class dbConnect
{
    public function Connection(){
        $con = mysqli_connect("localhost", "root", "", "test");

        if(mysqli_connect_errno())
        {
            echo "Try Again: " . mysqli_connect_error();
        }
        else
        {
            echo "Success";
        }
    }
}

$connect = new dbConnect;

$connect->Connection();

?>