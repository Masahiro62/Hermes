<?php 
    include 'datafiles.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Items page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <header><?php include 'header.php';?></header>
        <!-- back to dashboarde -->
        <a href="adminDashboard.php"><i class="fas fa-angle-double-left display-4 mt-3"></i></a>
        <div class="container-fluid">
      <main>
            <!-- add item -->
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table w-50 mx-auto mt-5 mb-5">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <thead class="table-dark">
                                    <th colspan="2" class="text-center fs-4">Add Item</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>NAME:</td>
                                        <td><input type="text" name="item_name" id="" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>CATEGORY:</td>
                                        <td>
                                            <select name="category" id="category" class="form-control">
                                                <option value="" hidden>choose category</option>
                                                <?php 
                                                    $selectCate=$personObj->displayCateTable();
                                                    if($selectCate==false){
                                                ?>
                                                    <option value="" class="text-danger">NO RECORD</option>
                                                <?php
                                                    }else{
                                                        foreach($selectCate as $scate){
                                                        
                                                ?>
                                                    <option value="<?php echo $scate['category_id'];?>"><?php echo $scate['category_name'];?></option>
                                                <?php 
                                                    }
                                                }
                                                ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PRICE:</td>
                                        <td><input type="number" name="item_price" id="" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>STOCK:</td>
                                        <td><input type="number" name="item_stocks" id="" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>PUBLISH DATE:</td>
                                        <td><input type="date" name="publish_date" id="" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>DESCRIPTION:</td>
                                        <td><input type="text" name="item_description" id="" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>ITEM IMAGE</td>
                                        <td><input type="file" name="item_image" id="" class="form-control" accept="image/png,image/jpeg,image/jpg"></td>
                                    </tr>
                                    <tr class="">
                                        <td colspan="2" class="text-center"><input type="submit" value="ADD" name="add_item" class="btn btn-success w-50 mt-3"></td>
                                    </tr>
                                </tbody>
                            </form>
                        </table>
                    </div>
                </div>
            </section>
            <!-- display all item -->
            <section class="
            ">
                <div class="row w-75 mx-auto">
                    <div class="col-md-12 mt-5">
                        <h3 class="text-center">Item Table</h3>
                        <table class="table table-hover">
                            <thead>
                                <th>NAME</th>
                                <th>STOCKs</th>
                                <th>PRICE</th>
                                <th>CATEGORY </th>
                                <th colspan="2"></th>
                            </thead>
                            <tbody>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                   <td class="text-center"><a href="update_item.php" class="btn btn-warning">UPDATE</a></td>
                                <td><a href="delete_item.php" class="btn btn-danger">DELETE</a></td>
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>
      </main>
      <footer><?php include 'footer.php';?></footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>