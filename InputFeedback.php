<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		Input FeedBack
	</title>
</head>
<body>
	<div>
		<header>
			<h1>
				Employee Information Manager
			</h1>
		</header>
		<input type="button" name="" value="View Feedback">
		<a href="InputFeedback.html">Input Feedback</a>
		<a href="Contact.html">Contact Us</a>
	</div>
<form name="Employee's Name" method="" action="">
	<h4>Employee's Name</h4>
	<input type="text" name="" placeholder="First">	
	<input type="text" name="" placeholder="Last">
	<br>
	<h4>Employee's Hire Date</h4>
	<select name="Month">
        	<option value="Jan">Jan</option>
        	<option value="Feb">Feb</option>
        	<option value="Mar">Mar</option>
        	<option value="Apr">Apr</option>
        	<option value="May">May</option>
        	<option value="June">June</option>
        	<option value="July">July</option>
        	<option value="Aug">Aug</option>
        	<option value="Sept">Sept</option>
        	<option value="Oct">Oct</option>
        	<option value="Nov">Nov</option>
        	<option value="Dec">Dec</option>
    </select>
    <select name="Year">
        	<option value="1990">1990</option>
        	<option value="89">89</option>
        	<option value="88">88</option>
        	<option value="87">87</option>
        	<option value="86">86</option>
        	<option value="85">85</option>
        	<option value="84">84</option>
    </select>
    <input type="button" name="" value="Submit">
    <br>
    <h4>Employee's Title</h4>
    <input type="text" name="">
    <br>
    <h4>Employee's Department</h4>
    <select name="Department">
    	<option value="Marketing">Marketing</option>
    	<option value="HR">HR</option>
    	<option value="Sales">Sales</option>
    </select>
    <br>
    <h4>Performance Evaluation</h4>
    <table border="1px" width="40%">
    	<tr>
    		<th></th>
    	    <th>Very good</th>
    	    <th>Good</th>
    	    <th>Fair</th>
    	    <th>Poor</th>
    	    <th>Very poor</th>
    	</tr>
    	<tr>
    		<td>Attendance</td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    	</tr>
    	<tr>
    		<td>Quality of work</td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    	</tr>
    	<tr>
    		<td>Quantity of work</td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    	</tr>
    	<tr>
    		<td>Attitude</td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    	</tr>
    	<tr>
    		<td>Dependability</td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    	</tr>
    	<tr>
    		<td>Work ethic</td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    		<td><input type="radio" name="Per" value=""/></td>
    	</tr>
    </table>
    <br>
    <h4>Overall,I would like to rank this employee's performance as:</h4>
    <input type="radio" name="Per" value="Very good"/>Very good
    <input type="radio" name="Per" value="Good"/>Good
    <input type="radio" name="Per" value="Fair"/>Fair
    <input type="radio" name="Per" value="Poor"/>Poor
    <input type="radio" name="Per" value="Very Poor"/>Very Poor
    <br>
    <h4>Please go into more detail on why you choose this ranking</h4>
    <textarea rows="3" cols="30"></textarea>
    <h4>Supervisor's Name</h4>
    <input type="text" name="" placeholder="First">	
	<input type="text" name="" placeholder="Last">
	<h4>Supervisor's Signature</h4>
	<textarea rows="3" cols="30" placeholder="_______________________________"></textarea><br>
	<sub>Use your mouse or finger to draw your signature above</sub>
</form>
</body>
</html>