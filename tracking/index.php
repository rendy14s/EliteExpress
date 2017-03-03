<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Tracking</title>
		<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="../js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="../css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>

		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!-- DataTables -->
		<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
			folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
	</head>
	<body>
	<!---- container ---->
		<!---- header ----->
		<div class="header about-head">
			<div class="container">
				<!--- logo ----->
				<div class="logo">
					<a href="index.html"><span>M</span>oto</a>
				</div>
				<!--- logo ----->
				<!--- top-nav ----->
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li><a href="../index.html">Home</a></li>
						<li><a href="../about.html">About</a></li>
						<li><a href="../services.html">Services</a></li>
						<li><a href="../blog.html">Blog</a></li>
						<li><a href="../contact.html">Contact</a></li>
						<li class="active"><a href="login.html">Login</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<!--- top-nav ----->
					<!----- script-for-nav ---->
				<script>
					$( "span.menu" ).click(function() {
					  $( ".top-nav ul" ).slideToggle( "slow", function() {
					    // Animation complete.
					  });
					});
				</script>
				<!----- script-for-nav ---->
			
			</div>
			</div>
		<!---- header ----->
		<!------ about ---->
		<div class="contact">
			<!--- bradcrumbs ---->
			<div class="breadcrumbs">
				<div class="container">
					<div class="breadcrumbs-left">
						<h1>Contact</h1>
					</div>
					<div class="breadcrumbs-right">
						<ul>
							<li><a href="../index.html">Home</a> <label>:</label></li>
							<li>Login</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="contact">
				<div class="contact-top">
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.0185379564668!2d106.9115123173715!3d-6.258846661684729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d2b3489fe69%3A0x2884e596a5de7440!2sJl.+Anugrah+Raya+No.17%2C+Jaticempaka%2C+Pondokgede%2C+Kota+Bks%2C+Jawa+Barat+17411!5e0!3m2!1sen!2sid!4v1487614640599"> </iframe>
					</div>
				</div>
				<div class="container">
					<div class="contact-grids">
						<div class="contact-left">
							<h2>Address</h2>
							<span>congue. Phasellus rhoncus elementum diam.</span>
							<p>Lorem ipsum dolor sit amet,</p> consectetur adipiscing elit.</p><p> Nunc sit amet lectus</p><p> Eget leo-12345678</p>
							<p> Eget leo-00000001</p>
						</div>
						<div class="contact-right">
							<h2>Tracking Your Product</h2>
							<form action="index.php" method="POST">
								<div>
									<span>No Airway Bill</span>
									<input type="text" name="awb"> 
								</div>
                                <input type="submit" Value="Submit" />
							</form>
							<br>
							<br>
							<div class="box">
								<div class="box-header">
								<h3 class="box-title">Tracking Data</h3>
								</div>
								<div class="box-body">
								<table id="example2" class="table table-bordered table-hover">
									<thead>
									<tr>
									<th>No</th>
									<th>No Airway Bill</th>
									<th>Tanggal</th>
									<th>Nama Pengirim</th>
									<th>PT</th>
									<th>From</th>
									<th>To</th>
									<th>Deskription</th>
									</tr>
									</thead>
									<tbody>
									 <?php
									 error_reporting(0);

									 	include"../Koneksi/koneksi.php";

										$awb    = $_POST['awb'];

										$sql =  mysqli_query($conn, "SElECT * FROM data WHERE awb = '$awb'");
										$row =  mysqli_num_rows($sql);
										
									 if($row >= 1){
										$no = 0;
										while($result   = mysqli_fetch_array($sql)){
											$awb                = $result['awb'];
											$tanggal            = $result['tanggal'];
											$nama               = $result['nama'];
											$nama_pt            = $result['nama_pt'];
											$region             = $result['region'];
											$kota               = $result['kota'];
											$regional_barang    = $result['regional_barang'];

											$no++;
											echo "<tr>";
											echo "<td>";
											echo $no;
											echo "</td>";

											echo "<td>";
											echo $awb;
											echo "</td>";

											echo "<td>";
											echo $tanggal;
											echo "</td>";

											echo "<td>";
											echo $nama;
											echo "</td>";

											echo "<td>";
											echo $nama_pt;
											echo "</td>";

											echo "<td>";
											echo $region;
											echo "</td>";

											echo "<td>";
											echo $kota;
											echo "</td>";

											echo "<td>";
											echo $regional_barang;
											echo "</td>";

											echo "</tr>";
										}

									 }
									 if($row == 0){
										 echo "<tr>";
										 echo "<td>";
										 echo "No Data Available";
										 echo "</td>";
										 echo "</tr>";
									 }
									?>
									


									</tbody>
								</table>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->

						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
		</div>
		<!---- contact ----->
	<!---- container ---->
	<div class="footer">
				<div class="top-footer">
					<div class="container">
						<div class="top-footer-grids">
							<div class="top-footer-grid">
								<h3>Contact us</h3>
								<ul class="address">
									<li><span class="map-pin"> </span><label>55 Main St.Toronto, ON M1H 3A5</label></li>
									<li><span class="mob"> </span>(416) 555-5252</li>
									<li><span class="msg"> </span><a href="mailto:yourname@yoursite.com">hello@moto.com</a></li>
								</ul>
							</div>
							<div class="top-footer-grid">
								<h3>Latest posts</h3>
								<ul class="latest-post">
									<li><a href="#"><span class="icon1"> </span> Made With Love In Toronto</a> </li>
									<li><a href="#"><span class="icon2"> </span> Startup News &amp; Emerging Tech</a> </li>
									<li><a href="#"><span class="icon3"> </span> Bitcoin Will Soon Rule The World</a> </li>
									<li><a href="#"><span class="icon4"> </span> Wearable Technology On The Rise</a> </li>
									<li><a href="#"><span class="icon5"> </span> Learn Web Design In <label>30 Days!</label></a> </li>
								</ul>
							</div>
							<div class="top-footer-grid">
								<h3>Latest tweets</h3>
								<div class="tweet-box">
									<div class="tweet-box-icon">
										<span> </span>
									</div>
									<div class="tweet-box-info">
										<p>Confucius: Life is really simple, but we insist on making it complicated. <span><a href="#">#famousquotes</a></span><label><a href="#"> 8 mins ago</a></label></p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="tweet-box">
									<div class="tweet-box-icon">
										<span> </span>
									</div>
									<div class="tweet-box-info">
										<p>Confucius: Life is really simple, but we insist on making it complicated. <span><a href="#">#famousquotes</a></span><label><a href="#"> 8 mins ago</a></label></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!----start-bottom-footer---->
				<div class="bottom-footer">
					<div class="container"> 
						<div class="bottom-footer-left">
							<p>&#169; Copyright 2014 Template by <a href="http://w3layouts.com/">W3layouts</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!----//End-bottom-footer---->
			</div>
	</body>
</html>

