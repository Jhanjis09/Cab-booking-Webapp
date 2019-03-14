<?php    

if(isset($data)){
	?>
	<h2> Try Again Later</h2>
	<?php
}
else{
	?>
	<div class="cp_inner-banner">
<img src="<?php  echo base_url();?>assets/images/inner-banner-img-02.jpg" alt="">
<div class="cp-inner-banner-holder">
<div class="container">
<h2>Register</h2>

</div>
</div>
<div class="animate-bus">
<img src="<?php  echo base_url();?>assets/images/animate-bus2.png" alt="">
</div>
</div>

<div id="cp-main-content">
<section class="cp-testimonial-section2 pd-tb80">
<div class="container">


<div class="cp-reservation-box cp-login-box">
<h5 style="color:red;"><?php echo $this->session->flashdata('msg'); ?></h5>
<h3>Please enter to Register</h3>
<form action="actionregister" method="post">
<div class="inner-holder">
<label>Enter Your Name</label>
<input type="text" placeholder="Your Name" name="name" required="">
</div>
<div class="inner-holder">
<label>Email Adderess</label>
<input type="text" placeholder="Email Address" name="email" required="">
</div>
<div class="inner-holder">
<label>Phone Number</label>
<input type="text" placeholder="Phone" name="number" required="">
</div>
<div class="inner-holder">
<label>Password</label>
<input type="password" required="" name="password" placeholder="Password">
</div>

<div class="inner-holder">
<label>Confirm Password</label>
<input type="password" required="" name="C_Password" placeholder="Confirm Password">
</div>


<div class="inner-holder">
<button type="submit" class="submit">Sign Up</button>
</div>

</form>
</div>
</div>
</section>
</div>

	
	<?php
}

?>
