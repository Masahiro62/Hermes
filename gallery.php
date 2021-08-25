<!doctype html>
<html lang="en">
  <head>
    <title>Gallery</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <head><?php include 'header.php';?></head>
      <main class="clearfix mb-5">
        <div class="container-fluid">
        <?php
            include 'datafiles.php';
            $Item=$personObj->displayItemeTable();

                // for pic
                $directory='uploads/item_pictures/';
            if($Item==false){
        ?>
            <div class="alert alert-danger text-center w-50 mx-auto" role="alert">We are preparing. Please wait for us.</div>
        <?php
            }else{
                foreach($Item as $item){
                    $image=$item['item_image'];
                    $src=$directory.$image;
        ?>
            <div class="card w-25 mt-5 ms-5 me-5 float-start">
                    <div class="card-header">
                        <h4 class="text-center"><?php echo $item['item_name']?></h4>
                    </div>
                    <div class="card-body">
                        <img src="<?php echo $src;?>" alt="image of <?php echo $item['item_name'];?>" style="height: 350px;" class="img-fluid w-100">
                    </div>
            </div>
        <?php
                }
            }
        ?>
        </div>
      </main>
      <footer class=""><?php include 'footer.php';?></footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>