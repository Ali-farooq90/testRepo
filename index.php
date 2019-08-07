<html>
<head>
    <p> "Synchronization two Database"</p>
</head>
<body>
<meta charset="utf-8">
<?php
/*$host = "localhost";
$user = "Ali";
$password = "1234";
$db = "db1";
$db2 = "db2";
$connect = mysqli_connect("$host","$user","$password","$db");
if ($connect){
    print " تم الاتصال بقاعدة البيانات" ;
    echo"<br/>";
}
else {
    print "تحقق من اتصالك بالسيرفر";
}

//  Insert Data
$insert = "insert into users values(2,'Ali',121,1) ";
$q= mysqli_query ($connect,$insert);
if ($q){
    echo " Data inserted ";
    echo"<br/>";
}
else {
    echo "Error:  ";
    echo mysqli_error($connect);
    echo"<br/>";
}
    
    
    
// Check if synced row has value of 1 to insert it in the db2
$c= mysqli_query ($connect, "select synced from users where synced=1" );
while ($row = mysqli_fetch_assoc($c) ){
    echo " {$row ['synced']} <br> ";
    $connect2 = mysqli_connect("$host","$user","$password","$db2");
    
    
    
    
    $insert2 = $insert;
    $z= mysqli_query ($connect2,$insert2);
if ($z){
    echo " Data inserted in db2 ";
    echo"<br/>";
}
    else {
    echo "Error:  ";
    echo mysqli_error($connect2);
    echo"<br/>";
    }
}*/
?>
</body>
</html>