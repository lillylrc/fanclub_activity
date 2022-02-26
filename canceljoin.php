
<?php


class dbh{
    private $servername;
    private $username;
    private $password;
    private $db;

    public function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->db = "fanclub_activity";

        $conn = new mysqli($this->servername, $this->username,
                            $this->password, $this->db);
        return $conn;

    }

}
        $join = new dbh();
        $con = $join->connect();
        if(isset($_GET['fanartid']) and isset($_GET['uid'])){
            $fid=$_GET['fanartid'];
            $uid=$_GET['uid'];
            $sql_cancel = "delete from `join_fanart` where Fanart_UID=$uid ";
            
            $result = mysqli_query($con,$sql_cancel);
            // echo $uid;
            // echo $fid;
            header("location: 2view.php");

        } 

?>