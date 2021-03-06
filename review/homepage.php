<?php 

session_start();
if(!isset($_SESSION['username'])){
    header('location: login.php');
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> CUBE </title>
	<link rel="stylesheet" type="text/css" href="/upc_prototype/css/styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        /*$(document).ready(function()
        {
            $(".hamburger").click(function()
            {
                $(".wrapper").toggleClass("collapse");
            });
        });*/
    </script>
</head>
<body>
<div class="wrapper">
        <div class="top_navbar">
            <div class="hamburger">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
            <div class="top_menu">
                <div class="logo">UNITED PENTECOSTAL CHURCH - BICUTAN</div>
                <ul>
                    <li><a href="#">
                            <i class="fas fa-search"></i></a></li>
                    <li><a href="#">
                            <i class="fas fa-bell"></i></a></li>
                    <li><a href="/upc_prototype/logout.php">
                            <i class="fas fa-sign-out-alt"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="sidebar">
            <ul>
                <li><a href="#">
                        <span class="icon"><i class="fas fa-rss-square"></i></span>
                        <span class="title">FEED</span></a></li>
                <li><a href="/upc_prototype/bible.php">
                        <span class="icon"><i class="fas fa-book"></i></span>
                        <span class="title">BIBLE</span></a></li>
                <li><a href="/upc_prototype/upload_view.php">
                        <span class="icon"><i class="fas fa-file-alt"></i></span>
                        <span class="title">FILES</span></a></li>
                
            </ul>
        </div>

        <div class="main_container">
            <h1> Welcome, <?php echo $_SESSION['username']; ?> </h1>
           <div class="item">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
            </div>
            <div class="item">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
            </div>
            <div class="item">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
            </div>
        </div>
</div>
</body>
</html>