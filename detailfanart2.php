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

class Fanart extends dbh{

    public function getAllfanart(){
        $sql = "SELECT * FROM fanart_meeting where EID='2'";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0){
            while ($row = $result->fetch_assoc()){
                $data[] = $row;

            }
            return $data;
        }
    }

}

class getDetailFan extends Fanart{
    public function getFanID(){
        $datas = $this->getAllfanart();
        foreach ($datas as $data){
            return $data['IDfanart'];

        }
    }
    public function getNumofBooth(){
        $datas = $this->getAllfanart();
        foreach ($datas as $data){
            return $data['NumofBooth'];

        }
    }
    public function getNumofZone(){
        $datas = $this->getAllfanart();
        foreach ($datas as $data){
            return $data['NumofZone'];

        }
    }

}


class activity extends dbh{

    public function getAllactivity(){
        $sql = "SELECT * FROM activity where Event_ID='2'";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0){
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }

}
class Leader extends dbh{

    public function getAllLeader(){
        $sql = "SELECT * FROM leader where LID='2'";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0){
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }

}
class Member extends dbh{

    public function getLMember(){
        $sql = "SELECT * FROM member where NationnalID='4813399444778'";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0){
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }
    public function getGMember(){
        $sql = "SELECT * FROM gmember where NationnalID='1234567891234'";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0){
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }

}


class getDetailMember extends Member{
    public function getLUsername(){
        $datas = $this->getLMember();
        foreach ($datas as $data){
            return $data['Username'];
        }  
    }
    
    public function getGID(){
        $datas = $this->getGMember();
        foreach ($datas as $data){
            return $data['UID'];

        }
    }
    
}

class getDetailAc extends activity{
    public function getEventname(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['eventName'];
        }  
    }
   
    public function getartistName(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['artistName'];
        }   
    }
    public function geteventDate(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['eventDate'];
        }   
    }
    public function getTimeEvent(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['TimeEvent'];
        }
        
    }
    public function getplace(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['place'];
        }    
    }
    public function getDatesale(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['Datesale'];
        }    
    }
    public function getTimesale(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['Timesale'];
        }    
    }
    //image
    
    public function getdetail(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['detail'];
        }    
    }
    public function getpromotestatus(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['promotestatus'];
        }    
    }
    public function geteventType(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['eventType'];
        }    
    }
    public function getLID(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['LID'];
        }    
    }
    public function getImage(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return '<img src="data:image/png;base64,'. base64_encode($data['image']).'" >';
        }    
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<style>
       
       input{
           width: 40%;
           height: 5%;
           border: 1px;
           border-radius: 05px;
           padding: 8px 15px 8px 15px;
           margin: 10px 0px 15px 0px;
           box-shadow: 2px 2px 2px 2px ;
          
          
       }
       body{
       
           background: linear-gradient(
               180deg, rgba(109, 18, 157, 0.72)
                0%, rgba(255, 151, 135, 0.83) 100%);
           /* background-color: #f1e0ff ; */
       }
       button{
        position: relative;
           width: 20%;
           height: 20%;
           border: 1px;
           border-radius: 05px;
           padding: 8px 5px 8px 15px;
           margin: 10px 0px 15px 0px;
           box-shadow: 1px 1px 1px 1px gainsboro ;
           background-color: #00B934;
           margin-left :20px;

       }
        #b1 {

           margin-left :50px;
        
        } 
       h1 {
       color: white;
       }
     
       #detailcolor{
        position: relative;
           /* font-family: Roboto;
           font-style: normal; */
           font-weight: 500;
           font-size: 24px;
           line-height: 42px;
           color: white;
           text-shadow: 3px 4px 4px rgba(131, 131, 131, 0.25);
           

       }
     
       #box1{
        position: relative;
           
         
           color: white;
           width: 50%;
           height: 100%;
            padding: 30px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            border-radius: 20px;

           
       }
       
       img {
        position: relative;
        border-radius: 10%;
        }
        header {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        padding: 30px 100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 10000;
        }

        header .logo {
        color: #fff;
        font-weight: 700;
        text-decoration: none;
        font-size: 2em;
        text-transform: uppercase;
        letter-spacing: 2px;
        }

        header ul {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 150px;
        }

        header ul li {
        list-style: none;
        margin-left: 80px;
        }

        header ul li a {
        text-decoration: none;
        padding: 6px 15px;
        color: #fff;
        border-radius: 20px;
        }

        header ul li a:hover,
        header ul li a.active {
        background: #fff;
        color: #e45;
        }
        img#clouds {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        }
        section {
        position: relative;
        width: 100%;
        height: 100%;
        padding: 20px;
        } 
        

   
</style>
<head>
        <link rel="stylesheet" href="color.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <!-- Font Awesome CSS -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>FANCLUB</title>
    
    
</head>
<body>
    
   
    <header>

            <center><a href="#" class="logo">FANCLUB</a></center>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Artist</a></li>
                <li><a href="#">Event</a></li>
                <li><a href="#"  >Profile</a></li>
            </ul>
    </header>
    
   
    <br><br><br><br><br>
    <section> 
            <div>
                <img src="image/cloud.png" id="clouds">
            </div>   
    <div class="contianner text-center" id="detailcolor">
        
        <h1>
        <?php
            $activity = new getDetailAc();
            echo $activity->getEventname();
            $member = new getDetailMember();
            $fan = new getDetailFan();
        ?>
        </h1>
    </div>
    
    <div class="container text-center" id= "detailcolor">
        <?php echo $image = $activity->getImage();
               echo "<br>";
               echo "<br>";
        ?>
    
    <div class="container text-center" id="box1">
            <?php
              
               echo "ชื่อกิจกรรม:  ".$activity->getEventname()."<br>";

 
               echo "ผู้จัด:  ".$member->getLUsername()."\t";
       
               echo "ศิลปิน:  ".$activity->getartistName()."<br>";
       
               echo "วันที่เริ่มงาน:  ".$activity->geteventDate()."\t";
  
               echo "เวลาเริ่มงาน:  ".$activity->getTimeEvent()."<br>"; 

               
            
               echo "วันเปิดจองบูธ:  ".$activity->getDatesale()."\t";
        
               echo "เวลาเปิดจองบูธ:  ".$activity->getTimesale()."<br>";

               echo "สถานที่:  ".$activity->getplace()."<br>";
 
               echo "รายเอียดอื่นๆ:  ".$activity->getdetail()."<br>";
          
               echo "ประเภทกิจกรรม:  ".$activity->geteventType()."<br>";
           
               echo "จำนวนบูธ:  ".$fan->getNumofBooth()."\t";
        
               echo "จำนวนโซนบูธ:  ".$fan->getNumofZone();
   
            ?>
    </div>
    </div>
    </div>
    
    <div class="contianner text-center" class="d-grid gap-2" >
    <br>
        
 
    <?php   

    $fid = new getDetailFan();
    $uid = new getDetailMember();    
   // $join = new JoinFan();    
    echo '<button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#exampleModal"><a class="text-light">ยกเลิกการเข้าร่วมกิจกรรม</a></button>
                                    
                                    <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">คุณต้องการยกเลิกการเข้าร่วมกิจกรรมนี้ใช่หรือไม่?</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h7 >กิจกรรม: '.$activity->getEventname().'</h7>
                                                    </div>
                                                    <div class="modal-footer">
                                                        
                                                        <button type="button" class="btn btn-danger"><a href="/fanclub_activity/canceljoin.php?fanartid='.$fid->getFanID().'&uid='.$uid->getGID().'" class="text-light">ยืนยัน</a></button>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  ' ;
        ?>    
        
        
        <button  type="button" class="btn btn-warning" id = "b1"><a href="" class="text-light">ดูรายละเอียดบูธ</a></button>
        
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <br> <br>
     </section> 
</body>
</html>
