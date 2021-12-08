<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact | Sarkarijob.pk</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
</script>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3392141693940903"
     crossorigin="anonymous"></script>
  <style type="text/css">
  	/*contact us css start*/
			.heading-text h1{
			  font-size: 52px;
			  line-height: 62px;
			  font-weight: 700;
			  letter-spacing: 0px;
			}
			.heading-text h5{
			  font-size: 18px;
			  line-height: 28px;
			  font-weight: 700;
			  letter-spacing: 0px;
			}
			.form-control:foucs{
			  outline: none !important;
			  box-shadow: none !important;
			}
			.heading-text h2{
			  font-size: 30px;
			  line-height: 40px;
			  font-weight: 700;
			  letter-spacing: 0px;
			}
			@media only screen and (min-width: 320px) and (max-width: 499px){
			  .heading-text-1 h2 {
			    font-size: 30px;
			  }
			}
/*contact us css end*/
  </style>
</head>
<body id="main">
    <amp-auto-ads type="adsense"
        data-ad-client="ca-pub-3392141693940903">
</amp-auto-ads>
<?php include 'header.php'; ?>
<!-- mobile menu start -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="job.html" class="nav-link-1 navitem-1 pb-3 pt-3 border-bottom-1">Jobs</a>
  <a href="#" class="nav-link-1 navitem-1 pb-3 pt-3 border-bottom-1">Courses</a>
  <a href="#" class="nav-link-1 navitem-1 pb-3 pt-3 border-bottom-1">Career advice</a>
  <a href="#" class="nav-link-1 navitem-1 ">Recruiting? <strong>Post a job</strong></a>
</div>
<!-- mobile menu end -->

<!-- banner section start -->
<section class="bg-white search-job-div">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-white">
					<div class="d-none d-lg-block">
						<form class="row g-3" method="POST" action="job.php">
                                <div class="col-lg-4">
                                    <div class="d-flex">
                                        <label class="text-dark me-2 py-2"><strong>What</strong></label>
                                        <input type="text" class="form-control form-control-lg" name="title"
                                            value="<?php echo $filter_title; ?>"
                                            placeholder="e.g &quot; care assistant &quot;">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex">
                                        <label class="text-dark me-2 py-2"><strong>Where</strong></label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="city"
                                                class="form-control form-control-lg border-right-1"
                                                placeholder="town or postcode" aria-label="Recipient's username"
                                                aria-describedby="basic-addon2" value="<?php echo $filter_city; ?>">
                                            <span class="input-group-text border-left-1 bg-white" id="basic-addon2">
                                                <a href="#" class="text-decoration-none text-green">
                                                    <i class="fas fa-bullseye"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <button type="submit" name="filter"
                                        class="text-decoration-none text-white bg-green btn-custom-search-1">Search
                                        jobs</button>
                                </div>
                                <div class="col-lg-2 py-2">
                                    <a href="job.php" class="text-decoration-none text-dark">Browse job <span><i
                                                class="fas fa-chevron-right"></i></span></a>
                                </div>
                            </form>
					
					</div>
						<form class="row g-3 d-block d-lg-none d-xl-none mt-3">
									<div class="col-lg-12">
										<div class="input-group mb-3">
										  	<span class="input-group-text border-right-0 bg-white " id="basic-addon1"><i class="fas fa-search text-light-green"></i></span>
										  	<input type="text" class="form-control bg-white border-left-0 form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
										</div>
									</div>
						</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- banner section end -->

<!-- breadcrumb section start -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
				  </ol>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumb section end -->

<!-- Contact section start  -->
<section class="mt-3">
	<div class="container">
		<div class="row g-4">			
			<div class="col-lg-12">
				<div class="text-center heading-text mb-5">
					<h1 class="text-dark">Contact us</h1>
					<h5 class="green-color">Enquire below for more information and we will respond as soon as possible, thank you!</h5>
				</div>
			</div>
		</div>

		<div>
			<div class="row">				
				<!-- form start -->
				<div class="col-lg-8">
					<div class="mb-4">
						<form class="row g-2" method="POST" action="contact_backend.php">
							<div class="col-md-10">
								<div class="mb-3">
									<label class="green-color pb-1" for="name">Name <code>*</code></label>
									<input type="text" class="form-control bg-transparent rounded-0" name="name" id="name">
								</div>
							</div>
							<div class="col-md-10">
								<div class="mb-3">
									<label class="green-color pb-1" for="email">Email Address <code>*</code></label>
									<input type="email" class="form-control bg-transparent rounded-0" name="email" id="email">
								</div>
							</div>
							<div class="col-md-10">
								<div class="mb-3">
									<label class="green-color pb-1">Tel/ Mobile <code>*</code></label>
									<input type="number" class="form-control bg-transparent rounded-0" name="contact">
								</div>
							</div>
							<div class="col-md-10">
								<div class="mb-3">
									<label class="green-color pb-1" for="textarea">Your Message <code>*</code></label>
									<textarea id="textarea" class="form-control rounded-0 bg-transparent" cols="10" rows="10" name="message"></textarea>
								</div>
							</div>
							<div class="col-lg-10">
								<div>
									<div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
								</div>								
							</div>
							<div class="col-lg-3">
								<div>
									<button class="btn-custom-search-1  text-white bg-green text-decoration-none text-capitalize" type="submit">send</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- form end -->

				<!-- mid contact info div start -->
				<div class="col-lg-4">
					<div class="mb-4">
						<div class="heading-text text-dark">
							<h2>Want to find out more?</h2>
						</div>

						<div class="pb-3 pt-3" hidden>
							<h5 class="green-color">Call us</h5>
							<p>
								<span class="green-color me-2"><i class="fas fa-phone"></i></span>
								<span>
									<a href="#" class="text-decoration-none text-dark">+923331517696</a>
								</span>
							</p>
						</div>

						<div class="pb-3 pt-3">
							<h5 class="green-color">Email us</h5>
							<p>
								<span class="green-color me-2"><i class="fas fa-envelope"></i></span>
								<span>
									<a href="mailto:info@sarkarijob.pk" class="text-decoration-none text-dark">info@sarkarijob.pk</a>
								</span>
							</p>
						</div>

						<div class="pb-3 pt-3">
							<h5 class="green-color">Address</h5>
							<p>
								<span class="green-color me-2"><i class="far fa-map"></i></span>
								<span class="text-dark">
									Sarkarijob.pk, Pakistan
								</span>
							</p>
						</div>

						<div class="pb-3 pt-3 heading-text">
							<h2 class="green-color">Ready to start?</h2>
						</div>

						<div class="pt-4">
							<a href="#" class="btn-custom-search-1 text-white bg-green text-decoration-none text-uppercase" type="submit">
								submit your brief now! 
							</a>
						</div>

					</div>
				</div>
				<!-- mid contact info div end -->



			</div>
		</div>
		

	</div>
</section>
<!-- contact section end -->

<!-- footer section start -->
<?php include 'footer.php'; ?>
<!-- footer section end -->

 <!-- script area -->
 <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>



 <!-- custom js area  -->
 <script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "250px";
		  document.getElementById("main").style.marginLeft = "250px";
		  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		  document.getElementById("main").style.marginLeft= "0";
		  document.body.style.backgroundColor = "white";
		}
</script>
</body>
</html>