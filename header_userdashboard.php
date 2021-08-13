<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="css/header_dashboard.css">
</head>
<body>
    <main class="header-main">
        <div class="header">
            <?php include 'header.php';?>
        </div>
        <div class="center-box">
            <p>
                <strong>Enjoy your shopping and have a wonderful time!</strong>
            </p>
            <div class="search-box">
                <form action="" method="POST">
                        <input type="text" name="search" class="lope" >
                        <button type="submit" name="search"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </main>
    <script src="https://kit.fontawesome.com/8da6dac468.js" crossorigin="anonymous"></script>
</body>
</html>