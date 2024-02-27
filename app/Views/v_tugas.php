<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tugas</title>
	
</head>
<body>
	
	<table border="1">
		<tr>
			<th>No</th>
			<th>username</th>
			<th>tempat_pengumpulan</th>
			<th>angka</th>
			<th>action</th>
		</tr>

		<?php
		$no=1;
		foreach ($saya as $tom) {

			?>

			<tr>
				<td><?= $no++ ?></td>
				<td><?php echo $tom->username ?></td>
				<td><?php echo $tom->tempat_pengumpulan ?></td>
				<td><?php 
				if($tom->level == 1) {
					echo "kamu";
				}else if ($tom->level == 2){
					echo "baik";
				}else{
					echo "123";
				}

				
			?> </td>
			<td>		
				<a href="<?php echo base_url('home/edit_tugas/'. $tom->id_tugas) ?>"><button class="btn btn-warning">Edit</button></a>
				<a href="<?php echo base_url('home/hapus_tugas/'. $tom->id_tugas) ?>"><button class="btn btn-info">Hapus</button></a>
				

			</td>
		</tr>
	<?php	}
	?>
</table>


</body>
</html>