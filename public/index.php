<?php
    include("config/database.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>index.php</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
    <!-- Menu -->
    <div class="menu">
        <table class="menu_css"></table>
    </div>

    <!-- Project Title and Team Members -->
    <div class="content">
        <h1>NTOU 筆記系統</h1>
        <h2>01157063 彭浩言 01157008 蔡秉杰 01157015 曾健智</h2>
        
        <!-- Login and Register Buttons -->
        <div class="auth-buttons">
            <a href="../src/views/login.php" class="button">登入</a>
            <a href="../src/views/register.php" class="button">創建新賬號</a>
        </div>
    </div>
</body>
</html>
