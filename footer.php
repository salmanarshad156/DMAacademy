<?php
if (isset($_POST["newsletterEmail"])) {
    $newsletterEmail = $_POST["newsletterEmail"];
    $description = $_POST["message"];

    $recipient_email = 'info@dmaacademy.co.uk';
    $to_email = 'faseehullah2121@gmail.com';
    $subject = 'New query from DMA Academy Newsletter';
    $message = "<html><head><title>HTML email</title></head><body><strong>Hi, <br> Following Email has been Submitted in the newsletter Form:</strong> $newsletterEmail<br/></body></html>";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$recipient_email>" . "\r\n";
// More headers

    $inactive = 86400;
    if (isset($_SESSION["email_timeout"])) {
        $session_life = time() - $_SESSION['email_timeout'];
    } else {
        $session_life = 100000;
    }

    if ($session_life > $inactive) {
        if (mail($to_email, $subject, $message, $headers)) {
            $mail_sentNL = 1;
//        echo "email sent";
        }
        $_SESSION["email_timeout"] = time();
    }
}
?>



<footer>

    <div class="bg-white py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="footer-logo">
                        <img src="assets/img/footer-logo.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 py-3 py-lg-0">
                    <section class="Signup">
                        <div class="Signup__text">
                            <h5 class="text-green text-center mb-4" style="font-size: 1.8rem !important;">Join our
                                mailing list</h5>
                        </div>
                        <form id="newsletter" method="post" >
                            <div class="Signup__form">
                                <input required class="form-control" id="newsletterEmail" name="newsletterEmail" type="email" placeholder="Your e-mail">
                                <button form="newsletter" type="submit" class="btn-default">Subscribe</button>

                            </div>
                            <div class="form-check mt-2">
                                <input required class="form-check-input" name="news-letter" type="checkbox" value="news-letter"
                                       id="news-letter">
                                <label class="form-check-label text-green" for="news-letter">
                                    Check here if you accept our terms
                                    (<a href="#" class="text-green">privacy policy</a>)
                                </label>
                            </div>
                        </form>
                    </section>
                </div>
                <div class="col-lg-3">
                    <div>
                        <a href="#" class="text-green">info@dmaacademy.co.uk</a>
                    </div>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                        <!--  <a href="#"><i class="fab fa-twitter"></i></a> -->
                    </div>
                    <!--       <div>
                               <a href="#">Leeds, 9 Marsden Avenue, LS11 7NS</a>
                           </div>  -->
                </div>

            </div>
        </div>
    </div>
    <div class="bg-green py-3 footer-bottom">
        <div>
            © 2022 DMA Academy - All Rights Reserved
        </div>
        <div>
            <a href="#">Privacy policy</a>&nbsp;|&nbsp;<a href="#">Cookie Policy</a>
        </div>
    </div>
</footer>

<div class="floating-btn">
    <a href="https://google.com" target="_blank" class="btn-default d-inline-block">Book Online</a>
</div>

<?php
if(isset($mail_sentNL) && $mail_sentNL){
    ?>
    <div class="error-popupNL" id="error-popupNL">
        <div class="popup-wrapNL">
            <div class="hide-popupNL" onclick="hidePopupNL()">
                x
            </div>
            <div class="popup-textNL">
                Newsletter request has been submitted Successfully
            </div>
        </div>
    </div>
    <?php
}
?>

<script>
    function hidePopupNL() {
        document.getElementById('error-popupNL').style.display = "none"
    }
</script>