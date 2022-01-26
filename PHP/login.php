<!DOCTYPE html>
<html>
    <head>
        <?php require 'head.php' ?>
        <title>Sign In</title>
    </head>
    <body style="background-color: var(--header-bg)">
        <section class="box">
            <h1>Sign In</h1>
            <form name="old-user" action="profile.php" method="POST" autocomplete="off">
                <label for="username">Username</label><br>
                <input type="text" name="username" required><br>
                <label for="password">Password</label><br>
                <input type="password" name="pw"><br>
                <input type="checkbox" name="terms" required>
                <!-- onclick terms download pdf of terms & conditions -->
                <label for="terms">I accept the <a href="">terms</a></label><br>
                <input type="submit" value="Sign In">
            </form>
            <a href="register.php" class="backLink">Sign up?</a>
        </section>
    </body>
</html>