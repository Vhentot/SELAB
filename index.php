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
	<h1>Welcome To Pastry chef Management System. Add new a new chef!</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="Username">Username</label> 
			<input type="text" name="username">
		</p>
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName">
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="lastName">
		</p>
		<p>
			<label for="firstName">Date of Birth</label> 
			<input type="date" name="dateOfBirth">
		</p>
		<p>
			<label for="firstName">Specialization</label> 
			<input type="text" name="specialization">
			<input type="submit" name="insertpastrychefBtn">
		</p>
	</form>
	<?php $getAllPastrychef = getAllPastrychef($pdo); ?>
	<?php foreach ($getAllPastrychef as $row) { ?>
	<div class="container" style="border-style: solid; width: 50%; height: 300px; margin-top: 20px;">
		<h3>Username: <?php echo $row['username']; ?></h3>
		<h3>FirstName: <?php echo $row['first_name']; ?></h3>
		<h3>LastName: <?php echo $row['last_name']; ?></h3>
		<h3>Date Of Birth: <?php echo $row['date_of_birth']; ?></h3>
		<h3>Specialization: <?php echo $row['specialization']; ?></h3>
		<h3>Date Added: <?php echo $row['date_added']; ?></h3>

S
		<div class="editAndDelete" style="float: right; margin-right: 20px;">
			<a href="viewprojects.php?pastry_chef_id=<?php echo $row['pastry_chef_id']; ?>">View Pastry</a>
			<a href="editpastry_chef.php?pastry_chef_id=<?php echo $row['pastry_chef_id']; ?>">Edit</a>
			<a href="deletepastry_chef.php?pastry_chef_id=<?php echo $row['pastry_chef_id']; ?>">Delete</a>
		</div>


	</div> 
	<?php } ?>
</body>
</html>