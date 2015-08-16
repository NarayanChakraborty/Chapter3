<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="assignment.css"/>
</head>
<body>
    <img src="king.jpg" alt="king Real State Logo" width="400px"/>
	<h4>Please sign up on our guest list and a representitive will
	will contact you soon</h4>
	<form action="view.php" method="POST">
	<table>
		<tr>
			  <td>First Name:</td>
		</tr>	
		<tr>	
			  <td><input type="text" name="first_name"></input></td>
		</tr>
		<tr>
		      <td>Last Name:</td>
		</tr>
		<tr>
			 <td><input type="text" name="last_name"></input></td>
        </tr>
		<tr> 
		      <td>Education:</td>
		</tr>
        <tr>
              <td> 
			   <input type="checkbox" name="s" value="SSC">SSC
			  </br><input type="checkbox" name="h" value="HSC">HSC
			  </br><input type="checkbox" name="g" value="Graduate">Graduate
			  </td>
         </tr>			  
        <tr>		 
		      <td>Conatact Information:
			  <input type="radio" name="etype" value="email"checked="checked">Email
			  <input type="radio" name="etype" value="mobile">Mobile
			  </td>
		</tr>
        <tr>		
			   <td><input type="text" name="contact"></input></td>
		</tr>
		<tr>
			   <td>City Where You Want to Reside</td>
		</tr>
		<tr>
			   <td>
			     <select name="reside" size="1">
				    <option value="Dhaka">Dhaka</option>
					<option value="Chitagong">Chitagong</option>
					<option value="Noakhali">Noakhali</option>
				 </select>	
			   
			   </td>
		</tr>
		<tr>
			  <td>Comments</td>
		</tr>
		<tr>
			  <td><textarea name="comments"cols="30" rows="10"></textarea></td>
		</tr>
		<tr>
			  <td><input type="submit" value="Submit information" name="submit"></td>
		</tr>
	</table>
	</form>
</body>
</html>
