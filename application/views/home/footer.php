<footer class="main-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="left-colmn">
					<img src="<?php  echo base_url();?>assets/images/cp-logo.png" title="" alt="">
					<p>Melbourne13cab is one of the leading Cabs in Melbourne for door-to-door personal transport , First Choice Drivers , Melbourne Airport transfers , parcel delivery, Silver Service , station wagons , transport solutions for businesses.  </p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="left-colmn">
					<h3>Useful Links</h3>
						<ul class="info footerlink">
                                                    <li><a href="<?php  echo site_url('Welcome/index')?>"><i class="fa fa-sort-desc"></i> Home</a></li>
                                                    <li><a href="<?php  echo site_url('Welcome/our_services')?>"><i class="fa fa-sort-desc"></i> Our services</a></li>
                                                    <li><a href="<?php  echo site_url('Welcome/contact_us')?>"><i class="fa fa-sort-desc"></i> Contact Us</a></li>
                                                    <li><a href="<?php  echo site_url('Welcome/testimonial')?>"><i class="fa fa-sort-desc"></i> Reviews</a></li>
						
					 </ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="left-colmn">
					<h3>Contact Info</h3>
					<ul class="info">
							<li><a href="javascript:;"><i class="fa fa-envelope" aria-hidden="true"></i> info@melbourne13cab.com</a></li>
							<li><a href="javascript:;"><i class="fa fa-phone" aria-hidden="true"></i>	+61-425213648</a></li>
							<li><a href="javascript:;"><i class="fa fa-map-marker" aria-hidden="true"></i>Melbourne-3000 , Aus</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="left-colmn">
				<h3>Subscribe to Us</h3>
				<p>Subscribe to Our Newsletters!</p>
				<div class="subscribe">
					<input type="text" name="" placeholder="Enter your e-mail">
					<a href="#"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
				</div>
				</div>
			</div>
		</div>
		<div class="copy-right">
                    <p class="pull-left">&copy; 2018. All Rights Reserved.</p>
			<div class="socal-icon pull-right">
				<a href="#" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="#" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#" title=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</footer>


<script type="text/javascript" src="<?php  echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="https://rawgit.com/moment/moment/2.2.1/min/moment.min.js"></script>
<script src="<?php  echo base_url();?>assets/js/bootstrap-datetimepicker.js"></script>
<script src="<?php  echo base_url();?>assets/js/html5shiv.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php  echo base_url();?>assets/js/migrate.js"></script>

<script type="text/javascript" src="<?php  echo base_url();?>assets/js/owl.carousel.min.js"></script>




<script type="text/javascript" src="<?php  echo base_url();?>assets/js/custom-script.js"></script>


<script>
$(document).ready(function(){
    $(".menu-bar-icon").click(function(){
        $(".navbar-nav").toggle();
    });
});


</script>
<div id="modal-container">
  <div class="modal-background">
    <div class="modal">
      <h2>Thank You</h2>
      <p>We Will contact you shortly.</p>
      <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
								<rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
							</svg>
    </div>
  </div>
</div>

<div id="modal-container1">
  <div class="modal-background">
    <div class="modal">
      <h2>Thank You</h2>
      <p>We Will contact you shortly.</p>
      <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
								<rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
							</svg>
    </div>
  </div>
</div>

<div id="modal-container2">
  <div class="modal-background">
    <div class="modal">
      <h2>Thank You</h2>
      <p>Successfully Uploaded.</p>
      <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
								<rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
							</svg>
    </div>
  </div>
</div>
<script>
$('.button').click(function(){
	
  var buttonId = $(this).attr('id');
  $('#modal-container').removeAttr('class').addClass(buttonId);
  $('body').addClass('modal-active');
})

$('#modal-container').click(function(){
  $(this).addClass('out');
  $('body').removeClass('modal-active');
});
</script>
<script>
$('.button1').click(function(){
	
  var buttonId = $(this).attr('id');
  $('#modal-container1').removeAttr('class').addClass(buttonId);
  $('body').addClass('modal-active');
})

$('#modal-container1').click(function(){
  $(this).addClass('out');
  $('body').removeClass('modal-active');
});
</script>
<script>
$('.button2').click(function(){
	
  var buttonId = $(this).attr('id');
  $('#modal-container2').removeAttr('class').addClass(buttonId);
  $('body').addClass('modal-active');
})

$('#modal-container2').click(function(){
  $(this).addClass('out');
  $('body').removeClass('modal-active');
});
</script>

</body>
</html>
