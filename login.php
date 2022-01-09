<?php
session_start();

include("connection.php");
include("functions.php");
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index2.php");
                    die;
                }
            }
        }
        echo "Wrong username or password!";
    } else {
        echo "Please enter valid information";
    }
}


?>

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    color: rgb(238, 238, 238, 0.8);
    background: linear-gradient(#5CE1E6, #265589);
    background-attachment: fixed;
    background-repeat: no-repeat;
    font-family: 'Noto Sans', sans-serif;
}

div.formC {
    width: 400px;
    max-width: 86%;
    min-height: 500px;
    padding: 1rem;
    border-radius: 6px;
    background: rgb(225, 225, 225, .05);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    box-shadow: 0 8px 10px 0 rgb(0, 0, 0, .06);
    margin: 10vh auto;
    overflow: hidden;
}

div.formC>.title {
    text-align: center;
    margin: 3rem auto;
}

div.formC>form {
    display: block;
    opacity: 60%;
    font-size: 80%;
}

div.formC>form>input::placeholder {
    color: white;
}

div.formC>form>input,
div.formC>form>button {
    outline: none;
    border: none;
    display: block;
    font-size: 1rem;
}

div.formC>form>input {
    width: 100%;
    height: 3rem;
    padding: 0 1rem;
    color: rgb(238, 238, 238, 0.8);
    ;
    background: rgb(0, 0, 0, .1);
    border-bottom: 1px solid black;
    margin: 1rem auto;
}

div.formC>form>input:hover {
    transition: 400ms;
    border-bottom: 1px solid rgb(238, 238, 238, 0.8);
}

div.formC>form>button {
    cursor: pointer;
    color: #5ce1e6;
    background: black;
    padding: .6rem 1.4rem;
    border-radius: 2px;
}

div.formC>form>center>.btn {
    cursor: pointer;
    color: black;
    background: white;
    padding: .6rem 1.4rem;
    border-radius: 100px;
    text-decoration: none;
}


div.bottom {
    font-size: 80%;
    text-align: center;
    margin: 5rem auto 1rem auto;
}

div.bottom>a {
    color: rgb(238, 238, 238, 0.8);
    text-decoration: underline;
}

@media only screen and (min-width: 768px) {
    div.formC {
        padding: 1rem 2rem;
    }

    div.formC>form>button {
        margin: 2rem 0;
    }
}

</style>


<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="icon" href="assets/favicon.png">
    </head>

    <body>
        <div class="formC">
            <h2 class="title">
                Welcome back!
            </h2>
            <form method="post">

                <input type="text" name="user_name" placeholder="username" required />

                <input type="password" name="password" placeholder="password" required />
                <button>Login</button>
                <br>
                <center><strong>Or</strong></center>
                <br>
                <center><a href="<?php echo $client->createAuthUrl(); ?>" name="google" class="btn">Login with
                        Google</a></center>
            </form>

            <div class="bottom">
                <span>
                    Don’t have an account?
                </span>
                <a href="signup.php">
                    Sign Up
                </a>
            </div>
        </div>
    </body>

</html>
