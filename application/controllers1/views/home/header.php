<?php
if (isset($this->session->userdata['logged_in'])) {
$id = ($this->session->userdata['logged_in']['userid']);
$email = ($this->session->userdata['logged_in']['email']);

} 

?>
<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Index</title>
<link rel="stylesheet" href="<?php  echo base_url();?>assets/css/custom.css" type="text/css">
<link rel="stylesheet" href="<?php  echo base_url();?>assets/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="<?php  echo base_url();?>assets/css/theme-color.css" type="text/css">
<link rel="stylesheet" href="<?php  echo base_url();?>assets/css/responsive.css" type="text/css">
<link rel="stylesheet" href="<?php  echo base_url();?>assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?php  echo base_url();?>assets/css/font-awesome.css" type="text/css">
<link rel="stylesheet" href="<?php  echo base_url();?>assets/css/icomoon.css" type="text/css">

<link href="<?php  echo base_url();?>assets/css/bootstrap-datetimepicker.css" rel="stylesheet">

</head>

<body>
<header class="cp_header">
<div class="cp-navigation-row">
<div class="container">
<div class="row">
<div class="col-md-12">

<div class="cp-topbar">
<ul class="top-listed">
<?php  if (isset($this->session->userdata['logged_in'])){
	?>
	<p style="color:red;"><?php echo $this->session->flashdata('msg'); ?></p>
	<li>Hi <?php print_r($this->session->userdata['logged_in']['name']);  ?></li>
	<li><a href="<?php  echo site_url('Welcome/logout')?>">Log Out</a></li>
	<?php
}
else{
	?>
	<li><a href="<?php  echo site_url('Welcome/login')?>">Log in</a></li>
<li class="active"><a href="<?php  echo site_url('Welcome/register')?>">Register</a></li>

	<?php
	
}
 ?>

</ul><span class="call_us_now"> <a><i class="fa fa-phone"></i></a> <font><a href="tel:+ 61-42521364">Call Us. + 61-42521364 </a></font></span>


</div>
</div>
</div>
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-6">

<strong class="cp-logo">
<a href="index.html"><img src="<?php  echo base_url();?>assets/images/cp-logo.png" alt=""></a>
</strong>
</div>
 <div class="col-md-9 col-sm-9 col-xs-6 res-postion">
<h5 style="color:red;"><?php echo $this->session->flashdata('success'); ?></h5> 
<div class="cp-nav-holder">
<a href="<?php  echo site_url('Welcome/lost_password')?>" title="" class="menu-bar-icon"><i class="fa fa-bars" aria-hidden="true"></i></a>
<ul class="navbar-nav">
<li><a href="<?php  echo site_url('Welcome/index')?>">Home</a></li>
<li><a href="<?php  echo site_url('Welcome/our_services')?>">Our Services</a></li>
<li><a href="<?php  echo site_url('Welcome/booking')?>">Book Online</a></li>
<li><a href="<?php  echo site_url('Welcome/testimonial')?>">Testimonials</a></li>
<li><a href="<?php  echo site_url('Welcome/contact_us')?>">Contact Us</a></li>

</ul>
</div>
</div>
</div>
</div>
</div>
</header>



