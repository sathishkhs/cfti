<style>
input[type=radio]{
  border:2px solid white;
  box-shadow:0 0 0 1px #000;
  appearance:none;
  border-radius:50%;
  width:12px;
  height:12px;
  background-color:#fff;
  transition:all ease-in 0.2s;

}
input[type=radio]:checked{
  background-color:#000;
}
    </style>
    <?php if ($page_items->display_image == 1 && !empty($page_items->display_image) && file_exists((BANNER_IMAGE_PATH . $page_items->banner_image))) { ?>
<!--<section class="page-title ">-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <img class="w-100" src="<?php echo BANNER_IMAGE_PATH . $page_items->banner_image; ?>" alt="banner-image">
        <!--<div class="block text-center">-->
<!--          <span class="text-white">Donate Now</span>-->
<!--          <h1 class="text-capitalize mb-4 text-lg">Make a Big Difference -->
<!--with Small & Immediate Grants! -->
<!--</h1>-->
<!--        </div>-->
      </div>
    </div>
  </div>
<!--</section>-->
<?php } ?>

<section class="section py-4" style="text-align: center">
    <div class="container" id="secEducation">
        <div class="row">
            <div class="col-lg-12 col-sm-12 ">
                
                
                </div>
                
            </div>
        </div>
        
        
    </div>
</div>

</section>
<section class="section pt-5 pb-4">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 col-sm-12 ">
                <div class="contact-content text-justify">
                     <b >Our focus areas: </b>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li>Education</li>
                                    <li>Women Empowerment</li>
                                    <li>Art and Culture</li>
                                    <li>Rural Sports    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li>Healthcare (Expertise in COVID19 Relief Work)</li>
                                    <li>Disaster Management</li>
                                    <li>Small and immediate Grants</li>
                                </ul>
                            </div>
                        </div>
                        
                            
                        </ul>

                       <p> <b>Impact so far: </b>Through our various projects in above-mentioned focus areas, we touched lives of up to 5,00,000+ people in various parts of Maharashtra.</p>
                
                <p><b>Aim: </b> The total grants we have been able to disburse yearly is ₹2 lakhs to ₹3 lakhs. But witnessing the gravity of the need, we aim to raise ₹1,20,00,000, so that we can support more people in need.</p>
            
                <p><b>Bridging the support gap: </b> Lack of accessibility and avenues block support from reaching the needy at the grassroot level. Several philanthropic high-income groups and corporates are unable to provide the intended support to people who are in extreme need. At the same time, these needy people are unable to reach potential supporters. At CFTI, we are providing a platform to connect donors and the needy through our experience, expertise, and grassroot level accessibility. </p>
                </div>

               
            </div>
            <div class="col-lg-6 col-sm-12 border-1" style="box-shadow: 0 0 20px rgba(0,0,0,0.3); padding: 30px; border-radius: 13px;">
            <form id="popup_paypal_donate_form_onetime_recurring" action="<?php echo base_url('donate'); ?>"  method="POST" enctype="multipart/form-data">
                    <h3 class="text-md ">Donate Now <span class="text-color" style="font-size:19px">BE THE REASON FOR A SMILE...</span></h3>
                    
               <input type="hidden" name="table_name" value="payments">
               <input type="hidden" name="citizen" value="INDIAN">
               <input type="hidden" name="currency" value="INR">
                  <div class="row">
                      <div class="col-lg-12 my-3 btn-main " style="border-radius: 11px">
                        <div class=" d-flex flex-wrap  p-20 border-0 mb-2 btn-main">
                            <div class="form-group form-check  mt-2">
                                <input class="form-check-input ml-10" type="radio" checked id="one" name="radioamount" value="1000" >
                                <label class="form-check-label pl-10" for="one"> ₹1000</label> &nbsp;
                            </div>
                            <div class="form-group form-check mt-2">
                                <input class="form-check-input ml-10" type="radio" id="two" name="radioamount" value="2000" >
                                <label class="form-check-label pl-10" for="two"> ₹2000</label> &nbsp;
                            </div>
                            <div class="form-group form-check  mt-2">
                                <input class="form-check-input ml-10" type="radio" id="three" name="radioamount" value="5000" >
                                <label class="form-check-label pl-10" for="three"> ₹5000</label> &nbsp;
                            </div>
                            <div class="form-group form-check  mt-2">
                                <input class="form-check-input ml-10" type="radio" id="five" name="radioamount" value="10000">
                                <label class="form-check-label pl-10" for="five"> ₹10000</label> &nbsp;
                            </div>
                            <div class="form-group form-check  mt-2">
                                <input class="form-check-input ml-10" type="radio" id="seven" name="radioamount" value="15000" >
                                <label class="form-check-label pl-10" for="seven"> ₹15000</label> &nbsp;
                            </div>

                            <div class="form-group form-check mt-2">
                                <input class="form-check-input ml-10" type="radio" id="other" name="radioamount" >
                                <label class="form-check-label pl-10" for="other"> Other amount</label> &nbsp;
                                
                            </div>
                        </div>
                      </div>
                     
                      <div class="col-lg-12">
                        <div class="form-group ">
                            <!--<label>Custom Amount</label>-->
                            <input id="amount" type="text" name="amount" value="" class="form-control" onkeypress="checkother()" placeholder="Custom Amount">
                        </div>
                        </div>
                      <div class="col-lg-6">
                           <div class="form-group">
                                <!--<label>Your Name *</label>-->
                                <input name="full_name" id="full_name" type="text" name="full_name" class="form-control" placeholder="Your Name *">
                            </div>
                      </div>
                      <div class="col-lg-6">
                           <div class="form-group">
                            <!--<label>Your Email *</label>-->
                            <input id="email" type="email" name="email" class="form-control" placeholder="Email *">
                        </div>
                      </div>
                      <div class="col-lg-6">
                           <div class="form-group">
                                <!--<label>Pan Number *</label>-->
                                <input id="pan_number" type="text" name="pan_number" type="text" class="form-control" placeholder="Pan Number *">
                            </div>
                      </div>
                      <div class="col-lg-6">
                            <div class="form-group">
                                <!--<label>Your Phone Number *</label>-->
                                <input id="phone_number" type="text" name="phone_number" type="number" class="form-control" placeholder="Your Phone Number *">
                            </div>
                      </div>
                      <div class="col-lg-12">
                            <div class="form-group">
                                <!--<label>Address </label>-->
                                <input id="city" type="hidden" name="city" type="text" class="form-control">
                            </div>
                      </div>
                  </div>
                   <div class="col-sm-6 mx-auto">
                    <button class="btn btn-main rounded" name="submit" type="submit">Donate Now</button>
                    <p>Avail 80G Tax Exemption</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="section py-4" style="text-align: justify">
<div class="container" style="text-align: justify">
		
		<div class="row align-items-center">
			<div class="col-lg-12 text-center">
				<h2 class="mt-3 content-title ">Process</h2>
				<br>
			</div>
		</div>
		<div class="row ">
			<div class="col-lg-4 col-md-6 col-12">
				<div class="intro-item mb-5 mb-lg-0 text-center p-4" style="box-shadow: 0 0 3px rgba(0,0,0,0.2);"> 
					<img src="assets/img/thermatic/application.png" alt="" class="img-fluid w-45">
					<h4 class="mt-4 mb-3 text-color">Application</h4>
					<p>Our on-field volunteers send us grants application 
by understanding the situations & their criticality.
</p>
					<br>
					
				</div>
				<br>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="intro-item mb-5 mb-lg-0 text-center p-4" style="box-shadow: 0 0 3px rgba(0,0,0,0.2);">
					<img src="assets/img/thermatic/verification.png" alt="" class="img-fluid w-45">
					<h4 class="mt-4 mb-3 text-color">Verification</h4>
					<p>Our desk volunteers verify the details of the applicants to rule out fraudulent cases.</p>
					<br>
					
				</div>
				<br>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="intro-item text-center p-4" style="box-shadow: 0 0 3px rgba(0,0,0,0.2);">
					<img src="assets/img/thermatic/fund_discursement.png" alt="" class="img-fluid w-45">
					<h4 class="mt-4 mb-3 text-color">Fund disbursement</h4>
					<p>Upon receiving the verified applications, funds are released within 24-48 hours on the basis of criticality.</p>
					
				</div>
				<br>
			</div> 
			
		</div>
	</div>
    <div class="container" id="secEducation">
        <div class="row">
            <div class="col-lg-12 col-sm-12 ">
                <h2 class=" content-title "> Need & Transparency</h2>
                <p>
                Emergencies and unfortunate situations cannot be predicted. So, we want to stay prepared to be able to help those who are in immediate need of funds. In this regard, we need continuous support from you – individual donors, CSR partners, and philanthropic groups. 
                    <br>
                    </p>
                    <ul>
                        <li>	We urge you to support our efforts by donating ₹25,000, ₹50,000, or ₹1,00,000 with a pledge to continue your association with us for a minimum period of 5 years.</li>
                        <li>	We will keep you updated on how your donation is spent by sharing reports periodically. </li>
                    </ul>
                    
                    <h2 class=" content-title "> About CFTI </h2>
                    <p>
                    Centre for Transforming India (CFTI) is a registered non-profit Trust under Indian Trusts Act, 1882.  CFTI is NITI Aayog approved, 80G, 12A and Form CSR1 certified trust. This trust is run by profound, dynamic, young trustees that consist of MD of newspaper, businessmen, and foreign educated graduates. 
                        <br>
                        </p>
                    <p>
                    CFTI aims to bring opportunities to people in rural India by empowering them through education, healthcare, and economic opportunities. Our aim is to create social harmony and further the growth of India through education, poverty alleviation, women empowerment, relief during natural calamities, medical aid, and the like.
                        <br>
                        </p>
                        <h5>The key element of our NGO is strong grassroot level connects. We have 700+ grassroot-level volunteers across Maharashtra.</h5>

                       
            </div>
       
        </div>
    </div>
   
    
        </div>
    </div>
   
</section>

<section class="section gallery py-1 ">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 col-md-12">
				<div class="section-title text-center">
					
					<h2 class="mt-3 mb-4 position-relative text-color" style="box-shadow: 0 0 3px rgba(0,0,0,0.2);">Donate towards our Immediate Relief Grant Programme & make a big difference in the lives of people 
who really need your support. <span style="color:#232323">CONTRIBUTE GENEROUS</span>
</h2>
				
				</div>
			</div>
		</div>
	</div>
</section>



<div class="col-sm-12 col-md-12 mx-auto">
<!--<div class="form-body">-->
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
<!--                    <h3 class="text-center">Akshayachaitanya Donation Page</h3>-->
<!--                    <h4>Select any payment gateway to complete payment.</h4>-->
                    
                    <form id="razorpay-form" action="<?php echo base_url(); ?>donate/save_payment" method="POST">
                        <script type="text/javascript"  src="https://checkout.razorpay.com/v1/checkout.js"
                        data-buttontext=""
                        data-key="<?php echo $keyId; ?>"
                        data-amount="<?php echo $amount * 100; ?>"
                        data-currency="INR"
                        data-name="<?php echo $this->config->item('name') ?>"
                        data-image="<?php echo SETTINGS_UPLOAD_PATH . $settings->LOGO_IMAGE ?>"
                        data-description="<?php echo $this->config->item('description') ?>"
                        data-prefill.name="<?php echo $full_name ?>"
                        data-prefill.email="<?php echo $email ?>"
                        data-prefill.contact="<?php echo $phone_number ?>"
                        data-prefill.pan="<?php echo $pan_number ?>"
                        data-notes.pan="<?php echo $pan_number ?>"
                        data-notes.shopping_order_id="<?php echo $notes['razorpay_order_id']; ?> "
                        data-modal.confirm_close = 'true'
                        data-modal.ondismiss=function(){alert('close')}
                        <?php if ($displayCurrency !== 'INR') { ?>
                        data-display_amount="<?php echo $display_amount ?>" <?php } ?> <?php if ($displayCurrency !== 'INR') { ?>
                        data-display_currency="<?php echo $display_currency ?>" <?php } ?>
                        data-redirect = 'true'
                        data-callback_url = "<?php echo base_url(); ?>donate/save_payment/<?php echo $insert_id .'/'.$table_name; ?>"
                    
                        >

                      
                        </script>
                      
                      
                       
                    </form>
                    
                
            </div>
        </div>
        </div>
    <!--</div>-->
</div>
</div>
<style>
  .razorpay-payment-button{
    visibility: hidden;
  }
</style>


<script type="text/javascript">
        window.onload = function() {
            var button = document.getElementById('clickButton');
            <?php if (!empty($keyId) && !empty($amount)) { ?>
                $('#razorpay-form').submit();
            <?php } ?>
            $('#modal-close').on('click', function() {

                //  window.location.replace("donate");
                window.location.href = 'annadana-seva';

            });
            $('#positiveBtn').on('click', function() {

                //  window.location.replace("donate");
                window.location.href = 'annadana-seva';

            });


        }


      
        function modal_close() {
            window.location.href = 'annadana-seva';
        }
    </script>


