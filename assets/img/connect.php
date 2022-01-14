<?php
    
    $TeamName = $_POST['TeamName'];
    $email = $_POST['email'];
    $place = $_POST['place'];
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $Address = $_POST['Address'];

    //database connection

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('connecton failed:'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registraction(TeamName,email,place,phone1,phone2,Address)
        values(?,?,?,?,?,?)");
        $stmt->blind_param("sssiis",$TeamName,$email,$place,$phone1,$phone2,$Address);
        $stmt->execute();
        echo"regestration sucessfully...";
        $stmt->close();
        $conn->close();

    }



?>