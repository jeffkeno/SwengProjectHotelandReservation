<html>
        <title>RichVIlle Hotel</title>
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
<script>		
  function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
	  function alphaOnly(e) {

  var code;

  if (!e) var e = window.event;

  if (e.keyCode) code = e.keyCode;

  else if (e.which) code = e.which;

  if ((code >= 48) && (code <= 57)) { return false; }

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
								<li class="active"><a href="index.php">About</a></li>
								<li><a href="services.php">Services</a></li>
								<li ><a href="rooms.php">Rooms</a></li>
								<li ><a href="loc.php">Location</a></li>
								<li ><a href="cont.php">Email Us</a></li>
                                </ul>
                            </nav>  
							<?php
						
							$fname= $_POST['fname'];
							$lname= $_POST['lname'];
							$email= $_POST['email'];
							$phone= $_POST['phone'];
							$checkin= $_POST['month'] . '/'. $_POST['day']. '/'. $_POST['year'];
							$checkout= $_POST['month1'] . '/'. $_POST['day1']. '/'. $_POST['year1'];
							?>
							<article id="content">
							<div class="box1">
								<div class="wrapper">
								 <article id="confirmcontent">
            <div class="box1">
                <div class="wrapper">
                    <div class="confirmbookwrapper">

                        <h2><img src="image/bell.jpg" alt="">
                            Confirm Booking</h2>
                        <br>

                        <h3>Personal Information</h3>
						<table>
                        <form id="booking" method="POST" action="booked.php">
                            <tr><Td>Title:</td><td>
                            <select name="title">
                                <option>Mr.</option>
                                <option>Mrs.</option>
                                <option>Ms.</option>
                            </select></td><tr><td>
							First Name:</td><td>
                            <input type="text" name="fname" size="30"value=" <?php echo $fname?>"  onkeypress="return alphaOnly(event);"/>
                            </td></tr><tr><td>
							Middle Name:</td><td>
                            <input type="text"  name="mname"size="30" value="" onkeypress="return alphaOnly(event);" />
                            </td></tr><tr><td>
                            Last Name:</td><td>
                            <input type="text"  name="lname"size="30" value=" <?php echo $lname?> " onkeypress="return alphaOnly(event);">
                             </td></tr><tr><td>
                            Address:</td><td>
                            <input type="text"  name="add" value="" size="30" />
                             </td></tr><tr><td>
							Email Address:</td><td>
                            <input type="text"  name="email" size="30"value=" <?php echo $email?>" />
							 </td></tr><tr><td>
							Contact Number:</td><td>
                            <input type="text"  name="phone" size="30"value=" <?php echo $phone?>" onkeypress="return isNumberKey(event)" />
							 </td></tr><tr><td>
							<h3>Booking Details</h3></td>
                        <?php
						
					
					echo'
                            <br>
                            </tr><td>Check-in Date:</td><td>';
					?><select name="am"><?php
					$ck= explode("/", $checkin);
					for ($i = 1; $i < 12; $i++) {
					if($ck[0]==$i){
						echo '<option selected>' . $i . '</option>';
						}
						else{
						echo '<option>' . $i . '</option>';
						}
					}
						?></select>
						<select  name="ad"><?php
					for ($i = 1; $i < 30; $i++) {
					if($ck[1]==$i){
						echo '<option selected>' . $i . '</option>';
						}
						else{
						echo '<option>' . $i . '</option>';
						}
						}
						?></select>
						<select  name="ay">
						<?php if($ck[2]=="14"){
						?><option selected>2014</option>
						<option>2015</option><?php
						}
						else{?>
						<option selected>2014</option>
						<option>2015</option><?php
						}
						
						?>
						
						
						</select></td><tr><td>
						<br>
					Check-out Date: </td><td>
					<select  name="cm"><?php
					$co= explode("/", $checkout);
					for ($i = 1; $i < 12; $i++) {
					if($co[0]==$i){
						echo '<option selected>' . $i . '</option>';
						}
						else{
						echo '<option>' . $i . '</option>';
						}
					}
						?></select>
						<select  name="cd"><?php
					for ($i = 1; $i < 30; $i++) {
					if($co[1]==$i){
						echo '<option selected>' . $i . '</option>';
						}
						else{
						echo '<option>' . $i . '</option>';
						}
						}
						?></select>
						<select  name="cy">
						<?php if($co[2]=="14"){
						?><option selected>2014</option>
						<option>2015</option><?php
						}
						else{?>
						<option>2014</option>
						<option selected>2015</option><?php
						}?>
					</select></td><tr><td>
						
						
						<?php
         
     
			echo ' Room Type:</td><td>';
			$link = mysql_connect('localhost', 'root', '');
										if (!$link) {
											die('Could not connect: ' . mysql_error());
											}
										mysql_select_db('hotelR');  
										$result = mysql_query("Select Distinct RoomType from Room;");
										
			echo '<select  name="type" >';
			while ($row = mysql_fetch_array($result)) {
			echo '<option> '.$row[0].'</option> ';
			}
			echo '</select></td> ';
			
								?></table>
							<input type="submit" class="button2" value ="Confirm Booking">
							
						</form>


                    </div>
                    <div class="rules-wrapper">
                        <h2><img src="images/bell.jpg" alt="">
                            Rules</h2>
                        <br>
                        <h3>Upon Confirming</h3>
                        <p>Please bring the printed reciept on the date you choose to stay.</p>
                         <p>After 5 hours late on the date printed out, Your reservation will be cancelled.</p> 
						<p>Extra person that doesn't accomodate in quantity will be charged.</p>
						<p>Bring a valid ID when presenting your print reciept.</p>
						<p>No cancellation or Rebooking when the reservation is finalized.</p>
                    </div>
                </div>
            </div>
			
        </article>
</div>
</div>
</div>
<div class="pad">
							<br><br><br>
							</div>
							</body>
							</html>
