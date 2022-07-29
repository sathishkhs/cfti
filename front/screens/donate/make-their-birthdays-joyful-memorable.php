<style>
    body {
        background: #fff;
    }
    /* h1, h2, h3, h4, h5, h6{
        color: #FF6B6B;
    } */
    article {
        padding: 20px;
        /* border: 1px solid #aeaeae; */
        background: #fff;
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.5)
    }

    .project-tab {
        padding: 10%;
        margin-top: -8%;
    }

    .project-tab #tabs {
        background: #007b5e;
        color: #eee;
    }

    .project-tab #tabs h6.section-title {
        color: #eee;
    }

    .project-tab #tabs .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #6BCB77;
        background-color: transparent;
        border-color: transparent transparent #f3f3f3;
        border-bottom: 3px solid !important;
        font-size: 16px;
        font-weight: bold;
    }

    .project-tab .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        color: red;
        font-size: 16px;
        font-weight: 600;
    }

    .project-tab .nav-link:hover {
        border: none;
    }

    .project-tab thead {
        background: #f3f3f3;
        color: #333;
    }

    .project-tab a {
        text-decoration: none;
        color: #333;
        font-weight: 600;
    }

    .nav-tabs .nav-link.active {
        background-color: #6BCB77 !important;
        color: #fff !important;
        border-color: transparent transparent #494949 !important;
        position: relative;
    }

    .nav-tabs .nav-link.active:after {
        content: '';
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;

        border-top: 10px solid #3b4262;
        position: absolute;
        bottom: -10px;
        left: 20px;
    }

    progress {
        width: 100%;
        display: block;
        /* default: inline-block */
        margin: 0.3em auto;
        padding: 3px;
        border: 0 none;
        background: #247881;
        border-radius: 14px;
    }

    progress::-moz-progress-bar {
        border-radius: 14px;
        background: #6BCB77;

    }

    /* webkit */
    @media screen and (-webkit-min-device-pixel-ratio:0) {
        progress {
            height: 25px;
        }
    }

    progress::-webkit-progress-bar {
        background: transparent;
    }

    progress::-webkit-progress-value {
        border-radius: 14px;
        background: #6BCB77;
    }

    .goal-raised {
        color: #FF6B6B;
        font-size: 30px;
    }

    .card-body {
        width: 100%;
    }


    .triangle-class {
        width: 100%;
        line-height: 50px;
        position: relative;
        background: #247881;
        text-align: center;
        margin: 10px auto;
        border-radius: 8px;
    }

    .triangle-class:after,
    .triangle-class:before {
        content: "";
        position: absolute;
        width: 20px;
        height: 50%;
        left: 100%;
    }

    /* .triangle-class:after {
        bottom: 0;
        background: linear-gradient(to right bottom, #247881 50%, transparent 50%);
    }

    .triangle-class:before {
        top: 0;
        background: linear-gradient(to right top, #247881 50%, transparent 50%);
    } */

    .border-active .triangle-class {
        background: #FF6B6B
    }

    /* .border-active .triangle-class:after {
        bottom: 0;
        background: linear-gradient(to right bottom, #000 50%, transparent 50%);
    }

    .border-active .triangle-class:before {
        top: 0;
        background: linear-gradient(to right top, #000 50%, transparent 50%);
    } */

    #msform {
        width: 400px;
        /* margin: 50px auto; */
        text-align: center;
        position: relative;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 3px;
        /* box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); */
        padding: 10px 5px 10px 5px;

        box-sizing: border-box;
        width: 100%;
        /* margin: 0 10%; */

        /*stacking fieldsets above each other*/
        position: relative;
    }

    /*Hide all except first fieldset*/
    #msform fieldset:not(:first-of-type) {
        display: none;
    }

    /*inputs*/
    #msform input,
    #msform textarea {
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 13px;
    }

    /*buttons*/
    #msform .action-button {
        width: 100px;
        background: #247881;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 1px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #247881;
    }

    /*headings*/
    .fs-title {
        font-size: 15px;
        text-transform: uppercase;
        color: #2C3E50;
        margin-bottom: 10px;
    }

    .fs-subtitle {
        font-weight: normal;
        font-size: 13px;
        color: #666;
        margin-bottom: 20px;
    }

    /*progressbar*/
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        /*CSS counters to number the steps*/
        counter-reset: step;
    }

    #progressbar li {
        list-style-type: none;
        color: white;
        text-transform: uppercase;
        font-size: 9px;
        width: 33.33%;
        float: left;
        position: relative;
    }

    #progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 20px;
        line-height: 20px;
        display: block;
        font-size: 10px;
        color: #333;
        background: white;
        border-radius: 3px;
        margin: 0 auto 5px auto;
    }

    /*progressbar connectors*/
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: white;
        position: absolute;
        left: -50%;
        top: 9px;
        z-index: -1;
        /*put it behind the numbers*/
    }

    #progressbar li:first-child:after {
        /*connector not needed before the first step*/
        content: none;
    }

    /*marking active/completed steps green*/
    /*The number of the step and the connector before it = green*/
    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #000;
        color: white;
    }

    @media (max-width : 978px){
        .mt-give{
            margin-top: 22px;
        }
    }
    a{
        color: #6BCB77
    }
    a:hover{
        color: #6BCB77;
    }
    a:not([href]):not([tabindex]){
        width: 100%;
    }
    .fw-bolder{
        font-size: 30px;
    }
    .fs-subtitle{
        margin-bottom: 10px;
    }
</style>
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>

 <!-- <?php if ($page_items->display_image == 1 && !empty($page_items->display_image) && file_exists((BANNER_IMAGE_PATH . $page_items->banner_image))) { ?>
                    <figure class="mb-4"><img class="img-fluid rounded" src="<?php echo BANNER_IMAGE_PATH . $page_items->banner_image; ?>" alt="..."></figure>
                <?php } ?> -->

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 p-0">
                            <img src="assets/images/left-side-banner.jpg" class="img-fluid" alt="left-side-banner">
                        </div>
                        <div class="col-6 p-0">
                        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/Right-side-banner-1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="assets/images/Right-side-banner-2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="assets/images/Right-side-banner-3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
<div class="container-fluid mt-5 px-4">
    <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h2 class="fw-bolder mb-1" style="color: #FF6B6B"><?php echo $page_items->page_title; ?></h2>
                    <!-- Post meta content-->

                </header>
                <!-- Preview image figure-->
               
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-need-tab" data-toggle="tab" href="#nav-need" role="tab" aria-controls="nav-need" aria-selected="true">NEED</a>
                        <a class="nav-item nav-link" id="nav-ways-tab" data-toggle="tab" href="#nav-ways" role="tab" aria-controls="nav-ways" aria-selected="false">WAYS TO SUPPORT</a>
                        <a class="nav-item nav-link" id="nav-impact-tab" data-toggle="tab" href="#nav-impact" role="tab" aria-controls="nav-impact" aria-selected="false">IMPACT</a>
                        <a class="nav-item nav-link" id="nav-share-tab" data-toggle="tab" href="#nav-share" role="tab" aria-controls="nav-share" aria-selected="false">SHARE</a>
                    </div>
                </nav>
                <div class="tab-content mt-2" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-need" role="tabpanel" aria-labelledby="nav-need-tab">
                        
                        <b>Just because they can’t afford to celebrate, doesn’t mean their birthdays are any less important. </b>
                        <h3 id="need">Need for your support</h3>
                       
                        <ul>
                            <li>Every child eagerly waits for their birthday, but birthday celebration is a distant dream for children belonging to socio-economically weaker sections. </li>
                            <li>So, we encourage you to adopt a child's birthday and make it a memorable celebration.</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-ways" role="tabpanel" aria-labelledby="nav-ways-tab">
                        <h3 id="ways">Ways to support</h3>
                        <p>You can instantly make birthdays of many children happy in the following ways:</p>
                        <ul>
                            <li>Donate online now. You can either donate for the collective pool or for children who share their birthdays with you!</li>
                            <li>Engage as a CSR partner & surprise children on their birthdays, just as you do for your colleagues.</li>
                            <li>Conduct a fundraising campaign and multiply the joys among children. </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-impact" role="tabpanel" aria-labelledby="nav-impact-tab">
                        <h3 id="impact">Impact of your support</h3>

                        <ul>
                            <li>Your support helps us organise birthday parties for underprivileged children. For each child, we bring a cake, a set of new clothes, and a gift of their choice.</li>
                            <li>So far, we made birthdays of 283 children joyful and memorable. </li>
                        </ul>



                    </div>
                    <div class="tab-pane fade" id="nav-share" role="tabpanel" aria-labelledby="nav-share-tab">
                        <h3 id="share">Share this campaign</h3>
                        <p>Let the world know your support for this noble cause.</p>

                        <ul>
                            <li>Share this campaign in your network: <a href="make-their-birthdays-joyful-memorable">Smiles4Birthdays </a></li>
                            <li>Like & share: Click on the icons to like & share our pages
                                 <ul class="list-inline footer-socials">
                                    <li class="list-inline-item border-1"><a href="<?php echo $settings->FACEBOOK_LINK; ?>" target="_blank" class=""><i class="icofont-facebook text-dark"></i></a></li>
                                    <li class="list-inline-item border-1"><a href="<?php echo $settings->INSTAGRAM_LINK; ?>" target="_blank" class=""><i class="icofont-instagram text-dark"></i></a></li>
                                    <li class="list-inline-item border-1"><a href="<?php echo $settings->TWITTER_LINK; ?>" target="_blank" class=""><i class="icofont-twitter text-dark"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
               
            </article>
            <h4 class="mt-2" style="color: #FF6B6B">Our Supporters </h5>
                    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
                <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


                    <div class="items">
                        <div class="card">
                            <div class="card-body"> <img class="logo" src="assets/img/photos/home/logos/akshaya-patra-logo.jpeg"> </div>
                        </div>
                        <div class="card">
                            <div class="card-body"> <img class="logo" src="assets/img/photos/home/logos/book-a-smile-logo.jpeg"> </div>
                        </div>
                        <div class="card">
                            <div class="card-body"> <img class="logo" src="assets/img/photos/home/logos/glenmark-logo.jpeg"> </div>
                        </div>
                        <div class="card">
                            <div class="card-body"> <img class="logo" src="assets/img/photos/home/logos/pnp-maritime-logo.jpg"> </div>
                        </div>
                        <div class="card">
                            <div class="card-body"> <img class="logo" src="assets/img/photos/home/logos/rpg-logo.jpeg"> </div>
                        </div>
                        <div class="card">
                            <div class="card-body"> <img class="logo" src="assets/img/photos/home/logos/corporate_1.jpg"> </div>
                        </div>
                        <div class="card">
                            <div class="card-body"> <img class="logo" src="assets/img/photos/home/logos/corporate_2.jpg"> </div>
                        </div>
                        <div class="card">
                            <div class="card-body"> <img class="logo" src="assets/img/photos/home/logos/corporate_3.jpg"> </div>
                        </div>
                        <div class="card">
                            <div class="card-body"> <img class="logo" src="assets/img/photos/home/logos/corporate_4.jpg"> </div>
                        </div>
                        <div class="card">
                            <div class="card-body"> <img class="logo" src="assets/img/photos/home/logos/corporate_5.jpg"> </div>
                        </div>
                        <div class="card">
                            <div class="card-body"> <img class="logo" src="assets/img/photos/home/logos/corporate_6.jpg"> </div>
                        </div>
                        <div class="card">
                            <div class="card-body"> <img class="logo" src="assets/img/photos/home/logos/corporate_7.jpg"> </div>
                        </div>
                        <div class="card">
                            <div class="card-body"> <img class="logo" src="assets/img/photos/home/logos/corporate_8.jpg"> </div>
                        </div>
                    </div>
                    <h5 style="color: #FF6B6B">
                        Join our league of generous supporters. Connect with us for CSR partnership.
                    </h5>
                     <p style="line-height: 15px"><b>Contact person: </b> Amit
                    <p style="line-height: 15px"><b>Phone number: </b> +91 96737 66347</p>
                    <p style="line-height: 15px"><b>Email: </b> amit@cftiindia.com </p>
                   
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4 col-md-12 col-sm-12 mt-give">
            <!-- Search widget-->
            <div class="card mb-4 w-100">
                    <?php $amount_sum = $this->db->select('SUM(amount) as amount')->where('campaign',$page_items->page_slug)->where('status','success')->get('payments')->row();  
                            $percentage = ($amount_sum->amount / 100000) * 100;
                    ?>
                <div class="card-body w-100 py-1 px-4">
                    <span class="goal-raised">&#8377;<?php echo  !empty($amount_sum->amount) ? $amount_sum->amount : '0'; ?></span> raised of &#8377;1,00,000 goal
                    <div class="input-group">
                        <progress id="progressBar" max="100" value="<?php echo $percentage; ?>" class="text-white"> </progress>
                        <span><?php echo $percentage; ?> %</span>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4 w-100">
                <!-- <div class="card-header">Donate Now</div> -->
                <div class="card-body pl-1">
                    <div class="row">
                        <div class="col-sm-12">
                            <form id="msform" action="<?php echo base_url() . $page_items->page_slug; ?>" method="POST" enctype="multipart/form-data" class="w-100">
                                <input type="hidden" name="table_name" value="payments">
                                <input type="hidden" name="citizen" value="INDIAN">
                                <input type="hidden" name="currency" value="INR">
                                <input type="hidden" name="campaign" value="<?php echo $page_items->page_slug; ?>">
                                <!-- progressbar -->
                                <!-- <ul id="progressbar">
		<li class="active">Select Amount</li>
		<li>Enter Personal Details</li>
		
	</ul> -->
                                <!-- fieldsets -->
                                <fieldset>
                                    <h2 class="fs-title">Gift children the joy <br> of celebrating birthdays </h2>
                                   
                                    <h3 class="fs-subtitle">Select Amount</h3>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                 <a type="button" id="one">
                                                    <div class="triangle-class text-white"><span class="font-weight-bold">Rs 1000/-</span> <span class="text-right "></span></div>
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <a type="button" id="two">
                                                    <div class="triangle-class text-white"><span class="font-weight-bold">Rs 2000/-</span> <span class="text-right "></span></div>
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <a type="button" id="three">
                                                    <div class="triangle-class text-white"><span class="font-weight-bold">Rs 3000/-</span> <span class="text-right "></span></div>
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                 <a type="button" id="four">
                                                    <div class="triangle-class text-white"><span class="font-weight-bold">Rs 5000/-</span> <span class="text-right "></span></div>
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-md-12">
                                                <a type="button" id="five">
                                                    <div class="triangle-class text-white">Other amount <input id="amount" class="d-inline w-50 " style="height: 35px" placeholder="Enter Amount" name="amount"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    
                                    
                                   
                                    
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <h2 class="fs-title">Personal Details</h2>
                                    <!-- < h3 class="fs-subtitle">Your presence on the social network</> -->


                                    <input name="full_name" id="full_name" type="text" name="full_name" class="form-control" placeholder="Your Name *">


                                    <input id="email" type="email" name="email" class="form-control" placeholder="Email *">


                                    <input id="pan_number" type="text" name="pan_number" type="text" class="form-control" placeholder="Pan Number *">


                                    <input id="phone_number" type="text" name="phone_number" type="number" class="form-control" placeholder="Your Phone Number *">


                                    <input id="city" type="text" name="city" type="text" class="form-control" placeholder="City">

                                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                                    <button id="" type="submit" name="submit" class="submit action-button" value="Donate">Donate</button>

                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4 w-100">
                <!-- <div class="card-header">Side Widget</div> -->
                <div class="card-body">
                   <small> 
                   <ul>
                        <li>
                            Contributing donation through online mode is safe, secure, and easy with many payment options to choose from.
                        </li>
                        <li>
                            Once you donate ₹500 or more, you will receive donation receipt and tax exemption certificate as per Sec 80G of Income Tax Act.
                        </li>
                    </ul>
                    </small>
                   

                </div>
            </div>
        </div>
    </div>
</div>
<!-- <img src="assets/img/headers/collage.jpg" class="w-100"> -->


<script>
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();


        //show the next fieldset
        next_fs = $(this).parent().next();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.4;
                current_fs.css({
                    'transform': 'scale(' + scale + ')'
                });
                //2. bring next_fs from the right(50%)
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                left = (now * 50) + "%";
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        next_fs.show();
    });

    $(".previous").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1 - now) * 50) + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 300,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    // $(".submit").click(function() {
    //     return false;
    // })

    $('.items').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 978,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 2
            }
        }]
    });
</script>










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
            window.location.href = '<?php echo $page_items->page_slug; ?>';

        });
        $('#positiveBtn').on('click', function() {

            //  window.location.replace("donate");
            window.location.href = '<?php echo $page_items->page_slug; ?>';

        });


    }



    function modal_close() {
        window.location.href = '<?php echo $page_items->page_slug; ?>';
    }
</script>