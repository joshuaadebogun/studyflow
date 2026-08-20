<?php
include "config.php";

if (isset($_POST['signup'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if the email already exists
    $check = mysqli_query($conn, "SELECT * FROM seeker WHERE email='$email'");

    if (mysqli_num_rows($check) > 0) {

        echo "<script>alert('Email already exists');</script>";

    } else {

        $insert = mysqli_query($conn, "INSERT INTO seeker (first_name, last_name, email, password, phone)
        VALUES ('$first_name','$last_name','$email','$password','$phone')");

        if ($insert) {

            echo "<script>
                    alert('Account created successfully!');
                    window.location='login.php';
                  </script>";

        } else {

            echo "<script>alert('Registration failed!');</script>";

        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Jobberman</title>

    <link rel="stylesheet" href="assets/css/signup1.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <script src="assets/js/signup.js"></script>
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

                        <li><a href="login.php" class="login">Log In</a></li>

                        <li><a href="signup.php" class="signup">Sign Up</a></li>

                        <li><a href="#" class="post">Post A Job</a></li>

                    </ul>

                </nav>

            </div>

        </div>

    </div>

</header>

<div class="main">

    <div class="left">

        <div class="hero"></div>

        <div class="dark"></div>

        <div class="write">

            <h1>Sign up as a seeker</h1>
            <p>Lets get started, complete these easy steps.</p>

            <div class="jobseeker">
                <p>1. Sign up as a jobseeker</p>
                <p>2. Verify your email address</p>
                <p>3. Complete your profile</p>
            </div>
        </div>

    </div>


    <div class="right">

        <div class="top">

            <button class="G"><svg width="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg></button>

            <button class="in">in</button>

        </div>


        <div class="divider">

            <p>Or continue with</p>

        </div>
        <form action="" method="POST">
        <input type="text" name="first_name" class="firstname" placeholder="First Name">
        <input type="text" name="last_name" class="lastname" placeholder="Last Name">
        <input type="email" name="email" class="email" placeholder="Email Address">
        <p class="note"><b>Note</b> This email will need to be verified in the next step</p>
        <input type="password" name="password" class="password" placeholder="Create Password">
        <div class="phone-group">
            <select name="country-code">
                <option value="+234">Nigeria (+234)</option>
                <option value="+1">USA (+1)</option>
                <option value="+44">UK (+44)</option>
            </select>
            <input type="tel" name="phone" class="tel" placeholder="">
        </div>

        <p class="terms">
            <input type="checkbox">
            I agree to the <a href="#">TERMS & CONDITIONS<span>*</span></a>
        </p>
            
        <p class="privacy">
            <input type="checkbox">
            I agree to the <a href="#">PRIVACY POLICY <span>*</span></a>
        </p>        

        <p class="recieve">
            <input type="checkbox" class="recieve">
            I would like to receive top jobs and career tips
        </p>


        <p class="browser">            
            <input type="checkbox">
            Sign me up for email and browser Job alerts.
        </p>
        

        <button type="submit" name="signup" class="login-1">
            <p>Create Your Account</p>
        </button>
        </form>

        <p class="down">Already have an account?<a href="#">Log in</a></p>
    </div>

</div>
</body>
</html>