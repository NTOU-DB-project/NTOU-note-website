<?php
// Include the database connection file
include("../../config/database.php");

// Start session
session_start();

$error = '';
$success = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Check if all fields are filled
    if (!empty($username) && !empty($password) && !empty($confirm_password)) {
        // Check if passwords match
        if ($password !== $confirm_password) {
            $error = "密碼與確認密碼不一致！";
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Use prepared statement to insert new user
            $stmt = $conn->prepare("INSERT INTO Account (USER_NAME, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $hashed_password);

            // Execute the query and check if it was successful
            if ($stmt->execute()) {
                $success = "註冊成功！請前往登入頁面。";
            } else {
                // Check if the username is already taken
                if ($stmt->errno == 1062) {
                    $error = "此帳號已被註冊！";
                } else {
                    $error = "註冊失敗，請稍後再試。";
                }
            }
            $stmt->close();
        }
    } else {
        $error = "請填寫所有欄位！";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>註冊 - NTOU 筆記系統</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Menu Bar -->
    <div class="menu">
        <table class="menu_css">
            <tr>
                <td><a href="../../public/index.php">首頁</a></td>
            </tr>
        </table>
    </div>

    <!-- Registration Form Content -->
    <div class="content">
        <h1>註冊系統</h1>

        <!-- Display success or error messages -->
        <?php if (!empty($success)): ?>
            <div style="color: green; margin-bottom: 20px;"><?php echo $success; ?></div>
        <?php elseif (!empty($error)): ?>
            <div style="color: red; margin-bottom: 20px;"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST" action="register.php" class="auth-form">
            <div class="input-group">
                <input type="text" name="username" placeholder="帳號" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="密碼" required>
            </div>
            <div class="input-group">
                <input type="password" name="confirm_password" placeholder="確認密碼" required>
            </div>
            <button type="submit" class="button">註冊</button>
        </form>

        <a href="login.php" class="button" style="margin-top: 20px;">已有賬號？登入</a>
    </div>

    <!-- Include the external JavaScript file -->
    <script src="../../public/js/scripts.js"></script>
</body>
</html>
