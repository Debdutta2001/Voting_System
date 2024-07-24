<?php
$connect=mysqli_connect("localhost" ,"root", "", "votingsystem") or die("connection falied");

    
    $query="select * from `admin`  ";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($result) {
        while($row=mysqli_fetch_assoc($result)) {
    $username=$row['admin_name'];
    $password=$row['password'];
   

        }
    }

