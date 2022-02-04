<?php

/**
 * 1. index.phpのフォームの部分がおかしいので、ここを書き換えて、
 * insert.phpにPOSTでデータが飛ぶようにしてください。
 * 2. insert.phpで値を受け取ってください。
 * 3. 受け取ったデータをバインド変数に与えてください。
 * 4. index.phpフォームに書き込み、送信を行ってみて、実際にPhpMyAdminを確認してみてください！
 */

//1. POSTデータ取得

// $name = $_POST['name'];
// $url = $_POST['url'];
// $img = $_POST['img'];
// $text = $_POST['text'];
// $date = $_POST['date'];

// // 表示、表示確認したら全てコメントアウト🤗
// echo $name;
// echo $url;
// echo $img;
// echo $text;
// echo $date;

// //2. DB接続します
// try {
//   //ID:'root', Password: 'root'
//   $pdo = new PDO('mysql:dbname=unit_4;charset=utf8;host=localhost','root','root');
// } catch (PDOException $e) {
//   exit('DBConnectError:'.$e->getMessage());
// }

// //３．データ登録SQL作成

// // 1. SQL文を用意
// $stmt = $pdo->prepare("INSERT INTO bookmark(id, name, url, img, text, date)VALUES(NULL, :name, :url, :img, :text, sysdate())");

// //  2. バインド変数を用意
// $stmt->bindValue(':name', $name, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':url', $url ,PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':img', $img, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':text', $text, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':date', $date, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)


// //  3. 実行
// $status = $stmt->execute();

// //４．データ登録処理後
// if($status==false){
//   //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
//   $error = $stmt->errorInfo();
//   exit("ErrorMessage:".$error[2]);
// }else{
//   //５．index.phpへリダイレクト
//   header("Location: index.php");
//   exit;

// }

/**
 * 1. index.phpのフォームの部分がおかしいので、ここを書き換えて、
 * insert.phpにPOSTでデータが飛ぶようにしてください。
 * 2. insert.phpで値を受け取ってください。
 * 3. 受け取ったデータをバインド変数に与えてください。
 * 4. index.phpフォームに書き込み、送信を行ってみて、実際にPhpMyAdminを確認してみてください！
 */

//1. POSTデータ取得

$name = $_POST['name'];
$email = $_POST['email'];
$content = $_POST['content'];

// 表示、表示確認したら全てコメントアウト🤗
// echo $name;
// echo $email;
// echo $content;

//2. DB接続します
try {
  //ID:'root', Password: 'root'
  $pdo = new PDO('mysql:dbname=unit_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成

// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO unit_table(id, name, email, naiyou, indate)VALUES(NULL, :name, :email, :text, sysdate())");

//  2. バインド変数を用意
$stmt->bindValue(':name', $name, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $email ,PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':text', $content, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMessage:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;

}
?>

