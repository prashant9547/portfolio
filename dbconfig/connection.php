<?php
class Database{
    private $connection;

    public function connect_db(){
        $this->connection = mysqli_connect('localhost', 'root', '', 'resume_site');
            if(mysqli_connect_error()){
                die("Database Connection Failed" . mysqli_connect_error());
            } 
//        else {
//                echo 'Connection is ready to use';
//            }
    }
    public function login($password){
        //sql query for fetch data from table
        $sql = "SELECT * FROM tbl_admin WHERE userName = 'prashantradadiya7@gmail.com' AND password = '".$password."'";
        $res = mysqli_query($this->connection, $sql);
        $row = mysqli_fetch_assoc($res);
        $fullname = $row['adminName'];

        if($res-> num_rows > 0){
            //session start here
            session_start();
            
            //session start with email
            $_SESSION['userName'] = $userName;
            $_SESSION['fullname'] = $fullname;
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
     public function home(){
        //  echo "SELECT * FROM tbl_about_me";
        //  exit;
         $sql = "SELECT * FROM tbl_about_me";
         $res = mysqli_query($this->connection,$sql);
         return $res;
     }
     public function about(){
        //  echo "SELECT * FROM tbl_about_me";
        //  exit;
         $sql = "SELECT * FROM tbl_profile_pic";
         $res = mysqli_query($this->connection,$sql);
         return $res;
     }
     public function service(){
        //  echo "SELECT * FROM tbl_about_me";
        //  exit;
         $sql = "SELECT * FROM tbl_services";
         $res = mysqli_query($this->connection,$sql);
         return $res;
     }
     public function exp(){
        //  echo "SELECT * FROM tbl_about_me";
        //  exit;
         $sql = "SELECT * FROM tbl_exp WHERE id ORDER BY id DESC";
         $res = mysqli_query($this->connection,$sql);
         return $res;
     }
     public function edu(){
        //  echo "SELECT * FROM tbl_about_me";
        //  exit;
         $sql = "SELECT * FROM tbl_edu WHERE id ORDER BY id DESC";
         $res = mysqli_query($this->connection,$sql);
         return $res;
     }
     public function skill(){
        //  echo "SELECT * FROM tbl_about_me";
        //  exit;
         $sql = "SELECT * FROM tbl_soft_skill";
         $res = mysqli_query($this->connection,$sql);
         return $res;
     }
    public function resume(){
        //  echo "SELECT * FROM tbl_about_me";
        //  exit;
         $sql = "SELECT * FROM tbl_resume";
         $res = mysqli_query($this->connection,$sql);
         return $res;
     }
     public function createUser($sub,$name,$email,$cell,$msg){
        // echo "INSERT INTO tbl_user(userName,userEmail,userCell,userReq,userDesc) VALUES('$name','$email','$cell','$sub','$msg')";
        // exit;
        $sql = "INSERT INTO tbl_user(userName,userEmail,userCell,userReq,userDesc) VALUES('$name','$email','$cell','$sub','$msg')";
        $res = mysqli_query($this->connection,$sql);
        return $res;
    }

}
$database = new Database();
$database->connect_db();
?>
