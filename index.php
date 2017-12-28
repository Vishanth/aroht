<!DOCTYPE html>
<html lang="en">
<?php

$user = 'root';
$pass = '';
$db = 'timesince';
$db = new mysqli('localhost',$user, $pass, $db) or die("Unable to connect to DB");

if($result = $db->query("SELECT * FROM since where date>'2007-03-11 18:00:00' order by date limit 12")){
	$rows = array();
	if($result->num_rows){
		while ($row = $result->fetch_assoc())
		{
			//load all returned rows into an array
			$rows[] = $row;
		}
	}
}else{
	die($db->error);
}

?>
  <head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111653212-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-111653212-1');
    </script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SINCE LAST</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-4952762050737423",
        enable_page_level_ads: true
      });
    </script>

  </head>

  <body id="page-top">
  
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">SINCE LAST THORA won the BATTLE OF THE BLUES</a>
		<div class="fb-share-button" data-href="http://since-last.com/index.php" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/roy-tho.png" alt="">
        <h1 class="text-uppercase mb-0" id="demo"></h1>
        <hr class="star-light">
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">MAJOR EVENTS SINCE</h2>
        <hr class="star-dark mb-5">
        <div class="row">
		
		<?php 
			if($rows!=null){
				$counter = 1;
				foreach($rows as $row){?>
				<div class="col-md-6 col-lg-4">
					<a class="portfolio-item d-block mx-auto" href="#portfolio-modal-<?php echo $counter; ?>">
					  <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
						<div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
						  <i class="fa fa-search-plus fa-3x"></i>
						</div>
					  </div>
					  <img class="img-fluid" src="<?php echo $row['Image'] ?>" alt=""><center><?php echo $row['Description']; ?></center>
					</a>
				</div>
		<?php $counter++;} 
			}?>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2017</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
	
	<?php 
			if($rows!=null){
				$counter = 1;
				foreach($rows as $row){?>
					<div class="portfolio-modal mfp-hide" id="portfolio-modal-<?php echo $counter; ?>">
					  <div class="portfolio-modal-dialog bg-white">
						<a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
						  <i class="fa fa-3x fa-times"></i>
						</a>
						<div class="container text-center">
						  <div class="row">
							<div class="col-lg-8 mx-auto">
							  <h2 class="text-secondary text-uppercase mb-0"><?php echo $row['Description'] ?></h2>
							  <hr class="star-dark mb-5">
							  <img class="img-fluid mb-5" src="<?php echo $row['Image'] ?>" alt="">
							  <p class="mb-5"><?php echo $row['Description'] ?></p>
							  <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
								<i class="fa fa-close"></i>
								Close Project</a>
							</div>
						  </div>
						</div>
					  </div>
					</div>
		<?php $counter++;} 
			}?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>


    <script>
    // Set the date we're counting down to
    var countDownDate = new Date("Mar 10, 2007 18:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = now - countDownDate;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
    </script>

  </body>

</html>