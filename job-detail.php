<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Job Details | Sarkarijob.pk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3392141693940903"
        crossorigin="anonymous"></script>
    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
    </script>
</head>

<body id="main">
    <amp-auto-ads type="adsense" data-ad-client="ca-pub-3392141693940903">
    </amp-auto-ads>
    <?php include 'header.php';
if (isset($_GET['job_code']))
{
	$jobe_code = $_GET['job_code'];
}

?>

    <!-- banner section start -->
    <section class="bg-white search-job-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="text-white">
                        <div class="d-none d-lg-block">
                            <form class="row g-3" hidden>
                                <div class="col-lg-4">
                                    <div class="d-flex">
                                        <label class="text-dark me-2 py-2"><strong>What</strong></label>
                                        <input type="text" class="form-control form-control-lg" name=""
                                            placeholder="e.g &quot; care assistant &quot;">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex">
                                        <label class="text-dark me-2 py-2"><strong>Where</strong></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control form-control-lg border-right-1"
                                                placeholder="town or postcode" aria-label="Recipient's username"
                                                aria-describedby="basic-addon2">
                                            <span class="input-group-text border-left-1 bg-white" id="basic-addon2">
                                                <a href="#" class="text-decoration-none text-green">
                                                    <i class="fas fa-bullseye"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <a href="#"
                                        class="text-decoration-none text-white bg-green btn-custom-search-1">Search
                                        jobs</a>
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
                                    <span class="input-group-text border-right-0 bg-white " id="basic-addon1"><i
                                            class="fas fa-search text-light-green"></i></span>
                                    <input type="text" class="form-control bg-white border-left-0 form-control-lg"
                                        placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
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


    <!-- breadcrumb section start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="job.php">Jobs</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Job details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb section end -->

    <!-- main content section start -->
    <section class="mb-5">
        <div class="container">
            <div class="row">

                <!-- left side div start -->
                <?php
				$single_job = "SELECT * FROM `job` WHERE `ID`='$jobe_code'";
				$result_single_job = mysqli_query($con,$single_job);
				if (mysqli_num_rows($result_single_job)>0)
				{
					while ($row_single_job = $result_single_job->fetch_assoc())
					{
						echo'
						<div class="col-lg-10">
							<div class="border-custom">
								<div class="row">
									<!-- left inner side div start -->
									<div class="col-lg-8">
										<div class="pt-2">
											<div class="pb-3">
												<h3><b>'.$row_single_job['job_title'].'</b></h3>
												<p>Posted '.$row_single_job['date'].'
												</p>
											</div>
											<div class="bg-light p-3 rounded">
												<div class="row g-4">
													<div class="col-md-6">
														<div class="d-flex">
															<span class="me-2"><i
																	class="far fa-calendar text-light-green"></i></span>
															<span class="spn">'.$row_single_job['exp_date'].'</span>
														</div>
														<div class="d-flex">
															<span class="me-2"><i
																	class="far fa-clock text-light-green"></i></span>
															<span class="spn">
																<a href="#" class="text-decoration-none text-primary">
																	'.$row_single_job['employment_status'].'</a>
															</span>
														</div>
													</div>

													<div class="col-md-6">';
														if (!empty($row_single_job['city']))
														{
															echo'
															<div class="d-flex">
																<span class="me-2"><i
																		class="fas fa-map-marker-alt text-light-green"></i></span>
																<span class="spn">
																	<a href="#" class="text-decoration-none text-primary">
																		'.$row_single_job['city'].'.</a>
																</span>
															</div>';
														}
														echo'
														<div class="d-flex">
															<span class="me-2"><i
																	class="fas fa-building text-light-green"></i></span>
															<span class="spn"> '.$row_single_job['department'].'</span>
														</div>

													</div>
												</div>
											</div>
											<div class="pt-3">';
    											if (!empty($row_single_job['post']))
    											{
    											    echo'
												<div class="col-md-6">
												<ul>
												
												<li></li>
												
												</ul>
												</div>';
											    }
											    echo'
												<div class="col-md-6">
												</div>
											</div>';
                                            if (!empty($row_single_job['image']))
											{
												echo'
												<div class="pt-3">
													<img class="col-md-12" src="images/jobs/'.$row_single_job['image'].'">
												</div>';
											}
											
											//if (!empty($row_single_job['job_discription']))
											//{
											//	echo'
											//	<div class="pt-3" hidden>
											//		<h4>Job Detail: '.$row_single_job['job_title'].'</h4>
											//		<p>
											//			'.$row_single_job['job_discription'].'
											//		</p>
											//	</div>';
											//}
											
											echo'
											<div class="pt-3">
												<h4>Education Level:</h4>
												<p>
												<ul>
													<li>'.$row_single_job['education_level'].'</li>
												</ul>

												</p>

											</div>
											<div class="pt-3" hidden>
												<h4>Main Duties for the General Foreman will include:</h4>
												<p>
												<ul>
													<li>Direct the work of operatives and sub-contractors</li>
												</ul>

												</p>

											</div>
											<!-- 2 end -->


											<!-- 3 -->
											<div class="pt-3" hidden>
												<h4>Are you the person we are looking for?</h4>
												<p>
													We need someone who is conscientious, hardworking, IT competent and is
													excellent at keeping records. Must also have experience in people management
													and motivation of staff.
												</p>
											</div>
											<!-- 3 end -->

											<!-- 4 -->
											<div class="pt-3" hidden>
												<h4>Excellent benefits package and personal development opportunities:</h4>
												<p>We don’t just offer a great place to work with a supportive, family
													atmosphere. We also offer:</p>
												<p>
												<ul>
													<li>Direct the work of operatives and sub-contractors</li>
													<li>Ensure environmental systems are implemented satisfactorily</li>
													<li>Contribute to preparation of programme</li>
													<li>Plan and order materials and plant to achieve programmes</li>
													<li>Keep daily records of work carried out</li>
													<li>Ensure that works proceed in accordance with site programmes</li>
													<li>Ensure all plant on site is suitable for the task and conforms to
														current legislation</li>
													<li>Ensure all work complies with quality, safety and environmental policies
														and the requirements of the company procedures<strong>.</strong></li>
												</ul>

												</p>
												<p>
													We are committed to equality of opportunity for all staff and applications
													from individuals are encouraged regardless of age, disability, sex, gender
													reassignment, sexual orientation, pregnancy and maternity, race, religion or
													belief and marriage and civil partnerships. We also place high importance on
													our inclusive recruitment policy and will do our very best to support those
													applicants who may need adjustments in order to take part in the recruitment
													process. Please do let us know if you require any additional assistance or
													adjustments.
												</p>

											</div>
											<!-- 4 end -->

											<!-- 5 -->
											<div class="pt-3">
												<h4>Required skills</h4>
												<div class="d-flex">
													<div class="border border-2 rounded p-2">'.$row_single_job['requirments'].'</div>
													
												</div>
											</div>
											<!-- 5 end -->


											<!-- 6 -->
											<div class="pt-3" hidden>
												<h4>Required skills</h4>

												<div class="bg-light p-3 rounded mt-2">
													<div class="row">
														<div class="col-md-9 pb-2">
															<span><b>Do you have a full UK licence?</b></span>
														</div>
														<div class="col-md-3">

															<div class="d-flex justify-content-between">
																<div class="form-check me-2">
																	<input class="form-check-input" type="radio"
																		name="flexRadioDefault" id="yes1" checked>
																	<label class="form-check-label" for="yes1">
																		Yes
																	</label>
																</div>
																<div class="form-check">
																	<input class="form-check-input" type="radio"
																		name="flexRadioDefault" id="no1" checked>
																	<label class="form-check-label" for="no1">
																		No
																	</label>
																</div>
															</div>

														</div>
													</div>
												</div>

												<div class="bg-light p-3 rounded mt-2">
													<div class="row">
														<div class="col-md-9 pb-2">
															<span><b>Do you experience with a main contractor?</b></span>
														</div>
														<div class="col-md-3">

															<div class="d-flex justify-content-between">
																<div class="form-check me-2">
																	<input class="form-check-input" type="radio"
																		name="flexRadioDefault" id="yes2" checked>
																	<label class="form-check-label" for="yes2">
																		Yes
																	</label>
																</div>
																<div class="form-check">
																	<input class="form-check-input" type="radio"
																		name="flexRadioDefault" id="no2" checked>
																	<label class="form-check-label" for="no2">
																		No
																	</label>
																</div>
															</div>

														</div>
													</div>
												</div>

												<div class="bg-light p-3 rounded mt-2">
													<div class="row">
														<div class="col-md-9 pb-2">
															<span><b>Do you have heavy civil experience?</b></span>
														</div>
														<div class="col-md-3">

															<div class="d-flex justify-content-between">
																<div class="form-check me-2">
																	<input class="form-check-input" type="radio"
																		name="flexRadioDefault" id="yes3" checked>
																	<label class="form-check-label" for="yes3">
																		Yes
																	</label>
																</div>
																<div class="form-check">
																	<input class="form-check-input" type="radio"
																		name="flexRadioDefault" id="no3" checked>
																	<label class="form-check-label" for="no3">
																		No
																	</label>
																</div>
															</div>

														</div>
													</div>
												</div>

											</div>
											<!-- 6 end -->

											<div class="mt-3 mb-3" hidden>
												<p>Reference: 44447405</p>
												<p>
													Bank or payment details should never be provided when applying for a job.
													For information on how to stay safe in your job search, visit <a href="#"
														class="text-decoration-none text-dark"> <b>SAFERjobs.</b></a>
												</p>
											</div>

											<div class="ms-3 pt-3" hidden>
												<div class="text-center">
													<a href="#"
														class="text-decoration-none border border-2 border-dark fw-bold btn hover-effect">
														<span class="me-2"><i class="fas fa-bell"></i></span>
														<span>Get Job Alerts</span>
													</a>
												</div>
											</div>';
											if (!empty($row_single_job['web_link']))
											{
											echo'
                                            <div class="mt-3">
												<a href="'.$row_single_job['web_link'].'"
													class="text-decoration-none text-white bg-green btn-custom-search-1 w-50 text-center">
													Apply now
												</a>
											</div>';
											}
											echo'
										</div>
									</div>
									<!-- left inner side div end -->
									<div class="col-lg-4">
										<div class="pt-3">
											
											<div class="mt-3" hidden>
												<a href="#"
													class="justify-content-center text-decoration-none border border-2 border-dark fw-bold btn hover-effect d-flex">
													<span class="me-2"><i class="far fa-heart text-green"></i></span>
													<span class="d-none-1">Shortlisted Jobs</span>
												</a>
											</div>
											<div class="mt-3" hidden>
												<a href="javascript:avoid(0);"
													class="justify-content-center text-decoration-none border border-2 border-dark fw-bold btn hover-effect d-flex">
													<span class="me-2"><i class="fas fa-share-alt text-light-green"></i></span>
													<span class="d-none-1">Share</span>
												</a>
											</div>
											<div class="border border-2 border-dark rounded mt-3" hidden>
												<a href="#" class="text-decoration-none text-dark">
													<img src="images/logo-job.png" class="img-fluid w-100">
												</a>
											</div>
										</div>
									</div>
								</div>




							</div>
						</div>';
					}
				}
				?>
                <!-- left side div end -->

                <!-- right side ad section start -->
                <div class="col-lg-2" hidden>
                    <div>
                        <img src="images/side-ad.jpg" class="img-fluid w-100">
                    </div>
                    <div class="mt-4">
                        <img src="images/side-ad.jpg" class="img-fluid w-100">
                    </div>
                </div>
                <!-- right side ad section end -->


            </div>
        </div>
    </section>
    <!-- main content section end -->

    <!-- footer section start -->
    <?php include 'footer.php'; ?>
    <!-- footer section end -->

    <!-- ads bottom start -->
    <div id="fixedban" hidden
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

    <!-- hide and show code start -->
    <script type="text/javascript">
    $(document).ready(function() {
        $(".hide-btn").on("click", function() {
            $(".inner-content").hide();
            $(".undo-div").show();
        });
        $(".undo-div").on("click", function() {
            $(".inner-content").show();
            $(".undo-div").hide();
        });
    });
    </script>
    <!-- hide and show code end -->

</body>

</html>