<div class="preloaderBg" id="preloader">
    <div class="preloader-wrap">
        <div class="preloader-logo"></div>
        <div class="preloader-circle"></div>
    </div>
</div>
<script>
    $(window).on('load', function() { // makes sure the whole site is loaded
        $('#preloader').delay(350).fadeOut('fast'); // will fade out the white DIV that covers the website.
        $('html').css({'overflow-y':'auto'});
    });
</script>
<div class="nav-container" id="nav-con">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0" id="nav">
            <div>
                <a href="index.php" id="nav-logo">
                    <img src="assets/img/nav-logo.png">
                </a>
            </div>
            <div class="d-lg-none">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                        aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link <?= $a ?>" href="index.php"><span>Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $b ?>" href="about.php"><span>About us</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $c ?>" href="courses.php"><span>Courses</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $d ?>" href="contact.php"><span>Contact Us</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $e ?>" href="book-online.php"><span>Book Online</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

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

    // smooth scroll to anchor, with option of hash appearing in url. Thanks:
    // https://paulund.co.uk/smooth-scroll-to-internal-links-with-jquery
    $(document).ready(function () {
        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            var target = this.hash;
            var $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 120
            }, 900, 'swing', function () {
                // window.location.hash = target;
            });
        });
    });
</script>