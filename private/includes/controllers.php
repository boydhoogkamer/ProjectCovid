<?php 

function home() {

    global $CONFIG;

    $view = $CONFIG['view_path'] . '/home.php';
    $posts = get_posts();
    include $view;
}

function test() {

    global $CONFIG;

    $view = $CONFIG['view_path'] . '/test.php';

    include $view;
}

function jsondata() {

    $user_info = get_user();

    echo $user_info;
    
}

function checkpassword() {
    if (isset($_POST['username'] , $_POST['password'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        
    if (empty($username) or empty($password)) {
            $error = 'Elk veld moet ingevuld worden!';
            header('Location: index.php?page=login'); 
        } else {
            $pdo = dbConnect();
            $query = $pdo->prepare("SELECT * FROM users WHERE user_name = ? AND user_password = ?");
            $query->bindValue(1, $username);
            $query->bindValue(2, $password);
            $query->execute();
            $num = $query->rowCount();

            if ($num == 1) {
                session_start();
                $_SESSION['logged_in'] = true;
                header('Location: index.php?page=home');

            } else {
                session_destroy();
            $_SESSION['logged_in'] = false;
            $error = 'Incorrect gebruikersnaam of wachtwoord!';
            header('Location: index.php?page=login');
            }   
        }
    }
}

function createaccount() {
    if (isset($_POST['registreersubmit'])) {
        $user_name = $_POST['registreernaam'];
        $user_email = $_POST['registreeremail'];
        $user_password  = md5($_POST['registreerpassword']);
        $user_game1 = $_POST['registreergame1'];
        $user_game2 = $_POST['registreergame2'];
        $user_game3 = $_POST['registreergame3'];
        $user_discord = $_POST['registreerdiscord'];
        $user_steam = $_POST['registreersteam'];
        $filename = basename($_FILES['image']['name']);
        $target = __DIR__ ."/../../images/uploaded_images/".$filename;
        $image = $_FILES['image']['name'];
        register($user_name, $user_email, $user_password, $user_game1, $user_game2, $user_game3, $user_discord, $user_steam, $filename);
      }

    if (empty($user_name) or empty($user_email) or ($user_password) or ($user_game1) or ($user_game2) or ($user_game3) or ($user_discord) or ($user_steam) or ($filename)) {
    $error = 'Elk veld moet ingevuld worden!';
    }
    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        save_photo($filename);
      } else {
          echo "something went wrong";
      }
}