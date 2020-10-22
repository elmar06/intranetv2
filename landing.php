<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IGC Intranet</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animation CSS -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body id="page-top" class="landing-page no-skin-config">
<div class="navbar-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top navbar-expand-md" role="navigation">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-end" id="navbar">
                <button type="button" class="btn btn-w-m btn-primary" data-toggle="modal" data-target="#login">LOGIN</button>
            </div>
        </div>
    </nav>
</div>
<div id="inSlider" class="carousel slide" data-ride="carousel" >
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
    </ol>
    <div id="carouselExampleBigIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleBigIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleBigIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/IGCMission.jpg" alt="Second slide">
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/aboutigc.jpg" alt="First slide">
            </div>  
        </div>
        <a class="carousel-control-prev" href="#carouselExampleBigIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleBigIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div><br>
<section id="features" class="container services">
    <div class="row">
        <div class="col-sm-6">
            <h2 style="color:rgb(48, 48, 48);">MISSION/VISION</h2>
            <p style="color: rgb(87, 87, 87);">We are a key player in the real estate industry serving global emerging markets by upholding brand integrity, offering best value products and services to customers and synergistic partnerships powered by innovative team players.</p>
        </div>
        <div class="col-sm-6">
            <h2 style="color: rgb(48, 48, 48);">VALUE PROPOSITION</h2>
            <p style="color: rgb(87, 87, 87);">We maintain world-class standards in building real estate structures utilizing cutting-edge technology to provide the best environment for our customers. We invest in research and development to continuously explore different building philosophies that honor the ecosystem, thereby harnessing nature’s strengths.</p>
        </div>
    </div>
</section>
<div class="modal inmodal" id="login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">LOGIN</h4>
            </div>
            <div class="modal-body">
                <div class="form-group"><label>Username</label> <input type="email" placeholder="Enter email" class="form-control"></div>
                <div class="form-group"><label>Password</label> <input type="password" placeholder="Password" class="form-control"></div>
                <div>
                    <button class="btn btn-sm btn-primary float-right m-t-n-xs" type="submit"><strong>Log in</strong></button>
                    <a href="reset.php"> Forgot Password? </a>
                </div>
            </div>
            <div class="modal-footer">
                <!-- no footer available -->
            </div>
        </div>
    </div>
</div>

<!-- Mainly scripts -->
<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="assets/js/inspinia.js"></script>
<script src="assets/js/plugins/pace/pace.min.js"></script>
<script src="assets/js/plugins/wow/wow.min.js"></script>


<script>
    $(document).ready(function () {

        $('body').scrollspy({
            target: '#navbar',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();
    // Activate WOW.js plugin for animation on scrol
    new WOW().init();
</script>

</body>
</html>
