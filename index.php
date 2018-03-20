<?php
require_once('views/head.php');
?>
<body translate="no">


<!--AJAX SCRIPT-->



<!-- Trigger the modal with a button -->
<!-- Modal -->
<?php
//require_once('login_reg_modal.php');
?>


<!------ Include the above in your HEAD tag ---------->

<style>

</style>

<!-- Large modal -->
<!-- Trigger the modal with a button -->


        <!-- Login / Register Modal-->
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

        <!-- Modal -->
<!--TODO IMprove modal styling and overlay problem -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login To CashBru</h4>
                    </div>
                    <div class="modal-body">
                        <form name="loginForm" method="post" action="router.php">
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Please Enter Your Email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" name="password" placeholder="Please Enter Your Password">
                            </div>
                            <button type="submit" name="registerBtn" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>



<script type="text/javascript">

    // JavaScript Document
   /* $(function () {

        var form = $('#registrationForm');
        var formMessages = $('#formMsg');

        // Set up an event listener for the contact form.
        $(form).submit(function (e) {
            // Stop the browser from submitting the form.
            e.preventDefault();

            //do the validation here
            if (!validateLogin()) {
                return;
            }

            // Serialize the form data.
            var formData = $(form).serialize();

            // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            }).done(function (response) {
                // Make sure that the formMessages div has the 'success' class.
                window.location = 'src/dashboard.php';
                $(formMessages).removeClass('error').addClass('success');

                // Set the message text.
                $(formMessages).html(response); // < html();

                // Clear the form.
                $('').val('')
            }).fail(function (data) {
                // Make sure that the formMessages div has the 'error' class.
                $(formMessages).removeClass('success').addClass('error');

                // Set the message text.
                var messageHtml = data.responseText !== '' ? data.responseText : 'Oops! An error occurred and your message could not be sent.';
                $(formMessages).html(messageHtml); // < html()
            });

        });

        function validateLogin() {
            var valid = true;



            return valid;

        }

    })*/
</script>


<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=670199386493177";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--

'Golazo' App Login Page Concept utilizing Velocity.js & SVG animation techniques.

Inspirations:
+Anton Aheichanka - https://dribbble.com/shots/1945593-Login-Home-Screen?list=users&offset=4
+Nicolay Talanov - https://codepen.io/suez/pen/dPqxoM

-->

<!-- Start Wrapper -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
<div id="page_wrapper">

    <!-- Start Header -->
    <header>
        <div class="container">
            <!-- Start Social Icons -->
            <aside>
                <ul class="social">
                    <li class="facebook"><a href="#">Facebook</a></li>
                    <li class="twitter"><a href="http://twitter.com/two2twelve">Twitter</a></li>
                    <li class="email"><a href="#" title="info@two2twelve.com">Email</a></li>
                    <li class="rss"><a href="#" title="App Updates">RSS</a></li>
                    <!-- More Social Icons:
                    <li class="dribbble"><a href="">Dribbble</a></li>
                    <li class="google"><a href="">Google</a></li>
                    <li class="flickr"><a href="">Flickr</a></li>
                    -->
                </ul>
            </aside>
            <!-- End Social Icons -->

            <!-- Start Navigation -->
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#screenshots">Screenshots</a></li>
                    <li><a href="#updates">Updates</a></li>
                    <li><a href="#press">Press</a></li>
                    <li><a href="#contact" class="current">Contact</a></li>
                    <li><a href="#styles">Styles</a></li>
                </ul>
                <span class="arrow"></span>
            </nav>
            <!-- End Navigation -->
        </div>
    </header>
    <!-- End Header -->

    <section class="container">

        <!-- Start App Info -->
        <div id="app_info">
            <!-- Start Logo -->
            <a href="#home" class="logo">
                <img src="images/dark-logo.png" alt="Fluid App" />
            </a>
            <!-- End Logo -->
            <span class="tagline">The greatest sporting Website Ever</span>
            <p>
                CASHBRU puts fun back into sports, making for nail bitting edge of your seat entertainment. CashBru evolved from the website SuperBru. CashBru allows users to make a prediction on a sporting event. It lets you put your sports knowledge to the test competing against other users to win the pool for most correct predictions, known as the pool payout.
            </p>
            <style>
                .icon{
                    width: 30px;
                    height: 35px;
                    display: block;
                    //background: url(images/dark-social.png) no-repeat	top left;
                    float: left;
                    margin-right: 12px;
                }
                </style>
            <div class="buttons">
                <a href="#" class="large_button" id="apple">

                    <i class="icon-2x icon-facebook" style="  width: 30px;
                    height: 35px;
                    display: block;
                    float: left;
                    margin-right: 12px;"></i>
                    <em>Signup or Login With</em> Facebook
                </a>
                <a href="#" class="large_button" id="android">
                    <i class="icon-2x icon-twitter" style="  width: 30px;
                    height: 35px;
                    display: block;
                    float: left;
                    margin-right: 12px;"></i>
                    <em>Signup or Login With</em> Twitter
                </a>
                <!-- ADD EMAIL LOGIN FUNCTIONALITY-->

                    <i class="icon-2x icon-googleplus-sign"></i>
                    <small>Email Login</small>
                    <em>SLogin With Your</em> Email

                <!-- ENTER MODAL HERE -->


                  <!--
                            <a class="btn btn-block btn-social btn-twitter">
                                <span class="fa fa-twitter"></span>
                                Sign in with Twitter
                            </a>

                            <a class="btn btn-block btn-social btn-facebook">
                                <span class="fa fa-facebook"></span>
                                Sign in with Facebook
                            </a>-->

            </div>

            <div class="price centered">
                <p>Register in 30 Seconds. </p>
            </div>
        </div>
        <!-- End App Info -->

        <!-- Start Pages -->
        <div id="pages">
            <div class="top_shadow"></div>

            <!-- Start Home -->
            <div id="home" class="page">

                <div id="slider">

                    <div class="slide" data-effect-out="slide">

                        <div class="background iphone-black">
                        <img src="img/carter.png" alt="" />
                        </div>

                        <div class="foreground iphone-black">
                            <img src="images/slider/iphone-front.jpg" alt="" />
                        </div>

                    </div>

                    <div class="slide" data-effect-in="slide">

                        <div class="background iphone-white">
                            <img src="images/slider/iphone-back.jpg" alt="" />
                        </div>

                        <div class="foreground iphone-white">
                            <img src="img/carter.png" alt="" />
                        </div>

                    </div>

                    <div class="slide">

                        <div class="background blackberry">
                            <img src="images/slider/blackberry-back.jpg" alt="" />
                        </div>

                        <div class="foreground blackberry">
                            <img src="images/slider/blackberry-front.jpg" alt="" />
                        </div>

                    </div>

                    <div class="slide">

                        <div class="background android">
                            <img src="images/slider/android-back.jpg" alt="" />
                        </div>

                        <div class="foreground android">
                            <img src="images/slider/android-back.jpg" alt="" />
                        </div>

                    </div>

                    <div class="slide">

                        <div class="background ipad-black">
                            <iframe src="http://player.vimeo.com/video/40603475?title=0&amp;byline=0&amp;portrait=0" width="352" height="468" frameborder="0"></iframe>
                        </div>

                    </div>

                    <div class="slide">

                        <div class="background ipad-white">
                            <img src="images/slider/ipad.jpg" alt="" />
                        </div>

                    </div>

                </div>

            </div>
            <!-- End Home -->

            <!-- Start Team -->
            <div id="team" class="page">

                <h1>Team</h1>

                <div class="about_us content_box">
                    <div class="one_half">
                        <h2>About Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.</p>
                    </div>

                    <div class="one_half column_last">
                        <img src="images/about-main.png" alt="" />
                    </div>
                </div>

                <div class="team_members">
                    <div class="person one_half">
                        <img src="images/about-team_1.png" alt="" />
                        <h3>Jane Doe</h3>
                        <span>Designer</span>
                        <a href="#">http://website.com</a>
                        <ul class="social">
                            <li class="facebook"><a href="#">Facebook</a></li>
                            <li class="twitter"><a href="#">Twitter</a></li>
                            <li class="dribbble"><a href="#">Dribbble</a></li>
                        </ul>
                    </div>
                    <div class="person one_half column_last">
                        <img src="images/about-team_2.png" alt="" />
                        <h3>John Smith</h3>
                        <span>Developer</span>
                        <a href="#">http://website.com</a>
                        <ul class="social">
                            <li class="facebook"><a href="#">Facebook</a></li>
                            <li class="twitter"><a href="#">Twitter</a></li>
                            <li class="dribbble"><a href="#">Dribbble</a></li>
                        </ul>
                    </div>
                    <div class="person one_half">
                        <img src="images/about-team_3.png" alt="" />
                        <h3>John Doe</h3>
                        <span>UI/UX Expert</span>
                        <a href="#">http://website.com</a>
                        <ul class="social">
                            <li class="facebook"><a href="#">Facebook</a></li>
                            <li class="twitter"><a href="#">Twitter</a></li>
                            <li class="dribbble"><a href="#">Dribbble</a></li>
                        </ul>
                    </div>
                    <div class="person one_half column_last">
                        <img src="images/about-team_4.png" alt="" />
                        <h3>Mary Smith</h3>
                        <span>Support</span>
                        <a href="#">http://website.com</a>
                        <ul class="social">
                            <li class="facebook"><a href="#">Facebook</a></li>
                            <li class="twitter"><a href="#">Twitter</a></li>
                            <li class="dribbble"><a href="#">Dribbble</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- End Team -->

            <!-- Start Features -->
            <div id="features" class="page">

                <h1>Features</h1>

                <div class="feature_list content_box">
                    <div class="one_half">
                        <h2 class="icon chart">Measure Stuff</h2>
                        <p>Donec sed odio dui. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Nullam id dolor. Nulla vitae elit libero, a pharetra augue. Nullam quis</p>
                    </div>

                    <div class="one_half column_last">
                        <h2 class="icon cart">Buy Things</h2>
                        <p>Donec sed odio dui. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Nullam id dolor. Nulla vitae elit libero, a pharetra augue. Nullam quis</p>
                    </div>

                    <div class="one_half">
                        <h2 class="icon pencil">Write Things Down</h2>
                        <p>Donec sed odio dui. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Nullam id dolor. Nulla vitae elit libero, a pharetra augue. Nullam quis</p>
                    </div>

                    <div class="one_half column_last">
                        <h2 class="icon graph">Check Stats</h2>
                        <p>Donec sed odio dui. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Nullam id dolor. Nulla vitae elit libero, a pharetra augue. Nullam quis</p>
                    </div>

                    <div class="one_half">
                        <h2 class="icon briefcase">Get Stuff Done</h2>
                        <p>Donec sed odio dui. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Nullam id dolor. Nulla vitae elit libero, a pharetra augue. Nullam quis</p>
                    </div>

                    <div class="one_half column_last">
                        <h2 class="icon help">Help &amp; Support</h2>
                        <p>Donec sed odio dui. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Nullam id dolor. Nulla vitae elit libero, a pharetra augue. Nullam quis</p>
                    </div>
                </div>

            </div>
            <!-- End Features -->

            <!-- Start Screenshots -->
            <div id="screenshots" class="page">

                <h1>Screenshots</h1>

                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                <div class="screenshot_grid content_box">

                    <div class="one_third">
                        <a href="images/screenshots/screen_1.jpg" class="fancybox" rel="group" title="Screenshot 1"><img src="images/screenshots/screen_1.jpg" alt="" /></a>
                    </div>

                    <div class="one_third">
                        <a href="images/screenshots/screen_2.jpg" class="fancybox" rel="group" title="Screenshot 2"><img src="images/screenshots/screen_2.jpg" alt="" /></a>
                    </div>

                    <div class="one_third column_last">
                        <a href="images/screenshots/screen_3.jpg" class="fancybox" rel="group" title="Screenshot 3"><img src="images/screenshots/screen_3.jpg" alt="" /></a>
                    </div>

                    <div class="one_third">
                        <a href="images/screenshots/screen_4.jpg" class="fancybox" rel="group" title="Screenshot 4"><img src="images/screenshots/screen_4.jpg" alt="" /></a>
                    </div>

                    <div class="one_third">
                        <a href="images/screenshots/screen_5.jpg" class="fancybox" rel="group" title="Screenshot 5"><img src="images/screenshots/screen_5.jpg" alt="" /></a>
                    </div>

                    <div class="one_third column_last">
                        <a href="images/screenshots/screen_6.jpg" class="fancybox" rel="group" title="Screenshot 6"><img src="images/screenshots/screen_6.jpg" alt="" /></a>
                    </div>

                    <div class="one_third">
                        <a href="images/screenshots/screen_7.jpg" class="fancybox" rel="group" title="Screenshot 7"><img src="images/screenshots/screen_7.jpg" alt="" /></a>
                    </div>

                    <div class="one_third">
                        <a href="images/screenshots/screen_8.jpg" class="fancybox" rel="group" title="Screenshot 8"><img src="images/screenshots/screen_8.jpg" alt="" /></a>
                    </div>

                    <div class="one_third column_last">
                        <a href="images/screenshots/screen_9.jpg" class="fancybox" rel="group" title="Screenshot 9"><img src="images/screenshots/screen_9.jpg" alt="" /></a>
                    </div>

                </div>

            </div>
            <!-- End Screenshots -->

            <!-- Start Updates -->
            <div id="updates" class="page">

                <h1>Updates</h1>

                <div class="releases">
                    <article class="release">
                        <h2>Version 1.0.2</h2>
                        <span class="date">Released on March 13th, 2012</span>
                        <ul>
                            <li class="new"><span><b>New</b></span> Full iOS 5.1 compatibility</li>
                            <li class="fix"><span><b>Fix</b></span> Push notifications update &amp; fixes</li>
                            <li class="new"><span><b>New</b></span> Added dashboard refresh button</li>
                            <li class="fix"><span><b>fix</b></span> Various UI enhancements</li>
                        </ul>
                    </article>

                    <article class="release">
                        <h2>Version 1.0.1</h2>
                        <span class="date">Released on January 10th, 2012</span>
                        <ul>
                            <li class="new"><span><b>New</b></span> Full iOS 5 compatibility</li>
                            <li class="fix"><span><b>Fix</b></span> Push notifications update &amp; fixes</li>
                            <li class="new"><span><b>New</b></span> Added dashboard refresh button</li>
                            <li class="fix"><span><b>fix</b></span> Various UI enhancements</li>
                        </ul>
                    </article>

                    <article class="release">
                        <h2>Version 1.0</h2>
                        <span class="date">Released on January 1st, 2012</span>
                        <ul>
                            <li class="new"><span><b>New</b></span> Initial release for iOS and Android</li>
                        </ul>
                    </article>
                </div>

            </div>
            <!-- End Updates -->

            <!-- Start Press -->
            <div id="press" class="page">

                <h1>Press</h1>

                <div class="press_mentions">
                    <ul>
                        <li>
                            <div class="logo">
                                <img src="images/dark-press.png" alt="" />
                            </div>
                            <div class="details">
                                <p>"The best mobile app website you’ve ever seen!"</p>
                                <address>
                                    Jane Doe
                                    <a href="#">http://website.com &#x2192;</a>
                                </address>
                            </div>
                        </li>
                        <li>
                            <div class="logo">
                                <img src="images/dark-press.png" alt="" />
                            </div>
                            <div class="details">
                                <p>"Cras mattis consectetur purus sit amet fermentum."</p>
                                <address>
                                    Jane Doe
                                    <a href="#">http://website.com &#x2192;</a>
                                </address>
                            </div>
                        </li>
                        <li>
                            <div class="logo">
                                <img src="images/dark-press.png" alt="" />
                            </div>
                            <div class="details">
                                <p>"Etiam porta sem malesuada magna mollis euismod. Nullam quis risus eget urna mollis ornare vel eu leo."</p>
                                <address>
                                    Jane Doe
                                    <a href="#">http://website.com &#x2192;</a>
                                </address>
                            </div>
                        </li>
                        <li>
                            <div class="logo">
                                <img src="images/dark-press.png" alt="" />
                            </div>
                            <div class="details">
                                <p>"Vivamus sagittis vel augue rutrum faucibus dolor."</p>
                                <address>
                                    Jane Doe
                                    <a href="#">http://website.com &#x2192;</a>
                                </address>
                            </div>
                        </li>
                        <li>
                            <div class="logo">
                                <img src="images/dark-press.png" alt="" />
                            </div>
                            <div class="details">
                                <p>"Maecenas faucibus mollis interdum."</p>
                                <address>
                                    Jane Doe
                                    <a href="#">http://website.com &#x2192;</a>
                                </address>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- End Press -->

            <!-- Start Start Contact -->
            <div id="contact" class="page">

                <h1>Contact</h1>

                <p>For general questions, bug reports or press inquires please fill out the form below.</p>

                <div id="contact_form">

                    <div class="validation">
                        <p>Oops! Please correct the highlighted fields...</p>
                    </div>

                    <div class="success">
                        <p>Thanks! I'll get back to you shortly.</p>
                    </div>

                    <form action="javascript:;" method="post">
                        <div class="row">
                            <p class="left">
                                <label for="name">Name*</label>
                                <input type="text" name="name" id="name" value="" />
                            </p>
                            <p class="right">
                                <label for="email">Email*</label>
                                <input type="text" name="email" id="email" value="" />
                            </p>
                        </div>

                        <div class="row">
                            <p class="left">
                                <label for="website">Website</label>
                                <input type="text" name="website" id="website" value="" />
                            </p>
                            <p class="right">
                                <label for="subject">Subject</label>
                                <input type="text" name="subject" id="subject" value="" />
                            </p>
                        </div>

                        <p>
                            <label for="message" class="textarea">Message</label>
                            <textarea class="text" name="message" id="message"></textarea>
                        </p>

                        <input type="submit" class="button white" value="Send &#x2192;" />
                    </form>

                </div>

            </div>
            <!-- End Start Contact -->

            <!-- Start Styles -->
            <div id="styles" class="page">

                <h1>Styles</h1>

                <div class="full">
                    <h1>h1. Nullam id dolor id nibh ultricies.</h1>
                    <h2>h2. Nullam id dolor id nibh ultricies.</h2>
                    <h3>h3. Nullam id dolor id nibh ultricies.</h3>
                    <h4>h4. Nullam id dolor id nibh ultricies.</h4>
                    <h5>h5. Nullam id dolor id nibh ultricies.</h5>
                    <h6>h6. Nullam id dolor id nibh ultricies.</h6>
                </div>

                <h2>Blockquotes</h2>

                <div class="one_half">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>

                <div class="one_half column_last">
                    <blockquote>
                        <p>This is a blockquote style example. It's cool.</p>
                        <cite>Some Dude, Some Website</cite>
                    </blockquote>
                </div>

                <div class="full">

                    <h2>Small Buttons</h2>

                    <a href="#" class="button black">Black</a>
                    <a href="#" class="button white">White</a>
                    <a href="#" class="button gray">Gray</a>
                    <a href="#" class="button orange">Orange</a>
                    <a href="#" class="button blue">Blue</a>
                    <a href="#" class="button green">Green</a>
                    <a href="#" class="button pink">Pink</a>
                    <a href="#" class="button purple">Purple</a>

                </div>

                <div class="full">

                    <h2>Large Buttons</h2>

                    <a href="#" class="large_button" id="apple">
                        <span class="icon"></span>
                        <em>Download now for</em> iPhone
                    </a>
                    <a href="#" class="large_button" id="android">
                        <span class="icon"></span>
                        <em>Download now for</em> Android
                    </a>
                    <a href="#" class="large_button" id="windows">
                        <span class="icon"></span>
                        <em>Download now for</em> Windows
                    </a>
                    <a href="#" class="large_button" id="blackberry">
                        <span class="icon"></span>
                        <em>Download now for</em> Blackberry
                    </a>

                </div>

                <h2>Columns</h2>

                <div class="one_half">
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                </div>

                <div class="one_half column_last">
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                </div>

                <div class="one_third">
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                </div>

                <div class="one_third">
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                </div>

                <div class="one_third column_last">
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                </div>

                <div class="one_third">
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>

                <div class="two_thirds column_last">
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Curabitur blandit tempus porttitor. Donec sed odio dui. Morbi leo risus, porta ac consectetur ac, vestibulum.</p>
                </div>

                <h2>Tabs</h2>

                <div class="tabs">
                    <ul class="nav">
                        <li><a href="javascript:;" class="tab_1">Tab 1</a></li>
                        <li><a href="javascript:;" class="tab_2">Tab 2</a></li>
                        <li><a href="javascript:;" class="tab_3">Tab 3</a></li>
                    </ul>
                    <div id="tab_1" class="pane">
                        <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
                    </div>
                    <div id="tab_2" class="pane">
                        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
                    </div>
                    <div id="tab_3" class="pane">
                        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                        <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                    </div>
                </div>

                <h2>Toggle Lists</h2>

                <div class="toggle_list">
                    <ul>
                        <li class="opened"> <!-- Use class "opened" to expand a toggle on page load -->
                            <div class="title">
                                <h3><span>Q.</span> What are the requirements for using this app?</h3>
                                <a href="javascript:;" class="toggle_link" data-open_text="+" data-close_text="-"></a>
                            </div>
                            <div class="content">
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <h3><span>Q.</span> How does it work?</h3>
                                <a href="javascript:;" class="toggle_link" data-open_text="+" data-close_text="-"></a>
                            </div>
                            <div class="content">
                                <p>Donec ullamcorper nulla non metus auctor fringilla. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <h3><span>Q.</span> How much does it cost?</h3>
                                <a href="javascript:;" class="toggle_link" data-open_text="+" data-close_text="-"></a>
                            </div>
                            <div class="content">
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <h2>Lightbox Images</h2>

                <div class="one_third">
                    <a href="images/screenshots/screen_1.jpg" rel="screenshots" class="fancybox" title=""><img src="images/screenshots/screen_1.jpg" alt="" /></a>
                </div>
                <div class="one_third">
                    <a href="images/screenshots/screen_2.jpg" rel="screenshots" class="fancybox" title=""><img src="images/screenshots/screen_2.jpg" alt="" /></a>
                </div>
                <div class="one_third column_last">
                    <a href="images/screenshots/screen_3.jpg" rel="screenshots" class="fancybox" title=""><img src="images/screenshots/screen_3.jpg" alt="" /></a>
                </div>

                <div class="full">

                    <h2>Tooltips</h2>

                    <p>Cras justo odio, dapibus ac <a href="javascript:;" rel="tipsy" title="Example Tooltip">facilisis</a> in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla. Nullam quis risus eget urna <a href="javascript:;" rel="tipsy" title="An even longer tooltip! <br/> With more stuff!">mollis ornare</a> vel eu leo.</p>

                </div>

            </div>
            <!-- End Styles -->

            <div class="bottom_shadow"></div>
        </div>
        <!-- End Pages -->

        <div class="clear"></div>
        <div class="fb-like-container" style="padding-left: 25px">
            <div class="fb-like" data-href="https://facebook.com/thesportfreak/"  data-layout="standard" data-action="recommend" data-size="large" data-show-faces="true" data-share="true" data-colorscheme="dark"></div>
        </div>
    </section>

    <!-- Start Footer -->

    <!-- End Footer -->

</div>
<!-- End Wrapper -->
<div class="resize"></div>
<!-- End Start Contact -->
        </div>
    </div>
</div>







<!--START TOP SECTION-->


<section class="container section-2-container">
    <div class="row">
    <div class="col-md-12 col-sm-12">
    <div class="section-2-content clearfix">
        <div class="section-2-copy">
            <h2 class="header-h2 white">FANTASY FOOTBALL FOR CASH PRIZES</h2>
            <h3 class=" white">Draft your fantasy team in just a few simple steps. </h3>
            <br>
        </div>
    </div>
    </div>
        <div class="row">
        <div class="section-2-slider">
            <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header2 white"><img class="numbers" src="img/num1SVG.svg">
                    <h3 class="uppercase white">Enter a price</h3>
                    <p class="card-p white">There’s something for every fan. Play against your friends or against everyone, with no season-long commitment.</p>
                </div>
            </div>
            </div>
            <div class="col-md-4 col-sm-12">
            <div class="card middle-card">
                <div class="card-header2 white"><img class="numbers" src="img/num2SVG.svg">
                    <h3 class="uppercase white">Pick your players</h3>
                    <p class="card-p white">Build a new team for every contest. Every player has a price, just choose the players you want while staying under the salary cap.</p>
                </div>
            </div>
            </div>
            <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header2 white"><img class="numbers" src="img/num3SVG.svg">
                    <h3 class="uppercase white">Add Excitment to the game</h3>
                    <p class="card-p white">Score fantasy points for your players’ real-world performances. Some contests have thousands of winners.</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
    <div class="section-2-copy"><a class="button primary" href="/p/Join">Join Now</a></div>
</section>


<section class="compare">
    <div class="compare-content">
        <h3 class="white">See how FanDuel stacks up against your traditional fantasy football league</h3>
        <table class="compare-content__chart">
            <tbody>
            <tr class="compare-content__chart-tr_heading">
                <th class="compare-content__chart-th"></th>
                <th class="compare-content__chart-th">FanDuel</th>
                <th class="compare-content__chart-th">Traditional Fantasy</th>
            </tr>
            <tr class="compare-content__chart-tr">
                <td class="compare-content__chart-td_left">Play against your friends</td>
                <td class="compare-content__chart-td_right"><img class="checkmark" src="img/check.svg"></td>
                <td class="compare-content__chart-td_right"><img class="checkmark" src="img/check.svg"></td>
            </tr>
            <tr class="compare-content__chart-tr">
                <td class="compare-content__chart-td_left">Customize your league settings</td>
                <td class="compare-content__chart-td_right"><img class="checkmark" src="img/check.svg"></td>
                <td class="compare-content__chart-td_right"><img class="checkmark" src="img/check.svg"></td>
            </tr>
            <tr class="compare-content__chart-tr">
                <td class="compare-content__chart-td_left">Pick a new team every week</td>
                <td class="compare-content__chart-td_right"><img class="checkmark" src="img/check.svg"></td>
                <td class="compare-content__chart-td_right"></td>
            </tr>
            <tr class="compare-content__chart-tr">
                <td class="compare-content__chart-td_left">Choose any player you want</td>
                <td class="compare-content__chart-td_right"><img class="checkmark" src="img/check.svg"></td>
                <td class="compare-content__chart-td_right"></td>
            </tr>
            <tr class="compare-content__chart-tr">
                <td class="compare-content__chart-td_left">Win cash prizes</td>
                <td class="compare-content__chart-td_right"><img class="checkmark" src="img/check.svg"></td>
                <td class="compare-content__chart-td_right"></td>
            </tr>
            <tr class="compare-content__chart-tr">
                <td class="compare-content__chart-td_left">Coordinate a draft time</td>
                <td class="compare-content__chart-td_right"></td>
                <td class="compare-content__chart-td_right"><img class="checkmark" src="img/check.svg"></td>
            </tr>
            <tr class="compare-content__chart-tr">
                <td class="compare-content__chart-td_left">Get stuck with injured players</td>
                <td class="compare-content__chart-td_right"></td>
                <td class="compare-content__chart-td_right"><img class="checkmark" src="img/check.svg"></td>
            </tr>
            </tbody>
        </table><a class="button primary" href="/p/Join">Join Now</a></div>
</section>





<div class="container section-4-container">
    <div class="section-4-content">
    <div class="row">
        <div class="col-md-4 col-lg-4 col-sm-12">
        <div class="card">
            <div class="card-header purple white">
                Beginner Only Contests
            </div>
            <div class="card-body">
                <p class="card-p navy">Play fantasy basketball against other FanDuel rookies — no experienced players allowed.
                    <br>
                    <br><a class="primary button" href="/beginner-contests">Learn more</a></p>
            </div>
        </div>
            <div class="clearfix"></div>

        </div>
        <div class="col-md-4 col-lg-4 col-sm-12">
        <div class="card middle-card">
            <div class="card-header light-blue white">
                NBA Mini
            </div>
            <div class="card-body">
                <p class="card-p navy">Smaller, 5-man rosters make it easy to pick your team and compete for cash on the fly.
                    <br>
                    <br>
                </p>
                <p class="section-4-copy-grey">Coming Soon</p>
            </div>
        </div>
            <div class="clearfix"></div>

        </div>

        <div class="col-md-4 col-lg-4 col-sm-12">
        <div class="card">
            <div class="card-header light-green white">
                Other Fantasy Sports
            </div>
            <div class="card-body">
                <p class="card-p navy">FanDuel is more than fantasy basketball. We also have NFL, MLB, NHL, EPL, WNBA, and PGA contests.
                    <br>
                    <br><a class="primary button" href="/training-guides">Learn more</a></p>
            </div>
        </div>
            <div class="clearfix"></div>

        </div>
    </div>
    </div>
</div>
    </div>
</section>
</body>
</html>