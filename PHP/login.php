<!DOCTYPE html>
<html>
    <head>
        <?php require 'head.php' ?>
        <title>Sign In</title>
    </head>
    <body style="background-color: var(--header-bg)">
        <section class="box">
            <a href="index.php" class="backLink">Go back</a>
            <h1>Sign In</h1>
            <form name="old-user" action="profile.php" method="POST" autocomplete="off">
                <label for="username">Username</label><br>
                <input type="text" name="username" required><br>
                <label for="password">Password</label><br>
                <input type="password" name="pw"><br>
                <input type="checkbox" name="remember">
                <label for="remember">Remember me</label><br>
                <input type="submit" value="Sign In" name="old-user">
            </form>
            <a href="register.php" class="backLink">Create a new account?</a>
        </section>
    </body>
</html>