<?php
include_once("./connect.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet" />
  <!-- ไอคอนหน้าเว็บ -->
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io/favicon-16x16.png">
  <link rel="manifest" href="./favicon_io/site.webmanifest">
  <style>
    body {
      font-family: 'Kanit', sans-serif;
    }

    .title-card {
      background-image: url(https://cfcdn2.azsg.opensnap.com/azsg/snapphoto/photo/LC/GV4C/3BXAYF35AB8DE43E94C920lv.jpg);
      height: 22rem;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      margin-top: 1rem;
      border-radius: 1rem;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    .title-card::before {
      background-color: rgba(0, 0, 0, 0.3);
      position: absolute;
      content: '';
      inset: 0;
      border-radius: 1rem;
    }

    .title-card__subtext {
      color: #fff;
      font-weight: bold;
      z-index: 99;
      font-size: 3.5rem;
    }

    .store {
      display: flex;
      justify-content: center;
      gap: 2rem;
      align-items: center;
    }

    .store__info {
      width: 30%;
    }

    .carousel-inner {
      height: 350px;
      width: 550px;
    }

    .carousel-item {
      height: 100%;
      width: 100%;
    }

    .carousel-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .store__imgs-wrapper {
      border-radius: 1rem;
      overflow: hidden;
    }
  </style>
  <title>Document</title>
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
  <main class="container text-center">
    <div class="title-card">
      <h2 class="title-card__subtext">ร้านอาหารเด็ดภาคอีสาน ที่ไม่ควรมองข้าม!</h2>
    </div>
    <section class="mt-4 mb-4 d-flex gap-4 flex-column">
      <?php
      $sql = "SELECT * FROM restaurants WHERE sectorId = 4";
      $restaurants = $conn->query($sql)->fetchAll();
      $i = 1;
      foreach ($restaurants as $restaurant) {
      ?>
        <article class="store">
          <div class="store__info">
            <div class="d-flex justify-content-between align-items-center gap-2">
              <h3 style="font-size: 2rem; font-weight: bold" class="text-primary text-capitalize"><?= $restaurant["restName"]; ?></h3>
              <span style="letter-spacing: 1px" class="badge bg-secondary"><?= $restaurant["restRating"]; ?>
                <svg style="position: relative; bottom: 3px; margin-left: 2px" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
              </span>
            </div>
            <p class="text-start">
              <?= $restaurant["restDesc"]; ?>
            </p>
            <div class="card">
              <div class="card-body d-flex align-items-center justify-content-between">
                <div style="position: relative; bottom: 2px">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                  </svg>
                </div>
                <div><?= $restaurant["restTel"]; ?></div>
              </div>
            </div>
          </div>
          <div class="store__imgs-wrapper">
            <div id="carousel<?= $i; ?>" class="carousel slide">
              <div class="carousel-inner">
                <?php
                $sql = "SELECT * FROM food_imgs WHERE restId = :restId";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam("restId", $restaurant["restId"], PDO::PARAM_INT);
                $stmt->execute();
                $isFirst = true;
                foreach ($stmt->fetchAll() as $foodImg) { ?>
                  <div class="carousel-item <?php if ($isFirst) {
                                              echo "active";
                                              $isFirst = false;
                                            } ?>">
                    <img src="<?= $foodImg["foodImgUrl"]; ?>" alt="" />
                  </div>
                <?php } ?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?= $i; ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $i; ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </article>
      <?php $i++;
      } ?>
    </section>
    <a class="btn btn-primary mb-4" href="index.php">กลับสู่หน้าหลัก</a>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>