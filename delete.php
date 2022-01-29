<?php
    include('dbcon.php');
    $id=$_GET['id'];

    $mysqli -> query("delete from books where BookID='$id'");
    header('location:index.php');

?>