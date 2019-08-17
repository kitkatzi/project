<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>หน้าแรก</title>

     <!-- Custom styles for this template -->
     <link href="css/bootstrap.min.css" rel="stylesheet">


     <style>
     :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

header {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}
body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-img-left {
  width: 45%;
  /* Link to your background image using in the property below! */
  background: scroll center url('https://source.unsplash.com/WEQbe2jBg40/414x512');
  background-size: cover;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}
     
     </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
  <div class="container"><a href="#" class="navbar-brand d-flex align-items-center"> <i class="fa fa-snowflake-o fa-lg text-primary mr-2"></i><strong>GAP สวนทุเรียน</strong></a>
    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="index.php" class="nav-link "> หน้าแรก </a>
        <!--<li class="nav-item active"><a href="#" class="nav-link font-italic"> About </a></li>-->
        <li class="nav-item active"><a href="register.php" class="nav-link font-italic"> สมัครสมาชิก </a></li>
        <li class="nav-item active"><a href="login.php" class="nav-link font-italic"> เข้าสู่ระบบ</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="bg-light">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
        <h1 class="display-4">GAP คืออะไร</h1>
        <p class="lead text-muted mb-0">(Good Agricultural Practice).</p>
        <p class="lead text-muted">ข้อมูลเพิ่มเติม <a href="http://www.mamafreshly.com/%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%A5%E0%B8%B0%E0%B9%80%E0%B8%AD%E0%B8%B5%E0%B8%A2%E0%B8%94/595b6d2f6ea2c80001d9f3d0/GAP%E0%B8%84%E0%B8%B7%E0%B8%AD%E0%B8%AD%E0%B8%B0%E0%B9%84%E0%B8%A3/595b71436ea2c80001d9f439" class="text-muted"> 
                    <u>รายระเอียด</u></a>
        </p>
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="http://gap.doae.go.th/toon/picgap/1.gif" alt="" class="img-fluid"></div>
      <div class="col-lg-6 d-none d-lg-block"><img src="http://gap.doae.go.th/toon/picgap/2.gif" alt="" class="img-fluid"></div>
      <!-- -->
      
      <div class="col-lg-6">
        <!--<h1 class="display-5">ปลูกพืชระบบ GAP เป็นอย่างไร.</h1>-->
        <h2 class="font-weight-light">ปลูกพืชระบบ GAP เป็นอย่างไร.</h2>
        <p class="lead text-muted mb-0"></p>
        <!--<p class="lead text-muted">ข้อมูลเพิ่มเติม <a href=" " class="text-muted"> <u>รายระเอียด</u></a>
        </p>-->
        
    </div>
  </div>
</div>

<div class="bg-light">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
      <h2 class="font-weight-light">เกษตรได้ประโยชน์อย่างไร</h2>
        <p class="lead text-muted mb-0">จาการปลูกพืชระบบ GAP.</p>
        <p class="lead text-muted"> <a href="" class="text-muted"> 
                    <u></u></a>
        </p>
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="http://gap.doae.go.th/toon/picgap/3.gif" alt="" class="img-fluid"></div><!-- -->
    </div>
  </div>
</div>


<!--  1     -->
<div class="bg-white py-5">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">เกษตรได้ประโยชน์อย่างไร</h2>
        <p class="font-italic text-muted mb-4">จาการปลูกพืชระบบ GAP.<br>เมื่อเกษตรปฏิบัติตามมาตรฐาน เพื่อให้ได้ผลผลิตที่มีคุณภาพดี เกษตรกรจะได้รับ ประโยชน์อย่างไรจากการปลูกพืชระบบ GAP </p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
      </div>

      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="imp/gap2/maxresdefault.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>

  <!--  </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/img-2_vdgqgn.jpg" alt="" class="img-fluid mb-4 mb-lg-0">
    </div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
        <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
      </div> -->
    </div>
  </div>
</div>

<div class="bg-light py-5">
  <div class="container py-5">
    <div class="row mb-4">
      <div class="col-lg-5">
        <h2 class="display-5 ">สอบถามรายระเอียดต่างๆได้ที่</h2>
        <p class="font-italic text-muted"></p>
      </div>
    </div>

    <div class="row text-center">
      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="imp/gap2/23915926_1609628689096540_3589243838717567301_n.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">กรมวิชาการเกษตร</h5><span class="small text-uppercase text-muted"></span>
          <p>Design by <a href="http://www.doa.go.th/main/" class="external">http://www.doa.go.th/main</a></p>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="imp/gap2/img_87a7c056e504e71ddab51d0de92228d6.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">สำนักงานการปฏิรูปที่ดินเพื่อเกษตรกรรม(ส.ป.ก.)</h5><span class="small text-uppercase text-muted"></span>
          <p>Design by <br><a href="https://www.alro.go.th/alro_th/article_attach/article_attach_201705011493613012.pdf" class="external">คู่มือรการรับรองมาตรฐานการปฏิบัติทางการเกษตรที่ดี</a></p>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="imp/gap2/27500328_1800568189963158_1605539546621751872_o.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">สำนักงานมาตรฐานสินค้าเกษตรและอาหารแห่งชาติ</h5><span class="small text-uppercase text-muted"></span>
          <p>Design by <a href="https://www.acfs.go.th/#/" class="external">https://www.acfs.go.th</a></p>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="imp/gap2/images.png" alt="" width="200" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">GAP DOA online</h5><span class="small text-uppercase text-muted"></span>
          <p>Design by <a href="http://gap.doa.go.th" class="external">http://gap.doa.go.th</a></p>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

    </div>
  </div>
</div>


<footer class="bg-light pb-5">
  <div class="container text-center">
    <p class="font-italic text-muted mb-0">&copy; Copyrights Company.com All rights reserved.</p>
  </div>
</footer>

<script src="js/bootstrap.min.js"></script>
</body>
</body>
</html>