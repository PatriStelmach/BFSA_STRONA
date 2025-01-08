<?php
namespace classes;

class User
{
private $pdo;

public function __construct($pdo) {
$this->pdo = $pdo; // Ustawienie właściwości PDO
}

public function getUserProfile($userId) {
if ($userId === null) {
return null;
}

$query = "SELECT * FROM users WHERE id = :userId";

$stmt = $this->pdo->prepare($query); // Zamiast $this->db używamy $this->pdo

$stmt->bindParam(':userId', $userId, \PDO::PARAM_INT);

$stmt->execute();

// Pobranie wyniku
$userProfile = $stmt->fetch(\PDO::FETCH_ASSOC);

if ($userProfile)
{
    return $userProfile;
}
else
{
    return null;
}
}



    public function getUserById($userId)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function updateProfile($user_id, $username, $email, $avatar_path)
    {
        $sql = "UPDATE users SET username = :username, email = :email, avatar = :avatar_path WHERE id = :user_id";

        // Dodajemy avatar tylko wtedy, gdy został zaktualizowany
        if (!empty($avatar_path)) {
            $sql .= ", avatar = ";
        }

        $sql .= " WHERE id = :user_id";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':user_id', $user_id);

        if (!empty($avatar_path)) {
            $stmt->bindParam('/C:\Users\ASUS\PhpstormProjects\BFSA\images', $avatar_path);
        }

        return $stmt->execute();
    }


    public function login($usernameOrEmail, $password)
    {

        $sql = "SELECT * FROM users WHERE username = :username OR email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':username', $usernameOrEmail);
        $stmt->bindParam(':email', $usernameOrEmail);
        $stmt->execute();
        $user = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                return $user;
            } else {
                echo "<p>Incorrect password.</p>";
            }
        } else {
            echo "<p>User not found.</p>";
        }
        return false;
    }


    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit();
    }

    public function verifyPassword($user_id, $password)
    {
        $stmt = $this->pdo->prepare("SELECT password FROM users WHERE id = ?");
        $stmt->execute([$user_id]);
        $hashed_password = $stmt->fetchColumn();

        return password_verify($password, $hashed_password);
    }

    public function updatePassword($user_id, $new_password)
    {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $stmt = $this->pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
        return $stmt->execute([$hashed_password, $user_id]);
    }


}

?>
