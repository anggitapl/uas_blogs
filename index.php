<?php 
include 'conn.php'; 
include 'conf.php'; 
?>

<!DOCTYPE html> 
<html> 
<head> 
	<title>PDO CRUDSRUD</title> 
	<link rel="stylesheet" type="text/css" href="assets/css/css.css"> 
</head> 
<body> 
	<div class="top-gray"></div>
	<div class="header"> 
		<div class="big-logo">Latihan CRUDSRUD </div>
		<?php include 'menu.php';?> 
	</div> 

	<div class="content"> 
		<div class="container"> 
		<?php 

		if(!is_null(get('p'))){ 
			switch (get('p')) { 
				case 'Blog': 
				inc('Blog'); 
				break;

				case 'crud': switch (get('m')) { 
					case 'home': 
					inc('tampilan/crud/all'); 
					break; 
					case 'add': 
					inc('tampilan/crud/add'); 
					break; 
					case 'edit': 
					inc('tampilan/crud/edit'); 
					break; 
					default: 
					inc('tampilan/crud/all'); 
					break; 
				}

				break; 
				default: 
				inc('home'); 
				break;
				} 
			}else{ 
				inc('home'); 
			} 
			?>
			</div> 
		</div> 
	</body>
</html>
