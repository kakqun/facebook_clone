<html>
    <head>
        <title>Thefacebook | Login</title>
        <?php require_once(__DIR__. '/head.html'); ?>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <?php require_once(__DIR__. '/header.html'); ?>
            </header>
            <div class="content-wrapper">
                <div class="side-bar">
                    <?php require_once(__DIR__. '/sidebar.html'); ?>
                </div>
                <div class="top-content login">
                    <h1>[ Login ]</h1>
                    <form method="POST" action="./login.php">
                    <!--
                        <span>Email:</span>
                        <input type="text" class="input-text" name="email">
                        <span>Password:</span>
                        <input type="password" class="input-text" name="email">
                        <div class="submit-wrapper">
                            <input type="submit" class="input-submit" value="login">
                            <input type="submit" class="input-submit" value="register">        
                        </div>
                    -->
                    <table>
                    <tr><td>Email:</td>
                        <td><input type="text" class="input-text" name="email" value=""></td></tr>
                    <tr><td>Password:</td>
                        <td><input type="password" class="input-text" name="passord"></td></tr>
                    <tr height="7"><td></td><td></td></tr>
                    </table>
                    <div class="submit-wrapper">
                        <input type="submit" class="input-submit" value="Login">
                        <input type="submit" class="input-submit" value="Register">        
                    </div>
                    </form>
                    <p>If you have forgotten your password, click <a href="/">here</a> to reset it.</p>
                </div>
            </div>
                <footer>
                    <?php require_once(__DIR__. '/footer.html'); ?>
                </footer>
        </div>
    </body>
</html>