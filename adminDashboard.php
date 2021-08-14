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
        <div class="container-fluid border border-dark">
            <!-- left part -->
            <div class="border border-danger w-75 float-start">
                <div class="w-100" style="height: 1500px;">
                    <section class="border" style="height: 500px;">
                        <div class="row">
                            <div class="col-md-12">

                                <!-- add category -->
                                <!-- <a href=""><i class="fas fa-edit"></i>Edit</a> -->
                                <form action="" method="POST">
                                    <div class="form-group pt-5 pb-3 text-center">
                                        <label for="">Add Category:</label>
                                        <input type="text" name="category_name" class="form-group">
                                        <input type="submit" name="add_category" value="ADD" class="btn btn-success">
                                    </div>
                                </form>
                                <h3 class="text-center">Category Table</h3>
                                <table class="table table-hover">
                                    <thead class=" table-dark">
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th colspan="2"></th>
                                    </thead>

                                    <tbody>
                                        <?php 
                                            $displayCate=$personObj->displayCtateTable();
                                            if($displayCate==false){
                                        ?>

                                            <td colspan="4" class="text-danger">No Record Found</td>
                                        <?php 
                                            }else{
                                                foreach($displayCate as $Cate){
                                           
                                        ?>
                                            <tr>
                                                <td><?php echo $Cate['category_id'];?></td>
                                                <td><?php echo $Cate['category_name'];?></td>
                                                <td class="text-center"><a href="update_category.php?=category_id=<?php echo $Cate['category_id'];?>" class="btn btn-warning">UPDATE</a></td>
                                                <td><a href="delete_category.php?=category_id=<?php echo $Cate['category_id'];?>" class="btn btn-danger">DELETE</a></td>
                                            </tr>
                                        <?php
                                        
                                            }
                                         }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr>
                    </section>

                        <!-- add item -->
                    <section class="border mb-5" style="height: 500px;">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <form action="" method="POST">
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
                                                            $selectCate=$personObj->displayCtateTable();
                                                            if($selectCate==false){
                                                        ?>
                                                            <option value="none" class="text-danger">NO RECORD</option>
                                                        <?php
                                                            }else{
                                                                foreach($displayCate as $dcate){
                                                            
                                                        ?>
                                                            <option value=""><?php echo $dcate['category_id'].": ".$dcate['category_name'];?></option>
                                                        <?php 
                                                            }
                                                        }
                                                        ?>
                                                    </select>
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
                                                <td>ARRIVAL DATE:</td>
                                                <td><input type="date" name="arrival_date" id="" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>DESCRIPTION:</td>
                                                <td><input type="text" name="item_description" id="" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>ITEM IMAGE</td>
                                                <td><input type="file" name="item_image" id="" class="form-control" ></td>
                                            </tr>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="2" class="text-center"><input type="submit" value="ADD" name="add_item" class="btn btn-success w-50"></td>
                                                </tr>
                                            </tfoot>
                                        </tbody>
                                    </form>
                                </table>
                            </div>
                        </div>
                    </section>

                    <!-- display all item -->
                    <section class="border" style="height: 500px;">
                        <div class="row">
                            <div class="col-md-12">
                                <a href=""><i class="fas fa-edit"></i>Edit</a>
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
            </div>

            <!-- right part  -->
            <aside class="border border-primary w-25 float-end">
                <div class="w-100" style="height: 1500px;">
                  <div class="border border-warning w-100" style="height: 100px;">
                    <form action="" method="get" class="mt-4 mx-auto">
                      <div class="input-group">
                        <div class="form-outline">
                          <input type="search" id="search" form="form-control" placeholder="Search in the site" class="p-2">
                        </div>
                        <button type="button" class="btn btn-primary">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </form>
                  </div>

                  <article class="w-100 border" style="height: 350px;">
                        <div class="row">
                            <div class="col-md-12">
                                <a href=""><i class="fas fa-edit"></i>Edit</a>
                            </div>
                            <div></div>
                        </div>
                  </article>

                  <article class="w-100 border" style="height: 350px;">
                        <div class="row">
                            <div class="col-md-12">
                                <a href=""><i class="fas fa-edit"></i>Edit</a>
                            </div>
                        </div>
                  </article>

                  <article class="w-100 border" style="height: 350px;">
                        <div class="row">
                            <div class="col-md-12">
                                <a href=""><i class="fas fa-edit"></i>Edit</a>
                            </div>
                        </div>
                  </article>
                  
                  <article class="w-100 border" style="height: 350px;">
                        <div class="row">
                            <div class="col-md-12">
                                <a href=""><i class="fas fa-edit"></i>Edit</a>
                            </div>
                        </div>

                  </article>
                </div>
            </aside>
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