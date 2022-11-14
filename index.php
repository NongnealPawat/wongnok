<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- ไอคอนหน้าเว็บ -->
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io/favicon-16x16.png">
  <link rel="manifest" href="./favicon_io/site.webmanifest">
  <!-- ติดตั้ง bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <!-- 11-13 ติดตั้ง font kanit จาก google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Kanit', sans-serif;
    }

    .carousel-item {
      height: 450px;
    }

    .carousel-item img {
      height: 450px;
      object-fit: cover;
    }

    main {
      height: calc(100vh - 78px);
    }
  </style>
  <!-- ตั้งชื่อให้เว็บว่า wongnok -->
  <title>Wongnok</title>
</head>

<body class="bg-light">
  <nav class="navbar bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="./imgs/wongnok.png" height="52" alt="Logo" class="d-inline-block align-text-top" />
      </a>
      <div class="d-flex gap-4 ms-auto">
        <a class="nav-link text-white" href="#">ข่าวสาร/กิจกรรม</a>
        <a class="nav-link text-white" href="contact.php">ติดต่อเรา</a>
      </div>
    </div>
  </nav>
  <main class="container d-flex justify-content-between align-items-center">
    <div>
      <h1 style="font-size: 4rem" class="text-primary">น้องนีลรีวิว</h1>
      <h2 style="font-size: 2rem">รายการอาหารยอดฮิตจากทั่วประเทศไทย</h2>
      <div class="d-flex gap-2 mt-4">
        <!-- ปุ่มกดไปแต่ละภาค -->
        <a class="btn btn-outline-primary" href="north.php">ภาคเหนือ</a> <!-- btn btn-outline-primary เป็นชื่อคลาสที่เอาไว้ตกแต่งปุ่มให้สวยงามขึ้น  -->
        <a class="btn btn-outline-primary" href="central.php">ภาคกลาง</a> <!-- href คือเมื่อเรากดปุ่มนี้จะให้ไปยังหน้าไหน -->
        <a class="btn btn-outline-primary" href="south.php">ภาคใต้</a>
        <a class="btn btn-outline-primary" href="isan.php">ภาคอีสาน</a>
      </div>
    </div>
    <!-- สไลด์รูปภาพ -->
    <div style="width: 600px; border-radius: 1rem; overflow: hidden" id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <!-- เป็นที่เอาไว้เก็บรูปภาพต่างๆ -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://static.thairath.co.th/media/4DQpjUtzLUwmJZZSElx8bVCw1tUKSktxbi65L7bs8ljC.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="https://s.isanook.com/tr/0/ui/286/1432241/1650604925-6833-th.jpeg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="https://img.winnews.tv/files/site/44d183bbbac316eec07b0b042a475e19.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <!-- ปุ่มที่เอาไว้กดไปภาพก่อนหน้า -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <!-- ปุ่มที่เอาไว้กดไปภาพถัดไป -->
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </main>
  <!-- ติดตั้ง bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>