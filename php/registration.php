<?php
	include('session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Registration</title>
		<link rel="stylesheet" type="text/css" href="../css/reg.css"/>
		<link rel="stylesheet" type="text/css" href="../css/headers.css"/>
		<link rel="stylesheet" type="text/css" href="../css/popup.css"/>
		<script type="text/javascript" src="../js/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="../js/main.js"></script>
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
				<p>Welcome to the Registration Page. Pick from the available courses
				by checking alongside "Pick this course" and click "Register".</p>
			</div>
			<div id="filter_course">
				<table>
					<tr>
						<th>FILTER COURSE</th>
					</tr>
					<tr>
						<td>Core</td>
						<td><input type="checkbox" /></td>
					</tr>
					<tr>
						<td>General</td>
						<td><input type="checkbox" /></td>
					</tr>
					<tr>
						<td>Elective</td>
						<td><input type="checkbox" /></td>
					</tr>
				</table>
			</div>
		 
			<div id="filter_year">
				<table>
					<tr>
						<th>FILTER YEAR</th>
					</tr>
					<tr>
						<td>First</td><td><input type="checkbox" /></td>
					</tr>
					<tr>
						<td>Second</td><td><input type="checkbox" /></td>
					</tr>
					<tr>
						<td>Third</td><td><input type="checkbox" /></td>
					</tr>
					<tr>
						<td>Fourth</td><td><input type="checkbox" /></td>
					</tr>
				</table>
			</div> 
		</div>
		
		<div id="section">
			<div class="courseinfo">
				<div class="course_pic"><p>CORE <br/>COURSE</p></div>	
				<div class="single_courseinfo">
					<p class="ccode">CSC 353</p><br/>
					<p class="cname">Web Technologies</p><br/>
					<p>It deals with HTML, CSS, JS, XML and DOM concepts</p><br/>
					<p>Credits: 3 Credits</p><br/>
					<p>Pick this course:<input type="checkbox" name="check_course" /></p>    	
				</div>		
			</div>
			<div class="courseinfo">
				<div class="course_pic"><p>CORE <br/>COURSE</p></div>	
				<div class="single_courseinfo">
					<p class="ccode">CSC 354</p><br/>
					<p class="cname">Real Time System</p><br/>
					<p>It deals with Real Time Systems, their theory and applications</p><br/>
					<p>Credits: 3 Credits</p><br/>
					<p>Pick this course:<input type="checkbox" name="check_course" /></p>    	
				</div>		
			</div>
					
			<div class="courseinfo">
				<div class="course_pic"><p>ELECTIVE<br/>COURSE</p></div>	
				<div class="single_courseinfo">
					<p class="ccode">CSC 360</p><br/>
					<p class="cname">Net Centric Computing</p><br/>
					<p>It deals with ASP technology and its successor ASP.NET</p><br/>
					<p>Credits: 3 Credits</p><br/>
					<p>Pick this course:<input type="checkbox" name="check_course" /></p>    	
				</div>	
			</div>		
			<div class="courseinfo">
				<div class="course_pic"><p>GENERAL<br/>COURSE</p></div>	
				<div class="single_courseinfo">
					<p class="ccode">MTH 104</p><br/>
					<p class="cname">Calculus and Analytical Geometry</p><br/>
					<p>It deals with Multivariate Calculus, Conic Sections and Differential Equations</p><br/>
					<p>Credits: 3 Credits</p><br/>
					<p>Pick this course:<input type="checkbox" name="check_course" /></p>    	
				</div>		
			</div>
		</div>
		<p><input id="register" type="button" value="Register" name="button_register"/></p>
		<div id="footer">
			<p>&copy;Dixit Bhatta, Anush Shrestha 2015. Powered By:<img src="../assets/uclid.png" alt="uclid"/></p>
		</div>
	</body>
</html>