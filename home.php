<?php
session_start();

if(!isset($_SESSION['username'])){
    header('location:index.php');
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="the_css/home.css">
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid bg-secondary">
            <div class="container">
                <h2 class="text-center text-white text-secondary">Welcome <?php echo $_SESSION['username']?></h2>
                <h4 class="text-center" style="padding-bottom: 10px; ">Your amazing pictures!</h4>
                <form action="add_images.php">
                    <div class="form-group">
                        <label for="add" class="text-uppercase text-dark" style="padding-bottom: 5px;">Add Image</label>
                        <input id="add" type="file" class="form-control" style="width: 400px;">
                        <button type="submit" class="btn btn-primary" style="padding-top: 10px;">Add</button>
                    </div>
                </form>
            </div>
            
        </div>
            
        
        
        
    </body>
</html>