<!doctype html>
<html lang="en">
  <head>
    <title>Event page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <header><?php include 'header.php'?></header>
        <!-- back to dashboarde -->
        <a href="adminDashboard.php"><i class="fas fa-angle-double-left display-4 mt-3"></i></a>
        <div class="container-fluid">

      <main>
      <!-- add event -->
        <div class="container-fluid">
            <div class="card w-50 mx-auto mt-5">
                <div class="card-header">
                    <h3 class="text-center">EVENTS</h3>
                </div>
                <form action="" method="POST" class="">
                    <div class="card-body">
                        <label for="">EVENT NAME:</label>
                        <input type="text" name="event_name" class="form-control w-100">
                        <label for="" class="mt-3">EVENT OBJECT:</label>
                        <textarea name="event_object" class="w-100" id="" cols="30" rows="10" maxlength="255" placeholder="EX) We will have the event on this weekend...etc"></textarea>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" name="add_event" value="ADD" class="btn btn-primary w-75">
                    </div>
                </form>
            </div>
            <hr class="w-50 mx-auto mt-5">
            <!-- event table -->
            <section class="mt-3">
                <h3 class="text-center">EVENT LIST</h3>
                <table class="table table-hover w-75 mx-auto"> 
                    <thead class="table-dark">
                            <th>ID</th>
                            <th>NAME</th>
                            <th>OBJECT</th>
                            <th colspan="2"></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>summer sale </td>
                            <td>We are going to discount some products which are realtive to SUMMER</td>
                            <td><a href="" class="btn btn-success ">EDIT</a></td>
                            <td><a href="" class="btn btn-danger ">DELETE</a></td>
                        </tr>
                    </tbody>
                </table >
            </section>
        </div>
      </main>
      <footer><?php include 'footer.php';?></footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>