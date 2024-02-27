<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Siswa</title>
</head>
<body>
<table>
	<thead>
		<tr>
			<td>Nama Siswa</td>
			<td>Jenis Kelamin</td>
			<td>No Telepon</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($oke as $key ): ?>
			<tr>
				<td>
					<?= $key['nama_siswa'];?>
				</td>
				<td>
					<?= $key['jenis_kelamin'];?>
				</td>
				<td>
					<?= $key['no_telepon'];?>
				</td>
			</tr>
			<?php endforeach;?>
	</tbody>
</table>
</body>
</html>