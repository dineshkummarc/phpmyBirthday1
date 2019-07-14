<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $tdate = $_POST['tdate'];
    $ttime = $_POST['ttime'];
    $tzone = $_POST['tzone'];
    $tvenue = $_POST['tvenue'];
    $tnote = $_POST['tnote'];
    $tstatus= $_POST['tstatus'];
   
    $result2 = mysqli_query($mysqli, "UPDATE treattbl SET fname='$fname',tdate='$tdate',ttime='$ttime',tzone='$tzone',tvenue='$tvenue',tnote='$tnote',tstatus='$tstatus' WHERE id=$id");
  
//redirectig to the display page. In our case, it is index.php
header("Location: dashboard.php");


}
?>


<?php

$id = $_GET['id'];

//selecting data associated with this particular id
$result2 = mysqli_query($mysqli, "SELECT * FROM treattbl WHERE id=$id");

while($res2 = mysqli_fetch_array($result2))
{
	$fname = $res2['fname'];
	$tdate = $res2['tdate'];
    $ttime = $res2['ttime'];
    $tzone = $res2['tzone'];
    $tvenue = $res2['tvenue'];
    $tnote = $res2['tnote'];
    $tstatus = $res2['tstatus'];

}
?>

<html>
<head>	
<h1>Edit Treat</h1>
                  <p>Please fill in this form to edit a treat.</p>
                  <hr>

    <title>Edit Data</title>
</head>

<body>
	<a href="dashboard.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edittreat.php">
		<table border="0">
			<tr> 
				<td>Person Name</td>
				<td><input type="text" name="fname" value="<?php echo $fname;?>"></td>
            </tr>
            <tr> 
				<td>Treat Date</td>
				<td><input type="date" name="tdate" value="<?php echo $tdate;?>"></td>
            </tr>
            
            <tr> 
				<td>Treat Time</td>
				<td><input type="text" name="ttime" value="<?php echo $ttime;?>"></td>
            </tr>
            <tr> 
				<td>Time Zone</td>
				<td><input type="text" name="tzone" value="<?php echo $tzone;?>"></td>
			</tr>
            <tr> 
				<td>Treat Venue</td>
				<td><input type="text" name="tvenue" value="<?php echo $tvenue;?>"></td>
            </tr>
            <tr> 
				<td>Treat Notes</td>
				<td><input type="text" name="tnote" value="<?php echo $tnote;?>"></td>
            </tr>
            <tr> 
				<td>Treat Status</td>
				<td><input type="text" name="tstatus" value="<?php echo $tstatus;?>"></td>
            </tr>
            
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
                </table>
    </form>
</body>
</html>