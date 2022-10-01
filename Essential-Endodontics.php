<!DOCTYPE html>
<html lang="en">
<?php
include_once 'header.php';
?>
<body>

<?php
$a = $b = $c = $d = $e = 'none';
$c = 'nav-active';
include_once 'navbar.php';
?>

<div class="banner-img" id="top-div">
    <img src="assets/img/about-bg.png" alt="">
    <div class="banner-logo">
        <div class="container">
            <img src="assets/img/logo.png" alt="">
        </div>
    </div>
</div>

<div class="section bg-green">
    <div class="container">
        <div class="default-heading pt-0">
            <h2>Essential Endodontics</h2>
        </div>
        <div>
            <h4 class="font-designer">A modern Approach for the GDP</h4>
            <br>
            A relaxed and inspiring 2 days hands on course aimed at the busy general practitioner, wishing to
            enhance their Endodontic skills. This course offers clinical advice, Tips & Tricks pertaining to all stages
            of Endodontic treatment. Easy to follow protocols for predictable Endodontics and increased efficiency.
            <br><br>
            Take your Endo to the next level

        </div>
    </div>
</div>

<div class="steps-section ed">
    <div class="steps-container">
        <div class="step">
            <div class="step-text">
                <img src="assets/img/icon-pound.png" alt="">
                <div>£ 750+ vat</div>
            </div>
        </div>
        <div class="step">
            <div class="step-text">
                <img src="assets/img/icon-calendar.png" alt="">
                <div>London July 22</div>
            </div>
        </div>
        <div class="step">
            <div class="step-text">
                <img src="assets/img/icon-time.png" alt="">
                <div>2 days (14 hours cpd )</div>
            </div>
        </div>
    </div>
</div>
<div class="section py-0">
    <div class="default-heading bg-green mb-md-4">
        <h2>Your Speakers</h2>
    </div>
    <div class="container text-black">
        <div class="row text-md-left align-items-center mb-4">
            <div class="col-md-3 doc-1"></div>
            <div class="col-md-9 pt-3 py-md-3">
                <h5 class="font-weight-bold">Dr Massimo Guivarruscio</h5>
                <br>
                Considered an opinion leader in his field, Dr Giovarruscio is a GDC
                certified specialist in endodontics. His colleagues recognise him for his
                proactive and innovative approach, as well as his professionalism and
                exceptional talent.
                <br><br>
                Dr Massimo holds over eighteen years experience restorative dentistry,
                endodontics and aesthetic dentistry. He has an outstanding reputation
                as an endodontist.
                <br><br>
                Dr Giovarruscio lectures globally as well as teaching endodontics at
                King’s College London Dental Institute to postgrads and undergrads.
            </div>
        </div>
        <div class="row text-md-left align-items-center mb-4">
            <div class="col-md-3 doc-2"></div>
            <div class="col-md-9 pt-3 py-md-3">
                <h5 class="font-weight-bold">Dr Frederuci Ferreira</h5>
                <br>
                Considered an opinion leader in his field, Dr Giovarruscio is a GDC
                certified specialist in endodontics. His colleagues recognise him for his
                proactive and innovative approach, as well as his professionalism and
                exceptional talent.
                <br><br>
                Dr Massimo holds over eighteen years experience restorative dentistry,
                endodontics and aesthetic dentistry. He has an outstanding reputation
                as an endodontist.
                <br><br>
                Dr Giovarruscio lectures globally as well as teaching endodontics at
                King’s College London Dental Institute to postgrads and undergrads.
            </div>
        </div>
    </div>
</div>

<div class="section pt-0">
    <div class="default-heading bg-green mb-4">
        <h2>course overview</h2>
    </div>
    <div class="container text-left text-green">
        <h5 class="font-weight-bold">AIMS</h5>
        <br>
        To learn simple concepts and techniques for daily Endodontic procedures during an intensive 2 days hands on
        course, using the latest materials and equipment.
        <br><br>
        <h5 class="font-weight-bold">OBJECTIVES</h5>
        <br>
        <ul>
            <li>Managing Endodontic treatment in the post COVID-19 Era and Evidence-Based Concepts in Endodontics</li>
            <li>Diagnosis (CBCT Imaging in Endodontics), Magnification and Workflow</li>
            <li>Gain confidence at Rubber Dam isolation (Hands-on)</li>
            <li>Contemporary access cavity and Canal Location. Preservation of tooth structure, for strong End teeth, predictable and reproducible results (Hands-on)</li>
            <li>Rotary instrumentation (Continuous Rotation and Reciprocation), Easy to follow protocols, Essential Kit Fanta Files and Wave One Gold, using 3D printed teeth (Hands-on)</li>
            <li>Safe irrigation techniques. Obturation: Modern and Easy to learn. Bioceramic Sealers and Single Cone Technique (Hands-on).</li>
            <li>Introduction to carrier based Obturation and Continuous Wave of Condensation (Hands-on)</li>
            <li>Restoration of Endodontically Treated Teeth: simplified Core Build-up.</li>
            <li>Learn the importance and advantages of an adequate seal and immediate post-endodontic core build up.</li>

        </ul>
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


</body>
</html>