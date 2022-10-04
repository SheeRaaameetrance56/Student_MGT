<?php
    $connection = mysqli_connect("localhost","root","","student_info");

    if(!$connection){
        echo'<script>alert("Not Connected")</script>';
    }
    else{
        echo'<script>alert("Connected - ")</script>';

        $sql = "INSERT INTO student_1(st_name,st_dob,st_gender,st_address,st_tele)
        VALUES (
            '$_POST[fullName]',
            '$_POST[dob]',
            '$_POST[genderM]',
            '$_POST[address]',
            '$_POST[mobile]'
        )";
    }

    if (!mysqli_query($connection, $sql)){
        die('Error'.mysql_error());
    }
    else{
        echo'<script>alert("Data recorded")</script>';
    }

    mysqli_close($connection);
    readfile("index.html");

?>