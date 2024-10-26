<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php $getPastryChefID = $getPastryChefID($pdo, $_GET['pastry_id']); ?>
	<h1>Are you sure you want to delete this pastry?</h1>
	<div class="container" style="border-style: solid; height: 400px;">
		<h2>pastry Name: <?php echo $getPastryChefID['pastry_name'] ?></h2>
		<h2>ingridient Used: <?php echo $getPastryChefID['ingridient_used'] ?></h2>
		<h2>pastry Owner: <?php echo $getPastryChefID['pastry_owner'] ?></h2>
		<h2>Date Added: <?php echo $getdate_addedID['date_added'] ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">

			<form action="core/handleForms.php?pastry_id=<?php echo $_GET['pastry_id']; ?>&pastry_chef_id=<?php echo $_GET['pastry_chef_id']; ?>" method="POST">
				<input type="submit" name="deletepastryBtn" value="Delete">
			</form>			
			
		</div>	

	</div>
</body>
</html>
