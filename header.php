<?php
require 'connection.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-green fixed-top w-100">
  <div class="container-fluid pe-ps-3">
  	<div class="d-flex justify-content-around p-2">
  		<button class="bg-transparent border-0 me-2 d-none-2" onclick="openNav()" type="button">
	      <span><i class="fas fa-bars text-white"></i></span>
	    </button>
	    <a class="navbar-brand fw-bold" href="index.php"><span class="text-light-green">sarkarijob</span><span class="text-white">.pk</span></a>
  	</div>

  	<!-- mobile menu -->
    
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
        <li class="nav-item navitem-1" hidden>
          <a class="nav-link nav-link-1" aria-current="page" href="job.php">Jobs</a>
        </li>
        <li class="nav-item navitem-1" hidden>
          <a class="nav-link nav-link-1" href="#">Courses</a>
        </li>
        <li class="nav-item navitem-1" hidden>
          <a class="nav-link nav-link-1" href="#">Career advice</a>
        </li>

        <li class="nav-item navitem-1 recurit" hidden>
        	<a href="#" class="nav-link nav-link-1">Recruiting? <strong>Post a job</strong></a>
        </li>
      </ul>

    </div>
    <form class="d-flex text-white" >
      	<a hidden href="#" class="text-decoration-none text-white border border-2 me-3 btn hover-effect d-none-1">
      		<span class="">Register CV</span>
      	</a>
        <a hidden href="#" class="btn text-white text-decoration-none " type="submit">Sign in</a>
        <a hidden href="#" class="text-decoration-none text-white ms-3 py-2 d-flex">
        	<span hidden class="me-2"><i class="far fa-heart"></i></span>
        	<span hidden class="d-none-1">Shortlisted Jobs</span>
        </a>
    </form>
  </div>
</nav>


<!-- mobile menu start -->
<div id="mySidenav" class="sidenav" >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="job.php" class="nav-link-1 navitem-1 pb-3 pt-3 border-bottom-1">Jobs</a>
  <a hidden href="#" class="nav-link-1 navitem-1 pb-3 pt-3 border-bottom-1">Courses</a>
  <a hidden href="#" class="nav-link-1 navitem-1 pb-3 pt-3 border-bottom-1">Career advice</a>
  <a hidden href="#" class="nav-link-1 navitem-1 ">Recruiting? <strong>Post a job</strong></a>
</div>
<!-- mobile menu end -->