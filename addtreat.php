<?php



?>
<html>
<head>

<h1>Add Treat</h1>
                  <p>Please fill in this form to create a treat</p>
                  <hr>
    <title>Add Treat</title>
</head>
<body>

<form name = "form2" method = "post" action = "addtreat.php">
<br>
                  <label for="fname"><b>Person Name</b></label>
                  <input type="text" placeholder="Enter Person Name" name="fname" >
                </br>
                <br>
                <label for="tdate"><b>Treat Date</b></label>
                <input type="date" placeholder="Enter Treate Date" name="tdate" >
              </br>
              <br>
                  <label for="ttime"><b>Treat Time</b></label>
                  <select name = "ttime">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <select name = "tzone">
              <option value="am">AM</option>
              <option value="pm">PM</option>
            </select>
                </br>
                <br>
                <label for="tvenue"><b>Venue</b></label>
                <input type="text" placeholder="Enter Venue" name="tvenue" >
              </br>    
              <br>
                <label for="tnote"><b>Treat Notes</b></label>
                <input type="text" placeholder="Enter Treate Notes" name="tnote" >
              </br>

              <br>
                <label for="tstatus"><b>Treat Status</b></label>
                <select name = "tstatus">
              <option value="pending">Pending</option>
              <option value="ongoing">Ongoing</option>
              <option value="cancled">Cancled</option>
              <option value="celebrated">Celebrated</option>
</select>
               </br>
               <button type="submit" name = "submit" class="treatbtn">Add Treat</button>

</form>

<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['submit']))
{	
    $fname = $_POST['fname'];
    $tdate = $_POST['tdate'];
    $ttime = $_POST['ttime'];
    $tzone = $_POST['tzone'];
    $tvenue = $_POST['tvenue'];
    $tnote = $_POST['tnote'];
    $tstatus= $_POST['tstatus'];
   
    $result2 = mysqli_query($mysqli, "INSERT INTO treattbl (fname,tdate,ttime,tzone,tvenue,tnote,tstatus) VALUES ('$fname','$tdate','$ttime','$tzone','$tvenue','$tnote','$tstatus')");
  
    if (!$result2)
    {
      exit("Error: failed to execute query. " . mysqli_error($mysqli));

    }
    
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='dashboard.php'>View Result</a>";

  }

?>


</body>


</html>

