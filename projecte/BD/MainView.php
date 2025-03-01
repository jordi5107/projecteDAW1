<!doctype html>
<html lang="ca">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>
 
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
		<title>Treballadors</title>
	</head>
	<body>
		<div class="container">
			<div class="py-5 text-center">
				<h1>Treballadors</h1>
			</div>
			<div class="table-responsive-sm">
				<table class="table table-striped">
					<thead class="thead-dark">
						<tr>
							<th class="align-middle">ID</th>
							<th class="align-middle">NOM</th>
							<th class="align-middle">COGNOMS</th>
							<th class="align-middle">DATA NAIXEMENT</th>
							<th class="align-middle">FEINA</th>
							<th class="align-middle text-right"><a class="btn btn-primary" role="button" href="?action=new"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg></a></th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($result as $row) {
								echo "<tr>";
								echo "<td class='align-middle'>" . $row['id'] . "</td>";
								echo "<td class='align-middle'>" . $row['Nom'] . "</td>";
								echo "<td class='align-middle'>" . $row['Cognom'] . "</td>";
								echo "<td class='align-middle'>" . date('d/m/Y', strtotime($row['Data_naixement'])) . "</td>";
								echo "<td class='align-middle'>" . $row['Feina'] . "</td>";
								echo "<td class='align-middle'>";
								echo "<a class='btn btn-success' role='button' href='?action=show&id=".$row['id']."'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class'bi bi-eye-fill' viewBox='0 0 16 16'>
  <path d='M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z'/>
  <path d='M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z'/>
</svg></a> ";
								echo "<a class='btn btn-warning' role='button' href='?action=edit&id=".$row['id']."'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
</svg></a> ";
								echo "<a class='btn btn-danger' role='button' href='?action=delete&id=".$row['id']."'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
</svg></a> ";
								echo "</td>";
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
			<div class="text-right">
						<a class="btn btn-primary" role="button" href="../index.php">Tornar a la pàgina principal</a>
			</div>
		</div>
	</body>
</html>
