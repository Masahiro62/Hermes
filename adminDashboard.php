<?php
    include 'datafiles.php';
?>
<!-- for adminiser -->
<!doctype html>
<html lang="en">
  <head>
    <title>admin dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <header>
      <?php include 'header.php'?>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-4 btn border border-danger p-5 w-25 mx-auto">
                    <a href="categories.php" class="">
                        <i class="fas fa-tags text-danger text-center"></i>
                        <br>
                        <p>CATEGORY</p>
                    </a>
                </div>

                <div class="col-md-4 btn border border-primary p-5 w-25 mx-auto">
                    <a href="items.php" class="">
                        <i class="fas fa-shopping-cart text-primary"></i>
                        <br>
                        <p>ITEM</p>
                    </a>
                </div>

                <div class="col-md-4 btn border border-secondary p-5 w-25 mx-auto">
                    <a href="events.php" class="">
                        <i class="fas fa-calendar-day text-secondary"></i>
                        <br>
                        <p>EVENTS</p>
                    </a>
                </div>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-md-4 btn border border-info p-5 w-25 mx-auto">
                    <a href="order.php" class="">
                        <i class="fas fa-clipboard-list text-info"></i>
                        <br>
                        <p>ORDER LIST</p>
                    </a>
                </div>

                <div class="col-md-4 btn border border-success p-5 w-25 mx-auto">
                    <a href="order.php" class="">
                        <i class="fas fa-truck text-success"></i>
                        <br>
                        <p>DELIVER LIST</p>
                    </a>
                </div>

                <!-- just check the outlook not order,buy... etc -->
                <div class="col-md-4 btn border border-warning p-5 w-25 mx-auto">
                    <a href="userdashboard.php" class="">
                        <i class="fas fa-desktop text-warning"></i>
                        <br>
                        <p>CHECK our Output</p>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include 'footer.php'?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8da6dac468.js" crossorigin="anonymous"></script>
  </body>
</html>