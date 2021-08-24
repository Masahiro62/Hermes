<?php
  include 'datafiles.php';
?>

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
    <style>
    main{
      background-size: contain;
    }
    </style>
  </head>
  <body>
    <header>
      <?php include 'header.php';?>
    </header>
    <main>
        <!-- showcase -->
        <section><?php include 'showcase.php';?></section>

        <div class="sticky-top w-100">
            <a href="#" class="text-dark" style="text-decoration: none;">Top<i class="fas fa-chevron-circle-up text-dark fs-1"></i><a>
            <a href="" style="text-decoration: none;">Cart<i class="fas fa-cart-plus fs-1"></i></a>
            
        </div>

        <!-- contents -->
        <div class="container-fluid border border-dark">
              
              
            <div class="border border-danger w-75 mx-auto mb-5">
                <!-- <div class="" > -->
                    <!-- slider -->
                    <section class="mt-5 mb-5 border border-primary">
                      <h3 class="text-center mt-5">NEW ARRIVAL ITEM</h3>
                      <br>
                      <!-- slider -->
                      <div id="carouselItem" class="carousel carousel-dark slide w-75 mx-auto mb-5" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselItem" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselItem" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselItem" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                          <img src="assets/image/shopping_woman.png" class="d-block w-100" alt="">
                          <!-- image or card -->
                          <div class="carousel-caption d-none d-md-block">
                            <h3><strong>xxxxx</strong></h3>
                            <p class="fs-6">Lorem ipsum dolor sit amet.</p>
                          </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                          <img src="assets/image/shopping_woman.png" class="d-block w-100" alt="">
                          <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-white">yyyyy</h3>
                            <p class="fs-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime, odio!</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="assets/image/shopping_woman.png" class="d-block w-100" alt="">
                          <div class="carousel-caption d-none d-md-block">
                            <h3>zzzzz</h3>
                            <p class="fs-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias eligendi molestiae eaque autem!</p>
                          </div>
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselItem" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselItem" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                    </section>

                    <section class="border border-warning mb-5" style="height: 500px;">
                      
                      <article class="w-75 float-start border border-danger" 
                                style="height:500px; background-image:url(assets/image/gallery.jpg); 
                                        background-position: center center; background-size: cover; background-repeat:no-repeat;">
                        <button class="btn btn-secondary" style="left: 35%; margin-top:250px; ">
                          <a href="" class="text-white" style="text-decoration: none;">
                            EXPLORE MORE?
                          </a>
                        </button>
                      </article>

                      <article class="w-25 float-end border border-danger" style="height:500px;">
                          <section class="" style="height: 250px;">
                            <h5 class="text-center mt-5 pt-5">TODAY</h5>
                            <div class="mt-3">
                              <ul>
                                <li><a href="">DATE & TITLE</a></li>
                                <!-- click and show the modal -->
                              </ul>
                            </div>
                          </section>

                          <section style="height: 250px;">
                            <h5 class="text-center">COMMING SOON</h5> 
                            <div class="mt-3">
                              <ul>
                                <li><a href="">DATE & TITLE</a></li>
                                <!-- click and show the modal -->
                              </ul>
                            </div>
                          </section>
                        </article>
                    </section>

                    <section class="border border-primary" >
                      <h3 class="text-center">ITEM LIST</h3>
                      <table class="table table-hover w-100 mx-auto">
                        <thead class="text-center">
                          <th></th>
                          <th>ITEM NAME</th>
                          <th>CATEGORY</th>
                          <th>PRICE</th>
                          <th>STOCK</th>
                          <th>DESCRIPTION</th>
                          <th></th>
                        </thead>
                        <tbody class="text-center">
                          <?php 
                            $displayItem=$personObj->displayItemeTable();
                            
                            if($displayItem==false){
                          ?>
                            <td colspan="5" class="text-danger">No Record Found</td>
                          <?php
                            }else{
                            foreach($displayItem as $Item){
                                    // for pic
                                  $directory='uploads/item_pictures/';
                                  $image=$Item['item_image'];
                                  $src=$directory.$image;

                          ?>
                          <tr>
                            <td><img src="<?php echo $src;?>" alt="" style="height: 100px;"></td>
                            <td><?php echo $Item['item_name'];?></td>
                            <td><?php echo $Item['category_name'];?></td>
                            <td><?php echo $Item['item_price'];?></td>
                            <td><?php echo $Item['item_stocks'];?></td>
                            <td><?php echo $Item['item_description'];?></td>
                            <td class="">
                              <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-info"><a href="buy_item.php?item_id=<?php echo $Item['item_id'];?>" class="text-dark" style="text-decoration: none;">BUY</a></button>
                                <button type="button" class="btn btn-outline-warning"><a href="cart_page.php" class="text-dark" style="text-decoration: none;">ADD CART</a></button>
                            </td>
                          </tr>
                          <?php 
                               }
                            }
                            
                          ?>
                        </tbody>
                      </table>
                    </section>
                <!-- </div> -->
            </div>
        </div>
    </main>
    <footer>
        <?php include 'footer.php';?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8da6dac468.js" crossorigin="anonymous"></script>
  </body>
</html>