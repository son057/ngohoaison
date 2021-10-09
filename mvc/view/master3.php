<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Store Content</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/5a63344f2e.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="container">
        <div class="row">
            <div class="col-md-4"><img src="img/Son_logo.png" alt="logo"></div>
        </div>
    </header>
    <div class="container">
    <?php include_once PATH_TO_VIEW.$viewname.'.php';?>
    </div>

    <footer class="container-fluid row bg-dark">
    @copyright 2020
    </footer>
</body>
</html>