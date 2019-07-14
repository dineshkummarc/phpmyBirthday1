<html>
<head>
	<title>Add Data</title>
</head>


<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['submit'])) {	
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $pname = $_POST['pname'];
    $oemail = $_POST['oemail'];
    $pemail = $_POST['pemail'];
    $mobile = $_POST['mobile'];
    $fblink = $_POST['fblink'];
    $designation = $_POST['designation'];
    $nic = $_POST['nic'];
    $indexyear = $_POST['indexyear'];
    $index = $_POST['index'];
    $food = $_POST['food'];
    $note = $_POST['note'];
    $bday = $_POST['bday'];
    $psw = $_POST['psw'];
    $rorganiser = (!empty($_POST['organiser'])) ? 1 : 0;
    $rnuser = (!empty($_POST['nuser'])) ? 1 : 0;
    $radmin =(!empty($_POST['admin'])) ? 1 : 0;
    $gstudent =(!empty($_POST['student'])) ? 1 : 0;
    $gadministrator =(!empty($_POST['administrator'])) ? 1 : 0;
    $gtacdamic =(!empty($_POST['tacdamic'])) ? 1 : 0;
    $gacdamic =(!empty($_POST['acadamic'])) ? 1 : 0;


	
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO userinfotbl(fname,sname,pname,password,oemail,pemail,mno,dob,designation,nic,indexyear,indexno,foodp,notes,link,student,adminstaff,tempacstaff,acstaff,organiser,nuser,admin) VALUES('$fname','$sname','$pname','$psw','$oemail','$pemail','$mobile','$bday','$designation','$nic','$indexyear','$index','$food','$note','$fblink','$gstudent','$gadministrator','$gtacdamic','$gacdamic','$rorganiser','$rnuser','$radmin')");
  
    if (!$result)
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
