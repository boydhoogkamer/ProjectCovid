<?php 

include 'dbConnect.php';

function get_posts() {
    $pdo = dbConnect();
    $query = 'SELECT * FROM `post`';
    $statement = $pdo->query( $query );

    return $statement;
}

function isLoggedIn() {
    global $_SESSION;

    if (isset($_SESSION['id'])) {
        return true;
    } 
    return false;
}

function register($user_name, $user_email, $user_password) {
    $pdo = dbConnect();
    $data = [$user_name, $user_email, $user_password];
    $sql = "INSERT INTO users (user_name, user_email, user_password) VALUES (?, ? ,?)";
    $pdo->prepare($sql)->execute($data);
    header('Location: index.php?page=login');
}