<!-- start page title -->
<section class="parallax" data-parallax-background-ratio="0.5" style="background-image:url('<?php echo base_url(); ?>assets/theme/images/faq-bg.jpg');">
    <div class="opacity-medium bg-gradient-fast-blue-purple"></div>
    <div class="container">
        <div class="row align-items-stretch justify-content-center extra-small-screen">
            <div class="col-12 position-relative page-title-large text-center d-flex align-items-center justify-content-center flex-column">
                <!-- <span class="d-block text-white opacity-6 alt-font margin-5px-bottom xs-line-height-20px">Unlimited customization possibilities</span> -->
                <h1 class="alt-font text-white font-weight-500 no-margin-bottom">Contact us</h1>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section class="bg-light-gray">
    <div class="container">
        <div class="row justify-content-center">
            <!-- start fancy text box item -->
            <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                <div class="feature-box feature-box-hide-show-hover bg-white border-radius-6px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                    <div class="feature-box-move-bottom-top padding-5-rem-lr padding-15px-tb lg-padding-2-half-rem-lr md-padding-4-half-rem-lr">
                        <div class="feature-box-icon">
                            <i class="line-icon-Mail-Read d-block icon-medium text-fast-blue margin-25px-bottom"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="text-extra-dark-gray text-extra-medium d-block alt-font font-weight-500">How can we help you?</span>
                            <a href="mailto:info@yourdomain.com" class="alt-font text-decoration-underline">Send us an email</a>
                        </div>
                        <div class="move-bottom-top margin-10px-top last-paragraph-no-margin">
                            <p><a href="mailto:info@sfigroupofcompanies.com">info@sfigroupofcompanies.com</a></p>
                        </div>
                    </div>
                    <div class="feature-box-overlay"></div>
                </div>
            </div>
            <!-- end fancy text box item -->
            <!-- start fancy text box item -->
            <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                <div class="feature-box feature-box-hide-show-hover bg-white border-radius-6px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                    <div class="feature-box-move-bottom-top padding-5-rem-lr padding-15px-tb lg-padding-2-half-rem-lr md-padding-4-half-rem-lr">
                        <div class="feature-box-icon">
                            <i class="line-icon-Phone-2 d-block icon-medium text-fast-blue margin-25px-bottom"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="text-extra-dark-gray text-extra-medium d-block alt-font font-weight-500">Feel free to get in touch?</span>
                            <a href="#" class="alt-font text-decoration-underline">Give us a call toady</a>
                        </div>
                        <div class="move-bottom-top margin-10px-top last-paragraph-no-margin">
                            <p>8 371 8000</p>
                        </div>
                    </div>
                    <div class="feature-box-overlay"></div>
                </div>
            </div>
            <!-- end fancy text box item -->
            <!-- start fancy text box item -->
            <div class="col-12 col-lg-4 col-md-6 col-sm-8">
                <div class="feature-box feature-box-hide-show-hover bg-white border-radius-6px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                    <div class="feature-box-move-bottom-top padding-5-rem-lr padding-15px-tb lg-padding-2-half-rem-lr md-padding-4-half-rem-lr">
                        <div class="feature-box-icon">
                            <i class="line-icon-Approved-Window d-block icon-medium text-fast-blue margin-25px-bottom"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="text-extra-dark-gray text-extra-medium d-block alt-font font-weight-500">Ready to request a quote?</span>
                            <a href="#project" class="alt-font text-decoration-underline section-link">Describe your project</a>
                        </div>
                        <div class="move-bottom-top margin-10px-top last-paragraph-no-margin">
                            <p><a href="#contact" class="section-link">Contact Us Now</a></p>
                        </div>
                    </div>
                    <div class="feature-box-overlay"></div>
                </div>
            </div>
            <!-- end fancy text box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="wow animate__fadeIn" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                        <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">Fill out the form and we’ll be in touch soon!</span>
                        <h4 class="alt-font font-weight-600 text-extra-dark-gray">How we can help you?</h4>
                    </div>
                    

                     <div class="col-lg-12 col-md-12">
                        <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                            <div class="dzFormMsg"></div>
                            <?php echo form_open('contact/contact_message#try'); ?>                       
                            <!-- <input type="hidden" value="Contact" name="dzToDo" > -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">                                                
                                                <input type="text" class="medium-input bg-white margin-25px-bottom required" name="name" placeholder="Your name" value="<?php echo set_value('name'); ?>" required data-toggle="tooltip" data-placement="right" title="<?php echo strip_tags(form_error('name')); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">                                                 
                                                <input type="email" class="medium-input bg-white margin-25px-bottom required" name="email" placeholder="Your email" value="<?php echo set_value('email'); ?>" required data-toggle="tooltip" data-placement="right" title="<?php echo strip_tags(form_error('email')); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">  
                                                <input type="text" class="medium-input bg-white margin-25px-bottom" name="subject" placeholder="Your subject" value="<?php echo set_value('subject'); ?>" required data-toggle="tooltip" data-placement="right" title="<?php echo strip_tags(form_error('subject')); ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="message" rows="4" class="medium-textarea bg-white h-200px" rows="6" required placeholder="Your Message..."><?php echo set_value('message'); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-12">
                                        <div class="recaptcha-bx">
                                            <div class="input-group">
                                                <div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                                <input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
                                            </div>
                                        </div>
                                    </div> -->
                                    <a name="try"></a>
                                    <div class="col-lg-12">
                                        <!-- <button name="contactSubmit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button> -->
                                        <input type="submit" value="Submit" class="site-button">
                                    </div>
                                    <br>
                                    <?php echo validation_errors(); ?>
                                <?php
                                        if (isset($args)) {
                                 ?>
                                    <div class="box-error">
                                        <div class="d-flex flex-row justify-content-center align-items-center">
                                            <div class="alert <?php echo isset($args['alert']) ? $args['alert'] : '' ; ?> alert-dismissible fade show animated pulse" role="alert">
                                                <?php
                                                    echo $args['msg'];
                                                ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                               <?php } ?>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="p-0 wow animate__fadeIn">
    <div class="container-fluid">
        <div class="row">
            <div class="col h-600px p-0 md-h-450px xs-h-300px">
                <iframe class="w-100 h-100 filter-grayscale-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.0980546073442!2d121.0264524143208!3d14.650374979783873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b6fc1d98f777%3A0xc39a43e88d1a7bdc!2sServicio%20Filipino%2C%20Inc!5e0!3m2!1sen!2sph!4v1647395291666!5m2!1sen!2sph"></iframe>
                
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<!-- <section class="padding-100px-tb md-padding-75px-tb sm-padding-50px-tb wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-xl-3 col-lg-4 col-md-5 col-sm-6 text-center text-sm-end xs-margin-20px-bottom">
                <span class="alt-font font-weight-500 text-extra-large text-extra-dark-gray d-block letter-spacing-minus-1-half">Connect with social media</span>
            </div>
            <div class="col-12 col-md-2 d-none d-md-block">
                <span class="w-100 h-1px d-block bg-medium-gray"></span>
            </div>
            <div class="col-12 col-xl-3 col-lg-4 col-md-5 col-sm-6 social-icon-style-02 text-center text-sm-start">
                <ul class="small-icon">
                    <li><a class="facebook text-extra-dark-gray text-sm-start" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="twitter text-extra-dark-gray text-sm-start" href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="youtube text-extra-dark-gray text-sm-start" href="http://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    <li><a class="linkedin text-extra-dark-gray text-sm-start" href="http://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
</section> -->
<!-- end section -->