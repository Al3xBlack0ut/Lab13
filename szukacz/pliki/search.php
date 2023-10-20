<?php
	$conn = mysqli_connect('localhost', 'root', '', 'lab');

	$keyword = $_POST['keyword'];

	$q = "SELECT * FROM filmy WHERE tytul LIKE '%$keyword%' OR opis LIKE '%$keyword%' LIMIT 5";
	

	$result = mysqli_query($conn, $q);

	$ile = mysqli_num_rows($result);

	$max = "SELECT * FROM filmy WHERE tytul LIKE '%$keyword%' OR opis LIKE '%$keyword%'";
	

	$maxR = mysqli_query($conn, $max);

	$maksymalnie = mysqli_num_rows($maxR);


	if($keyword != ""){
		if (mysqli_num_rows($result) > 0) {
			print "<p><b>Znaleziono filmów</b>: $maksymalnie<br>";
			print "<b>Wyświetlono</b>: $ile <span style='color: gray'>(Max 5)</span></p><hr><br>";
			print '<div class="films">';
			while ($row = mysqli_fetch_row($result)) {
				print '<div class="film">';
				print '<h2>'.$row[1].'</h2>';
				print '<video controls poster="pliki/miniatura.jpg">';
				print '<source src="pliki/' . $row[3] . '" type="video/mp4">';
				print '</video>';
				print '</div>';
			}
			print '</div>';
		} else {
			print '<p>Brak wyników</p>';
		}
	}
	mysqli_close($conn);
?>
