<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
    // this is my first comment to regina! 
		<title>Music Box</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<?php include("header.php");?>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="major">
									<h1>Our Music</h1>
								</header>

								<!-- Text stuff -->
									<h2>Song Database</h2>
									<p>This is our <b>comprehensive</b> list of favorite music so far, organized by genre. We hope you like these choices as much as we do!
									<hr />

								<!-- Table -->
									<h2>Our Song Collection</h2>

									<h3>Hiu Hiu's Picks</h3>
									<div class="table-wrapper">
										<table id="hiutable">
											<thead>
												<tr>
													<th>Artist</th>
													<th>Song</th>
													<th>Save</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Lana Del Rey</td>
													<td>Ultraviolence</td>
													<td><button  onclick="addRow()" class="button icon fa-download">Save to my Collection</button></td>
												</tr>
												<tr>
													<td>Hozier</td>
													<td>Take Me To Church</td>
													<td><button  onclick="addRow()" class="button icon fa-download">Save to my Collection</button></td>
												</tr>
												<tr>
													<td>Jaymes Young</td>
													<td>Habits of My Heart</td>
													<td><button  onclick="addRow()" class="button icon fa-download">Save to my Collection</button></td>
												</tr>
											</tbody>
										</table>
									</div>
									
									<h3>Choose the following songs to save:</h3>
  <form method="get">
  	<table>
  	<tbody>
    <tr><input type="checkbox" name="Artist" value="Ultraviolence by Lana Del Rey">Ultraviolence by Lana Del Rey</tr>
    <tr><input type="checkbox" name="Artist" value="Take Me to Church by Hozier">Take Me to Church by Hozier</tr>
    <tr><input type="checkbox" name="Artist" value="Habits of My Heart by Jaymes Young">Habits of My Heart by Jaymes Young</tr>
    
    <tr><input type="submit" value="Save Songs"></tr>
    </tbody>
    </table>
  </form>

									<h3>Regina's Current Playlist</h3>
										<iframe src="https://open.spotify.com/embed/user/124495412/playlist/1RGQ6p6UzoPmEd5nz2rZHd" width="100%" height="350" frameborder="0" allowtransparency="true" "&theme = white"></iframe> 
									<hr />

								<!--User Music Collection for Current Session-->
									
									<h2>Your Session Collection</h2>
										
<!-- 									    <div id="soco"> -->
<!-- 										  <table id="socoTable" class="table" > -->
<!-- 											<thead> -->
<!-- 											  <tr> -->
<!-- 												<th>Artist</th> -->
<!-- 												<th>Song</th> -->
<!-- 												<th>Date Added</th> -->
<!-- 												<th>Remove</th> -->
<!-- 											  </tr>  -->
<!-- 											</thead> -->
						
<!-- 										  </table>  -->
<!-- 										</div> -->
										<jsp:include page="savesongs.jsp"></jsp:include>
										<br/>
										<br/>
									
								<!-- Buttons -->
									<h2>Actions</h2>

									<ul class="actions">
										<li><a href="#" class="button special icon fa-search">Search for a Track</a></li>
										<li><a href="#" class="button icon fa-download">Save Entire Collection</a></li>
									</ul>

					
 
							</section>

					</div>

				<!-- Footer -->
					<?php include("footer.php");?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
			<script>
				function addRow(){
			 
				   //Table to extract data from 
				   var tableHiu = document.getElementById("hiutable");
				   //Target table to put data in
				   var tableRef = document.getElementById("socoTable");
			 
				   //Insertion
				   var newRow = tableRef.insertRow(tableRef.rows.length);
				   
				   //Remove button
				   var removeoption = "<input type=button value=' X ' onClick='delRow()'>";
				   newRow.onmouseover = function() { tableRef.clickedRowIndex = this.rowIndex; };
				  
				   var newCell = "";       
				   
					  newCell = newRow.insertCell(0);
					  newCell.innerHTML = document.getElementById("myTable").rows[tableHiu.clickedRowIndex].cells[0].innerHTML;
					  newCell.onmouseover = this.rowIndex;
					  
					  newCell = newRow.insertCell(1);
					  newCell.innerHTML = document.getElementById("myTable").rows[tableHiu.clickedRowIndex].cells[1].innerHTML;
					  newCell.onmouseover = this.rowIndex;
				}
		
				function delRow()
				{
					if (confirm("Are you sure you want to delete this song from your collection?") == true)
						document.getElementById("socoTable").deleteRow(document.getElementById("socoTable").clickedRowIndex);	
				}
			</script>

	</body>
</html>
