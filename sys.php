<?php

// Connection for Synchronization..
$conn= mysqli_connect("localhost","Ali","1234","db2");
if ($conn) {
    echo "Synchronization";

// Copy the data to db2..
    
$copy = ("insert into db2.users select * from db1.users where synced select synced from db1.users where synced = 0");
    if (!mysqli_query($conn,$copy))
    {
        echo "Nooooo Data inserted into db2";
    
    }
    else {
        echo " Data copy into db2";
    }
}
else{
    echo "Not connected to the database";
}

?>







/*$conn= mysqli_connect("localhost","Ali","1234","db2");
if ($conn) {
    echo "Synchronization";
$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$qu= ("select * from users where synced =0 ");
$quu= mysqli_query($conn,$qu);
    if ($quu){
$ins2 = "insert into users values('$id','$name','$password','$synced')";
$q= mysqli_query($conn,$ins2);

    if ($q){
        echo "Data Inserted";
    }
    else {
        echo mysqli_error($conn);
    }
    
}
}
else{
    echo "Not connected to the database";
}
*/
?>