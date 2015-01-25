<?php
	include('session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Instructor</title>
		<link rel="stylesheet" type="text/css" href="../css/instructor.css"/>
		<link rel="stylesheet" type="text/css" href="../css/headers.css"/>
		<link rel="stylesheet" type="text/css" href="../css/popup.css"/>
		<script type="text/javascript" src="../js/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="../js/main.js"></script>
		<script type="text/javascript" src="../js/summary.js"></script>
	</head>

	<body>
		<div id="header">	
			<div id="logo">
				<img src="../assets/crs logo.png" alt="CRS Logo"/>
			</div>
			<h5>Your one-step solution to manage Course Registrations and view Student Enrollment</h5>
			<ul class="myMenu">
				<li><a href="#"><?php echo $login_session; ?></a>
					<ul>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
				<li><a href="courses.php">Courses</a></li>
				<li><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Support</a></li>
			</ul>
		</div>
		<div id="light" class="white_content">
			All pages are self-descriptive.<br/><br/>
			For further support contact us at:<br/><br/>
			silentflutes@gmail.com<br/>
			ucliddixit@gmail.com<br/><br/>
			<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a>
		</div>
		<div id="fade" class="black_overlay"></div>
		<div id="aside">
			<div id="info">
				<p>Welcome to the Instructor Page. Here you can see the list of candidates enrolled in your courses.
				You can see the basic details of each student and the overall class size, and print a summary.</p>
			</div>
			<div id="select_course">
				<table>
					<tr>
						<th> SELECT COURSE</th>
					</tr>
					<tr>	
						<td>
							<select id="course">
								<option value="crypt">Cryptography</option>
							</select>
						</td>
					</tr>  
				</table>
			</div>
	 
			<div id="filter_year">
				<table>
					<tr>
						<th>FILTER YEAR</th>
					</tr>
					<tr>
						<td>First</td><td><input class="check" type="checkbox" /></td>
					</tr>
					<tr>
						<td>Second</td><td><input class="check" type="checkbox" /></td>
					</tr>
					<tr>
						<td>Third</td><td><input class="check" type="checkbox" /></td>
					</tr>
					<tr>
						<td>Fourth</td><td><input class="check" type="checkbox" /></td>
					</tr>
				</table>
			</div>  
		</div>
		
		<div id = "section">
			<div id="record_info">      
				<table id="record_table">  
					<tr id="first_row">
						<th>Name</th>
						<th>Semester</th>
						<th>Courses taken</th>   
					</tr>
					<tr >
						<td>Anush shrestha</td>  
						<td>6th</td>
						<td>4</td>
					</tr>
					<tr >
						<td>Anush shrestha</td>  
						<td>6th</td>
						<td>4</td>
					</tr>
					
					 <tr >
						<td>Anush shrestha</td>  
						<td>6th</td>
						<td>4</td>
					</tr>   
					<tr >
						<td>Anush shrestha</td>  
						<td>6th</td>
						<td>4</td>
					</tr>   
					<tr >
						<td>Anush shrestha</td>  
						<td>6th</td>
						<td>4</td>
					</tr>   <tr >
						<td>Anush shrestha</td>  
						<td>6th</td>
						<td>4</td>
					</tr>   
					<tr >
						<td>Anush shrestha</td>  
						<td>6th</td>
						<td>4</td>
					</tr>
					<tr >
						<td>Anush shrestha</td>  
						<td>6th</td>
						<td>4</td>
					</tr>
					
					 <tr >
						<td>Anush shrestha</td>  
						<td>6th</td>
						<td>4</td>
					</tr>   
					<tr >
						<td>Anush shrestha</td>  
						<td>6th</td>
						<td>4</td>
					</tr>   
					<tr >
						<td>Anush shrestha</td>  
						<td>6th</td>
						<td>4</td>
					</tr>   <tr >
						<td>Anush shrestha</td>  
						<td>6th</td>
						<td>4</td>
					</tr> 
				</table>
				<p id= "total">Total Enrollment:12</p>
			</div>			
		</div>
		<p><input id="summary" type="button" value="Print Summary" onClick="printDiv('section')" /></p>
		<div id="footer">
			<p>&copy;Dixit Bhatta, Anush Shrestha 2015. Powered By:<img src="../assets/uclid.png" alt="uclid"/></p>
		</div>
	</body>
</html>