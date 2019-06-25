<?php
class Database{
    private $connection;

    public function connect_db(){
        $this->connection = mysqli_connect('localhost', 'root', '', 'resume_site');
            if(mysqli_connect_error()){
                die("Database Connection Failed" . mysqli_connect_error());
            } 
//        else {
//                echo "<script>alert('There are no fields to generate a report');</script>";
//            }
    }
    public function login($password,$profile){
        //sql query for fetch data from table
        $sql = "SELECT * FROM tbl_admin WHERE userName = 'prashantradadiya7@gmail.com' AND password = '".$password."'";
        $res = mysqli_query($this->connection, $sql);
        $row = mysqli_fetch_assoc($res);
        $fullname = $row['adminName'];
        $profilename = $profile;

        if($res-> num_rows > 0){
            //session start here
            session_start();
            
            //session start with email
            $_SESSION['userName'] = $userName;
            $_SESSION['fullname'] = $fullname;
            $_SESSION['profile'] = $profilename;
            // echo $fullname;
            // exit;
            // redirect the page if condition true
            header('location:index.php');
        } else {
            echo 'Email Or Password Is Wrong!!';
        }
    }
    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        header("Location: login.php",TRUE,302); 
        die();
    }
    public function createAbout($myName,$myDesc){
        // echo "INSERT INTO tbl_about_me(myName,aboutDesc) VALUES('$myName','$myDesc')";
        // exit;
        $sql = "INSERT INTO tbl_about_me(myName,aboutDesc) VALUES('$myName','$myDesc')";
        $res = mysqli_query($this->connection,$sql);
        return $res;
    }
    public function readAbout($id=null){
        $sql = "SELECT * FROM tbl_about_me";
        if($id){ $sql .= " WHERE id=$id";}
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
    public function updateAbout($myName,$myDesc,$id){
        $sql = "UPDATE tbl_about_me SET myName='$myName', aboutDesc= '$myDesc' WHERE id='$id'";
        $res = mysqli_query($this->connection,$sql);
        return $res;
    }
    public function deleteAbout($id){
        $sql = "DELETE FROM tbl_about_me WHERE id=$id";
        $res = mysqli_query($this->connection, $sql);
        return $res;
     }
     public function createSocial($fb,$gmail,$in,$yt,$tw){
        // echo "INSERT INTO tbl_about_me(myName,aboutDesc) VALUES('$fb','$gmail','$in','$yt','$tw)";
        // exit;
        $sql = "INSERT INTO tbl_social_link(fb,gmail,lin,youtube,twiter) VALUES('$fb','$gmail','$in','$yt','$tw')";
        $res = mysqli_query($this->connection,$sql);
        return $res;
    }
    public function readSocial($id=null){
        $sql = "SELECT * FROM tbl_social_link";
        if($id){ $sql .= " WHERE id=$id";}
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
    public function updateSocial($fb,$gmail,$in,$yt,$tw,$id){
        // echo "UPDATE tbl_social_link SET fb='$fb', gmail= '$gmail' , lin='$in',youtube='$yt',twiter='$tw' WHERE id='$id'";
        // exit;
        $sql = "UPDATE tbl_social_link SET fb='$fb', gmail= '$gmail' , lin='$in',youtube='$yt',twiter='$tw' WHERE id='$id'";
        $res = mysqli_query($this->connection,$sql);
        return $res;
    }
    public function deleteSocial($id){
        $sql = "DELETE FROM tbl_social_link WHERE id=$id";
        $res = mysqli_query($this->connection, $sql);
        return $res;
     }

    public function createService($serviceName,$serviceLogo,$serviceDesc){
        // echo "INSERT INTO tbl_services(serviceName,serviceLogo,serviceDesc) VALUES('$serviceName','$serviceLogo','$serviceDesc')";
        // exit;
        $sql = "INSERT INTO tbl_services(serviceName,serviceLogo,serviceDesc) VALUES('$serviceName','$serviceLogo','$serviceDesc')";
        $res = mysqli_query($this->connection,$sql);
        return $res;
    }
    public function readService($id=null){
        $sql = "SELECT * FROM tbl_services ";
        if($id){ $sql .= " WHERE id=$id";}
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
    public function updateService($serviceName,$serviceLogo,$serviceDesc,$id){
        // echo "UPDATE tbl_services SET serviceName='$serviceName', serviceLogo= '$serviceLogo' , serviceDesc='$serviceDesc' WHERE id='$id'";
        // exit;
        $sql = "UPDATE tbl_services SET serviceName='$serviceName', serviceLogo= '$serviceLogo' , serviceDesc='$serviceDesc' WHERE id='$id'";
        $res = mysqli_query($this->connection,$sql);
        return $res;
     }
    public function deleteService($id){
        $sql = "DELETE FROM tbl_services WHERE id=$id";
        $res = mysqli_query($this->connection, $sql);
        return $res;
     }
     public function createDetail($logoDetail,$nameDetail,$myDetail){
        // echo "INSERT INTO tbl_my_detail(logoDetail,nameDetail,myDetail) VALUES('$logoDetail','$nameDetail','$myDetail')";
        // exit;
        $sql = "INSERT INTO tbl_my_detail(logoDetail,nameDetail,myDetail) VALUES('$logoDetail','$nameDetail','$myDetail')";
        $res = mysqli_query($this->connection,$sql);
        return $res;
    }
    public function readDetail($id=null){
        $sql = "SELECT * FROM tbl_my_detail ";
        if($id){ $sql .= " WHERE id=$id";}
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
    public function updateDetail($logoDetail,$nameDetail,$myDetail,$id){
        // echo "UPDATE tbl_my_detail SET logoDetail='$logoDetail', nameDetail= '$nameDetail' , myDetail='$myDetail' WHERE id='$id'";
        // exit;
        $sql = "UPDATE tbl_my_detail SET logoDetail='$logoDetail', nameDetail= '$nameDetail' , myDetail='$myDetail' WHERE id='$id'";
        $res = mysqli_query($this->connection,$sql);
        return $res;
     }
    public function deleteDetail($id){
        $sql = "DELETE FROM tbl_my_detail WHERE id=$id";
        $res = mysqli_query($this->connection, $sql);
        return $res;
     }
     public function createProfile($profileImg){
        // echo "INSERT INTO tbl_profile_pic(profileImg) VALUES('$profileImg')";
        // exit;
        $sql = "INSERT INTO tbl_profile_pic(profileImg) VALUES('$profileImg')";
        $res = mysqli_query($this->connection,$sql);
        return $res;
    }
    public function readProfile($id=null){
        $sql = "SELECT * FROM tbl_profile_pic ";
        if($id){ $sql .= " WHERE id=$id";}
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
    public function updateProfile($profileImg,$id){
        // echo "UPDATE tbl_my_detail SET logoDetail='$logoDetail', nameDetail= '$nameDetail' , myDetail='$myDetail' WHERE id='$id'";
        // exit;
        $sql = "UPDATE tbl_profile_pic SET profileImg='$profileImg' WHERE id='$id'";
        $res = mysqli_query($this->connection,$sql);
        return $res;
     }
    public function deleteProfile($id){
        $sql = "DELETE FROM tbl_profile_pic WHERE id=$id";
        $res = mysqli_query($this->connection, $sql);
        return $res;
     }

     public function createExp($cName,$pName,$sDate,$eDate,$cDesc){
        // echo "INSERT INTO tbl_services(serviceName,serviceLogo,serviceDesc) VALUES('$serviceName','$serviceLogo','$serviceDesc')";
        // exit;
        $sql = "INSERT INTO tbl_exp(comName,comDeg,comStart,comEnd,comDesc) VALUES('$cName','$pName','$sDate','$eDate','$cDesc')";
        $res = mysqli_query($this->connection,$sql);
        return $res;
    }
    public function readExp($id=null){
        $sql = "SELECT * FROM tbl_exp ";
        if($id){ $sql .= " WHERE id=$id";}
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
    public function updateExp($cName,$pName,$sDate,$eDate,$cDesc,$id){
        // echo "UPDATE tbl_my_detail SET logoDetail='$logoDetail', nameDetail= '$nameDetail' , myDetail='$myDetail' WHERE id='$id'";
        // exit;
        $sql = "UPDATE tbl_exp SET comName='$cName', comDeg='$pName', comStart='$sDate', comEnd='$eDate', comDesc='$cDesc' WHERE id='$id'";
        $res = mysqli_query($this->connection,$sql);
        return $res;
     }
    public function deleteExp($id){
        $sql = "DELETE FROM tbl_exp WHERE id=$id";
        $res = mysqli_query($this->connection, $sql);
        return $res;
     }
     public function createEdu($eduName,$eduStart,$eduEnd,$eduDesc){
        // echo "INSERT INTO tbl_edu(eduName,eduStart,eduEnd,eduDesc) VALUES('$eduName','$eduStart','$eduEnd','$eduDesc')";
        // exit;
        $sql = "INSERT INTO tbl_edu(eduName,eduStart,eduEnd,eduDesc) VALUES('$eduName','$eduStart','$eduEnd','$eduDesc')";
        $res = mysqli_query($this->connection,$sql);
        return $res;
    }
    public function readEdu($id=null){
        $sql = "SELECT * FROM tbl_edu";
        if($id){ $sql .= " WHERE id=$id";}
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
    public function updateEdu($eduName,$eduStart,$eduEnd,$eduDesc,$id){
        // echo "UPDATE tbl_edu SET eduName='$eduName', eduStart='$eduStart', eduEnd='$eduEnd', eduDesc= '$eduDesc' WHERE id='$id'";
        // exit;
        $sql = "UPDATE tbl_edu SET eduName='$eduName', eduStart='$eduStart', eduEnd='$eduEnd', eduDesc= '$eduDesc' WHERE id='$id'";
        $res = mysqli_query($this->connection,$sql);
        return $res;
    }
    public function deleteEdu($id){
        $sql = "DELETE FROM tbl_edu WHERE id=$id";
        $res = mysqli_query($this->connection, $sql);
        return $res;
     }
     public function createResu($resume){
        // echo "INSERT INTO tbl_resume(resume) VALUES('$resume')";
        // exit;
        $sql = "INSERT INTO tbl_resume(resume) VALUES('$resume')";
        $res = mysqli_query($this->connection,$sql);
        return $res;
    }
    public function readResu($id=null){
        $sql = "SELECT * FROM tbl_resume ";
        if($id){ $sql .= " WHERE id=$id";}
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
    public function updateResu($resume,$id){
        // echo "UPDATE tbl_resume SET resume='$resume' WHERE id='$id'";
        // exit;
        $sql = "UPDATE tbl_resume SET resume='$resume' WHERE id='$id'";
        $res = mysqli_query($this->connection,$sql);
        return $res;
     }
    public function deleteResu($id){
        $sql = "DELETE FROM tbl_resume WHERE id=$id";
        $res = mysqli_query($this->connection, $sql);
        return $res;
     }

}
$database = new Database();
$database->connect_db();
?>
