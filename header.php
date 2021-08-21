<?php
 session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>header</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
      <div class="container-fluid">
          <div class="row bg-primary" style="line-height:70px;">
             <div class=" w-25 ps-5">               
                  <i class="fas fa-user text-white text-center me-1"></i><a href="profile.php" class="text-white text-start"><?php echo $_SESSION['username'] ;?></a>
                  <span class="text-white">/</span>
                  <i class="fas fa-door-open text-white"></i>
                  <a href="logout.php" class="text-white"><span class="text-white text-start">Logout</span></a>
             </div>

            <div class=" w-50">
              <div class="w-50 float-start text-end"><img src="assets/image/logo.png" alt="" style="height: 50px; width:50px;"></div>
              <div class="w-50 float-end"><span class=" text-white fs-2">Hermes</span></div>
            </div>
            <div class="w-25 text-center ">
              <!-- nav button -->
              <nav class="">
                <div class="dropdown">
                  <button class="btn text-white  mt-3 dropdown-toggle " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  MENU
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item " href="profile.php">USER INFOMATION</a></li>
                    <li><a class="dropdown-item " href="order_history.php">ORDER HISTORY</a></li>
                    <li><a class="dropdown-item" href="contact.php">CONTACT</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8da6dac468.js" crossorigin="anonymous"></script>

  </body>
</html>

