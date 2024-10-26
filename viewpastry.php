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
	<a href="index.php">Return to home</a>
	<?php $getAllInfoBypastrychefID = getAllInfoBypastry_chef_id($_GET['pastry_chef_id']); ?>
	<h1>Username: <?php echo $getAllInfoBypastrychefID['username']; ?></h1>
	<h1>Add New Project</h1>
	<form action="core/handleForms.php?pastry_chef_id=<?php echo $_GET['pastry_chef_id']; ?>" method="POST">
		<p>
			<label for="firstName">pastry name</label> 
			<input type="text" name="pastryname">
		</p>
		<p>
			<label for="firstName">Ingridients used</label> 
			<input type="text" name="Ingridients used">
			<input type="submit" name="insertIngridients_usedBtn">
		</p>
	</form>

	<table style="width:100%; margin-top: 50px;">
	  <tr>
	    <th>Project ID</th>
	    <th>pastry name</th>
	    <th>Ingridients used</th>
	    <th>Project Owner</th>
	    <th>Date Added</th>
	    <th>Action</th>
	  </tr>
	  <?php $getPastrybypastrychef = getPastry_chefid($pdo, $_GET['pastry_chef_id']); ?>
	  <?php foreach ($getPastrybypastrychef as $row) { ?>
	  <tr>
	  	<td><?php echo $row['project_id']; ?></td>	  	
	  	<td><?php echo $row['project_name']; ?></td>	  	
	  	<td><?php echo $row['ingridients_used']; ?></td>	  	
	  	<td><?php echo $row['project_owner']; ?></td>	  	
	  	<td><?php echo $row['date_added']; ?></td>
	  	<td>
	  		<a href="editproject.php?project_id=<?php echo $row['project_id']; ?>&pastry_chef_id=<?php echo $_GET['pastry_chef_id']; ?>">Edit</a>

	  		<a href="deleteproject.php?project_id=<?php echo $row['project_id']; ?>&pastry_chef_id=<?php echo $_GET['pastry_chef_id']; ?>">Delete</a>
	  	</td>	  	
	  </tr>
	<?php } ?>
	</table>

	
</body>
</html>