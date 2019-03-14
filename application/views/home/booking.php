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
<div class="cp_inner-banner">
<img src="<?php  echo base_url();?>assets/images/inner-banner-img-02.jpg" alt="">

<div class="cp-inner-banner-holder">
<div class="container">
<h2>Booking Online</h2>

</div>
</div>
<div class="animate-bus">
<img src="<?php  echo base_url();?>assets/images/animate-bus2.png" alt="">
</div>
</div>


<div id="cp-main-content">

<section id="online_booking-main" class="online_booking-main" style="background: #05425c;
    border-bottom: 2px solid #145f7f;">
        <div class="container">
          <div class="from-outer">
              <div class="row">
                  <div class="col-md-12">
               
                 </div>
                  </div>
                 <form action="insert_booking_details" method="post" >
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                           <div class="form-group">
								<input type="text" class="form-control" id="email" name ="name" value="<?php if(isset($name)){echo $name;}  ?>" placeholder="Full Name*" required>
							 </div> 
                                                        </div>  
                                                        
                                                        <div class="col-sm-6">
                                                       
								 <div class="form-group">
								<input type="email" class="form-control" name ="email" value="<?php if(isset($email)){echo $email;}  ?>" placeholder="Email Address*" required>
							 </div>
						
                                                        </div> 
                                                        
                                                         <div class="col-sm-6">
							<div class="form-group">
						          <input type="number" class="form-control" name="num" value="<?php if(isset($number)){echo $number;}  ?>" placeholder="Phone*" required>
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
                                                             <label>Pick Up Date*</label>
								<input type="date" class="form-control" name="p_date" required>
							 </div>
                                                             
                                                        </div> 
                                                        
                             <div class="col-sm-2 col-xs-4">
							 <div class="form-group">
                                                              <label>Hours*</label>
								 <select required class="form-control" name="hours" >
                                                                   <option disabled>Select</option> 
                                                                    <option value="1">1</option> 
                                                                   <option value="2">2</option> 
                                                                   <option value="3">3</option> 
                                                               </select>
							 </div>
                                                        </div> 
                                                        
                                                          <div class="col-sm-2 col-xs-4">
							 <div class="form-group">
                                                              <label>Minutes*</label>
								 <select class="form-control" name="minutes" required>
                                                                   <option disabled>Select</option> 
                                                                    <option value="1">1</option> 
                                                                   <option value="2">2</option> 
                                                                   <option value="3">3</option> 
                                                               </select>
							 </div>
                                                        </div> 
                                                        
                                                            <div class="col-sm-2 col-xs-4">
							 <div class="form-group">
                                                              <label>AM/PM*</label>
								 <select class="form-control" name="dur" required>
                                                                   <option disabled>Select</option> 
                                                                   <option value="AM">AM</option> 
                                                                   <option value="PM">PM</option> 
                                                               </select>
							 </div>
                                                        </div> 
                                                        <!--div class="col-sm-4">
							 <div class="form-group">
							  <label>Pickup Suburb*</label>
                                                            <select class="form-control" name="suburb">
                                                                   <option>Pickup Suburb*</option> 
                                                                   <option>Pickup Suburb1</option> 
                                                                   
                                                               </select>
							 </div>
                                                             
                                                        </div-->
                                                        
                                                         
														<div class="col-sm-4">
							 <div class="form-group">
						
                                                             <label>Pickup Suburb*</label>
								
								 <input id="autocomplete1" class="form-control" name="p_address" placeholder="Enter your address"
             onFocus="geolocate()"  name="p_address" type="text" required></input>
							 </div>
							 
							
                                                        </div>                                                           
														
														
														 
														<div class="col-sm-4">
							 <div class="form-group" >
							 	 <label>Drop Suburb*</label>
                                                               <input id="autocomplete" class="form-control"  placeholder="Enter your address"
             onFocus="geolocate()"  name="d_address" type="text" required></input>
							 </div>
                                                             
                                                        </div>
                                                        

                                                        
                                                        
                                                        
                                                         <div class="col-sm-4">
							 <div class="form-group">
                                                              <label>Vehicle Type</label>
								<select class="form-control" name="type" required="true" >
                                                                   <option disabled>Type Of Cab</option> 
                                                                   
                                                                   <option value="1">SUV</option> 
                                                                   <option value="2">Sedan</option> 
                                                               </select>
							 </div>
                                                        </div>
                                                        
                                                         <!--div class="col-sm-12">
							 <div class="form-group">
                                                              <label>Cab Service</label>
								 <select class="form-control" name="service_cab" required>
                                                                   <option >Select</option> 
                                                                   <option value="1">Service1</option> 
                                                                   <option value="2">Service2</option> 
                                                               </select>
							 </div>
                                                        </div--> 
                                                        
                                                         
                                                         <div class="col-sm-12">
							 <div class="form-group">
                                                             <textarea placeholder="Message" name="message" class="form-control"></textarea>
							 </div>
                                                        </div>
                                                    </div>
					
							 <div class="form-group-button">
								<button type="submit" class="submit-button">Submit</button>
							 </div>
						</form>
					</div>  
        </div>
    </section>


</div>
<script>
select = document.getElementById('select'); // or in jQuery use: select = this;
if (select.value) {
  // value is set to a valid option, so submit form
  alert(select);
  return true;
}
return false;

</script>
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
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
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

