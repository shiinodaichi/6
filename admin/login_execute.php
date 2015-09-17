<?php
    $id = $_POST["id"];
    $password = $_POST["password"];
    if($id == "admin" & $password == "password") {
    session_start();
        isset($_SESSION['login']);
        $_SESSION["login"] = 1;
        header("Location: index.php");
    } else{
        echo "ログインに失敗しました";
} 
?>