<?php
include("header.php");
?>
<style>
.parent{
	position:relative;
}
.banner-content{
	position:absolute;
	top:130px;
}
.card{
	border:none;
}
.cover-section{
	background-color:#f7f8fa;
}
.modal-backdrop.show {
    /* opacity: .5; */
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    backdrop-filter: blur(3px);
}
.modal-backdrop.show {
    opacity: 1;
}
</style>
<!-- cover section started -->
<div class="container-fluid mb-4 cover-section shadow">
<div class="container">
  <div class="row p-5">
	<div class="col-sm-6 parent">
	<div class="banner-content">
	  <h1><b><i>GrowMore</i></b></h1>
	  <p>
	  <b><i>GrowMore</i></b> is an initiative to provide best and affordable learning.
	  </p>
	  <p>
	  <h2>Want to learn <span class="auto-type"></span></h2>
	  </p>
	  <a href="#" class="btn btn-info text-light shadow">Our Courses</a>
	  <button type="button" class="btn btn-info text-light shadow" data-bs-toggle="modal" data-bs-target="#get_certificate">
  Get Your Certificate Here...
</button>
	</div>
	</div>
	<div class="col-sm-6">
	  <img src="image/aa.jpg" class="img-fluid shadow rounded" alt="">
	</div>
  </div>
</div>
</div>
<!-- cover section ended -->
<!-- our courses started -->
<div class="container-fluid  bg-white pt-5 shadow">
<div class="container">
	<h1 class="text-center">Courses Offered</h1>
	<div class="row text-center p-5">
	 <div class="col-sm-4 mb-5">
		<div class="card shadow p-3 rounded">
			<img src="image/python.jpg" class="card-img-top" alt="..." height="200px">
			<div class="card-body">
			<h5 class="card-title">Python Core</h5>
			<p class="card-text">Course Duration: 2 months<br> 
			Get certified with this course
			</p>
			<a href="#" class="btn btn-info text-light shadow">Know More...</a>
			</div>
		</div>
	 </div>
	 	 <div class="col-sm-4 mb-5">
		<div class="card shadow p-3 rounded">
			<img src="image/c.png" class="card-img-top" alt="..." height="200px">
			<div class="card-body">
			<h5 class="card-title">C Programming </h5>
			<p class="card-text">Course Duration: 2 months<br> 
			Get certified with this course
			</p>
			<a href="#" class="btn btn-info text-light shadow">Know More...</a>
			</div>
		</div>
	 </div>
	 <div class="col-sm-4 mb-5">
		<div class="card shadow p-3 rounded">
			<img src="image/cpp.png" class="card-img-top" alt="..." height="200px">
			<div class="card-body">
			<h5 class="card-title">C++ Programming</h5>
			<p class="card-text">Course Duration: 2 months<br> 
			Get certified with this course
			</p>
			<a href="#" class="btn btn-info text-light shadow">Know More...</a>
			</div>
		</div>
	 </div>
	 <div class="col-sm-4 mb-5">
		<div class="card shadow p-3 rounded">
			<img src="image/java.png" class="card-img-top" alt="..." height="200px">
			<div class="card-body">
			<h5 class="card-title">Java</h5>
			<p class="card-text">Course Duration: 2 months<br> 
			Get certified with this course
			</p>
			<a href="#" class="btn btn-info text-light shadow">Know More...</a>
			</div>
		</div>
	 </div>
	 <div class="col-sm-4 mb-5">
		<div class="card shadow p-3 rounded">
			<img src="image/web.png" class="card-img-top" alt="..." height="200px">
			<div class="card-body">
			<h5 class="card-title">Web Designing</h5>
			<p class="card-text">Course Duration: 2 months<br> 
			Get certified with this course
			</p>
			<a href="#" class="btn btn-info text-light shadow">Know More...</a>
			</div>
		</div>
	 </div>
	 <div class="col-sm-4 mb-5">
		<div class="card shadow p-3 rounded">
			<img src="image/a.jpg" class="card-img-top" alt="..." height="200px">
			<div class="card-body">
			<h5 class="card-title">Graphic Designing</h5>
			<p class="card-text">Course Duration: 2 months<br> 
			Get certified with this course
			</p>
			<a href="#" class="btn btn-info text-light shadow">Know More...</a>
			</div>
		</div>
	 </div>
	 </div>
</div>
</div>
<!-- our courses section ended -->  
<!-- Certificate section started --> 
<div class="container py-5">
<h1 class="text-center">Certification</h1>
<div class="row">
<div class="col-sm-6 py-5">
<img class="img-fluid rounded shadow" src="image/cert.png">
</div>
<div class="col-sm-6 py-5">
<h3> Get Your Certificate</h3>
<p>
Total Certified Students = <b>100000</b>
</p>
<!-- Button trigger modal -->
<button type="button" class="btn btn-info text-light shadow" data-bs-toggle="modal" data-bs-target="#get_certificate">
  Get Your Certificate Here...
</button>

<!-- Modal -->
<div class="modal" id="get_certificate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<!--certificate section ended --> 
<?php
include("footer.php");
?>