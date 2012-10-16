<!DOCTYPE html>
<html lang="en">
	<head>
   		<title><?= $title ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link href="assets/css/default.css" rel="stylesheet" type="text/css" />

		<?= $_styles ?>
	</head>

	<body>
		<div class="container">
			<div class="row-fluid">
				<div class="span9">
					<!--Main content-->
					<?= $content ?> 

					<div id="footer">
						The original resources of the game are, and remain the property of Mojang AB.
						Given the lack of information provided by Mojang AB regarding the licensing of these resources, any use, dissemination or reproduction of them is done without any warranty regarding their legality.
					</div>
				</div>

				<div class="span3">
					<!--Sidebar content-->
					<?= $sidebar ?>
				</div>				
			</div>
		</div>

		<?= $_scripts ?>
	</body>
</html>