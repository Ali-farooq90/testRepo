<?php
//Connection to database  ..
class Conndb1{
 public $c1host;
 public $c1name;
 public $c1password;
 public $c1db1;
   
    function db1() {
    $c1host= $_POST['c1host'];
    $c1name= $_POST['c1name'];
    $c1password= $_POST['c1password'];
    $c1db1= $_POST['c1db'];
  $co=mysqli_connect("$c1host","$c1name","$c1password","$c1db1");
        if ($co){
            echo "Connected";
        }else{
            echo "Not Connected";
        }
}
}
$use=new Conndb1();
$use->db1();

?>