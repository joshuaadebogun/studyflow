<?php
include "config.php";

if (isset($_POST['signup'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if email already exists
    $query = mysqli_query($conn, "SELECT * FROM employer WHERE email='$email'");

    if (mysqli_num_rows($query) > 0) {

        echo "<script>alert('Email already exists');</script>";

    } else {

        $insert = mysqli_query($conn, "INSERT INTO employer (first_name, last_name, email, password, phone)
        VALUES ('$first_name','$last_name','$email','$password','$phone')");

        if ($insert) {

            echo "<script>
                    alert('Employer account created successfully!');
                    window.location='login.php';
                  </script>";

        } else {

            echo "<script>alert('Registration Failed');</script>";

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

    <link rel="stylesheet" href="assets/css/signup2.css">

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

                        <li><a href="#" class="login">Log In</a></li>

                        <li><a href="#" class="signup">Sign Up</a></li>

                        <li><a href="#" class="post">Post A Job</a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<div class="employer">
   <div class="employer-text">
        <h2>Create an Employer Account</h2>
        <p>Reach top talent and find the right candidate today</p>
        <h2>STEP 1 of 2</h2>
   </div> 

   <div class="company">
    <div class="company-text">
        <h3 style="color: black;">Company Representative</h3>
        <p>This is information pertaining to you as a representative of the company.</p>
    </div>

    <form action="" method="POST">
    <div class="form">
        <div class="emmet">
            <div class="first-name">
                <p>First Name <span>*</span></p>
                <input type="Firstname" name="first-name" class="firstname">
            </div>

            <div class="last-name">
                <p>Last Name <span>*</span></p>
                <input type="Lastname" name="last-name" class="lastname">
            </div>
        </div>
        
        <div class="ais">        
            <div class="work-email">
                <p>Work Email<span>*</span></p>
                <input type="email" name="email" class="email">
            </div>

            <div class="password">
                <p>Create Password<span>*</span></p>
                <input type="password" name="password" class="password">
            </div>
        </div>

        <div class="position">
            <p>Position in Company<span>*</span></p>
            <select name="position">
                <option>select...</option>
                <option>C-level: CEO / COO / CIO / CFO / CTO / CPO</option>
                <option>Senior Management: Head of Department / Team Lead</option>
                <option>Middle Management: Supervisor / Unit Head</option>
                <option>Junior Level: Associate / Officer</option>
            </select> 
        </div>
        
        <hr>


        <div class="ski"> 
            <div class="country">
                <p>Country Code<span>*</span></p>
                <select name="number">
                    <option>Nigeria (+234)</option>
                    <option>Afghanistan (+93)</option>
                    <option>Albania (+355)</option>
                    <option>Algeria (+213)</option>
                </select>
            </div>

            <div class="phone">
                <p>Phone Number<span>*</span></p>
                <input type="nums" name="phone" class="number">
            </div>
        </div>


        <div class="down">
            <p>Already have an account?<a href="login.php">Log in</a></p>
        </div>
        
        <div class="email-me">
            <p>
                <input type="checkbox">
                Email me high quality articles on HR and recruiting
            </p>
        </div> <hr>
        
        <button type="submit" name="signup" class="next"><p class="ne">Next</p><svg class="xt" width="20px" aria-hidden="true" data-prefix="fal" data-icon="arrow-square-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-arrow-square-down fa-w-14 fa-7x"><path fill="currentColor" d="M347.5 268.5l-115 115.1c-4.7 4.7-12.3 4.7-17 0l-115-115.1c-4.7-4.7-4.7-12.3 0-17l6.9-6.9c4.7-4.7 12.5-4.7 17.1.2l82.5 85.6V140c0-6.6 5.4-12 12-12h10c6.6 0 12 5.4 12 12v190.3l82.5-85.6c4.7-4.8 12.4-4.9 17.1-.2l6.9 6.9c4.7 4.8 4.7 12.4 0 17.1zM448 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48zm-32 0c0-8.8-7.2-16-16-16H48c-8.8 0-16 7.2-16 16v352c0 8.8 7.2 16 16 16h352c8.8 0 16-7.2 16-16V80z" class=""></path></svg></button>
    </div>
   </div>
   </form>
</div>

<div class="if">
    <p>If you were referred and received a referral link, <a href="#">sign up using that link,</a><br>so that we can track and reward you. Terms & Conditions Apply</p>
</div>

<footer class="footer">
    <div class="footer-container">
        <div class="about">
            <a href="">About</a>
        </div>
        <div class="companies">
            <a href="">Companies</a>
        </div>
        <div class="privacy">
            <a href="">Privacy Policy</a>
        </div>
        <div class="terms">
            <a href="">Terms</a>
        </div>
        <div class="ai">
            <a href="">AI Career Tools</a>
        </div>
        <div class="skills">
            <a href="">Skills Assessment</a>
        </div>
        <div class="product">
            <a href="">Product Brochure</a>
        </div>
    </div>

    <p class="footer-text">Follow us On:</p>


    <div class="footer-images">
        <div class="facebook">
            <a href=""><img src="assets/images/icon-facebook.svg" alt="" width="35px"></a>
        </div>
        <div class="instagram">
            <a href=""><img src="assets/images/icon-instagram.svg" alt="" width="35px"></a>
        </div>
        <div class="linkedin">
            <a href=""><img src="assets/images/icon-linkedin.svg" alt="" width="35px"></a>
        </div>
        <div class="x">
            <a href=""><img src="assets/images/icon-x.svg" alt="" width="35px"></a>
        </div>
        <div class="youtube">
            <a href=""><img src="assets/images/icon-youtube.svg" alt="" width="35px"></a>
        </div>
        <div class="whatsapp">
            <a href=""><img src="assets/images/icon-whatsapp.svg" alt="" width="35px"></a>
        </div>
        <div class="play">
            <a href=""><img src="assets/images/play-badge.svg" alt="" width="150px"></a>
        </div>
        <div class="ndpr">
            <a href=""><img src="assets/images/ndpr.svg" alt="" width="100px"></a>
        </div>
    </div>

    <hr>
    <p class="yr">© 2026 Jobberman.</p>
</footer>
</body>
</html>