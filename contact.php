<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cliffton Home Improvements & Tropical Landscaping</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Since 2009, Cliffton Home Improvements have been providing professional services for gardening improvements within your home. We offer a wide variety of services! Enquire now for a free quote.">
    <meta name="keywords" content="Cliffton, Cliffton Home Improvements, Landscaping, Home Improvements">
    <meta name="author" content="KF Designs">
    <meta name = "format-detection" content = "telephone=no" />
    <!--CSS-->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/font-awesome.css">
    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/TMForm.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <!--[if lt IE 9]>
    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>
    <![endif]-->
    <!--[if lt IE 9]><script src="../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--header-->
<header>
    <div class="container">
        <h1 class="navbar-brand navbar-brand_"><a href="index.php"><img src="img/logo.png" alt=""><span>exterior design studio</span></a></h1>
        <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
            <ul class="nav sf-menu clearfix">
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
<!--content-->
<div class="global indent">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Contact us</h2>
                <figure class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d403201.8575776407!2d144.79943583808193!3d-37.859950856691796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC!5e0!3m2!1sen!2sau!4v1458624185298" style="border:0"></iframe>
                </figure>
            </div>
        </div>
    </div>
    <div class="formBox">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h2>Details</h2>
                    <div class="info">
                        <h3 class="indent">Phone:</h3>
                        <i class="fa fa-phone"></i><font size="4pt"> 0413 947 601</font><br><br>
                        <h3 class="indent">Email:</h3>
                        <i class="fa fa-envelope-o"></i><font size="4pt"> cliffton.homeimprovements@outlook.com.au</font><br><br>
                        <h3 class="indent">Location:</h3>
                        <i class="fa fa-map-marker"></i><font size="4pt"> Melbourne Region</font>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">

                    <?php
                    //if "email" variable is filled out, send email
                    if (isset($_REQUEST['email']))  {

                        //Email information
                        $admin_email = "kf777@hotmail.com.au";
                        $email = $_REQUEST['email'];
                        $subject = $_REQUEST['subject'];
                        $comment = $_REQUEST['comment'];

                        //send email
                        mail($admin_email, "$subject", $comment, "From:" . $email);

                        //Email response
                        echo "Your email has been sent. Thank you for contacting us!";
                    }

                    //if "email" variable is not filled out, display the form
                    else  {
                        ?>

                        <form method="post">
                            Email: <input name="email" type="text" placeholder="Your Email"/><br />
                            Subject: <input name="subject" type="text" placeholder="Subject"/><br />
                            Message:<br />
                            <textarea name="comment" rows="15" cols="40"></textarea><br />
                            <input type="submit" value="Submit" />
                        </form>

                        <?php
                    }
                    ?>

                    <!--
                    <h2>Contact Form</h2>
                    <?php
                    if (!isset($_POST["email"]))
                    {
                        ?>
                        <form id="contact-form" method="post" action="contact.php">
                            <div class="success-message">Contact form submitted.</div>
                            <div class="holder">
                                <div class="form-div-1 clearfix">
                                    <label class="name">
                                        <input type="text" placeholder="* Your full name here" data-constraints="@Required @JustLetters" name="name"/>
                                        <span class="empty-message">*This field is required.</span>
                                        <span class="error-message">*This is not a valid name.</span>
                                    </label>
                                </div>
                                <div class="form-div-2 clearfix">
                                    <label class="email">
                                        <input type="text" placeholder="* Enter your e-mail" data-constraints="@Required @Email" name="email"/>
                                        <span class="empty-message">*This field is required.</span>
                                        <span class="error-message">*This is not a valid email.</span>
                                    </label>
                                </div>
                                <div class="form-div-3 clearfix">
                                    <label class="phone notRequired">
                                        <input type="text" placeholder="Your telephone here" data-constraints="@JustNumbers" name="phone"/>
                                        <span class="empty-message">*This field is required.</span>
                                        <span class="error-message">*This is not a valid phone.</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-div-4 clearfix">
                                <label class="message">
                                    <textarea placeholder="* Your message" data-constraints='@Required @Length(min=10,max=999999)' name="message"></textarea>
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*The message is too short.</span>
                                </label>
                            </div>
                            <div class="btns">
                                <input type="submit" value="Send Email">
                                <input type="reset" value="Reset">
                                <p>* Required Fields</p>
                            </div>
                        </form>
                        <?php
                    }
                    else
                    {
                        $headers = "From: Webmaster<webmaster@clifftonhomeimprovements.com.au>";
                        $to = "kf777@hotmail.com.au";
                        $msg =  $_POST["message"] . "<br><br> From: " . $_POST["name"] . "<br> Email: " . $_POST["email"] . "<br>Phone: " . $_POST{"phone"};
                        $subject = "Enquiry";
                        if(mail($to, $subject, $msg, $headers))
                        {
                            echo "Mail Sent";
                        }
                        else
                        {
                            echo "Error Sending Mail, please try again";
                        }
                    }
                    ?> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="follow_icon">
                    <li><a href="#"><img src="img/follow_icon1.png" alt=""></a></li>
                </ul>
                <p>Copyright &copy; <em id="copyright-year">2016</em>  . All Rights Reserved.<br> KF Designs | ABN: 3696 6130 849</p>
            </div>
        </div>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>

</html>