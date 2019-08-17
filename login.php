<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>

      <!-- Custom styles for this template -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
    /*
* ==========================================
* ==========================================
*/
.login,
.image {
  min-height: 100vh;
}

.bg-image {
  background-image: url('https://res.cloudinary.com/mhmd/image/upload/v1555917661/art-colorful-contemporary-2047905_dxtao7.jpg');
  background-size: cover;
  background-position: center center;
}
    </style>

</head>

<body>
        <div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">Welcome</h3>
                            <p class="text-muted mb-4">ยินตีต้อนรับ</p>

                            <form action="process.php?cmd=login" method="post"> <!-------------------------------------------------------------------->
                                <div class="form-group mb-3">
                                <input type="text" name="username" placeholder="ชื่อผู้ใช้งานเข้าระบบ Log in" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                <input type="password" name="password" placeholder="รหัสผ่าน" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                             <!--   <div class="custom-control custom-checkbox mb-3">
                                    <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Remember password</label>
                                </div> --><br>
                                <button input type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Log in</button><br>
                                <div class="text-center d-flex justify-content-between mt-4"><p>ยังไม่เป็นสมาชิก <a href="register.php" class="font-italic text-muted"> 
                                        <u>สมัครผู้ใช้งาน</u></a></p> <a href="index.php" class="font-italic text-muted"><u>หน้าแรก</u></div>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
    </div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>