<?php 

// npm install
// style folder->sass,fonts
// sass --watch sass:css
include_once "inc/header.inc.php" ?>

</head>
<body>
    <!-- 
        back to top button 
    -->
    <a href="javascript:void(0)" class="back-to-top"><i class="material-icons prefix mi-top">keyboard_arrow_up</i></a>


    <!--
         slider 
        -->
    <section>
        <div class="logo">
            <img src="img/logo.jpg" alt="beauty logo">
        </div>
        <div class="slider" id="slider">
            <ul class="slides">
              <li>
                <img src="img/lakme-banner.jpg"> 
                <div class="caption left-align">
                  <h3 class="h3">READY FOR</h3>
                  <h3 class="h3">YOUR CAREER</h3>
                  <h3 class="h3">IN GLAMOUR?</h3>
                  <h5 class="light text-lighten-3">HERE'S YOUR TICKET.</h5>
                </div>
              </li>
              <li>
                <img src="img/lakme-banner.jpg"> 
                <div class="caption left-align">
                    <h3 class="h3">READY TO</h3>
                    <h3 class="h3">GO IN BROOMING </h3>
                    <h3 class="h3">INDUSTRY?</h3>
                    <h5 class="light text-lighten-3">HERE'S YOUR TICKET.</h5>
                </div>
              </li>
            </ul>
        </div>
    </section>


    <!-- 
        side form 
    -->
    <div class="fill-side-form">
        <div class="fill-side-form-wrapper ">
            <div class="side-btn target" id="side-btn">
                <i class="material-icons">format_indent_decrease</i>
            </div>
            <form method="POST" >
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input placeholder="name" id="name" type="text" class="validate">
                                <label for="name">First Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">phone</i>
                                <input id="icon_telephone" type="tel" class="validate">
                                <label for="icon_telephone">Telephone</label>
                            </div>
                        </div>
                        <button class="btn waves-effect waves-light side-form-submit-btn" type="submit" name="action">SEND
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>
            </form>
        </div>
    </div>



    <!-- 
        Love Fashion and Style 
    -->
    <section>
        <div class="lfs">
            <div class="lfs-bg">
                <div class="lfs-sec" data-aos="fade-up" data-aos-duration="1000">
                    <h4 class="subtitle">Love fashion & style? Your've come to the right page!</h4>
                    <h1>LAKME ACADEMY POWERED BY APTECH <br>
                        BRINGS YOU PROFESSIONAL COURSES IN <br>
                        SKIN, HAIR, MAKE-UP & PERSONAL <br>
                        GROOMING.
                    </h1>
                </div>
                <div class="fill-form-wrapper">
                    <div class="fill-form" data-aos="fade-in">
                        <div class="fill-custom fill-btn" id="fill-btn">
                            <span class="t1">FILL THIS FORM</span>
                            <span class="t2"><i class="material-icons test-icon">format_indent_decrease</i></span>
                        </div>
                        <div class="form-text">we will call you back!</div>
                    </div>
                </div>

                <!-- images section -->
                <div class="images-section">
                    <div class="images-wrapper">
                        <div class="card-columns">
                            <div class="card btr" data-aos="fade-in" data-aos-delay="100" data-aos-duration="1000">
                                <div class="img-wrap">
                                    <img src="img/img-1.jpg" class="card-img-top" alt="image 1">
                                    <div class="img-text-box">
                                        <div class="words-wrap">
                                            <div class="w">skin</div>
                                            <div class="w">care</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card btr" data-aos="fade-in" data-aos-delay="500" data-aos-duration="1000">
                                <div class="img-wrap">
                                    <img src="img/img-3.jpg" class="card-img-top" alt="image 3">
                                    <div class="img-text-box">
                                        <div class="words-wrap">
                                            <div class="w">make -</div>
                                            <div class="w">up</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-in" data-aos-delay="400" data-aos-duration="1000">
                                <div class="card-text">
                                    <p>Join the glamours industry. Wrok with the top names in <br> <b>strong.</b>Lakme helps you to get there in style!</p>
                                </div>
                                <div class="card-image btl">
                                    <div class="img-wrap">
                                        <img src="img/img-2.jpg" class="card-img-top" alt="image 2">
                                        <div class="img-text-box">
                                            <div class="words-wrap">
                                                <div class="w">hair</div>
                                                <div class="w">care</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card btl" data-aos="fade-in" data-aos-delay="600" data-aos-duration="1000">
                                <div class="img-wrap">
                                    <img src="img/img-4.jpg" class="card-img-top" alt="image 4">
                                    <div class="img-text-box">
                                        <div class="words-wrap">
                                            <div class="w">personla</div>
                                            <div class="w">grooming</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //images section -->
            </div>  
        </div>
    </section>



    <section>
        <div class="career-in-beauty black-bg">
            <div class="career-in-beauty-sec">
                <h1 class="title-big" data-aos="fade-in" data-aos-delay="100" data-aos-duration="1000">is a career in beauty & <br> fashion right for you?</h1>
                <h4 class="subtitle" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">The beauty industry offers exciting and well-paid jobs & career opportunities.</h4>
                <!-- icon+  -->
                <div class="wrapper">
                    <a class="i-circle circle waves-effect modal-trigger " href="#tooltip1">
                        <i class="material-icons add">add</i>
                    </a>
                    <!-- Modal Structure -->
                    <div id="tooltip1" class="modal modal-fixed-footer">
                        <div class="modal-content">
                            <h4>Is a career in beauty & fashion right for you?</h4>
                            <p>
                                The beauty industry offers exciting and well-paid jobs & career opportunities. (Add read more functionality)
                                As per the Indian Salon Report 2014, the Indian salon industry is worth US $2.6 billion, and is expected to grow by 30% over the next few years. As more & more people shift from local beauty parlours to high-end spas & salons, the Indian spa market is expected to become a US $7.2 billion industry!
                            </p>
                            <p>
                                <strong>The Indian beauty & wellness sector will:</strong>
                                <ul>
                                    <li>Offer 12.1 million job opportunities by 2022*</li>
                                    <li>Pay salaries of up to <b>Rs. 65,000 per month*</b> </li>
                                </ul>
                            </p>
                            <p>This is the perfect time to build your career in the most glamorous industry in the world!</p>
                        </div>
                        <div class="modal-footer">
                            <p>&copy;Lakmé Academy powered by Aptech 2016. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="subscribe-bg subscribe">
            <div class="subscribe-sec">
                <h2>Subscribe Now</h2>
                <p>subscribe to our free weekly newsletter for new template release (no spam)</p>
                <form class="subscribe-from">
                    <div class="mssg">You have subscribe successfully!</div>
                    <input type="text" name="fullname" class="input fullname" placeholder="full name*">
                    <input type="submit" class="btn btn-subscribe btn-custom" id="btn-subscribe">
                </form>
            </div>
        </div>
    </section>



    <footer>
        <div class="footer-styled footer">
            <h4>&copy; Lakme Academy powered by Aptech 2016. All Rights Reserved.</h4>
        </div>
    </footer>

    
    <?php include_once "inc/footer.inc.php" ?>
   
</body>
</html>