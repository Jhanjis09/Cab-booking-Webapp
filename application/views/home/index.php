  <?php if(isset($this->session->userdata['logged_in'])) {
	  
	  $name = $this->session->userdata['logged_in']['name'];
	  $email = $this->session->userdata['logged_in']['email'];
	  $number = $this->session->userdata['logged_in']['num'];
	  
  }
  ?>
    
    <style>
     
      #autocomplete {
       
        top: 0px !important;
        left: 0px !important;
        width: 99% !important;
      }
	  
	  #autocomplete1 {
      
        top: 0px !important;
        left: 0px !important;
        width: 99% !important;
      }

    
      
    </style>
  

<div class="cp_banner">
<div class="owl-carousel" id="cp_banner-slider">
	<div class="item">
	
		<img src="<?php  echo base_url();?>assets/images/banner-img-01.jpg" alt="">
		<div class="cp-banner-caption">
		<div class="container">
			<div class="row">
			<div class="col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="banner-inner-holder">
				<h2>Most Trusted Cab Company  in Victoria (Melbourne) </h2>
<!--				<a href="#" title="" class="Discover">Discover More +</a>-->
				</div>
				</div>
				<div class="col-md-4 col-sm-5 col-xs-12">
					
				</div>
				<div class="col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
			</div>
		</div>
		</div>
	</div>
	<div class="item">
	<img src="<?php  echo base_url();?>assets/images/banner-img-02.jpg" alt="">
			<div class="cp-banner-caption">
			<div class="container">
			<div class="row">
			<div class="col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="banner-inner-holder">
				<h2>Most Trusted  Cab Company  in Victoria (Melbourne) </h2>
<!--				<a href="#" title="" class="Discover">Discover More +</a>-->
				</div>
				</div>
				<div class="col-md-4 col-sm-5 col-xs-12">
					
				</div>
				<div class="col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
			</div>
		</div>
			</div>
	</div>
	<div class="item">
	<img src="<?php  echo base_url();?>assets/images/banner-img-03.jpg" alt="">
		<div class="cp-banner-caption">
			<div class="container">
			<div class="row">
			<div class="col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="banner-inner-holder">
				<h2>Most Trusted  Cab Company  in Victoria (Melbourne) </h2>
<!--				<a href="#" title="" class="Discover">Discover More +</a>-->
				</div>
				</div>
				<div class="col-md-4 col-sm-5 col-xs-12">
					
				</div>
				<div class="col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
			</div>
		</div>
		</div>
	</div>
	
</div>
<div class="top-socal-icon">
	<a href="#" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
	<a href="#" title=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
	<a href="#" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
	<a href="#" title=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
</div>

<span class="scroll-btn">
	<a href="#online_booking-main">
		<span class="mouse">
			<span>
			</span>
		</span>
	</a>
  <p>Book now</p>

</span>
</div>
    
    <div class="clearfix"></div>   
    
    <section id="online_booking-main" class="online_booking-main">
        <div class="container">
          <div class="from-outer">
              <div class="row">
                  <div class="col-md-12">
                 <h4>Book Taxi Now</h4>
                 </div>
                  </div>
                 <form action="<?php echo base_url();?>welcome/insert_booking" method="post">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                           <div class="form-group">
								<input type="text" class="form-control" name = "name"  placeholder="Name*" value="<?php if(isset($name)){echo $name;}  ?>" required>
							 </div> 
                                                        </div>  
														
														  <div class="col-sm-6">
                                                           <div class="form-group">
								<input type="email" class="form-control" name = "email"  placeholder="Email*" value="<?php if(isset($email)){echo $email;}  ?>" required>
							 </div> 
                                                        </div>  
														
													
                                                        
                                                        
                                                        
                                                         <div class="col-sm-6">
							<div class="form-group">
						          <input type="number" class="form-control" name="num" placeholder="Mobile No.*" value="<?php if(isset($number)){echo $number;}  ?>" required>
							 </div>
                                                        </div> 
														
												<div class="col-sm-6">
							<div class="form-group">
						         
								   <input id="autocomplete" class="form-control" placeholder="Pick Up address"
             onFocus="geolocate()"  name="p_address" type="text" required></input>
							 </div>
                                                        </div>


                                               <div class="col-sm-6">
							                        <div class="form-group">
   
   
     <input id="autocomplete1" class="form-control" placeholder="Drop address"
             onFocus="geolocate()"  name="d_address" type="text" required></input>
									                   </div>
                                                        </div>														
														
														
														
                                                        
                                                         <div class="col-sm-6">
							  <div class="form-group">
                                                               <select class="form-control" name="p_count" required>
                                                                   <option disabled>No of Passengers*</option> 
                                                                   <option value="1">1</option> 
                                                                   <option value="2">2</option> 
                                                                   <option value="3">3</option> 
                                                               </select>
                                                           </div>
                                                        </div>


<div class="col-sm-6">
							  <div class="form-group">
                                                               <select class="form-control" name="l_count" required>
                                                                   <option disabled>No of Luggage</option> 
                                                                   <option value="1">1</option> 
                                                                   <option value="2">2</option> 
                                                                   <option value="3">3</option> 
                                                               </select>
                                                           </div>
                                                        </div>
														
														
														<div class="col-sm-6">
							                         <select class="form-control" name="type" required>
                                                                   <option disabled>Type Of Cab</option> 
                                                                   
                                                                   <option value="1">SUV</option> 
                                                                   <option value="2">Sedan</option> 
                                                               </select>
                                                        </div>
														
                                                               <br></br>
                                                         <div class="col-sm-12">
							 <div class="form-group">
                                                             <textarea  placeholder="Message" name="message" class="form-control" 
															 ></textarea>
							 </div>
                                                        </div>
                                                    </div>
					
							 <div class="form-group-button">
								<button type="submit" class="submit submit-button">Submit</button>
							 </div>
						</form>
					</div>  
        </div>
    </section>

<div id="cp-main-content">

<section class="cp-mobile-app-section">
<div class="container">
<div class="row">
<div class="margin-bottom">
	<div class="col-md-12 col-sm-12 text-center">
	<div class="cp-app-text">
	
	<h4 class="wel-come-text">What We Offer</h4>
	
	</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="address-outer text-center">
			<a href="<?php  echo site_url('Welcome/our_services')?>" title="" class="inner-icons"><i class="fa fa-taxi" aria-hidden="true"></i></a>
			<a href="<?php  echo site_url('Welcome/our_services')?>" title="">Automated taxi cab bookings</a>
			<p>If you book taxi cabs regularly, Melbourne13CAB automated booking services will suit you.</p>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="address-outer text-center">
			<a href="<?php  echo site_url('Welcome/our_services')?>" title="" class="inner-icons"><i class="fa fa-user" aria-hidden="true"></i></a>
			<a href="<?php  echo site_url('Welcome/our_services')?>" title="">First Choice Drivers</a>
			<p>Melbourne13CAB First Choice Drivers are experienced Taxi Cab Drivers who have exemplary</p>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="address-outer text-center">
			<a href="<?php  echo site_url('Welcome/our_services')?>" title="" class="inner-icons"><i class="fa fa-plane" aria-hidden="true"></i></a>
			<a href="<?php  echo site_url('Welcome/our_services')?>" title="">Melbourne Airport transfers</a>
			<p>Need to get to Melbourne Airport? Whether you're arriving at or departing from Melbourne Airport,</p>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
	<div class="address-outer text-center last-box">
			<a href="<?php  echo site_url('Welcome/our_services')?>" title="" class="inner-icons"><i class="fa fa-archive" aria-hidden="true"></i></a>
			<a href="<?php  echo site_url('Welcome/our_services')?>" title="">Parcel Delivery</a>
			<p>With more than 2500 taxi cabs in its network, Melbourne13cab can deliver your parcel to its</p>
		</div>
	</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="cp-app-thumb">

<img class="promo-6" src="<?php  echo base_url();?>assets/images/promo-6.jpg" alt="">
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="cp-app-text">

<h4>Welcome To Us</h4>
<img class="promo-6" src="<?php  echo base_url();?>assets/images/promo-6.jpg" alt="">
<p>Melbourne13cab is one of the leading Cabs in Melbourne for door-to-door personal transport , First Choice Drivers , Melbourne Airport transfers , parcel delivery,  Silver Service , station wagons , transport solutions for businesses. We have built a tradition of high quality services . We have our own commercial vehicles & Luxury Cabs in excellent condition.
 Melbourne13Cab services has got a strong fleet to support the Cab hire services in Melbourne. Our fleet includes a wide variety of vehicles from various brands & makes. The users can select the desired brand with all the required amenities and have a comfortable & convenient cab experience with our Melbourne Cab hire services. 

</p>
<a href="<?php  echo site_url('Welcome/about_us')?>" title="" class="Discover">Discover More +</a>
</div>
</div>
</div>
</div>
</section>

</div>
<section class="gray-outer">
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 text-center">
			<div class="cp-app-text">
				<h6 class="shortly">WHAT OUR CLIENTS SAY</h6>
				<h4 class="wel-come-text">Testimonials</h4>
			</div>
			<div class="col-md-12 col-sm-12 text-center">
			<div class="owl-carousel" id="cp-testimonial-slider">
				  <div class="custom-crosel">
						<img src="<?php  echo base_url();?>assets/images/w7-75x75.jpg" title="" alt="" >
						<h3>Anastasia Stone</h3>
						
						<p>Friendly and have always been on time. No delay ever. Pretty consistently good reviews with only a few hiccups which are expected with Yelp.</p>	
				   </div>
				  <div class="custom-crosel">
						<img src="<?php  echo base_url();?>assets/images/m2-75x75.jpg" title="" alt="" >
						<h3>Sarah Jenks</h3>
						
						<p>Punctual, reliable service at good prices. They accept credit cards and are straight forward. Will
use again.</p>	
				  </div>
				  <div class="custom-crosel">
						<img src="<?php  echo base_url();?>assets/images/m2-75x75.jpg" title="" alt="" >
						<h3>Tangela Ekhoff</h3>
						
						<p>Is this a best cab company on earth? Probably not, but it might be the best cab in the Melbourne city.</p>	
				  </div>
				  
				  
				</div>
			</div>
		</div>
	</div>
</div>
</section>
  <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete,autocomplete1;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };
	  

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            (document.getElementById('autocomplete')),
            {types: ['geocode']});
			
			  autocomplete1 = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete1')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
        autocomplete1.addListener('place_changed', fillInAddress);
      }
	  

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
	  
    </script>
   


   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9VozD948po0Kc4ASyItHb5b1dvr8c0is&libraries=places&callback=initAutocomplete"
        async defer></script>
