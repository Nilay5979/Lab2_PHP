<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My Webpage</title>
        <style>
    /* Used this to make it looks attractive and not using more css then this for now */
            body{
                text-align: center;
                background-color: lightgreen;
            }
            form{
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Welcome to my small PHP Project</h1>
        </header>
        <h2>Enter your credentials below: </h2>
        <!--The action attribute in the form tag is set to an empty string, so the form submits to the current page.-->
        <form method="POST" action="">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="Your Name" required>
            </div>
            <br>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Your Password" required>
            </div>
            <br>
            <div>
                <input type="radio" name="action" value="login" checked> Login
                <input type="radio" name="action" value="register"> Register
            </div>
            <br>
            <div>
                <input type="submit" value="Submit">
            </div>
            <br>
        </form>

    <?php
        // check if the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // get the values from the form
            $name = $_POST['name'];
            $password = $_POST['password'];
            $action = $_POST['action'];

            // handle the action
            if ($action == 'register') {
                // save the user's information
                $_GET['name'] = $name;
                $_GET['password'] = $password;
                echo 'Registration complete! <br>';
            } else {
                // check if the user's information is correct
                if ($_GET['name'] == $name && $_GET['password'] == $password) {
                    echo 'Login successful!';
                } else {
                    echo 'Invalid login information! Try Again <br>';
                    echo "Please enter the correct credentials <br>";
                }
            }
        }
    ?>

    </body>
</html>

