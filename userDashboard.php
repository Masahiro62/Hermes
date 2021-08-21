<!-- for user -->
<!doctype html>
<html lang="en">
  <head>
    <title>user dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
  </head>
  <body>
    <header>
      <?php include 'header.php';?>
    </header>
    <main>
        <section><?php include 'showcase.php';?></section>

        <div class="container-fluid border border-dark">
            <!-- left part -->
            <div class="border border-danger w-75 float-start">
                <div class="w-100" style="height: 1500px;">
                    <section class="border" style="height: 500px;">
                      NEW ARRIVAL ITEMS
                      <br>
                      put slider
                    </section>

                    <section class="border" style="height: 500px;">
                      BEST SELLERS
                      <br>
                      put some pics for showing the output
                    </section>

                    <section class="border" style="height: 500px;">
                      <h3 class="text-center">ALL ITEMS</h3>
                      <table class="table table-hover">
                        <thead>
                          <th>ITEM ID</th>
                          <th>ITEM NAME</th>
                          <!-- <th>DETAIL</th> -->
                          <th>PRICE</th>
                          <th>STOCK</th>
                        </thead>
                        <tbody>
                          <td></td>
                          <td></td>
                          <!-- <td></td> -->
                          <td></td>
                          <td></td>
                        </tbody>
                      </table>
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
                        <button type="submit" name="search" class="btn btn-primary">
                          <i class="fas fa-search"></i>
</butt>
                      </div>
                    </form>
                  </div>
                  <article class="w-100 border" style="height: 350px;">
                    calender
                  </article>

                  <article class="w-100 border" style="height: 350px;">
                    news/ivents
                  </article>

                  <article class="w-100 border" style="height: 350px;">
                    coming soon
                  </article>
                  <article class="w-100 border" style="height: 350px;">
                    other if there is any 
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