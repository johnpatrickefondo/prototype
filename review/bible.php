
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
                            <i class="fas fa-bell"></i>
                        </a></li>
                    <li><a href="/upc_prototype/login.php">
                            <i class="fas fa-sign-out-alt"></i>

                        </a>

                    </li>
                </ul>
            </div>
        </div>

        <div class="sidebar">
            <ul>
                <li><a href="/upc_prototype/homepage.php">
                        <span class="icon"><i class="fas fa-rss-square"></i></span>
                        <span class="title">FEED</span></a></li>
                <li><a href="#">
                        <span class="icon"><i class="fas fa-book"></i></span>
                        <span class="title">BIBLE</span></a></li>
                <li><a href="/upc_prototype/upload_view.php">
                        <span class="icon"><i class="fas fa-file-alt"></i></span>
                        <span class="title">FILES</span></a></li>
                
            </ul>
        </div>

        <div class="main_container">
            <div class="item">
                <!-- Embedded Bible. https://biblia.com/plugins/embeddedbible -->
                <biblia:bible layout="normal" resource="kjv1900" width="100%" height="510" historyButtons="false" resourcePicker="false" shareButton="false" startingReference="Ge1.1"></biblia:bible>
                <!-- If you’re including multiple Biblia widgets, you only need this script tag once -->
                <script src="//biblia.com/api/logos.biblia.js"></script>
                <script>logos.biblia.init();</script>
            </div>
        </div>
</div>
</body>
</html>