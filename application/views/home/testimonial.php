  <?php if(isset($this->session->userdata['logged_in'])) {
	  //print_r($this->session->userdata()); die;
	  $name = $this->session->userdata['logged_in']['name'];
	  $email = $this->session->userdata['logged_in']['email'];
	  $number = $this->session->userdata['logged_in']['num'];
	  $id = $this->session->userdata['logged_in']['userid'];
	  
  }
  ?>
    
<div class="cp_inner-banner">
<img src="<?php  echo base_url();?>assets/images/inner-banner-img-02.jpg" alt="">

<div class="cp-inner-banner-holder">
<div class="container">
<h2>Clients Reviews</h2>


</div>
</div>
<div class="animate-bus">
<img src="<?php  echo base_url();?>assets/images/animate-bus2.png" alt="">
</div>
</div>


<div id="cp-main-content">

<section class="cp-testimonial-section2 pd-tb80" style="padding-bottom:0px;">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12">

<div class="cp-clients-box">
<div class="cp-thumb">
<img src="<?php  echo base_url();?>assets/images/testimonial-thumb-01.jpg" alt="">
</div>
<blockquote class="cp-blockquote">
<p>I have had overall really good experiences with melboune13cab , having used them a few times now. I first booked silver service from Melbourne airport, since
they offer flat rate fees and lower than other cab services.</p>
</blockquote>
<ul class="cp-clients-listed">
<li>TIM NICHOLS</li>
</ul>
</div>
</div>
<div class="col-md-12 col-sm-12">

<div class="cp-clients-box">
<div class="cp-thumb">
<img src="<?php  echo base_url();?>assets/images/testimonial-thumb-02.jpg" alt="">
</div>
<blockquote class="cp-blockquote">
<p>The drivers are pleasant ( I&#39;ve forgotten the other person&#39;s name but all are good)! Highly recommend.</p>
</blockquote>
<ul class="cp-clients-listed">
<li>ALBERT EISHAL</li>
</ul>
</div>
</div>
<div class="col-md-12 col-sm-12">

<div class="cp-clients-box">
<div class="cp-thumb">
<img src="<?php  echo base_url();?>assets/images/testimonial-thumb-03.jpg" alt="">
</div>
<blockquote class="cp-blockquote">
<p>I have used good taxi more times than I can count and have nothing but praise for their way of business. Other services may be cheaper, but you cannot put a
price on reliability. When you are constantly headed to the airport as I am, there is no room to take any chances on missing a flight. Always on time, never any
surprises. One flat rate, always.</p>
</blockquote>
<ul class="cp-clients-listed">
<li>
ARK COLGAN
</li>
</ul>
</div>
</div>
<div class="col-md-12 col-sm-12">

<div class="cp-clients-box">
<div class="cp-thumb">
<img src="<?php  echo base_url();?>assets/images/testimonial-thumb-04.jpg" alt="">
</div>
<blockquote class="cp-blockquote">
<p>Friendly and have always been on time. No delay ever. Pretty consistently good reviews with only a few hiccups which are expected with Yelp.</p>
</blockquote>
<ul class="cp-clients-listed">
<li>
SARAH JEKS
</li>
</ul>
</div>
</div>
    
<div class="col-md-12 col-sm-12">

<div class="cp-clients-box">
<div class="cp-thumb">
<img src="<?php  echo base_url();?>assets/images/testimonial-thumb-05.jpg" alt="">
</div>
<blockquote class="cp-blockquote">
<p>Punctual, reliable service at good prices. They accept credit cards and are straight forward. Will
use again. </p>
</blockquote>
<ul class="cp-clients-listed">
<li>TANGELA EKHOFF</li>
</ul>
</div>
</div>
<div class="col-md-12 col-sm-12">

<div class="cp-clients-box">
<div class="cp-thumb">
<img src="<?php  echo base_url();?>assets/images/testimonial-thumb-06.jpg" alt="">
</div>
<blockquote class="cp-blockquote">
<p>Is this a best cab company on earth? Probably not, but it might be the best cab in the Melbourne city.
 </p>
</blockquote>
<ul class="cp-clients-listed">
<li>AMY TA</li>
</ul>
</div>
</div>
<div class="col-md-12 col-sm-12">

<div class="cp-clients-box">
<div class="cp-thumb">
<img src="<?php  echo base_url();?>assets/images/testimonial-thumb-07.jpg" alt="">
</div>
<blockquote class="cp-blockquote">
<p>Service on time, flat rate and super cheerful owner - those are all good things in my book</p>
</blockquote>
<ul class="cp-clients-listed">
<li>TOM ALDHN</li>
</ul>
</div>
</div>
<?php if(isset($testimonials))
foreach($testimonials as $tesyimonial){
	
	?>
	<div class="col-md-12 col-sm-12">

<div class="cp-clients-box">
<div class="cp-thumb">
<img src="<?php  echo base_url();?>assets/images/<?php echo $tesyimonial->image;?>" alt="">
</div>
<blockquote class="cp-blockquote">
<p><?php  echo $tesyimonial->comments;   ?></p>
</blockquote>
<ul class="cp-clients-listed">
<li><?php  echo $tesyimonial->name;   ?></li>
</ul>
</div>
</div>
	<?php
}



?>


</div>

<button type="submit" class="submit-button">View More</button>
<br></br>
</div>


<div class="cp-form-box cp-form-box2 add_review">
<h3>Write Your Feedback</h3>

<?php echo form_open_multipart('welcome/testimonial_add'); ?>
<div class="row-fluid">
<div class="col-md-3"></div>
<div class="col-md-6" style="background: #fff;
    padding: 24px 18px 15px;">
<div class="inner-holder">
<input type="text" placeholder="Name" name="name" required="">
</div>

<div class="inner-holder">
<input type="text" placeholder="Email Address" name="email" >
<input type="hidden"  name="user_id" value="<?php if(isset($id)){echo $id;}   ?>" >
</div>
<div class="inner-holder">
<p>Select Image</p>
<input type="file" placeholder="Choose Image" name="image" >
</div>
<div class="inner-holder">
<textarea placeholder="Write Your Feedback" name="comments" required></textarea>
</div>
<div class="inner-holder">
<!--button type="submit" class="btn-submit submit-button" value="Submit">Submit</button-->
<button type="submit" class="submit-button" value="Submit">Submit</button>
</div>
</div>
<div class="col-md-3"></div>
</div>
</form>
</div>
</section>


</div>
