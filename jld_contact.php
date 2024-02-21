<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JLD Aveo+ Ventures</title>
    <link rel="stylesheet" href="jld_contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Akronim|Faster One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Blaka Ink' rel='stylesheet'>
</head>

<body>
    <header>
        <div class="navdiv">
            <a href="#" class="toggle-button">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </a>
            <img class="navlogo" src="jld.png" alt="JLD logo">
            <ul class="navul">
                <li class="active"><a href="index.html"><i class="fas fa-home"></i>Insight</a></li>
                <li><a href="jld_about.html"><i class="fas fa-info-circle"></i>Essence</a></li>
                <li><a href="jld_services.html"><i class="fas fa-cogs"></i>Solutions</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li class="hover-me"><a href="jld_tech.html">IT Solution</a>
                            </li>
                            <li class="hover-me"><a href="jld_m&b.html">Marketing & Branding</a>
                            </li>
                            <li class="hover-me"><a href="jld_devops.html">Web and Software Architects</a>
                            </li>
                        </ul>
                    </div>

                </li>
                <li><a href="jld_career.html"><i class="fas fa-briefcase"></i>Pathways</a></li>
                <li><a href="jld_contact.html"><i class="fas fa-envelope"></i>Reachout</a></li>
            </ul>
        </div>
        </div>
    </header>


    <?php
    /* if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    $to = "dareolumuyiwa@jldaveoplus.com";
    $subject = "New contact form submission";
    $message = "First Name: $fName\n Last Name: $lName\n Phone Number:$phone\n Email:$email\n Comment:$comment";
    $headers = "From: www.jldaveoplus.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "<div class='msg_delivered'>Thank you for submission. We will get back to you soon.</div>";
        echo "<div class='msg_delivered'>Return to Home Page</div>";
    } else {
        echo "<div class='msg_delivered'>Sorry, there was a problem with your submission. Please try again.</div>";
        echo "<div class='msg_delivered'>Return to Contact Us Page</div>";
    }
} */
    // echo '<link rel="stylesheet" href="jld_contact.css">';



    echo "<div class='msg_delivered'>Thank you for submission. We will get back to you soon.</div>";
    echo "<div class='msg_delivered'>Return to Home Page</div>";
    echo "<div class='msg_delivered'>Sorry, there was a problem with your submission. Please try again.</div>";
    echo "<div class='msg_delivered'>Return to Contact Us Page</div>";

    ?>

    <footer>
        <hr class="footerHr">
        <div class="allfooter">
            <div class="footerdiv">
                <img class="footerjldlogo" src="jld.png" alt="JLD Aveo+ Ventures Logo">
                <p>Seamless and comprehensive technology solutions for individuals and businesses, specializing in ICT, printing, branding, computer training, software development, and website development, ensuring customer satisfaction and staying competitive.</p>
            </div>

            <div class="footerlists">
                <ul>
                    <li><a href="jld_about.html">About Us<span>&#62;</span></a>
                        <hr>
                    </li>
                    <li><a href="jld_services.html">Our Services<span>&#62;</span></a>
                        <hr>
                    </li>
                    <li><a href="jld_career.html">Career Path<span>&#62;</span></a>
                        <hr>
                    </li>
                    <li><a href="jld_contact.html">Contact Us<span>&#62;</span></a>
                        <hr>
                    </li>
                </ul>
            </div>
            <div class="footeraddress">
                <img src="map.png" alt="Google Map Logo">
                <p>Plot 400, Staff Quarters <br>
                    Opp Road Safety, Beside General Hospital <br>
                    Kuje, 900105, Abuja (FCT) <br>
                    Nigeria
                </p><br>
                <p>De-Royal Plaza, Block R1/R2 <br>
                    Beside Sajumah Plaza <br>
                    Kuje 900105, Abuja (FCT) <br>
                    Nigeria</p>
            </div>
            <div class="footerhandles">
                <ul>
                    <li><a href="https://web.facebook.com/profile.php?id=100070949910985" target="_blank"><img src="fb.png" alt="Facebook Logo"></a></li>
                    <li><a href="https://instagram.com/jld_aveoplus?igshid=NTc4MTIwNjQ2YQ==" target="_blank"><img src="ig.png" alt="Instagram Logo"></a></li>
                    <li><a href="https://www.linkedin.com/company/jldaveoplus/" target="_blank"><img src="Lin.png" alt="Linkedin Logo"></a></li>
                    <li><img src="twit.png" alt="Twitter Logo"></li>
                    <li><img src="wtsp.png" alt="WhatsApp Logo"></li>
                    <li><img src="ytb.png" alt="YouTube Logo"></li>
                </ul>
            </div>
        </div>
        <p>Copyright &copy; 2023 JLD Aveo+ Ventures. All rights reserved.</p>
    </footer>
    <script src="jld_toggle.js"></script>
</body>

</html>