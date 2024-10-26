<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getpastry_chefID = getpastry_chefID($pdo, $_GET['pastry_chef_id']); ?>
	<div class="container" style="border-style: solid; height: 400px;">
		<h2>Username: <?php echo $getpastry_chefID['username']; ?></h2>
		<h2>FirstName: <?php echo $getpastry_chefID['first_name']; ?></h2>
		<h2>LastName: <?php echo $getpastry_chefID['last_name']; ?></h2>
		<h2>Date Of Birth: <?php echo $getpastry_chefID['date_of_birth']; ?></h2>
		<h2>Specialization: <?php echo $getpastry_chefID['specialization']; ?></h2>
		<h2>Date Added: <?php echo $getpastry_chefID['date_added']; ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?pastry_chef_id=<?php echo $_GET['pastry_chef_id']; ?>" method="POST">
				<input type="submit" name="deletepastrychefBtn" value="Delete">
			</form>			
		</div>	

	</div>
</body>
</html>
