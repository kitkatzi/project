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
                    windonw.location.href = 'login.php';
                    </script>
               ";
          } else {
               echo "Error updateing record: " . mysqli_error($conn);
          }

     }


     //login
 if ($_GET['cmd'] == "login") {

      $strSQL = "SELECT * FROM member WHERE username = '".mysqli_real_escape_string($conn,$_POST['username'])."'
               and password = '".mysqli_real_estring($conn,$_POST['password'])."'";

          $objQuery = mysqli_query($conn,$strSQL);
          $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
          if (!$objResult) {
               
               echo "
                    <script>
                    alert('ชื่อผู้ใช้งาน หรือ รหัสผ่าน ไม่ถูกต้อง');
                    windonw.location.href = 'login.php';
                    </script>
               ";
          }else{
               $_SESSION['username'] = $objResult['username'];
               $_SESSION['password'] = $objResult['password'];
               $_SESSION['userlevel'] = $objResult['username'];
               session_write_close();

               if($objResult['userlevel'] == 'a'){
                    header("location:admin/index_admin.php");
                } else if ($objResult['userlevel'] == 'm'){
                    header("location:user/index_user.php");
                }
          }mysqli_close($conn);


 }    




//logout
if ($_GET['cmd'] == "logout") {
     # code...
     session_start();
     session_destroy();

     header("location:index.php");
}


?>