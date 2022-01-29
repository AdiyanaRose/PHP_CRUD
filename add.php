<?php
include('dbcon.php');

if (isset($_POST['submit'])) {

	$Title = $_POST['Title'];
	$Author = $_POST['Author'];
	$PublisherName = $_POST['PublisherName'];
	$CopyrightYear = $_POST['CopyrightYear'];


	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "image/".$filename;

	$mysqli->query("insert into books (Title,Author,PublisherName,CopyrightYear,filename)
			values('$Title','$Author','$PublisherName','$CopyrightYear','$filename')");
  header('location:index.php');
}

?>
