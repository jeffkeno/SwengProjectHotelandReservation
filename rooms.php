<html>
        <title>RichVille Hotel</title>
        <link rel="stylesheet" href="css/css/style.css" type="text/css" media="all">
        <script type="text/javascript" src="css/js/jquery-1.6.js"></script>
        <script type="text/javascript" src="css/js/cufon-yui.js"></script>
        <script type="text/javascript" src="css/js/cufon-replace.js"></script>  
        <script type="text/javascript" src="css/js/Adamina_400.font.js"></script>
        <script type="text/javascript" src="css/js/kwicks-1.5.1.pack.js"></script>
        <script type="text/javascript" src="css/js/atooltip.jquery.js"></script>
        <script type="text/javascript" src="css/js/jquery.jqtransform.js"></script>
        <script type="text/javascript" src="css/js/modal.js"></script>
        <script type="text/javascript" src="css/js/script.js"></script>
<body>    
   
   <div class="bg1">
            <div class="bg2">
                <div class="main">          
                    <header>
                            <h1><a href="index.php" id="logo">LoungeHotel</a></h1>
                        </header>
						<nav>
                                <ul id="menu">
								<li ><a href="index.php">About</a></li>
								<li><a href="services.php">Services</a></li>
								<li class="active"><a href="rooms.php">Rooms</a></li>
								<li ><a href="loc.php">Location</a></li>
								<li ><a href="cont.php">Email Us</a></li>
                                </ul>
                            </nav>  
							<article id="content">
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
								<div class="col2 pad">
										<h2>Our Rooms<img src="image/bell.jpg" alt=""></h2>
										<div class="wrapper line1">
										<?php
											$ctr=0;
											$link = mysql_connect('localhost', 'root', '');
										if (!$link) {
											die('Could not connect: ' . mysql_error());
											}
										mysql_select_db('hotelr');  
										$result = mysql_query("SELECT DISTINCT RoomType, Qty, Picture, Price from Room;");
										while ($row = mysql_fetch_array($result)) {
											if($ctr%2==0){ $ctr+=1;
											?>
											
											<div class="col3">
												<figure class="pad_bot3"><img src="image/<?php echo $row[2]?>" alt=""></figure>
												<p class="pad_bot1"><strong class="color3"><?php echo $row[0]?></strong></p>
												
												<ul class="list2">
												<?php	$re = mysql_query('SELECT Count(*) from Room where RoomType="'.$row[0].'";');
														$ro = mysql_fetch_array($re)					?>
													<li><span><?php echo $ro[0]?></span>Available Rooms</li>
												
													<li><span><?php echo $row[1]?></span>Person</li>
													<li><span><?php echo 'P'. $row[3]?></span>Price</li>
												</ul>
												
											
											</div>
											<?php }else{ $ctr+=1; ?>
											
											<div class="col3 pad_left2">
												<figure class="pad_bot3"><img src="image/<?php echo $row[2]?>" alt=""></figure>
												<p class="pad_bot1"><strong class="color3"><?php echo $row[0]?></strong></p>
												<ul class="list2">
														<?php	$re = mysql_query('SELECT Count(*) from Room where RoomType="'.$row[0].'";');
														$ro = mysql_fetch_array($re)					?>
													<li><span><?php echo $ro[0]?></span>Available Rooms</li>
													<li><span><?php echo $row[1]?></span>Person</li>
													<li><span><?php echo 'P'.$row[3]?></span>Price</li>
												</ul>
											</div>
											<?php }
											}?>
											
										</div>
									</div>
								</div>
							</div>
							<div class="pad">
							<br><br><br>
							</div>
						</article>
								</div>
				</div>
			</div>
		</div>

	