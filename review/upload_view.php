
<?php
$conn=new PDO('mysql:host=localhost; dbname=upc_prototype', 'root', '') or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['file']['name'];
  $size=$_FILES['file']['size'];
  $type=$_FILES['file']['type'];
  $temp=$_FILES['file']['tmp_name'];
  $fname = date("YmdHis").'_'.$name;
  $chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
  if($chk){
    $i = 1;
    $c = 0;
    while($c == 0){
        $i++;
        $reversedParts = explode('.', strrev($name), 2);
        $tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
        $chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
        if($chk2 == 0){
            $c = 1;
            $name = $tname;
        }
    }
}
 $move =  move_uploaded_file($temp,"upload/".$fname);
 if($move){
    $query=$conn->query("insert into upload(name,fname)values('$name','$fname')");
    if($query){
    header("location:upload_view.php");
    }
    else{
    die(mysql_error());
    }
 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> CUBE </title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/upc_prototype/css/styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
<body>
    <!--<script>
        $(document).ready(function()
        {
            $(".hamburger").click(function()
            {
                $(".wrapper").toggleClass("collapse");
            });
        });
    </script>-->
</head>
    
	
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
                <li><a href="/upc_prototype/bible.php">
                        <span class="icon"><i class="fas fa-book"></i></span>
                        <span class="title">BIBLE</span></a></li>
                <li><a href="#">
                        <span class="icon"><i class="fas fa-file-alt"></i></span>
                        <span class="title">FILES</span></a></li>
                
            </ul>
        </div>

        <div class="main_container">
        <div class="item">
                        <h3><b>Files and Presentations</b></h3>
                <br>
                <br>
                <form enctype="multipart/form-data" action="" name="form" method="post">
                    Select File
                        <input type="file" name="file" id="file" /></td>
                        <input type="submit" name="submit" id="submit" value="Submit">
                </form>
                <br>
                <br>
                <!--  Uploaded File list -->
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th width="10%" align="left">Files</th>
                            <th width="10%" align="left">Action</th>  
                        </tr>
                    </thead>
                    <?php
                    $conn=new PDO('mysql:host=localhost; dbname=upc_prototype', 'root', '') or die(mysql_error());
                    $query=$conn->query("select * from upload order by id asc");
                    while($row=$query->fetch()){
                        $name=$row['name'];
                    ?>
                    <tr>
                        <td>
                            &nbsp;<?php echo $name ;?>
                        </td>
                        <td>
                            <button class="alert-success"><a href="download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Download</a></button>
                        </td>
                    </tr>
                    <?php }?>
                </table>            
        </div>
        </div>
</div>
</body>
</html>