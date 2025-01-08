<?php
//session_start();
use classes\User;
include '../includes/header.php';
include '../includes/head.html';
include '../config/db.php';
require_once '../classes/User.php';

global $pdo;

$User = new User($pdo);



$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
$userProfile = $User->getUserProfile($userId);




if (isset($_SESSION['message'])) {
    echo "<p>" . htmlspecialchars($_SESSION['message']) . "</p>";
    unset($_SESSION['message']);
}

?>
<main>
    <h1>User Profile</h1>
    <h2>Username: <?php echo htmlspecialchars($userProfile['username']); ?></h2>
    <p>Email: <?php echo htmlspecialchars($userProfile['email']); ?></p>
    <p>Role: <?php echo htmlspecialchars($userProfile['role']); ?></p>
    <p>Avatar: <img src="<?php echo htmlspecialchars($userProfile['avatar']); ?>" alt="Avatar"></p>

    <a href="edit_profile.php" class="btn btn-primary">Edit Profile</a>
</main>

<?php include '../includes/footer.php'; ?>
