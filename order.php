<!doctype html>
<html lang="en">
  <head>
    <titl>Order page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <header><?php include'header.php';?></header>

      <!-- back to dashboarde -->
      <a href="adminDashboard.php"><i class="fas fa-angle-double-left display-4 mt-3"></i></a>
      <div class="container-fluid">

      <main>
        <!-- order list and just show the table nobody can not change except changeing db -->
        <div class="container-flud">
            <div class="card w-50 mx-auto mt-5 mb-5">
                <div class="card-header">
                    <h3 class="text-center">ORDER LIST</h3>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <th>ORDER ID</th>
                            <th>ITEM ID</th>
                            <th>USER ID</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>xxxx</td>
                                <td>yyyy</td>
                                <td>zzzz</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </main>
      <footer><?php include 'footer.php';?></footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>