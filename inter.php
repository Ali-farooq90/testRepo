<?php
$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$synced = "0";
$conn1= mysqli_connect("localhost","Ali","1234","db1");
if ($conn1) {
    echo "Connected to the database";
    
    $ins = "insert into users values('$id','$name','$password','$synced')";
$q= mysqli_query($conn1,$ins);
    if ($q){
        echo " Data Inserted";
    }
    else {
        echo mysqli_error($conn1);
    }
}

else{
    echo "Not connected to the database";
}