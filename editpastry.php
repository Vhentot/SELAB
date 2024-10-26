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
	<a href="viewpastrys.php?pastry_chef_id=<?php echo $_GET['pastry_chef_id']; ?>">
	View The pastrys</a>
	<h1>Edit the pastry!</h1>
	<?php $getPastryChefID = getPastryChefID($pdo, $_GET['pastry_id']); ?>
	<form action="core/handleForms.php?pastry_id=<?php echo $_GET['pastry_id']; ?>
	&pastry_chef_id=<?php echo $_GET['pastry_chef_id']; ?>" method="POST">
		<p>
			<label for="firstName">pastry Name</label> 
			<input type="text" name="pastryName" 
			value="<?php echo $getPastryChefID['pastry_chef_name']; ?>">
		</p>
		<p>
			<label for="ingridients used">ingridients Used</label> 
			<input type="text" name="ingridientsUsed" 
			value="<?php echo $getPastryChefID['ingridients_used']; ?>">
			<input type="submit" name="editpastryBtn">
		</p>
	</form>
</body>
</html>
