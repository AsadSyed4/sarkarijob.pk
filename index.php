<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home | Sarkarijob.pk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>

<body id="main">
    <?php include 'header.php';?>
    <script type="text/javascript" data-adel="atag" src="//acacdn.com/script/atg.js" czid="awwdrbqk"></script>
    <script type='text/javascript' src='//pl16790841.effectivegatetocontent.com/8f/51/a4/8f51a4132265fe917cc864e410968dbd.js'></script>
   <script src="//acdcdn.com/script/suv4.js" data-adel="lwsu" cdnd="acdcdn.com" zid="5336919"></script>
   <script type='text/javascript' src='//pl16790841.effectivegatetocontent.com/8f/51/a4/8f51a4132265fe917cc864e410968dbd.js'></script>
   <script data-cfasync="false" src="//d175dtblugd1dn.cloudfront.net/?lbtdd=943982"></script>
   <script data-cfasync="false" src="//d175dtblugd1dn.cloudfront.net/?lbtdd=943983"></script>
   <script async type="application/javascript" src="https://a.exdynsrv.com/ad-provider.js"></script> 
 <ins class="adsbyexoclick" data-zoneid="4510506" data-keywords="keywords"></ins> 
 <script>(AdProvider = window.AdProvider || []).push({"serve": {}});</script>
    <!-- banner section start -->
    <section class="banner-job">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="p-lg-4 text-white">

                        <div class="heading-job">
                            <h1 class="ms-3">Love <?php echo date('l'); ?></h1>
                            <!-- <h3 class="mt-4 ms-3 d-none d-lg-block">Search 299,456 new jobs - 13,908 added in the last
                                24 hours</h3> -->
                        </div>

                        <div class="search-block d-none d-lg-block">
                            <form class="row g-3" method="POST" action="job.php">

                                <div class="col-lg-5">
                                    <label>What</label>
                                    <input type="text" class="form-control form-control-lg" name="title"
                                        placeholder="e.g &quot; care assistant &quot;">
                                </div>

                                <div class="col-lg-5">

                                    <label>Where</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control form-control-lg border-right-1" placeholder="town or postcode" aria-label="Recipient's username"
                                            aria-describedby="basic-addon2" name="city" >
                                        <span class="input-group-text border-left-1 bg-white" id="basic-addon2">
                                            <a href="#" class="text-decoration-none text-green">
                                                <i class="fas fa-bullseye"></i>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="text-end">
                                        <a href="#" class="text-decoration-none text-white">Browse job <span><i
                                                    class="fas fa-chevron-right"></i></span></a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <button type="submit" name="filter"
                                        class="text-decoration-none text-white bg-green btn-custom-search">Search
                                        jobs</button>
                                </div>
							</form>

                        </div>
                        <form class="row g-3 d-block d-lg-none d-xl-none mt-3">
                            <div class="col-lg-12">
                                <input type="text" class="form-control form-control-lg" name=""
                                    placeholder="e.g &quot; data engineer &quot;">
                            </div>
                            <div class="col-lg-12">
                                <a href="#"
                                    class="text-decoration-none text-white bg-green btn-custom-search w-100 text-center">Search
                                    10 jobs</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!-- ads area start -->
    <section>
        <div class="container" hidden>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pt-3 pb-3">
                        <img src="images/ad.jpg" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ads area end -->


    <!-- trending jobs start-->
    <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pt-3 pb-3 text-center">
                        <h1><b>Trending <span class="text-light-green"><strong>Jobs</strong></span></b></h1>
                    </div>
                </div>
            </div>

            <!-- 1 start -->
            <div class="d-flex justify-content-center mb-2 flex-wrap">
			<?php
			$job_title = "SELECT * FROM `job` GROUP BY `job_cetagory`";
			$result_jobs = mysqli_query($con,$job_title);
			if (mysqli_num_rows($result_jobs)>0)
			{
				while ($row_jobs = $result_jobs->fetch_assoc())
				{
                    $jobs_cate = $row_jobs['job_cetagory'];
                    $count = "SELECT * FROM `job` WHERE `job_cetagory`='$jobs_cate'";
                    $result_count = mysqli_query($con,$count);
					echo'
					<div class="ms-3 mt-2">
						<div>
        				    <a href="job.php?tcate='.$jobs_cate.'" class="text-decoration-none border border-2 border-dark fw-bold btn hover-effect">'.$row_jobs['job_cetagory'].' ('.mysqli_num_rows($result_count).')</a>
						</div>
					</div>';
				}
			}
			?>
            </div>
            <!-- 1 end -->
        </div>
    </section>
    <!-- trending jobs end -->

    <!-- search section start -->
    <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pt-4">

                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active fw-bold" id="pills-search-sector-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-search-sector" type="button" role="tab"
                                    aria-controls="pills-search-sector" aria-selected="true">Search by sector</button>
                            </li>
                            <li class="nav-item" role="presentation" hidden>
                                <button class="nav-link fw-bold" id="pills-search-location-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-search-location" type="button" role="tab"
                                    aria-controls="pills-search-location" aria-selected="false">Search by
                                    location</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">


                            <div class="tab-pane fade show active" id="pills-search-sector" role="tabpanel"
                                aria-labelledby="pills-search-sector-tab">

                                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xs-1">
								<?php
                                $i=1;
								$sector = "SELECT * FROM `job` GROUP BY `job_cetagory`";
								$result_sector = mysqli_query($con,$sector);
								if (mysqli_num_rows($result_sector))
								{
									while ($row_sector = $result_sector->fetch_assoc())
									{
										echo'
										<div class="col">
											<div class="mt-3">
												<p class="text-capitalize pt-3">
												    <a href="job.php?cate='.$row_sector['job_cetagory'].'" class="border-0 bg-transparent text-decoration-none hover-effect-tab" name="s_cate"><b>'.$row_sector['job_cetagory'].'</b></a>
												</p>
											</div>
										</div>';
									}
								}
                                ?>
                                </div>

                            </div>


                            <div class="tab-pane fade" id="pills-search-location" role="tabpanel"
                                aria-labelledby="pills-search-location-tab">
                                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xs-1">
								<?php
								$location = "SELECT * FROM `job` GROUP BY `city`";
								$result_location = mysqli_query($con,$location);
								if (mysqli_num_rows($result_location))
								{
									while ($row_location = $result_location->fetch_assoc())
									{
										echo'
										<div class="col">
											<div class="mt-3">
												<a href="job.php?city='.$row_location['city'].'" class="text-decoration-none text-white ">
													<div>
														<img src="images/" class="img-fluid">
													</div>
													<form method="POST" action="job.php">
                                                            <input type="text" name="city" value="'.$row_location['city'].'" hidden>
														<button style="background:transparent,border:none;" type="submit" name="city_s" class="hover-effect-tab"><b>'.$row_location['city'].'</b></button>
                                                    </form>
													</p>
												</a>
											</div>
										</div>';
									}
								}
                                ?>
                                </div>

                            </div>


                        </div>

                        <div class="text-center pt-3" hidden>
                            <a href="#" class="">See more sector <span><i class="fas fa-chevron-down"></i></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- search section end -->

    <!-- ads area start -->
    <section>
        <div class="container" hidden>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pt-3 pb-3">
                        <img src="images/ad.jpg" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ads area end -->


    <!-- last section start -->
    <section class="lightest-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-brand">
                        <div class="text-center d-block d-lg-none d-xl-none pb-3">
                            <h2>Find a job you love with the Pakistan's #1 job site</h2>
                        </div>
                        <div class="row row-cols-2 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="border rounded">
                                    <img src="images/the-ivy.webp" class="img-fluid">
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded">
                                    <img src="images/discovery.webp" class="img-fluid">
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded">
                                    <img src="images/cygnet.webp" class="img-fluid">
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded">
                                    <img src="images/caprice.webp" class="img-fluid">
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded">
                                    <img src="images/agincare.webp" class="img-fluid">
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded">
                                    <img src="images/vision-express.webp" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- right text div start -->
                <div class="col-lg-4">
                    <div class="ms-2">
                        <div class="pb-3 d-none d-lg-block">
                            <h2>Find a job you love with the Pakistan's #1 job site</h2>
                        </div>
                        <div class="text-center text-lg-start">
                            <p class="d-none d-lg-block">Your next role could be with one of these leading companies.
                            </p>
                            <a href="#"
                                class="text-decoration-none border border-2 fw-bold border-dark btn hover-effect mt-lg-0 mt-4">See
                                all companies</a>
                        </div>

                    </div>
                </div>
                <!-- right text div end -->

            </div>
        </div>
    </section>
    <!-- last section end -->

    <!-- footer section start -->
    <?php include 'footer.php'; ?>
    <!-- footer section end -->


    <!-- ads bottom start -->
    <div hidden id="fixedban"
        style="width: 100%; margin: auto; text-align: center; float: none; overflow: hidden; display: scroll; position: fixed; bottom: 0; z-index: 9999;">
        <div>
            <a id="close-fixedban" onclick="document.getElementById('fixedban').style.display = 'none';"
                style="cursor: pointer;">
                <img alt="close"
                    src="https://1.bp.blogspot.com/-_A83iDM6JYc/VhtxROLILrI/AAAAAAAADK4/aM4ikIA6aqI/s1600/btn_close.gif"
                    title="close button" style="vertical-align: middle;" />
            </a>
        </div>
        <div
            style="text-align: center; display: block; max-width: 728px; height: auto; overflow: hidden; margin: auto;">
            <a href="#" title="Banner iklan disini">
                <img style="max-width: 100%; height: auto; vertical-align: middle;" alt="Banner iklan disini"
                    src="https://3.bp.blogspot.com/-Lb_SOHQvN-g/Va9OHY2pehI/AAAAAAAAA7I/OimlEr7VMoo/s1600/www.askwithloud.com.png" />
            </a>
        </div>
    </div>

    <!-- ads bottom end -->



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
        document.getElementById("main").style.marginLeft = "0";
        document.body.style.backgroundColor = "white";
    }
    </script>
</body>

</html>