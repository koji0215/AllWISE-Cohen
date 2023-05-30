<?php
// defineの値は環境によって変えてください。
define('HOSTNAME', 'localhost');
define('DATABASE', 'test');
define('USERNAME', 'root');
define('PASSWORD', 'kojiyu0215');

try {
  // データベースに接続
  $db  = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD);
  $msg = "MySQLのデータベースに接続できました。";
} catch (PDOException $e) {
  $isConnect = false;
  $msg = "MySQLのデータベース接続に失敗しました。<br>(" . $e->getMessage() . ")";
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MySQL接続テスト</title>
</head>
<body>
    <h1>MySQL接続テスト</h1>
    <p><?php echo $msg; ?></p>
</body>
</html>
