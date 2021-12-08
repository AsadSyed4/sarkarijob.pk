<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Job | Sarkarijob.pk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3392141693940903"
        crossorigin="anonymous"></script>
    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
    </script>
</head>

<body id="main">
    <amp-auto-ads type="adsense" data-ad-client="ca-pub-3392141693940903">
    </amp-auto-ads>
    <?php 
        include 'header.php'; 
        
        if (isset($_GET['city']))
        {
            $city = $_GET["city"];
        }
        if (isset($_GET['news']))
        {
            $news = $_GET["news"];
        }
        if (isset($_GET['depart']))
        {
            $depart = $_GET["depart"];
        }
        if (isset($_GET['cate']))
        {
            $s_cate = $_GET["cate"];
        }
        if (isset($_POST['city_s']))
        {
            $city_s = $_POST["city"];
        }
        if (isset($_POST['cate_array']))
        {
            $cate_array = $_POST["cate_array"];
        }
        if (isset($_POST['salary_array']))
        {
            $salary_array = $_POST["salary_array"];
        }
        if (isset($_POST['filter']))
        {
            $filter_title = $_POST["title"];
            $filter_city = $_POST["city"];
        }
        else
        {
            $filter_title = "";
            $filter_city = "";
        }
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 20;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_pages=0;
    ?>

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
    <section hidden>
        <div class="container">
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

    <!-- main content section start -->
    <section class="mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pb-3">
                        <h5>
                            <?php
					$count = "SELECT * FROM `job`";
					$result_count = mysqli_query($con,$count);
					echo mysqli_num_rows($result_count);					  
					 ?>
                            Jobs</h5>
                    </div>
                </div>

                <!-- left side bar start -->
                <div class="col-lg-3">
                    <div>
                        <div hidden>
                            <p><strong>Applied filters</strong> <a href="#" class="text-decoration-none"><small>clear
                                        all</small></a></p>
                            <?php
                            if (!empty($filter_title))
                            {
                                echo '
                                <div id="btn-top1">
                                    <a class="border p-2 rounded d-block text-decoration-none text-dark border-dark w-50 mb-3">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0">'.$filter_title.'</p>
                                            <button class="mb-0 bg-transparent" style="cursor: pointer; border:none;" id="title">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                                <script>
                                    $(document).ready(function() {
                                        $("#title").on("click", function() {
                                            $("#btn-top1").toggle();
                                        });                                    
                                </script>';
                            }
                            if (!empty($filter_city))
                            {
                                echo '
                                <div id="btn-top2">
                                    <a href="#"
                                        class="border p-2 rounded d-block text-decoration-none text-dark border-dark w-50 mb-3">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0">'.$filter_city.'</p>
                                            <p class="mb-0" style="cursor: pointer;"
                                                onclick="document.getElementById("btn-top2").style.display = "none";"><i
                                                    class="fas fa-times"></i></p>
                                        </div>
                                    </a>
                                </div>';
                            }
                            if (!empty($s_cate))
                            {
                                echo '
                                <div id="btn-top3">
                                    <a href="#"
                                        class="border p-2 rounded d-block text-decoration-none text-dark border-dark w-50 mb-3">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0">'.$s_cate.'</p>
                                            <p class="mb-0" style="cursor: pointer;"
                                                onclick="document.getElementById("btn-top3").style.display = "none";"><i
                                                    class="fas fa-times"></i></p>
                                        </div>
                                    </a>
                                </div>';
                            }
                            if (!empty($t_cate))
                            {
                                echo '
                                <div id="btn-top4">
                                    <a href="#"
                                        class="border p-2 rounded d-block text-decoration-none text-dark border-dark w-50 mb-3">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0">'.$t_cate.'</p>
                                            <p class="mb-0" style="cursor: pointer;"
                                                onclick="document.getElementById("btn-top4").style.display = "none";"><i
                                                    class="fas fa-times"></i></p>
                                        </div>
                                    </a>
                                </div>';
                            }
                            if (!empty($city_s))
                            {
                                echo '
                                <div id="btn-top5">
                                    <a href="#"
                                        class="border p-2 rounded d-block text-decoration-none text-dark border-dark w-50 mb-3">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0">'.$city_s.'</p>
                                            <p class="mb-0" style="cursor: pointer;"
                                                onclick="document.getElementById("btn-top5").style.display = "none";"><i
                                                    class="fas fa-times"></i></p>
                                        </div>
                                    </a>
                                </div>';
                            }
                            if (!empty($cate_array))
                            {
                                foreach ($cate_array as $index)
                                {
                                    echo '
                                    <div id="btn-top'.$index.'">
                                        <a href="#"
                                            class="border p-2 rounded d-block text-decoration-none text-dark border-dark w-50 mb-3">
                                            <div class="d-flex justify-content-between">
                                                <p class="mb-0">'.$index.'</p>
                                                <p class="mb-0" style="cursor: pointer;"
                                                    onclick="document.getElementById("btn-top'.$index.'").style.display = "none";"><i
                                                        class="fas fa-times"></i></p>
                                            </div>
                                        </a>
                                    </div>';
                                }
                            }
                            ?>

                        </div>

                        <!-- left filter section start -->
                        <form method="POST" action="job.php">
                            <div class="left-filter border rounded">

                                <!-- salary range start -->
                                <div class="salary-range p-3" hidden>
                                    <h5>Filter your search Salary range</h5>
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="mt-3">
                                                <label>From:</label>
                                                <select class="form-select">
                                                    <option selected>Rs. Any</option>
                                                    <option>Rs. 1000</option>
                                                    <option>Rs. 2000</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mt-2">
                                                <label>To:</label>
                                                <select class="form-select">
                                                    <option selected>Rs. Any</option>
                                                    <option>Rs. 1000</option>
                                                    <option>Rs. 2000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- salary range end -->
                                </div>



                                <!-- job type start -->
                                <div class="salary-range p-3">
                                    <h5>Job type</h5>
                                    <div class="row row-cols-1 g-2">
                                        <?php
                                $filter_cate = "SELECT * FROM `job` GROUP BY `department` ";
                                $result_filter_cate = mysqli_query($con,$filter_cate);
                                if (mysqli_num_rows($result_filter_cate)>0)
                                {
                                    while ($row_filter_cate = $result_filter_cate->fetch_array())
                                    {
                                        $num_jobs = "SELECT * FROM `job` WHERE `department`='".$row_filter_cate['department']."';";
                                        $result_num_jobs = mysqli_query($con,$num_jobs);
                                        echo'
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" name="cate_array[]" type="checkbox" value="'.$row_filter_cate['department'].'" id="perm">
                                                <label class="form-check-label" for="perm">
                                                    '.$row_filter_cate['department'].'
                                                </label>
                                            </div>
                                        </div>';
                                    }
                                }
                                ?>
                                    </div>
                                    <!-- job type end -->
                                </div>
                                <div class="salary-range p-3">
                                    <h5>Salary</h5>
                                    <div class="row row-cols-1 g-2">
                                        <?php
                                $filter_cate = "SELECT * FROM `job` GROUP BY `salary` ";
                                $result_filter_cate = mysqli_query($con,$filter_cate);
                                if (mysqli_num_rows($result_filter_cate)>0)
                                {
                                    while ($row_filter_cate = $result_filter_cate->fetch_array())
                                    {
                                        $num_jobs = "SELECT * FROM `job` WHERE `salary`='".$row_filter_cate['salary']."';";
                                        $result_num_jobs = mysqli_query($con,$num_jobs);
                                        echo'
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" name="salary_array[]" type="checkbox" value="'.$row_filter_cate['salary'].'" id="perm">
                                                <label class="form-check-label" for="perm">
                                                    '.$row_filter_cate['salary'].'
                                                </label>
                                            </div>
                                        </div>';
                                    }
                                }
                                ?>
                                    </div>
                                    <!-- job type end -->
                                </div>

                                <!-- date start  -->
                                <div class="row g-2 p-3 pt-1 pb-1" hidden>
                                    <h5>Date posted</h5>
                                    <div class="col-12">
                                        <div class="mt-1">
                                            <select class="form-select">
                                                <option selected>Anytime</option>
                                                <option>Today (252)</option>
                                                <option>Last three days (801)</option>
                                                <option>Last week (2964)</option>
                                                <option>Last two weeks (5550)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- date end -->

                                <!-- specialisms start -->
                                <div class="p-3" hidden>
                                    <h5>Specialisms</h5>
                                    <div class="row row-cols-1 g-2 specialisms pt-2">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="trans">
                                                <label class="form-check-label" for="trans">
                                                    Transport & Logistics <span>(1)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="it-tel">
                                                <label class="form-check-label" for="it-tel">
                                                    IT & Telecoms <span>(1)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ed">
                                                <label class="form-check-label" for="ed">
                                                    Education <span>(1)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="s-c">
                                                <label class="form-check-label" for="s-c">
                                                    Social Care <span>(1)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="adm">
                                                <label class="form-check-label" for="adm">
                                                    Admin, Secretarial & PA <span>(1)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="engin">
                                                <label class="form-check-label" for="engin">
                                                    Engineering <span>(1)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cust-s">
                                                <label class="form-check-label" for="cust-s">
                                                    Customer Service <span>(1)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="accountan">
                                                <label class="form-check-label" for="accountan">
                                                    Accountancy <span>(1)</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- specialisms end -->

                                <!-- posted by start -->
                                <div class="salary-range p-3" hidden>
                                    <h5>Posted by</h5>
                                    <div class="row row-cols-1 g-2">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="perm">
                                                <label class="form-check-label" for="perm">
                                                    Agency <span>(1)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="tem">
                                                <label class="form-check-label" for="tem">
                                                    Employer <span>(1)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="contract">
                                                <label class="form-check-label" for="contract">
                                                    REED <span>(1)</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- posted by end -->

                                <!-- work from home start -->
                                <div class="row g-2 p-3 pt-1 pb-3" hidden>
                                    <h5>More options</h5>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Suitable for graduates <span>(1)</span> <span
                                                    class="badge bg-success ms-2">New</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- work from home end -->
                            </div>
                            <!-- Apply button -->
                            <div class="text-center p-2">
                                <button type="submit" name="shop_filter" class="btn btn-success">Apply Filter</button>
                            </div>
                            <!-- Apply button end-->
                            <div class="row mt-3 mb-3" hidden>
                                <div class="col-12">
                                    <div class="border p-3 pt-4 pb-4 rounded">
                                        <p>Find your perfect course through Reed.co.uk</p>
                                        <div class="text-center">
                                            <a href="#" class="text-decoration-none text-dark">
                                                <span>Search courses</span>
                                                <span class="ms-2"><i class="fas fa-chevron-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- left filter section end -->
                    </div>
                </div>
                <!-- left side bar end -->


                <!-- right side div start -->
                <div class="col-lg-7">
                    <div class="right-side pt-4">
                        <h5 class="text-end"><b>Sorted by date</b></h5>



                        <?php
                        
                        if (isset($_POST['filter']))
                        {
                            $job = "SELECT * FROM `job` WHERE";
                            if ((!empty($filter_title))&&(empty($filter_city)))
                            {
                                $job = $job." (`job_title` LIKE '%$filter_title%') ";
                            }
                            elseif ((!empty($filter_city))&&(empty($filter_title)))
                            {
                                $job = $job." (`city`='%$filter_city%') ";
                            }
                            elseif ((!empty($filter_title))&&(!empty($filter_city)))
                            {
                                $job = $job." (`job_title` LIKE '%$filter_title%' AND `city`='%$filter_city%') ";
                            }

                            $total_pages_sql = $job;
                            $job = $job."LIMIT ".$offset.",".$no_of_records_per_page;
                            $result_pages_sql = mysqli_query($con,$total_pages_sql);
                            $total_rows = mysqli_num_rows($result_pages_sql);
                                               
                            $total_pages = ceil($total_rows / $no_of_records_per_page);
                        }
                        elseif (isset($_GET['city']))
                        {
                            $job = "SELECT * FROM `job` WHERE (`city`='$city')";

                            $total_pages_sql = $job;
                            $job = $job."LIMIT ".$offset.",".$no_of_records_per_page;
                            $result_pages_sql = mysqli_query($con,$total_pages_sql);
                            $total_rows = mysqli_num_rows($result_pages_sql);
                                                    
                            $total_pages = ceil($total_rows / $no_of_records_per_page);
                        }
                        elseif (isset($_GET['news']))
                        {
                            $job = "SELECT * FROM `job` WHERE (`newspaper`='$news')";

                            $total_pages_sql = $job;
                            $job = $job."LIMIT ".$offset.",".$no_of_records_per_page;
                            $result_pages_sql = mysqli_query($con,$total_pages_sql);
                            $total_rows = mysqli_num_rows($result_pages_sql);
                                                    
                            $total_pages = ceil($total_rows / $no_of_records_per_page);
                        }
                        elseif (isset($_GET['depart']))
                        {
                            $job = "SELECT * FROM `job` WHERE (`department`='$depart')";

                            $total_pages_sql = $job;
                            $job = $job."LIMIT ".$offset.",".$no_of_records_per_page;
                            $result_pages_sql = mysqli_query($con,$total_pages_sql);
                            $total_rows = mysqli_num_rows($result_pages_sql);
                                                    
                            $total_pages = ceil($total_rows / $no_of_records_per_page);
                        }
                        elseif (isset($_GET['cate']))
                        {
                            $job = "SELECT * FROM `job` WHERE (`job_cetagory`='$s_cate')";

                            $total_pages_sql = $job;
                            $job = $job."LIMIT ".$offset.",".$no_of_records_per_page;
                            $result_pages_sql = mysqli_query($con,$total_pages_sql);
                            $total_rows = mysqli_num_rows($result_pages_sql);
                                                    
                            $total_pages = ceil($total_rows / $no_of_records_per_page);
                        }
                        elseif (isset($_POST['city_s']))
                        {
                            $job = "SELECT * FROM `job` WHERE (`city`='$city_s')";
                            $total_pages_sql = $job;
                            $job = $job."LIMIT ".$offset.",".$no_of_records_per_page;
                            $result_pages_sql = mysqli_query($con,$total_pages_sql);
                            $total_rows = mysqli_num_rows($result_pages_sql);
                                                    
                            $total_pages = ceil($total_rows / $no_of_records_per_page);
                        }
                        elseif (isset($_POST['shop_filter']))
                        {
                            if(!empty($_POST["cate_array"]))
                            {
                                $cate_array = $_POST["cate_array"];
                                $job = "SELECT * FROM `job` WHERE (`department` IN ('".implode("','",$cate_array)."'))";
                            }
                            elseif(!empty($_POST["salary_array"]))
                            {
                                $salary_array = $_POST["salary_array"];
                                $job = "SELECT * FROM `job` WHERE (`salary` IN ('".implode("','",$salary_array)."'))";
                            }
                            $total_pages_sql = $job;
                            $job = $job."LIMIT ".$offset.",".$no_of_records_per_page;
                            $result_pages_sql = mysqli_query($con,$total_pages_sql);
                            $total_rows = mysqli_num_rows($result_pages_sql);
                                                    
                            $total_pages = ceil($total_rows / $no_of_records_per_page);
                        }
                        else
                        {
                            $job = "SELECT * FROM `job`";
                            $total_pages_sql = $job;
                            $job = $job."LIMIT ".$offset.",".$no_of_records_per_page;
                            $result_pages_sql = mysqli_query($con,$total_pages_sql);
                            $total_rows = mysqli_num_rows($result_pages_sql);
                                                    
                            $total_pages = ceil($total_rows / $no_of_records_per_page);
                        }
                        $result_job = mysqli_query($con,$job);
                        if (mysqli_num_rows($result_job)>0)
                        {
                            while ($row_job = $result_job->fetch_assoc())
                            {
                                echo'
                                <div class="p-2 undo-div" id="undo'.$row_job['ID'].'">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="mb-0">Job hide</p>
                                        </div>
                                        <div>
                                            <a href="javascript:avoid(0);" class="text-decoration-none text-dark">Undo</a>
                                        </div>
                                    </div>
                                </div>
                                
                                    <div class="inner-content" id="'.$row_job['ID'].'">
                                        <div class="row">
                                            <div class="col-8">
                                                <div>
                                                    <div class="pb-2">
                                                        <span class="me-2">Promoted</span>
                                                        <span><i class="fas fa-bolt text-light-green"></i></span>
                                                        <span class="text-green">Easy Apply</span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <h4 style="color:green;"><b>'.$row_job['job_title'].'</b></h4>
                                                        
                                                        <div>
                                                            <p class="mb-0">
                                                                <span>Posted '.$row_job['date'].'</span>
                                                                <span hidden><a href="https://sarkarijob.pk" class="text-decoration-underline text-light-green">sarkaijobs.pk</a></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <div class="d-flex">
                                                                <div class="me-3" style="color:green;"><b>Department</b></div>
                                                                <p>'.$row_job['department'].'</p>
                                                            </div>
                                                        </div>';
                                                        if (!empty($row_job['city']))
                                                        {
                                                            echo'
                                                            <div class="col-4">
                                                                <div>
                                                                    <span class="me-3" style="color:green;"><i class="fas fa-map-marker-alt"></i></span>
                                                                    <span>'.$row_job['city'].'</span>
                                                                </div>
                                                            </div>';
                                                        }
                                                        echo'
                                                    </div>
                                                    <div>
                                                        
                                                        <div>
                                                            <p><span><a href="job-detail.php?job_code='.$row_job['ID'].'" class="text-decoration-none text-light-green"><b>See more >></b></a></span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="pt-3">
                                                    <div class="border border-2 border-dark rounded" hidden>
                                                        <a href="'.$row_job['Advertisement'].'" class="text-decoration-none text-dark">
                                                            <img src="" class="img-fluid w-100">
                                                        </a>
                                                    </div>
                                                    <div class="mt-3" hidden>
                                                        <a href="job-detail.html" class="justify-content-center text-decoration-none border border-2 border-dark fw-bold btn hover-effect d-flex">
                                                            <span class="me-2"><i class="far fa-heart text-green"></i></span>
                                                            <span class="d-none-1">Shortlisted Jobs</span>
                                                        </a>
                                                    </div>
                                                    <div class="mt-3 hide-btn'.$row_job['ID'].'">
                                                        <a href="javascript:avoid(0);" class="justify-content-center text-decoration-none border border-2 border-dark fw-bold btn hover-effect d-flex">
                                                            <span class="me-2"><i class="fas fa-eye-slash text-green"></i></span>
                                                            <span class="d-none-1">Hide</span>
                                                        </a>
                                                    </div>									
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <!-- hide and show code start -->
                                <script type="text/javascript">
                                $(document).ready(function() {
                                    $(".hide-btn'.$row_job['ID'].'").on("click", function() {
                                        $("#'.$row_job['ID'].'").hide();
                                        $("#undo'.$row_job['ID'].'").show();
                                    });
                                    $("#undo'.$row_job['ID'].'").on("click", function() {
                                        $("#'.$row_job['ID'].'").show();
                                        $("#undo'.$row_job['ID'].'").hide();
                                    });
                                });
                                </script>
                                <!-- hide and show code end -->
                                <br>';
                                }
                            }
                        ?>
                        <ul class="pagination" style="float:right;">
                            <li><a class="btn btn-success mx-1" href="?pageno=1">First</a></li>
                            <li class=" <?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                <a class="btn btn-secondary mx-1"
                                    href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                            </li>
                            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                <a class="btn btn-secondary mx-1"
                                    href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                            </li>
                            <li><a class="btn btn-success mx-1" href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                        </ul>
                    </div>
                </div>

                <!-- mid content div end -->

                <!-- right side ad section start -->
                <div class="col-lg-2" hidden>
                    <div class="pt-5 d-none d-lg-block">
                        <img src="images/side-ad.jpg" class="img-fluid">
                    </div>
                </div>
                <!-- right side ad section end -->

                <!-- ads area start -->
                <section class="d-block d-lg-none" hidden>
                    <div class="container">
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



</body>

</html>