	
	<div class="cp_inner-banner">
<img src="<?php  echo base_url();?>assets/images/inner-banner-img-02.jpg" alt="img">

<div class="cp-inner-banner-holder">
<div class="container">
<h2>WELCOME TO LOGIN</h2>

</div>
</div>
<div class="animate-bus">
<img src="<?php  echo base_url();?>assets/images/animate-bus2.png" alt="img">
</div>
</div>

 
<div id="cp-main-content">

<section class="cp-testimonial-section2 pd-tb80">
<div class="container">


<div class="cp-reservation-box cp-login-box">
<h5 style="color:red;"><?php echo $this->session->flashdata('msg'); ?></h5> 
<h3>Please enter to login</h3>
<form action="login_check" method="post">
<div class="inner-holder">
<label>Email Adderess</label>
<input type="text" placeholder="Email Address" name="email" required="">
</div>
<div class="inner-holder">
<label>Password</label>
<input type="password" required="" name="password" placeholder="Password">
</div>
<div class="inner-holder">
<!--button type="submit" class="submit submit-button">Login</button-->

<button type="submit" class="submit-button">Login</button>
<a href="<?php  echo site_url('Welcome/lost_password')?>" class="lost-pw">Lost Password</a>
</div>
<p>Lost using demo as bth username and password to view the user area.</p>
</form>
</div>
</div>
</section>
</div>

	

