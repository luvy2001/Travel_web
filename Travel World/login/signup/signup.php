<?php

    $connection = mysqli_connect('localhost','root','','log');

    if(isset($_POST['send'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $pass = $_POST['pass'];
        $gender = $_POST['gender'];


        $request = "insert into registration(name, lname, email, phone, address, pass, gender) values 
        ('$fname','$lname','$email','$phone','$address','$pass','$gender')";

        mysqli_query($connection, $request);

        header('location:sign.html');
    }else{
        echo 'something went wrong try again';
    }
?>