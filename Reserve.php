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
								<li ><a href="admn.php">Rooms</a></li>
								<li><a href="add.php">Add A Room</a></li>
								<li class="active"><a href="Reserve.php">Reservation</a></li>
								<li><a href="Message.php">Messages</a></li>
								</ul>
                            </nav>  
								<article id="content">
							<div class="box1">
								<div class="wrapper">
								<center>
								<div class="tab2">
								<table class=table>
								  <tr>
    <th class=th>Title</th>
    <th class=th>FirstName</th> 
    <th class=th>Middle Name</th>
    <th class=th>Last Name</th>
    <th class=th>Address</th>  
  <th class=th>Phone</th>
    <th class=th>Email</th>
    <th class=th>Quantity</th>
    <th class=th>CheckIn Date</th>
    <th class=th>CheckOut Date</th>
    <th class=th>Room Type</th>
    
    <th class=th>Room ID</th>
    <th class=th>Manipulation</th>

  </tr>
  <?php $link = mysql_connect('localhost', 'root', '');
										if (!$link) {
											die('Could not connect: ' . mysql_error());
											}
										mysql_select_db('hotelr');  
										$result = mysql_query("SELECT * from user;");
										while ($row = mysql_fetch_array($result)) { ?>

  <tr>
	<?php $i = $row[0]; ?>
    <td  class=td><?php echo $row[1] ?></td>
    <td class=td2><?php echo $row[2] ?></td> 
    <td class=td><?php echo $row[3] ?></td>
    <td class=td2><?php echo $row[4] ?></td>
    <td class=td><?php echo $row[5] ?></td>
    <td class=td2><?php echo $row[6] ?></td>
    <td class=td><?php echo $row[7] ?></td>
    <td class=td2><?php echo $row[8] ?></td>
    <td class=td><?php echo $row[9] ?></td>
    <td class=td2><?php echo $row[10] ?></td>
    <td class=td><?php echo $row[11] ?></td>
    <td class=td2><?php echo $row[12] ?></td>
    <td class=td><form action="reserve.php" method=POST>
	<input type = "hidden" name="id" value=<?php echo $i?>>
    <input type="submit" name="Delete" value="Delete" class="button1"/>
	</form></td>
  </tr>
  <?php }?>
</table></center></div>
								<br><br><br>
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
		<?php
		if($_POST['id']!=null){
		$id=$_POST['id'];
			$link = mysql_connect('localhost', 'root', '');
										if (!$link) {
											die('Could not connect: ' . mysql_error());
											}
										mysql_select_db('hotelR',$link);  
			$sql = "Delete from user where UserID=$id";
									
										if (!mysql_query($sql,$link))
										{
								die('Error: ' . mysql_error());
								}
		}
?>