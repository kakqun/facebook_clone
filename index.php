<html>
    <head>
        <title>Thefacebook | Welcome to Thefacebook!</title>
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
                <div class="top-content">
                    <div class="title">
                        Welcome to Thefacebook!
                    </div>
                    <h1>[ Welcome to Thefacebook! ]</h1>
                    <div class="text">
                        <p>Thefacebook is an online directory that connects people through social networks at colleges.</p>
                        <p>We have opened up Thefacebook for popular consumption at:</p>
                        <p class="college">
                            BC • Berkeley • Brown • BU • Chicago • Columbia • Cornell • Dartmouth • Duke
                            Emory • Florida • Georgetown • Harvard • Illinois • Michigan • Michigan State
                            MIT • Northeastern • Northwestern • NYU • Penn • Princeton • Rice • Stanford
                            Tulane • Tufts • UC Davis • UCLA • UC San Diego • UNC
                            UVA • WashU • Wellesley • Yale
                        </p>
                        <p>Your facebook is limited to your own college or university.</p>
                        <p>
                            You can use Thefacebook to: </br>
                            •  Search for people at your school </br>
                            •  Find out who is in your classes </br>
                            •  Look up your friends' friends </br>
                            •  See a visualization of your social network </br>
                        </p>
                        <p>To get started, click below to register. If you have already registered, you can log in.</p>
                    </div>
                    <div class="submit-wrapper">
                        <input type="submit" class="input-submit" value="Register">  
                        <input type="submit" class="input-submit" value="Login" onclick="location.href='login.php'">      
                    </div>
                </div>
            </div>
                <footer>
                    <?php require_once(__DIR__. '/footer.html'); ?>
                </footer>
        </div>
    </body>
</html>