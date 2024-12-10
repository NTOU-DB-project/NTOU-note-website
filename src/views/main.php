<?php
// Start session
session_start();

// Dummy data for documents (replace with dynamic database queries as needed)
$documents = [
    ['title' => '文章標題1', 'content' => '內容......', 'date' => '2024/3/25'],
    ['title' => '文章標題2', 'content' => '內容......', 'date' => '2024/12/15'],
    ['title' => '文章標題3', 'content' => '內容......', 'date' => '2024/2/15'],
];
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>文件庫 - NTOU 知識庫系統</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="menu">
        <div class="menu_left">
            <a href="../../public/index.php">首頁</a>
        </div>
        <div class="menu_center">
            <input type="text" placeholder="搜尋筆記">
            <a class="menu_button" href="#">文件庫</a>
        </div>
        <div class="menu_right">
            <a href="profile.php"><img alt="使用者"></a>
            <a href="settings.php"><img alt="設定"></a>
        </div>
    </div>



     <!-- Document List -->
    <!-- Document Library Content -->
    <div class="document-container">
        <!-- Category Bar -->
        <div class="category-bar">
            <button>+</button>
            <div>
                <button>文本</button>
                <button>資料庫</button>
                <button>項目</button>
            </div>
        </div>

        <!-- Document List -->
        <div class="document-list">
            <!-- Example of a single document item -->
            <div class="document-item">
                <div class="details">
                    <strong>文章標題1</strong>
                    <p>內容......</p>
                    <small>發佈日期: 2024/3/25</small>
                </div>
                <div class="delete-btn">🗑️</div>
            </div>

            <div class="document-item">
                <div class="details">
                    <strong>文章標題2</strong>
                    <p>內容......</p>
                    <small>發佈日期: 2024/12/15</small>
                </div>
                <div class="delete-btn">🗑️</div>
            </div>

            <div class="document-item">
                <div class="details">
                    <strong>文章標題3</strong>
                    <p>內容......</p>
                    <small>發佈日期: 2024/12/15</small>
                </div>
                <div class="delete-btn">🗑️</div>
            </div>
        </div>
    </div>

    <script>
        // Add interactivity for delete buttons
        document.querySelectorAll('.delete-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                alert('刪除操作待實現！');
            });
        });
    </script>
</body>
</html>