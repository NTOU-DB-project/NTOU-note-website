<?php

// Include the database connection file
include("../../config/database.php");

// Start session
session_start();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Check if username and password are filled
    if (!empty($username) && !empty($password)) {
        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("SELECT USER_ID, USER_NAME FROM Account WHERE USER_NAME = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            $_SESSION['USER_ID'] = $user['USER_ID'];
            $_SESSION['USER_NAME'] = $user['USER_NAME'];
            header('Location: dashboard.php');
            exit;
        } else {
            $error = "無效的帳號或密碼！";
        }
        $stmt->close();
    } else {
        $error = "請輸入帳號和密碼！";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>登入 - NTOU 筆記系統</title>
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
    

    <!-- Login Form Content -->
    <div class="content">
        <h1>登入系統</h1>

        <?php if (isset($error)): ?>
            <div style="color: red; margin-bottom: 20px;"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST" action="login.php" class="auth-form">
            <div class="input-group">
                <input type="text" name="username" placeholder="帳號" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="密碼" required>
            </div>
            <button type="submit" class="button">登入</button>
        </form>

        <a href="register.php" class="button" style="margin-top: 20px;">創建新賬號</a>
    </div>
</body>
</html>
