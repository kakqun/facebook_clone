<html>
    <head>
        <title>Thefacebook | Registration</title>
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
                <div class="top-content register">
                    <div class="title">
                        Registration
                    </div>
                    <div class="text">
                        <p>  
                            To register for thefacebook.com, just fill in the four fields below. You will have a chance to enter </br>
                            additional information and submit a picture once you have registered.
                        </p>
                    </div>
                    <div class="register-form">
                        <form method="POST" action="./register.php">
                            <table>
                                <tbody>
                                <tr>
                                    <td>Name:</td>
                                    <td><input type="text" class="input-text" name="name" value=""></td>
                                </tr>
                                <tr>
                                <td>Status:</td>
                                    <td>
                                    <select name="status">
                                        <option value="1">Student (Full-Time)</option>
                                        <option value="6">Student (Summer)</option>
                                        <option value="5">Grad Student</option>
                                        <option value="2">Alumnus/Alumna</option>
                                        <option value="3">Faculty</option>
                                        <option value="4">Staff</option>
                                    <select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email: (school)</td>
                                    <td><input type="email" class="input-text" name="email" value=""></td>
                                </tr>
                                <tr>
                                    <td>Password*: (choose)</td>
                                    <td><input type="password" class="input-text" name="password" value=""></td>
                                </tr>
                                <tr>
                                <table>
                                    <tbody>
                                        <tr>
                                        <td><input type="checkbox" name="terms" value=""></td>
                                        <td>I have read and understood the Terms of Use, and Iagree to them.</td>
                                        </tr>
                                        <tr>
                                        <td>*</td>
                                        <td>You can choose any password. It does not have to be, andshould not be, your school password.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </tr>
                                <tr height="7"><td></td><td></td></tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="submit-wrapper">
                        <input type="submit" class="input-submit" value="Register Now!">
                    </div>
                </div>
            </div>
                <footer>
                    <?php require_once(__DIR__. '/footer.html'); ?>
                </footer>
        </div>
    </body>
</html>