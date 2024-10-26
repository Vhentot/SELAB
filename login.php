<?php
require_once 'core/dbConfig.php'; // Ensure this points to your database configuration
require_once 'core/models.php'; // Include your models for database interaction

session_start(); // Start the session to manage user login state

if (isset($_POST['loginBtn'])) {
    // Collect input data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate user credentials
    $user = getUser Bypastry_chef($pdo, $username); // Assume this function retrieves a user by username

    if ($user && password_verify($password, $user['password'])) { // Assuming passwords are hashed
        $_SESSION['user_id'] = $user['pastry_chef_id']; // Store user ID in session
        $_SESSION['username'] = $user['username']; // Store username in session
        header("Location: index.php"); // Redirect to the main page
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}

function getUser ByUsername($pdo, $username) {
    try {
        $sql = "SELECT * FROM pastry_chef WHERE username = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        return null; // Return null on error
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pastry Chef Management System</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <h1>Login to Pastry Chef Management System</h1>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <form action="login.php" method="POST">
        <p>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </p>
        <p>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </p>
        <p>
            <input type="submit" name="loginBtn" value="Login">
        </p>
    </form>

    <p>Don't have an account? <a href="register.php">Register here</a></p> <!-- Link to registration page -->
</body>
</html>