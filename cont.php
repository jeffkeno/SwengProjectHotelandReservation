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
                            <h1><a href="index.php" id="logo">LoungeHotel</a></h1>
                        </header>
                      
                            <nav>
							
                              <ul id="menu">
								<li ><a href="index.php">About</a></li>
								<li><a href="services.php">Services</a></li>
								<li ><a href="rooms.php">Rooms</a></li>
								<li ><a href="loc.php">Location</a></li>
								<li class="active" ><a href="cont.php">Email Us</a></li>
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

								<h2><img src="image/bell.jpg">Contact Us</h2>
							<div class="box1">
								<div class="wrapper">
								 <article id="confirmcontent">
            <div class="box1">
                <div class="wrapper">
                    <div class="confirmbookwrapper">
                      <?php
			if (isset($_POST['pname'])){
				$name=$_POST['pname'];
				$add= $_POST['add'];
				$con= $_POST['con'];
				$em= $_POST['em'];
				$msg= $_POST['msg'];
					$link = mysql_connect('localhost', 'root', '');
										if (!$link) {
											die('Could not connect: ' . mysql_error());
											}
										mysql_select_db('hotelR',$link);  
										$sql = "Insert into messages(Name, Address,Contact,Email,Message)Values('$name','$add','$con','$em','$msg')";
									
										if (!mysql_query($sql,$link))
										{
								die('Error: ' . mysql_error());
								}
				
			}
			?>
                        <form id="booking" method="POST" action="cont.php">
							<table id="a">
							<tr><td>Name:</td><td><input type=text name=pname></td></tr>					
							<tr><td>Address:</td><td><input type=text name=add></td></tr>					
							<tr><td>Contact:</td><td><input type=text name=con></td></tr>					
							<tr><td>Email:</td><td><input type=text name=em></td></tr>					
							<tr><td>Message:</td><td><textarea rows=5 cols=60 name=msg></textarea></td></tr>					
							</table>
								<input type="submit" class="button2" value ="Send">
                           </form>
						</article>
					</div>
				</div>

						  </body>