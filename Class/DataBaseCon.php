
<?php 
class DataBase
{
    private $databasename;
    private $user;
    private $password;
    private $server;
    public $conn;
    public function Connect($server,$databasename,$user,$password)
    {
        //echo $databasename.";".$user.";".$password;
        $this->server = $server;
        $this->conn = mysql_connect($server, $user,$password);
        if(!$this->conn)
        {
            echo "数据库连接出错".  mysql_error();
            return NULL;
        }
        else
        {
            
            mysql_select_db("bbs_database",$this->conn) or die ("can't select database");
            //echo "OK";
            //$this->conn = $conn;
        }
       // $conn;
        
    }
    public function close()
    {
        mysql_close();
    }
    
}
//$object = new DataBase();
//$object->Connect("localhost","bbs_database", "root", "");

/*
if($conn)
{
    echo "objec ";
}
*/

?>
