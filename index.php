<html>
        <title>RichVille Hotel</title>
        <link rel="stylesheet" href="css/css/style.css" type="text/css" media="all">
        <script type="text/javascript" src="css/js/jquery-1.6.js"></script>
        <script type="text/javascript" src="css/js/cufon-yui.js"></script>
        <script type="text/javascript" src="css/js/cufon-replace.js"></script>  
        <script type="text/javascript" src="css/js/Adamina_400.font.js"></script>
        <script type="text/javascript" src="css/js/kwicks-1.5.1.pack.js"></script>
        <script type="text/javascript" src="css/js/jquery.jqtransform.js"></script>
        <script type="text/javascript" src="css/js/modal.js"></script>
        <script type="text/javascript" src="css/js/script.js"></script>
<body>    

	 <div class="bg1">
            <div class="bg2">
                <div class="main">
            
                    <header>
                            <h1><a href="admn.php" id="logo"></a></h1>
                        </header>
                       
                            <nav>
                              <ul id="menu">
								<li class="active"><a href="index.php">About</a></li>
								<li><a href="services.php">Services</a></li>
								<li ><a href="rooms.php">Rooms</a></li>
								<li ><a href="loc.php">Location</a></li>
								<li ><a href="cont.php">Email Us</a></li>
                                </ul>
                            </nav>  
							
							<div class="box1">
                                <div class="wrapper">
								 <form action="user.php" id="form1" method="post">
                                        <h2>Book a Room</h2>
                                        <fieldset>
                                            <div class="row">
                                                <input name="fname" type="text" class="input">
                                                First Name:
                                            </div>	
											<div class="row">
                                                <input name="lname" type="text" class="input">
                                                Last Name:
                                            </div>	
                                            <div class="row">
                                                <input name="email" type="text" class="input">
                                                E-Mail:
                                            </div>	
                                            <div class="row">
                                                <input name="phone" type="text" class="input">
                                             Contact Number:
                                            </div>	
                                            <div class="row">
                                               
                                                
                                               <?php
                                                    
                                                echo '
                                               
                                               
                                           	
                                            <div class="row">
                                                <div id = class="select2">
                                                <select name="year">
                                                <option >14</option>
                                                <option >15</option>
                                                </select>
                                                </div>
                                                  <div class="select2">
                                                <select name="day">';?>
                                                   <?php  for($i = 1; $i < 32; $i++){
                                                        echo '<option>'.$i.'</option>';
                                                    }
                                                echo '</select>
                                                </div>
                                                  <div class="select2">
                                                <select name="month">';?>
                                              <?php for($i = 1; $i < 13; $i++){
                                                        echo '<option>'.$i.'</option>';
                                                    }?>
                                               </select>
                                                </div>
                                                
                                                Check-in:
                                            </div>	
											<div class="row">
                                                <div id = class="select2">
                                                <select name="year1">
                                                <option >14</option>
                                                <option >15</option>
                                                </select>
                                                </div>
                                                  <div class="select2">
                                                <select name="day1">';?>
                                                   <?php  for($i = 1; $i < 32; $i++){
                                                        echo '<option>'.$i.'</option>';
                                                    }
                                                echo '</select>
                                                </div>
                                                  <div class="select2">
                                                <select name="month1">';?>
                                              <?php for($i = 1; $i < 13; $i++){
                                                        echo '<option>'.$i.'</option>';
                                                    }?>
                                               </select>
                                                </div>
                                                
                                               Check-out:
                                            </div>	
                                           	<br><br>
                                            <div class="wrapper">
                                               <input type="submit" class="button1" value="Book">
                                           
                                            </div>
                                        </fieldset>
                                    </form>
								<div class="kwicks-wrapper marg_bot1">
                                        <ul class="kwicks horizontal" style="width: 640px; height: 414px;">
                                            <li style="left: 0px; margin: 0px; position: absolute; width: 160px;"><img src="image/img1.jpg" alt=""></li>
                                            <li style="left: 73x; margin: 0px; position: absolute; width: 160px; overflow: hidden;" class=""><img src="image/img2.jpg" alt=""></li>
                                            <li style="left: 212x; margin: 0px; position: absolute; overflow: hidden; width: 160px;" class="active"><img src="image/img3.jpg" alt=""></li>
                                            <li style="right: 0px; margin: 0px; position: absolute; width: 160px;"><img src="image/img4.jpg" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pad">
                                <div class="wrapper line3">
                                    <div class="col2">
                                        <h2><cufon class="cufon cufon-canvas" alt="Welcome " style="width: 92px; height: 21px;"><canvas width="115" height="29" style="width: 115px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Welcome </cufontext></cufon><cufon class="cufon cufon-canvas" alt="to " style="width: 23px; height: 21px;"><canvas width="46" height="29" style="width: 46px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>to </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Our " style="width: 43px; height: 21px;"><canvas width="66" height="29" style="width: 66px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Our </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Hotel!" style="width: 56px; height: 21px;"><canvas width="79" height="29" style="width: 79px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Hotel!</cufontext></cufon></h2>
                                       <p class="pad_bot2">
                                            Set against the magnificent golden sunset of the Manila Bay is the five-star HOTEL Lounge Hotel Philippines. A LUXURY HOTEL in Manila with a sunset view, Lounge Hotel is only minutes away from the international and domestic airports, and from the Makati business district. Lounge Hotel is near SMX Convention Center, Cultural Center of the Philippines (CCP) and the Philippine International Convention Center (PICC).  It is also near SM Mall of Asia, Robinsons Manila and other shopping destinations.  Also within the vicinity are Manila's famous historical landmarks, cultural sites, and Malate's spectacular nightlife.

Lounge Hotel has a variety of restaurants and bars specializing in different cuisines and diners are sure to have a remarkable dining experience. Function rooms are also available for memorable weddings and successful corporate events. Swimming pool and outdoor whirlpool, tennis court, Lounge Spa, LifeSpan Reflexology and Lounge Club gym facilities are perfect for recreational and fitness activities.

A home away from home, guests are guaranteed of a wonderful experience of comfort, luxury and impeccable service in every visit to Lounge Hotel.  Experience the world-renowned Lounge Service from the efficient and courteous staff of Lounge Hotel Philippines </div>
                                    <div class="col1 pad_left1">
                                        <h2>About US</h2><div class="wrapper">
                                            <figure class="left marg_right1"><img src="image/about.jpg" alt=""></figure>
                                            <p class="pad_bot1"><strong class="color2">Exquisite 5 years of service</strong></p>
                                          
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </article>
                          </div></div></div></div>

        <script>
            $(document).ready(function(){
                $(".kwicks").kwicks({
                    max : 500,
                    spacing : 0,
                    event : "mouseover"
                });
							   
            })
        </script>
						  </body>