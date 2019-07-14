<?php
//including the database connection file
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM userinfotbl ORDER BY id DESC");
$result2 = mysqli_query($mysqli, "SELECT * FROM treattbl ORDER BY id DESC");

?>

<html>
<head>	
<h1>Dashboard</h1>
                  <p>User info</p>
                  <hr>


	<title>Dashboard</title>
</head>

<body>
<div>
<label for="Group"><b>Group</b></label>
        <select name = "group">
              <option>--Select Group--</option>
              <option value="student">Student</option>
              <option value="administrator">Administrative Staff</option>
              <option value="acadamicstaff">Acadamic Staff</option>
              <option value="tacstaff">Temporary Acadamic Staff</option>

            </select>


<label for="time"><b>Time</b></label>
        <select name = "time">
              <option>--Timeline--</option>
              <option value="today">Today</option>
              <option value="tomorrow">Tomorrow</option>
              <option value="nextweek">Next Week</option>
              <option value="nextmonth">Next Month</option>
              <option value="yesterday">Yesterday</option>
              <option value="lastweek">Last Week</option>

            </select>



            <button type="submit" name = "gobtn" class="gobtn">Go</button>
</div>       

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>First Name</td>
        <td>Second Name</td>
        <td>Preferred Name</td>
        <td>Official Email</td>
        <td>Preferred Email</td>
        <td>Mobile Number</td>
        <td>FB Link</td>
        <td>Designation</td>
        <td>NIC</td>
        <td>Index Year</td>
        <td>Index No</td>
        <td>Food Preferrence</td>
        <td>Notes</td>
        <td>Birthday</td>
        <td>Student</td>
        <td>Administrative Staff</td>
        <td>Acadamic Staff</td>
        <td>Temporary Acadamic Staff</td>
        <td>Normal User</td>
        <td>Organiser</td>
        <td>Admin</td>
        <td>Update</td>
        
	</tr>
    <?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
        echo "<td>".$res['fname']."</td>";
        echo "<td>".$res['sname']."</td>";
        echo "<td>".$res['pname']."</td>";
        echo "<td>".$res['oemail']."</td>";
        echo "<td>".$res['pemail']."</td>";
        echo "<td>".$res['mno']."</td>";
        echo "<td>".$res['link']."</td>";
        echo "<td>".$res['designation']."</td>";
        echo "<td>".$res['nic']."</td>";
        echo "<td>".$res['indexyear']."</td>";
        echo "<td>".$res['indexno']."</td>";
        echo "<td>".$res['foodp']."</td>";
        echo "<td>".$res['notes']."</td>";
        echo "<td>".$res['dob']."</td>";
        echo "<td>".$res['student']."</td>";
        echo "<td>".$res['adminstaff']."</td>";
        echo "<td>".$res['acstaff']."</td>";
        echo "<td>".$res['tempacstaff']."</td>";
        echo "<td>".$res['nuser']."</td>";
        echo "<td>".$res['organiser']."</td>";
        echo "<td>".$res['admin']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"addtreat.php?id=$res[id]\">Treat</a></td>";		
    }
     
	?>
    </table>
    <hr>
                  <p>User Treat info</p>
            <hr>
            
            <table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Person Name</td>
        <td>Treat Date</td>
        <td>Treat Time</td>
        <td>Time Zone</td>
        <td>Venue</td>
        <td>Notes</td>
        <td>Status</td>
        <td>Update</td>

        
</tr>

<?php

while($res2 = mysqli_fetch_array($result2)){

  echo "<tr>";
  echo "<td>".$res2['fname']."</td>";
  echo "<td>".$res2['tdate']."</td>";
  echo "<td>".$res2['ttime']."</td>";
  echo "<td>".$res2['tzone']."</td>";
  echo "<td>".$res2['tvenue']."</td>";
  echo "<td>".$res2['tnote']."</td>";
  echo "<td>".$res2['tstatus']."</td>";
  echo "<td><a href=\"edittreat.php?id=$res2[id]\">Edit</a> | <a href=\"deletetreat.php?id=$res2[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";





}


?>
   </table>

</body>
</html>
