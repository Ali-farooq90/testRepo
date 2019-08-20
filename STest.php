<?php
// This is databases sychnorization file..
class sych
{
public function dbGetAll($what = "TABLES", $table_name = null, $disconnect = true)
{
        $what = strtoupper($what);
        if($what == "TABLES"){
            $c = "TABLE_NAME";
            $sql_query_str = "SELECT $c FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA='$this->DB_NAME'";
        }
        elseif($what == "COLUMNS")
        {
            $c = "COLUMN_NAME";
            $sql_query_str = "SELECT $c FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='$this->DB_NAME' AND TABLE_NAME='$table_name'";
        }
    
        $output = array();
        $this->dbConnect();
        $query = $this->DB_CONN->query($sql_query_str);
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            array_push($output, $row[$c]);
        }
        if($disconnect)
            $this->dbDisconnect();
        return (!count($output)) ? null : $output;
    
}
    
public function dbDisconnect()
{
        $this->DB_CONN = null;
    }

public function dbConnect()
{
        if(!$this->DB_CONN){
            try{
                $dsn = "$this->DB_TYPE:Server=$this->DB_HOSTNAME;Database=$this->DB_NAME";
                $this->DB_CONN = new PDO($dsn, $this->DB_USERNAME, $this->DB_PASSWORD);
                $this->DB_CONN->query("USE $this->DB_NAME");
                $this->DB_CONN->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return true;
            }
            catch(PDOException $e)
            {
                echo "Error connecting to database! <br>Error message: ".$e->getMessage();
                return false;
            }
        }else
            return true;
    }

private $DB_CONN = null;

    }
$SS=new sych();
$SS->dbGetAll("TABLES");
?>