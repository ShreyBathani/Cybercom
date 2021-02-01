<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <script src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="signup.php?load=1" name="userdata" method="POST" onsubmit="return validate()">
		<div class="container">
            <div class="heading">Sign Up</div> 
			<table>
					<tr>
						<td><label for="fname">First Name</label></td>
						<td><input type="text" name="fname" id="fname" placeholder="Enter First Name"></td>
					</tr>
					<tr>
						<td><label for="lname">Last Name</label></td>
						<td><input type="text" name="lname" id="lname" placeholder="Enter Last Name"></td>
					</tr>
					<tr>
						<td><label for="dob">Date of Birth</label></td>
						<td>
                            <select name="day">
                                <option value="" selected disabled>Date</option>
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
							<select name="month">
                                <option value="" selected disabled>Month</option>
								<option value="Jan">Jan</option>
								<option value="Feb">Feb</option>
								<option value="Mar">Mar</option>
								<option value="Apr">Apr</option>
								<option value="May">May</option>
								<option value="Jun">Jun</option>
								<option value="Jul">Jul</option>
								<option value="Aug">Aug</option>
								<option value="Sep">Sep</option>
								<option value="Oct">Oct</option>
								<option value="Nov">Nov</option>
								<option value="Dec">Dec</option>
							</select>
							<select name="year">
                                <option value="" selected disabled>Year</option>
								<option value="1990">1990</option>
								<option value="1991">1991</option>
								<option value="1992">1992</option>
								<option value="1993">1993</option>
								<option value="1994">1994</option>
								<option value="1995">1995</option>
								<option value="1996">1996</option>
								<option value="1997">1997</option>
								<option value="1998">1998</option>
								<option value="1999">1999</option>
								<option value="2000">2000</option>
								<option value="2001">2001</option>
								<option value="2002">2002</option>
								<option value="2003">2003</option>
								<option value="2004">2004</option>
								<option value="2005">2005</option>
								<option value="2006">2006</option>
								<option value="2007">2007</option>
								<option value="2008">2008</option>
								<option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								<option value="2021">2021</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="gender">Gender</label></td>
						<td><input type="radio" name="gender">Male
							<input type="radio" name="gender">Female</td>
					</tr>
					<tr>
						<td><label for="country">Country</label></td>
						<td><select id="country" name="country" >
								<option value="" disabled selected>Country</option>
								<option value="India">India</option>
								<option value="Usa">Usa</option>
								<option value="Japan">Japan</option>
							</select></td>
					</tr>
					<tr>
						<td><label for="email">Enter E-mail</label></td>
						<td><input type="email" name="email" id="email" placeholder="Enter E-mail"></td>
					</tr>
					<tr>
						<td><label for="phone">Phone Number</label></td>
						<td><input type="text" name="phone" id="phone" placeholder="Enter Phone"></td>
					</tr>
					<tr>
						<td><label for="password">Password</label></td>
						<td><input type="password" name="password" id="password"></td>
					</tr>
					<tr>
						<td><label for="confirmpass">Confirm Password</label></td>
						<td><input type="password" name="confirmpass" id="confirmpass"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="checkbox" name="agree">I accept this agrement</td>
					</tr>
			</table>
			<span>
				<input type="reset" name="reset" value="Cancel" class="reset">
				<input type="submit" name="submit" value="Submit" class="submit">
			</span>
		</div>
	</form>
	<?php
		if(isset($_GET['load'])){
            echo "<h2>Your given values are :</h2>";
			echo "<p><b>First Name: </b>". @$_POST['fname']."</p>";
			echo "<p><b>Last Name: </b>". @$_POST['lname']."</p>";
			echo "<p><b>Date of Birth: </b>". @$_POST['day'] .' '. @$_POST['month'] .' '. @$_POST['year']."</p>";
			echo "<p><b>Gender: </b>". @$_POST['gender']."</p>";
			echo "<p><b>Country: </b>". @$_POST['country']."</p>";
            echo "<p><b>Email: </b>". @$_POST['email']."</p>";
            echo "<p><b>Phone: </b>". @$_POST['phone']."</p>";
            echo "<p><b>Password: </b>". @$_POST['password']."</p>"; 
        }
    ?>
</body>
</html>