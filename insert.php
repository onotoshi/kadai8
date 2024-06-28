<?php
date_default_timezone_set('Asia/Tokyo');

//1. POSTデータ取得
$name = $_POST['name'];
$email = $_POST['email'];
$content = $_POST['content'];

// 画像アップロード処理
$image_path = null; // デフォルト値としてnullを設定

if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // 画像ファイルかチェック
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image_path = $target_file;
        } else {
            exit('画像のアップロードに失敗しました。');
        }
    } else {
        exit('ファイルは画像ではありません。');
    }
}

//3. DB接続します
try {
    $pdo = new PDO('mysql:dbname=php_kadai04;charset=utf8;host=localhost', 'root', '');
    echo "DB接続成功";
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

//4. データ登録SQL作成
$currentDateTime = date('Y-m-d H:i:s');
$stmt = $pdo->prepare('INSERT INTO php_kadai04 (username, comment, postdate, image_path) VALUES (:name, :content, :postdate, :image_path)');
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->bindValue(':postdate', $currentDateTime, PDO::PARAM_STR);
$stmt->bindValue(':image_path', $image_path, PDO::PARAM_STR);

//5. 実行
$status = $stmt->execute();

//6. データ登録処理後
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);
} else {
    echo "データ登録成功";
    //header('Location: index.php'); // デバッグのため一時的にコメントアウト
}
?>
