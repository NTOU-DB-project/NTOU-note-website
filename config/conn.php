
<?php
//學號： 01157008 ;
// (參考講義的方法寫的)
$host='localhost';
$user = 'root';
$password = 'pa555ord';
$dbname = 'noteweb';
try {
    $db = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $user,
        $password
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    print "ERROR!: " . $e->getMessage();
    die();
}


//  <?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "your_database_name";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
// ?> 