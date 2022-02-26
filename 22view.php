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
            return $data['Username']."<br>";
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
            return $data['artistName']."<br>";
        }   
    }
    public function geteventDate(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['eventDate']."<br>";
        }   
    }
    public function getTimeEvent(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['TimeEvent']."<br>";
        }
        
    }
    public function getplace(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['place']."<br>";
        }    
    }
    public function getDatesale(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['Datesale']."<br>";
        }    
    }
    public function getTimesale(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['Timesale']."<br>";
        }    
    }
    //image
    
    public function getdetail(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['detail']."<br>";
        }    
    }
    public function getpromotestatus(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['promotestatus']."<br>";
        }    
    }
    public function geteventType(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['eventType']."<br>";
        }    
    }
    public function getLID(){
        $datas = $this->getAllactivity();
        foreach ($datas as $data){
            return $data['LID']."<br>";
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
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>FANCLUB</title>
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
                width: 20%;
                height: 20%;
                border: 1px;
                border-radius: 05px;
                padding: 8px 5px 8px 15px;
                margin: 10px 0px 15px 0px;
                box-shadow: 1px 1px 1px 1px gainsboro ;
                background-color: #00B934;
                margin-left :20px;
                color: black;

            }
            h1 {
            color: white;
            }
            #detailcolor{
                font-family: Roboto;
                font-style: normal;
                font-weight: 300;
                font-size: 24px;
                line-height: 42px;
                
                color: #FFFFFF;

                text-shadow: 3px 4px 4px rgba(131, 131, 131, 0.25);

            }
            #navbarDarkDropdownMenuLink{
                margin-left :100px;

                font-family: Roboto;
                font-style: normal;
                font-weight: 900;
                font-size: 24px;
                

                color: #000000;

                text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            }
        
    </style>

</head>
<body>
    <center><h1>FANCLUB ACTIVITY</h1></center>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #C4C4C4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDarkDropdownMenuLink">หน้าหลัก</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ศิลปิน
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink"id="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="">comimg soon</a></li>
                            <li><a class="dropdown-item" href="">comimg soon</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        กิจกรรม
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink"id="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="">comimg soon</a></li>
                            <li><a class="dropdown-item" href="">comimg soon</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        เกี่ยวกับเรา
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink"id="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">เกี่ยวกับเรา</a></li>
                            <li><a class="dropdown-item" href="#">ติดต่อเรา</a></li>
                        </ul>
                    </li>
                    
                    
                   
                   
                    
                    <a class="navbar-brand text-light"> </a>
                    <a class="navbar-brand text-light"> </a>
                    <a class="navbar-brand text-light"> </a>
                    <a class="navbar-brand text-light"> </a>
                    
                    <a class="navbar-brand text-light"> </a>
                    
                   
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ยินดีต้อนรับ somsos
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink"id="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="">ข้อมูลส่วนตัว</a></li>
                            <li><a class="dropdown-item" href="">คำสั่งซื้อ</a></li>
                            <li><a class="dropdown-item" href="">ตารางกิจกรรม</a></li>
                            <li><a class="dropdown-item" href="">การติดตาม</a></li>
                            <li><a class="dropdown-item" href="">ออกจากระบบ</a></li>
                        </ul>
                    </li>
                    
                    
                </ul>
            </div>
        </div>
    </nav>
    <br><br>

    <div class="contianner text-center">
        <h1>
        <?php
            $activity = new getDetailAc();
            echo $activity->getEventname();
            $member = new getDetailMember();
        ?>
        </h1>
    </div>
    <div id= "detailcolor">
    <div class="container my-3">
    <?php
          
               echo $image = $activity->getImage();
               echo "<br>";
               echo "<br>";
               echo "ผู้จัด:  ";
               echo $leader = $member->getLUsername();
               echo "ชื่อกิจกรรม:  ";
               echo $eventname = $activity->getEventname();
               echo "<br>";
               echo "วันที่เริ่มงาน:  ";
               echo $eventdate = $activity->geteventDate();
               echo "เวลาเริ่มงาน:  ";
               echo $timeevent = $activity->getTimeEvent();
               echo "สถานที่:  ";
               echo $place = $activity->getplace();
               echo "วันขาย:  ";
               echo $datasale = $activity->getDatesale();
               echo "เวลาขาย:  ";
               echo $timesale = $activity->getTimesale();
               echo "รายเอียดอื่นๆ:  ";
               echo $detail = $activity->getdetail();
               echo "ประเภทกิจกรรม:  ";
               echo $eventT = $activity->geteventType();   
   
            ?>
        
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
                                                        
                                                        <button type="button" class="btn btn-primary"><a href="/fanclub_activity/canceljoin.php?fanartid='.$fid->getFanID().'&uid='.$uid->getGID().'" class="text-light">ยืนยัน</a></button>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  ' ;
        ?>    
        
        
        <button  type="button" class="btn btn-warning" ><a href="" class="text-light">ดูรายละเอียดบูธ</a></button>
        
        <button type="button"><a href="" class="text-light">ย้อนกลับ</a></button>

        
        <button  type="button" class="btn btn-primary" ><a href="" class="text-light">กลับสู่หน้าหลัก</a></button>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
</body>
</html>
