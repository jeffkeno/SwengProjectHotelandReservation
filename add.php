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
		<script type="application/javascript">

  function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }

</script>
<body>    
  <div class="bg1">
            <div class="bg2">
                <div class="main">          
                    <header>
                            <h1><a href="index.php" id="logo">LoungeHotel</a></h1>
                        </header>
						<nav>
                                <ul id="menu">
								<li><a href="admn.php">Rooms</a></li>
								<li class="active"><a href="add.php">Add A Room</a></li>
								<li><a href="Reserve.php">Reservation</a></li>
								<li><a href="Message.php">Messages</a></li>
								</ul>
                            </nav>  
								<article id="content">
							<div class="box1">
								<div class="wrapper">
								
								<h2><img src="image/bell.jpg">Add A Room</h2>
<article id="confirmcontent">
            <div class="box1">
                <div class="wrapper">
                    <div class="confirmbookwrapper">
                      <?php
			if (isset($_POST['num'])){
			$num2=$_POST['num'];
			$ctr="";
			 $link = mysql_connect('localhost', 'root', '');
										if (!$link) {
											die('Could not connect: ' . mysql_error());
											}
										mysql_select_db('hotelr');  
										$result = mysql_query("SELECT * from Room where RoomNumber='$num2';");
										 if(mysql_fetch_array($result) !== false){
										 echo 'Existing Room Number';
										 }
			
			else{
				$num=$_POST['num'];
				$type= $_POST['type'];
				
				
				if($type == "Standard Room"){
				$pic="standard.jpg";
				$price="4000";
				$quan="4";
				$desc="Room with 1 KING SIZE BED, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower";
				}
				else if($type == "Deluxe Room"){
				$pic="deluxe.jpg";
				$price="5000";
				$quan="4";
				$desc="Room with 2 queen size bed, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower and BATH TUB,electronic safe";
				}
				else if($type == "Deluxe Suite"){
				$pic="deluxes.jpg";
				$price="7000";
				$quan="5";
				$desc="Room with 2 queen size bed, extra matress, couch and coffee table, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower and BATH TUB,electronic safe, mini bar";
				}
				else if($type == "Grand Deluxe Suite"){
				$pic="grand.jpg";
				$price="8000";
				$quan="6";
				$desc="Room with 2 queen size bed, extra matress, couch and coffee table, computer table and rotating chair, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower and BATH TUB,electronic safe, mini bar,terrace";
				}
					$link = mysql_connect('localhost', 'root', '');
										if (!$link) {
											die('Could not connect: ' . mysql_error());
											}
										mysql_select_db('hotelR',$link);  
										$sql = "Insert into room(RoomNumber, RoomType,Qty,Availability,Price,Picture,Description)Values('$num','$type','$quan','Available','$price','$pic','$desc')";
									
										if (!mysql_query($sql,$link))
										{
								die('Error: ' . mysql_error());
								}
				}
			}
			else{
			echo'Please Put a Room Number.';
			}
			
			?>
                        <form id="booking" method="POST" action="add.php">
							<table id="a">
							<tr><td>Room Number:</td><td><input type=text name=num  onkeypress="return isNumberKey(event)"></td></tr>								
							<tr><td>Room Type:</td><td><select name=type>
							<option>Standard Room</option>
							<option>Deluxe Room</option>
							<option>Deluxe Suite</option>
							<option>Grand Deluxe Suite</option>
							</select></td></tr>					
														
							</table>
								<input type="submit" class="button2" value ="Add">
                           </form>
						</article>
								</div>
				</div>
			</div>
		</div>
				<?php
?>