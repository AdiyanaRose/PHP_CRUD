<?php
include 'dbcon.php';
include('index.html');

$id = $_GET['id'];
?>
<html>

<body>
    <div class="container mt-3">
        <h2>BOOKS</h2>
        <form method="post" enctype="multipart/form-data">
            <?php $books_query = $mysqli->query("select * from books where BookID='$id'");
            $books_rows = $books_query->fetch_array(MYSQLI_ASSOC);
            ?>
            <div class="mb-3 mt-3">
                <label for="title">Title</label>
                <input type="text" name="Title" value="<?php echo $books_rows['Title'];  ?>">
            </div>
            <div class="mb-3">
                <label for="author">Author</label>
                <input type="text" name="Author" value="<?php echo $books_rows['Author'];  ?>">
            </div>
            <div class="mb-3">
                <label for="publisherName">Publisher Name</label>
                <input type="text" name="PublisherName" value="<?php echo $books_rows['PublisherName'];  ?>">
            </div>
            <div class="mb-3">
                <label for="copyrightYear">Copyright Year</label>
                <input type="text" name="CopyrightYear" value="<?php echo $books_rows['CopyrightYear']; ?>">
            </div>
            <div class="mb-3">
                <label for="uploadfile">Upload Image</label>
                <input type="file" name="uploadfile" value="<?php echo $books_rows['filename']; ?>">
            </div>
            <button type="submit" name="submit" value="save" class="btn btn-primary">Save</button>
        </form>
    </div>
</body>

</html>
<?php

if (isset($_POST['submit'])) {

    $Title = $_POST['Title'];
    $Author = $_POST['Author'];
    $PublisherName = $_POST['PublisherName'];
    $CopyrightYear = $_POST['CopyrightYear'];
    $filename = $_POST['filename'];

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "image/" . $filename;

    $mysqli->query("update books set Title='$Title',Author='$Author',PublisherName='$PublisherName',CopyrightYear='$CopyrightYear', filename='$filename' where BookID='$id'");
    header('location:index.php');
}
?>