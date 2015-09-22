<!DOCTYPE html>

  <?php 
                    if (isset($_GET['Message'])) {
                                         print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
                        }
  ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>WeCelebrate</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style-portfolio.css">
    <link rel="stylesheet" href="css/picto-foundry-food.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="favicon-1.ico" type="image/x-icon">

    
</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Restaurant</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav main-nav  clear navbar-right ">
                    <li><a class="active color_animation" href="#top">WELCOME</a></li>
                    <li><a class="color_animation" href="#story">ABOUT</a></li>
                   <li><a class="color_animation" href="#checkout">CHECK-OUT</a></li>
                   <!-- <li><a class="color_animation" href="#beer">BEER</a></li>
                    <li><a class="color_animation" href="#bread">BREAD</a></li>
                    <li><a class="color_animation" href="#featured">FEATURED</a></li> -->
                    <li><a class="color_animation" href="#reservation">RESERVATION</a></li>
                    <li><a class="color_animation" href="#contact">CONTACT</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
     
    <div id="top" class="starter_container bg">
        <div class="follow_container">
            <div class="starter_follow">
                <h2 class="top-title"> Restaurant</h2>
                <h2 class="white second-title">" Best in the city "</h2>
                <hr>
            </div>
        </div>
        <div class="direction_container">
            <div class="direction">
                <a href="#story"></a>
            </div>
        </div>
    </div>


    <section id="story" class="description_content">
        <div class="limit">
            <div class="description_body margin-right">
                <h1>About us</h1>
                <div class="fa fa-cutlery fa-2x"></div>
                <p>Restaurant is a place for simplicity. Good food, good beer, and good service. Simple is the name of the game, and we’re good at finding it in all the right places, even in your dining experience. We’re a small group from Denver, Colorado who make simple food possible. Come join us and see what simplicity tastes like.</p>
            </div>
            <div class="picture_content margin-left">
                <ul class="image_box_story">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </section>


<!--    <section id ="pricing" class="background_content">
        <h1><span>Affordable</span> pricing</h1>
    </section>


    <section class="description_content">
        <div class="limit"> 
            <div class="container">
                <div class="row">
                    <div id="w">
                        <ul id="filter-list" class="clearfix">
                            <li class="filter" data-filter="all">All</li>
                            <li class="filter" data-filter="breakfast">Breakfast</li>
                            <li class="filter" data-filter="special">Special</li>
                            <li class="filter" data-filter="desert">Desert</li>
                            <li class="filter" data-filter="dinner">Dinner</li>
                        </ul><!-- @end #filter-list -->    
                   <!--     <ul id="portfolio">
                            <li class="item breakfast"><img src="images/food_icon01.jpg" alt="Food" >
                                <h2 class="white">$20</h2>
                            </li>

                            <li class="item dinner special"><img src="images/food_icon02.jpg" alt="Food" >
                                <h2 class="white">$20</h2>
                            </li>
                            <li class="item dinner breakfast"><img src="images/food_icon03.jpg" alt="Food" >
                                <h2 class="white">$18</h2>
                            </li>
                            <li class="item special"><img src="images/food_icon04.jpg" alt="Food" >
                                <h2 class="white">$15</h2>
                            </li>
                            <li class="item dinner"><img src="images/food_icon05.jpg" alt="Food" >
                                <h2 class="white">$20</h2>
                            </li>
                            <li class="item special"><img src="images/food_icon06.jpg" alt="Food" >
                                <h2 class="white">$22</h2>
                            </li>
                            <li class="item desert"><img src="images/food_icon07.jpg" alt="Food" >
                                <h2 class="white">$32</h2>
                            </li>
                            <li class="item desert breakfast"><img src="images/food_icon08.jpg" alt="Food" >
                                <h2 class="white">$38</h2>
                            </li>
                        </ul><!-- @end #portfolio -->
                 <!--   </div><!-- @end #w -->
             <!--   </div>
            </div>
        </div>  
    </section>


    <section id ="beer" class="background_content">
        <h1>Great <span>Place</span> to enjoy</h1>
    </section>

<!--        <div class="limit">
            <div class="picture_content margin-right">
                <ul class="image_box_beer">
                    <li></li>
                </ul>
            </div>
      	    <div class="description_body margin-left">
                <h1>OUR BEER</h1>
                <div class="icon-beer fa-2x"></div>
                <p>Here at Restaurant we’re all about the love of beer. New and bold flavors enter our doors every week, and we can’t help but show them off. While we enjoy the classics, we’re always passionate about discovering something new, so stop by and experience our craft at its best.</p>
            </div>
        </div>
    </section>


   <section id="bread" class="background_content">
     <h1>Our Breakfast <span>Menu</span></h1>
   </section>


    <section class="description_content">
        <div class="limit">
            <div class="description_body margin-right">
                <h1>OUR BREAD</h1>
                <div class="icon-bread fa-2x"></div>
                <p>We love the smell of fresh baked bread. Each loaf is handmade at the crack of dawn, using only the simplest of ingredients to bring out smells and flavors that beckon the whole block. Stop by anytime and experience simplicity at its finest.</p>
            </div>
            <div class="picture_content margin-left">
                <ul class="image_box_story1">
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </section>


  <!--  <section id="featured" class="background_content">
        <h1>Our Featured Dishes <span>Menu</span></h1>
    </section>


    <section class="description_content">
        <div class="limit">
            <div class="description_body margin-right">
                <h1>Have a look to our dishes!</h1>
                <div class="icon-hotdog fa-2x"></div>
                <p>Each food is handmade at the crack of dawn, using only the simplest of ingredients to bring out smells and flavors that beckon the whole block. Stop by anytime and experience simplicity at its finest.</p>
            </div>
            <div class="picture_content margin-left">
                <ul class="image_box_story2">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators 
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                 <!--       <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/slider1.jpg"  alt="...">
                                <div class="carousel-caption">
                                    ...
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/slider2.jpg" alt="...">
                                <div class="carousel-caption">
                                    ...
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/slider3.jpg" alt="...">
                                <div class="carousel-caption">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </section>  -->


    <section id="reservation" class="background_content">
        <h1>Reserve A Table!</h1>
    </section>

    <section id="resource_verification" class="description_content">
        <div class="container">
			<div class="jumbotron">
				<h2> Check the available resources on the booking day !</h2> <br>
				
				<form action="php/check.php" method="POST" >
                                       
                                        <label for="Date"> Date to be reserved: </label>
                                        <input name="t_date"  class="form-control" type="Date" required="" placeholder="Enter the Date(YYYY-MM-DD):"> </input> <br>
                                        <label for="Time"> Time to be reserved : </label>
                                      
                                        <input name="start_time" class="form-control" type="Time" required="" placeholder="End the Time(HH:MM:SS):"> </input><br>
                                       
                                        <input name="end_time" class="form-control" type="Time" required="" placeholder="Start Time(HH:MM:SS):"> </input><br>
                                       
                                        <label for="Function"> Function to be arranged: </label>
                                        <label class="radio-inline"><input type="radio" name="options" value="Birthday"> Birthday</input></label>
                                        <label class="radio-inline"><input type="radio" name="options" value="Anniversary"> Anniversary </input></label>
                                        <label class="radio-inline"><input type="radio" name="options" value="Conference"> Conference</input></label>
                                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="check"> Check !</button>
                                        
					
				</form> 	

			</div>
		</div> 
    </section>

     <section id="checkout" class="background_content">
        <h1>CHECK-OUT and PAY On-line</h1>
    </section>

    <section class="description_content">

    	<!-- <h2><b> ....CHECK-OUT and PAY On-line....</b> </h2> -->
        <div class="limit">
            <div class="inner contact">

                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form  method="POST" action="php/reserve.php">
                        <!-- Left Inputs -->

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <!-- Name -->
                                            <input type="text" name="first_name" id="first_name" required="required" class="form" placeholder="First Name" />
                                            <input type="text" name="last_name" id="last_name" required="required" class="form" placeholder="Last Name" />
                                            <input type="text" name="town" id="town" required="required" class="form" placeholder="Town" />
                                            <input type="text" name="datepicker" id="datepicker" required="required" class="form" placeholder="Reservation Date" />
                                             <input type="text" name="reserve_time_from" id="reserve_time_from" required="required" class="form" placeholder="Reservation Time From HH:MM:SS" />
                                            <label>Total cost of the bill :</label>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <!-- Name -->
                                            <input type="text" name="phone" id="phone" required="required" class="form" placeholder="Phone" />
                                            <input type="text" name="nic" id="nic" required="required" class="form" placeholder="NIC" />
                                            <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                            <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Reason" />
                                             <input type="text" name="reserve_time_to" id="reserve_time_to" required="required" class="form" placeholder="Reservation Time To HH:MM:SS" />
                                            <input type="text" name="cost" id="cost" required="required" class="form"  />
                                        </div>

                                        <div class="col-xs-12">
                                            <!-- Send Button -->
                                           <button type="submit" id="reserve" name="reserve" class=" form-btn form-btn1 semibold">Reserve</button> 

                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <!-- Message -->
                                   <div class ="image">
                                   			<img id="customize_view" src="images/table1.jpg" alt="customized table" style="width:304px;height:228px;">
                                   			<br><h5> Customized table arrangement</h5>

                                   </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>
                  
                    <span id="result" ></span>
                    <div>
                    	<h6>To make your reservation conferm Pay on-line  <br></h6>
                    	  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
									<input type="hidden" name="cmd" value="_s-xclick">
									<input type="hidden" name="hosted_button_id" value="5E6X2VRFR2BC2">
									<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
									<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>

                    </div>
                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->
        </div>
    </section>


  

    <footer class="first_footer">
        <section class="limit">
            <div class="come_in">
                <span class="social_heading"></span>
                <span class="social_info"><a class="color_animation" href="https://www.google.com/maps/place/Venice,+FL/@27.114846,-82.4146291,13z/data=!3m1!4b1!4m2!3m1!1s0x88c34e48300b2dfb:0x52ac882236d6b362" target="_blank"></a></span>
            </div>
            <div class="connect">
                <span class="social_heading">FOLLOW</span>
                <ul class="social_icons">
                    <li><a class="icon-twitter color_animation" href="#" target="_blank"></a></li>
                    <li><a class="icon-github color_animation" href="#" target="_blank"></a></li>
                    <li><a class="icon-linkedin color_animation" href="#" target="_blank"></a></li>
                    <li><a class="icon-mail color_animation" href="#"></a></li>
                </ul>
            </div>
            <div class="or_call">
                <span class="social_heading">OR DIAL</span>
                <span class="social_info"><a class="color_animation" href="tel:883-335-6524">(941) 883-335-6524</a></span>
            </div>
        </section>
    </footer>


    <div id="contact"  class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d26081603.29442047!2d-95.677068!3d37.0625!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1421239704485" width="100%" height="400px" frameborder="0" style="border:0"></iframe>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner contact">
                    <!-- Form Area -->
                    <div class="contact-form">
                        <!-- Form -->
                        <form id="contact-us" method="post" action="contact.php">
                            <!-- Left Inputs -->
                            <div class="col-md-6 ">
                                <!-- Name -->
                                <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                                <!-- Email -->
                                <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                <!-- Subject -->
                                <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                            </div><!-- End Left Inputs -->
                            <!-- Right Inputs -->
                            <div class="col-md-6">
                                <!-- Message -->
                                <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                            </div><!-- End Right Inputs -->
                            <!-- Bottom Submit -->
                            <div class="relative fullwidth col-xs-12">
                                <!-- Send Button -->
                                <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button> 
                            </div><!-- End Bottom Submit -->
                            <!-- Clear -->
                            <div class="clear"></div>
                        </form>
                    </div><!-- End Contact Form Area -->
                </div><!-- End Inner -->
            </div>
        </div>
    </div>

    <footer class="sub_footer">
        <section class="limit">
            <div><p>copy right GDR 2015</p></div>
            <div><p>BACK TO <a href="#top">TOP</a></p></div>
            <div><p>BUILT WITH CARE BY <a href="#" target="_blank">US</a></p></div>
        </section>
    </footer>


    <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>      
    <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
     <script type="text/javascript" src="js/paypal-button.min.js" ></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script src="js/jquery.min.js"></script> 
    <script src="js/my.js"></script>


</body>
</html>
