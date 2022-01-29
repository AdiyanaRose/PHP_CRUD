<?php
include('dbcon.php');
include('index.html');

?>
<html>

<body>
	<div class="container mt-3">
		<h2>BOOKS</h2>
		<form method="post" action="add.php" enctype="multipart/form-data">
			<div class="mb-3 mt-3">
				<label for="title">Title</label>
				<input type="text" id="tile" name="Title">
			</div>
			<div class="mb-3">
				<label for="author">Author</label>
				<input type="text" id="author" name="Author">
			</div>
			<div class="mb-3">
				<label for="publisherName">Publisher Name</label>
				<input type="text" id="publisherName" name="PublisherName">
			</div>
			<div class="mb-3">
				<label for="copyrightYear">Copyright Year</label>
				<input type="text" id="copyrightYear" name="CopyrightYear">
			</div>
			<div class="mb-3">
				<label for="uploadfile">Upload Image</label>
				<input type="file" name="uploadfile" id="uploadfile" />
			</div>
			<button type="submit" name="submit" value="add" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>

</html>

<table>
	<?php
	$query = $mysqli->query("select * from books");
	$rows = $query->fetch_array();
	?>