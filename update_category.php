<?php
    include 'datafiles.php';
    // $category_id=$_GET['category_id'];
    // $cate=$personObj->updateCate($u_category_name,$category_id);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Update category</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
        <!-- update category -->
        <div class="container">
            <div class="card w-50 mx-auto mt-5">
                <div class="card-header text-center">
                    <h2>UPDATE CATEGORY</h2>
                </div>
                <div class="card-body text-center">
                    <form action="" method="POST">
                        <input type="hidden" name="item_id" value="">
                        <input type="text" name="u_category_name" value="" class="">
                        <input type="submit" name="update_category" value="UPDATE" class="btn btn-warning">
                    </form>
                </div>
            </div>
        </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>

    <!-- <?php echo $cate['category_id'];?>
    <?php echo $cata['category_name'];?> -->
