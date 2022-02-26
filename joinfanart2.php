
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

            $sql_join = "insert into`join_fanart`(Fanart_UID , IDfanart)
            values ('$uid', '$fid')"; 
            $result = mysqli_query($con,$sql_join);
            // echo $uid;
            // echo $fid;
            //alert ("Done!");
            header("location: 22view.php");

        } 

    
    // $con = $this->connect();
    // if(isset($_GET['fanartid']) and isset($_GET['uid'])){
    //     $fid=$_GET['fanartid'];
    //     $uid=$_GET['uid'];

    //     $sql_ratco = "insert into`join_fanart`(Fanart_UID , IDfanart)
    //     values ('$projectqualityrating_in', '$status')"; 
    //     $result5 = mysqli_query($con,$sql_stuloca);

    //     header("location: 2view.php");
        
        
    // }   

   
    // if(isset($_GET['fanartid']) and isset($_GET['uid'])){
    //     $fid=$_GET['fanartid'];
    //     $uid=$_GET['uid'];

    //     $sql_ratco = "insert into`join_fanart`(Fanart_UID , IDfanart)
    //     values ('$projectqualityrating_in', '$status')"; 
    //     $result5 = mysqli_query($con,$sql_stuloca);

    //     header("location: 2view.php");
        
        
    // }   
    

?>