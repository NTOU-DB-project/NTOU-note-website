<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用戶資料 - NTOU 筆記系統</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
</head>
<body>
    <!-- Menu Bar -->
    <div class="menu">
        <table class="menu_left">
            <tr>
                <td><a href="../../public/index.php">首頁</a></td>
            </tr>
        </table>
    </div>

    <!-- User Profile Content -->
    <div class="content">
        <!-- Profile Picture and Details -->
        <div style="display: flex; align-items: center; margin-bottom: 20px;">
            <div style="width: 100px; height: 100px; border: 3px solid black; border-radius: 50%; margin-right: 20px;"></div>
            <div>
                <p><strong>Name:</strong> John Doe</p>
                <p><strong>Email Address:</strong> johndoe@example.com</p>
            </div>
        </div>

        <hr style="width: 100%; margin: 20px 0;">

        <!-- Icons Section -->
        <div style="display: flex; align-items: center; justify-content: space-between; width: 100%; margin-bottom: 20px;">
            <p style="margin: 0; font-weight: bold;">Icons style</p>
            <div style="width: 30px; height: 30px; border: 2px solid black; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                <span style="font-size: 18px;">⚙️</span>
            </div>
        </div>
        <div style="display: flex; gap: 20px; justify-content: center; margin-bottom: 20px;">
            <div style="width: 100px; height: 60px; border: 2px solid black;"></div>
            <div style="width: 100px; height: 60px; border: 2px solid black;"></div>
        </div>

        <!-- List Style Section -->
        <p style="margin: 20px 0; font-weight: bold;">List style</p>
        <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
            <tr>
                <td style="border: 1px solid black; padding: 5px;">Item 1</td>
                <td style="border: 1px solid black; padding: 5px;">Item 2</td>
                <td style="border: 1px solid black; padding: 5px;">Item 3</td>
                <td style="border: 1px solid black; padding: 5px;">Item 4</td>
                <td style="border: 1px solid black; padding: 5px;">Item 5</td>
            </tr>
        </table>
        <ul style="list-style: none; padding: 0; margin: 0;">
            <li style="border-bottom: 1px solid black; padding: 10px;">Detail 1</li>
            <li style="border-bottom: 1px solid black; padding: 10px;">Detail 2</li>
            <li style="border-bottom: 1px solid black; padding: 10px;">Detail 3</li>
            <li style="border-bottom: 1px solid black; padding: 10px;">Detail 4</li>
        </ul>
    </div>

    <!-- Include JavaScript -->
    <script src="../../public/js/scripts.js"></script>
</body>
</html>
