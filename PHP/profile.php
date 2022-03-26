<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["new-user"])) {
        require "connection.php";
        $sql = "SELECT username, email, userpassword FROM users";
        $result = mysqli_query($conn, $sql);
        $username = $_REQUEST["username"];
        $email = $_REQUEST["email"];
        $alreadyInDb = false;
        if (mysqli_num_rows($result) > 0) {
            for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                $row = mysqli_fetch_assoc($result);
                //checks if username is available
                if ($username == $row['username']) {
                    $alreadyInDb = true;
                    echo "<script>
                            alert('The username is already taken');
                            window.location.href = 'register.php';
                            </script>";
                }
                //checks if email is available
                if ($email == $row['email']) {
                    $alreadyInDb = true;
                    echo "<script>
                            alert('The email is already in use');
                            window.location.href = 'register.php';
                            </script>";
                }
            }
        } else {
            echo "<script>
                    alert('Couldn't access the database.');
                    window.location.href = 'register.php';
                    </script>";
        }
        if ($alreadyInDb == false) {
            require 'random-string.php';
            $pw = $_REQUEST['pw'];

            $pw = getRandomString(5).password_hash($pw, PASSWORD_DEFAULT);
            if (isset($_POST['remember'])) {
                setcookie('alreadyLoggedInCookie', $username, time() + (86400 * 30), "/");
            }
            else {
                setcookie('alreadyLoggedInCookie', $username, time() + (60 * 30), "/");
            }

            $sql = "INSERT INTO users (username, email, userpassword)
                    VALUES ('$username', '$email', '$pw')";

            mysqli_query($conn, $sql);
            mysqli_close($conn);
            
            showprofile($username);
        }
    } else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["old-user"])) {

    } else if (isset($_COOKIE['alreadyLoggedInCookie'])) {

    } else {
        echo "<script>
                alert('please log in or create account');
                window.location.href = 'index.php';
                </script>";
    }
    function showprofile($username) {
        echo "
            <h1>Welcome $username</h1>
            ";
    }
?>