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
  </style>
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
  <main class="container">
    <div class="d-flex flex-column gap-2 pt-4">
      <div class="d-flex justify-content-center gap-4">
        <div>
          <!-- รูปภาพ -->
          <div>
            <img src="https://scontent.fbkk4-5.fna.fbcdn.net/v/t1.6435-9/92623705_2810351009060685_4263536059607941120_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeEu3KTGKbsKtdFKJPWdaglnSV39gSVtIYtJXf2BJW0hi5uP8zlhEoAiu4Oig1PYlt7ODNqHLj_w-A7JyDnRL_Wu&_nc_ohc=W-topWsw53sAX8yK9i3&_nc_ht=scontent.fbkk4-5.fna&oh=00_AfBH4Xu7W1N8M0rcujGs7YKhFeK5fZAPyVO7_C0FKHf6yA&oe=6391C3AA" alt="">
          </div>
          <div class="d-flex justify-content-center mt-3">
            <!-- ลิงค์ไปยัง facebook -->
            <!-- target="_blank" คือทำให้มันเปิดเป็นอีกแท็บนึง -->
            <a class="btn btn-link d-inline-flex align-items-center gap-2" target="_blank" href="https://web.facebook.com/hi.n.neal">
              <!-- เป็นไอคอน facebook -->
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
              </svg>
              <!-- ชื่อ facebook -->
              <span>N'Neal Pawat Nunwichian</span>
            </a>
            <!-- ลิงค์ไปยัง instagram -->
            <a class="btn btn-link d-inline-flex align-items-center gap-2" target="_blank" href="https://www.instagram.com/nongneal_ct/">
              <!-- เป็นไอคอน instagram -->
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
              </svg>
              <!-- ชื่อ instagram -->
              <span>nongneal_ct</span>
            </a>
          </div>
        </div>
        <!-- รูปภาพ -->
        <div>
          <img width="400" src="https://scontent.fbkk3-5.fna.fbcdn.net/v/t1.6435-9/118282920_3159307277498388_2959517146173616358_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeEM1CHhlyber9WcBT7PQwczKT8bkpF1yqwpPxuSkXXKrB4J66v8jhZfjP3N6erUcjUoPydS17y2C3fdMt5yh8fU&_nc_ohc=2NOyVlJQ4ZUAX-FvqXb&_nc_ht=scontent.fbkk3-5.fna&oh=00_AfAoGkUJG92CcP_fBy5X07N9_Yax8fYm_ZtmedQVyfJvVg&oe=6391DD17" alt="">
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>