<?php 

function home() {

    global $CONFIG;

    $view = $CONFIG['view_path'] . '/home.php';
    // $posts = get_posts();
    
    include $view;
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
        echo 'swagg';
        $user_name = $_POST['registreernaam'];
        $user_email = $_POST['registreeremail'];
        $user_password  = md5($_POST['registreerpassword']);
        register($user_name, $user_email, $user_password);
      }

    if (empty($user_name) or empty($user_email) or ($user_password)) {
    $error = 'Elk veld moet ingevuld worden!';
    }
}