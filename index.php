<?php 

include("includes/config.php");
include("includes/Account.php");
include("includes/Constants.php");
    

    $account = new Account($con);

    include("includes/register-handler.php");
    include("includes/login-handler.php");


    function getInputValue($name) {
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FamilyTime</title>
    <link rel="stylesheet" href="css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/register.js"></script>
</head>
<script>
    $(document).ready(function() {

   $("#loginForm").show();
        $("#registerForm").hide();
    });

</script>

        <body style="background-color:#f0f8ff;">
        
        <div style="width: 55%; height: 70px; float: left; margin-top: -20px; margin-right: -110px;">
        <img style="margin-top: 15px; text-align: center;" src="checkmark.png" width="30%" height="120px">
    </div>
    <p style="color: rgb(49, 45, 45); font-family: fantasy; margin-left: 20px; margin-right: 20px;">

        <h3 style="color: black; margin-left: -20px; margin-top: 10px;"><br>
            <h1 style="color: black; margin-left: -40px; font-size: 50px;     font-style: initial; margin-top: -10px;">FamilyTime</h1>
        </h3><br><br>



<div id="background">    

        <div id="loginContainer">

            <div id="inputContainer" style="margin-left: 310px;">

            <form id="loginForm" action="index.php" method="POST">
                   <h2>Login to your account</h2>
                    <p>
                        <?php echo $account->getError(Constants::$loginFailed); ?>
                        <label for="loginUsername">Username</label>
                        <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. eknoorsingh" value="<?php getInputValue('loginUsername') ?>" required autocomplete="off">
                    </p>
                    <p>
                        <label for="loginPassword">Password</label>
                        <input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
                    </p>

                    <button type="submit" name="loginButton">LOG IN</button>

                    <div class="hasAccountText">
                        <span id="hideLogin">Don't have an account yet? Signup here.</span>
                    </div>
                    
                </form>



                <form id="registerForm" action="index.php" method="POST">
                    <h2>Create your free account</h2>
                    <p>
                        <?php echo $account->getError(Constants::$usernameCharacters); ?>
                        <?php echo $account->getError(Constants::$usernameTaken); ?>
                        <label for="username">Username</label>
                        <input id="username" name="username" type="text" placeholder="e.g. baljitsingh" value="<?php getInputValue('username') ?>" required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                        <label for="firstName">First name</label>
                        <input id="firstName" name="firstName" type="text" placeholder="e.g. eknoor" value="<?php getInputValue('firstName') ?>" required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                        <label for="lastName">Last name</label>
                        <input id="lastName" name="lastName" type="text" placeholder="e.g. Singh" value="<?php getInputValue('lastName') ?>" required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                        <?php echo $account->getError(Constants::$emailInvalid); ?>
                        <?php echo $account->getError(Constants::$emailTaken); ?>
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" placeholder="e.g. eknoor@gmail.com" value="<?php getInputValue('email') ?>" required>
                    </p>

                    <p>
                        <label for="email2">Confirm email</label>
                        <input id="email2" name="email2" type="email" placeholder="e.g. eknoor@gmail.com" value="<?php getInputValue('email2') ?>" required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
                        <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
                        <?php echo $account->getError(Constants::$passwordCharacters); ?>
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" placeholder="Your password" required>
                    </p>

                    <p>
                        <label for="password2">Confirm password</label>
                        <input id="password2" name="password2" type="password" placeholder="Your password" required>
                    </p>

                    <button type="submit" name="registerButton">SIGN UP</button>

                    <div class="hasAccountText">
                        <span id="hideRegister">Already have an account? Log in here.</span>
                    </div>
                    
                </form>
            </div>
            </div>
        </div>
</body>

</html>