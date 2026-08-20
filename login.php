<?php
session_start();
include "config.php";

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check seeker table first
    $query = mysqli_query($conn, "SELECT * FROM seeker WHERE email='$email'");

    if (mysqli_num_rows($query) > 0) {

        $user = mysqli_fetch_assoc($query);

        if (password_verify($password, $user['password'])) {

            $_SESSION['id'] = $user['ID'];
            $_SESSION['name'] = $user['first_name'];
            $_SESSION['user_type'] = "seeker";

            header("Location: welcome.php");
            exit();

        } else {

            echo "<script>alert('Incorrect Password');</script>";

        }

    } else {

        // Check employer table
        $query = mysqli_query($conn, "SELECT * FROM employer WHERE email='$email'");

        if (mysqli_num_rows($query) > 0) {

            $user = mysqli_fetch_assoc($query);

            if (password_verify($password, $user['password'])) {

                $_SESSION['id'] = $user['ID'];
                $_SESSION['name'] = $user['first_name'];
                $_SESSION['user_type'] = "employer";

                header("Location: dashboard2.php");
                exit();

            } else {

                echo "<script>alert('Incorrect Password');</script>";

            }

        } else {

            echo "<script>alert('Email Not Found');</script>";

        }

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Into Your Account | Jobberman</title>
    <link rel="stylesheet" href="assets/css/login.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <script src="assets/js/login.js"></script>
</head>
<body>
    <header>
    <div class="main-nav">

        <div class="row">

            <div class="logo">
                <img src="assets/images/landscape.svg" alt="" width="180">
            </div>

            <div class="mainnav">

                <nav>

                    <ul>

                        <li class="home">
                            <a href="#">Job Seekers <i class="fa-solid fa-angle-down"></i></a>

                            <div class="dropdown-1">
                                <ul>
                                    <li>Job Vacancies</li>
                                    <li>AI Career Tools</li>
                                    <li>Job Search Advice</li>
                                    <li>My Learning</li>
                                </ul>
                            </div>

                        </li>

                        <li class="car">

                            <a href="#">Career <i class="fa-solid fa-angle-down"></i></a>

                            <div class="dropdown-2">
                                <ul>
                                    <li>Career Development</li>
                                    <li>Life At Work</li>
                                    <li>Job Market News</li>
                                </ul>
                            </div>

                        </li>

                        <li class="emp">

                            <a href="#">Employers <i class="fa-solid fa-angle-down"></i></a>

                            <div class="dropdown-3">
                                <ul>
                                    <li>Skill Assessments</li>
                                    <li>Executive Recruitment</li>
                                    <li>Pro Recruit</li>
                                    <li>Standard Listing</li>
                                    <li>Employers Corner</li>
                                </ul>
                            </div>

                        </li>

                        <li class="help">

                            <a href="#">Help Center <i class="fa-solid fa-angle-down"></i></a>

                            <div class="dropdown-4">
                                <ul>
                                    <li>Frequently Asked Questions</li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>

                        </li>

                        <li><a href="#" class="login">Log In</a></li>

                        <li><a href="#" class="signup">Sign Up</a></li>

                        <li><a href="#" class="post">Post A Job</a></li>

                    </ul>

                </nav>

            </div>

        </div>

    </div>

</header>

<div class="main">

    <div class="left">

        <img src="assets/images/images.jpeg" alt="">

        <div class="dark"></div>

        <div class="write">

            <h1>Log in and get productive</h1>

            <p>Use your social account to log in.</p>

        </div>

    </div>


    <div class="right">

        <div class="top">

            <button>G</button>

            <button>in</button>

        </div>


        <div class="line">

            <p>Or continue with</p>

        </div>

        <form action="" method="POST">
        <input type="email" name="email" placeholder="Email Address">

        <input type="password" name="password" placeholder="Password">


        <p class="forgot">
            <a href="">Forgot Password?</a>
        </p>

        <label>
            <input type="checkbox" class="check">
            Keep me logged in
        </label>


        <button type="submit" name="login" class="login-1">
            Log in
        </button>
        </form>

        <p class="down">Don't have an account?<a href="#">Sign up</a></p>
    </div>

</div>

</body>
</html>