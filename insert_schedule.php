<?php 
    include('config/dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/header.php')?>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="display-1 text-center">Insert schedule</h1>

        <br>
        <a href="rooms/itb_room/itb_room_down.php" class="btn bg-secondary border-3 border-secondary-subtle mt-3 fw-bold text-light" style="border-radius: 20px; width: 100px;">back</a>
        <br><br>
        <form action="">
            <input type="text" id="" name="" class="form-control" placeholder="dito mag insert ng data">
            <br>
            <button type="submit" class="btn btn-success">Add Schedule</button>
        </form>
    </div>

    <!-- BOOSTRAP JS -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
