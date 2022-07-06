<style>
    input[type=radio] {
        border: 2px solid white;
        box-shadow: 0 0 0 1px #000;
        appearance: none;
        border-radius: 50%;
        width: 12px;
        height: 12px;
        background-color: #fff;
        transition: all ease-in 0.2s;

    }

    input[type=radio]:checked {
        background-color: #000;
    }


    .item {
  display: flex;
  max-width: 1000px;
  margin: 0 auto;
}
.item .image {
  padding: 1em 2em;
}
.item .image > div {
  position: relative;
  text-align: center;
  font-size: 0.8em;
}
.item .image > div::after {
  content: "";
  width: 100%;
  height: 0;
  border-bottom: 1px solid #232b50;
  position: absolute;
  top: 2.75em;
  left: 2.5em;
  z-index: -1;
}
.item .image img {
  border-radius: 50%;
  height: 5em;
  border: 0.35em solid #5ed3bf;
}
.item .image span {
  display: block;
  clear: both;
  padding: 0.25em 0;
  margin: 0.5em 0;
  background: #3b4262;
  color: #fff;
  font-size: 20px
}
.item .details {
  position: relative;
  flex-grow: 1;
}
.item .details > div {
  border: 1px solid #232b50;
  border-radius: 0.5em;
  padding: 1.5em;
  margin: 1em 0;
}
.item .details > div h1 {
  color: #5ed3bf;
  font-size: 1.4em;
  margin: 0;
  padding: 0 0 0.5em 0;
  letter-spacing: 0.1em;
}
.item .details > div p {
  margin: 0;
  padding: 0;
  line-height: 150%;
}
.item .details::before {
  content: "";
  width: 0;
  height: 100%;
  border-left: 1px solid #232b50;
  position: absolute;
  top: 0;
  left: -4.35em;
  z-index: -1;
}
</style>
<section class="page-title bg-7">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <!-- <span class="text-white">Donate Now</span>
          <h1 class="text-capitalize mb-4 text-lg">Make a Big Difference 
with Small & Immediate Grants! 
</h1> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section py-4" style="text-align: center">
    <div class="container" id="secEducation">
        <div class="row">
            <div class="col-lg-12 col-sm-12 ">
                <h2>CFTI is providing relief aid in flood-hit Assam</h2>

            </div>

        </div>
    </div>


    </div>
    </div>

</section>
<section class="section pt-0 pb-4">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 col-sm-12 ">
                <div class="contact-content text-justify">
                    <p>On Sunday, 22 May 2022, the Assam State Disaster Management Authority (ASDMA) reported that the disastrous flood situation in the state
                        has affected nearly 7.20 lakh people across 22 districts. Not only has the floods inundated low-lying areas, but has also caused landslides
                        causing loss of lives. The authorities have set up more than 260 relief camps to lodge affected people and is setting up another 152 relief
                        distribution centres to provide help to crisis-hit people. In addition, the Indian Army, State Disaster Response Force, National Disaster
                        Response Force, and volunteers helped to rescue 26,236 stranded people.</p>
                    <b>Help people of Assam </b>

                    <ul>
                        <li>Our relief work locations: All the 22 affected districts – Barpeta, Biswanath, Cachar, Darang, Dhemaji, Dhubri,
                            Goalpara, Golaghat, Hailakandi, Hojai, Jorhat, Kamrup, Kamrup
                            (M), Karbi Anglong West, Karimganj, Lakhimpur, Majuli,
                            Morigaon, Nagaon, Nalbari, Sonitpur, and Udalguri.</li>
                        <li>Relief supplies: We are providing the following to the affected
                            people - clothes, food grains, torches, candles, stove, mats,
                            towels, medicines, sanitary pads for women, and cleaning
                            materials to clean the homes and roof sheets.</li>

                    </ul>
                    <b>Help crisis-hit people of Assam. Donate generously. </b>

                </div>


            </div>
            <div class="col-lg-6 col-sm-12 border-1 order-first order-md-2" style="box-shadow: 0 0 20px rgba(0,0,0,0.3); padding: 30px; border-radius: 13px;">
                <form id="popup_paypal_donate_form_onetime_recurring" action="<?php echo base_url('donate-to-assam-flood-relief'); ?>" method="POST" enctype="multipart/form-data">
                    <h2 class=" ">Donate Now <span class="text-color" style="font-size:15px">TO HELP FLOOD-AFFECTED PEOPLE IN ASSAM</span></h3>

                    <input type="hidden" name="table_name" value="payments">
                    <input type="hidden" name="citizen" value="INDIAN">
                    <input type="hidden" name="currency" value="INR">
                    <div class="row">
                        <div class="col-lg-12 my-3 btn-main " style="border-radius: 11px">
                            <div class=" d-flex flex-wrap  p-20 border-0 mb-2 btn-main">
                                <div class="form-group form-check  mt-2">
                                    <input class="form-check-input ml-10" type="radio" checked id="one" name="radioamount" value="1000">
                                    <label class="form-check-label pl-10" for="one"> ₹1000</label> &nbsp;
                                </div>
                                <div class="form-group form-check mt-2">
                                    <input class="form-check-input ml-10" type="radio" id="two" name="radioamount" value="2000">
                                    <label class="form-check-label pl-10" for="two"> ₹2000</label> &nbsp;
                                </div>
                                <div class="form-group form-check  mt-2">
                                    <input class="form-check-input ml-10" type="radio" id="three" name="radioamount" value="5000">
                                    <label class="form-check-label pl-10" for="three"> ₹5000</label> &nbsp;
                                </div>
                                <div class="form-group form-check  mt-2">
                                    <input class="form-check-input ml-10" type="radio" id="five" name="radioamount" value="10000">
                                    <label class="form-check-label pl-10" for="five"> ₹10000</label> &nbsp;
                                </div>
                                <div class="form-group form-check  mt-2">
                                    <input class="form-check-input ml-10" type="radio" id="seven" name="radioamount" value="15000">
                                    <label class="form-check-label pl-10" for="seven"> ₹15000</label> &nbsp;
                                </div>

                                <div class="form-group form-check mt-2">
                                    <input class="form-check-input ml-10" type="radio" id="other" name="radioamount">
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
   
    <div class="container" id="secEducation">
        <div class="row">
            <div class="col-lg-12 col-sm-12 ">
                <h2 class=" content-title "> Our Past Disaster Relief Service</h2>
               

                <div class="item">
                    <div class="image">
                        <div>

                            <span>
                                Nisarga Cyclone June 2020
                            </span>
                        </div>
                    </div>
                    <div class="details">
                        <div>
                           <ul>
                               <li>Distributed 50,000 free cooked meals to cyclone-affected people in Coastal Maharashtra</li>
                               <li>Distributed 405 solar lamps, 405 dry grocery kits, and dry clothes to the affected people</li>
                               <li>Distributed 2,000 roof sheets</li>
                               <li>Rehabilitated 13 totally damaged tribal areas</li>
                           </ul>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="image">
                        <div>

                            <span>
                                Maharashtra Floods June 2021
                            </span>
                        </div>
                    </div>
                    <div class="details">
                        <div>
                           <ul>
                               <li>Provided releif services in Mahad and Murud Taluka</li>
                               <li>Provided 14,800 free cooked meals</li>
                               <li>Provided 10,000 litres of drinking water</li>
                               <li>Distributed 25,000 kg dry grocery and 1,204 dry grocery kits</li>
                               <li>Distributed clothes to 1,763 people</li>
                               <li>Provided a set of utensils to 217 families, and gas stoves and cleaning materials to 65 families</li>
                               <li>Adopted Kelvane Village for complete rehabilitation</li>
                           </ul>
                        </div>
                    </div>
                </div>

               


            </div>

        </div>
    </div>


    </div>
    </div>

</section>
<!-- 
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
 -->


<div class="col-sm-12 col-md-12 mx-auto">
    <!--<div class="form-body">-->
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <!--                    <h3 class="text-center">Akshayachaitanya Donation Page</h3>-->
                    <!--                    <h4>Select any payment gateway to complete payment.</h4>-->

                    <form id="razorpay-form" action="<?php echo base_url(); ?>donate/save_payment" method="POST">
                        <script type="text/javascript" src="https://checkout.razorpay.com/v1/checkout.js" data-buttontext="" data-key="<?php echo $keyId; ?>" data-amount="<?php echo $amount * 100; ?>" data-currency="INR" data-name="<?php echo $this->config->item('name') ?>" data-image="<?php echo SETTINGS_UPLOAD_PATH . $settings->LOGO_IMAGE ?>" data-description="<?php echo $this->config->item('description') ?>" data-prefill.name="<?php echo $full_name ?>" data-prefill.email="<?php echo $email ?>" data-prefill.contact="<?php echo $phone_number ?>" data-prefill.pan="<?php echo $pan_number ?>" data-notes.pan="<?php echo $pan_number ?>" data-notes.shopping_order_id="<?php echo $notes['razorpay_order_id']; ?> " data-modal.confirm_close='true' data-modal.ondismiss=function(){alert('close')} <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $display_amount ?>" <?php } ?> <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $display_currency ?>" <?php } ?> data-redirect='true' data-callback_url="<?php echo base_url(); ?>donate/save_payment/<?php echo $insert_id . '/' . $table_name; ?>">


                        </script>



                    </form>


                </div>
            </div>
        </div>
        <!--</div>-->
    </div>
</div>
<style>
    .razorpay-payment-button {
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
            window.location.href = 'donate-to-assam-flood-relief';

        });
        $('#positiveBtn').on('click', function() {

            //  window.location.replace("donate");
            window.location.href = 'donate-to-assam-flood-relief';

        });


    }



    function modal_close() {
        window.location.href = 'donate-to-assam-flood-relief';
    }
</script>