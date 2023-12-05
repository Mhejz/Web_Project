<!DOCTYPE html>
<html lang="en">
<head>
<?php include('../../include/header.php')?>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .room {
            border: 1px solid #ccc;
            padding: 15px;
            text-align: center;
            cursor: pointer;
        }
        .room.active {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body class="container">
    <h1 class="display-1 text-center">ITNB ROOM DOWN</h1>
    <a href="../../floor/itnb_floor.php" class="btn bg-secondary border-3 border-secondary-subtle mt-3 fw-bold text-light" style="border-radius: 20px; width: 100px;">back</a>
    <br><br>
    <div class="row">
       
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room" onclick="window.location.href='your_link_for_ROOM_1';">
                <h1 class="display-5 text-center">ROOM 1</h1>     
            </div>
        
    
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room" onclick="window.location.href='your_link_for_ROOM_1';">
                <h1 class="display-5 text-center">ROOM 2</h1>
            </div>
       
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room" onclick="window.location.href='your_link_for_ROOM_1';">
                <h1 class="display-5 text-center">ROOM 3</h1>
            </div>
        
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room" onclick="window.location.href='your_link_for_ROOM_1';">
                <h1 class="display-5 text-center">ROOM 4</h1>     
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room" onclick="window.location.href='your_link_for_ROOM_1';">
                <h1 class="display-5 text-center">ROOM 5</h1>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room" onclick="window.location.href='your_link_for_ROOM_1';">
                <h1 class="display-5 text-center">ROOM 6</h1>
            </div>
    </div>
    
    <!-- BOOTSTRAP JS -->
    <link rel="stylesheet" href="../assets/js/bootstrap.min.js">
    <!-- CUSTOM JS -->
    <script>
        $(document).ready(function () {
            $(".room").click(function () {
                $(".room").removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>
</body>
</html>