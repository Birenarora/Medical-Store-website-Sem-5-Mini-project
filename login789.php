<?php
	session_start();
    if(isset($_SESSION['username'])){
        header("location: http://localhost/InP/tp.html"); 
    }
    $username = $password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
      
        require "connectivity.php";
        
        $sql = "SELECT * from login1 where username ='" .$username. "' and password='".$password."'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if ($username == $row['username'] && $password == $row['password']){
            $_SESSION['username']= $username;
            echo "<script type='text/javascript'> window.alert('Login Successful');window.location.href='http://localhost/InP/tp.html';</script>";        
             
        }else{
            echo "<script type='text/javascript'> window.alert('Login UnSuccessful');window.location.href='http://localhost/InP/login123.html';</script>";
        }
        
        $conn->close();
    }
?>