<html>

<head>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>

<body>

	<p> Entered the newsfeed view. </p>

	<table class="table table-striped">

		<thead>

			<th>Time</th>
			<th>Alumni ID</th>
			<th>News</th>

		</thead>

		<tbody>

			<?php foreach($data as $row): ?>

			<tr>


				<td><?php echo $row['activitytime']; ?></td>
				<td><?php echo $row['alumid']; ?></td>
				<td><?php echo $row['newsitem']; ?></td>

			</tr>

		<?php endforeach ?>

	</tbody>

</table>

</body>

</html>