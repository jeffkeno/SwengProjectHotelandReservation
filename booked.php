
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
								<li><a href="index.php">About</a></li>
								<li><a href="services.php">Services</a></li>
								<li ><a href="rooms.php">Rooms</a></li>
								<li ><a href="loc.php">Location</a></li>
								<li ><a href="cont.php">Email Us</a></li>
                                </ul>
                            </nav>  
							            <div class="box1">
                <div class="wrapper">
				<?php
	$title= $_POST['title'];
					$fname= $_POST['fname'];
					$mname= $_POST['mname'];
							$lname= $_POST['lname'];
							$add= $_POST['add'];
							$email= $_POST['email'];
							$phone= $_POST['phone'];
							
							$type= $_POST['type'];
							$checkin= $_POST['am'] . '/'. $_POST['ad']. '/'. $_POST['ay'];
							$checkout= $_POST['cm'] . '/'. $_POST['cd']. '/'. $_POST['cy'];							
							if($fname==""or $mname==""or $lname=="" or $add==""or $email==""or $phone==""){
								echo'Input All the necessary details before proceeding';
							}
							else if(strlen($phone)<=11 or strlen($phone)>=13 ){
							echo'invalid Phone number';
							}
							else if (preg_match('/[^a-zA-Z]+/', $add))
{
  echo 'No special characters allowed.';
}
							else{
							$code= rand(10,99) . rand(10,99) . rand(10,99) . rand(10,99) . rand(10,99);
				
							$link = mysql_connect('localhost', 'root', '');
										if (!$link) {
											die('Could not connect: ' . mysql_error());
											}
										mysql_select_db('hotelR');  
										$result = mysql_query("Select Qty,Price from Room where RoomType='$type';");
			
			while ($row = mysql_fetch_array($result)) {
							
							$num= $row[0];
							$price=$row[1];
			}
							
						
					$link = mysql_connect('localhost', 'root', '');
										if (!$link) {
											die('Could not connect: ' . mysql_error());
											}
										mysql_select_db('hotelR',$link);  
										$sql = "Insert into user(Title, FirstName, MiddleName, LastName, Address, Phone, Email, Quantity, Checkin, Checkout, RoomType,Code)Values('$title','$fname','$mname','$lname','$add','$phone','$email','$num','$checkin','$checkout','$type','$code')";
									
										if (!mysql_query($sql,$link))
										{
								die('Error: ' . mysql_error());
								}
					?>
				<form action="print.php" method="POST">
					<h2>Reservation for<input type=hidden name="name" value="<?php echo $title. ' '. $fname. ' '.$mname. ' '.$lname ?>"> <?php echo $title. ' '. $fname. ' '.$mname. ' '.$lname ?><br></h2>
					<h3>Personal Information <br>
					Address:<input type=hidden name="add" value="<?php echo $add ?>"> <?php echo $add ?><br>
					email: <input type=hidden name="email" value="<?php echo $email ?>"><?php echo $email ?><br>
					phone: <input type=hidden name="phone" value="<?php echo $phone ?>"><?php echo $phone ?><br>
					code: <input type=hidden name="code" value="<?php echo $code ?>"><?php echo $code ?><br>
					<br><br>
					Room Reservation Information <br>
					Check-in date:<input type=hidden name="ci" value="<?php echo $checkin ?>"> <?php echo $checkin ?><br>
					Check-out date:<input type=hidden name="co" value="<?php echo $checkout ?>"><?php echo $checkout ?><br>
					Room Type:<input type=hidden name="room" value="<?php echo $type ?>"> <?php echo $type ?><br>
					Available Number of Party:<input type=hidden name="avail" value="<?php echo $num ?>"><?php echo $num ?><br>
					Price:<input type=hidden name="price" value="<?php echo $price ?>"><?php echo $price ?><br>
					<input type="submit" class="button2" value="print">
					<form><?php 			}
	
					?>
					</h3>
				
                    </div>
				
					</div>
<div class="pad">
							<br><br><br>
							</div>
							</body>
							</html>