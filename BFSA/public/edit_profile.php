<?php

session_start();
use classes\User;

//include '../includes/header.php';
include '../config/db.php';
include '../includes/head.html';
require_once '../classes/User.php';


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

global $pdo;

$user = new User($pdo);

$user_id = $_SESSION['user_id'];
$userData = $user->getUserById($user_id);

if (!$userData) {
    echo "User not found.";
    exit();
}

$username = $userData['username'];
$email = $userData['email'];

// Zaktualizowanie profilu użytkownika
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_profile'])) {
    $updatedUsername = $_POST['username'];
    $updatedEmail = $_POST['email'];
    $avatarPath = '';

    // Obsługa uploadu avatara
    if (!empty($_FILES['avatar']['name'])) {
        $avatarPath = 'C:\Users\ASUS\PhpstormProjects\BFSA\images' . basename($_FILES['avatar']['name']);
        move_uploaded_file($_FILES['avatar']['tmp_name'], $avatarPath);
    }

    // Zaktualizowanie profilu użytkownika
    $user->updateProfile($user_id, $updatedUsername, $updatedEmail, $avatarPath);

    $_SESSION['message'] = "Profil został zaktualizowany.";

    header("Location: profile.php");
    exit();
}

// Zmiana hasła
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_password'])) {
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Sprawdzanie, czy obecne hasło jest poprawne
    if (!$user->verifyPassword($user_id, $currentPassword)) {
        echo "<p>Current password is incorrect.</p>";
    } elseif ($newPassword !== $confirmPassword) {
        echo "<p>New passwords do not match.</p>";
    } else {
        // Aktualizacja hasła
        $user->updatePassword($user_id, $newPassword);

        // Ustawienie wiadomości do wyświetlenia w sesji
        $_SESSION['message'] = "Hasło zostało zaktualizowane.";

        // Debug: wyświetlenie wiadomości przed przekierowaniem
        echo "Message before redirect: " . $_SESSION['message'];

        header("Location: profile.php");
        exit();
    }
}
?>

<main>
    <h1>Edit Profile</h1>
    <form action="edit_profile.php" method="POST" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required><br>

        <label for="avatar">Avatar:</label>
        <input type="file" id="avatar" name="avatar"><br>


        <button type="submit" name="update_profile" class="btn btn-primary">Update Profile</button>
    </form>

    <hr>

    <h2>Change Password</h2>
    <form action="edit_profile.php" method="POST">
        <label for="current_password">Current Password:</label>
        <input type="password" id="current_password" name="current_password" required><br>

        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required><br>

        <label for="confirm_password">Confirm New Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>

        <button type="submit" name="change_password" class="btn btn-danger">Change Password</button>
    </form>
</main>

<?php include '../includes/footer.php'; ?>
