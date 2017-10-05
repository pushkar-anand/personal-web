<?php
session_start();
session_regenerate_id();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<!-- COMMON TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pushkar Anand</title>
	<meta name="author" content="Pushkar Anand">
	<meta name="keywords" content="Pushkar Anand, Pushkar, Anand" />
  	<meta http-equiv="x-ua-compatible" content="ie=edge">
  	<meta name="theme-color" content="#1881f2">
	<!-- Search Engine -->
	<meta name="description" content="A programmer trying to create a mark on the world. Currently pursuing his engineering in computer science he wishes to do something exciting in his life ">
	<meta name="image" content="https://pushkaranand.me/media/me.jpg">
	<!-- Schema.org for Google -->
	<meta itemprop="name" content="Pushkar Anand">
	<meta itemprop="description" content="A programmer trying to create a mark on the world. Currently pursuing his engineering in computer science he wishes to do something exciting in his life ">
	<meta itemprop="image" content="https://pushkaranand.me/media/me.jpg">
	<!-- Twitter -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Pushkar Anand">
	<meta name="twitter:description" content="A programmer trying to create a mark on the world. Currently pursuing his engineering in computer science he wishes to do something exciting in his life ">
	<meta name="twitter:site" content="Pushkar_Anand_0">
	<meta name="twitter:creator" content="Pushkar_Anand_0">
	<meta name="twitter:image:src" content="https://pushkaranand.me/media/me.jpg">
	<!-- Open Graph general (Facebook, Pinterest & Google+) -->
	<meta property="og:title" content="Pushkar Anand">
	<meta property="og:description" content="A programmer trying to create a mark on the world. Currently pursuing his engineering in computer science he wishes to do something exciting in his life ">
	<meta property="og:image" content="https://pushkaranand.me/media/me.jpg">
	<meta property="og:url" content="https://pushkaranand.me/">
	<meta property="og:site_name" content="Pushkar Anand - Personal Portfolio">
	<meta property="og:locale" content="en_US">
	<meta property="fb:admins" content="100002803841254">
	<meta property="og:type" content="website">

  <link rel="shortcut icon" href="media/favicon.ico">
  <link rel="icon" sizes="16x16 32x32 64x64" href="media/favicon.ico">
  <link rel="icon" type="image/png" sizes="196x196" href="media/favicon-192.png">
  <link rel="icon" type="image/png" sizes="160x160" href="media/favicon-160.png">
  <link rel="icon" type="image/png" sizes="96x96" href="media/favicon-96.png">
  <link rel="icon" type="image/png" sizes="64x64" href="media/favicon-64.png">
  <link rel="icon" type="image/png" sizes="32x32" href="media/favicon-32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="media/favicon-16.png">
  <link rel="apple-touch-icon" href="media/favicon-57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="media/favicon-114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="media/favicon-72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="media/favicon-144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="media/favicon-60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="media/favicon-120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="media/favicon-76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="media/favicon-152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="media/favicon-180.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="media/favicon-144.png">
  <meta name="msapplication-config" content="media/browserconfig.xml">
  <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
              <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
  <!-- Bootstrap -->
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css" integrity="sha256-7TyXnr2YU040zfSP+rEcz29ggW4j56/ujTPwjMzyqFY=" crossorigin="anonymous" />
 <!-- Main Style -->
 <link rel="stylesheet" type="text/css" href="css/loadcss?css=owl.transitions.css/w3.css/main.css/responsive.css/font-awesome.min.css/animate.css/lightbox.css/owl.carousel.css/owl.theme.default.css/emoji.css" />
 <?php
 if(isset($_SESSION['mail-sent']))
 {
 	$d = $_SESSION['mail-sent'];
 	if( $d == "success")
 	{
 		$alertMsg = "Mail was sent successfully";
 	}
 	else
 	{
 		$alertMsg = "Mail could'nt be sent. Please write directly to anandpushkar088@gmail.com";
 	}
 	echo <<<SCRIPT
 	<script>
 	window.onload = function(e)
 	{
 		console.log("RESPONSE: $d");
 		window.alert("$alertMsg");
  }
 	</script>
SCRIPT;
 }
 session_unset('mail-sent');
 ?>
</head>
<body>
  <?php include_once("analyticstracking.php") ?>

 <!-- Header Section Start -->
 <div id="header">
   <div class="container">
     <div class="col-md-12 top-header">
       <div class="logo-menu">
         <div class="logo pull-left wow fadeInDown animated" data-wow-delay=".2s">
           <a href="."><i class="em em-sunglasses w3-jumbo"></i></a>
         </div>
         <div class="pull-right wow fadeInDown animated" data-wow-delay=".2">
           <div id="menu" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
             <span>menu</span>
           </div>
         </div>
       </div>
       <div class="sidebar-nav">
         <!-- navigation start -->
         <div class="navmenu navmenu-default navmenu-fixed-right offcanvas" style="" id="navigation">
           <a href="/"><i class="em em-sunglasses w3-jumbo"></i></a>
           <ul class="nav navmenu-nav">
             <li class="active"><a href="#header">Home</a></li>
             <li><a href="#works">Portfolio</a></li>
             <li><a href="pushkar-resume.pdf">Resume</a></li>
             <li><a href="blog/">Blog</a></li>
             <li><a href="#feedback">Contact Me</a></li>
           </ul>
         </div>
         <!-- navigation End -->
       </div>
     </div>
     <div class="row">
       <div class="col-md-12">
         <div class="banner text-center">
           <h1 class="wow fadeInDown animated" data-wow-delay=".8s">Pushkar Anand</h1>
           <h2 class="wow fadeInDown animated" data-wow-delay=".6s">The geek who loves to code<i class="em em-heart "></i></h2>
           <h4 class="wow fadeInDown animated" data-wow-delay=".4s"></h4>
           <a href="#feedback" class="btn btn-border lg wow fadeInLeft animated" data-wow-delay="1.0s">Contact Me</a>
           <a href="#works" class="btn btn-common lg wow fadeInRight animated" data-wow-delay="1.0s">Learn More</a>
           <div class="scroll">
             <a href="#works"><i class="fa fa-angle-down wow fadeInUp animated" data-wow-delay="1.2s"></i></a>
         </div>
       </div>
       </div>
     </div>
   </div>
 </div>
 <!-- Header Section End -->

 <!-- Work Section Start -->
 <section id="works">
   <div class="container">
     <div class="row">
       <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s">Some of <br>My <br><span>Works</span></h1>
       <div class="col-md-7 col-lg-7 grid-left wow fadeInLeft animated" data-wow-delay="1.2s">
         <div class="large">
           <img src="media/proj1.png" alt="Sofdule">
           <div class="overlay">
             <a data-fancybox data-type="iframe" data-src="project?list=sofdule" href="javascript:;"><i class="fa fa-search"></i></a>
           </div>
         </div>
				 <div class="grid-box">
					 <img src="media/proj5.png" alt="Make A Note">
					 <div class="overlay">
							<a data-fancybox data-type="iframe" data-src="project?list=mka" href="javascript:;"><i class="fa fa-search"></i></a>
					 </div>
				 </div>
         <div class="large">
           <img src="media/proj2.png" alt="WishThem">
           <div class="overlay">
              <a data-fancybox data-type="iframe" data-src="project?list=wishthem" href="javascript:;" ><i class="fa fa-search"></i></a>
           </div>
         </div>
				 <div class="grid-box">
					 <img src="media/proj6.png" alt="20-20-rule">
					 <div class="overlay">
							<a data-fancybox data-type="iframe" data-src="project?list=20" href="javascript:;"><i class="fa fa-search"></i></a>
					 </div>
				 </div>
       </div>
       <div class="col-md-5 grid-right wow fadeInRight animated" data-wow-delay="1.6s">
				 <div class="grid-box">
					 <img src="media/proj3.png" alt="Make me Smile">
					 <div class="overlay">
							<a data-fancybox data-type="iframe" data-src="project?list=mkss" href="javascript:;"><i class="fa fa-search"></i></a>
					 </div>
				 </div>
				 <div class="grid-box large">
					 <img src="media/proj4.png" alt="Matrix Operations">
					 <div class="overlay">
							<a data-fancybox data-type="iframe" data-src="project?list=mo" href="javascript:;"><i class="fa fa-search"></i></a>
					 </div>
				 </div>

         <div class="browse-box">
           <div class="more">
             <a href="project?viewall=true"><i class="fa fa-arrow-circle-right"></i>BROWSE ALL</a>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- Work Section End  -->
 <!-- Skills Section Start -->
 <section id="skills">
   <div class="container">
     <div class="row">
     <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s">My<br>Passionate<br> <span>Skills</span></h1>
     <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.2s">
       <h3>Javascript</h3>
       <h3>jQuery</h3>
       <h3>PHP</h3>
       <h3>CodeIgniter</h3>
       <h3>MySQL</h3>
       <h3>PostgreSQL</h3>
       <h3></h3>
     </div>
     <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.2s">
          <h3>Linux CLI</h3>
          <h3>AWS EC2</h3>
          <h3>AWS LightSail</h3>
          <h3>AWS Route53</h3>
          <h3>Heroku</h3>
          <h3>Azure VMs</h3>
     </div>
     <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.2s">
          <h3>Backend Development</h3>
          <h3>Android Development</h3>
          <h3>Windows App</h3>
          <h3>RESTful Apis</h3>
          <h3>Git</h3>
     </div>
     <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.2s">
       <h3>C/C++</h3>
       <h3>Java</h3>
       <h3>Python</h3>
			 <h3>JSON</h3>
     </div>
     </div>
   </div>
 </section>
 <!-- Skills Section End -->
 <!-- Work Experience Section Start -->
  <!-- <section id="testimonial">
     <div class="container">
       <div class="row">
         <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s">Where<br>have <br><span>I worked</span></h1>
         <div id="testimonial-carousel" class="carousel slide wow fadeInUp animated" data-ride="carousel" data-wow-delay="1.2s">
           <ol class="carousel-indicators">
             <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
             <li data-target="#testimonial-carousel" data-slide-to="1"></li>
             <li data-target="#testimonial-carousel" data-slide-to="2"></li>
           </ol>
           <div class="carousel-inner">
             <div class="item active">
               <blockquote>
                 <div class="commant">
                   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                     <div class="claint">
                       <img src="assets/img/testimonial/img1.jpg" alt="">
                     </div>
                     <span class="quote"><i class="fa fa-quote-left"></i></span>
                   </div>
                   <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                     <div class="info">
                       <p>TLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                       <h4>Anamoul Rouf</h4>
                       <h5>CEO, CloudBee</h5>
                     </div>
                   </div>
                 </div>
               </blockquote>
             </div>

             <div class="item">
               <blockquote>
                 <div class="commant">
                   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                     <div class="claint">
                       <img src="assets/img/testimonial/img2.jpg" alt="">
                     </div>
                     <span class="quote"><i class="fa fa-quote-left"></i></span>
                   </div>
                   <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                     <div class="info">
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                       <h4>Imran Khan</h4>
                       <h5>Founder, WPBean</h5>
                     </div>
                   </div>
                 </div>
               </blockquote>
             </div>
             <div class="item">
               <blockquote>
                 <div class="commant">
                   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                     <div class="claint">
                       <img src="assets/img/testimonial/img3.jpg" alt="">
                     </div>
                     <span class="quote"><i class="fa fa-quote-left"></i></span>
                   </div>
                   <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                     <div class="info">
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                       <h4>Tanvir Ahmed</h4>
                       <h5>Contributor, GrayGrids</h5>
                     </div>
                   </div>
                 </div>
               </blockquote>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>-->
   <!-- Testimonial Section End -->
   <!-- Clients Section Start -->
   <section id="clients">
     <div class="container">
       <div class="row">
         <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s">My<br><span>Education</span></h1>
         <div class="container-fluid bg-3 text-center">
  <div class="row">
    <div class="col-sm-4 wow fadeInLeft animated" data-wow-delay=".4s">
      <h3>VVCE, Mysore</h3>
      <p>B.E, Computer Science &amp; Engg.</p>
			<p>Grad. 2021</p>
    </div>
    <div class="col-sm-4 wow fadeInLeft animated" data-wow-delay=".4s">
      <h3>Paramount International School,New Delhi</h3>
      <p>Senior secondary(12th), 2016</p>
			<p>%age: 80.6</p>
    </div>
    <div class="col-sm-4 wow fadeInLeft animated" data-wow-delay=".4s">
      <h3>Creane Memorial School , Gaya</h3>
      <p>High School(10th), 2014</p>
			<p>CGPA: 8.6 </p>
    </div>
  </div>
</div>
       </div>
     </div>
   </section>
   <!-- Clients Section End -->


 <!-- Blog Section Start -->
 <!--<section id="blog">
   <div class="container">
     <div class="row">
       <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s">My<br><span>Blog</span></h1>
       <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
         <div class="blog-large wow fadeInLeft animated"  data-wow-delay="1.2s">
           <img src="assets/img/blog/img1.jpg" alt="">
           <div class="large">
             <a class="title" href="#">This is Photoshop's vers ion  of Lorem Ipsum. Pro in gravida </a>
             <p>Nibh vel velit auc tor aliq uet. Aenean sollicitu din, lorem quis biben...</p>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight animated" data-wow-delay="1.6s">
         <div class="blog-item">
           <img src="assets/img/blog/img2.jpg" alt="">
           <div class="content">
             <a class="title" href="#">This is Photoshop's vers ion  of Lorem Ipsum. Pro in gravida </a>
             <p>Nibh vel velit auc tor aliq uet. Aenean sollicitu din, lorem quis biben...</p>
           </div>
         </div>
         <div class="blog-item">
           <img src="assets/img/blog/img3.jpg" alt="">
           <div class="content">
             <a class="title" href="#">This is Photoshop's vers ion  of Lorem Ipsum. Pro in gravida </a>
             <p>Nibh vel velit auc tor aliq uet. Aenean sollicitu din, lorem quis biben...</p>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight animated" data-wow-delay="1.8s">
         <div class="blog-item">
           <img src="assets/img/blog/img3.jpg" alt="">
           <div class="content">
             <a class="title" href="#">This is Photoshop's vers ion  of Lorem Ipsum. Pro in gravida </a>
             <p>Nibh vel velit auc tor aliq uet. Aenean sollicitu din, lorem quis biben...</p>
           </div>
         </div>
         <div class="blog-item">
           <img src="assets/img/blog/img2.jpg" alt="">
           <div class="content">
             <a class="title" href="#">This is Photoshop's vers ion  of Lorem Ipsum. Pro in gravida </a>
             <p>Nibh vel velit auc tor aliq uet. Aenean sollicitu din, lorem quis biben...</p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>-->
 <!-- Blog Section End -->

 <!-- Feedback Section Start -->
 <section id="feedback">
   <div class="container">
     <div class="row">
       <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s"><span>Hire</span><br>or Contact <br> Me</h1>
       <div class="col-sm-6 col-md-6 wow fadeInLeft animated" data-wow-delay="1.4s">
         <form action="contact" name="contact" method="post">
           <div class="input-group">
             <span class="input-group-addon"><i class="fa fa-user"></i></span>
             <input type="text" name="name" class="form-control" placeholder="Your name">
           </div>
           <div class="input-group">
             <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
             <input type="email" name="email" class="form-control" placeholder=" Your Email">
           </div>
           <div class="input-group">
             <span class="input-group-addon"><i class="fa fa-fire"></i></span>
             <input type="text" name="subject" class="form-control" placeholder="Subject">
           </div>
           <div class="input-group">
             <span class="input-group-addon"><i class="fa fa-comments"></i></span>
             <textarea name="message" class="form-control large" placeholder="Message"></textarea>
           </div>
           <button type="submit" class="btn btn-green" name="send"><i class="fa fa-envelope-o"></i>Send</button>
         </form>
       </div>
       <div class="col-sm-4 col-md-4 col-md-offset-2 wow fadeInRight animated" data-wow-delay="1.4s">
         <div class="address">
           <h2>Contact Info</h2>
           <ul class="contact-info">
             <li><i class="fa fa-mobile"></i> +917053037360</li>
             <li><i class="fa fa-envelope-o"></i>anandpushkar088@gmail.com</li>
           </ul>

         <h2>Follow Me</h2>
           <ul class="social-icon">
             <li><a href="https://www.facebook.com/Pushkar.Anand.0" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a></li>
             <li><a href="https://twitter.com/Pushkar_Anand_0" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a></li>
             <li><a href="https://www.linkedin.com/in/anandpushkar088" target="_blank" rel="noopener"><i class="fa fa-linkedin"></i></a></li>
             <li><a href="https://plus.google.com/+PushkarAnand_me" target="_blank" rel="noopener"><i class="fa fa-google-plus"></i></a></li>
             <li><a href="https://github.com/pushkar-anand" target="_blank" rel="noopener"><i class="fa fa-github"></i></a></li>
             <li><a href="https://stackoverflow.com/users/4257791/pushkar" target="_blank" rel="noopener"><i class="fa fa-stack-overflow"></i></a></li>
             <li><a href="https://www.instagram.com/pushkar.anand/" target="_blank" rel="noopener"><i class="fa fa-instagram"></i></a></li>
           </ul>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- Feedback Section End -->

 <!-- Footer section Start -->
 <footer id="footer">
   <div class="container">
     <div class="row">
       <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
         <div class="copyright wow fadeInUp animated" data-wow-delay=".8s">
           <p>Copyright &copy; <?php echo date('Y');?> Pushkar Anand | All rights reserved.</p>
         </div>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
         <div class="scroll-top text-center wow fadeInUp animated" data-wow-delay=".6s">
           <a href="#header"><i class="fa fa-chevron-circle-up fa-2x"></i></a>
         </div>
       </div>
       <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
         <p class="text-center wow fadeInUp animated" data-wow-delay=".8s">Developed By <a href="http://graygrids.com">GrayGrids</a></p>
       </div>
     </div>
   </div>
 </footer>
 <!-- Footer section End -->

 <!-- jQuery Load -->
 <script src="js/jquery.min.js"></script>
 <!-- Bootstrap JS -->
 <script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js" integrity="sha256-wzoq0P7w2qLzRcJsF319y6G9Oilk3nU5CZ8tnY9TjFI=" crossorigin="anonymous"></script>
 <script src="js/loadjs?js=wow.js/main.js/smooth-scroll.js/jasny-bootstrap.min.js/jquery.counterup.min.js/waypoints.min.js" ></script>
<!--<script src="js/owl.carousel.min.js"></script>
<script src="js/circle-progress.js"></script>-->

<script>
$(document).keyup(function(e) {
     if (e.keyCode == 27)
     { // escape key maps to keycode `27`
        // <DO YOUR WORK HERE>
        parent.jQuery.fancybox.getInstance().close();
    }
});
</script>
</body>
</html>
</body>
</html>
