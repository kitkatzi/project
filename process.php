<?php 

include 'config.php';

     session_start();
     // register หน้าสมัครผู้ใช้
     if($_GET['cmd'] == "register") {
          
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        

        $sql = "INSERT INTO member (username, password, firstname, lastname, userlevel)
                        VALUE ('$username', '$password', '$firstname', '$lastname', 'm')";
            


          if (mysqli_query($conn, $sql)) {
               echo "
                    <script>
                    alert('บันทึกข้อมูลสำเร็จ')
                    windonw.location = 'login.php'
                    </script>
               ";
          } else {
               echo "Error updateing record: " . mysqli_error($conn);
          }

     }


     //login
 if ($_GET['cmd'] == "login") {


    //รับค่า user & password
    $username = $_POST['username'];
    $password = $_POST['password'];
      //query 

    $sql="SELECT * FROM member Where username='".$username."' and password='".$password."' ";

    $result = mysqli_query($conn,$sql);
      
    if(mysqli_num_rows($result)==1){

        $row = mysqli_fetch_array($result);

        $_SESSION["userid"] = $row["id"];
        $_SESSION["member"] = $row["firstname"]." ".$row["lastname"];
        $_SESSION["userlevel"] = $row["userlevel"];

        if($_SESSION["userlevel"]=="a"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

          Header("Location:admin/index_admin.php");

        }

        if ($_SESSION["userlevel"]=="m"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

          Header("Location:user/index_user.php");

        }

    }else{
      echo "<script>";
          echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
          echo "window.history.back()";
      echo "</script>";

    }

     }else{


Header("Location: login.php"); //user & password incorrect back to login again
     
 }    




//logout
if ($_GET['cmd'] == "logout") {
     # code...
     session_start();
     session_destroy();

     header("location:index.php");
}


?>