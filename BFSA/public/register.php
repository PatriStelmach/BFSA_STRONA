<?php
global $pdo;
include '../includes/header.php';
include '../config/db.php';
require_once '../classes/User.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    echo "<p>Hashed Password: $hashedPassword</p>";

    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPassword);

    if ($stmt->execute()) {
        echo "<p>Registration successful. You can now <a href='login.php'>log in</a>.</p>";
    } else {
        echo "<p>Registration failed. Please try again.</p>";
    }
}
?>

<main>
    <h1>User Registration</h1>
    <form action="register.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit" name="register" class="btn btn-primary">Register</button>
    </form>
</main>

<?php include '../includes/footer.php'; ?>
