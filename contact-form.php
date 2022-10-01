<?php
if (isset($_POST["email"])) {
    $fname = $_POST["name"];
    $contact = $_POST["phone"];
    $email = $_POST["email"];
    $location = $_POST["location"];
    $bestday = $_POST["bestday"];
    $besttime = $_POST["besttime"];
    $description = $_POST["message"];
    $refined = $_POST["servicetype"];
    $kuchBhi = "";
    foreach ($refined as $k ){
        $kuchBhi=$kuchBhi . ", " . $k;
    }


    $to_email = 'faseehullah2121@gmail.com';
    $subject = 'New query from Dimension Digital';
    $message = "<html><head><title>HTML email</title></head><body><strong>Name:</strong> $fname<br/><strong>Contact:</strong> $contact<br/><strong>Email:</strong> $email<br/><strong>Best Day to Contact:</strong> $bestday<br/><strong>Best Time to Contact:</strong> $besttime<br/><strong>Description:</strong> $description<br/>
    <strong>Service Required:</strong> $kuchBhi</body></html>";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
// More headers
    $secretKey = "6Le3s9UcAAAAABFTo4hpDzhUsKLtSRRSiedIkcDN";
    $responseKey = $_POST["g-recaptcha-response"];
    $ip='';

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$ip";
    $response = file_get_contents($url);
    $response = json_decode($response);
    if ($response->success) {

        $inactive = 86400;
        if (isset($_SESSION["email_timeout"])) {
            $session_life = time() - $_SESSION['email_timeout'];
        } else {
            $session_life = 100000;
        }

        if ($session_life > $inactive) {
            if (mail($to_email, $subject, $message, $headers)) {
                $mail_sent = 1;
//        echo "email sent";
            }
            $_SESSION["email_timeout"] = time();

        } else {
//        echo "<h1>" . $_SESSION["email_timeout"] . "</h1>";
        }
    } else {
        $invalidCaptcha = 1;
    }
}
?>

<div class="contact-form">
    <div class="allcontent">

        <!-- Middle Data-->

        <div class="container-fluid" style="padding-bottom: 0px !important;margin-bottom: -21px !important;">

            <!-- Top Headings-->
       <!--MFU COMMENTING     <div class="row">
                <div class="col-12 DGhead">
                    <div>
                        <p> Our Services will include:</p>
                        <ul class="DGhead p-0" style="list-style-type:none">
                            <li>Videography</li>
                            <li>Photography</li>
                            <li>Design & Content Creation</li>
                            <li>Web Design</li>
                            <li>Social Media Management</li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <div class="row" id="contact-form">
                <div class="col-12">
                    <p class="DGhead">Email us on <a style="color:white !important;text-decoration: none !important;"href="mailto:info@dmaacademy.co.uk">info@dmaacademy.co.uk</a></p>
                </div>
                <div class="col-12 DGhead">
                    <p>Or complete the form below to request a call back</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact form starts -->

    <!-- Wrapper container -->
    <div class="container pt-4" >
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <!-- Bootstrap 5 starter form -->
                <form method="post" id="contactForm" style="margin-right: auto;margin-left:auto;">

                    <!-- Name input -->
                    <div class="mb-3">
                        <!--  <label class="form-label" for="name">Name</label> -->
                        <input class="form-control" id="name" name="name" type="text" placeholder="Name" />
                    </div>

                    <!-- Email address input -->
                    <div class="mb-3">
                        <!--   <label class="form-label" for="emailAddress">Email Address</label> -->
                        <input class="form-control" id="email" name="email" type="email" placeholder="Email Address" />

                    </div>
                    <div class="form-group mb-3">
                        <input type="tel" name="phone" class="form-control" pattern="[0-9]{11}" placeholder="Contact No" required>
                        <div class="invalid-feedback">
                            please enter a valid contact number
                        </div>
                    </div>
                 <!--Drop down STARTS-->
                    <!--MFU COMMENTS       <div class="row">
                               <div class="col-12 col-lg-6">
                                   <div class="form-group">
                                       <select name="bestday" class="contact-dropdown form-control custom-select" required>
                                           <option selected>Best Day to Contact</option>
                                           <option>Monday</option>
                                           <option>Tuesday</option>
                                           <option>Wednesday</option>
                                           <option>Thursday</option>
                                           <option>Friday</option>
                                           <option>Saturday</option>
                                           <option>Sunday</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="col-12 col-lg-6">
                                   <div class="form-group">
                                       <select name="besttime" class="contact-dropdown form-control custom-select" required>
                                           <option selected>Best Time to Contact</option>
                                           <option>Morning</option>
                                           <option>Afternoon</option>
                                           <option>Evening</option>
                                       </select>
                                   </div>
                               </div>
                           </div>  -->

                          <!--Drop down ENDS-->
                    <!--MFU COMMENTS        <div class="mb-3 ">
                             <label class="form-label" >Please select the services you are interested in</label>

                             <div class="form-check">

                                 <input class="form-check-input" name="servicetype[] "type="checkbox" value="Videography" id="Videography">
                                 <label class="form-check-label" for="Videography">
                                     Videography
                                 </label>


                             </div>
                             <div class="form-check">
                                 <input class="form-check-input" name="servicetype[]" type="checkbox" value="Photography" id="Photography">
                                 <label class="form-check-label" for="Photography">
                                     Photography
                                 </label>
                             </div>
                             <div class="form-check">
                                 <input class="form-check-input" name="servicetype[]" type="checkbox" value="Design & Content Creation" id="design-content-creation">
                                 <label class="form-check-label" for="design-content-creation">
                                     Design & Content Creation
                                 </label>
                             </div>
                             <div class="form-check">
                                 <input class="form-check-input" name="servicetype[]"  type="checkbox" value="Web-Design" id="Web-Design">
                                 <label class="form-check-label" for="Web-Design">
                                     Web Design
                                 </label>
                             </div>
                             <div class="form-check">
                                 <input class="form-check-input" name="servicetype[]" type="checkbox" value="Social-Media-Management" id="Social-Media-Management">
                                 <label class="form-check-label" for="Social-Media-Management">
                                     Social Media Management
                                 </label>
                             </div>
                         </div> -->
                         <!-- Message input -->
                    <div class="mb-3">
                        <!--  <label class="form-label" for="message">Message</label>  -->
                        <textarea class="form-control" id="message" name="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
                    </div>
                    <!--CAPTCHA-->
                    <div class="col-12 text-center">

                        <div class="g-recaptcha mt-3 d-flex justify-content-center"
                             data-sitekey="6Le3s9UcAAAAAAkHXjic_FqCuv9pxgd7ygIF9bPI"></div>

                        <?php
                        if (isset($invalidCaptcha) and $invalidCaptcha) {
                            ?>
                            <span style="color: white; font-weight: bold;">Invalid captcha</span>
                            <?php
                        }
                        ?>
                    </div>
                    <!--CAPTCHA-->
                    <!-- Form submit button -->
                    <div class="d-grid text-center" style="padding-top:2%;">
                        <button class="btn-border" type="submit">Submit</button>
                    </div>

                </form>

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <!-- Contact form ends -->
</div>

<?php
if(isset($mail_sent) && $mail_sent){
    ?>
    <div class="error-popup" id="error-popup">
        <div class="popup-wrap">
            <div class="hide-popup" onclick="hidePopup()">
                x
            </div>
            <div class="popup-text">
                Form has been submitted Successfully
            </div>
        </div>
    </div>
    <?php
}
?>

<script>
    function hidePopup() {
        document.getElementById('error-popup').style.display = "none"
    }
</script>