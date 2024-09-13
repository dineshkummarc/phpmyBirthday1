<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

    $id = $_POST['id'];
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
	
	
	
		$result = mysqli_query($mysqli, "UPDATE userinfotbl SET fname='$fname',sname='$sname',pname='$pname',oemail='$oemail',pemail='$pemail',mno='$mobile',link='$fblink',designation='$designation',nic='$nic',indexyear='$indexyear',indexno='$index',foodp='$food',notes='$note',dob='$bday',password='$psw',organiser='$rorganiser',nuser='$rnuser',admin='$radmin',student='$gstudent',adminstaff='$gadministrator',tempacstaff='$gtacadamic',acstaff='$gacadamic'  WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: dashboard.php");
	
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM userinfotbl WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$fname = $res['fname'];
	$sname = $res['sname'];
    $pname = $res['pname'];
    $oemail = $res['oemail'];
    $pemail = $res['pemail'];
    $mobile = $res['mno'];
    $fblink = $res['link'];
    $designation = $res['designation'];
    $nic = $res['nic'];
    $indexyear = $res['indexyear'];
    $index = $res['indexno'];
    $food = $res['foodp'];
    $note = $res['notes'];
    $bday = $res['dob'];
    $psw = $res['password'];
    $rorganiser = $res['organiser'];
    $rnuser = $res['nuser'];
    $radmin = $res['admin'];
    $gstudent = $res['student'];
    $gtacadamic = $res['tempacstaff'];
    $gadministrator  = $res['adminstaff'];
    $gacadamic = $res['acstaff'];
    

}
?>
<html>
<head>	
<h1>Edit Entry</h1>
                  <p>Please fill in this form to edit an account.</p>
                  <hr>

    <title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="fname" value="<?php echo $fname;?>"></td>
            </tr>
            <tr> 
				<td>Second Name</td>
				<td><input type="text" name="sname" value="<?php echo $sname;?>"></td>
            </tr>
            
            <tr> 
				<td>Preferred Name</td>
				<td><input type="text" name="pname" value="<?php echo $pname;?>"></td>
            </tr>
            <tr> 
				<td>Official Email</td>
				<td><input type="text" name="oemail" value="<?php echo $oemail;?>"></td>
			</tr>
            <tr> 
				<td>Preferred Email</td>
				<td><input type="text" name="pemail" value="<?php echo $pemail;?>"></td>
            </tr>
            <tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile" value="<?php echo $mobile;?>"></td>
			</tr>
            <tr> 
				<td>Fb Link</td>
				<td><input type="text" name="fblink" value="<?php echo $fblink;?>"></td>
            </tr>
            <tr> 
				<td>Designation</td>
				<td><input type="text" name="designation" value="<?php echo $designation;?>"></td>
            </tr>
            <tr> 
				<td>Index Year</td>
				<td><input type="text" name="indexyear" value="<?php echo $indexyear;?>"></td>
			</tr>
            <tr> 
				<td>Index No</td>
				<td><input type="text" name="indexno" value="<?php echo $index;?>"></td>
            </tr>
            
            <tr> 
				<td>Food Preferred</td>
				<td><input type="text" name="food" value="<?php echo $food;?>"></td>
			</tr>
            <tr> 
				<td>Note</td>
				<td><input type="text" name="note" value="<?php echo $note;?>"></td>
            </tr>
            
            <tr> 
				<td>Birth Date</td>
				<td><input type="date" name="bday" value="<?php echo $bday;?>"></td>
			</tr>
            <tr> 
				<td>NIC</td>
                <td><input type="text" name="nic" value="<?php echo $nic;?>"></td>
            </tr>
            <tr> 
				<td>Password</td>
                <td><input type="text" name="psw" value="<?php echo $psw;?>"></td>
            </tr>
            <tr> 
				<td>Role</td>
                <td><input type="radio" name="role" value="<?php echo $rorganiser;?>" <?php if($rorganiser == '1'){echo 'checked';}?>>Organiser</td>
                <td><input type="radio" name="role" value="<?php echo $rnuser;?>" <?php if($rnuser == '1'){echo 'checked';}?>>Normal User</td>
                <td><input type="radio" name="role" value="<?php echo $radmin;?>" <?php if($radmin == '1'){echo 'checked';}?>>admin</td>
            </tr>
            <tr> 
				<td>Group</td>
                <td><input type="radio" name="authgroup" value="<?php echo $gstudent;?>" <?php if($gstudent == '1'){echo 'checked';}?>>Student</td>
                <td><input type="radio" name="authgroup" value="<?php echo $gadministrator;?>" <?php if($gadministrator == '1'){echo 'checked';}?>>Administrative Staff</td>
                <td><input type="radio" name="authgroup" value="<?php echo $gtacadamic;?>" <?php if($gtacadamic == '1'){echo 'checked';}?>>Temporary Acadamic Staff</td>
                <td><input type="radio" name="authgroup" value="<?php echo $gacadamic;?>" <?php if($gacadamic == '1'){echo 'checked';}?>>Acadamic Staff</td>
            </tr>


        
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
