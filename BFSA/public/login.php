<?php

use classes\User;

include '../includes/header.php';
include '../config/db.php';
require_once '../classes/User.php';
include '../includes/head.html';

global $pdo;
$user = new User($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $usernameOrEmail = $_POST['username_or_email'];
    $password = $_POST['password'];

    echo "<p>Username/Email: " . htmlspecialchars($usernameOrEmail) . "</p>";
    echo "<p>Password: " . htmlspecialchars($password) . "</p>";

    $loggedInUser = $user->login($usernameOrEmail, $password);

    if ($loggedInUser) {
        echo "<p>Login successful. Redirecting to profile...</p>";
        $_SESSION['user_id'] = $loggedInUser['id'];
        $_SESSION['username'] = $loggedInUser['username'];
        header("Location: profile.php");
        exit();
    } else {
        echo "<p>Login failed. Please check your credentials.</p>";
    }
}
?>

<main>
    <h1>User Login</h1>
    <form action="login.php" method="POST">
        <label for="username_or_email">Username or Email:</label>
        <input type="text" id="username_or_email" name="username_or_email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit" name="login" class="btn btn-primary">Login</button>
    </form>
</main>

<?php include '../includes/footer.php'; ?>
