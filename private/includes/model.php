<?php 

include 'dbConnect.php';

function get_posts() {
    $pdo = dbConnect();
    $query = 'SELECT user_name, user_game1, user_game2, user_game3, user_discord, user_steam, user_img FROM `users`';
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

function register($user_name, $user_email, $user_password, $user_game1, $user_game2, $user_game3, $user_discord, $user_steam, $user_img) {
    $pdo = dbConnect();
    $data = [$user_name, $user_email, $user_password, $user_game1, $user_game2, $user_game3, $user_discord, $user_steam, $user_img];
    $sql = "INSERT INTO users (user_name, user_email, user_password, user_game1, user_game2, user_game3, user_discord, user_steam, user_img) VALUES (?, ? ,?, ?, ?, ?, ?, ?, ?)";
    $pdo->prepare($sql)->execute($data);
    header('Location: index.php?page=home');
}