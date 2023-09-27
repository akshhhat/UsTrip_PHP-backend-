<?php

if(isset ($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con= mysqli_connect($server , $username , $password);


    if (!$con){
        die ("Connecyion to this database falied fue to error" . mysqli_connect());
    }
    echo "Successfull Connection to the Database";


$name=$_POST['name'];
$age=$_POST ['age'];
$email=$_POST ['email'];
$phone=$_POST ['phone'];
$gender=$_POST ['gender'];
$description=$_POST ['description'];


$sql= "INSERT INTO `trip` . `trip` ( `name`, `age`, `email`, `phone no`, `gender`, `description`, `date`) VALUES ( '$name', '$age', '$email', '$phone', '$gender', '$description', current_timestamp());";

if ($con-> query($sql)== true)
{
    echo "Succesfully Inserted";
}
else {
    echo "Error : $sql <br> $con->error";
}

$con->close();
}



?>