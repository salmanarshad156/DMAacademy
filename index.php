<!DOCTYPE html>
<html lang="en">
<?php
include_once 'header.php';
?>
<body>

<?php
$a = $b = $c = $d = $e = 'none';
$a = 'nav-active';
include_once 'navbar.php';
?>

<div class="banner-img" id="top-div">
    <img src="assets/img/home-bg.png" alt="">
    <div class="banner-logo">
        <div class="container">
            <img src="assets/img/logo.png" alt="">
        </div>
    </div>
</div>

<div class="section bg-green" id="about-us-section">
    <div class="container">
        <div class="default-heading pt-0">
            <h2>About us</h2>
        </div>
        <div>
            DMA courses are designed to help Practitioners to enhance their clinical skills and expand their potential
            to be the best in their field.
            <br><br>
            We provide a unique learning system which offers hands on practical experience and knowledge building from
            well renowned speakers.
            <br><br>
            We aim to ensure that each student will complete our courses feeling more assured and confident in clinical
            work. At DMA academy we aim to provide you with the foundation to explore new treatments in modern practices
            by increasing your expertise in your everyday practice.

        </div>
    </div>
</div>

<div class="steps-section">
    <div class="steps-container">
        <div class="step step1 step-color" id="step1">
            <div class="step-text">
                <img src="assets/img/icon-dental.png" alt="">
                dental
            </div>
            <div class="arrow show-arrow" id="arrow-1">
                <img src="assets/img/arrow.PNG" alt="">
            </div>
        </div>
        <div class="step step2" id="step2">
            <div class="step-text">
                <img src="assets/img/icon-heart.png" alt="">
                medical
            </div>
            <div class="arrow" id="arrow-2">
                <img src="assets/img/arrow.PNG" alt="">
            </div>
        </div>
        <div class="step step3" id="step3">
            <div class="step-text">
                <img src="assets/img/icon-aesthetics.png" alt="">
                aesthetics
            </div>
            <div class="arrow" id="arrow-3">
                <img src="assets/img/arrow.PNG" alt="">
            </div>
        </div>

        <div class="step-popup popup1 show-popup" id="popup-1">
            <div class="popup-wrap">
                Dentistry has many disciplines to it so we aim to provide dentists with training to help them improve in
                each of them so they can give their patients the very best care. Whether its learning how to effectively
                communicate and gain consent or how to finally tackle that dreaded UL6 endo - we've got a course for it.
                With the advancement of technology, we will always look to bring the latest techniques to dentists so
                they can safely and predicatably provide the best patient care.
            </div>
        </div>
        <div class="step-popup popup2" id="popup-2">
            <div class="popup-wrap">
                Dentistry has many disciplines to it so we aim to provide dentists with training to help them improve in
                each of them so they can give their patients the very best care. Whether its learning how to effectively
                communicate and gain consent or how to finally tackle that dreaded UL6 endo - we've got a course for it.
                With the advancement of technology, we will always look to bring the latest techniques to dentists so
                they can safely and predicatably provide the best patient care.
            </div>
        </div>
        <div class="step-popup popup3" id="popup-3">
            <div class="popup-wrap">
                Dentistry has many disciplines to it so we aim to provide dentists with training to help them improve in
                each of them so they can give their patients the very best care. Whether its learning how to effectively
                communicate and gain consent or how to finally tackle that dreaded UL6 endo - we've got a course for it.
                With the advancement of technology, we will always look to bring the latest techniques to dentists so
                they can safely and predicatably provide the best patient care.
            </div>
        </div>
    </div>
</div>
<div class="section py-0">
    <div class="default-heading bg-green">
        <h2>Course Schedule</h2>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="course-grid">
                    <img src="assets/img/doc-1.png" alt="">
                    <div class="course-overlay">
                        <div class="course-overlay-text">
                            Essential Endodontics
                            A Modern Approach for the GDP
                            with Dr Massimo
                        </div>
                    </div>
                    <div class="course-button btn-learn">
                        <a href="Essential-Endodontics.php">Learn More</a>
                    </div>
                    <div class="course-button btn-book">
                        <a href="#">book online</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="course-grid">
                    <img src="assets/img/doc-2.png" alt="">
                    <div class="course-overlay">
                        <div class="course-overlay-text">
                            Level 7 Facial Aesthetics
                            with Dr Benji Dhillon
                        </div>
                    </div>
                    <div class="course-button btn-learn">
                        <a href="Master-Injector-Level7-Diploma.php">Learn More</a>
                    </div>
                    <div class="course-button btn-book">
                        <a href="#">book online</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-wrap">
    <?php
    include_once 'contact-form.php';
    ?>
</div>


<?php
include_once 'footer.php'
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<script>
    var navbar = document.getElementById("nav-con");
    var topdiv = document.getElementById("top-div");

    function myFunction() {
        if ($(window).scrollTop() > 300) {
            navbar.classList.add("sticky");
            topdiv.classList.add("top-margin");
        } else {
            navbar.classList.remove("sticky");
            topdiv.classList.remove("top-margin");
        }
    }
</script>

<script>
    $("#step1").hover(function () {
        $("#popup-1").addClass("show-popup");
        $("#popup-2").removeClass("show-popup");
        $("#popup-3").removeClass("show-popup");

        $("#arrow-1").addClass("show-arrow");
        $("#arrow-2").removeClass("show-arrow");
        $("#arrow-3").removeClass("show-arrow");


    })
</script>

<script>
    $("#step2").hover(function () {
        $("#popup-2").addClass("show-popup");
        $("#popup-1").removeClass("show-popup");
        $("#popup-3").removeClass("show-popup");

        $("#arrow-2").addClass("show-arrow");
        $("#arrow-1").removeClass("show-arrow");
        $("#arrow-3").removeClass("show-arrow");

    })
</script>

<script>
    $("#step3").hover(function () {
        $("#popup-3").addClass("show-popup");
        $("#popup-2").removeClass("show-popup");
        $("#popup-1").removeClass("show-popup");

        $("#arrow-3").addClass("show-arrow");
        $("#arrow-2").removeClass("show-arrow");
        $("#arrow-1").removeClass("show-arrow");


    })
</script>


</body>
</html>