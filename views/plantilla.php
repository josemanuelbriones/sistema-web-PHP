<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo COMPANY ?></title>

	<?php include "./views/inc/link.php"; ?>


</head>
<body>
	<?php
		$peticionAjax = false;
		require_once "./controllers/viewController.php";
		$viewController = new viewController();
		$vista = $viewController->getViewController();
		
		if ($vista == "login" || $vista == "404") {
			require_once "./views/container/" . $vista . "-view.php";
			
		}else{

		
	?>	

	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<?php include "./views/inc/navLateral.php"; ?>

		<!-- Page content -->
		<section class="full-box page-content">
            <?php
				include "./views/inc/navBar.php" ;
				include "$vista";
			
			?>
			

		</section>
	</main>
	
	<?php 
		}
		include "./views/inc/script.php" 
	
	?>
	
</body>
</html>