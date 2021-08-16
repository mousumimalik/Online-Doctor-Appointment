<?php include "header.php";?>
<?php include "navbar.php";?>
<?php include 'config.php';?>

<center>
	<h3>Gallery</h3>
</center>
<br>
<!--**************************************** gallery start here ************************************-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		var magnifPopup = function() {
		$('.image-popup').magnificPopup({
			type: 'image',
			removalDelay: 300,
			mainClass: 'mfp-with-zoom',
			titleSrc: 'title',
			gallery:{
				enabled:true
			},
			zoom: {
				enabled: true, // By default it's false, so don't forget to enable it

				duration: 300, // duration of the effect, in milliseconds
				easing: 'ease-in-out', // CSS transition easing function

				// The "opener" function should return the element from which popup will be zoomed in
				// and to which popup will be scaled down
				// By defailt it looks for an image tag:
				opener: function(openerElement) {
				// openerElement is the element on which popup was initialized, in this case its <a> tag
				// you don't need to add "opener" option if this code matches your needs, it's defailt one.
				return openerElement.is('img') ? openerElement : openerElement.find('img');
				}
			}
		});
	};
	var animateBoxWayPoint = function() {

		if ($('.animate-box').length > 0) {
			$('.animate-box').waypoint( function( direction ) {

				if( direction === 'down' && !$(this).hasClass('animated') ) {
					$(this.element).addClass('bounceIn animated');
				}

			} , { offset: '75%' } );
		}

	};
	$(function(){
		magnifPopup();
		animateBoxWayPoint();
	});
});
</script>

<div class="container">
	<div class="row">
		<div class="col-md-12">
	            <div class="row">
	            	<?php
$sql = "SELECT * FROM `gallery` WHERE `active`=1";
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($query)) {
	$image = $row['image'];
	$desc = $row['description'];
	?>
	            	<div class="col-md-4">
	            		<div class="panel panel-info">
	            			<div class="panel-body">


	            		<div class="animate-box">
	            		<a href="image/<?php echo $image; ?>" class="image-popup fh5co-board-img">
	            			<img src="image/<?php echo $image; ?>" alt="" title="" style="height: 290px; width: 320px;">
	            		</a>
	            		<!--<div class="fh5co-desc"></div>-->
	            		</div>
	            		</div>
	            		<div class="panel-heading" style="color: black"><?php echo $desc; ?></div>
	            		</div>
	            	</div>
	            <?php }?>
	            	</div>
	            </div>
			</div>
		</div>
	</div>
</div>
  </div>

<?php include "footer.php";?>
