<?php
	//Database Connection
	$conn=new PDO('mysql:host=localhost; dbname=upc_prototype', 'root', '') or die(mysql_error());
	//form submit function for upload
	if(isset($_POST['submit']))
	{
	  $name=$_FILES['file']['name'];
	  $size=$_FILES['file']['size'];
	  $type=$_FILES['file']['type'];
	  $temp=$_FILES['file']['tmp_name'];
	  $fname = date("YmdHis").'_'.$name;
	  //check if filename exist
	  $chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
	  if($chk)
	  {
	    $i = 1;
	    $c = 0;
		while($c == 0)
		{
	    	$i++;
	    	$reversedParts = explode('.', strrev($name), 2);
	    	//new filename
	    	$tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
	    	//check if new filename still exist in the database
	    	$chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
	    	if($chk2 == 0)
	    	{
	    		$c = 1;
	    		$name = $tname;
	    	}
	    }
	  }
	 $move = move_uploaded_file($temp,"upload/".$fname);
	 if($move)
	 {
	 	$query=$conn->query("insert into upload(name,fname)values('$name','$fname')");
		if($query)
		{
			header("location:/upc/upload_view.php");
		}
		else
		{
			die(mysql_error());
		}
	 }
	}
?> 