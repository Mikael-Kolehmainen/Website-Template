<!DOCTYPE html>
<html>
    <head>
        <?php require 'head.php' ?>
        <title>Sign Up</title>
    </head>
    <body style="background-color: var(--header-bg)">
        <section class="box">
            <a href="index.php" class="backLink">Go back</a>
            <h1>Sign Up</h1>
            <form name="new-user" action="profile.php" method="POST" autocomplete="off">
                <label for="email">E-mail</label><br>
                <input type="email" name="email" required><br>
                <label for="username">Username</label><br>
                <input type="text" name="username" required><br>
                <label for="password">Password</label><br>
                <input type="password" name="pw"><br>
                <input type="checkbox" name="terms" required>
                <!-- onclick terms download pdf of terms & conditions -->
                <label for="terms">I accept the <a href="">terms</a></label><br>
                <input type="checkbox" name="remember">
                <label for="remember">Remember me</label><br>
                <input type="submit" value="Sign In" name="new-user">
            </form>
            <a href="login.php" class="backLink">Already have an account?</a>
        </section>
    </body>
</html>