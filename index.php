<?php
include('dbcon.php');
include('index.html');

?>
<html>

<body>
	<div class="container mt-3">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<td>Title</td>
						<td>Author</td>
						<td>PublisherName</td>
						<td>CopyrightYear</td>
						<td>Image</td>
						<td>Action</td>
					</tr>
				</thead>

				<?php
				$books_query = $mysqli->query("select * from books");
				while ($books_rows = $books_query->fetch_array()) {
				?>
					<tbody>
						<tr>
							<td><?php echo $books_rows['Title']; ?></td>
							<td><?php echo $books_rows['Author']; ?></td>
							<td><?php echo $books_rows['PublisherName']; ?></td>
							<td><?php echo $books_rows['CopyrightYear']; ?></td>
							<td><img src="image/<?php echo $books_rows['filename']; ?>" height="100" width="100"></td>
							<td><button type="button" class="btn btn-danger"><a href="delete.php<?php echo '?id=' . $books_rows['BookID']; ?>">delete</a></button>
								<button type="button" class="btn btn-info"><a href="edit.php<?php echo '?id=' . $books_rows['BookID']; ?>">Edit</a></button>
							</td>
						</tr>
					</tbody>

				<?php } ?>
			</table>
		</div>
	</div>

	<div class="container mt-3">
		<?php
		$books_query = $mysqli->query("select * from books");
		while ($books_rows = $books_query->fetch_array()) {
		?>
			<div class="card" style="width:400px">
				<img src="image/<?php echo $books_rows['filename']; ?>" height="100" width="100">
				<div class="card-body">
					<h4 class="card-title"><?php echo $books_rows['Title']; ?></h4>
					<p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
					<a href="#" class="btn btn-primary">See Profile</a>
				</div>
			</div>
		<?php } ?>

		<div class="row">
			<div class="col-sm-6 bg-primary text-white">50%</div>
			<div class="col-sm-6 bg-dark text-white">50%</div>
		</div>

	</div>


</body>

</html>

<table>
	<?php
	$query = $mysqli->query("select * from books");
	$rows = $query->fetch_array();
	?>