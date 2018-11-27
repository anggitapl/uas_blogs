<?php 
$hasil = $koneksi->prepare("SELECT * FROM artikel WHERE `id` = '".get('id')."'"); 

$hasil->execute(); 
$data = $hasil->fetch(PDO::FETCH_ASSOC); 
?> 

<form method="POST" action="proses/sekolah/update.php" 
enctype="multipart/form-data"> 
<input type="hidden" name="id" value="<?php echo $data['id'];?>"> 
<table> 
	<tr> <td>Judul</td> 
		<td><input type="text" name="Judul" value=" 
			<?php echo $data['Judul'];?>"></td> 
		</tr> 

		<tr> <td>Konten</td> 
			<td><input type="text" name="Konten" value=" 
				<?php echo $data['Konten'];?>"></td> 
			</tr> 

			<tr> <td>Penulis</td> 
			<td><input type="text" name="Penulis" value=" 
				<?php echo $data['Penulis'];?>"></td> 
			</tr> 
			<tr> 
				<td></td> <td><button type="submit"> Update</button></td> 
			</tr> 
		</table> 
	</form>

			
