<?php include "header.php";?>

<?php include "navbar.php";?>

<!--------------------------------------Carousel start from here---------------------------------------->

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/image1.jpg" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="image/img2.jpg" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="image/img3.jpg" alt="" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>

<!--Timing & Appointment starts from here-->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-offset-1 col-lg-3 col-md-4 col-xs-4 col-sm-4">
			<div class="panel panel-default" id="box">
			  <div class="panel-body">
			  	<p id="panel-head">Opening Hours</p>
			  	<hr>
			  	<table class="table table-responsive table-bordered table-hover">
			  		<tbody>
			  			<tr>
			  				<td>Monday-Saturday</td>
			  				<td>9.00 AM - 1.30PM</td>
			  				<td>5.00 PM - 7.30PM</td>
			  			</tr>
			  			<tr>
			  				<td>Sunday</td>
			  				<td>9.00 AM - 1.30PM</td>
			  				<td>closed</td>
			  			</tr>
			  		</tbody>
			  	</table>
			  </div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4"></div>
		<div class="col-lg-3 col-md-4 col-xs-4 col-sm-4">
			<div class="panel panel-default" id="box">
			  	<div class="panel-body">
				  	<p id="panel-head"><a href="appoinment.php">Appointment</a></p>
				  	<hr>
				  	<center>
						<p>
					  		For appointment, click here!
					  	</p>
					  	<button id="appointment-button"><a href="appointment.php" style="color: white; text-decoration: none;">APPOINTMENT</a></button>
					</center>
					<br><br>
			  	</div>
			</div>
		</div>
	</div>
</div>
<br>

<?php include "footer.php";?>