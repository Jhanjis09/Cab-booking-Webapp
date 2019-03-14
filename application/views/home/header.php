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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<script type="text/javascript" src="<?php  echo base_url();?>assets/js/jquery-1.11.3.min.js"></script>

  
<link href="<?php  echo base_url();?>assets/css/bootstrap-datetimepicker.css" rel="stylesheet">

</head>
<style>
html.modal-active, body.modal-active {
  overflow: hidden;
}

#modal-container {
  position: fixed;
  display: table;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  transform: scale(0);
  z-index: 1;
}
#modal-container.seven {
  transform: scale(1);
}
#modal-container.seven .modal-background {
  background: rgba(0, 0, 0, 0);
  animation: fadeIn 0.5s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
}
#modal-container.seven .modal-background .modal {
  height: 75px;
  width: 75px;
  border-radius: 75px;
  overflow: hidden;
  animation: bondJamesBond 1.5s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
}
#modal-container.seven .modal-background .modal h2, #modal-container.seven .modal-background .modal p {
  opacity: 0;
  position: relative;
  animation: modalContentFadeIn .5s 1.4s linear forwards;
}
#modal-container.seven.out {
  animation: slowFade .5s 1.5s linear forwards;
}
#modal-container.seven.out .modal-background {
  background-color: rgba(0, 0, 0, 0.7);
  animation: fadeToRed 2s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
}
#modal-container.seven.out .modal-background .modal {
  border-radius: 3px;
  height: 162px;
  width: 227px;
  animation: killShot 1s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
}
#modal-container.seven.out .modal-background .modal h2, #modal-container.seven.out .modal-background .modal p {
  animation: modalContentFadeOut 0.5s 0.5 cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
}
#modal-container .modal-background {
  display: table-cell;
  background: rgba(0, 0, 0, 0.8);
  text-align: center;
  vertical-align: middle;
}
#modal-container .modal-background .modal {
  background: white;
  padding: 50px;
  display: inline-block;
  border-radius: 3px;
  font-weight: 300;
  position: relative;
}
#modal-container .modal-background .modal h2 {
  font-size: 25px;
  line-height: 25px;
  margin-bottom: 15px;
}
#modal-container .modal-background .modal p {
  font-size: 18px;
  line-height: 22px;
}
#modal-container .modal-background .modal .modal-svg {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  border-radius: 3px;
}
#modal-container .modal-background .modal .modal-svg rect {
  stroke: #fff;
  stroke-width: 2px;
  stroke-dasharray: 778;
  stroke-dashoffset: 778;
}

.content {
  min-height: 100%;
  height: 100%;
  background: white;
  position: relative;
  z-index: 0;
}
.content h1 {
  padding: 75px 0 30px 0;
  text-align: center;
  font-size: 30px;
  line-height: 30px;
}
.content .buttons {
  max-width: 800px;
  margin: 0 auto;
  padding: 0;
  text-align: center;
}
.content .buttons .button {
  display: inline-block;
  text-align: center;
  padding: 10px 15px;
  margin: 10px;
  background: red;
  font-size: 18px;
  background-color: #efefef;
  border-radius: 3px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
  cursor: pointer;
}
.content .buttons .button:hover {
  color: white;
  background: #009bd5;
}

@keyframes unfoldIn {
  0% {
    transform: scaleY(0.005) scaleX(0);
  }
  50% {
    transform: scaleY(0.005) scaleX(1);
  }
  100% {
    transform: scaleY(1) scaleX(1);
  }
}
@keyframes unfoldOut {
  0% {
    transform: scaleY(1) scaleX(1);
  }
  50% {
    transform: scaleY(0.005) scaleX(1);
  }
  100% {
    transform: scaleY(0.005) scaleX(0);
  }
}
@keyframes zoomIn {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes zoomOut {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}
@keyframes fadeIn {
  0% {
    background: rgba(0, 0, 0, 0);
  }
  100% {
    background: rgba(0, 0, 0, 0.7);
  }
}
@keyframes fadeOut {
  0% {
    background: rgba(0, 0, 0, 0.7);
  }
  100% {
    background: rgba(0, 0, 0, 0);
  }
}
@keyframes scaleUp {
  0% {
    transform: scale(0.8) translateY(1000px);
    opacity: 0;
  }
  100% {
    transform: scale(1) translateY(0px);
    opacity: 1;
  }
}
@keyframes scaleDown {
  0% {
    transform: scale(1) translateY(0px);
    opacity: 1;
  }
  100% {
    transform: scale(0.8) translateY(1000px);
    opacity: 0;
  }
}
@keyframes scaleBack {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0.85);
  }
}
@keyframes scaleForward {
  0% {
    transform: scale(0.85);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes quickScaleDown {
  0% {
    transform: scale(1);
  }
  99.9% {
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}
@keyframes slideUpLarge {
  0% {
    transform: translateY(0%);
  }
  100% {
    transform: translateY(-100%);
  }
}
@keyframes slideDownLarge {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(0%);
  }
}
@keyframes moveUp {
  0% {
    transform: translateY(150px);
  }
  100% {
    transform: translateY(0);
  }
}
@keyframes moveDown {
  0% {
    transform: translateY(0px);
  }
  100% {
    transform: translateY(150px);
  }
}
@keyframes blowUpContent {
  0% {
    transform: scale(1);
    opacity: 1;
  }
  99.9% {
    transform: scale(2);
    opacity: 0;
  }
  100% {
    transform: scale(0);
  }
}
@keyframes blowUpContentTwo {
  0% {
    transform: scale(2);
    opacity: 0;
  }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}
@keyframes blowUpModal {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes blowUpModalTwo {
  0% {
    transform: scale(1);
    opacity: 1;
  }
  100% {
    transform: scale(0);
    opacity: 0;
  }
}
@keyframes roadRunnerIn {
  0% {
    transform: translateX(-1500px) skewX(30deg) scaleX(1.3);
  }
  70% {
    transform: translateX(30px) skewX(0deg) scaleX(0.9);
  }
  100% {
    transform: translateX(0px) skewX(0deg) scaleX(1);
  }
}
@keyframes roadRunnerOut {
  0% {
    transform: translateX(0px) skewX(0deg) scaleX(1);
  }
  30% {
    transform: translateX(-30px) skewX(-5deg) scaleX(0.9);
  }
  100% {
    transform: translateX(1500px) skewX(30deg) scaleX(1.3);
  }
}
@keyframes sketchIn {
  0% {
    stroke-dashoffset: 778;
  }
  100% {
    stroke-dashoffset: 0;
  }
}
@keyframes sketchOut {
  0% {
    stroke-dashoffset: 0;
  }
  100% {
    stroke-dashoffset: 778;
  }
}
@keyframes modalFadeIn {
  0% {
    background-color: transparent;
  }
  100% {
    background-color: white;
  }
}
@keyframes modalFadeOut {
  0% {
    background-color: white;
  }
  100% {
    background-color: transparent;
  }
}
@keyframes modalContentFadeIn {
  0% {
    opacity: 0;
    top: -20px;
  }
  100% {
    opacity: 1;
    top: 0;
  }
}
@keyframes modalContentFadeOut {
  0% {
    opacity: 1;
    top: 0px;
  }
  100% {
    opacity: 0;
    top: -20px;
  }
}
@keyframes bondJamesBond {
  0% {
    transform: translateX(1000px);
  }
  80% {
    transform: translateX(0px);
    border-radius: 75px;
    height: 75px;
    width: 75px;
  }
  90% {
    border-radius: 3px;
    height: 182px;
    width: 247px;
  }
  100% {
    border-radius: 3px;
    height: 162px;
    width: 227px;
  }
}
@keyframes killShot {
  0% {
    transform: translateY(0) rotate(0deg);
    opacity: 1;
  }
  100% {
    transform: translateY(300px) rotate(45deg);
    opacity: 0;
  }
}

@keyframes slowFade {
  0% {
    opacity: 1;
  }
  99.9% {
    opacity: 0;
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}
</style>
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

</ul><span class="call_us_now"> <a><i class="fa fa-phone"></i></a> <font><a href="tel:+61-42521364">Call Us. + 61-42521364 </a></font></span>


</div>
</div>
</div>
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-6">

<strong class="cp-logo">
<a href="<?php  echo site_url()?>"><img src="<?php  echo base_url();?>assets/images/cp-logo.png" alt=""></a>
</strong>
</div>
 <div class="col-md-9 col-sm-9 col-xs-6 res-postion">
<h5 style="color:red;"><?php $msg= $this->session->flashdata('success');
if($msg=='success'){ 
	?>
	<script>
	$(document).ready(function() {

  

//$('.button').click();
$('.button').trigger('click')



});
	</script>
	<?php
}
else if($msg=='success_contact'){
	?>
	<script>
	$(document).ready(function() {

  

//$('.button').click();
$('.button1').trigger('click')



});
else if($msg=='success_test'){
	?>
	<script>
	$(document).ready(function() {

  

//$('.button').click();
$('.button2').trigger('click')



});
	</script>
	<?php
}

 ?></h5> 
<div class="cp-nav-holder">
<!--a href="<?php  echo site_url('Welcome/lost_password')?>" title="" class="menu-bar-icon"><i class="fa fa-bars" aria-hidden="true"></i></a-->
<a class="menu-bar-icon"><i class="fa fa-bars" aria-hidden="true"></i></a>
<ul class="navbar-nav">
<li><a href="<?php  echo site_url('Welcome/index')?>">Home</a></li>
<li><a href="<?php  echo site_url('Welcome/our_services')?>">Our Services</a></li>
<li><a href="<?php  echo site_url('Welcome/booking')?>">Book Online</a></li>
<li><a href="<?php  echo site_url('Welcome/testimonial')?>">Testimonials</a></li>
<li><a href="<?php  echo site_url('Welcome/contact_us')?>">Contact Us</a></li>
<li ><div style="display:none;" id="seven" class="button">Bond</div></li>
<li ><div style="display:none;" id="seven" class="button1">Bond</div></li>
<li ><div style="display:none;" id="seven" class="button2">Bond</div></li>


</ul>
</div>
</div>
</div>
</div>
</div>
</header>
 

