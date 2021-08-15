<?php 
?>
<?php
    include 'datafiles.php';
    $displayCate=$personObj->displayCateTable();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>delete category</title> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
        <!-- delete category -->
        <div class="container">
            <div class="card w-50 mx-auto mt-5">
                <div class="card-header text-center">
                    <h2>DELETE CATEGORY</h2>
                </div>
                <div class="card-body text-center">
                    <h4>Would you like to delete</h4>
                    <h4><strong>the name of the category</strong></h4>
                </div>
                <div class="card-footer text-center">
                    <form action="datafiles.php" method="POST">
                        <input type="hidden" name="item_id" value="<?php $displayCate['category_id'];?>">
                        <input type="submit" name="delete_category" value="DELETE" class="btn btn-danger">
                        <a href="adminDashboard.php" class="btn btn-dark">CANCEL</a>
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
